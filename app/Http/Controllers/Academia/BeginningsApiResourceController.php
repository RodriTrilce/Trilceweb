<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client as ClientGuzzle;
use Symfony\Component\DomCrawler\Crawler;
use Cache;

class BeginningsApiResourceController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->source = new \stdClass;
      $this->source->base   = 'http://app.trilce.edu.pe';
      $this->source->uni    = '/informacion-ciclos-uni/registro/combo.php';
      $this->source->sm     = '/informacion-ciclos-sm/registro/combo.php';
      $this->source->pucp   = '/informacion-ciclos-cat/registro/combo.php';
    }

    /**
     * Index show
     *
     * @return void
     */
    public function index(Request $request)
    {
      $data = $this->makeResponse(
                    $request->university,
                    $request->combo,
                    $request->venue,
                    $request->cycle,
                    $request->turn);

      return collect($data);
    }

    /**
     * Make url for request
     *
     * @return object
     */
    private function makeSource($university)
    {
      return $this->source->{$university};
    }

    private function makeRequest($url,
      $data)
    {
      $client = new ClientGuzzle(['base_uri' => $this->source->base]);
      $response = $client->post($url, [
        'body' => $data,
        'headers' => [
          'Content-Type' => 'application/x-www-form-urlencoded',
        ]
      ]);

      $r = (string) $response->getBody();
      return $this->makeClear($r);
    }

    private function makeClear($string)
    {
      $string = preg_replace('~>\s+<~', '><', $string);
      $string = preg_replace("#tbody class='(.*?)'>#", "tbody class='$1'><tr>", $string);
      $string = str_replace('</tr>', '</tr><tr>', $string);
      $string = str_replace('<tr><tr>', '<tr>', $string);
      $string = str_replace('<tr></tbody>', '</tbody>', $string);
      $string = str_replace('</tr></tr>', '</tr>', $string);
      $string = str_replace('<tr></thead>', '</thead>', $string);

      return $string;
    }

    /**
     * Get dom from url request and parse
     *
     * @return array
     */
    private function makeResponse($university, $combo, $venue=0, $cycle=0, $turn=0)
    {
      switch ($combo) {
        case 'cycle':
          $data = "intidlocal1={$venue}&intidciclo1={$cycle}&intidturno1={$turn}";
          break;

        case 'venue':
          $data = "intidlocal={$venue}&intidciclol={$cycle}&intidturno={$turn}";
          break;

        case 'turn':
          $data = "intidlocal2={$venue}&intidciclo2={$cycle}&intidturno2={$turn}";
          break;
      }


        $crawler = new Crawler($this->makeRequest($this->makeSource($university), $data));
        $buffer = $crawler->filter('table')->each(function ($node) use ($venue){

          $_type = $node->filter('thead')->each(function($n){
            return $n->filter('tr div')->getNode(0)->textContent;
          });

          $_head = $node->filter('thead th')->each(function($v){
            return $v->getNode(0)->textContent;
          });

          $temp = $node->filter('tbody tr')->each(function($b) use ($_type, $_head){
            return $b->children()->each(function($c, $i) use ($_head){



              if((strpos($_head[$i], 'Pago')) !== false){
                return 'S/' . $c->getNode(0)->textContent;
              }

              if($_head[$i] == 'Local'){
                
                  switch ($c->getNode(0)->textContent) {
                    case 'Torrico':
                        return '-';
                      break;
                  }            
                
              }

              
                      


              /*if($_head[$i] == 'Inicio'){
                $newformat = date('Y-m-d', strtotime($c->getNode(0)->textContent));
                return $newformat;
              }else{*/


                return str_replace(
                  ['Torrico', 'VES'],
                  ['Cercado de Lima', 'Villa El Salvador'],
                  $c->getNode(0)->textContent);
              //}

            //return $c->getNode(0)->textContent;


            });
          });

          $_body[$_type[0]] = ($temp);


          $money = 0;
          for ($i=0; $i <count($_head); $i++) { 
            if($venue == "20" || $venue == "23")
            {

              if($_head[$i] == 'Pago Único'){
                $money = $i;
                $_head[$i] = '*Inversión por ciclo'; 
              }

            }else{
              switch ($_head[$i]) {
                case 'Pago Mensual':
                    $money = $i;
                    $_head[$i] = 'Inversión Mensual';
                  break;

                case 'Pago Único':
                $money = $i;
                $_head[$i] = 'Inversión';
                  break;
              }
            }
          }
          $_body['head'] = $_head;


          return $_body;
        });


      return $buffer;
    }
}

<?php

namespace App\Http\Controllers\Academia\Enrollment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Artisaninweb\SoapWrapper\SoapWrapper;

class TestController extends Controller
{

    /**
      * @var SoapWrapper
      */
     protected $soapWrapper;

     /**
      * SoapController constructor.
      *
      * @param SoapWrapper $soapWrapper
      */
     public function __construct(SoapWrapper $soapWrapper)
     {
       $this->soapWrapper = $soapWrapper;
     }

     /**
      * Use the SoapWrapper
      */
     public function show()
     {

       $this->soapWrapper->add('ClientePublicoServicio', function ($service) {
         $service
           ->wsdl('http://10.107.0.253:20169/General/ClientePublicoServicio.svc?wsdl')
           ->trace(true);
       });

       try {
         // Without classmap
         $response = $this->soapWrapper->call('ClientePublicoServicio.FA_TipoServicio', [
           'ANIO_ACADEMICO' => "2019"
         ]);

         print_r($response);

       } catch (\Exception $e) {

         dd($e);

       }


/*
       // With classmap
       $response = $this->soapWrapper->call('Currency.GetConversionAmount', [
         new GetConversionAmount('USD', 'EUR', '2014-06-05', '1000')
       ]);

       var_dump($response);
       */
       exit;
     }
}

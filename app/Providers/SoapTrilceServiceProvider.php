<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \SoapClient;

class SoapTrilceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function _client()
    {
        $opts = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ];

        $context    = stream_context_create($opts);
        $wsdl       = file_get_contents("http://10.107.0.253:20169/General/ClientePublicoServicio.svc?wsdl");

        try{
            $this->client = new \SoapClient($wsdl, [
                'stream_context' => $context,
                'trace' => 1,
                'keep_alive' => true,
                'connection_timeout' => 5000,
                'cache_wsdl' => WSDL_CACHE_NONE,
                'compression'   => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
            ]);
            
            var_dump($this->client->__getFunctions());

            var_dump($this->client->__getLastRequest());
            var_dump($this->client->__getLastResponse());
            
            return $this->client;
        
        }catch ( \Exception $e) {
            Log::info('Caught Exception in client'. $e->getMessage());
        }
    }

    
}

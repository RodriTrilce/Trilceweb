<?php
    try {
        //Reuso de conexiones
        header('Connection', 'keep-alive');

        //No almacenamiento en caché
        header("Cache-Control: no-cache, no-store, must-revalidate, max-age=0, s-maxage=0");
        header('Pragma: no-cache');
        header('Expires: -1');
        header('Etag: '. uniqid()); 

        //Tipo de envío comprimido
        header('Transfer-Encoding: gzip');
        header('Content-Encoding', 'gzip'); 
        header('Content-Type: text/html; charset=utf-8');
        header('Vary: Accept-Encoding');

        //Restricciones de seguridad
        header('X-Frame-Options: SAMEORIGIN');
        header('X-Content-Type-Options: nosniff');
        header('X-XSS-Protection: 1; mode=block');
        header('Strict-Transport-Security: max-age=7884000');

        header_remove('X-Powered-By');
        header_remove('Server');

        session_cache_limiter('');
    } catch (Exception $e) {
        date_default_timezone_set("America/Lima");//Zona horaria de Peru
        $tiempoLog = date("d-m-Y (H:i:s)");
        $file = fopen("log.txt", "a");
        fwrite($file, $tiempoLog . $e->getMessage() . PHP_EOL);
        fclose($file);
    }
?>

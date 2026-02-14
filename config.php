<?php
    $folderPath = dirname($_SERVER['SCRIPT_NAME']);
    $urlPath = strtok($_SERVER["REQUEST_URI"], '?');
    $url = substr($urlPath,strlen($folderPath));
    define('EMAIL_SEND','t.k@supo-tsuhash1.jp'); // Cambia esto por tu correo real
    define('TIENDA_NAME_1','合同会社ジンドウカン');
    define('TIENDA_NAME_2','合同会社ジンドウカン');
    define('TIENDA_NAME_3','合同会社ジンドウカン');

    // echo '<pre> folderPath: ' , var_dump($folderPath) , '</pre>';
    // echo '<pre> urlPath: ' , var_dump($urlPath) , '</pre>';
    // echo '<pre> url: ' , var_dump($url) , '</pre>';
    // echo '<pre>  folderPath / return: ' , var_dump($folderPath == '/') , '</pre>';
    if( ($folderPath == '/') === false){
        define('URL_PATH', $folderPath.'/');
        // echo '<pre>  URL_PATH: ' , var_dump(URL_PATH) , '</pre>';
        $replacePath=str_replace(URL_PATH,'', $url);
        // echo '<pre>  str_replace url remplazo URL_PATH X VACIO return: ' , var_dump($replacePath) , '</pre>';
        define('URL', $replacePath );
    }else{
        define('URL_PATH',$folderPath);
        // echo '<pre>  URL_PATH: ' , var_dump(URL_PATH) , '</pre>';
        define('URL', '/'.$url);
    }
    // echo '<pre>  URL: ' , var_dump(URL) , '</pre>';
?>
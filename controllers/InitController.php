<?php
class InitController {
    public function draw() {
        $filePath = __DIR__ . '/../const/products.json';
        $emptyArray = [];
        $jsonContent = json_encode($emptyArray, JSON_PRETTY_PRINT);
        if (file_put_contents($filePath, $jsonContent) === false) {
            http_response_code(500);
            echo "Error:no se pudo inicializar";
            return;
        }
        http_response_code(200);
        echo "Inicializado correctamente";
    }
}
?>
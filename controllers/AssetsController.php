<?php
class AssetsController 
{
    public function draw()
    {
        // Verifica que se haya enviado la URL
        if (!isset($_GET['url'])) {
            http_response_code(400);
            exit("Error: Parámetro 'url' no proporcionado.");
        }

        $url = $_GET['url'];
        // Validación del dominio
        $parsedUrl = parse_url($url);
        $host = $parsedUrl['host'] ?? '';

        // if (stripos($host, 'houaaa.com') === false) {
        //     http_response_code(403);
        //     exit("Error: Solo se permite descargar archivos desde el dominio houaaa.com");
        // }

        // Crear directorio de descargas si no existe
        $downloadDir = __DIR__ . '/../assets/downloads';
        
        if (!file_exists($downloadDir)) {
            if (!mkdir($downloadDir, 0755, true)) {
                http_response_code(500);
                exit("Error: No se pudo crear el directorio de descargas.");
            }
        }
        
        // Verificar permisos de escritura en el directorio
        if (!is_writable($downloadDir)) {
            http_response_code(500);
            exit("Error: El directorio de descargas no tiene permisos de escritura.");
        }

        // Obtener nombre del archivo
        $pathParts = explode('/', parse_url($url)['path']);
        $filename = end($pathParts);
        
        if (empty($filename)) {
            http_response_code(400);
            exit("Error: No se pudo determinar el nombre del archivo.");
        }

        $localPath = $downloadDir . '/' . $filename;

        // Descargar el archivo si no existe localmente
        if (!file_exists($localPath)) {
            // Configurar contexto para ignorar verificación de certificados SSL
            $context = stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
                'https' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ]
            ]);
            
            $fileContent = @file_get_contents($url, false, $context);
            if ($fileContent === false) {
                http_response_code(500);
                exit("Error: No se pudo descargar el archivo desde la URL proporcionada.");
            }

            if (file_put_contents($localPath, $fileContent) === false) {
                http_response_code(500);
                exit("Error: No se pudo guardar el archivo en el servidor.");
            }
            
            // Verificar que el archivo se haya guardado correctamente
            if (!file_exists($localPath)) {
                http_response_code(500);
                exit("Error: El archivo no se guardó correctamente.");
            }
        }

        // Determinar el tipo MIME basado en la extensión del archivo
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $contentType = 'application/octet-stream'; // Valor predeterminado
        $inline = false; // Por defecto, descargar el archivo
        
        // Asignar tipos MIME comunes
        $mimeTypes = [
            // Imágenes
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'webp' => 'image/webp',
            'ico' => 'image/x-icon',
            // Archivos web
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'html' => 'text/html',
            'htm' => 'text/html',
            'xml' => 'application/xml',
            'txt' => 'text/plain',
            // Fuentes
            'ttf' => 'font/ttf',
            'otf' => 'font/otf',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'eot' => 'application/vnd.ms-fontobject'
        ];
        
        // Extensiones que deben mostrarse en línea en lugar de descargarse
        $inlineExtensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'ico', 'css', 'js', 'html', 'htm', 'txt'];
        
        if (isset($mimeTypes[strtolower($extension)])) {
            $contentType = $mimeTypes[strtolower($extension)];
        }
        
        // Determinar si el archivo debe mostrarse en línea
        if (in_array(strtolower($extension), $inlineExtensions)) {
            $inline = true;
        }
        
        // Configurar las cabeceras HTTP según el tipo de archivo
        header('Content-Type: ' . $contentType);
        header('Content-Length: ' . filesize($localPath));
        
        if (!$inline) {
            header('Content-Disposition: attachment; filename="' . $filename . '"');
        }
        
        readfile($localPath);
        exit; // Importante: terminar la ejecución después de enviar el archivo
    }
}
?>

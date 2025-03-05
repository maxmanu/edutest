<?php
// Archivo PHP de origen
$archivo = 'index.php';

// Nombre del nuevo archivo donde se guardarán los cambios
$nuevo_archivo = 'index-produccion.html';

// Leer el contenido del archivo original
$codigo_php = file_get_contents($archivo);

if ($codigo_php === false) {
  die("Error al leer el archivo.");
}

// Definir los patrones y sus respectivos reemplazos
$patrones = [
  '/src=["\']img\//i' => 'src="/courses/25001I/document/images/', // Reemplaza rutas de imágenes
  "/url\\(['\"]fonts\\//i" => "url('/courses/25001I/document/fonts/" // Reemplaza rutas de fuentes
];

// Aplicar los reemplazos en el contenido del archivo
$codigo_modificado = preg_replace(array_keys($patrones), array_values($patrones), $codigo_php);

// Guardar el contenido modificado en un nuevo archivo
if (file_put_contents($nuevo_archivo, $codigo_modificado) !== false) {
  echo "Las rutas han sido actualizadas y guardadas en '$nuevo_archivo'.";
} else {
  echo "Error al guardar los cambios en el nuevo archivo.";
}

<?php
$input = json_decode(file_get_contents("php://input"), true);

echo "Hola " . $input['nombre'] . " cómo estás?";



?>
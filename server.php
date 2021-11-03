<?php 

$people = array(
    "nombre"=>"Andres",
    "Edad"=>15,
    "direccion"=>array(
                    "calle"=>"nombre de calle", 
                    "CP"=>55339
                )
);

echo json_encode($people);

//$input = json_decode(file_get_contents("php://input"), true);

?>
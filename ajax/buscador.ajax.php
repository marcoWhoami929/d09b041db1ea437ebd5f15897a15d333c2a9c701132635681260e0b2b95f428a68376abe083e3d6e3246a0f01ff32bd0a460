<?php

include_once "../models/conexion.php";

if (isset($_POST['keyword'])) {

    $output = "";
    $keyword = $_POST['keyword'];

    $query = "SELECT nombre,urlAmigable FROM urls WHERE nombre LIKE '%$keyword%'";

    $result = Conexion::conectar()->query($query);

    $output = '<ul class="list-unstyled">';

    if ($result->rowCount() > 0) {

        $row = $result->fetchAll();
        foreach ($row as $key => $value) {
            $output .= '<a href="' . $value["urlAmigable"] . '"><li value="' . $value["urlAmigable"] . '">' . ucwords($value["nombre"]) . '</li></a>';
        }
    } else {
        $output .= '<li> No se encontraron resultados con la búsqueda</li>';
    }

    $output .= '</ul>';
    echo $output;
}

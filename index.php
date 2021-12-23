<?php
    // NO SE REQUIERE DE UN INCLUDE PARA LA LIBRERIA
    require "conexion.php";

    // traer todos los productos
    $sql = "SELECT codigo_barras FROM productos";
    $resultado = $mysqli->query($sql);

    while ($row = $resultado->fetch_assoc()){
        // we're going to work with html
?>

<!--Para que muestre los datos a nivel de html-->
<!--El primer valor deberia ser "filepath" pero este no va-->
<!--debido a que vamos a mostrar el codigo y no a guardarlo-->

<!-- Parámetros:
Text: «0123456789»
Size: 40
Code Type: Code39
Orientation: Default = Horizontal
Print: true -->

<img src="barcode.php?text=<?php echo $row['codigo_barras']?>&size=50&codetype=Code39&print=true&Orientation=horizontal&sizefactor=1" />

<br>
<!--We close the while-->
<?php } ?>
<!--For the user can generate an image-->
<!-- <a href="barcode.php?text=0123456789&size=50&Orientation=vertical">Generar</a> -->
<?php
    require_once "Cliente.php";
    $c1 = new Cliente("Pablo Mayo");
    $c2 = new Cliente("Rocio Gonzales");

    $productoFisico = new ProductoFisico("Telefono", 100, 0.5);
    echo "Nombre: " . $productoFisico -> getNombre() . ", Precio: " . $productoFisico -> getPrecio() . ", Peso: " . $productoFisico -> calcularPrecioFinal();
?>

<ol>
    <li>
        <?= $c1 -> getNombre() ?>
    </li>

    <li>
        <?= $c2 -> getNombre() ?>
    </li>
</ol>
<?php
    include "Producto.php";

    class ProductoDigital extends Producto {
        public function calcularPrecioFinal() {
            return $this -> precio;
        }
    }
?>
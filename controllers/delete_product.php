<?php
if (isset($_GET['id'])) {
    if ($products->deleteProduct($_GET['id'])) {
        //Mostrar alert bootstrap de producto guardado con éxito
        echo "<div class='alert alert-success'>Producto eliminado con éxito</div>";
    } else {
        //Mostrar alert bootstrap de error al guardar producto
        echo "<div class='alert alert-danger'>Error al eliminar el producto</div>";
    }
}
<?php
//Permite procesar el formulario de actualizar producto usando la clase product y el método updateProduct de dicha clase
//Valida que se haya enviado el post
if (!empty($_POST["btn_add"])) {
    //Valida que se haya enviado el post con todos los datos
    if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['description'])) {
        if ($products->updateProduct($_POST)) {
            //Mostrar alert bootstrap de producto guardado con éxito
            echo "<div class='alert alert-success'>Producto actualizado con éxito</div>";
        } else {
            //Mostrar alert bootstrap de error al guardar producto
            echo "<div class='alert alert-danger'>Error al actualizar el producto</div>";
        }
        return;
    }else {
        echo "<div class='alert alert-warning'>Falta por llenar algunos campos</div>";
        return;
    }
}

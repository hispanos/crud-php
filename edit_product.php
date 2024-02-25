<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Inlude bootstrap css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Incluir fontaewesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <title>CRUD PRODUCTOS</title>
    </head>
    <body>
        <?php
            include './models/product.php';
            $products = new Product();
            $current_product = $products->getProduct($_GET['id']);
        ?>
    <!-- Dos container con diseño bootstrap uno de 4 columnas y otro de 8 columnas -->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2>ACTUALIZAR PRODUCTO</h2>
                <?php
                    include './controllers/update_product.php';
                ?>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $current_product['id']; ?>">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $current_product['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="text" name="price" id="price" class="form-control" value="<?php echo $current_product['price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" class="form-control"  value="<?php echo $current_product['description']; ?>"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="btn_add" value="ok">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Include bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    </body>
</html>
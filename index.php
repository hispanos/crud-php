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
        ?>
    <!-- Dos container con diseño bootstrap uno de 4 columnas y otro de 8 columnas -->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2>AGREGAR PRODUCTO</h2>
                <?php
                    include './controllers/save_product.php';
                ?>
                <form method="post">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="btn_add" value="ok">Agregar</button>
                </form>
            </div>
            <div class="col-8">
                <h2>LISTA DE PRODUCTOS</h2>
                <?php
                    include './controllers/delete_product.php';
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $listado = $products->getProducts();
                            // Recorremos el array de productos y mostramos en la tabla
                            foreach ($listado as $product) {
                                echo "<tr>
                                        <td>".$product['id']."</td>
                                        <td>".$product['name']."</td>
                                        <td>".$product['price']."</td>
                                        <td>".$product['description']."</td>
                                        <td>
                                            <a href='edit_product.php?id=".$product['id']."'><i class='fas fa-edit'></i></a>
                                            <a href='./index.php?id=".$product['id']."'><i class='fas fa-trash'></i></a>
                                        </td>
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Include bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    </body>
</html>
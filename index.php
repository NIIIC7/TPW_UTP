<?php
require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo = 1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

session_destroy();

//print_r($_SESSION);
?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebiWabo</title>
    <link rel="stylesheet" href="./assets/scss/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./assets/img/webiwaboo.ico">
</head>

<body>
    <!-- HEADER -->
    <header class="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">WebiWabo</a>
            <div class="nav__menu" id="nav-menu">

                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#" class="nav__link">Hombre</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Mujer</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Kids</a>
                    </li>
                    <li class="menu__car">
                        <a href="carrito.php"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAT1JREFUSEvN1CEsRlEYxvHfNyMQbaaZTBNIkiJogsJIhqIwySbaREwwQzFBExRBMoJEUBTFRjCbYAI7du929+377j1cn3nLDec57/8853nPrWhwVRrc358CPhI3r9jG/G+4yzpIAWnfIZyWhdS6okWs4hgjjQC04wFN6MJ9GUi9kPcxXqLxIcbC/nqAAZyXANygNw8Q1q7Rg0nsRcKCbgJLSY6572AaW7hEfwSgDU9oQSceixy0JqLw7cNVAWQKOzjBcKotesnrmMMuQoO8OsNgEm4I+auKACGDkMUbOvBSh9CNOzwnuvdYQNClJ1vAWh3ACpaTzGaymiIHQRvm+SAi5CAJ433xXUAzbhGuIa+OMFotiHEQefjasljABmaxmUxVtlveWuEUpY2yv/LqQ+WtRQMa7uDHOcRm8H8Bn2QFNRlXu2umAAAAAElFTkSuQmCC" /><span
                                id="num_cart" class="badge bg-secondary">
                                <?php echo $num_cart;?>
                            </span> </a>
                    </li>
                    <li class="menu__cart"><a href="#"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZJJREFUSEu11L9L1WEUx/GXNAdKklHY0mCjU3+A2C+l0aSpv0AIDXSS2lSKGtpbU0eLRLPGVjdxaDH6JUahjYlx4DEu3+5zny/X7lmfcz7v8+s5XTpsXR3WVxdwCw9wKSX0AbN4VUqwDmAacxmh+3jcClICXMcqviJAa0nsGuZxDsPYyEFKgPUkMI6lishtLOI1RtoF/EA3TuNXReQM9vAZF9oFfMNZ9OJ7BhA+0aqmVmpR9Pwqoh3LmRbFjG62C2gccmxMzORUgi6g76RDjsQmEWIh3GiHCOjTk6zpcewAphDr+Rtv0/5v/4+PVtJo+d5qyLGekfUVDKZtahTbxSbep2oOmpFygNiK52mIdSqIv3AXb6rOzQCjeJkcV/AQcdx+VoKjwjh+8R4xYZFYrO1fqwJ6sJUyj1szUyd9PErt/ILL2D+OqwLu4QneYaimeLiFTnzKOHwTeJYDxEEbK32eDPhGOnwvcCcH2EE/olXVnpcKOo9P+IiLOcBReijdqBzsn/h2hUrVZLeodmBdx45X8Afl0EcZyvkojQAAAABJRU5ErkJggg==" /></a>
                    </li>
                </ul>

                <div>


                </div>
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
            </div>
            <!-- TOGGLE -->
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-bowling-ball'></i>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main class="main">
        <!-- HOME -->
        <section class="home">
            <div class="home__container container">
                <div class="home__data">
                    <span class="home__subtitle">WebiWaboo</span>
                    <h1 class="home__title">Únete a nuestra comunidad</h1>
                    <p class="home__description">Obtén los mejores precios!<br>
                        W-W tu mejor opción
                    </p>
                    <a href="#" class="home__button">Comprar</a>
                </div>
                <div class="home__img">
                    <img src="./assets/img/Modeloh.png" alt="WebiWabo Image">
                </div>
            </div>

            
        </section>

    </main>

    <!--Contenido-->
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($resultado as $row){ ?>


                <div class="col">
                    <div class="card shadow-sm">
                        <?php
        $id = $row['id'];
        $imagen = "assets/productos/" . $id . "/img".$id.".jpg";
        if (!file_exists($imagen)) {
            $imagen = "assets/img2.jpg";
        }
        ?>
                        <img src="<?php echo $imagen; ?>">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $row['nombre']; ?>
                            </h5>
                            <p class="card-text">S/.
                                <?php echo $row['precio']; ?>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="details.php?id=<?php echo $row['id'];?>&token=<?php echo  hash_hmac('sha1',$row['id'], KEY_TOKEN);?> "
                                        class="btn btn-primary">Detalles</a>
                                </div>
                                <button class="btn btn-outline-primary" type="button"
                                    onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo  hash_hmac('sha1',$row['id'], KEY_TOKEN);?>')">Agregar
                                    al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </main>

   <!-- Footer -->
   <footer class="home__footer">
                <span>WW</span>
                <span>|</span>
                <span>© 2023 WebiWabo Perú SAC, RUC 20231244789. Av. 28 de Julio 1011, interior 1200, Miraflores, Código
                    Postal Lima 18.</span>
            </footer>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    <script>
        function addProducto(id, token) {
           
            let url = 'classes/carrito.php';
            let formData = new FormData();
            formData.append('id', id); // Corregido $id a id
            formData.append('token', token);

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        let elemento = document.getElementById("num_cart");
                        elemento.innerHTML = data.numero;
                    }
                });

        }


    </script>

    <!-- Scripts -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>
<?php
require("../Includes/header.php");
setcookie("idioma","selecionar la opción de idioma");
setcookie("accederUbicacion","permitir utilizar la ubicación");
?>

    <main role="main" >

        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" style="padding-top: 80px;" >
                <div class="carousel-item active">
                    <img class="first-slide" src="../resources/images/Cómo-iniciar-un-negocio-enfocado-en-la-venta-de-zapatillas-en-Lima.jpg" alt="First slide" style="width: 100%; max-height: 500px;">
                    <div class="container">
                        <div class="carousel-caption text-right" >
                            <h1 style="color: yellow; background-color: rgba(128, 128, 128, 0.8)">Catálogo de ZAPATILLAS DEPORTIVAS</h1>
                            <b style="color: yellow; background-color: rgba(128, 128, 128, 0.8)">Necesitas estar logado para acceder a los modelos</b>
                            <?php
                            if(isset($_SESSION['usuario_logado'])) { ?>
                                <p><a class="btn btn-lg btn-primary" href="products.php" role="button">MODELOS</a></p>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

<?php
include("../Includes/footer.php");
?>


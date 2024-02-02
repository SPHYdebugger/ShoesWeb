<?php
require("../Includes/header.php");
?>

    <main role="main" >

        <div id="myCarousel" class="carousel slide" data-ride="carousel" >


            <div class="carousel-inner" style="padding-top: 80px;" >
                <div class="carousel-item active">
                    <img class="first-slide" src="../resources/images/Cómo-iniciar-un-negocio-enfocado-en-la-venta-de-zapatillas-en-Lima.jpg" alt="First slide" style="width: 100%; max-height: 500px;">
                    <div class="container">
                        <div class="carousel-caption text-right" >
                            <h1 style="color: yellow; ">Catálogo de ZAPATILLAS DEPORTIVAS</h1>
                            <b style="color: yellow; background-color: rgba(128, 128, 128, 0.8)">Necesitas estar logado para acceder a los modelos</b>
                            <?php
                            //SOLO SI SE ESTÁ LOGADO SE HACE VISIBLE EL BOTÓN PARA VER LOS PRODUCTOS
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


<?php
require("../includes/header.php");
require('../resources\db\Product\arrayProducts.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['resources\db\Product\deleteProduct.php'])) {}

?>

    <main role="main" >

        <div class="container" style="margin-top: 150px">

            <h2 style="text-align: center;">LISTA DE MODELOS</h2>
            <table class="table container" style="margin-top: 50px">
                <div class="container d-flex justify-content-center">
                    <tr>
                        <th>
                            <img src="../resources/images/za1.jpg" alt="Imagen 1" style="width: 30%; margin: 10px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;
            box-sizing: border-box;">
                        </th>
                        <th><img src="../resources/images/za2.jpg" alt="Imagen 1" style="width: 30%; margin: 10px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;
            box-sizing: border-box;"></th>
                        <th><img src="../resources/images/za3.jpg" alt="Imagen 1" style="width: 30%; margin: 10px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;
            box-sizing: border-box;"></th>

                    </tr>
                    <tr>
                        <th><img src="../resources/images/za4.jpg" alt="Imagen 1" style="width: 30%; margin: 10px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;
            box-sizing: border-box;"></th>
                        <th><img src="../resources/images/za5.jpg" alt="Imagen 1" style="width: 30%; margin: 10px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;
            box-sizing: border-box;"></th>
                        <th><img src="../resources/images/za6.jpg" alt="Imagen 1" style="width: 30%; margin: 10px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;
            box-sizing: border-box;"></th>

                    </tr>
                    <tr>
                        <th><img src="../resources/images/za7.jpg" alt="Imagen 1" style="width: 30%; margin: 10px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;
            box-sizing: border-box;"></th>
                        <th><img src="../resources/images/za8.jpg" alt="Imagen 1" style="width: 30%; margin: 10px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;
            box-sizing: border-box;"></th>
                        <th><img src="../resources/images/za9.jpg" alt="Imagen 1" style="width: 30%; margin: 10px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;
            box-sizing: border-box;"></th>

                    </tr>

                </div>

            </table>

        </div>


        <div class="d-flex justify-content-center">
            <a href="index.php" class="btn btn-primary my-2">Volver a inicio</a>
        </div>

    </main>

<?php
include("../includes/footer.php");
?>
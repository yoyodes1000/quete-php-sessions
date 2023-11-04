<?php session_start(); ?>
<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <!-- TODO : Display shopping cart items from $_SESSION here. -->
        <?php
        
        if (isset($_SESSION['cart'])) {
            $panier = $_SESSION['cart'];
        } else {
            $panier = array();
        }

        $count = 1;
        ?>
        
        <table>
            <?php
                    foreach ($panier as $cookieName){
                        $cookie = $catalog[$cookieName]; 
                        ?>
                <tr>
                    <td><?= $cookie['name'] ?></td>
                    <td><?= $cookie['description'] ?></td>
                </tr>
                    <?php } ?>
        </table> 
    </div>
</section>
<?php require 'inc/foot.php'; ?>



<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">
        <?php
        if (isset($_GET['type'])) {
            echo ($protype->getNameById($_GET['type'])[0]['type_name']);
        }
        if (isset($_GET['manu'])) {
            echo ($manufacture->getNameById($_GET['manu'])[0]['manu_name']);
        }
        ?>
    </h2>

    <?php
    require "module/items_new.php";
    require "module/items_feature.php";
    ?>
    <ul class="pagination col-sm-12">
</div>
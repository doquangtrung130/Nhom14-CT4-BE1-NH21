<h2>Hãng sản xuất</h2>
<div class="panel-group category-products" id="accordian">
    <!--category-productsr-->
    <?php foreach ($manufacture->getAll() as $value) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="cate.php?manu=<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></a></h4>
            </div>
        </div>
    <?php } ?>
</div>
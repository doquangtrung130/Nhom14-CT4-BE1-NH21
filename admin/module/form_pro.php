<?php
if (isset($_GET['id']) || isset($_POST['id']) || isset($_POST['edit'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else if (isset($_POST['type_iidd'])) {
        $id = $_POST['id'];
    } else {
        $id = $_POST['edit'];
    }
    $list = $product->getNameById($id);
?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                    Home</a></div>
            <h1>Edit Product</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Product info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="form_pro.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product name" name="name" value="<?php echo $product->getNameById($id)[0]['name'] ?>" /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a manufacture:</label>
                                    <div class="controls">
                                        <select name="manu_id" id="cate">
                                            <?php foreach ($manufacture->getAll() as $value) {
                                                if ($list[0]['manu_id'] == $value['manu_id']) { ?>
                                                    <option selected value="<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></option>
                                                <?php }
                                                ?>
                                            <?php } ?>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a product type:</label>
                                    <div class="controls">
                                        <select name="type_id" id="subcate">
                                            <?php foreach ($protype->getAll() as $value) {
                                                if ($list[0]['type_id'] == $value['type_id']) { ?>
                                                    <option selected value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                                                <?php }
                                                ?>
                                            <?php } ?>
                                        </select> *
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Choose an image :</label>
                                        <div class="controls">
                                            <input type="file" name="fileUpload" id="fileUpload">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Description</label>
                                        <div class="controls">
                                            <textarea class="span11" placeholder="Description" name="description"><?php echo $product->getNameById($id)[0]['description'] ?></textarea>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Price :</label>
                                            <div class="controls">
                                                <input type="text" class="span11" placeholder="price" name="price" value="<?php echo $product->getNameById($id)[0]['price'] ?>" /> *
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Feature :</label>
                                            <div class="controls">
                                                <input type="number" class="span11" name="feature" min="0" max="1" value="<?php echo $product->getNameById($id)[0]['feature'] ?>" /> *
                                            </div>
                                        </div>
                                        <input type="hidden" name="edit" value="<?php echo $id ?>">
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success">Edit</button>
                                        </div>
                                    </div>
                            </form>
                            <!-- END USER FORM -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div id="content">
        <div id="content-header">
            <h1>Add New Product</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Product info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="form_pro.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product name" name="name" /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a manufacture:</label>
                                    <div class="controls">
                                        <select name="manu_id" id="cate">
                                            <?php foreach ($manufacture->getAll() as $value) { ?>
                                                <option value="<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></option>
                                            <?php } ?>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a product type:</label>
                                    <div class="controls">
                                        <select name="type_id" id="subcate">
                                            <?php foreach ($protype->getAll() as $value) { ?>
                                                <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                                            <?php } ?>
                                        </select> *
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Choose an image :</label>
                                        <div class="controls">
                                            <input type="file" name="fileUpload" id="fileUpload">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Description</label>
                                        <div class="controls">
                                            <textarea class="span11" placeholder="Description" name="description"></textarea>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Price :</label>
                                            <div class="controls">
                                                <input type="text" class="span11" placeholder="price" name="price" /> *
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Feature :</label>
                                            <div class="controls">
                                                <input type="number" class="span11" name="feature" min="0" max="1" /> *
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success">Add</button>
                                        </div>
                                    </div>
                            </form>
                            <!-- END USER FORM -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php
if (isset($_GET['type_id']) || isset($_POST['type_id']) || isset($_POST['edit'])) {
    if (isset($_GET['type_id'])) {
        $id = $_GET['type_id'];
    } else if (isset($_POST['type_id'])) {
        $id = $_POST['type_id'];
    } else {
        $id = $_POST['edit'];
    }
?>
    <div id="content">
        <div id="content-header">
            <h1>Edit Protype</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Protype info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="form_type.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Manu name" name="name" value="<?php echo $protype->getNameById($id)[0]['type_name'] ?>"/> *
                                    </div>
                                    <input type="hidden" name="edit" value="<?php echo $id ?>">
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Edit</button>
                                </div>
                            </form>
                        </div>

                        <!-- END USER FORM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div id="content">
        <div id="content-header">
            <h1>Add New Protype</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Protype info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="form_type.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Type name" name="name" /> *
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </form>
                        </div>

                        <!-- END USER FORM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
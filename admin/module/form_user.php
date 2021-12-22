<?php
if (isset($_GET['id']) || isset($_POST['id']) || isset($_POST['edit'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $id = $_POST['edit'];
    }
?>
    <div id="content">
        <div id="content-header">
            <h1>Edit User</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>User info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="form_user.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="User name" name="name" value="<?php echo $user->getNameById($id)[0]['name'] ?>"/> *
                                    </div>
                                    <label class="control-label">Password :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Pass" name="pass" value="<?php echo $user->getNameById($id)[0]['pass'] ?>"/> *
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
            <h1>Add New User</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>User info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="form_user.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="User name" name="name" /> *
                                    </div>
                                    <label class="control-label">Password :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Pass" name="pass" /> *
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
<?php } ?>
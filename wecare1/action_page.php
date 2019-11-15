<link href="style2_sign_up.css" rel="stylesheet" type="text/css">
<?php session_start();?>
<div class="body content">
    <div class="welcome">
        <div class="alert alert-success">
            <?=$_SESSION['message'] ?>
        </div>
    </div>
</div>
Welcome <span class="user_employee"> <?= $_SESSION['name']?></span>





?>
<?php
include APPPATH . 'views/fragment/header.php';
 include APPPATH . 'views/fragment/menu.php';
?>
<h2 class="text-center">Login</h2>

<div class="break"></div>
<form method="post" 
      action="<?= base_url('login/masuk') ?>">
   <div class="form-group">
       <div class="row">
       <div class="col-md-4 col-md-offset-4">
        <?php if(isset($message)) : ?>
            <p class="label label-warning"><?= $message?></p>
        <?php endif; ?>
        <div>
        <label>Email</label>
        <input type="text" name="username"" class="form-control"/>
    </div>
     <div>
        <label>Password</label>
        <input type="password" name="password" class="form-control"/>
    </div>
    <div>
        <div class="row">
            <div class="col-md-12">
            <input type="submit" value="Login" class="btn btn-primary btn-lg text-center btn-block" style="margin-top: 32px;"/>
            </div>
        </div>
    </div>
        </div>
       </div>
   </div>
</form>
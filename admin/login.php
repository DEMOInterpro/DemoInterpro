<?php 
	include ("../config/database.php");
	include_once "header.php";
?>
<div class="page-header">
</div>
<div class="row">
    <div class="col-md-12">
    <form name="login" method="POST" action="config/login_admin.php">
    <div class="form-group">
  	<div class="row">
    	<div class="col-xs-6 col-md-offset-3 img-thumbnail img-rounded" style="padding-bottom:30px; background:#FBF1A6;">
        	<!--- <div class="coba" style="width:auto; height:200px; background:#06F;"></div> --->
            <h1 style="text-align:center">Selamat Datang</h1>
            <div class="row">
            	<div class="col-xs-8 col-xs-offset-2" style="margin-bottom:20px;">
                	<label for="name">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="txtUsername">
                </div>
            </div>
            <div class="row">
            	<div class="col-xs-8 col-xs-offset-2" style="margin-bottom:20px;">
            		<label for="name">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="txtPassword">
                </div>
            </div>
            <div class="row">
            	<div class="col-xs-8 col-xs-offset-2">
            		<input type="submit" value="Login" class="btn btn-primary btn-lg btn-block" />
                </div>
            </div>
        </div> 
    </div>
    </div>
    </form> 
    </div>
</div>
<?php 
	include_once "footer.php";
?>
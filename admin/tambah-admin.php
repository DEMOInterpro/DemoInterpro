<div class="row">
    <div class="col-md-12">
        <div class="page-header" style="margin-top:-2%;">
            <h2><span class="glyphicon glyphicon-user"></span> Tambah Admin</h2>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-md-12">
    	<form name="addAdmin" action="config/tambah_admin.php" method="POST">
        	<div class="row">
            	<div class="col-md-6">
                	<div class="form-group">
                    	<label>Nama User</label>
                        <input type="text" name="nama" class="form-control" required />
                    </div>
                    <div class="form-group">
                    	<label>Username</label>
                        <input type="text" name="username" class="form-control" required />
                    </div>
                    <div class="form-group">
                    	<label>Password</label>
                        <input type="password" name="password" class="form-control" required />
                    </div>
                    <div class="form-group">
                    	<label>Ulangi Password</label>
                        <input type="password" name="password2" class="form-control" required  />
                    </div>
                    <div class="form-group">
                    	<input type="submit" name="daftar" value="Tambah" class="btn btn-default" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="js/_validasi.js"></script>
<form name="registrasi" method="POST" id="form_reg" action="config/form_daftar.php">
	<div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Foto </label>
            </div>
            <div class="col-md-5">
                <input type="file" name="foto">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Nama </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nama" required/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Tempat Lahir </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="tempatLahir" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Tanggal Lahir </label>
            </div>
            <div class="col-md-5">
                <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
      				<input class="form-control" type="text" name="date" required>
      				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Jenis Kelamin </label>
            </div>
            <div class="col-md-5">
                <select class="form-control" name="jKelamin" onchange="document.getElementById('selected_comb').value=this.options[this.selectedIndex].text" required>
                	<option value="0">--Pilih Jenis Kelamin--</option>
                    <option value="1">L</option>
                    <option value="2">P</option>
                </select>
                <input type="hidden" name="selected_comb" id="selected_comb" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Agama </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="agama" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Sekolah Asal </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="asalSekolah" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Alamat </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="alamat" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Email </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="email" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Telp </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="telp" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Nama Wali </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="namaWali" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Nilai Bahasa Indonesia </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nBahasa" id="bahasa" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Nilai Matematika</label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nMath" id="math" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Nilai IPA </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nIPA" id="ipa" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>Nilai Bahasa Inggris </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nEnglish" id="english" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label>DANEM </label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="danem" id="danem" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
        	<div class="col-md-5 col-md-offset-5">
            	<input type="submit" class="btn btn-default" value="DAFTAR" style="margin:10px 0px 10px 0px;">
            </div>
        </div>
    </div>
</form>
<ul id="myTab" class="nav nav-tabs">
   <li class="active">
      <a href="#rules" data-toggle="tab">
         Aturan PPDB
      </a>
   </li>
   <li><a href="#register" data-toggle="tab">Form Pendaftaran</a></li>
   <li><a href="#pengumuman" data-toggle="tab">Pemberitahuan</a></li>
</ul>
<div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="rules">
      <?php 
	  	include_once 'hal_aturan.php';
	  ?>
   </div>
   <div class="tab-pane fade" id="register">
      <?php 
	  	include_once 'form_daftar.php';
	  ?>
   </div>
   <div class="tab-pane fade" id="pengumuman">
      <?php 
	  	include_once 'pengumuman.php';
	  ?>
   </div>
</div>

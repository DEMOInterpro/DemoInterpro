$(".input-group.date").datepicker({ 
	format: "yyyy/mm/dd",
	clearBtn: true,
	language: "id",
	keyboardNavigation: false,
	forceParse: false,
	calendarWeeks: true,
	autoclose: true
});

$(document).ready(function(){
	$("#form_reg").validate({
		rules:{
				nama:"required",
				tempatLahir:"required",
				date:{required:true, date:true},
				agama:"required",
				asalSekolah:"required",
				alamat:"required",
				email:{required:true, email:true},
				telp:{required:true, number:true},
				namaWali:"required",
				nBahasa:{required:true, number:true},
				nMath:{required:true, number:true},
				nIPA:{required:true, number:true},
				nEnglish:{number:true}
			},
		messages:{
				nama:{required:'Nama harus di isi'},
				tempatLahir:{required:'Tempat Lahir harus di isi'},
				date:{required:'Tanggal Harus diisi', date:'Isikan tanggal lahir dengan benar'},
				agama:{required:'Nama harus di isi'},
				asalSekolah:{required:'Sekolah asal harus di isi'},
				alamat:{required:'Alamat harus di isi'},
				email:{required:'Email harus di isi', email:'Format email salah'},
				telp:{required:'Telp harus di isi', number:'Isikan Telp dengan angka'},
				namaWali:{required:'Nama Wali harus di isi'},
				nBahasa:{required:'Nilai harus di isi', number:'Isikan Nilai dengan angka'},
				nMath:{required:'Nilai harus di isi', number:'Isikan Nilai dengan angka'},
				nIPA:{required:'Nilai harus di isi', number:'Isikan Nilai dengan angka'},
				nEnglish:{required:'Nilai harus di isi', number:'Isikan Nilai dengan angka'}
			},
			success:function(label){
					lebel.text('Data sudah benar').addclass('valid');
				}
	});
	
});

$(document).ready(function(){
	$('#english').keyup(function(){
			var nbahasa = parseInt($('#bahasa').val());
			var nmath = parseInt($('#math').val());
			var nipa = parseInt($('#ipa').val());
			var nEnglish = parseInt($('#english').val());
			var danem = (nbahasa+nmath+nipa+nEnglish) ;
			
			$('#danem').val(danem);
	});
});

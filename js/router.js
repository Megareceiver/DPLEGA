/* UI DPLEGA JS */
/*-- public declare*/
var headHome 			= $('header.main');
var headPage 			= $('header.parent');
var mainPage			= $('main.parent');
var footPage 			= $('footer.parent');
var preload  			= '<div id="preload" class="container"><div class="col-md-12"><div class="loader"><svg class="circular" viewBox="5 5 90 90"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/></svg></div></div></div>';
var waiting 			= '<div id="waiting"><div class="col-md-12"><div class="loader"><svg class="circular" viewBox="5 5 90 90"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/></svg></div></div></div>';
var head  				= '';
var body  	 			= '';
var part	 			= ['',''];
var content  			= '';
var data 	 			= [];
var optionSpecial		= [];
var optionD	 			= [];
var optionBatch 		= [];
var autoData			= [];
var sourcesData			= [];
var sourcesDetailData	= [];
var maxForm 			= 4; //set max form
var lembagaCounter		= 0;
var moduleCounter		= 0;
var moduleActive		= [];
var customArray			= [];
var notifInterval		= 10000;
var notifChecker		= 0;
var notifId				= null;
var logoutAgent			= 0;

/* packet data variable */
var pGroup  		= "";
var pTarget			= "";
var pId 			= "";
var pLabel			= "";
var pContainer		= "";
var pReferences		= "";
var pReferencesKey	= "";
var pDecription		= "";

$(function(){
	//r_clearCookies();
	r_navigateTo(r_pageReader(), 'start');
	//r_navigateTo(0, 'start');
	// r_pageSet(0);
	// keeping data provinsi, wilayah, kecamatan, kelurahan to global variable
	optionD = p_getData('f4', 'f40', '');
	optionD = optionD.feedData;

	/*temp*/
	if(String(r_getCookie("userLevel")) != "1"){
		$("#navigation .user-frame img").attr('src', 'img/avatar/' +String(r_getCookie("avatar")));
		$("#navigation .user-frame p.caption span").html(String(r_getCookie("username")));
		$("#navigation .user-frame p.caption span.big").html(String(r_getCookie("nama")));
	}
});

/* navigation */
function r_navigateTo(index, packet, access) {
	syncnavClose(); /*-- syncnav js*/

	if(r_auth(index) == true){
		r_pageClear(); /*-- clear frame on page */
		switch(index){
			case 0  : r_f0Dashboard(); 					break;
			case 0.1: r_f0Bantuan(); 					break;

			case 1  : r_f1Kelembagaan(); 				break;
			case 11 : r_f1DaftarLembaga(packet); 		break;
			case 12 : r_f1DetailLembaga(packet); 		break;
			case 13 : r_f1VerifikasiLembaga(packet);	break;
			case 14 : r_f1KoleksiLembaga(); 			break;
			case 16 : r_f1PrestasiLembaga(); 			break;
			case 15 : r_f1FormKelembagaan(packet);		break;

			case 3  : r_f3Autentikasi(); 				break;
			case 31 : r_f3FormUser(packet);				break;

			case 4  : r_f4Pengaturan();					break;
			case 41 : r_f4LingkupArea();				break;
			case 400: r_f4TimWilayah();					break;
			case 410: r_f4AnggotaTimWilayah(packet);	break;
			case 411: r_f4TransferLembaga();			break;

			case 42 : r_f4DaftarVerifikasi();			break;
			case 421: r_f4GrupVerifikasi();				break;

			case 43 : r_f4BentukLembaga();				break;
			case 431: r_f4LegalitasLembaga();			break;
			case 432: r_f4BidangGerakLembaga();			break;

			case 44 : r_f4DaftarBerita();				break;
			case 441: r_f4DetailBerita(packet);			break;

			case 45 : r_f4ImportData();					break;
			case 451: r_f4BackupRestore();				break;
			case 452: r_f4Setelan();					break;

			case 46 : r_f4InfoPersonal();				break;
			case 461: r_f4GantiPassword();				break;
			case 462: r_f4FormInfoPersonal();			break;

			case 99 : r_fLogin(); 						break;
			case 999: r_fNotification();				break;

			case 91 : r_fDaftarLembagaPublic(packet); 	break;
			case 92 : r_fDaftarKontak(packet); 	break;
			default : r_fHome(); 						break;
		}

		if(packet != 'start' && index != r_pageReader()) /*--set page to static*/ r_pageSet(index);
	}else{
		if(packet != 'start') showNotification('danger', 'failure', 'Akses tidak diberikan, hubungi administrator untuk lebih lanjut!');
		if(r_getCookie('login') != 'yes') { r_fHome(); }
	}

	if(r_getCookie('login') == 'yes' && r_getCookie('userLevel') != '1' && notifChecker == 0){
	    setTimeout(function(){ r_notifRequest(); }, 1000);
	}
}

function r_auth(index){
	var res = false;

	switch(index){
		case 0  :
		case 0.1:
			res = (r_getCookie('login') == 'yes') ? true : false;
		break;

		case 1   :
		case 11  :
		case 12  :
		case 13  :
		case 15  :
			res = (r_getCookie('kelembagaanLihat') == '1' || r_getCookie('userLevel') == '1') ? true : false;
		break;

		case 14  :
		case 16 :
			res = true;
		break;

		case 3  :
			res = (r_getCookie('userLevel') != '1') ? true : false;
		break;

		case 4  :
			res = (r_getCookie('userLevel') != '1') ? true : false;
		break;

		case 41 :
		case 400:
		case 410:
		case 411:
			res = (r_getCookie('lingkupAreaLihat') == '1') ? true : false;
		break;

		case 42 :
		case 421:
			res = (r_getCookie('pengaturanVerifikasiLihat') == '1') ? true : false;
		break;

		case 43 :
		case 431:
		case 432:
			res = (r_getCookie('pengaturanKelembagaanLihat') == '1') ? true : false;
		break;

		case 44 :
			res = (r_getCookie('beritaLihat') == '1') ? true : false;
		break;
		case 441:
			res = true;
		break;

		case 45 :
		case 451:
		case 452:
			res = (r_getCookie('konfigurasiLihat') == '1') ? true : false;
		break;

		case 46 :
		case 461:
		case 462:
			res = (r_getCookie('login') == 'yes') ? true : false;
		break;

		case 91 :
		case 99 :
			res = true;
		break;

		case 999:
			res = (r_getCookie('userLevel') != '1') ? true : false;
		break;

		default :
			res = true;
		break;
	}

	return res;
}

function r_notifRequest(){
	res = p_getData('fNotification', 'f111');
	res = res.feedData.found;

	if(res == 'yes'){
		$("header.parent .fa.fa-bell").removeClass('active').addClass('active');
	}else{
		$("header.parent .fa.fa-bell").removeClass('active');
	}

	notifChecker = 1;
	if(logoutAgent != 1) { notifId = setTimeout(function(){ r_notifRequest(); }, notifInterval); }
}

function r_customCallBack(formType, group, target, recentId, formId, pId){
	var dataFec = null;
	switch(group){
		case 'f1' : //megan
			switch(target){
				case 'f111' :
					$('#f-kelembagaan-create input[name="kelurahan"]').attr('readonly','readonly');
					$("#" + formId + " [name=imageName]").html(recentId);
					$("[name=noreg]").val(pId);
					profile_look_set(pId);
					p_formHandler("f-kelembagaan-create", "updateData");
				break;
				case 'f112' :
					p_formHandler("f-sejarah-create", "updateData");
					$("#" + formId + " [name=imageName]").html(recentId);
				break;
				case 'f113' :
					p_formHandler(formId, "updateData");
					$("#" + formId + " [name=p-id]").val(pId);
					$("#" + formId + " [name=imageName]").html(recentId);
				break;
				case 'f114' :
					p_formHandler("f-kepengurusan-create", "updateData");
				break;
				case 'f115' :
					p_formHandler("f-kegiatanUsaha-create", "updateData");
				break;
				case 'f116' :
					p_formHandler(formId, "updateData");
					$("#" + formId + " [name=p-id]").val(pId);
					$("#" + formId + " [name=imageName]").html(recentId);
				break;
				case 'f118' :
					dataFec = [{
							'idData' 		: recentId,
							'noreg'	 		: $('#' + formId + ' input[name="noreg"]').val(),
							'judulKoleksi'	: $('#' + formId + ' input[name="judulKoleksi"]').val(),
							'jenisKoleksi'	: $('#' + formId + ' select[name="jenisKoleksi"]').val(),
							'deskripsi'		: $('#' + formId + ' input[name="deskripsi"]').val(),
					}];

					r_f1KoleksiDataGenerator(dataFec);
					clearTargetFormNoreg(formId, $('#' + formId + ' input[name="noreg"]').val());
				break;
				case 'f119' :
					dataFec = [{
							'idData' 		: recentId,
							'noreg'	 		: $('#' + formId + ' input[name="noreg"]').val(),
							'deskripsi'		: $('#' + formId + ' input[name="deskripsi"]').val(),
					}];

					r_f1PrestasiDataGenerator(dataFec);
					clearTargetFormNoreg(formId, $('#' + formId + ' input[name="noreg"]').val());
				break;
				case 'f120' :
					$("#" + formId + " [name=imageName]").html(recentId);
				break;
				case 'f121' :
					dataFec = [{
							'idData' 		: recentId,
							'noreg'	 		: $('#' + formId + ' input[name="noreg"]').val(),
							'bantuanDari'	: $('#' + formId + ' input[name="bantuanDari"]').val(),
							'deskripsi'		: $('#' + formId + ' textarea[name="deskripsi"]').val(),
							'tahun'			: $('#' + formId + ' input[name="tahun"]').val(),
					}];

					r_f1SejarahBantuanDataGenerator(dataFec);
					clearTargetFormNoreg(formId, $('#' + formId + ' input[name="noreg"]').val());
				break;
				case 'f122' :
					dataFec = [{
							'idData' 		: recentId,
							'noreg'	 		: $('#' + formId + ' input[name="noreg"]').val(),
							'namaLembaga'	: $('#' + formId + ' input[name="namaLembaga"]').val(),
							'noregTarget'	: $('#' + formId + ' input[name="noregTarget"]').val(),
							'hirarki'		: $('#' + formId + ' select[name="hirarki"]').val(),
					}];

					r_f1HirarkiDataGenerator(dataFec);
					clearTargetFormNoreg(formId, $('#' + formId + ' input[name="noreg"]').val());
				break;
				case 'f123' :
					var temp = recentId.split(',');
					var textemp =
						$('#f-transfer-create [name=kodeKelurahan] option:selected').text() + ' / ' +
						$('#f-transfer-create [name=kodeKecamatan] option:selected').text() + ' / ' +
						$('#f-transfer-create [name=kodeWilayah] option:selected').text() + ' / ' +
						$('#f-transfer-create [name=kodeProvinsi] option:selected').text();
					for(var loop=0; loop < temp.length; loop++){
						$("#" + temp[loop] + " .text-set .pos").html(textemp);
					}

					$('.select-button').prop('checked', false);
					$('#counter-select').html(0);
					clearTargetForm(formId);
				break;
				case 'f151' :
				case 'f152' :
					$("#" + formId + ' [type=submit] span').removeClass('fa-active-success').addClass('fa-active-success');
					$("#" + formId + ' [type=submit]').attr('type', 'reset');
					$("#" + formId + ' [type=reset]').unbind().on('click', function(){
						$("#" + formId + ' [type=reset]').children('span').removeClass('fa-active-success');
						$("#" + formId + ' [type=reset]').attr('type', 'submit').unbind();
						$("#" + formId + " .catatan").val('');
						$("#" + formId + " input").unbind();
						$("#" + formId + " input").on("keypress", function(event) { return event.keyCode; });
						p_formHandler(formId,'addData');
						return false;
					});

					$("#" + formId + " input").on("keypress", function(event) { return event.keyCode != 13; });
				break;
			}
		break;
		case 'f3': //megan
			switch(target){
				case 'f31' :
					r_navigateTo(3);
				break;
				case 'f313' :
					clearTargetForm('f-password-create');
				break;
				case 'f314' :
					$("#" + formId + " [name=imageName]").html(recentId);
				break;
			}
		break;
		case 'f4': //megan
			switch(target){
				case 'f400':

					dataFec = [{
							'idData' 		: recentId,
							'namaTim'		: $('#f-timWilayah-create input[name="nama"]').val(),
					}];

					r_f4TimWilayahDataGenerator(formType, dataFec);
					clearTargetForm('f-timWilayah-create');
					p_formHandler("f-timWilayah-create" , "addData");
				break;
				case 'f410':

					dataFec = [{
							'idData' 		: recentId,
							'namaWilayah'	: $('#f-anggotaTimWilayah-create select[name="idWilayah"] option:selected').text(),
					}];

					r_f4RemoveLingkupAreaArray(optionSpecial, recentId);
					r_f4AnggotaTimWilayahOptionGenerator();
					r_f4AnggotaTimWilayahDataGenerator(formType, dataFec);
					$('#f-anggotaTimWilayah-create select[name="idWilayah"]').val('');
					p_formHandler("f-anggotaTimWilayah-create" , "addData");
				break;
				case 'f411':
					dataFec = [{
							'idData' 		: recentId,
							'noreg'	 		: $('#f-provinsi-create input[name="kode"]').val(),
							'caption'		: $('#f-provinsi-create input[name="nama"]').val(),
							'references' 	: '',
							'referencesKey' : ''
					}];

					r_f4LingkupAreaDataGenerator(formType, 'provinsi', dataFec, 'section-Provinsi');
					clearTargetForm('f-provinsi-create');
					p_formHandler("f-provinsi-create" , "addData");
				break;
				case 'f412':
					dataFec = [{
							'idData' 		: recentId,
							'noreg'	 		: $('#f-wilayah-create input[name="kode"]').val(),
							'caption'		: $('#f-wilayah-create input[name="nama"]').val(),
							'references'	: $('#f-wilayah-create select[name="referensi"] option:selected').text(),
							'referencesKey'	: $('#f-wilayah-create select[name="referensi"]').val(),
					}];
					r_f4LingkupAreaDataGenerator(formType, 'wilayah', dataFec, 'section-Wilayah');
					clearTargetForm('f-wilayah-create');
					p_formHandler("f-wilayah-create" , "addData");
				break;
				case 'f413':
					dataFec = [{
							'idData' 		: recentId,
							'noreg'	 		: $('#f-kecamatan-create input[name="kode"]').val(),
							'caption'		: $('#f-kecamatan-create input[name="nama"]').val(),
							'references'	: $('#f-kecamatan-create select[name="referensi"] option:selected').text(),
							'referencesKey'	: $('#f-kecamatan-create select[name="referensi"]').val(),
					}];
					r_f4LingkupAreaDataGenerator(formType, 'kecamatan', dataFec, 'section-Kecamatan');
					clearTargetForm('f-kecamatan-create');
					p_formHandler("f-kecamatan-create" , "addData");
				break;
				case 'f414':
					dataFec = [{
							'idData' 		: recentId,
							'noreg'	 		: $('#f-kelurahan-create input[name="kode"]').val(),
							'caption'		: $('#f-kelurahan-create input[name="nama"]').val(),
							'references'	: $('#f-kelurahan-create select[name="referensi"] option:selected').text(),
							'referencesKey'	: $('#f-kelurahan-create select[name="referensi"]').val(),
					}];
					r_f4LingkupAreaDataGenerator(formType, 'kelurahan', dataFec, 'section-Kelurahan');
					clearTargetForm('f-kelurahan-create');
					p_formHandler("f-kelurahan-create" , "addData");
				break;
				case 'f421':
					dataFec = [{
							'noreg'	 		: recentId,
							'caption'		: $('#f-grupVerifikasi-create input[name="nama"]').val(),
					}];
					r_f4VerifikasiDataGenerator(formType, 'grupVerifikasi', dataFec, 'section-grupVerifikasi');
					clearTargetForm('f-grupVerifikasi-create');
					p_formHandler("f-grupVerifikasi-create" , "addData");
				break;
				case 'f422':
					dataFec = [{
							'noreg'	 		: recentId,
							'caption'		: $('#f-verifikasi-create input[name="nama"]').val(),
							'references'	: $('#f-verifikasi-create select[name="referensi"] option:selected').text(),
							'referencesKey'	: $('#f-verifikasi-create select[name="referensi"]').val(),
					}];
					r_f4VerifikasiDataGenerator(formType, 'verifikasi', dataFec, 'section-verifikasi');
					clearTargetForm('f-verifikasi-create');
					p_formHandler("f-verifikasi-create" , "addData");
				break;
				case 'f431':
					dataFec = [{
							'noreg'	 		: recentId,
							'caption'		: $('#f-bentukLembaga-create input[name="nama"]').val(),
							'description'	: $('#f-bentukLembaga-create textarea[name="deskripsi"]').val(),
					}];
					r_f4KelembagaanSectionGenerator(formType, 'bentukLembaga', dataFec, 'section-bentukLembaga');
					clearTargetForm('f-bentukLembaga-create');
					p_formHandler("f-bentukLembaga-create" , "addData");
				break;
				case 'f432':
					dataFec = [{
							'noreg'	 		: recentId,
							'caption'		: $('#f-legalitas-create input[name="nama"]').val(),
							'references'	: $('#f-legalitas-create select[name="referensi"] option:selected').text(),
							'referencesKey'	: $('#f-legalitas-create select[name="referensi"]').val(),
					}];
					r_f4KelembagaanSectionGenerator(formType, 'legalitas', dataFec, 'section-legalitas');
					clearTargetForm('f-legalitas-create');
					p_formHandler("f-legalitas-create" , "addData");
				break;
				case 'f433':
					dataFec = [{
							'noreg'	 		: recentId,
							'caption'		: $('#f-bidangGerak-create input[name="nama"]').val(),
					}];
					r_f4KelembagaanSectionGenerator(formType, 'bidangGerak', dataFec, 'section-bidangGerak');
					clearTargetForm('f-bidangGerak-create');
					p_formHandler("f-bidangGerak-create" , "addData");
				break;
				case 'f441':
					dataFec = [{
							'idBerita'		: recentId,
							'judul'			: $('#f-berita-create input[name="judul"]').val(),
							'isiBerita'		: $('#f-berita-create textarea[name="isiBerita"]').val(),
					}];
					r_f4BeritaGenerator(dataFec);
					$("#f-berita-create [name=imgName]").html("berkas belum diunggah...");
					$("#f-berita-create [browser-id=gambar-berita] ").css('display', 'none');
					clearTargetForm('f-berita-create');
				break;
			}
		break;
		case 'fLogin': //megan
			if(recentId != null){
				r_setCookie('login'			, recentId.login, 		1);
				r_setCookie('noRegistrasi'	, recentId.noRegistrasi,1);
				r_setCookie('username'		, recentId.username, 	1);
				r_setCookie('nama'			, recentId.nama, 		1);
				r_setCookie('userLevel'		, recentId.userLevel, 	1);
				r_setCookie('avatar'		, recentId.avatar, 		1);
				r_setCookie('lingkupArea'	, recentId.lingkupArea, 1);
				r_setCookie('idBatasArea'	, recentId.idBatasArea, 1);
				r_setCookie('statusActive'	, recentId.statusActive,1);

				var accessList = recentId.accessList; console.log(accessList);
				for(var look=0; look<accessList.length; look++){
					r_setCookie(accessList[look].module + 'Lihat', accessList[look].lihat, 1);
					r_setCookie(accessList[look].module + 'Tambah',accessList[look].tambah,1);
					r_setCookie(accessList[look].module + 'Ubah',  accessList[look].ubah,  1);
					r_setCookie(accessList[look].module + 'Hapus', accessList[look].hapus, 1);


					if(accessList[look].module == 'kelembagaan' && accessList[look].lihat == '0') { $('#navigation .kelembagaan').remove(); }
				}

				moduleActive  = accessList;
				moduleCounter = accessList.length;
			}

			logoutAgent = 0;

			if(recentId.userLevel == 1){
				r_navigateTo(12, recentId.noRegistrasi);
			}else if(recentId.userLevel != ""){
				r_navigateTo(0);
				if(recentId.avatar == "" || recentId.avatar == null) {
					recentId.avatar = "avatar-default.jpg";
				}
				$("#navigation .user-frame img").attr('src', 'img/avatar/' + recentId.avatar);
				$("#navigation .user-frame p.caption span").html(recentId.username);
				$("#navigation .user-frame p.caption span.big").html(recentId.nama);
			}
		break;
	}

}

function r_autoCompleteCallback(targetIndex, sources, sourcesDetail, ui, targetId){
	switch (targetIndex){
		case "hirarkiLembaga":
			var source_1 = sourcesDetail[1];
			var source_2 = sourcesDetail[2];

			$("#" + targetId).val(source_2[sources.indexOf(ui.item.value)]);
			$("#" + targetId + "_kode").val(source_1[sources.indexOf(ui.item.value)]);
			$("#" + targetId).on("keyup", function(){
				if($(this).val() == ""){
					$("#" + targetId + "_kode").val("");
				}
			});
		break;
		case "lingkupArea":
			$("#" + targetId).val(sourcesDetail.list[sources.indexOf(ui.item.value)].namaKelurahan);
			$("#" + targetId + "_2").val(sourcesDetail.list[sources.indexOf(ui.item.value)].namaKecamatan);
			$("#" + targetId + "_3").val(sourcesDetail.list[sources.indexOf(ui.item.value)].namaWilayah);
			$("#" + targetId + "_4").val(sourcesDetail.list[sources.indexOf(ui.item.value)].namaProvinsi);

			$("#" + targetId + "_kode").val(sourcesDetail.list[sources.indexOf(ui.item.value)].idKelurahan);
			$("#" + targetId + "_kode2").val(sourcesDetail.list[sources.indexOf(ui.item.value)].idKecamatan);
			$("#" + targetId + "_kode3").val(sourcesDetail.list[sources.indexOf(ui.item.value)].idWilayah);
			$("#" + targetId + "_kode4").val(sourcesDetail.list[sources.indexOf(ui.item.value)].idProvinsi);

			$("#" + targetId + "_kodeArea").val(sourcesDetail.list[sources.indexOf(ui.item.value)].kodeKelurahan);
			$("#" + targetId + "_kodeArea2").val(sourcesDetail.list[sources.indexOf(ui.item.value)].kodeKecamatan);
			$("#" + targetId + "_kodeArea3").val(sourcesDetail.list[sources.indexOf(ui.item.value)].kodeWilayah);
			$("#" + targetId + "_kodeArea4").val(sourcesDetail.list[sources.indexOf(ui.item.value)].kodeProvinsi);

			$("#" + targetId).on("keyup", function(){
				if($(this).val() == ""){
					$("#" + targetId + "_2").val("");
					$("#" + targetId + "_3").val("");
					$("#" + targetId + "_4").val("");
					$("#" + targetId + "_kode").val("");
					$("#" + targetId + "_kode2").val("");
					$("#" + targetId + "_kode3").val("");
					$("#" + targetId + "_kode4").val("");
					$("#" + targetId + "_kodeArea").val("");
					$("#" + targetId + "_kodeArea2").val("");
					$("#" + targetId + "_kodeArea3").val("");
					$("#" + targetId + "_kodeArea4").val("");
				}
			});
		break;
		case "batasArea":
			$("#" + targetId).val(sourcesDetail[sources.indexOf(ui.item.value)].nama);
			$("#" + targetId + "_id").val(sourcesDetail[sources.indexOf(ui.item.value)].idData);
			$("#" + targetId).on("keyup", function(){
				if($(this).val() == ""){
					$("#" + targetId + "_id").val("");
				}
			});
		break;
	}
}

function r_pageClear(){
	$('body').removeClass('clear bg-white');
	mainPage.html('');
	footPage.html('');
}

function r_optionDHtml(group){
	var optionHtml ="";

	switch(group){
		case "provinsi":
			if(optionD != null && optionD[0].provinsi != undefined){
				for(var loop=0; loop<optionD[0].provinsi.length; loop++){
					optionHtml = optionHtml + '<option value="' + optionD[0].provinsi[loop].idData + '">' + optionD[0].provinsi[loop].caption + '</option>';
				}
			}
		break;
		case "wilayah":
			if(optionD != null && optionD[0].wilayah != undefined){
				for(var loop=0; loop<optionD[0].wilayah.length; loop++){
					optionHtml = optionHtml + '<option value="' + optionD[0].wilayah[loop].idData + '">' + optionD[0].wilayah[loop].caption + '</option>';
				}
			}
		break;
		case "wilayahSpecial":
			if(optionSpecial.length == 0){
				optionSpecial = p_getData('f4', 'f4010');
				optionSpecial = optionSpecial.feedData;
			}

			if(optionSpecial != null && optionSpecial.length > 0){
				for(var loop=0; loop<optionSpecial.length; loop++){
					optionHtml = optionHtml + '<option value="' + optionSpecial[loop].idData + '">' + optionSpecial[loop].caption + '</option>';
				}
			}
		break;
		case "kecamatan":
			if(optionD != null && optionD[0].kecamatan != undefined){
				for(var loop=0; loop<optionD[0].kecamatan.length; loop++){
					optionHtml = optionHtml + '<option value="' + optionD[0].kecamatan[loop].idData + '">' + optionD[0].kecamatan[loop].caption + '</option>';
				}
			}
		break;
		case "kelurahan":
			if(optionD != null && optionD[0].kelurahan != undefined){
				for(var loop=0; loop<optionD[0].kelurahan.length; loop++){
					optionHtml = optionHtml + '<option value="' + optionD[0].kelurahan[loop].idData + '">' + optionD[0].kelurahan[loop].caption + '</option>';
				}
			}
		break;
		case "level":
			if(r_getCookie('userLevel') == '7' || r_getCookie('userLevel') == '3')
				optionHtml = optionHtml + '<option value="2">Level 2</option>';
			if(r_getCookie('userLevel') == '7')
				optionHtml = optionHtml + '<option value="3">Level 3</option>';
		break;
		case "kelembagaan":
			var data 	= p_getData('f4', 'f431');
			if(data != null && data.feedData != null) {
				data = data.feedData;

				for(var loop=0; loop<data.length; loop++){
					optionHtml = optionHtml + '<option value="' + data[loop].noreg + '">' + data[loop].caption + '</option>';
				}
			}
		break;
	}

	return optionHtml;
}

function r_headPageHtml(type, title){
	/*--clear class*/ headHome.removeClass('parent blank theme clear');
	var headHtml = "";
	if(type != "home"){
		headHtml = '<div class="container"><div class="col-xs-12 frame">';
		var headPart = ['','',''];

		/*--left */  headPart[0] = '<div class="fly left">';
		/*--mid */   headPart[1] = '';
		/*--right */ headPart[2] = '<div class="fly right">';

		switch(type) {
			case 0:
				headPart[0] = headPart[0] + '<div class="title"><span>' + title + '</span></div>';
			break;
			case 1:
				headPart[0] = headPart[0] + '<div class="title"><span>' + title + '</span></div>';
				headPart[2] = headPart[2] + '<div class="click" id="notif-ring"><span class="fa fa-bell bell"></span></div>';
				headPart[2] = headPart[2] + '<div class="click" syncnav-target="#option"><span class="fa fa-bars"></span></div>';
			break;
			case 2:
				headPart[0] = headPart[0] + '<div class="click back-button"><img class="icon-type" src="img/sources/arrow-left.png" /></div>';
				headPart[0] = headPart[0] + '<div class="title"><span>' + title + '</span></div>';

			break;
			case 3:
				headPart[0] = headPart[0] + '<div class="click back-button"><img class="icon-type" src="img/sources/arrow-left.png" /></div>';
				headPart[0] = headPart[0] + '<div class="title"><span>' + title + '</span></div>';

				headPart[2] = headPart[2] + '<div class="click" id="notif-ring"><span class="fa fa-bell bell"></span></div>';
				headPart[2] = headPart[2] + '<div class="click" syncnav-target="#option"><span class="fa fa-bars"></span></div>';
			break;
			case 4:
				headPart[0] = headPart[0] + '<div class="click back-button"><img class="icon-type" src="img/sources/arrow-left.png" /></div>';
				headPart[0] = headPart[0] + '<div class="title"><span>' + title + '</span></div>';

				headPart[1] = headPart[1] + '<div class="search-box"><div class="icon-box right"><input class="search-input" placeholder="Cari lembaga" type="text" value="" /></div></div>';

				headPart[2] = headPart[2] + '<div class="click search-button"><span class="fa fa-search"></span></div>';
				headPart[2] = headPart[2] + '<div class="click" id="notif-ring"><span class="fa fa-bell bell"></span></div>';
				headPart[2] = headPart[2] + '<div class="click" syncnav-target="#option"><span class="fa fa-bars"></span></div>';
			break;
			case 5:
				headPart[0] = headPart[0] + '<div class="click back-button"><img class="icon-type" src="img/sources/arrow-left.png" /></div>';
				headPart[0] = headPart[0] + '<div class="title"><span>' + title + '</span></div>';

				headPart[1] = headPart[1] + '<div class="search-box clear-right"><div class="icon-box right"><input class="search-input" placeholder="Cari lembaga" type="text" value="" /></div></div>';

				headPart[2] = headPart[2] + '<div class="click search-button"><span class="fa fa-search"></span></div>';
			break;
		}

		/*--left */  headPart[0] = headPart[0] +	'</div>';
		/*--right */ headPart[2] = headPart[2] +	'</div>';

		headHtml = headHtml + headPart[0] + headPart[1] + headPart[2] + '</div></div>';
		headHome.addClass('parent theme');
	}else {
		headHtml =
		'<div class="col-md-3 hidden-sm hidden-xs inbound">' +
			'<h4>DPLEGA 2.0</h4>' +
		'</div>' +
		'<div class="col-md-9 inbound text-right">' +
				'<button type="button" class="clear go-login">LOGIN</button>' +
		'</div>';

		headHome.addClass('blank theme clear');
	}

	return headHtml;
}

function r_footPageHtml(type){
	/*--clear class*/ footPage.removeClass('static');
	var footHtml = "";
	switch(type) {
		case "credit":
			footHtml =
			'<div class="container">' +
				'<div class="col-md-4 col-md-offset-8 author-box">' +
					'<div class="frame">' +
						'<div class="border">' +
							'<span>2017 | Supported by Syncard Technology</span>' +
							'<img src="img/sources/syncard.png" />' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>';

			footPage.addClass('static');
		break;

		case "add":
			footHtml =
			'<div class="container">' +
				'<div class="col-md-1 col-md-offset-11 command-box">' +
					'<button id="add-button" type="button" class="btn btn-circle cyan">+</button>' +
				'</div>' +
			'</div>';
		break;
	}

	return footHtml;
}


/* Page templates */
/* ====================================================================== */
/* ====================================================================== */
/*F*/
/*F1*/
function r_fHome() {
	//$("body").prepend(preload);
	$('main.parent').animate({'opacity': '0.6'},'fast','linear', function(){
		mainPage.html('');
		head  	= '';
		body  	= '';
		part	= ['',''];
		content = '';
		data 	= [
			{
				'contact': [
					{
						'alamat': 'Jl. Diponegoro No. 22  Bandung Jawa Barat',
						'telp'  : '( 022 ) 4232448,  4233347,  4230963.',
						'fax'   : '( 022 ) 4203450',
						'cs'    : '+6257 2019 3333',
						'email' : 'dplega@jabarprov.go.id',
					}
				]
			}
		];

		dataNews = p_getData('f4','f441','');
		dataNews = dataNews.feedData;

		//--open
		head	=
		'<div class="row no-head jumbotron-ground">' +
			'<div id="slider-background">' +
				'<div class="col-md-3 bg-black-mirror banner-black">' +
					'<div class="button-box">' +
						'<h5 class="theme-color text-bold">NAVIGASI</h5>' +
						'<button type="button" class="clear text-white" id="go-websiteResmi">WEBSITE RESMI</button>' +
						'<button type="button" class="clear text-white" id="go-beritaTerkini">BERITA TERKINI</button>' +
						'<button type="button" class="clear text-white" id="go-kelembagaan">KELEMBAGAAN</button>' +
						'<button type="button" class="clear text-white" id="go-kontak">KONTAK</button>' +
					'</div>' +
				'</div>' +
				'<div class="col-md-9 jumbotron-content bg-black-mirror">' +
					'<div class="jumbotron-bg text-shadow">' +
						'<div class="logo-container"><img class="logo-user" src="img/logo_jabar.png"></div>' +
						'<h1>PUSAT DATA POTENSI LEMBAGA KEAGAMAAN DI JAWA BARAT</h1>' +
						'<h5>BIRO PELAYANAN DAN PENGEMBANGAN SOSIAL</h5>' +
						'<p>' +
							'Halo pengunjung ! <br/>' +
							'Kami ucapkan selamat datang, akhirnya kami dapat kembali meningkatkan pelayanan kepada anda, dan tiada ' +
							'hentinya kami terus melakukan perbaikan agar menjadi lebih baik lagi.<br/><br/>Dplega adalah layanan berbasis online kepada ' +
							'masyarakat untuk menyediakan data kelembagaan yang telah tercatat secara legal serta telah melewati proses ' +
							'verifikasi sehingga dinyatakan sah sebagai suatu kelembagaan.' +
						'</p>' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="jumbotron-button">' +
				'<div class="col-md-12">' +
					'<button type="button" class="btn-link text-white go-scroll"><i class="fa fa-angle-double-down fa-3x"></i></button>' +
				'</div>' +
			'</div>' +
			'<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">' +
			  '<!-- Indicators -->' +
			  '<ol class="carousel-indicators">' +
			    '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>' +
			    '<li data-target="#myCarousel" data-slide-to="1"></li>' +
			    '<li data-target="#myCarousel" data-slide-to="2"></li>' +
			  '</ol>' +

			  '<!-- Wrapper for slides -->' +
			  '<div class="carousel-inner">' +
			    '<div class="item active">' +
			      '<img src="img/bg-1.jpg" alt="DPLEGA 2.0">' +
			      '<!--div class="carousel-caption">' +
			        '<h3>Los Angeles</h3>' +
			        '<p>LA is always so much fun!</p>' +
			     '</div-->' +
			    '</div>' +

			    '<div class="item">' +
			      '<img src="img/bg-2.jpg" alt="DPLEGA 2.0">' +
			      '<!--div class="carousel-caption">' +
			        '<h3>Chicago</h3>' +
			        '<p>Thank you, Chicago!</p>' +
			      '</div-->' +
			    '</div>' +

			    '<div class="item">' +
			      '<img src="img/bg-3.jpg" alt="DPLEGA 2.0">' +
			      '<!--div class="carousel-caption">' +
			        '<h3>New York</h3>' +
			        '<p>We love the Big Apple!</p>' +
			      '</div-->' +
			    '</div>' +
			  '</div>' +

			  '<!-- Left and right controls -->' +
			  '<!--a class="left carousel-control" href="#myCarousel" data-slide="prev">' +
			    '<span class="glyphicon glyphicon-chevron-left"></span>' +
			    '<span class="sr-only">Previous</span>' +
			  '</a>' +
			  '<a class="right carousel-control" href="#myCarousel" data-slide="next">' +
			    '<span class="glyphicon glyphicon-chevron-right"></span>' +
			    '<span class="sr-only">Next</span>' +
			  '</a-->' +
			'</div>' +
		'</div>';

		body	= '<div id="website-section" class="row"><div class="col-md-12">';
		//--license detail
		body	= body +
		'<div class="cards no-bg">' +
			'<div class="banner-box">' +
				'<div class="text text-center">' +
					'<h4>WEBSITE RESMI</h4>' +
					'<div class="space-box"></div>' +
					'<a class="link" href="#"><span class="fa fa-facebook-official"></span></a>' +
					'<a class="link" href="#"><span class="fa fa-twitter"></span></a>' +
					'<a class="link" href="#"><span class="fa fa-instagram"></span></a>' +
					'<a class="link" href="#"><span class="fa fa-google-plus"></span></a>' +
					'<h5>Copyright © 2017 Pemerintah Provinsi Jawa Barat.</h5>' +
					'<h6>Supported by Syncard Technology</h6>' +
				'</div>' +
			'</div>' +
		'</div>';

		body 	= body + '</div></div>';
		body	= body + '<div class="row"><div class="col-md-12"><div class="row default">';
		body = body +
			'<div id="berita-section" class="cards clear-bold no-shadow bg-smooth">' +
				'<div class="col-md-8 col-md-offset-2">' +
					'<div class="row">' +
						'<div class="cards-header">' +
							'<h4>BERITA TERKINI</h4>' +
						'</div>';

		//--render data
		for(var loop = 0; loop < dataNews.length; loop++){
			//--content
			body = body +
			'<div class="article-box">' +
				'<div class="body">' +
					'<h4 class="title">' + dataNews[loop].judul +  '</h4>' +
					'<p class="title">' + timeSince(new Date(Date.parse(dataNews[loop].createdDate))) +  '</p>' +
					'<p class="content">' + dataNews[loop].isiBerita +  '</p>' +
				'</div>' +
				'<div class="foot">' +
					'<button type="button" class="clear btn-link detail-click" p-id="' + dataNews[loop].idBerita +  '">Baca lebih lanjut</button>' +
				'</div>	' +
			'</div>';
		}

		if(dataNews.length == 0){
			body = body +
			'<div class="article-box">' +
				'<div class="body">' +
					'<p class="title">Belum ada berita.</p>' +
				'</div>' +
			'</div>';
		}

		body = body +
					'</div>' +
				'</div>' +
				'<div class="clearfix"></div>' +
			'</div>';

		body	= body + '</div></div></div>';

		//--more news detail
		body	= body +
		'<!--div class="cards clear">' +
			'<div class="article-box">' +
				'<div class="single">' +
					'<button type="button" class="clear btn-link more-click">Lihat selengkapnya</button>' +
				'</div>' +
			'</div>' +
		'</div-->';


		body	= body + '<div id="kelembagaan-section" class="row"><div class="col-md-12"><div class="row default">';
		//--quick nav
		body	= body +
		'<div class="col-md-8 col-md-offset-2">' +
			'<div class="empty-box"></div>' +
			'<h4>KELEMBAGAAN</h4>' +
			'<p>kami menyediakan daftar lembaga yang berisi data yang berkaitan dengan kontak lembaga, agar baik masyarakat maupun lembaga dapat saling berhubungan atau dapat memanfaatkan data dengan baik.</p>' +
			'<h4><b>Sumber data dari PAH ' + ((new Date()).getFullYear() - 1) + '</h4></p>' +
			'<div class="space-box"></div>' +
			'<div class="row default">' +
				'<div class="cards-label plus">' +
					'<p>' +
						'<strong>Kelembagaan</strong>' +
					'</p>' +
				'</div>' +
			'</div>' +
		'</div><div class="clearfix"></div>';

		/*--left*/  part[0] = '<div class="col-md-6"><div class="row default">';
		/*--right*/ part[1] = '<div class="col-md-6"><div class="row default">';

		//--render quick nav
		var indexes = 0;
		var dataT 	= p_getData('f4', 'f431', '', '');
		dataT 		= dataT.feedData;

		if(dataT != null){
			for(var loop = 0; loop < dataT.length; loop++){
				//--content
				part[indexes] = part[indexes] +
				'<div class="cards">' +
					'<div class="navigation-box group-click" p-id="' + dataT[loop].noreg + '" p-caption="' + dataT[loop].caption + '">' +
						'<div class="caption">' +
							'<span>' + dataT[loop].caption + ' (' + (parseInt(dataT[loop].ajuan) + parseInt(dataT[loop].valid)) + ')</span>' +
						'</div>' +
					'</div>' +
				'</div>';
				indexes++;
				if(indexes > 1){ indexes = 0; }
			}
		}

		part[0]	= part[0] + '</div></div>';
		part[1]	= part[1] + '</div></div>';
		/*-- fetch*/ body = body + '<div class="col-md-8 col-md-offset-2"><div class="row default">' + part[0] + part[1] + '</div></div><div class="clearfix"></div>';

		/*-- static quicnav*/
		body	= body +
		'<div class="col-md-8 col-md-offset-2">' +
			'<div class="row default">' +
				'<div class="cards-label plus">' +
					'<p>' +
						'<strong>Lainnya</strong>' +
					'</p>' +
				'</div>' +
				'<div class="col-md-6">' +
					'<div class="row default">' +
						'<div class="cards">' +
							'<div class="navigation-box koleksi-click">' +
								'<div class="caption">' +
									'<span>Koleksi</span>' +
								'</div>' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>' +
				'<div class="col-md-6">' +
					'<div class="row default">' +
						'<div class="cards">' +
							'<div class="navigation-box prestasi-click">' +
								'<div class="caption">' +
									'<span>Prestasi</span>' +
								'</div>' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="empty-box"></div>' +
		'</div>';




		/*--main close*/
		body	= body + '</div></div></div>';

		var wilayah_ = [
			"Kab.Bandung",
			"Kab.Bandung Barat",
			"Kab.Bekasi",
			"Kab.Bogor",
			"Kab.Ciamis",
			"Kab.Cianjur",
			"Kab.Cirebon",
			"Kab.Garut",
			"Kab.Indramayu",
			"Kab.Karawang",
			"Kab.Kuningan",
			"Kab.Majalengka",
			"Kab.Pangandaran",
			"Kab.Purwakarta",
			"Kab.Subang",
			"Kab.Sukabumi",
			"Kab.Sumedang",
			"Kab.Tasikmalaya",
			"Kota Bandung",
			"Kota Banjar",
			"Kota Bekasi",
			"Kota Bogor",
			"Kota Cimahi",
			"Kota Cirebon",
			"Kota Depok",
			"Kota Sukabumi",
			"Kota Tasikmalaya"
		];

		/*-- static quicnav info*/
		body	= body +
		'<div id="kontak-section">' +
			'<div class="row">' +
				'<div class="space-box"></div>' +
					'<div class="col-md-8 col-md-offset-2">' +
						'<div class="row default">' +
							'<div class="cards-label plus">' +
								'<h4>' +
									'<strong>Informasi Kontak PAH 2018</strong>' +
								'</h4>' +
							'</div>';

			for(loop=0;loop<wilayah_.length;loop++){
				body	= body +
				'<div class="col-md-6">' +
					'<div class="row default">' +
						'<div class="cards">' +
							'<div class="navigation-box kontak-click" p-id="' + loop + '" p-reff="' + wilayah_[loop] + '">' +
								'<div class="caption">' +
									'<span>' + wilayah_[loop] + '</span>' +
								'</div>' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>';
			}

		body	= body +
			'</div>' +
			'<div class="empty-box"></div>' +
		'</div></div></div>';

		/*--static footer*/
		body	= body +
		'<div id="kontak-section_" class="row foot">' +
			'<div class="row">' +
				'<div class="space-box"></div>' +
				'<div class="col-md-8 col-md-offset-2 relative bg-gsate">' +
					'<h4>KONTAK</h4>' +
					'<p>' + data[0].contact[0].alamat + '</p>' +
					'<p>Telp. ' + data[0].contact[0].telp + '</p>' +
					'<p>Fax.  ' + data[0].contact[0].fax + '</p>' +
					'<p>CS.   ' + data[0].contact[0].cs + '</p>' +
					'<p>Email. ' + data[0].contact[0].email + '</p>' +
					'<div class="banner-box">' +
						'<div class="text clear-left">' +
							'<div class="space-box"></div>' +
							'<a class="link clear" href="#"><span class="fa fa-facebook-official"></span></a>' +
							'<a class="link" href="#"><span class="fa fa-twitter"></span></a>' +
							'<a class="link" href="#"><span class="fa fa-instagram"></span></a>' +
							'<a class="link" href="#"><span class="fa fa-google-plus"></span></a>' +
						'</div>' +
					'</div>' +
					'<button type="button" class="clear scroll-up"><img src="img/sources/arrow-right.png" /></button>' +
				'</div>' +
			'</div>' +
		'</div>';



		content = '<section id="home">' + head + body + '</section>';

		modal =
		'<div id="info" class="modal fade" role="dialog">' +
		  '<div class="modal-dialog">' +
		    '<!-- Modal content-->' +
		    '<div class="modal-content">' +
		      '<div class="modal-header">' +
		        '<button type="button" class="close" data-dismiss="modal">&times;</button>' +
		        '<h4 class="modal-title">Pemberitahuan.</h4>' +
		      '</div>' +
		      '<div class="modal-body">' +
		        '<p>Kami beritahukan kepeda seluruh Lembaga Keagamaan Jawa Barat khususnya kepada Lembaga yang belum terdaftar.</p>' +
						'<p>Kami akan informasikan bahwa Anda dapat menghubungi PAH perwakilan Wilayah untuk dapat mendaftarkan data Kelembagaan,</p>' +
						'<p>Daftar Kontak yang dapat dihubungi terletak dibawah laman ini di bagian,</p>' +
						'<h4><b>Informasi Kontak PAH 2018</b></h4>' +
						'<p>atau <a href="#" class="kontak-go">Klik disini</a></p>' +
						'<br/>' +
						'<p>Terima Kasih</p>' +
						'<br/>' +
						'<p>Tim DPLEGA 2018</p>' +
					'</div>' +
		      '<div class="modal-footer">' +
		        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
		      '</div>' +
		    '</div>' +
		  '</div>' +
		'</div> <style>.modal-backdrop.in{ opacity: 0.7; }.modal-backdrop{ background-color: #111; }</style>';
		//--close

		//--gen
		$('body').addClass('clear');
		headPage.html(r_headPageHtml('home', ''));
		mainPage.html(content).animate({'opacity': '1'},'fast','linear');
		$('body').append(modal);
		//$("#preload").remove();

		//--command reactor
		$(".go-login").unbind().on('click', function(){ r_navigateTo(99); });
		$(".more-click").unbind().on('click', function(){ r_navigateTo(44); });
		$(".detail-click").unbind().on('click', function(){ r_navigateTo(441, $(this).attr('p-id')); });
		$(".group-click").unbind().on('click', function(){ r_navigateTo(91, [$(this).attr('p-id'), $(this).attr('p-caption')]); });
		$(".koleksi-click").unbind().on('click', function(){ r_navigateTo(14); });
		$(".prestasi-click").unbind().on('click', function(){ r_navigateTo(16); });
		$(".kontak-click").unbind().on('click', function(){ r_navigateTo(92, [$(this).attr('p-id'), $(this).attr('p-reff')]); });

		//scrolling
		var sec1 = $(window).innerHeight();
		var sec2 = $('#website-section').innerHeight();
		var sec3 = $('#berita-section').innerHeight();
		var sec4 = $('#kelembagaan-section').innerHeight();
		var sec5 = $('#kontak-section').innerHeight();

		$(".go-scroll").unbind().on('click', function(){ scrollPage(sec1); });
		$("#go-websiteResmi").unbind().on('click', function(){ scrollPage(sec1); });
		$("#go-beritaTerkini").unbind().on('click', function(){ scrollPage(sec1 + sec2); });
		$("#go-kelembagaan").unbind().on('click', function(){ scrollPage(sec1 + sec2 + sec3); });
		$("#go-kontak, .kontak-go").unbind().on('click', function(){ scrollPage(sec1 + sec2 + sec3 + sec4); $("#info").modal('hide'); });
		$(".scroll-up").unbind().on('click', function(){ backToTop(); });


		//--css mod
		if(sec1 >= 600) $(".jumbotron-ground").css('height', ($(window).innerHeight()*1));
		else $(".jumbotron-ground").css('height', 694);

		$('#myCarousel').carousel({
		  interval: 3000,
		  cycle: true
		});

		$("#info").modal('show');
	});
}

function r_fLogin() {
	$("body").prepend(preload);
	$('main.parent').animate({'opacity': '0.6'},'fast','linear', function(){
		mainPage.html('');
		head  	= '';
		body  	= '';
		part	= ['',''];
		content = '';
		data 	= [
			{'bentukLembaga':'Yayasan', 'jumlahData': '4', 'picture': 'icon-1.png', 'deskripsi': 'Lorem ipsum dolor sit amet'},
			{'bentukLembaga':'Perkumpulan', 'jumlahData': '2', 'picture': 'icon-2.png', 'deskripsi': 'Lorem ipsum dolor sit amet'},
		];

		//--open
		head	= '';
		body	=
		'<form id="f-login" f-group="fLogin" f-target="fLogin">' +
			'<div class="row no-head">' +
				'<div class="container">' +
					'<div class="col-md-6 col-md-offset-3">' +
						'<div class="empty-box"></div>' +
						'<div class="cards">' +
							'<div class="cards-header">' +
								'<p class="fixed">LOGIN</p>' +
							'</div>' +
							'<div class="space-box lock-picture"></div>' +
							'<div class="input-box">' +
								'<div class="icon-box left">' +
									'<input placeholder="Username" name="username" tabindex="1" type="text" value="" autofocus="autofocus" />' +
									'<span class="fa fa-user text-yellow"></span>' +
								'</div>' +
							'</div>' +
							'<div class="input-box">' +
								'<div class="icon-box left">' +
									'<input placeholder="Password" name="password" tabindex="1" type="password" value="" />' +
									'<span class="fa fa-lock text-yellow"></span>' +
								'</div>' +
							'</div>' +
							'<div class="space-box"></div>' +
						'</div>' +
						'<div class="cards flush">' +
							'<div class="cards-header">' +
								'<p class="fixed">&nbsp;</p>' +
								'<div class="btn-collapse left small">' +
									'<button class="clear go-login text-cyan" type="submit">Masuk &nbsp; <span class="fa fa-angle-right"></span></button>' +
									'<!--button class="clear" type="button"><span class="fa fa-filter"></span></button-->' +
								'</div>' +
							'</div>' +
						'</div>' +
					'</div>' +
					'<div class="col-md-8 col-md-offset-2">' +
						'<div class="cards no-bg">' +
							'<div class="cards-header special">' +
								'<h5>Copyright © 2017 Pemerintah Provinsi Jawa Barat.</h5>' +
								'<h6>Supported by Syncard Technology</h6>' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
		'</form>';

		content = '<section id="login">' + head + body + '</section>';
		//--close

		//--gen
		headPage.html(r_headPageHtml(2, 'Login'));
		mainPage.html(content).animate({'opacity': '1'},'fast','linear');
		$("#preload").remove();

		//--command reactor
		$(".back-button").unbind().on('click', function(){ r_navigateTo(); });
		//$(".go-login").unbind().on('click', function(){ r_navigateTo(0); });

		p_formHandler('f-login', 'login');
	});
}

function r_fNotification() {
	$("body").prepend(preload);
	$('main.parent').animate({'opacity': '0.6'},'fast','linear', function(){
		mainPage.html('');
		head  	= '';
		body  	= '';
		part	= ['','','',''];
		content = '';
		data	= p_getData('fNotification', 'f110', '');

		//--open
		head = '';
		body = '<div class="row no-head"><div class="container"><div class="col-md-10 col-md-offset-1">';

		if(data.feedData != null){
			for(var loop = 0; loop < data.feedData.length; loop++){
				//--group
				var counta = 0;
				if(data.feedData[loop].list != null){
					counta = data.feedData[loop].list.length;

					body = body +
					'<div class="cards-label ' + ((loop > 0) ? "plus" : '') + '">' +
						'<p>' +
							'<strong>' + data.feedData[loop].group + ' (' + counta + ')</strong>' +
						'</p>' +
					'</div>';

					for(var look = 0; look < data.feedData[loop].list.length; look++){
						body = body +
						'<div class="cards bakcup-list">' +
							'<div class="row default">' +
								'<div class="col-xs-9">' +
									'<div class="list-box">' +
										'<div class="list-icon bg-yellow"><span class="fa fa-bell"></span></div>' +
										'<p class="list-text">' + data.feedData[loop].list[look].deskripsi + '</p>' +
									'</div>' +
								'</div>' +
								'<div class="col-xs-3">' +
									'<div class="list-box clear">' +
										'<p class="list-text">' + timeSince(new Date(Date.parse(data.feedData[loop].list[look].waktu))) + '</p>' +
									'</div>' +
								'</div>' +
								'<div class="clearfix"></div>' +
							'</div>' +
						'</div>';
					}
				}else{
					if(loop ==0){
						body = body +
						'<div class="cards">' +
							'<div class="cards-header">' +
								'<p class="fixed offset text-black">Tidak ada pemberitahuan.</p>' +
							'</div>' +
						'</div>';
					}
				}
			}
		}else{
			body = body +
			'<div class="cards">' +
				'<div class="cards-header">' +
					'<p class="fixed offset text-black">Tidak ada pemberitahuan.</p>' +
				'</div>' +
			'</div>';
		}

		body	= body + '</div></div></div>';
		content = '<section id="">' + head + body + '</section>';
		//--close

		//--gen
		headPage.html(r_headPageHtml(3, 'Pemberitahuan'));
		mainPage.html(content).animate({'opacity': '1'},'fast','linear');
		$("#preload").remove();

		//--command reactor
		$(".back-button").unbind().on('click', function(){ r_navigateTo(r_pagePreviousReader()); });
		r_navbarReactor();
	});
}

/*F0*/
function r_f0Dashboard() {
	$("body").prepend(preload);
	$('main.parent').animate({'opacity': '0.6'},'fast','linear', function(){
		mainPage.html('');
		head  	= '';
		body  	= '';
		part	= ['',''];
		content = '';
		data 	= [{
			'summary':[
				{'caption':'Total data ajuan', 'counter': '0', 'id': 'ajuan'},
				{'caption':'Total data sudah verfikasi', 'counter': '0', 'id': 'verifikasi'},
				{'caption':'Total data akun (lembaga)', 'counter': '0', 'id': 'akun'},
			]

		}];

		dataT 	= p_getData('f4', 'f431', '', '');
		dataT 	= dataT.feedData;

		var counta = 0;
		var countv = 0;

		//--open
		head	=
		'<div class="row no-head">'+
			'<div class="container">' +
				'<div class="col-md-12">' +
					'<div class="col-md-6">' +
						'<h3 class="text-black">Selamat datang!</h3>' +
						'<p class="text-black">DPLEGA 2.0 dirancang sedemikian rupa agar memenuhi kebutuhan dan kenyamanan penggunaan, kelola data - data lembaga, data kelengkapan pendukungnya serta rasakan kenyamanan penggunaan aplikasi ini di smartphone anda.</p>' +
						'<p class="text-black">Version update 1.9 Beta</p>' +
					'</div>' +
					'<div class="col-md-6 jumbotron-bg">' +
						'<div class="empty-box"></div>' +
						'<div class="empty-box"></div>' +
					'</div>' +
					'<div class="clearfix"></div>' +
				'</div>' +
			'</div>' +
		'</div>';

		body	= '<div class="row no-head"><div class="container">';
		part[0] = '<div class="col-md-4">';
		part[1] = '<div class="col-md-8">';

		//--render data left
		for(var loop = 0; loop < data[0].summary.length; loop++){
			part[0] = part[0] +
			'<div class="cards">' +
				'<div class="cards-header">' +
					'<p class="fixed offset">' + data[0].summary[loop].caption + '</p>' +
					'<div class="btn-collapse right">' +
						'<button class="clear" type="button"><span class="fa fa-refresh"></span></button>' +
					'</div>' +
				'</div>' +
				'<!--div class="summary-shead">' +
					'<p class="caption">' + data[0].summary[loop].caption + '</p>' +
				'</div-->' +
				'<div class="summary-sbody">' +
					'<p class="counter" id="' + data[0].summary[loop].id + '">' + data[0].summary[loop].counter + '</p>' +
				'</div>' +
				'<!--div class="summary-sfoot">' +
					'<button class="btn-link click" type="button">Lihat data <img class="btn-icon-set" src="img/sources/arrow-right-black.png" /></button>' +
				'</div-->' +
				'<div class="space-box"></div>' +
			'</div>';
		}

		part[1] = part[1] +
		'<div class="cards title">' +
			'<div class="cards-header">' +
				'<p class="fixed">Jumlah kolektif lembaga.</p>' +
				'<div class="btn-collapse right">' +
					'<button class="clear" type="button"><span class="fa fa-refresh"></span></button>' +
				'</div>' +
			'</div>' +
		'</div>';

		if(dataT != null){
			for(var loop = 0; loop < dataT.length; loop++){
				counta = counta + parseInt(dataT[loop].ajuan);
				countv = countv + parseInt(dataT[loop].valid);
				part[1] = part[1] +
				'<div class="cards">' +
					'<div class="row default">' +
						'<div class="col-md-6">' +
							'<div class="summary-box">' +
								'<div class="caption">' +
									'<span>' + dataT[loop].caption + '</span>' +
								'</div>' +
								'<div class="counter prime">' +
									'<span id="countT">' + (parseInt(dataT[loop].valid) + parseInt(dataT[loop].ajuan)) + '</span>' +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div class="col-md-3">' +
							'<div class="summary-box">' +
								'<div class="caption secondary">' +
									'<span>Sudah verifikasi</span>' +
								'</div>' +
								'<div class="counter second">' +
									'<span>' + dataT[loop].valid + '</span>' +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div class="col-md-3">' +
							'<div class="summary-box">' +
								'<div class="caption secondary">' +
									'<span>Ajuan</span>' +
								'</div>' +
								'<div class="counter">' +
									'<span>' + dataT[loop].ajuan + '</span>' +
								'</div>' +
							'</div>' +
						'</div>' +
					'</div>' +
					'<div class="clearfix"></div>' +
				'</div>';
			}
		}

		part[0] = part[0] + '</div>';
		part[1] = part[1];

		body	= body + part[0] + part[1] +
		'<div class="cards-label plus">' +
			'<p>' +
				'<strong>Navigasi</strong>' +
			'</p>' +
		'</div>' +
		'<div class="col-md-4">' +
			'<div class="row default">' +
				'<div class="cards go-kelembagaan">' +
					'<div class="navigation-box icon-add">' +
						'<span class="fa fa-sitemap icon-set theme-color"></span>' +
						'<div class="caption">' +
							'<span>Kelembagaan</span>' +
						'</div>' +
					'</div>' +
				'</div>' +
				'<div class="cards go-koleksi">' +
					'<div class="navigation-box icon-add">' +
						'<span class="fa fa-book icon-set text-green"></span>' +
						'<div class="caption">' +
							'<span>Koleksi</span>' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<div class="col-md-4">' +
			'<div class="row default">' +
				'<div class="cards go-autentikasi">' +
					'<div class="navigation-box icon-add">' +
						'<span class="fa fa-lock icon-set text-orange"></span>' +
						'<div class="caption">' +
							'<span>Autentikasi</span>' +
						'</div>' +
					'</div>' +
				'</div>' +
				'<div class="cards go-prestasi">' +
					'<div class="navigation-box icon-add">' +
						'<span class="fa fa-trophy icon-set text-yellow"></span>' +
						'<div class="caption">' +
							'<span>Prestasi</span>' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
		'</div>' +
		'<div class="col-md-4">' +
			'<div class="row default">' +
				'<div class="cards go-pengaturan">' +
					'<div class="navigation-box icon-add">' +
						'<span class="fa fa-gear icon-set text-purple"></span>' +
						'<div class="caption">' +
							'<span>Pengaturan</span>' +
						'</div>' +
					'</div>' +
				'</div>' +
				'<div class="cards go-keluar">' +
					'<div class="navigation-box icon-add">' +
						'<span class="fa fa-power-off icon-set text-red"></span>' +
						'<div class="caption">' +
							'<span>Keluar</span>' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
		'</div>';

		body	= body + '</div></div></div>';
		content = '<section id="dashboard">' + head + body + '</section>';
		//--close

		//--gen
		headPage.html(r_headPageHtml(1, 'Dashboard'));
		footPage.html(r_footPageHtml('credit'));
		mainPage.html(content).animate({'opacity': '1'},'fast','linear');
		$("#preload").remove();

		//--command reactor
		$(".go-kelembagaan").unbind().on('click', function(){ r_navigateTo(1); });
		$(".go-koleksi").unbind().on('click', function(){ r_navigateTo(14); });
		$(".go-autentikasi").unbind().on('click', function(){ r_navigateTo(3); });
		$(".go-prestasi").unbind().on('click', function(){ r_navigateTo(16); });
		$(".go-pengaturan").unbind().on('click', function(){ r_navigateTo(4); });
		$(".go-keluar").unbind().on('click', function(){ r_navigateTo(); });

		r_navbarReactor();

		//sementara
		$("#ajuan").html(counta);
		$("#verifikasi").html(countv);
		$("#akun").html(parseInt(counta) + parseInt(countv));
	});
}

function r_f0Bantuan(){
	$("body").prepend(preload);
	$('main.parent').animate({'opacity': '0.6'},'fast','linear', function(){
		mainPage.html('');
		head  	= '';
		body  	= '';
		part	= ['',''];
		content = '';

		//--open
		body	= '<div class="row no-head"><div class="container">';

		body	= body +
		'<h1>COMING SOON!</h1>' +
		'<p>almost there, wait for new update version.</p>';

		body	= body + '</div></div>';
		content = '<section id="dashboard">' + head + body + '</section>';
		//--close

		headPage.html(r_headPageHtml(3, 'Bantuan'));
		footPage.html(r_footPageHtml('credit'));
		mainPage.html(content).animate({'opacity': '1'},'fast','linear');
		$("#preload").remove();

		//--command reactor
		$(".back-button").unbind().on('click', function(){ r_navigateTo(0); });
		r_navbarReactor();
	});
}

//F DAFTAR LEMBAGA PUBLIC
//=====================================
function r_fDaftarLembagaPublic(packet) {

	//-- get direct load
	var kodeBentukLembagaState = null;
	var namaBentukLembagaState = null;
	var dumbBentukLembagaState = null;

	if(Array.isArray(packet) == true){
		kodeBentukLembagaState = packet[0];
		namaBentukLembagaState = packet[1];
	}

	if(kodeBentukLembagaState == "" || kodeBentukLembagaState == null || kodeBentukLembagaState == "start"){
		dumbBentukLembagaState = r_bentukLembagaReader();
		kodeBentukLembagaState = dumbBentukLembagaState[0];
		namaBentukLembagaState = dumbBentukLembagaState[1];
	}

	r_bentukLembagaSet([kodeBentukLembagaState,namaBentukLembagaState]);

	$("body").prepend(preload);
	$('main.parent').animate({'opacity': '0.6'},'fast','linear', function(){
		mainPage.html('');
		head  	= '';
		body  	= '';
		part	= ['',''];
		content = '';
		data = p_getData('support', 'f91', "", 'single,'+ kodeBentukLembagaState);
		data = data.feedData;

		//--open
		head	= '';
		body	= '<div class="row no-head"><div class="container">';
		part[0] = '<div class="col-md-3">';
		part[1] = '<div class="col-md-8" id="lembaga-list">';

		//--left
		part[0] = part[0] +
		'<form id="f-filter-select">' +
			'<div class="cards">' +
				'<div class="cards-header">' +
					'<p class="fixed offset">Filter lembaga</p>' +
					'<div class="btn-collapse right">' +
						'<button class="clear" type="reset"><span class="fa fa-refresh"></span></button>' +
						'<button class="clear" type="submit"><span class="fa fa-filter text-yellow"></span></button>' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="cards flush">' +
				'<div class="select-box">' +
					'<select id="filter-provinsi">' +
						'<option value="" selected>Provinsi</option>' +
						r_optionDHtml('provinsi') +
					'</select>' +
				'</div>' +
				'<div class="select-box">' +
					'<select id="filter-wilayah">' +
						'<option value="" selected>Wilayah</option>' +
						r_optionDHtml('wilayah') +
					'</select>' +
				'</div>' +
				'<div class="select-box">' +
					'<select id="filter-kecamatan">' +
						'<option value="" selected>Kecamatan</option>' +
						r_optionDHtml('kecamatan') +
					'</select>' +
				'</div>' +
				'<div class="select-box">' +
					'<select id="filter-kelurahan">' +
						'<option value="" selected>Kelurahan</option>' +
						r_optionDHtml('kelurahan') +
					'</select>' +
				'</div>' +
				'<div class="space-box"></div>' +
			'</div>' +
		'</form>';

		//--render data
		var tempP = "";
		var tempB = "";

		part[1] = part[1] + r_fLembagaGenerator(data);

		part[0] = part[0] + '</div>';
		part[1] = part[1] + '</div>';
		body	= body 	  + part[0] + part[1] + '</div></div>';
		content = '<section id="kelembagaan">' + head + body + '</section>';
		//--close

		//--gen
		headPage.html(r_headPageHtml(5, namaBentukLembagaState));
		mainPage.html(content).animate({'opacity': '1'},'fast','linear');

		$("#preload").remove();

		//--command reactor
		$(".back-button").unbind().on('click', function(){ r_navigateTo(); });

		//navbar
		r_navbarReactor();

		//search-box
		searchBoxActivator();
		$(".search-input").on('keyup', function(){
			var dumbBentukLembagaState = r_bentukLembagaReader();
			var kodeBentukLembagaState = dumbBentukLembagaState[0];
			var dataKey = p_getData('support', 'f91', $(this).val(),
						'multipart,' + kodeBentukLembagaState + ',' +
						$('#f-filter-select #filter-provinsi').val()  + ',' +
						$('#f-filter-select #filter-wilayah').val()   + ',' +
						$('#f-filter-select #filter-kecamatan').val() + ',' +
						$('#f-filter-select #filter-kelurahan').val());
				dataKey = dataKey.feedData;
			$("#lembaga-list").html(r_fLembagaGenerator(dataKey));
			r_fLembagaEventctivator();
		});

		//filter activation
		$('#f-filter-select').unbind().on('submit', function(e) {
			e.preventDefault();
			var dumbBentukLembagaState = r_bentukLembagaReader();
			var kodeBentukLembagaState = dumbBentukLembagaState[0];
			var dataKey = p_getData('support', 'f91', $(".search-input").val(),
						'multipart,' + kodeBentukLembagaState + ',' +
						$('#f-filter-select #filter-provinsi').val()  + ',' +
						$('#f-filter-select #filter-wilayah').val()   + ',' +
						$('#f-filter-select #filter-kecamatan').val() + ',' +
						$('#f-filter-select #filter-kelurahan').val());
				dataKey = dataKey.feedData;
			$("#lembaga-list").html(r_fLembagaGenerator(dataKey));
			r_fLembagaEventctivator();
		});

		//event on list activator
		r_fLembagaEventctivator();
	});
}

function r_fLembagaEventctivator(){
	//$(".detail-click").unbind().on('click', function(){ r_navigateTo(12, $(this).attr('p-id')); });
	detailBoxActivator();
	$(".go-maps").unbind().on("click", function(){
		openMaps($(this).attr('m-lng'),$(this).attr('m-lat'));
	});
}

function r_fLembagaGenerator(data){
	var genHtml = "";
	var tempB 	= "";
	var tempP	= "";
	if(data.lembaga != null){
		lembagaCounter = data.lembaga.length;
		for(var loop = 0; loop < data.lembaga.length; loop++){
			var placeImg = data.lembaga[loop].noreg;
			placeImg = placeImg.substr((placeImg.length-1), 1);
			temPic   = (data.lembaga[loop].picture != "") ? 'img/logo/' + data.lembaga[loop].picture : 'img/logo/avatar-' + placeImg + '.jpg';
			genHtml  = genHtml +
			'<div id="' + data.lembaga[loop].id + '" class="cards clear">' +
				'<div class="description-box">' +
					'<div class="click-frame">' +
						'<img class="icon-set" src="' + temPic + '"/>' +
						'<p class="title-set">' + data.lembaga[loop].nama + '</p>' +
						'<div class="text-set">' +
							'<span class="id-set">' + data.lembaga[loop].nama + '</span>' +
							'<span class="desc-text">' + data.lembaga[loop].telp + ' | ' + data.lembaga[loop].email + '</span>' +
						'</div>' +
					'</div>' +
				'</div>' +
				'<div class="detail-box">' +
					'<div class="list-box">' +
						'<div class="list-icon"><span class="fa fa-phone"></span></div>' +
						'<p class="list-text">' + data.lembaga[loop].telp + '</p>' +
					'</div>' +
					'<div class="list-box">' +
						'<div class="list-icon"><span class="fa fa-envelope"></span></div>' +
						'<p class="list-text">' + data.lembaga[loop].email + '</p>' +
					'</div>' +
					'<div class="list-box">' +
						'<div class="list-icon"><span class="fa fa-map-marker"></span></div>' +
						'<p class="list-text">' + data.lembaga[loop].alamat + '</p>' +
					'</div>';

					statusColor = "red";
					status = "Tidak terverifikasi";
					console.log(data.lembaga[loop].group);
					if(data.lembaga[loop].group == "Valid"){
						status = "Sudah diverifikasi";
						statusColor = "green";
					}

					genHtml  = genHtml +
					'<div class="list-box">' +
						'<p class="list-text text-' + statusColor + '">' + status + '</p>' +
					'</div>';

					genHtml  = genHtml +
					'<div class="list-box">' +
						'<p class="list-text go-maps text-cyan click" m-lng="' + data.lembaga[loop].langitude + '" m-lat="' + data.lembaga[loop].latitude + '">Lihat maps</p>' +
					'</div>' +
					'<!--div class="list-box foot">' +
						'<button type="button" class="clear list-text btn-link detail-click" p-id="' + data.lembaga[loop].id + '">Lihat selengkapnya</button>' +
					'</div-->' +
				'</div>' +
			'</div>';
		}
	}else{
		genHtml = genHtml +
		'<div class="cards">' +
			'<div class="cards-header">' +
				'<p class="fixed offset text-black">Data tidak ditemukan.</p>' +
			'</div>' +
		'</div>';
	}

	return genHtml;
}

//F DAFTAR KONTAK PUBLIC
//=====================================
function r_fDaftarKontak(packet) {

	if(Array.isArray(packet) == true){
		packetCaption = packet[1];
		packet = packet[0];
	}

	if(packet == "" || packet == null || packet == "start"){
		packet = r_kontakReader();
		packetCaption = packet[1];
		packet = packet[0];
	}

	r_kontakSet(packet, packetCaption);

	$("body").prepend(preload);
	$('main.parent').animate({'opacity': '0.6'},'fast','linear', function(){
		mainPage.html('');
		head  	= '';
		body  	= '';
		content = '';

		packet = parseInt(packet);

		data 		= [
			[
				{ name: "Usman Rahmat", phone: "085317017001" },
				{ name: "Sayiid Nurlie", phone: "085317697240" }
			],
			[
				{ name: "Miftah Fitriyana", phone: "085223388235" },
				{ name: "Dadang Hermawan", phone: "082128143097" }
			],
			[
				{ name: "Sian Susanto", phone: "085885241283" },
				{ name: "Judi Muhyidin", phone: "081315609988" }
			],
			[
				{ name: "Amid Hamdani", phone: "085715726993" },
				{ name: "Royani", phone: "087770414919" }
			],
			[
				{ name: "Acep Muhsin", phone: "082126645958" },
				{ name: "Nana Sutisna", phone: "085223332274" }
			],
			[
				{ name: "Asep Suherman", phone: "087708470606" },
				{ name: "Siti Fatimah", phone: "0852220465505" }
			],
			[
				{ name: "Fahmi Ilmansyah", phone: "089660763281" },
				{ name: "M Rizki", phone: "085323317386" }
			],
			[
				{ name: "Iim Komarudin", phone: "085314263352" },
				{ name: "Aneng Fatimah", phone: "082217743453" }
			],
			[
				{ name: "Ahmad Syifa", phone: "082216441613" },
				{ name: "Haris", phone: "085280295950" }
			],
			[
				{ name: "Ahmad Romdhoni", phone: "085715728474" },
				{ name: "M.Zainal Alien", phone: "085711020981" }
			],
			[
				{ name: "H.Muhammad Ishak", phone: "081395691675" },
				{ name: "Aminudin", phone: "081312064194" }
			],
			[
				{ name: "Afif Amrulloh", phone: "082315784115" },
				{ name: "Andri Mulyana", phone: "082316569805" }
			],
			[
				{ name: "Asep Sopwan", phone: "085220043532" },
				{ name: "Anwar Hidayat", phone: "081320692997" }
			],
			[
				{ name: "Dede Lukman", phone: "081931491938" },
				{ name: "Ikbal M Maptuh", phone: "089653370959" }
			],
			[
				{ name: "Ato Ismail", phone: "085220616222" },
				{ name: "Ahmad Kolaid", phone: "082315736086" }
			],
			[
				{ name: "Ade Irfan Nurjaman", phone: "081293165550" },
				{ name: "Entin Kartini", phone: "085720954020" }
			],
			[
				{ name: "Jojo Sutarjo", phone: "081214212424" },
				{ name: "Sumiati", phone: "081394609919" }
			],
			[
				{ name: "Agus Mulyana", phone: "085352809777" },
				{ name: "Asep M H", phone: "081222900123" }
			],
			[
				{ name: "A.shany, R", phone: "085222994322" },
				{ name: "Oke Prasetyo", phone: "085974122028" }
			],
			[
				{ name: "Siti Romlah", phone: "085223571845" },
				{ name: "Eris M", phone: "089606106576" }
			],
			[
				{ name: "Solihin", phone: "081280103601" },
				{ name: "Faisal Hakim", phone: "085715301719" }
			],
			[
				{ name: "M.Habibi", phone: "8176616665" },
				{ name: "Ali Murtado", phone: "08176758005" }
			],
			[
				{ name: "Deden Setia", phone: "081214297064" },
				{ name: "Yayan Rohyana", phone: "081573057831" }
			],
			[
				{ name: "Otong Tumari", phone: "089660311306" },
				{ name: "Khusnul Khotimah", phone: "085294740126" }
			],
			[
				{ name: "Aditya Nupratma", phone: "085711735857" },
				{ name: "Nurfi Laila", phone: "087781857284" }
			],
			[
				{ name: "Ohan Jauharudin", phone: "085288888027" },
				{ name: "Didin Supriadin", phone: "085720141375" }
			],
			[
				{ name: "Jejen J A", phone: "085323412669" },
				{ name: "Moch Yasir", phone: "082319204567" }
			],
		];

		//--open
		head	= '';
		body	= '<div class="row no-head"><div class="container">' + '<div class="col-md-8 col-offset-2" id="kontak-list">';

		//--render data
		var tempP = "";
		var tempB = "";

		for(loop=0; loop<data[packet].length; loop++){
			body	= body +
			'<div class="col-md-12">' +
				'<div class="row default">' +
					'<div class="cards">' +
						'<div class="navigation-box">' +
							'<div class="col-xs-6">' +
								'<div class="caption">' +
									'<span>' + data[packet][loop].name + '</span>' +
								'</div>' +
							'</div>' +
							'<div class="col-xs-6">' +
								'<div class="caption">' +
									'<span>' + data[packet][loop].phone + '</span>' +
								'</div>' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>';
		}

		body	= body + '</div></div></div>';
		content = '<section id="kontak">' + head + body + '</section>';
		//--close

		//--gen
		headPage.html(r_headPageHtml(2, "Kontak PAH 2018 | " + packetCaption));
		mainPage.html(content).animate({'opacity': '1'},'fast','linear');

		$("#preload").remove();

		//--command reactor
		$(".back-button").unbind().on('click', function(){ r_navigateTo(); });

		//navbar
		r_navbarReactor();
	});
}

/* maintance */
function clearPacket(){
	pGroup  		= "";
	pTarget			= "";
	pId 			= "";
	pLabel			= "";
	pContainer		= "";
	pReferences		= "";
	pReferencesKey	= "";
	pDecription		= "";
}

/* cards option list */
function showOptionList(){
	var optionHtml = '';
	optionHtml = '<div class="option-pop">';

	optionHtml = optionHtml +
	'<div id="option-main" class="option-list">' +
		'<div class="option-frame col-md-4 col-sm-8">' +
			'<ul>' +
				'<li class="head">' + pLabel + '</li>';

				for(var loop=0; loop < optionBatch.length; loop++){
					optionHtml = optionHtml +
					'<li id="' + optionBatch[loop].selector + '" p-id=""><button type="button" class="clear btn-icon"><span class="fa fa-' + optionBatch[loop].icon + '"></span>' + optionBatch[loop].label + '</button></li>';
				}

	optionHtml = optionHtml +
			'</ul>' +
		'</div>' +
	'</div>' +
	'<div class="option-layer"></div>';

	optionHtml = optionHtml + '</div>';

	$("body").append(optionHtml);
	$(".option-layer").unbind().on("click", function(){ hideOptionList() });
	$("html, body").css("overflow","hidden");
}

/* global reactor */
function r_navbarReactor(){
	/*--syncnav menubar*/ syncnavReactor();

	$("#option.syncnav .dashboard")  .unbind().on("click", function(){ r_navigateTo(0); });
	$("#option.syncnav .kelembagaan").unbind().on("click", function(){ r_navigateTo(1); });
	$("#option.syncnav .koleksi")	 .unbind().on("click", function(){ r_navigateTo(14); });
	$("#option.syncnav .prestasi")	 .unbind().on("click", function(){ r_navigateTo(16); });
	$("#option.syncnav .autentikasi").unbind().on("click", function(){ r_navigateTo(3); });
	$("#option.syncnav .pengaturan") .unbind().on("click", function(){ r_navigateTo(4); });
	$("#option.syncnav .bantuan") 	 .unbind().on("click", function(){ r_navigateTo(0.1); });
	$("#option.syncnav .log-off")	 .unbind().on("click", function(){ p_logout(); r_navigateTo(); });

	$("#notif-ring").unbind().on("click", function(){ r_navigateTo(999); });
}

/* cookies management */
/* =============================================================================================== */
function r_pageSet(page){ r_setCookie('pagePrevious', r_pageReader(), 1); r_setCookie('page', page, 1); }
function r_pageReader(){
	var page = null;
	if(r_getCookie('page') != '' && r_getCookie('page') != undefined) { page = parseInt(r_getCookie('page')); }
	return page;
}

function r_pagePreviousReader(){
	var page = null;
	if(r_getCookie('pagePrevious') != '' && r_getCookie('pagePrevious') != undefined && isNaN(r_getCookie('pagePrevious')) == false) { page = parseInt(r_getCookie('pagePrevious')); }
	return page;
}

function r_tabSet(tab){ r_setCookie('tab', tab, 1); }
function r_tabReader(){
	var tab = null;
	if(r_getCookie('tab') != '' && r_getCookie('tab') != undefined) { tab = r_getCookie('tab'); }
	return tab;
}

function r_bentukLembagaSet(data){
	r_setCookie('kodeBentukLembaga', data[0], 1);
	r_setCookie('namaBentukLembaga', data[1], 1);
}
function r_bentukLembagaReader(){
	var code = null;
	var caption = null;
	var data = null;
	if(r_getCookie('kodeBentukLembaga') != '' && r_getCookie('kodeBentukLembaga') != undefined) { code = r_getCookie('kodeBentukLembaga'); }
	if(r_getCookie('namaBentukLembaga') != '' && r_getCookie('namaBentukLembaga') != undefined) { caption = r_getCookie('namaBentukLembaga'); }

	data = [code, caption];
	return data;
}

function r_kontakSet(data, caption){
	r_setCookie('kontakPAH', data, 1);
	r_setCookie('kontakPAHCaption', caption, 1);
}
function r_kontakReader(){
	var data = null;
	var caption = null;
	if(r_getCookie('kontakPAH') != '' && r_getCookie('kontakPAH') != undefined) { data = r_getCookie('kontakPAH'); }
	if(r_getCookie('kontakPAHCaption') != '' && r_getCookie('kontakPAHCaption') != undefined) { caption = r_getCookie('kontakPAHCaption'); }

	return [data,caption];
}

function profile_look_set(id){ r_setCookie('profile_look', id, 1); }
function profile_look_reader(){	return String(r_getCookie('profile_look'));}

function news_look_set(id){ r_setCookie('news_look', id, 1); }
function news_look_reader(){ return String(r_getCookie('news_look'));}

function tim_look_set(id){ r_setCookie('tim_look', id, 1); }
function tim_look_reader(){	return String(r_getCookie('tim_look'));}

// function r_initCookie(){
	//r_setCookie('profile_look', '', 1);
// }

function r_setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function r_getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// function header_set(data){ r_setCookie('header_log', JSON.stringify(data), 1); }
// function header_read(){
	// var result = [];
	// if(r_getCookie('header_log') != ""){
		// result = JSON.parse(r_getCookie('header_log'));
	// }

	// return result;
// }

function r_clearCookies(){
	r_setCookie('page'				,'', 0.1);
	r_setCookie('pagePrevious'		,'', 0.1);
	r_setCookie('tab'				,'', 0.1);
	r_setCookie('kodeBentukLembaga'	,'', 0.1);
	r_setCookie('namaBentukLembaga'	,'', 0.1);
	r_setCookie('profile_look'		,'', 0.1);
	r_setCookie('news_look'			,'', 0.1);

	r_setCookie('login'			, '', 0.1);
	r_setCookie('noRegistrasi'	, '', 0.1);
	r_setCookie('username'		, '', 0.1);
	r_setCookie('nama'			, '', 0.1);
	r_setCookie('userLevel'		, '', 0.1);
	r_setCookie('urlGambar'		, '', 0.1);
	r_setCookie('lingkupArea'	, '', 0.1);
	r_setCookie('idBatasArea'	, '', 0.1);
	r_setCookie('statusActive'	, '', 0.1);

	for(var look=0; look<moduleCounter; look++){
		r_setCookie(moduleActive[look].module + 'Lihat', '', 0.1);
		r_setCookie(moduleActive[look].module + 'Tambah','', 0.1);
		r_setCookie(moduleActive[look].module + 'Ubah',  '', 0.1);
		r_setCookie(moduleActive[look].module + 'Hapus', '', 0.1);
	}
}

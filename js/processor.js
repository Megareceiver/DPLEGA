/* PROCESSOR DPLEGA JS */
$(function(){
	
});

/* authentication */
/* =============================================================================================== */
function doLogin(username, pass){
	if(username != "" && pass != ""){
		$.ajax({
			url: 'modul/router.php',
			type: 'post',
			dataType: 'json',
			async: false,
			data: 
			{ 
				session : 'login',
				username: username,
				pass	: pass
			},
			success: function(result){
				if(result.active == 'yes'){
					logged_in(result, "new");
					hide_login();
				}else{
					call_alert_login();
				}
			}
		});
	}else{
		call_alert_login();
	}
}

function loggedIn(data, type){	
	if($.isEmptyObject(data) == false){
		
		/* header */
		var header = "header.parent ";
		$(header + ".avatar").attr("src", data.avatar);
		$(header + ".avatar-menu, " + header + ".profil-menu").attr("name", data.token);
		
		var access_list = "";
		var rec = data.access;
		for(var loop=0; loop<rec.length; loop++){
			access_list = access_list +
			'<li><a name="' + data.token + '" class="dropdown-item ' + rec[loop].target + '" href="' + rec[loop].action + '">' + rec[loop].description + '</a></li>';
		}
		
		$(header + ".access-menu").html(access_list);
		header_init();
		
		if(type == "new"){
			/* set cookie dan route */
			header_set(data);
			navigate_to(page_reader());
		}
	}
}

function doLogout(){	
	$.ajax({
		url: 'modul/router.php',
		type: 'post',
		dataType: 'json',
		async: false,
		data: { session : 'logout' },
		success: function(result){
			if(result.status == 'failed'){
				console.log('logout failed');
			}else{
				console.log('logout success');
			}
		}
	});
		
	clear_cookies();
	var header = "header.parent ";
	$(header + ".avatar").attr("src", "img/avatar-default.png");
	$(header + ".avatar-menu, " + header + ".profil-menu").attr("name", "");
	
	var access_list = "";
	access_list = access_list +
			'<li><a name="" class="dropdown-item login-menu" href="#">Masuk</a></li>';
	$(header + ".access-menu").html(access_list);
	header_init();
	navigate_to(0);
}

/* request management */
/* =============================================================================================== */
function p_getData(group, target, keyword, refferences){
	var data = null;

	$.ajax({
		url: 'modul/router.php?session=requestData&group=' + group + '&target=' + target,
		type: 'post',
		dataType: 'json',
		async: false,
		data: { keyword : keyword, refferences: refferences },
		success: function(result){
			data = result;
		},
		complete: function(xhr,status) { hideNotification('waiting'); },
		error: function(xhr,status,error) { showNotification('danger', 'failure', 'Terjadi kesalahan, tidak ada respon dari server!'); }
	});
	
	return data;
}

function p_removeData(group, target, pId, refferenceId){
	var reStatus = null;

	showNotification('info', 'waiting', 'sedang memproses...', false);
	$.ajax({
		url: 'modul/router.php?session=removeData&group=' + group + '&target=' + target,
		type: 'post',
		dataType: 'json',
		async: false,
		data: { pId : pId, refferenceId: refferenceId },
		success: function(data){
			reStatus = data.feedStatus;
			hideNotification('waiting');
			showNotification(data.feedType, 'removed', data.feedMessage);
		},
		complete: function(xhr,status) { hideNotification('waiting'); },
		error: function(xhr,status,error) { showNotification('danger', 'failure', 'Terjadi kesalahan, tidak ada respon dari server!'); }
	});
	
	return reStatus;
}

function p_changeData(group, target, pId, refferenceId, dataFetch){
	var reStatus = null;

	showNotification('info', 'waiting', 'sedang memproses...', false);
	$.ajax({
		url: 'modul/router.php?session=updateData&group=' + group + '&target=' + target,
		type: 'post',
		dataType: 'json',
		async: false,
		data: { pId : pId, refferenceId: refferenceId, dataFetch: dataFetch },
		success: function(data){
			reStatus = data.feedStatus;
			hideNotification('waiting');
			showNotification(data.feedType, 'changed', data.feedMessage);
		},
		complete: function(xhr,status) { hideNotification('waiting'); },
		error: function(xhr,status,error) { showNotification('danger', 'failure', 'Terjadi kesalahan, tidak ada respon dari server!'); }
	});
	
	return reStatus;
}

function p_formHandler(formId, type){
	$("#" + formId).unbind().on('submit', function(e) {
		showNotification('info', 'waiting', 'sedang memproses...', false);
		e.preventDefault();
		$.ajax({
			url: "modul/router.php?session=" + type + "&group=" + $(this).attr('f-group') + "&target=" + $(this).attr('f-target'), // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,        // To send DOMDocument or non processed data file it is set to false
			success: function(data)   // A function to be called if request succeeds
			{ 
				showNotification(data.feedType, '0', data.feedMessage);
				if(data.feedStatus == "success" || data.feedStatus == "warning"){
					if(data.feedPId == undefined){ data.feedPId = null }
					r_customCallBack(type, $("#" + formId).attr('f-group'), $("#" + formId).attr('f-target'), data.feedId, formId, data.feedPId);
				}
			},
			complete: function(xhr,status) { hideNotification('waiting'); },
			error: function(xhr,status,error) { showNotification('danger', 'failure', 'Terjadi kesalahan, tidak ada respon dari server!'); }
		});
	});		
}


function test(){

	$("#display-form").unbind().on('submit', function(e) {
		e.preventDefault();
		$.ajax({
			url: "<?php echo site_url()?>Setup_controller/submitajax", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,        // To send DOMDocument or non processed data file it is set to false
			success: function(data)   // A function to be called if request succeeds
			{ 
				/* on success */
			},
			complete: function(xhr,status) { /* on complete */ },
			error: function(xhr,status,error) { /* on error */ }
		});
	});
}
// function p_logIn(formId){	
// 	$("#" + formId).unbind().on('submit', function(e) {
// 		showNotification('info', 'waiting', 'sedang memproses...', false);
// 		e.preventDefault();
// 		$.ajax({
// 			url: "modul/protected/authentication.php?session=doLogin", // Url to which the request is send
// 			type: "POST",             // Type of request to be send, called as method
// 			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
// 			contentType: false,       // The content type used when sending data to the server.
// 			cache: false,             // To unable request pages to be cached
// 			processData:false,        // To send DOMDocument or non processed data file it is set to false
// 			success: function(data)   // A function to be called if request succeeds
// 			{
// 				console.log(data);
// 				hideNotification('waiting');
// 				if(data.feedStatus == "success"){
// 					if(data.userLevel == 1){
// 						r_navigateTo(12, data.noRegistrasi);
// 						r_setCookie('userLevel', data.userLevel, 1);
// 					}else if(data.userLevel != ""){
// 						r_navigateTo(0);
// 						if(data.avatar == "" || data.avatar == null) { data.avatar = "avatar-default.jpg"; }
// 						$("#navigation .user-frame img").attr('src', 'img/avatar/' + data.avatar);
// 						$("#navigation .user-frame p.caption span").html(data.username);
// 						$("#navigation .user-frame p.caption span.big").html(data.nama);

// 						r_setCookie('avatar', data.avatar, 1);
// 						r_setCookie('username', data.username, 1);
// 						r_setCookie('nama', data.nama, 1);
// 						r_setCookie('userLevel', data.userLevel, 1);
// 					}
// 				}else{
// 					showNotification("danger", 'error', data.feedMessage);
// 				}
// 			}
// 		});
// 	});		
// }


function postproject(){
var mess = $("#message").val();
var anony = $("#anonymous").val();
var email = $("#email").val();
var msg_subject = $("#ptitle").val();
var form_data = new FormData();
form_data.append('function', 'postedproject');
form_data.append('email',  email);
form_data.append('message',  mess);		
form_data.append('name', anony);
form_data.append('mg_subj',  msg_subject);

if(anony === ''){
		$("#anonymous").css('border', '0.5px solid red');
		
		setTimeout(function(){
		$("#anonymous").removeAttr("style");	
		},2000);
		return false;
	}

	if(email === ''){
		$("#email").css('border', '0.5px solid red');
		
		setTimeout(function(){
		$("#email").removeAttr("style");	
		},2000);
		return false;
	}
	if(IsEmail(email)===false){
		$("#email").css('border', '0.5px solid red');
		
		setTimeout(function(){
		$("#email").removeAttr("style");	
		},2000);
		return false;
	}
	if(msg_subject === ''){
		$("#ptitle").css('border', '0.5px solid red');
		setTimeout(function(){
		$("#ptitle").removeAttr("style");		
		},2000);
		return false;
	}
	
	if(mess === ''){
		$("#message").css('border', '0.5px solid red');
		setTimeout(function(){
		$("#message").removeAttr("style");		
		},2000);
		return false;
	}
	
	$.ajax({
		url:'func.php',
		type:'POST',
		dataType:'text',
		processData:false,
		contentType:false,
		data:form_data,
		
		beforeSend:function(){
			$("#submitpost").attr('disabled','disabled');
			$("#submitpost").text("Please"+" "+"wait....");
		},
		
		success:function(result){
			if($.trim(result) === 'added'){
			$("#submitpost").text("Project Posted");
			$("#submitpost").attr('disabled','disabled');
			alert(">We've received your project request and will assign the appropriate hacker for the job within the next 10 minutes. The hacker will contact you via the provided email address.");
			}
			if($.trim(result) === 'error'){
				$("#submitpost").removeAttr('disabled');
				$("#submitpost").text("Send");

			}
		},
		error:function(){
			$("#submitpost").removeAttr('disabled');
			$("#submitpost").text("Send");
		},
	});	
}



function IsEmail(email){
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}
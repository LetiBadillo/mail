$('#nombre, #email, #tel, #textarea1').keyup('input',function(e){
    if(($('#nombre').val()!="") || ($('#email').val()!="") || ($('#tel').val()!="") || ($('#textarea1').val()!="")){
      $("#btn").removeClass('disabled');
    }
    if (inputsEmpty()){
      $("#btn").addClass('disabled');
    }
  });

 $('#btn').click(function(){
            $('#formulario')[0].reset();
     		$("#btn").addClass('disabled'); 
     		$("#send").addClass('disabled');      
 });

function inputsEmpty(){
	if(($('#nombre').val()=="") && ($('#email').val()=="") && ($('#tel').val()=="") && ($('#textarea1').val()=="")){
		return true;
	}else if(($('#nombre').val()!="") && ($('#email').val()!="") && ($('#tel').val()!="") && ($('#textarea1').val()!="")){
		return false;
	}
}

$('#nombre, #email, #tel, #textarea1').keyup('input',function(e){
    if(inputsEmpty()){
    	$("#send").addClass('disabled');
    }
    if (inputsEmpty()==false){
    	$("#send").removeClass('disabled');
      
    }
  });
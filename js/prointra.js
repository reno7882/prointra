$(document).ready(function() {




$('[name="tel"]').keyup(function (){
 this.value = (this.value + '').replace(/[^0-9]/g, '');
});

 
    
    
    
    
    
     $('#contactForm').submit(function(event) {
      
         event.preventDefault();
         
            //alert('entre');
  /*  var formData = {
      'nombre': $('input[name=nombre]').val(),
                        'pass': $('input[name=password]').val(),
                        'email':$('input[name=email]').val(),
                        'tipo':$('input[name=tiposol]').val(),
                        'idproye': $('input[name=idproye]').val(),
                        'idus': $('input[name=idus]').val()
                              
    };*/
//alert($("#contactFormForm").serialize());
    // process the form
   var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (regex.test($('#Correo').val().trim())) {


     $.ajax({                        
           type: "POST",                 
           url: 'php/Insertar.php',                     
           data: $("#contactForm").serialize(), 
             dataType  : 'json',
           success: function(data)             
           {
           console.log(data);
            if(data.success){
             $('#contactForm').load("Gon.html");
 $('#contactForm').animatescroll();
                       }else{
                        alert('no se envio el registro');
                       }
                 
                       
           }
       });



 }     else {
        alert('La direccón de correo no es válida');
       
    }
 
  });
///////////////////////////////////////////
              });
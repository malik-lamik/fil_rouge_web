var validationnom = false;
$("#nom_modif").blur(function() {
     var input = $(this).val();
     var regex = new RegExp("^[A-Za-z ' -]+$");
     if (regex.test(input)) {
          validationnom =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationnom=false;
          $(this).css("background-color","#FF5E4D");
     }
});



var validationprenom = false;	
$("#prenom_modif").blur(function() {
     console.log("coucou");
     var input = $(this).val();
     var regex = new RegExp("^[A-Za-zàéèïöëäùç' -]+$");
 if (regex.test(input)) {
     validationprenom =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationprenom=false;
          $(this).css("background-color","#FF5E4D");
     }
});

var validationadresse = false;
$("#adresse_modif").blur(function() {
     var input = $(this).val();
     var regex = new RegExp("^[A-Za-zàéèïöëäùç' -]+$");
    if (regex.test(input)) {
     validationadresse =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationadresse=false;
          $(this).css("background-color","#FF5E4D");
     }
});

var validationca = false;
$("#ca_modif").blur(function() {
     var input = $(this).val();
     var regex = new RegExp("^[A-Za-zàéèïöëäùç' -]*$");
    if (regex.test(input)) {
     validationca =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationca=false;
          $(this).css("background-color","#FF5E4D");
     }
});

var validationcp=false;
$("#code_postal_modif").blur(function() {
     var input = $(this).val();
     var regex = new RegExp("^[0-9]{5}$");
    if (regex.test(input)) {
     validationcp =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationcp=false;
          $(this).css("background-color","#FF5E4D");
     }
});

var validationville=false;
$("#ville_modif").blur(function() {
     var input = $(this).val();
     var regex = new RegExp("^[A-Za-z -]+$");
    if (regex.test(input)) {
     validationville =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationville=false;
          $(this).css("background-color","#FF5E4D");
     }
});

var validationpays=false;
$("#pays_modif").blur(function() {
     var input = $(this).val();
     var regex = new RegExp("^[A-Za-zàéèïöëäùç' -]+$");
    if (regex.test(input)) {
     validationpays =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationpays=false;
          $(this).css("background-color","#FF5E4D");
     }
});

var validationtel=false;
$("#tel_modif").blur(function() {
     var input = $(this).val();
     var regex = new RegExp("^(\\+33|0|0033)[1-9][0-9]{8}$");
    if (regex.test(input)) {
     validationtel =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationtel=false;
          $(this).css("background-color","#FF5E4D");
     }
});

var validationmail=false;
$("#mail_modif").blur(function() {
     var input = $(this).val();
     var regex = new RegExp("^[-a-z0-9~!$%^&*_=+}{\\'?]+(\\.[-a-z0-9~!$%^&*_=+}{\\'?]+)*@([a-z0-9_][-a-z0-9_]*(\\.[-a-z0-9_]+)*\\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}))(:[0-9]{1,5})?$");
    if (regex.test(input)) {
     validationmail =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationmail=false;
          $(this).css("background-color","#FF5E4D");
     }
});
var validationmdp = false;
$("#mdp_modif").blur(function() {
     var input = $(this).val();
     var regex = new RegExp("^[A-Za-zàéèïöëäùç' - 0-9]+$");
    if (regex.test(input)) {
     validationmdp =true;
          $(this).css("background-color","yellowgreen");
     } else {
          validationmdp=false;
          $(this).css("background-color","#FF5E4D");
     }
});

$("#modifier").click(function(){
     var validation =true;
     if (validationnom==false || validationprenom==false || validationadresse ==false || validationcp==false || validationville == false || validationpays == false || validationtel==false || validationmail ==false || validationmdp==false) {
          $("#alertage2").html("<h1>Votre saisie comporte des erreurs !!</h1>");
     }
     else{
          $("#modif").submit();
     }
    });
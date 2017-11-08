// Fonction principale au chargement de la page et évènements
$(document).ready(function(){

	//Calcul la taille des section selon la taille de la fenêtre au chargement
	//$('section').css('height',$(window).height().toString()+"px");
	$('section').css('height',$(window).height().toString()+"px");
	$('section').css('paddingTop',($('nav').height()*2).toString()+"px");

	//Recalcul en fonction de la taille de la fenêtre durant la navigation
	// $(window).resize(function(){
		$('section').css('height',$(window).height().toString()+"px");
		$('section').css('paddingTop',($('nav').height()*2).toString()+"px");
	// });

	//Sur sélection dans le menu
	$('.lien').click(function(){
		var lien = $(this).attr('href');
		
		if(lien != '#') {
		$('html').animate({scrollTop:$(lien).offset().top},1000);	
		}
	}); //fin sélection de menu

	//Sur sélection dans le sous-menu
  $('.dropdown-menu').on("click", function(e){
    toto = $(this).next();
    console.log(toto);
    e.stopPropagation();
    e.preventDefault();

	}); //fin sélection de sous-menu



	//Sur bouton Envoi du formulaire
	$('#envoi').click(function(e){

		var champs = {
			"inputNom"     : "text",
			"inputPrenom"  : "text",
			"inputEmail"   : "email",
			"inputObjet"   : "text",
			"inputMessage" : "text",
		};

		e.preventDefault();

		var shouldSubmit = true;

		$.each(champs, function(index, value){
			if(value == "text") {
				shouldSubmit = shouldSubmit && ($("#"+index).val().length>2);
			}

			if(value == "email") {
				shouldSubmit = shouldSubmit && (isEmail($("#"+index).val()));
			}
			console.log($("#"+index).val());
		});
		
		if(shouldSubmit) {
			console.log(shouldSubmit + "- les champs sont bien remplis");
		}else{
			console.log("Il y a des erreurs dans le formulaire");
		}

		$.ajax({ //Fonction AJAX (séparer les paramètres par une "virgule")
			url : './inc/verif_send_mail.inc.php',
		 	type : 'POST',
		 	data : 'nom=' + $('#inputNom').val() + '&prenom=' + $('#inputPrenom').val() + '&email=' + $('#inputEmail').val() + '&phone=' + $('#inputPhone').val() + '&objet=' + $('#inputObjet').val() + '&message=' + $('#inputMessage').val(),
		 	dataType : 'html',
		 	success : function(code_html, statut){ //success
				$("#statusFormulaire").html(code_html);},
			error : function(resultat, statut, erreur){ //en cas d'esseur
				alert('Ajax Error: ' + statut + erreur);}
 		});
	});


}); // fin de la fonction principale
	
	//Slide et Réduction d'images
	$('#slidemini1').click(function(){
		if ($(this).attr("src") == "./images/slide1mini.png") {
			$(this).attr("src" , "./images/slide1agrandi.png");
			$("#figimg1").toggleClass("disparait");
			$("#slidemini2").css("display" , "none");
			$("#slidemini3").css("display" , "none");
			$("#slidemini4").css("display" , "none");
			$("#slidemini5").css("display" , "none");
		} else {
			$(this).attr("src" , "./images/slide1mini.png");
			$("#figimg1").toggleClass("disparait");
			$("#slidemini2").css("display" , "flex");
			$("#slidemini3").css("display" , "flex");
			$("#slidemini4").css("display" , "flex");
			$("#slidemini5").css("display" , "flex");
		}
	});

	$('#slidemini2').click(function(){
	        if ($(this).attr("src") == "./images/slide2mini.png") {
	            $(this).attr("src" , "./images/slide2agrandi.png");
	            $("#figimg2").toggleClass("disparait");
	            $("#slidemini1").css("display" , "none");
	            $("#slidemini3").css("display" , "none");
	            $("#slidemini4").css("display" , "none");
	            $("#slidemini5").css("display" , "none");
	        }else {
	            $(this).attr("src" , "./images/slide2mini.png");
	            $("#figimg2").toggleClass("disparait");
	            $("#slidemini2").css("display" , "flex");
	            $("#slidemini1").css("display" , "flex");
	            $("#slidemini3").css("display" , "flex");
	            $("#slidemini4").css("display" , "flex");
	            $("#slidemini5").css("display" , "flex");
	        }
	    });

	$('#slidemini3').click(function(){
		if ($(this).attr("src") == "./images/slide3mini.png") {
			$(this).attr("src" , "./images/slide3agrandi.png");
			$("#figimg3").toggleClass("disparait");
			$("#slidemini2").css("display" , "none");
			$("#slidemini1").css("display" , "none");
			$("#slidemini4").css("display" , "none");
			$("#slidemini5").css("display" , "none");
		} else {
			$(this).attr("src" , "./images/slide3mini.png");
			$("#figimg3").toggleClass("disparait");
			$("#slidemini2").css("display" , "flex");
			$("#slidemini1").css("display" , "flex");
			$("#slidemini4").css("display" , "flex");
			$("#slidemini5").css("display" , "flex");
		}
	});

	$('#slidemini4').click(function(){
		if ($(this).attr("src") == "./images/slide4mini.png") {
			$(this).attr("src" , "./images/slide4agrandi.png");
			$("#figimg4").toggleClass("disparait");
			$("#slidemini2").css("display" , "none");
			$("#slidemini3").css("display" , "none");
			$("#slidemini1").css("display" , "none");
			$("#slidemini5").css("display" , "none");
		} else {
			$(this).attr("src" , "./images/slide4mini.png");
			$("#figimg4").toggleClass("disparait");
			$("#slidemini2").css("display" , "flex");
			$("#slidemini3").css("display" , "flex");
			$("#slidemini1").css("display" , "flex");
			$("#slidemini5").css("display" , "flex");
		}
	});

	$('#slidemini5').click(function(){
		if ($(this).attr("src") == "./images/slide5mini.png") {
			$(this).attr("src" , "./images/slide5agrandi.png");
			$("#figimg5").toggleClass("disparait");
			$("#slidemini2").css("display" , "none");
			$("#slidemini3").css("display" , "none");
			$("#slidemini4").css("display" , "none");
			$("#slidemini1").css("display" , "none");
		} else {
			$(this).attr("src" , "./images/slide5mini.png");
			$("#figimg5").toggleClass("disparait");
			$("#slidemini2").css("display" , "flex");
			$("#slidemini3").css("display" , "flex");
			$("#slidemini4").css("display" , "flex");
			$("#slidemini1").css("display" , "flex");
		}
	});


// AUTRES FONCTIONS
// Fonction d'affichage de la map Adresse
function initMap() {
	var map;
	map = new google.maps.Map(document.getElementById('map'), {
	  center: {lat: 46.1158089, lng: 3.4358138000000054},
	  zoom: 17
	});
}

//Fonction de vérification du champs email
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}





//Déclaration des champs du formulaire à tester




//CI-DESSOUS A GARDER
//Sur click dans les sections
// $('section').click(function(){

// 	var listeSections = $('section');
// 	var indexSection = $(this).index();
// 	var indexLast =  $('section').last().index();

// 	var targetSection = (indexSection == indexLast) ? listeSections[0].id : listeSections[indexSection+1].id;

// 	$('html').animate({
// 		scrollTop:$('#'+targetSection).offset().top
// 	},1000);

// });


$(".menu").hide();

function remonte_sauf(num) {
	for(var i=1; i<11; i++) {
		if (i!=num) $("#decends"+i).slideUp();
	}
}





$("#espaceclient").click(function(){
	remonte_sauf(1);
	$("#decends1").slideToggle();
});

$("#guitare").click(function(){
	remonte_sauf(2);
	$("#decends2").slideToggle();
});

$("#batteries").click(function(){
	remonte_sauf(3);
	$("#decends3").slideToggle();
});

$("#clavier").click(function(){
	remonte_sauf(4);
	$("#decends4").slideToggle();
});

$("#studio").click(function(){
	remonte_sauf(5);
	$("#decends5").slideToggle();
});

$("#sono").click(function(){
	remonte_sauf(6);
	$("#decends6").slideToggle();
});

$("#eclairage").click(function(){
	remonte_sauf(7);
	$("#decends7").slideToggle();
});

$("#dj").click(function(){
	remonte_sauf(8);
	$("#decends8").slideToggle();
});

$("#cases").click(function(){
	remonte_sauf(9);
	$("#decends9").slideToggle();
});

$("#accessoires").click(function(){

	remonte_sauf(10);
	$("#decends10").slideToggle();
});

$("#infos").click(function(){
	$(".menu").slideup();
})
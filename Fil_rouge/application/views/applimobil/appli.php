<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url("jquery/jquery.mobile-1.4.5.min.css")?>">   
    <link rel="stylesheet" href="<?= base_url("css/appli.css")?>"> 

<script src= "<?= base_url("jquery/jquery-1.11.1.min.js")?>"></script>
<script src= "<?= base_url("jquery/jquery.mobile-1.4.5.min.js")?>"></script>
 

    </head>
    <body>
         

        <div data-role="page" id="page1" class="vert">

            <div data-role="header" class="degrade1" data-position="fixed">
            <a href="http://127.0.0.1/php/Fil_rouge_web/index.php/api" class="ui-btn ui-icon-home ui-btn-icon-left accueil">Accueil</a>
            
             <h3 class="blanc">
                 Village Green
                </h3>
            </div>   
            <div data-role="content">
            <input type="text" name="recherche" id="recherche" >
             <button id="btneecherche">Recherche</button>
             </br>
             </br>

                <div role="main">
                   <div data-iscroll>
                   <br/>
                        <ul data-role="listview" id="listview1">

                        </ul>
                    </div>
                </div>
            </div>
                
            <div data-role="footer" data-position="fixed" class="degrade2">
                <h1 class="blanc" >Page1 - En bas</h1>
                <img class="image" src="<?= base_url("images/footervillagegreen.png")?>">
            </div>              

        </div>
    
        
        <div data-role="page" id="page2"  class="vert">
        
            <div data-role="header" class="degrade1">
            <a href="http://127.0.0.1/php/Fil_rouge_web/index.php/api" class="ui-btn ui-icon-home ui-btn-icon-left accueil">Accueil</a>
              <button id="btn2">Retour</button>
                    <h3>
                        Page 2 - En haut
                    </h3>
            </div>        
            <div data-role="content" >

            </div>
            <div data-iscroll>
                        <ul data-role="listview" id="listview2">

                        </ul>
            </div>
            <br/>
            <div data-role="footer" data-position="fixed" class="degrade2">
               
                 <img class="image" src="<?= base_url("images/footervillagegreen.png")?>">
            </div>
        </div>

        <div data-role="page" id="page3" class="vert">

            <div data-role="header" class="degrade1" data-position="fixed">
            <a href="http://127.0.0.1/php/Fil_rouge_web/index.php/api" class="ui-btn ui-icon-home ui-btn-icon-left accueil">Accueil</a>
            <button id="btn3">Retour</button>
            
             <h3 class="blanc">
                 Village Green
                </h3>
            </div>   
            <div data-role="content">

                <div role="main">
                   <div data-iscroll>
                   <br/>
                        <ul data-role="listview" id="listview3">

                        </ul>
                    </div>
                </div>
            </div>
            <div data-role="footer" data-position="fixed" class="degrade2">
            
                 <img class="image" src="<?= base_url("images/footervillagegreen.png")?>">
            </div> 
        </div>

        <div data-role="page" id="page4" class="vert">

            <div data-role="header" class="degrade1" data-position="fixed">
            <a href="http://127.0.0.1/php/Fil_rouge_web/index.php/api" class="ui-btn ui-icon-home ui-btn-icon-left accueil">Accueil</a>
            <button id="btn4">Retour</button>
            
             <h3 class="blanc">
                 Village Green
                </h3>
            </div>   
            <div data-role="content" id="detailsProduits">

                <div role="main" id="details">

                </div>
            </div>
            <div data-role="footer" data-position="fixed" class="degrade3">
                <h1 class="blanc">Page4 - En bas</h1>

            </div> 
        </div>

         <div data-role="page" id="page5" class="vert">

            <div data-role="header" class="degrade1" data-position="fixed">
            <a href="http://127.0.0.1/php/Fil_rouge_web/index.php/api" class="ui-btn ui-icon-home ui-btn-icon-left accueil">Accueil</a>
            <button id="btn5">Retour</button>
            
             <h3 class="blanc">
                 Village Green
                </h3>
            </div>   
            <div data-role="content" id="detailsProduits">

                <div role="main" id="details">

                </div>
            </div>
            <div data-role="footer" data-position="fixed" class="degrade3">
                <h1 class="blanc">Page5 - En bas</h1>

            </div> 
        </div>

    </body>
</html>



<script>

    $(".accueil").click(function(){
        $("#recherche").val("");
        $("#listview1").empty();
         $('#listview1').listview('refresh');


        menu();
    });

    $("#btn2").click(function () {
        $("body").pagecontainer("change", "#page1", { transition: "slide", reverse: "true"});
    });

     $("#btn5").click(function () {
        $("body").pagecontainer("change", "#page2", { transition: "slide", reverse: "true"});
    });

      $("#btn4").click(function () {
        $("body").pagecontainer("change", "#page2", { transition: "slide", reverse: "true"});
    });




// fonction permet de chercher
    $("#btneecherche").on('vclick',function(){  
    var produitchercher = encodeURI($("#recherche").val());       
    var api ="<?= site_url("api/find/");?>";    
    $.ajax({
        url :api+produitchercher,        
        success: function (resultat)
        {
            AfficheResult(resultat);
        },
        error: function (request,error) 
        {
            alert('Une erreur est survenue, vous devez saisir un texte');
        }

    });
    var listedesproduits = null;
    function AfficheResult(data)
    {
        $("#listview1").empty();                  
        listedesproduits = data;              
                for (var i=0; i< data.length; i++)
                {
                    var ligne = data[i];
                    codeHTML = '<li>';
                    codeHTML += '<a href="#page4" data-id="' + i + '">';
                    
                        codeHTML += '<img src= "http://127.0.0.1/PHP/Fil_rouge_web/' +ligne.photo+'"/>';
                        codeHTML += '<h3>' + ligne.nom + '</h3>';
                        codeHTML += '<p>' + ligne.description + '</p>';
                        codeHTML += '</a>';
                        codeHTML += '</li>';
                        $('#listview1').append(codeHTML);
                }
                    $('#listview1').listview('refresh');


                    $("#listview1 li a").click(function()
                    {
                        var i = $(this).data("id");
                        var produit = listedesproduits[i];
                        $('#detailsProduits').empty();
                        $('#detailsProduits').append('<div><img class="taille" src="http://127.0.0.1/PHP/Fil_rouge_web/' +produit.photo+'"></div>');
                        $('#detailsProduits').append('<div class="blanc">Titre: '+produit.nom+'</div><br>');
                        $('#detailsProduits').append('<div class="blanc">Information : '+produit.description+'</div><br>');
                        $('#detailsProduits').append('<div class="blanc">Prix : '+produit.prix+'</div>');

                    });
    }
 });


function menu(){

    $.ajax({//chargement des rubrique au démarage de l'appli
        url: "http://127.0.0.1/php/Fil_rouge_web/index.php/Api/rubrique",
        success: function(data) {
                for (var i=0; i< data.length; i++)
                {
                    var ligne = data[i];
                    codeHTML = '<li>';
                    codeHTML += '<a href="#page2" data-id="' + ligne.id_rubrique + '">';
                    
                    codeHTML += ligne.nom;
                    codeHTML += '</a>';
                    codeHTML += '</li></br></br>';
                    $('#listview1').append(codeHTML);
                }
                $('#listview1').listview('refresh');

                $("#listview1 li a").click(function () {
                    var id = $(this).data("id");
                    $.ajax({ //chargement des sous rubriques
                        url:"http://127.0.0.1/php/Fil_rouge_web/index.php/Api/sousrubrique/" + id,
                        success: function(data) {
                            $('#listview2').html("");
                            for (var i=0; i< data.length; i++)
                            {
                                var ligne = data[i];
                                codeHTML = '<li>';
                                codeHTML += '<a href="#page3" data-id="' + ligne.id_rubrique + '">';
                                
                                codeHTML += ligne.nom;
                                codeHTML += '</a>';
                                codeHTML += '</li></br>';
                                $('#listview2').append(codeHTML);
                            }
                            $('#listview2').listview('refresh');

                            $("#listview2 li a").click(function() {


                                var id = $(this).data("id");
                                $.ajax({ // ajax chargement des produits
                                    url:"http://127.0.0.1/php/Fil_rouge_web/index.php/Api/listeproduit/" + id,
                                    success: function(data) {
                                        // AfficheResult(data);
                                        $('#listview3').html("");
                                        for (var i=0; i< data.length; i++)
                                        {
                                            var ligne = data[i];
                                            codeHTML = '<li>';
                                            codeHTML += '<a href="#page5" data-id="' + i + '">';
                                             codeHTML += '<img  src= "http://127.0.0.1/PHP/Fil_rouge_web/' +ligne.photo+'"/>';
                                            codeHTML += ligne.nom;
                                            codeHTML += '</a>';
                                            codeHTML += '</li></br>';
                                            $('#listview3').append(codeHTML);
                                        }
                                        $('#listview3').listview('refresh');

                                        $("#listview3 li a").click(function() {

                                            
                                                var i = $(this).data("id");
                                                var produit = data[i];
                                                console.log(produit);
                                                $('#details').empty();
                                                $('#details').append('<div><img class="taille" src="http://127.0.0.1/PHP/Fil_rouge_web/' +produit.photo+'"></div>');
                                                $('#details').append('<div class="blanc">Titre: '+produit.nom+'</div><br>');
                                                $('#details').append('<div class="blanc">Information : '+produit.description+'</div><br>');
                                                $('#details').append('<div class="blanc">Prix : '+produit.prix+'</div>');

                                        });


                                    }
                                }); // Fin ajax chargement des produits



                            });


                        }
                    });// Fin ajax chargement des sous rubriques
                }); 

                
        }


    });// Fin ajax chargement des rubriques

};

menu();
</script>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=3, maximum-scale=3, minimum-scale=1, width=480, height=854, target-densitydpi=240" />      
        <link rel="stylesheet" type="text/css" href="css/index.css" />        
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/variables.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>

        <body style="background-image: url('img/sky.jpg'); background-repeat: repeat-x; background-color: #593620;">
            
            
        <div id="bouttonRetour" style="position:absolute; top:8px; right:8px; z-index:1000; opacity: 0.75;" class="boutton" onclick="retour();"><font size="3">Retour</font></div>
<div id="canvas" style="top:0px; left:0px; width: 100%; height: 100%; overflow-x: scroll; overflow-y: scroll; position: absolute; -webkit-transform: scale(1);">
   <div id="arrow" style="position:absolute; width:64px; height:64px; display:none; z-index:1200"><img src="img/sprites/arrow/1.png" style="width:100px; height:100px;"></div>

    
    <div id="map" style="width:1280px; height:2240px; background-image: url('maps/0-0/fond.jpg'); display: none; z-index:0; position: absolute; left:0px; top:0px;">
<!--    <div id="perso" style="position:absolute; z-index: 50; width:32px; height:48px; background-image: url('img/sprites/1.png');"></div>    -->
    <div onclick="deplacement(1, 1, '0-0')" id="1" style="position:absolute; z-index: 40; width:96px; height:64px; top: 136px; left:165px; background-image: url('maps/0-0/castle1.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:-100px; top:-30px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 1</font></b></div>
    </div>   
    <div onclick="deplacement(3, 3, '0-0')" id="3" style="position:absolute; z-index: 50; width:160px; height:129px; top: 288px; left:800px; background-image: url('maps/0-0/castle2.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:-65px; top:85px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 3</font></b></div>
    </div>   
    <div onclick="deplacement(5, 2, '0-0')" id="2" style="position:absolute; z-index: 60; width:383px; height:192px; top: 80px; left:600px; background-image: url('maps/0-0/forest1.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:35px; top:70px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 5</font></b></div>
    </div>   
    <div onclick="deplacement(8, 4, '0-0')" id="4" style="position:absolute; z-index: 70; width:31px; height:63px; top: 610px; left:228px; background-image: url('maps/0-0/cristal1.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:-130px; top:-30px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 8</font></b></div>
    </div>   
    <div onclick="deplacement(18, 5, '0-0')" id="5" style="position:absolute; z-index: 80; width:31px; height:64px; top: 645px; left:543px; background-image: url('maps/0-0/tower1.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:-130px; top:-30px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 18</font></b></div>
    </div>   
    <div onclick="deplacement(11, 6, '0-0')" id="6" style="position:absolute; z-index: 90; width:380px; height:384px; top: 700px; left:720px; background-image: url('maps/0-0/forest2.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:30px; top:140px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 11</font></b></div>
    </div>   
    <div onclick="deplacement(5, 7, '0-0')" id="7" style="position:absolute; z-index: 100; width:64px; height:32px; top: 1045px; left:163px; background-image: url('maps/0-0/town1.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:-110px; top:-30px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 5</font></b></div>
    </div>   
    <div onclick="deplacement(18, 8, '0-0')" id="8" style="position:absolute; z-index: 110; width:99px; height:117px; top: 1320px; left:625px; background-image: url('maps/0-0/town2.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:-100px; top:-30px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 18</font></b></div>
    </div>   
    <div onclick="deplacement(21, 10, '0-0')" id="10" style="position:absolute; z-index: 120; width:91px; height:94px; top: 1510px; left:964px; background-image: url('maps/0-0/mountain1.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:-100px; top:-30px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 21</font></b></div>
    </div>   
    <div onclick="deplacement(25, 9, '0-0')" id="9" style="position:absolute; z-index: 130; width:223px; height:159px; top: 1600px; left:430px; background-image: url('maps/0-0/forest3.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:-50px; top:-30px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 25</font></b></div>
    </div>   
    <div id="forest4" style="position:absolute; z-index: 140; width:639px; height:384px; top: 1700px; left:50px; background-image: url('maps/0-0/forest4.png'); text-align: center;">
        
    </div>   
    <div onclick="deplacement(32, 11, '0-0')" id="11" style="position:absolute; z-index: 150; width:64px; height:63px; top: 1730px; left:985px; background-image: url('maps/0-0/tree1.png'); text-align: center;">
        <div style="position:absolute; width:300px; left:-120px; top:-30px; z-index: 60; text-shadow: 0 0 0.4em #000000;"><b><font color="#FFFFFF">Niveau 32</font></b></div>
    </div>   

    
        
    </div>
</div>
            
        </body>
<script type="text/javascript" src="cordova.js"></script>

<script type="text/javascript">
  document.addEventListener("deviceready", onDeviceReady, false);

    function onDeviceReady() {
        var my_media = null;
        playTheme("/android_asset/www/sounds/Theme3.ogg")
    }
    
pseudo = window.localStorage.getItem("pseudo");

$.post(url+"apk/infoPlayer.php", {user : pseudo}, function(data) {
    niveau = (data.niveau/2)*2;
    window.localStorage.setItem("niveau", niveau);
    map = data.map;
})

$.post(url+"apk/map/coordPlayer.php", {pseudo:pseudo}, function(data){
    if(data.error == 0) {
        coordX = (data.coordX*20)+20;
        coordY = (data.coordY*20);
        map = data.map;
        
        $("#map").css("background-image", "url('maps/"+map+"/fond.jpg')");
//        $("#perso").css("left", coordX+"px");
//        $("#perso").css("top", coordY+"px");
        
        $("#map").show();
//        $("#perso").show();
        
        
    } else {
        alert("erreur de chargement de map.");
    }
})

coord = window.localStorage.getItem("coord");

topArrow = $("#"+coord).css("top");
leftArrow = $("#"+coord).css("left");
heightArrow = $("#"+coord).css("height");
widthArrow = $("#"+coord).css("width");

$("#arrow").css({
    "top" : topArrow-50,
    "left": leftArrow,
    }).show();


niveau = window.localStorage.getItem("niveau");
function deplacement(lvlNeed, destination, mapDest) {
    if(lvlNeed > niveau) {
        alert("Vous devez être niveau "+lvlNeed+" pour vous rendre ici !");
    } else if(coord == destination) {
        alert("Vous vous trouvez déjà à cet endroit.");
    }else {
        if(confirm("Voulez-vous vous déplacer ici ? \nTemps de trajet : 2h")) {
            $.post(url+"apk/deplacement/debutDeplacement.php", {pseudo:pseudo, destination: destination, coord: coord, mapDest: mapDest}, function(data) {
                if(data.error == 0) {
                    alert("Début du voyage.");
                    $("#canva").hide();
                    window.location.replace("index.html");
                } else {
                    alert("Erreur lors de l'enregistrement du déplacement.")
                }
            });
        }
    }
}

function retour(){
    window.location.replace("index.html");
}
function playTheme(url) {
    // Play the audio file at url
        my_media = new Media(url,
        // success callback
        function() {
            console.log("playAudio():Audio Success");
            my_media.play();
        },
        // error callback
        function(err) {
            console.log("playAudio():Audio Error: "+err);
    });

    // Play audio
    my_media.play();
}
</script>

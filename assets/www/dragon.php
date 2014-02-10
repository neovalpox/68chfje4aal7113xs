<link rel="stylesheet" type="text/css" href="css/index.css" />
<script type="text/javascript" src="js/variables.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<meta charset="utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=480, height=854, target-densitydpi=240" />
<body>
    <div id="bouttonRetour" style="position:absolute; top:8px; right:8px; z-index:1000; opacity: 0.75;" class="boutton" onclick="retour();"><font size="3">Retour</font></div>
    <div style="width:100%; height:67%; background-image: url(img/backdropDragon/1.jpg); background-repeat: no-repeat; background-size: cover;" id="mainFrame">
        <div id="underMenu" style="position: fixed; top:67%; width:100%; height:13px; background-image: url(img/borderBottom.gif); background-repeat: x-repeat; z-index:60;"></div>
        <div style="width:100%; height:33%; position: absolute; bottom:0px; left:0px; background-image: url(img/back.png);"></div>
        <div id="dragon" style="width:100%; position:absolute; top:300px; text-align: center; display:none;">
            <div id="time" style="width:100%; text-align:center; margin-top:25px;">test</div>
            <img src="" id="imageDragon">
        </div>
</body>

<script type="text/javascript">
function retour(){
    window.location.replace("index.html");
}

pseudo = window.localStorage.getItem("pseudo");
$.post(url+"apk/dragon/infoDragon.php", {pseudo: pseudo}, function(data){
    if(data.error == 0) {
        nom = data.nom;
        sexe = data.sexe;
        type = data.type;
        type2 = data.type2;
        niveau = data.niveau;
        special1 = data.special1;
        special2 = data.special2;
        special3 = data.special3;
        temps = data.temps;
        dateDebut = data.dateDebut;
        dateNow = data.dateNow;
        dateDiff = data.dateDiff;
        lieu = data.lieu;
        echange = data.echange;
        faim = data.faim;
        
        window.localStorage.setItem("dateDebut", dateDebut);
        window.localStorage.setItem("temps", temps);
        window.localStorage.setItem("dateNow", dateNow);
        window.localStorage.setItem("dateDiff", dateDiff);
        
        if(niveau == 0) {
            if(dateDiff > 207360) {
                
                iconDragon = "egg0.png";
            }  else if(dateDiff > 155520 && dateDiff < 207360) {
                iconDragon = "egg0.png";
            } else if(dateDiff > 103680 && dateDiff < 155520) {
                iconDragon = "egg1.png";
            } else if(dateDiff > 51840 && dateDiff < 103680) {
                iconDragon = "egg2.png";
            } else {
                iconDragon = "egg3.png";
            }
        }
        
        $("#imageDragon").attr("src", "img/dragon/"+type2+"/"+iconDragon);
        $("#dragon").show();
    }
})
    
    var total_secondes = window.localStorage.getItem("dateDiff");
    
    alert(total_secondes)
    
    var tempsCraft = window.localStorage.getItem("temps");
    var dateNow = window.localStorage.getItem("dateNow");
    var dateDebut = window.localStorage.getItem("dateDebut");
    
    var jours = Math.floor(total_secondes / (60 * 60 * 24));
    var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
    var minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
    var secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));
    
    if(heures > 1) {
            lettreJours = "s";
        } else {
            lettreJours = "";
        }
        if(heures > 1) {
            lettreHeures = "s";
        } else {
            lettreHeures = "";
        }
        if(minutes > 1) {
            lettreMinutes = "s";
        } else {
            lettreMinutes = "";
        }
        if(secondes > 1) {
            lettreSecondes = "s";
        } else {
            lettreSecondes = "";
        }
        
    
    if(jours == 0) {
            timeSet = heures + "h"+lettreHeures+" " + minutes + "m"+lettreMinutes+" " + secondes + "s"+lettreSecondes;
            if(heures == 0) {
                timeSet = minutes + "m"+lettreMinutes+" " + secondes + "s"+lettreSecondes;
                if(minutes == 0) {
                    timeSet = secondes + "s"+lettreSecondes;
                    if(secondes == 0) {
                        evolutionComplete();
                    }
                }
            }
        } else {
            timeSet = jours + "j"+lettreJours+" " + heures + "h"+lettreHeures+" " + minutes + "m"+lettreMinutes+" " + secondes + "s"+lettreSecondes;
        }
        
    $("#time").html("<font size='5' color='#FFFFFF'><b>"+timeSet+"</b></font>");

    if ( typeof( window.clock ) != "undefined" ) {
         window.clearInterval(clock);
         clock = window.setInterval("timeNew()", 1000);
    }
    else {
        clock = window.setInterval("timeNew()", 1000);
    }
    
    function timeNew() {
        if(secondes < 0) {
            evolutionComplete();
        }

        tempsBarre = total_secondes;
        temmpsBarreMax = tempsCraft;
        widthXP = ((tempsBarre*100/temmpsBarreMax)*400/100)-14;
        
        $("#widthCraft").attr("width",widthXP);
        total_secondes = total_secondes -1;
        secondes = secondes - 1;
        if(secondes < 0) {
            secondes = 59;
            minutes = minutes-1;
        }
        if(minutes < 0) {
            minutes = 59;
            heures = heures - 1;
        }
        
        if(heures > 1) {
            lettreJours = "s";
        } else {
            lettreJours = "";
        }
        if(heures > 1) {
            lettreHeures = "s";
        } else {
            lettreHeures = "";
        }
        if(minutes > 1) {
            lettreMinutes = "s";
        } else {
            lettreMinutes = "";
        }
        if(secondes > 1) {
            lettreSecondes = "s";
        } else {
            lettreSecondes = "";
        }
        
        if(jours == 0) {
            timeSet = heures + "h"+lettreHeures+" " + minutes + "m"+lettreMinutes+" " + secondes + "s"+lettreSecondes;
            if(heures == 0) {
                timeSet = minutes + "m"+lettreMinutes+" " + secondes + "s"+lettreSecondes;
                if(minutes == 0) {
                    timeSet = secondes + "s"+lettreSecondes;
                    if(secondes == 0) {
                        evolutionComplete();
                        
                    }
                }
            }
        } else {
            timeSet = jours + "j"+lettreJours+" " + heures + "h"+lettreHeures+" " + minutes + "m"+lettreMinutes+" " + secondes + "s"+lettreSecondes;
        }
        
        $("#time").html("<font size='5' color='#FFFFFF'><b>"+timeSet+"</b></font>");
    }
</script>
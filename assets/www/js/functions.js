function majInfoPlayer(user) {
    $.post(url+"apk/infoPlayer.php", {user : user}, function(data) {
        vie = data.vie;
        window.localStorage.setItem("dateDiffMort", data.dateDiffMort);
        window.localStorage.setItem("tempsMort", data.tempsMort);
        window.localStorage.setItem("dateNow", data.dateNow);
        window.localStorage.setItem("dateDebutMort", data.dateDebutMort);
        
        if(vie == "vie" ){
            widthHP = (data.hp*100/data.hpmax)-5;
            widthMP = (data.mp*100/data.mpmax)-5;
            hp = data.hp;
            mp = data.mp;
        } else {
            showAvatarChat("Vous êtes mort. Je vais vous réssuciter, mais cela va me prendre du temps...");
            mp = 0;
            hp = 0;
            widthHP = (0*100/data.hpmax)-5;
            widthMP = (0*100/data.mpmax)-5;
        }
        widthXP = ((data.xp*100/data.xpmax)*480/100)-10;
        niveau = data.niveau;
        
        map = data.map;
        coord = data.coord;
        window.localStorage.setItem("coord", coord);
        diamant = data.diamant2;
        gold = data.gold;
        
        
        $("#infoPlayer").html("\n\
        <table style=' text-shadow: 0 0 0.4em #000000; top: 12px; left:10px;; z-index:100; position:absolute'><tr><td width='60' height='32'><font color='#FFFFFF'><b>Vie :</font></td><td background='img/barre/fond.png' width='104' align='center'><font color='#FFFFFF'> "+hp+" / "+data.hpmax+"</font></td></tr>\n\
        <tr><td colspan='2' height='10'></td></tr>\n\
        <tr><td height='32'><font color='#FFFFFF'>Mana :</font></td><td background='img/barre/fond.png' width='104' align='center'><font color='#FFFFFF'> "+mp+" / "+data.mpmax+"</b></font></td></tr></table>\n\
        <div id='barreHP' style='position:absolute; bottom:63px; left:78px; z-index:48;'><img src='img/barre/hpLeft.png'><img src='img/barre/hpCenter.png' width='"+widthHP+"' height='32'><img src='img/barre/hpRight.png'></div>\n\
        <div id='barreMP' style='position:absolute; bottom:17px; left:78px; z-index:49;'><img src='img/barre/mpLeft.png'><img src='img/barre/mpCenter.png' width='"+widthMP+"' height='32'><img src='img/barre/mpRight.png'></div>\n\
        <div id='barreXP' style='position:absolute; bottom:103px; left:0px; z-index:47;'><img src='img/barre/xpLeft.png' height='16'><img src='img/barre/xpCenter.png' width='"+widthXP+"' height='16'><img src='img/barre/xpRight.png' height='16'></div>\n\
        <div id='prismesTot' style='position:absolute; bottom:10px; right:10px; z-index:60'>\n\
        <table><tr>\n\
        <td><font color='#FFFFFF' size='4'><b><div id='prismes' style='text-shadow:0px 0px 4px #A9A9A9;'>"+formatMillier(diamant)+" </div></b></font></td><td><div id='animPrisme2'></div></td><td width='30'></td>\n\
        <td><font color='#FFFFFF' size='4'><b><div id='afficheGold' style='text-shadow:0px 0px 4px #A9A9A9;'>"+formatMillier(gold)+"</div> </b></font></td><td><img src='img/gold.png' width='25' align='absmiddle'></div></td>\n\
        </tr></table></div>\n\
        <div id='capsuleNiveau' style='position:absolute; bottom:110px; left:6px; z-index:950; text-shadow:0px 0px 8px #333333;'><b><font color='#FFFFFF' size='6'>"+niveau+"</font></b></div>\n\
        <div id='avatar' style='position:absolute; display:none; bottom:90px; right:10px; z-index:65'><img src='img/avatar/face1.png' align='absmiddle'></div>\n\
        <div id='avatarBulle' style='position: absolute; display: none; height: 171px; width:324px; bottom:140px; right:40px; z-index:50000; background-image:url(img/bulle.png);' onclick='clickBulle();'><div id='avatarBulleText' style='margin:22px; text-align:justify'></div></div>\n\
");
    $("#infoPlayer").show();
    $("#loader").hide();
    getFirst(user);
    })
    
}
///////////////////////////////
// Mise en forme des millier //
///////////////////////////////
function formatMillier(nombre){
  nombre += '';
  var sep = "'";
  var reg = /(\d+)(\d{3})/;
  while( reg.test( nombre)) {
    nombre = nombre.replace( reg, '$1' +sep +'$2');
  }
  return nombre;
}
/////////////////////////////////
// Passage d'un menu à l'autre //
/////////////////////////////////
function selectMenu(id) {
    pseudo = window.localStorage.getItem("pseudo");
//    if(id == "next") {
//        $("#menu1").hide(0, function() {
//            $("#menu2").show(0);
//        });
//    } else if(id == "prev") {
//        $("#menu2").hide(0, function() {
//            $("#menu1").show(0);
//        });
//    } else 
    if(id == "disconnect") {
        window.localStorage.setItem("connected", "0");
        window.localStorage.setItem("pseudo", "");
        window.localStorage.setItem("pass", "0");
        window.location.replace("index.html");
    } else if(id == "map") {
        $("#main").hide(0, function() {
            $("#loader").show(0, function() {
                $("#main").load("map.php", function() {
                    $("#loader").hide(0, function(){
                        $("#main").show(0);
                    })
                });
            });
        });
    } else if(id == "chat") {
        $("#main").hide(0, function() {
            $("#loader").show(0, function() {
                $("#main").load("chat.html", function() {
                    $("#loader").hide(0, function(){
                        $("#main").show(0);
                    })
                });
            });
        });
    } else {
        $("#main").hide(0, function() {
            $("#loader").show(0, function() {
                $("#main").load(url+"apk/"+id+".php?p="+pseudo, function() {
                    $("#loader").hide(0, function(){
                        $("#main").show(0);
                    })
                });
            });
        });
    }
}
///////////////////////////////////////
// Vérification si premier lancement //
///////////////////////////////////////
function getFirst(pseudo) {
    $.post(url+"apk/getFirst.php", {pseudo: pseudo}, function(data) {
        if(data.first == 1) {
            window.localStorage.setItem("actionBulle", "first");
            intro();
            $.post(url+"apk/setFirst.php", {pseudo:pseudo});
        } else {
            $("#avatar").hide();
            $("#main").load(url+"apk/info.php?p="+pseudo, function() {
                $("#loader").hide(0);
                $("#main").show(0);
            });
        }
    });
}
////////////////////////////////////////////////
// Affichage de la bulle de texte de l'avatar //
////////////////////////////////////////////////
function showAvatarChat(text) {
    $("#avatar").show();
    $("#avatarBulleText").html(text);
    $("#avatarBulle").show();
    
}
function hideAvatarChat(text) {
    $("#avatarBulle").hide();
    $("#avatarBulleText").html("");
    $("#avatar").hide();
}
////////////////////////////////////
// Recherche si nouveaux messages //
////////////////////////////////////
function getNewMessages() {
    pseudo = window.localStorage.getItem("pseudo");
    $.post(url+"apk/verifMessages.php", {pseudo: pseudo}, function(data) {
        newMessages = data.messages;
        if(data.error == 0) {
            if(newMessages == 1 ) {
                window.localStorage.setItem("actionBulle", "message");
                text = "Vous avez <b>"+newMessages+"</b> nouveau message.";
                hideAvatarChat(text);
            } else if(newMessages > 1) {
                text = "Vous avez <b>"+newMessages+"</b> nouveaux messages.";
                window.localStorage.setItem("actionBulle", "message");
                showAvatarChat(text);
            }
        }
    })
    
}

var timer=setInterval("getNewMessages()", 30000);

/////////////////////
// Texte de départ //
/////////////////////
function intro() {
    text1 = "Bonjour à toi <b><?php echo $pseudo; ?></b> et bienvenue à MagicalWind !";
    text2 = "Je me présente, je suis Elora, la guide de l'académie.";
    text3 = "Comme tout élève, vous avez reçu votre oeuf de dragon.";
    text4 = "Pour vous en occuper, rendez-vous dans sa cage.";
    text5 = "Vous avez également reçu votre premier sort.";
    text6 = "Celui-ci vous permettra de vous défendre lors de vos combats.";
    text7 = "Tous vos sorts se trouvent dans votre grimoire.";
    text8 = "Vous pourrez en apprendre d'autre en les achetants ou en les craftants !";
    text9 = "Si vous désirez en apprendre plus sur les différents éléments du jeu, aller à la bibliothèque.";

    textMax = 10;
    numText = 1;
    window.localStorage.getItem("actionBulle", "message");
    showAvatarChat(text1);
    
}

////////////////////////////////
// première action par défaut //
////////////////////////////////




function clickBulle() {
    getActionBulle = window.localStorage.getItem("actionBulle");
    ///////////////////////////////////////////
    // Si première fois alors texte bienvenu //
    ///////////////////////////////////////////
    if(getActionBulle == "first") {
        if(numText < textMax) {
            nomVar = eval("text"+numText);
            showAvatarChat(nomVar);
            numText++;
        } else {
            $("#loader").show();
            $("#avatarBulle").hide();
            $("#main").load(url+"apk/info.php?p="+pseudo, function() {
                $("#loader").hide();
                $("#main").show();
            });
            
        }
    }
    if(getActionBulle == "message") {
         hideAvatarChat();
         selectMenu('messages');
    }
}

function onLoad() {
    document.addEventListener("deviceready", onDeviceReady, false);
}
function onDeviceReady() {
    document.addEventListener("orientationChanged", updateOrientation);
    
    ///////////////////////////////////////////////////
    // Définition de la variable de gestion du temps //
    ///////////////////////////////////////////////////
    


}
    ///////////////////////////
    // animation des prismes //
    ///////////////////////////
    animPrisme = window.setInterval("timePrisme()", 120);
    n = 1;
    function timePrisme() {
        $("#animPrisme2").html("<img src='img/anim/sprites/prisme2/"+n+".png' align='absmiddle'>")
        if(n == 3) {
            n = 0;
        }
        n++;
    }

function playSon(url) {
    // Play the audio file at url
    var my_media = new Media("/android_asset/www/sounds/"+url,
        // success callback
        function() {
            console.log("playAudio():Audio Success");
        },
        // error callback
        function(err) {
            console.log("playAudio():Audio Error: "+err);
    });

    // Play audio
    my_media.play();
}
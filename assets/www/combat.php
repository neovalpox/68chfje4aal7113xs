<html>
    <head>
        
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <script type="text/javascript" src="js/variables.js"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=480, height=854, target-densitydpi=240" />

    <script type="text/javascript">
    $(document).ready(function() {


     var innerHeight = $('body').height();
    // $("#perso").css("top", (innerHeight/2)+40);
    // $("#ennemi").css("top", (innerHeight/2)-40);
     $("#perso").css("top", "340px");
     $("#ennemi").css("top", "250px");
    });
    </script>
</head>
<body style="background-color: #000000;">
    <div id="underMenu2" style="position: absolute; top:120px; width:100%; height:13px; background-image: url(img/borderBottom.gif); background-repeat: x-repeat; z-index:10;"></div>
    <div id="underMenu3" style="position: absolute; top:730px; width:100%; height:13px; background-image: url(img/borderBottom.gif); background-repeat: x-repeat; z-index:11;"></div>
    <div style="position:absolute; top:0px; left:0px; width:100%; height:100%; background-repeat: no-repeat; background-position: 0px 120px; background-color: #000000; z-index:5;" id="mainFrame">

        <div id="ennemi" style=' right:60px; position: absolute; text-align: center;'>
        <div id="nomEnnemi" style="box-shadow:inset 0px 0px 0px 0px #fff6af;"></div>
        <img id="imgEnnemi" style="text-align: center">
        <div id="animEnnemi" style="position: absolute; left:-55px; bottom: -20px;"></div>
        <div id="animMortEnnemi" style="position: absolute; left:-59px; bottom: -42px;"></div>
        <div id="infoEnnemi"></div>
    </div>
    
    <div id="perso" style="position:absolute; left: 90px;">
        <div id="nomPerso" style="box-shadow:inset 0px 0px 0px 0px #fff6af; position:absolute; top:-22px; left:-11px;"></div>
        <img src="img/sprites/back/3.png">
        <div id="animPerso" style="position: absolute; left:-70px;  bottom: -88px;"></div>
    </div>
<!--    <div id="infoText" style="position: absolute; bottom:213px; height:180px; width:100%; background-color: #000000; border: 2px solid #ffffff;"></div>-->
    <div id="underMenu" style="position: absolute; top:437px; width:100%; height:13px; background-image: url(img/borderBottom.gif); background-repeat: x-repeat; z-index:15"></div>
    <div id="menuCombat" style="position:absolute; top:52px; width: 100%">
            <table width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" onclick="attaqueCac();" style="border:4px inset #A9A9A9;"><img src="img/icons/001-Weapon01.png" width="40" align="absmiddle" style="margin:4px;"><b><font color="#FFFFFF">Attaquer</font></b></td>
                    <td align="center" onclick="afficheInventaire();" style="border:4px inset #A9A9A9;"><img src="img/icons/Sac 1.png" width="40" align="absmiddle" style="margin:4px;"><b><font color="#FFFFFF">Inventaire</font></b></td>
                    <td align="center" onclick="afficheSort();" style="border:4px inset #A9A9A9;"><img src="img/icons/044-Skill01.png" width="40" align="absmiddle" style="margin:4px;"><b><font color="#FFFFFF">Sorts</font></b></td>
                    <td align="center" onclick="abandonner();" style="border:4px inset #A9A9A9;"><img src="img/icons/046-Skill03.png" width="40" align="absmiddle" style="margin:4px;"><b><font color="#FFFFFF">Abandonner</font></b></td>
                </tr>
            </table>
        </div>



<div id="win" style="width:100%; height:100%; background-image: url('img/back.png'); display:none; position: absolute;z-index: 20;">
    <div style="margin-top:150px;"><center><font color="#FFFFFF"><div id="gainMonstre"></div></font></center></div>
    <center><div id='barreXP' style='margin-top:20px;background-image: url("img/barre/fondExp.png"); width:280px; height:32px; text-align: left;'><img src='img/barre/xpLeft.png' height='32'><img src='img/barre/xpCenter.png' width='1' height='32' id='widthXPBarre'><img src='img/barre/xpRight.png' height='32'></div></center>
    <div style="margin-top:20px;"><center><font color="#FFFFFF" size='5'><div id="objetMonstre"></div></font></center></div>
    <div style="margin-top:20px;"><center><font color="#FFFFFF" size='5'><div id="goldMonstre"></div></font></center></div>
    <div id="bouttonBack" style="text-align: center; width: 100%; margin-top:40px;"><a href="#" onclick="goBack();" class="boutton"><font size="3">Retour</font></a></div>
</div>


<div id="action" style="background-color: #333333; height:280px; width:100%; position:absolute; top: 450px; left:0px; z-index: 200">
    <div id="waiter" style="position: absolute; top:80px; left:0px; width:100%; display: none; margin-top:5px;"><center><b><font color="#FFFFFF">Concentration...</font></b><br><img src="img/barre/xpCenter.png" width="0" height="32" id="progWaiter"></center></div>
        <table width="100%" height="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td width="100%"><div id="listeSort" style="overflow-y: scroll; height:100%;"></div></td>
            </tr>
        </table>
    </div>
    
<div id="blocInventaire" style="display:none; background-color: #333333; height:280px; width:100%; position:absolute; top: 450px; left:0px; z-index: 300;">
    <div id="waiter" style="position: absolute; top:80px; left:0px; width:100%; display: none; margin-top:5px;"><center><b><font color="#FFFFFF">Concentration...</font></b><br><img src="img/barre/xpCenter.png" width="0" height="32" id="progWaiter"></center></div>
        <table width="100%" height="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td width="100%"><div id="listeInventaire" style="overflow-y: scroll; height:100%;"></div></td>
            </tr>
        </table>
    </div>
</div>
    
    <div id="infoPlayer" style="position:absolute; top:-10px; width:100%; left:0px;display:none; text-align: center; background-color: #333333; height:46px;"></div>
<script type="text/javascript" src="cordova.js"></script>

</body>
</html>

<script type="text/javascript">
    document.addEventListener("backbutton", onBackKeyDown, false);
    document.addEventListener("deviceready", onDeviceReady, false);

    function onDeviceReady() {
        var my_media = null;
        playTheme("/android_asset/www/sounds/Battle5.ogg")
//        window.localStorage.setItem("music", "Battle5.ogg");
//        playAudio();
        
    }
    
    function onBackKeyDown() {
        navigator.notification.confirm("Voulez-vous quitter MagicalWind ? Vous allez abandonner le combat !", exitMagicalWind, "Quitter", "Quitter, Annuler");
    }
    user = window.localStorage.getItem("pseudo");
    
    function exitMagicalWind(boutton) {
        if(boutton == 1) {
            navigator.app.exitApp();
        }
    }
    
    function majInfoPlayer(user) {
    
        $.post(url+"apk/infoPlayer.php", {user : user}, function(data) {
            widthHP = data.hp*100/data.hpmax;
            widthMP = data.mp*100/data.mpmax;
            window.localStorage.setItem("hpJoueur", data.hp);
            window.localStorage.setItem("hpMaxJoueur", data.hpmax);
            window.localStorage.setItem("mpJoueur", data.mp);
            window.localStorage.setItem("mpMaxJoueur", data.mpmax);
            window.localStorage.setItem("xpJoueur", data.xp);
            window.localStorage.setItem("xpMaxJoueur", data.xpmax);
            widthXP = ((data.xp*100/data.xpmax)*240/100)-10;
            $("#widthXPBarre").attr("width", widthXP);
            niveau = data.niveau;
            coord = data.coord;
            map = data.map;
            
            $("#nomPerso").html("<font color='#FFFFFF' size='3'><b>"+user+"</b></font>");
            
            $("#mainFrame").css("background-image", "url('img/battleback/"+map+"-"+coord+".jpg')");
            $("#mainFrame").css("background-size:", "100%");
            
            $("#infoPlayer").html("<table style='top: 12px; left:10px; z-index:100; position:absolute' align='center'><tr><td height='32'><font color='#FFFFFF'><b>Vie :</font></td><td background='img/barre/fond.png' width='104' align='center'><font color='#FFFFFF' size='3'> "+data.hp+" / "+data.hpmax+"</font></td>\
            <td width='40'></td><td height='32'><font color='#FFFFFF'>Mana :</font></td><td background='img/barre/fond.png' width='104' align='center'><font color='#FFFFFF' size='3'> "+data.mp+" / "+data.mpmax+"</b></font></td></tr></table>\
            <div id='barreHP' style='position:absolute; top:14px; left:51px; z-index:48;'><img src='img/barre/hpLeft.png'><img src='img/barre/hpCenter.png' width='"+widthHP+"' height='32'><img src='img/barre/hpRight.png'></div>\
            <div id='barreMP' style='position:absolute; top:14px; left:253px; z-index:49;'><img src='img/barre/mpLeft.png'><img src='img/barre/mpCenter.png' width='"+widthMP+"' height='32'><img src='img/barre/mpRight.png'></div>\
            ");
            $("#infoPlayer").show();
            afficheGrimoire();
            getInventaire();
//            niveauMonstre = Math.floor((Math.random()*3));
//            niveauMonstre = (niveau/2*2)+niveauMonstre;
            idMonstre = window.localStorage.getItem("idMonstre");
            majInfoEnnemi(idMonstre);
        });
    }
    function majInfoEnnemi(ennemi) {
        
        $.post(url+"apk/infoEnnemi.php", {ennemi : ennemi}, function(data) {
            widthHP = data.hp*70/data.hpmax;
            window.localStorage.setItem("hpMonstre", data.hp);
            window.localStorage.setItem("idMonstre", data.idMonstre);
            window.localStorage.setItem("hpMaxMonstre", data.hpmax);
            window.localStorage.setItem("vieMonstre", 1)
            niveau = data.niveau;
            nom = data.nom;

            icon = data.icon;
            nom_attaque = data.nom_attaque;
            degat = data.degat;
            xpGain = data.xp;
            window.localStorage.setItem("xpGain", xpGain);
            
            $("#gainMonstre").html("Vous avez battu  <b>"+nom+"</b><BR><BR><b>"+xpGain+" xp</b>");
            objet = data.objet;
            randomObjet(objet);
            gold = data.gold;
            randomGold(gold);
            $("#infoEnnemi").html("<div id='barreHPMonster' style='text-align:center'><img src='img/barre/hpLeftMonster.png'><img src='img/barre/hpCenterMonster.png' width='"+widthHP+"' height='10'><img src='img/barre/hpRightMonster.png'></div>");
            
            timeMouvementMonstre = window.setInterval("mouvementMonstre("+icon+")", 180)
            
            $("#nomEnnemi").html("<font color='#FFFFFF' size='3'><b>"+nom+"</b></font>");
            $("#infoPlayer").show();
            $("#infoText").html("<font color='#FFFFFF' size='3'>Attention, un <b>"+nom+"</b> vous attaque !</font>")
        });
    }
    n = 1;
    function mouvementMonstre(icon) {
        if(window.localStorage.getItem("vieMonstre") == 1) {
            $("#imgEnnemi").attr("src", "img/sprites/front/"+icon+"/"+n+".png");
            if(n == 4) {
                n = 1;
            }
            n++;
        }
    }
    majInfoPlayer(user);
    
    function afficheGrimoire() {
        mpJoueur = window.localStorage.getItem("mpJoueur")/2*2;
        contenu = "<table width='96%' cellspacing='0' cellpadding='0' align='center' bgcolor='#333333'><tr>";
        $.post(url+"apk/combat/grimoire.php", {pseudo: user}, function(data) {
            j=0;
            for(i=0;i<data.totSort;i++) {
                
                if(j==2) {
                    contenu += "</tr><tr>";
                    j=0;
                }
                id = eval("data.id_"+i);
                icon = eval("data.icon_"+i);
                nom = eval("data.nom_"+i);
                mp = eval("data.mp_"+i)/2*2;
                degat = eval("data.degat_"+i);
                degatAffiche = eval("data.degatAffiche_"+i);
                type = eval("data.type_"+i);
                anim = eval("data.animSort_"+i);
                nbAnim = eval("data.nbAnim_"+i);
                sound = eval("data.sound_"+i);
                window.localStorage.setItem("sound", sound);

                if(mpJoueur < mp) {
                    contenu += "<tr bgcolor='#333333'><td colspan='2' height='8'></td></tr>";
                    contenu += "<tr id='sort_"+i+"' bgcolor='#333333'><td style='background-image: url(img/fondSort.png); background-repeat: no-repeat; width:55px; height:55px;' rowspan='2' align='center'><img src='img/icons/"+icon+".png' style=' -webkit-filter: grayscale(100%); filter: gray;' align='absmiddle'></td><td><b><font color='#666666' size='3'> "+nom+"</font></b></td><td align='center'><font color='#666666' size='2'>"+degatAffiche+"</font></td><td><font color='#666666'><b>"+mp+" Mana</b></font></td></tr>";
                    contenu += "<tr bgcolor='#333333'><td colspan='2' height='8'></td></tr>";
                    contenu += "<tr bgcolor='#555555'><td colspan='3' height='3'></td></tr>";            
                    contenu += "<tr><td colspan='2' height='3' bgcolor='#222222'></td></tr>";
                } else {
                    contenu += "<tr bgcolor='#333333'><td colspan='2' height='8'></td></tr>";
                    contenu += "<tr id='sort_"+i+"' bgcolor='#333333' onclick='selectSort(\""+anim+"\",\""+degat+"\",\""+mp+"\",\""+id+"\",\""+nbAnim+"\",\""+sound+"\")'><td style='background-image: url(img/fondSort.png); background-repeat: no-repeat; width:55px; height:55px;' align='center'><img src='img/icons/"+icon+".png' align='absmiddle'></td><td><b><font color='#FFFFFF' size='3'> "+nom+"</font></b></td><td align='center'><font color='#FF6600' size='2'>"+degatAffiche+"</font></td><td><font color='#0066ff'><b>"+mp+" Mana</b></font></td></tr>";
                    contenu += "<tr bgcolor='#333333'><td colspan='2' height='8'></td></tr>";
                    contenu += "<tr bgcolor='#555555'><td colspan='3' height='3'></td></tr>";            
                    contenu += "<tr><td colspan='3' height='2' bgcolor='#222222'></td></tr>";
                }
                j++;

            }
            contenu += "</tr></table>";
            $("#listeSort").html(contenu);
            $("#listeSort").show();
        });
    }
    
        
    function selectSort(id, degat, mp, idSort, nbAnim, sound) {
        window.localStorage.setItem("mpSort", mp);
        window.localStorage.setItem("idSort", idSort);
        window.localStorage.setItem("degat", degat);
        window.localStorage.setItem("anim", id);
        window.localStorage.setItem("nbAnim", nbAnim);
        window.localStorage.setItem("sound", sound);
        $("#listeSort").hide();
        $("#waiter").show();
        var my_sound = null;
        playSon("Magic4.ogg");
        $("#animPerso").show();
        timer = window.setInterval("timeSort()", 50);
    }
    
    
    frame = 1;
    function lancerSort() {
        window.localStorage.setItem("actionJoueur","sort");
        $("#animEnnemi").show();
        $("#animPerso").html("");
        $("#animPerso").show();
        
        timerAnime = window.setInterval("animSort()", 60);
        var my_sound = null;
        sound = window.localStorage.getItem("sound");
        playSon(sound);
    }
    
    /////////////////////////
    // Animation des sorts //
    /////////////////////////
    // nombre de frame par animation
    var frame = 1;
    function animSort() {
            anim = window.localStorage.getItem("anim");
            nbAnim = window.localStorage.getItem("nbAnim");
            $("#animEnnemi").html("<img src='img/anim/sprites/"+anim+"/"+frame+".png'>");
            if(frame==nbAnim) {
                clearAnime(frame);
                frame = 0;
            }
            frame++;
            
    }
    
    function clearAnime(frame) {
        $("#animEnnemi").hide();
        $("#animPerso").hide();
        $("#waiter").hide();
        $("#animEnnemi").html("");
        $("#animPerso").html("");
        afficheGrimoire();
        getInventaire();
        
        typeAction = window.localStorage.getItem("actionJoueur");
        if(typeAction == "sort"){
            // Dégats Monstre
            hpMonstre = window.localStorage.getItem("hpMonstre");
            degat = window.localStorage.getItem("degat");
            hpMonstre = hpMonstre-degat;
            window.localStorage.setItem("hpMonstre", hpMonstre);
            hpMaxMonstre = window.localStorage.getItem("hpMaxMonstre");
            widthHP = hpMonstre*70/hpMaxMonstre;
            $("#infoEnnemi").html("<div id='barreHPMonster' style='text-align:center'><img src='img/barre/hpLeftMonster.png'><img src='img/barre/hpCenterMonster.png' width='"+widthHP+"' height='10'><img src='img/barre/hpRightMonster.png'></div>");
            // MP joueur
            hpJoueur = window.localStorage.getItem("hpJoueur");
            hpMaxJoueur = window.localStorage.getItem("hpMaxJoueur");
            mpJoueur = window.localStorage.getItem("mpJoueur");

            mpSort = window.localStorage.getItem("mpSort");

            mpJoueur = mpJoueur - mpSort;
            window.localStorage.setItem("mpJoueur", mpJoueur);
            mpMaxJoueur = window.localStorage.getItem("mpMaxJoueur");
            widthHPJoueur = hpJoueur*100/hpMaxJoueur;
            widthMPJoueur = mpJoueur*100/mpMaxJoueur;

            $("#infoPlayer").html("<table style='top: 12px; left:10px; z-index:100; position:absolute' align='center'><tr><td height='32'><font color='#FFFFFF'><b>Vie :</font></td><td background='img/barre/fond.png' width='104' align='center'><font color='#FFFFFF' size='3'> "+hpJoueur+" / "+hpMaxJoueur+"</font></td>\
                <td width='40'></td><td height='32'><font color='#FFFFFF'>Mana :</font></td><td background='img/barre/fond.png' width='104' align='center'><font color='#FFFFFF' size='3'> "+mpJoueur+" / "+mpMaxJoueur+"</b></font></td></tr></table>\
                <div id='barreHP' style='position:absolute; top:14px; left:51px; z-index:48;'><img src='img/barre/hpLeft.png'><img src='img/barre/hpCenter.png' width='"+widthHPJoueur+"' height='32'><img src='img/barre/hpRight.png'></div>\
                <div id='barreMP' style='position:absolute; top:14px; left:253px; z-index:49;'><img src='img/barre/mpLeft.png'><img src='img/barre/mpCenter.png' width='"+widthMPJoueur+"' height='32'><img src='img/barre/mpRight.png'></div>\
                ");

            idSort = window.localStorage.getItem("idSort");
            pseudo = window.localStorage.getItem("pseudo");
            $.post(url+"apk/combat/lancerSort.php", {pseudo: pseudo, mp: mpJoueur, hp: hpJoueur, idSort: idSort}, function(data) {

            });

            if(hpMonstre <=0) {
                $("#barreHPMonster").hide();
                window.localStorage.setItem("vieMonstre", 0)
                
                my_media.pause();
                var my_sound = null;
                playSon("Victory1.ogg");
                timeMortMonstre = window.setInterval("animMortMonstre()", 60);
            }

            window.clearInterval(timerAnime);
        } else if(typeAction == "soin") {
            hpJoueur = window.localStorage.getItem("hpJoueur")/2*2;
            hpMaxJoueur = window.localStorage.getItem("hpMaxJoueur")/2*2;
            mpJoueur = window.localStorage.getItem("mpJoueur")/2*2;
            mpMaxJoueur = window.localStorage.getItem("mpMaxJoueur")/2*2;
            
            gainHP = window.localStorage.getItem("gainHP")/2*2;
            gainMP = window.localStorage.getItem("gainMP")/2*2;
            
            hpJoueur = hpJoueur + gainHP;
            
            if(hpJoueur > hpMaxJoueur) {
                hpJoueur = hpMaxJoueur;
            }
            window.localStorage.setItem("hpJoueur", hpJoueur);
            
            mpJoueur = mpJoueur + gainMP;
            if(mpJoueur > mpMaxJoueur) {
                mpJoueur = mpMaxJoueur;
            }
            window.localStorage.setItem("mpJoueur", mpJoueur);
            
            widthHPJoueur = hpJoueur*100/hpMaxJoueur;
            widthMPJoueur = mpJoueur*100/mpMaxJoueur;
            $("#infoPlayer").html("<table style='top: 12px; left:10px; z-index:100; position:absolute' align='center'><tr><td height='32'><font color='#FFFFFF'><b>Vie :</font></td><td background='img/barre/fond.png' width='104' align='center'><font color='#FFFFFF' size='3'> "+hpJoueur+" / "+hpMaxJoueur+"</font></td>\
                <td width='40'></td><td height='32'><font color='#FFFFFF'>Mana :</font></td><td background='img/barre/fond.png' width='104' align='center'><font color='#FFFFFF' size='3'> "+mpJoueur+" / "+mpMaxJoueur+"</b></font></td></tr></table>\
                <div id='barreHP' style='position:absolute; top:14px; left:51px; z-index:48;'><img src='img/barre/hpLeft.png'><img src='img/barre/hpCenter.png' width='"+widthHPJoueur+"' height='32'><img src='img/barre/hpRight.png'></div>\
                <div id='barreMP' style='position:absolute; top:14px; left:253px; z-index:49;'><img src='img/barre/mpLeft.png'><img src='img/barre/mpCenter.png' width='"+widthMPJoueur+"' height='32'><img src='img/barre/mpRight.png'></div>\
                ");
                            
            pseudo = window.localStorage.getItem("pseudo");
            idObjet = window.localStorage.getItem("idObjet");
            $.post(url+"apk/combat/majHPMP.php", {pseudo:pseudo, newHP:hpJoueur, newMP:mpJoueur, idObjet:idObjet}, function(data){
            
            });
            window.clearInterval(timerAnimeSoin);
        }
    }
    
    // Animation mort d'un monstre
    l = 1;
    function animMortMonstre() {
        $("#animMortEnnemi").show();
        $("#animMortEnnemi").html("<img src='img/anim/sprites/mort/"+l+".png'>");
        if(l == 3) {
            window.clearInterval(timeMouvementMonstre);
            $("#imgEnnemi").css("src", "");
        }
        if(l == 15) {
            clearAnimMortMonstre();
        }
        l++
    }
    
    function clearAnimMortMonstre() {
        $("#animMortEnnemi").html("");
        $("#animMortEnnemi").hide();
        gold = window.localStorage.getItem("gold");
        idMonstre = window.localStorage.getItem("idMonstre");
        window.clearInterval(timeMortMonstre);
        $.post(url+"apk/combat/win.php", {pseudo: pseudo, exp: xpGain, objet: objet, gold: gold, idMonstre:idMonstre}, function(data) {
            if(data.error==0) {
                $("#underMenu").hide();
                $("#underMenu2").hide();
                $("#underMenu3").hide();
                $("#infoPlayer").hide();
                $("#blocInventaire").hide();
                $("#action").hide();
                $("#win").show();
                timeXP = window.setInterval("animXp()", 5);
            }
        })
    }
    ////////////////////////////////////////
    // Animation de la barre d'experiance //
    // lors d'une victoire de combat      //
    ////////////////////////////////////////
    function animXp() {
        
        xpGain = window.localStorage.getItem("xpGain");
        xp = window.localStorage.getItem("xpJoueur");
        xp++;
        xpmax = window.localStorage.getItem("xpMaxJoueur");
        if(xp >= xpmax) {
            xp = 0;
            var my_sound = null;
            playSon("Skill3.ogg")
        }
        window.localStorage.setItem("xpJoueur", xp);
        widthXP = ((xp*100/xpmax)*240/100);
        $("#widthXPBarre").attr("width", widthXP);
        
        if(xpGain == 0) {
            clearAnimXp();
        }
        xpGain--;
        window.localStorage.setItem("xpGain", xpGain);
    }
    
    function clearAnimXp() {
        window.clearInterval(timeXP);
    }
    
    ////////////////////////////////////////
    // Timer pour le chargement des sorts //
    ////////////////////////////////////////
    var j = 0;
    var k = 1;
    function timeSort() {

        if(k == 10) {
            k = 1;
        }
        $("#animPerso").html("<img src='img/anim/sprites/charge/"+k+".png'>");
        $("#progWaiter").show();
        widthBarre = (j*480)/130;
        $("#progWaiter").attr("width", widthBarre);
        if(j==100) {
            clearIntervalTimerSort(j);
            j=0;
        }
        j++;
        k++;
    }

    function clearIntervalTimerSort(j) {
        $("#progWaiter").hide();
        window.clearInterval(timer);
        lancerSort();
        j = 0;    
    }
    ////////////////////////////
    // Attaque au Corp à corp //
    ////////////////////////////
    function attaqueCac() {
        timeAttaqueCac = window.setInterval("animAttaqueCac()", 40);
    }
    
    f=1;
    function animAttaqueCac() {
        $("#animEnnemi").show();
        $("#animEnnemi").html("<img src='img/anim/sprites/attaque1/"+f+".png'>");
        if(f == 7) {
            clearCac();
            f=1;
        }
        f++;
    }
    function clearCac() {
        window.clearInterval(timeAttaqueCac);
        $("#animEnnemi").html("");
        $("#animEnnemi").hide();
    }
    ////////////////////////////////////////
    // Chance d'obtenir un objet en tuant //
    // un monstre                         //
    ////////////////////////////////////////
    function randomObjet(objet) {
        chance = Math.floor((Math.random()*100)+1);
        if(chance < 70) {
            $("#objetMonstre").load(url+"apk/combat/objet.php?o="+objet);
            window.localStorage.setItem("objetWin", objet);
        }
    }
    /////////////////////////////////////////////////
    // Quantité d'or Aléatoire lors d'une victoire //
    /////////////////////////////////////////////////
    function randomGold(gold) {
        gold = Math.floor((Math.random()*gold)+15);
        window.localStorage.setItem("gold",gold);
        $("#goldMonstre").load(url+"apk/combat/gold.php?o="+gold);
        window.localStorage.setItem("goldWin", gold);
    }
    ////////////////////////////////
    // Revenir sur l'ecran de jeu //
    ////////////////////////////////
    function goBack() {
        window.location.replace("index.html");
    }
    function abandonner() {
        pseudo = window.localStorage.getItem("pseudo");
        if(confirm("Voulez-vous vraiment abandonner le combat ?")) {
            $.post(url+"apk/combat/abandonner.php", {pseudo:pseudo}, function(data) {
                if(data.error==0) {
                    window.location.replace("index.html");
                }
            });
        }
    }
    
    function getInventaire() {
        contenu2 = "<table width='96%' cellspacing='0' cellpadding='0' align='center' bgcolor='#333333'><tr>";
        $.post(url+"apk/combat/inventaire.php", {pseudo: user}, function(data) {
            j=0;
            for(i=0;i<data.totObjets;i++) {
//                if(j==2) {
//                    contenu2 += "</tr><tr>";
//                    j=0;
//                }
                id = eval("data.id_"+i);
                icon = eval("data.icon_"+i);
                nom = eval("data.nom_"+i);
                mp = eval("data.mp_"+i)/2*2;
                hp = eval("data.hp_"+i)/2*2;
                soin = eval("data.soin_"+i);
                description = eval("data.description_"+i);

                contenu2 += "<tr bgcolor='#333333'><td colspan='3' height='8'></td></tr>";
                contenu2 += "<tr onclick='utiliseObjet("+id+","+hp+","+mp+")' id='objet_"+i+"' bgcolor='#333333'><td style='background-image: url(img/fondSort.png); background-repeat: no-repeat; width:55px; height:55px;' align='center'><img src='img/icons/"+icon+".png' style=' -webkit-filter: grayscale(100%); filter: gray;' align='absmiddle'></td><td><b><font color='#FFFFFF' size='3'> "+nom+"</font></b></td><td width='180' align='right'>"+soin+"</td></tr>";
//                contenu2 += "<tr id='objet_"+i+"' bgcolor='#333333'><td align='center'><font color='#666666' size='2'>"+description+"</font></td></tr>";
                contenu2 += "<tr bgcolor='#333333'><td colspan='3' height='8'></td></tr>";
                contenu2 += "<tr bgcolor='#555555'><td colspan='3' height='3'></td></tr>";            
                contenu2 += "<tr><td colspan='3' height='3' bgcolor='#222222'></td></tr>";
              
//                j++;

            }
            contenu2 += "</tr></table>";
            $("#listeInventaire").html(contenu2);
        });
    }
    
    function afficheInventaire() {
        $("#action").hide();
        $("#blocInventaire").show();
    }
    function afficheSort() {
        $("#blocInventaire").hide();
        $("#action").show();
    }
    
    function utiliseObjet(id,hp,mp) {
        window.localStorage.setItem("gainMP", mp);
        window.localStorage.setItem("gainHP", hp);
        window.localStorage.setItem("idObjet", id);
        
        window.localStorage.setItem("actionJoueur","soin");
        $("#animPerso").show();
        timerAnimeSoin = window.setInterval("animSoin()", 60);
    }
    
    frameSoin = 1;
    function animSoin() {
            $("#animPerso").html("<img src='img/anim/sprites/soin/"+frameSoin+".png' style='position:absolute; top:-164px; left:53px; z-index:600'>");
            if(frameSoin==23) {
                clearAnime(frameSoin);
                frameSoin = 0;
            }
            frameSoin++;
            
    }
//
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
function playSon(url) {
    // Play the audio file at url
        my_sound = new Media("/android_asset/www/sounds/"+url,
        // success callback
        function() {
            console.log("playAudio():Audio Success");
        },
        // error callback
        function(err) {
            console.log("playAudio():Audio Error: "+err);
    });

    // Play audio
    my_sound.play();
}
</script>
console.log('--------------');
console.log('-- DataBase --');
console.log('--------------');
var db = window.sqlitePlugin.openDatabase({name: "magicalwind"});



function loadBDD() {
    db.transaction(function(tx) {

tx.executeSql('CREATE TABLE IF NOT EXISTS accessoires (  idAccessoires INTEGER,  nom text ,  icon text ,  hp INTEGER,  mp INTEGER, faim text DEFAULT 0,  degat INTEGER,  achat INTEGER,  vente INTEGER,  utiliser text DEFAULT non,  equiper text DEFAULT oui,  description text,  type text ,  type_objet text DEFAULT accessoires,  type_equipement text ,) ');

//     tx.executeSql("SELECT * accessoires", [], function(tx, res) {
//        console.log('-----------------------------------'); 
//        console.log("--  Nombre d'enregistrements  : " + res.rows.length);
//        console.log('-----------------------------------');
//    });
   });
    window.clearInterval(timeAnimAccueil);
    $("#animAccueil").hide();
    $("#loaderBDD").show();
    console.log('##########################');
    console.log("## Chargement de la base de donnée ##");
    $.get(url+'apk/db/magicalwind.sql', function(response) {
        console.log('##########################');
        console.log("##   Base de donnée récupérée !   ##");
        console.log('##########################');



        
        processQuery(db, 2, response.split(';\n'), 'magicalwind'); 

    });
}

function processQuery(db, i, queries, dbname) {
    if(i < queries.length -1) {
        window.localStorage.setItem("queryNow", i);
        window.localStorage.setItem("queryTot", queries.lenght);
            pourcentage = Math.round((i*100)/307)+1;
            $("#pourcentBDDLoader").html("<b><font color='#000000' size='3'>"+pourcentage+"%</b></font>");
            $("#barreLoaderBDD").attr("width", i);
      console.log(i +' of '+queries.length);
      if(!queries[i+1].match(/(INSERT|CREATE|DROP|PRAGMA|BEGIN|COMMIT)/)) {
        queries[i+1] = queries[i]+ ';\n' + queries[i+1];
         return processQuery(db, i+1, queries, dbname);
      }
      console.log('--------------');
      console.log('-->', queries[i]);
      console.log('--------------');
      db.transaction( function (query){ 
        query.executeSql(queries[i]+';', [], function(tx, result) {
          processQuery(db, i +1, queries,dbname);  
        });          
      }, function(err) { 
      console.log('----------------------------'); 
      console.log("Query error in ", queries[i], err.message);
      console.log('----------------------------'); 
      processQuery(db, i +1, queries, dbname);   
      });
  } else {
       if(i == queries.length -1) {
        $("#loaderBDD").hide();
        console.log('############################'); 
        console.log("##     Done importing!    ##");
        console.log('############################'); 

        pseudo = window.localStorage.getItem("pseudo")
        majInfoPlayer(pseudo);

        $("#loader").hide(0);
        $("#menu1").show(0);
        $("#underMenu").show(0);
       }
  }
}


   

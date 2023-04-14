<?php
//permet de se connecter
$pdo= require './modele/connect.php';

$sql = 'SELECT * FROM nav';
$statement = $pdo -> query ($sql);

$data_nav = $statement -> fetchAll (PDO::FETCH_ASSOC);
//print_r($data);
//exit;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@500&family=Inter:wght@300&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="vue/style.css" />
   <title>Mon portfolio</title>
 
</head>

<body>


    <?php
        $pdo= require './modele/connect.php';

        $sql = 'SELECT * FROM page2';
        $statement = $pdo -> query ($sql);

        $data_page2 = $statement -> fetch (PDO::FETCH_ASSOC);
    ?>

    <div id="page1" class="page1">
        <div class='titreclem'> <img src="<?=$data_page2['image_ac']?>" alt=""></div>
        <div id="id0"> </div>

        <div class="pg1">
            <?php
                foreach ($data_nav as $item){
                $txt='<section class="apropos"><a href='.$item['link'].'>';
                $txt.='<h6>'.$item['text'].'</h6></a>';
                $txt.='<img class="choix" src='.$item['image'].' alt="" /></section>';
                if ($item['show']==1){
                echo $txt;
                    }
                }
            ?>
            
                </div>
    </div>

    <div class="site">
        <br> <a href="#page1"><h5 class="right"><img src="vue/image/maison.png" alt="" class="maison" /></h5></a>

        <?php
           if ($data_nav[0]['show']==1){
        ?>

        <div class="page2">
            <div class="bloctext"><h2 id="page2"><?=$data_page2['titre1']?></h2>
                <div class="#">
                    <p><?=$data_page2['texte1']?></p>
                </div>
            </div>
        </div>
        
        <?php
        $pdo= require './modele/connect.php';

        $sql = 'SELECT * FROM page3';
        $statement = $pdo -> query ($sql);

        $data_page3 = $statement -> fetch (PDO::FETCH_ASSOC);
        ?>

        <h2><?=$data_page3['titre3']?></h2>
        <div class="page3">
            
            <div>
                <div><h3><?=$data_page3['sous-titre1']?> <img class="boulot" src="<?='vue/image/'.$data_page3['img_st1']?>" alt="" /></h3></div>
                <div><p><?=$data_page3['texte3_1']?></p</div>
            </div> 
            <div>
                <div><h3> <?=$data_page3['sous-titre2']?> <img class="boulot" src="<?='vue/image/'.$data_page3['img_st2']?>" alt="" /></h3></div>
                <div><p><?=$data_page3['texte3_2']?></p></div>
            </div>
        </div>

        <?php
           };
        ?>
        
        <?php
           if ($data_nav[0]['show']==1){
        ?>
        <br><br><h2 id="page4"><?=$data_page3['titre4']?> </h2><br><br><br><br>
        
        <div class="compet">
            <?php
                $pdo= require './modele/connect.php';

                $sql = 'SELECT * FROM page4';
                $statement = $pdo -> query ($sql);

                $data_page4 = $statement -> fetchAll (PDO::FETCH_ASSOC);
                //print_r($data_page4);
                //exit;
                //affichage du tableau pour comprendre l'erreur
            ?>
            
                <?php
                    foreach ($data_page4 as $item){
                    $txt='<div class="logi"><img class="SOFT" src='.$item['img_site'].' /><img class="etoiles" src='.$item['etoile'].'></div>';
                    if ($item['show']==1){
                        echo $txt;
                        }
                    }
                ?>
           
         
        </div>
        <?php
           };
        ?>

        
        <br><br>
        <?php
           if ($data_nav[0]['show']==1){
        ?>

        <h2 id="page5"> <?=$data_page3['titre5']?> </h2>
        <?php
            $pdo= require './modele/connect.php';
            $sql = 'SELECT * FROM page5';
            $statement = $pdo -> query ($sql);

            $data_page5 = $statement -> fetchAll (PDO::FETCH_ASSOC);
        ?>
        <div class="page5">
            <div class="blocproj">
                <?php
                    foreach ($data_page5 as $item){
                        $txt='<div class="proj"><div class="nom"><a href='.$item['lien'].'>'.$item['nom_projet'].'</a></div></div>';
                        echo $txt;
                        }
                ?>
            </div>    
        </div>

        <?php
           };
        ?>

        <?php
           if ($data_nav[0]['show']==1){
        ?>

        
        <div class="wrapper">
            <form class="form">
                <div id="page6" class="pageTitle title">Pour me contacter :</div>
                <input type="text" class="name formEntry" placeholder="Nom" />
                <input type="text" class="email formEntry" placeholder="Email"/>
                <textarea class="message formEntry" placeholder="Message"></textarea>
                <br>
                <button class="submit formEntry" >Envoyé</button>
            </form>
        </div>

        <?php
           };
        ?>

        <footer>
             <div class="footer">
                <br><br>Portfolio - 2023 || Clémentine Renault<br><br>07 96 85 18 11 - clementine.renault@free.fr<br><br>
                <a href="https://www.instagram.com/clementine.rnlt/"><img src="vue/image/insta.png" alt="" height="50vh"></a>
                <a href="https://www.linkedin.com/in/cl%C3%A9mentine-renault-2a7634268/"><img src="vue/image/link.png" alt="" height="50vh"></a>
            </div>
        </footer>
    </div>
</body>
</html>
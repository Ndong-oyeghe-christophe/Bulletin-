
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style2.css">
    <title>Document</title>
</head>
<body>

<?php

$maths = $_POST['maths'];
$franc = $_POST['franc'];
$EPS = $_POST['EPS'];
$Histoire = $_POST['Hist_geo'];
$espagnol = $_POST['espagnol'];
$Anglais = $_POST['anglais'];
$philo = $_POST['philo'];
$svt = $_POST['svt'];
$phys = $_POST['phys'];
$Bureau = $_POST['Bureautique'];

$coef_maths = 4;
$coef_franc = 3;
$coef_eps = 2;
$coef_hist = 2;
$coef_espagnol = 2;
$coef_anglais = 2;
$coef_philo= 2;
$coef_svt = 4;
$coef_phys = 4;
$coef_bureau = 2;

$somme_coef= 27;

$moyenne = ( $maths*$coef_maths + $franc*$coef_franc + $EPS*$coef_eps +$Histoire*$coef_hist
+ $espagnol*$coef_espagnol + $Anglais*$coef_anglais + $philo*$coef_philo + $svt*$coef_svt
+ $phys*$coef_phys + $Bureau*$coef_bureau)/$somme_coef;

$moyenne_des_sommes = ( $maths*$coef_maths + $franc*$coef_franc + $EPS*$coef_eps +$Histoire*$coef_hist
+ $espagnol*$coef_espagnol + $Anglais*$coef_anglais + $philo*$coef_philo + $svt*$coef_svt
+ $phys*$coef_phys + $Bureau*$coef_bureau)

?>

    <table class="ptn">
        <tr>
            <td >Matière</td>
            <td>Note</td>
            <td>Appréciations</td>
            <td>Coef</td>
            <td>Note x Coef</td>
        </tr>

        <tr class="ope">
            <td> <?php 
            echo "Mathématiques";
            ?>
            </td>

            <td> <?php 
            echo $maths."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($maths==0){
                $app="Non classé";
                echo $app;

            }elseif($maths<=1 or $maths<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($maths<=6 or $maths<=8.99){
                $app="faible";
                echo $app;
            }elseif($maths<=9 or $maths<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($maths<=10 or $maths<=11.99){
                $app="Passable";
                echo $app;
            }elseif($maths<=12 or $maths<=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($maths<=13 or $maths<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($maths<=14 or $maths<=15.99){
                $app="Bien";
                echo $app;
            }elseif($maths<=16 or $maths<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($maths==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_maths;
            ?>
            </td>

            <td> <?php 
            echo  $coef_maths*$maths;
            ?>
            </td>
        </tr>

        <tr >
            <td> <?php 
            echo "Français";
            ?>
            </td>

            <td> <?php 
            echo $franc."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($franc==0){
                $app="Non classé";
                echo $app;

            }elseif($franc<=1 or $franc<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($franc<=6 or $franc<=8.99){
                $app="faible";
                echo $app;
            }elseif($franc<=9 or $franc<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($franc<=10 or $franc<=11.99){
                $app="Passable";
                echo $app;
            }elseif($franc<=12 or $franc<=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($franc<=13 or $franc<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($franc<=14 or $franc<=15.99){
                $app="Bien";
                echo $app;
            }elseif($franc<=16 or $franc<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($franc==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_franc;
            ?>
            </td>

            <td> <?php 
            echo  $coef_franc*$franc;
            ?>
            </td>
        </tr>

        <tr class="ope">
            <td> <?php 
            echo "EPS";
            ?>
            </td>

            <td> <?php 
            echo $EPS."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($EPS==0){
                $app="Non classé";
                echo $app;

            }elseif($EPS<=1 or $EPS<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($EPS<=6 or $EPS<=8.99){
                $app="faible";
                echo $app;
            }elseif($EPS<=9 or $EPS<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($EPS<=10 or $EPS<=11.99){
                $app="Passable";
                echo $app;
            }elseif($EPS<=12 or $EPS<=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($EPS<=13 or $EPS<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($EPS<=14 or $EPS<=15.99){
                $app="Bien";
                echo $app;
            }elseif($EPS<=16 or $EPS<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($EPS==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_eps;
            ?>
            </td>

            <td> <?php 
            echo  $coef_eps*$EPS;
            ?>
            </td>
        </tr>

        <tr class="ope">
            <td> <?php 
            echo "Histoire_géo";
            ?>
            </td>

            <td> <?php 
            echo $Histoire."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($Histoire==0){
                $app="Non classé";
                echo $app;

            }elseif($Histoire<=1 or $Histoire<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($Histoire<=6 or $Histoire<=8.99){
                $app="faible";
                echo $app;
            }elseif($Histoire<=9 or $Histoire<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($Histoire<=10 or $Histoire<=11.99){
                $app="Passable";
                echo $app;
            }elseif($Histoire<=12 or $Histoire<=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($Histoire<=13 or$Histoire<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($Histoire<=14 or $Histoire<=15.99){
                $app="Bien";
                echo $app;
            }elseif($Histoire<=16 or $Histoire<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($Histoire==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_hist;
            ?>
            </td>

            <td> <?php 
            echo  $coef_hist*$Histoire;
            ?>
            </td>
        </tr>

        
        <tr class="ope">
            <td> <?php 
            echo "Espagnol";
            ?>
            </td>

            <td> <?php 
            echo $espagnol."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($espagnol==0){
                $app="Non classé";
                echo $app;

            }elseif($espagnol<=1 or $espagnol<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($espagnol<=6 or $espagnol<=8.99){
                $app="faible";
                echo $app;
            }elseif($espagnol<=9 or $espagnol<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($espagnol<=10 or $espagnol<=11.99){
                $app="Passable";
                echo $app;
            }elseif($espagnol<=12 or $espagnol=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($espagnol<=13 or $espagnol<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($espagnol<=14 or $espagnol<=15.99){
                $app="Bien";
                echo $app;
            }elseif($espagnol<=16 or $espagnol<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($espagnole==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_espagnol;
            ?>
            </td>

            <td> <?php 
            echo  $coef_espagnol*$espagnol;
            ?>
            </td>
        </tr>

        <tr class="ope">
            <td> <?php 
            echo "Anglais";
            ?>
            </td>

            <td> <?php 
            echo $Anglais."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($Anglais==0){
                $app="Non classé";
                echo $app;

            }elseif($Anglais<=1 or $Anglais<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($Anglais<=6 or $Anglais<=8.99){
                $app="faible";
                echo $app;
            }elseif($Anglais<=9 or $Anglais<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($Anglais<=10 or $Anglais<=11.99){
                $app="Passable";
                echo $app;
            }elseif($Anglais<=12 or $Anglais=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($Anglais<=13 or $Anglais<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($Anglais<=14 or $Anglais<=15.99){
                $app="Bien";
                echo $app;
            }elseif($Anglais<=16 or $Anglais<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($Anglais==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_anglais;
            ?>
            </td>

            <td> <?php 
            echo  $coef_anglais*$Anglais;
            ?>
            </td>
        </tr>

        <tr class="ope">
            <td> <?php 
            echo "Philosophie";
            ?>
            </td>

            <td> <?php 
            echo $philo."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($philo==0){
                $app="Non classé";
                echo $app;

            }elseif($philo<=1 or $philo<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($philo<=6 or$philo<=8.99){
                $app="faible";
                echo $app;
            }elseif($philo<=9 or $philo<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($philo<=10 or $philo<=11.99){
                $app="Passable";
                echo $app;
            }elseif($philo<=12 or $philo=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($philo<=13 or $philo<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($philo<=14 or $philo<=15.99){
                $app="Bien";
                echo $app;
            }elseif($philo<=16 or $philo<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($philo==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_philo;
            ?>
            </td>

            <td> <?php 
            echo  $coef_philo*$philo;
            ?>
            </td>
        </tr>
        
        <tr class="ope">
            <td> <?php 
            echo "SVT";
            ?>
            </td>

            <td> <?php 
            echo $svt."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($svt==0){
                $app="Non classé";
                echo $app;

            }elseif($svt<=1 or $svt<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($svt<=6 or $svt<=8.99){
                $app="faible";
                echo $app;
            }elseif($svt<=9 or $svt<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($svt<=10 or $svt<=11.99){
                $app="Passable";
                echo $app;
            }elseif($svt<=12 or $svt=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($svt<=13 or $svt<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($svt<=14 or $svt<=15.99){
                $app="Bien";
                echo $app;
            }elseif($svt<=16 or $svt<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($svt==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_svt;
            ?>
            </td>

            <td> <?php 
            echo  $coef_svt*$svt;
            ?>
            </td>
        </tr>
        

        <tr class="ope">
            <td> <?php 
            echo "Physique chimie";
            ?>
            </td>

            <td> <?php 
            echo $phys."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($phys==0){
                $app="Non classé";
                echo $app;

            }elseif($phys<=1 or $phys<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($phys<=6 or $phys<=8.99){
                $app="faible";
                echo $app;
            }elseif($phys<=9 or $phys<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($phys<=10 or $phys<=11.99){
                $app="Passable";
                echo $app;
            }elseif($phys<=12 or $phys=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($phys<=13 or $phys<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($phys<=14 or $phys<=15.99){
                $app="Bien";
                echo $app;
            }elseif($phys<=16 or$phys<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($phys==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_phys;
            ?>
            </td>

            <td> <?php 
            echo  $coef_phys*$phys;
            ?>
            </td>
        </tr>
        
        <tr class="ope">
            <td> <?php 
            echo "Bureautique";
            ?>
            </td>

            <td> <?php 
            echo $Bureau."   ";
            ?>
            </td>

            <td> <?php
            $app =""; 
            if($Bureau==0){
                $app="Non classé";
                echo $app;

            }elseif($Bureau<=1 or $Bureau<=5.99){
                $app="Médiocre";
                echo $app;
            }elseif($Bureau<=6 or $Bureau<=8.99){
                $app="faible";
                echo $app;
            }elseif($Bureau<=9 or $Bureau<=9.99){
                $app="Insuffisant";
                echo $app;
            }elseif($Bureau<=10 or $Bureau<=11.99){
                $app="Passable";
                echo $app;
            }elseif($Bureau<=12 or $Bureau=12.99){
                $app="Assez bien";
                echo $app;
            }elseif($Bureau<=13 or $Bureau<=13.99){
                $app="Assez bien";
                echo $app;
            }elseif($Bureau<=14 or $Bureau<=15.99){
                $app="Bien";
                echo $app;
            }elseif($Bureau<=16 or $Bureau<=19.99){
                $app="Très bien";
                echo $app;
            }elseif($Bureau==20){
                $app="Excellent";
                echo $app;
            }
            ?>
            </td>

            <td> <?php 
            echo  $coef_bureau;
            ?>
            </td>

            <td> <?php 
            echo  $coef_bureau*$Bureau;
            ?>
            </td>
        </tr>


        <tr class="ope">
            <td> <?php 
            echo "Total";
            ?>
            </td>

            <td> <?php 
            echo "   ";
            ?>
            </td>

            <td> <?php
            echo " "
            ?>
 
            </td>

            <td> <?php 
            echo  $somme_coef;
            ?>
            </td>

            <td> <?php 
            echo  $moyenne_des_sommes;
            ?>
            </td>
        </tr>
    </table><br>
    <p>
    <?php
        echo "Moyenne générale ".$moyenne." /20";
    ?>
 </p>
   <?php
  

   if($moyenne<=9.99){
    $decision = "Redouble la classe";
   }
   elseif($moyenne >=10 and $moyenne <=20){
    $decision = "Admis(e) en classe supérieure";
   }
        echo "Décision du conseil de classe : ".$decision;
    ?>

</body>
</html>
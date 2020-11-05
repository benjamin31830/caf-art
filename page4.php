<!DOCTYPE html>
<html>
	<head>
	    <metacharset="utf-8">
	    <title>Quizz</title>
	    <link rel="stylesheet" href="Deco.css">
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<?php include("menu.php");?>
    
 	<h1 align=center>Quizz "A toute vitesse"</h1>
	</head>
<body>
	
<script type="text/javascript">

var q1= 0;
var q2= 0;
var q3= 0;


//calcul du score
function calcul() {score=q1+q2+q3;}

//commentaire du résultat
function resultat() {calcul();
                    if (score<1) {alert("NON!!!Ton score est de "+score+" sur 3. ");}
                        else {alert("Ton score est de "+score+" sur 3.");}
                    }

 </script>

<div align="center"><br><big style="font-style: italic;"><font style="font-family: Arial; font-weight: bold; color: rgb(102, 51, 102);">Usain Bolt</font></big></div>
</div>

<form><p>
<!--Mise en forme de tout le texte sauf Question X-->
<font face="Verdana, Arial, Helvetica, sans-serif" size="2">

<hr align="center" noshade="noshade"> <p><font style="color: rgb(102, 51, 102);" face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Question 1 : Le record d'Usain bolt sur 100M est-il de 9'58 ?</b></font>

<input type="radio" name="choix1" onclick='q1=1'>Oui<br>
<input type="radio" name="choix1" onclick='q1=0'>Non<br>

<p>
<hr align="center" noshade="noshade"> <p><font style="color: rgb(102, 51, 102);" face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Question 2 : Le surnom d'Usain Bolt est-il la foudre ?</b></font>

<input type="radio" name="choix2" onclick='q2=1'>Oui<br>
<input type="radio" name="choix2" onclick='q2=0'>Non<br>


<hr align="center" noshade="noshade"> <p><font style="color: rgb(102, 51, 102);" face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Usain Bolt est-il sénégalais ?</b></font>

<input type="radio" name="choix3" onclick='q3=0'>Oui<br>
<input type="radio" name="choix3" onclick='q3=1'>Non<br>

<p align="center">
<input name="Submit" value="Alors, connaissez-vous bien Usain Bolt ?" onclick="resultat()" type="button"></p>
</form>

</body></html>
</body>
</html>
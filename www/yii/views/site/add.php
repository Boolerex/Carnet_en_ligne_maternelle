<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Fiche d'installation</h1>

<?php $form = ActiveForm::begin(['options' => ['id' => 'Addpost', 'enctype' => 'multipart/form-data']]) ?>

<html>

<h3>Sujet du stage </h3>
(exposé du sujet ou de la mission) 
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/></p>
</form>

</br>
<h3>Installation </h3>
Dsiposez-vous:</br>
 </br>- d’un bureau ?</br>
<form method="post" action="traitement.php size='150'">
<select name="pseudo">
<option value="oui"> </option>
<option value="oui"> oui</option>
<option value="non"> non </option>
</select>
</form>
(précisez si « box », personnel, partagé, etc. : ........) 
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/></p>
</form>

</br>- d’un ordinateur ?
<form method="post" action="traitement.php size='150'">
<select name="pseudo">
<option value="oui"> </option>
<option value="oui"> oui</option>
<option value="non"> non </option>
</select>
</form>
  
(portable ?)
<form method="post" action="traitement.php size='150'">
<select name="pseudo">
<option value="oui"> </option>
<option value="oui"> oui</option>
<option value="non"> non </option>
</select>
</form>

</br>- d’un scanner ?
<form method="post" action="traitement.php size='150'">
<select name="pseudo">
<option value="oui"> </option>
<option value="oui"> oui</option>
<option value="non"> non </option>
</select>
</form>

</br>d’une imprimante ? 
<form method="post" action="traitement.php size='150'">
<select name="pseudo">
<option value="oui"> </option>
<option value="oui"> oui</option>
<option value="non"> non </option>
</select>
</form>
</br>- d’un téléphone ?
<form method="post" action="traitement.php size='150'">
<select name="pseudo">
<option value="oui"> </option>
<option value="oui"> oui</option>
<option value="non"> non </option>
</select>
</form>

</br>- d’une connexion internet ?
<form method="post" action="traitement.php size='150'">
<select name="pseudo">
<option value="oui"> </option>
<option value="oui"> oui</option>
<option value="non"> non </option>
</select>
</form>

</br>Où travaillez vous (bureau, bureau d’études, atelier, laboratoire, chantier…) ?
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/> </p>
</form>

</br>Commentaire éventuel sur les conditions de travail : 
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/> </p>
</form>


</br>
</br><h3>Communication </h3></br>
A quelle fréquence se tiennent les discussions sur votre travail avec votre maître de stage? Si
épisodique, de quand datent les dernières ?
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/></p>
</form>

</br>Quels sont les personnels auprès de qui vous vous formez ? 
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/> </p>
</form>

</br>Quels sont les personnels de l’entreprise avec lesquels vous devez travailler (dans le cadre de votre
mission) ?
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/> </p>
</form>

</br>Quels sont les partenaires extérieurs au service, ou à l’entreprise, avec lesquels vous devez
travailler ? 
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/> </p>
</form>
</br>
<h3>Responsabilités </h3></br>
</br>• Avez-vous des responsabilités d’encadrement ou de formation (si oui lesquelles) ? 
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/></p>
</form>

</br>• Avez-vous des responsabilités de préparation et d’animation de réunions (éventuellement sur le
terrain) ? 
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/></p>
</form>

</br>• Avez vous des responsabilités d’achat de matériel (si oui lesquelles) ?
<form method="post" action="traitement.php">
   <p><input type="text" name="pseudo" size='150'/> </p>
</form>

</br>

</html>

<?= Html::submitButton('Save', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>
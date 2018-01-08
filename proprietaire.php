<?php
include 'Proprietaire_class.php';
$prop = new location\dao\Proprietaire();
extract($_POST);
$numPiece =$_POST['numPiece'];
$nom =$_POST['nom'];
$tel =$_POST['tel'];

$prop->numPiece = $numPiece;
$prop->nom = $nom;
$prop->tel = $tel;

$prop->addProprietaire();
header('location:viewProprietaires.php');

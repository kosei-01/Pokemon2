<?php
session_start();
include 'classes/pokesql.php';
$poke= NEW SQL();


if(isset($_POST["searchname"])){  
	$pname=$_POST["pname"];
	$result=$poke->searchPokemon($pname);
	//when I call return valuable, we need to call receiver(In this case,$result)
	$_SESSION['myarr']=$result;
	
	header("Location:displaypokedex.php");
 }

 elseif(isset($_POST["searchtype"])){
	 $type=$_POST["type"];
	 $result=$poke->searchType($type);
   $_SESSION['myarr']=$result;
	
	 header("Location:displaypokedex.php");
 }

 elseif(isset($_POST["searchability"])){  
	$abi=$_POST["abi"];
	$result=$poke->searchAbility($abi);
	$_SESSION['myarr']=$result;

	header("Location:displaypokedex.php");
 }

 elseif(isset($_POST["searchheight"])){  
	$height=$_POST["height"];
	$result=$poke->searchHeight($height);
	$_SESSION['myarr']=$result;

	header("Location:displaypokedex.php");
 }

 elseif(isset($_POST["searchweight"])){  
	$weight=$_POST["weight"];
	$result=$poke->searchWeight($weight);
	$_SESSION['myarr']=$result;

	header("Location:displaypokedex.php");
 }
 
 elseif(isset($_POST["searchskill"])){  
	$skill=$_POST["skill"];
	$result=$poke->searchSkill($skill);
	$_SESSION['myarr']=$result;
	
	header("Location:displayskills.php");
 }

 elseif(isset($_POST["searchstype"])){  
	$stype=$_POST["stype"];
	$result=$poke->searchSkillType($stype);
	$_SESSION['myarr']=$result;

	header("Location:displayskills.php");
 }

 elseif(isset($_POST["setphybattle"])){  
	$attack=$_POST["attack"];
	$defence=$_POST["defence"];
	$hp=$_POST["hp"];
	
	$poke->InsertphysicalBattle($attack,$defence,$hp);
 }





?>
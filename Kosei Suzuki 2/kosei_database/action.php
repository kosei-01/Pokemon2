<?php

include 'classes/pokesql.php';
$poke= NEW SQL();

	if(isset($_POST['upload'])){
		$pic=$_FILES["pic"]["name"];
		
		$pname=$_POST["pname"];
		$type1=$_POST["type1"];
		$type2=$_POST["type2"];
		$height=$_POST["height"];
		$weight=$_POST["weight"];
		$abi=$_POST["ability"];
		$abi2=$_POST["ability2"];
		$habi=$_POST["hability"];
		$text=$_POST["text"];

		$target_dir="img/";
		$target_file=$target_dir . basename($_FILES["pic"]["name"]);
    
		$ans=$poke->insertPokemon($pname,$type1,$type2,$height,$weight,$abi,$abi2,$habi,$pic,$text);
		
		if($ans==1){
			move_uploaded_file($_FILES["pic"]["tmp_name"],$target_file);

			header("Location:admin.php");
      
		}

		else{
			echo"error";
		}
	}

 elseif(isset($_POST["register"])){
	
	// $loginid=$_POST["id"];
	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$bday=$_POST["bday"];
	$gender=$_POST["gender"];
	
	
   $poke->InsertUserdata($uname,$email,$pass,$bday,$gender);
 }

 elseif(isset($_POST["login"])){
	 session_start();

	$pass=$_POST["pass"];
	$email=$_POST["email"];
	
   $poke->SearchUser($pass,$email);
 }

 elseif(isset($_POST["send"])){
   
	$pname=$_POST["pname"];
	$message=$_POST["message"];
	
	$poke->InsertOpinion($pname,$message);
 }

 elseif(isset($_POST["update"])){
	
	$uname=$_POST["uname"];	 
	$pass=$_POST["pass"];	 
	$email=$_POST["email"];	
	$id1=$_POST["user_id"]; 

	$poke->updateData($uname,$pass,$email,$id1);
 }

 elseif(isset($_POST["post"])){
	 $uname=$_POST["uname"];
	 $comment=$_POST['comment'];

   $poke->InsertComment($uname,$comment);
 }

 elseif(isset($_POST["updatepokemon"])){
	 
	$pname=$_POST["pname"];
	$type1=$_POST["type1"];
	$type2=$_POST["type2"];
	$height=$_POST["height"];
	$weight=$_POST["weight"];
	$abi=$_POST["ability"];
	$abi2=$_POST["ability2"];
	$habi=$_POST["hability"];
	$text=$_POST["text"];
	$id=$_POST["poke_id"];


   $poke->updatePokemon($pname,$type1,$type2,$height,$weight,$abi,$abi2,$habi,$text,$id);
 }

 elseif(isset($_POST["uploadskill"])){
	 
	 $pic=$_FILES["pic"]["name"];
	 $skill=$_POST["skill"];
	 $stype=$_POST["stype"];
	 $power=$_POST["power"];
	 $acc=$_POST["acc"];
	 $stext=$_POST["stext"];
	 $physpe=$_POST["physpe"];

	  $target_dir="img/";
		$target_file=$target_dir . basename($_FILES["pic"]["name"]);
    
		$ans= $poke->InsertSkills($skill,$stype,$power,$acc,$stext,$physpe,$pic);

		
		if($ans==1){
			move_uploaded_file($_FILES["pic"]["tmp_name"],$target_file);

			header("Location:admin.php");
      
		}

		else{
			echo"error";
		}
 }

 elseif(isset($_POST["updateskill"])){
	 
	$skill=$_POST["skill"];
	$stype=$_POST["stype"];
	$power=$_POST["power"];
	$acc=$_POST["acc"];
	$physpe=$_POST["physpe"];
	$stext=$_POST["stext"];
	$id=$_POST["skill_id"];

   $poke->updateskill($skill,$stype,$power,$acc,$physpe,$stext,$id);
 }



 elseif($_GET['actiontype']=='delete'){

	$id1=$_GET["user_id"]; 
   
	$poke->deleteUser($id1);

 }

 elseif($_GET['actiontype']=='del'){

	$id2=$_GET["comment_id"]; 
   
	$poke->deleteMessage($id2);

 }

 elseif($_GET['actiontype']=='del2'){

	$id=$_GET["id"]; 
   
	$poke->deleteMessageforAdmin($id);

 }

 elseif($_GET['actiontype']=='dele'){
	
	$id=$_GET["id"];

		
	$poke->deletePokemon($id);
 }

 elseif($_GET['actiontype']=='de'){

	$id=$_GET["id"];
	
	$poke->deleteSkill($id);
 }

 


?>





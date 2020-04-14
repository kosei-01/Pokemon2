
<?php

include 'database.php';

class SQL extends Database{

///About Pokemon	
public function insertPokemon($pname,$type1,$type2,$height,$weight,$abi,$abi2,$habi,$pic,$text){

$sql1="INSERT INTO Pokedex (name,height,weight,ability,text,Type1,Type2,ability2,hidden_ability)value('$pname','$height','$weight','$abi','$text','$type1','$type2','$abi2','$habi')";

$poke_id=$this->conn->insert_id;

		if($this->conn->query($sql1)){
	
		$sql2="INSERT INTO pic(image,name,height,weight,ability,text,Type1,Type2,ability2,hidden_ability,poke_id) value('$pic','$pname','$height','$weight','$abi','$text','$type1','$type2','$abi2','$habi','$poke_id')";
				 
		    if($this->conn->query($sql2)){
					 
					return 1;
				}
				else{

					return 0;
				}
		}

		else{
			echo"error.".$this->conn->error;
		}

}

public function showData($id){

$sql1="SELECT * FROM Pokedex INNER JOIN pic on Pokedex.poke_id=pic.poke_id where Pokedex.poke_id='$id'";	
$rows=array();
$result=$this->conn->query($sql1);

if($result->num_rows>0){

	while($row=$result->fetch_assoc()){
     $rows[]=$row;
	}

   return $rows;
}

}

public function checkPokedata(){

	$sql1="SELECT * FROM Pokedex ";	
	$rows=array();
	$result=$this->conn->query($sql1);
	
	if($result->num_rows>0){
	
		while($row=$result->fetch_assoc()){
			 $rows[]=$row;
		}
	
		 return $rows;
	}
	
	}

public function searchPokemon($pname){

	$sql1="SELECT * FROM Pokedex INNER JOIN pic on Pokedex.poke_id=pic.poke_id where Pokedex.name='$pname'";	
	$rows=array();
	$result=$this->conn->query($sql1);
	
	if($result->num_rows>0){
	
		while($row=$result->fetch_assoc()){
			 $rows[]=$row;
		}
	
		 return $rows;
	}
	
	}

	public function searchType($type){

		$sql="SELECT * FROM Pokedex INNER JOIN pic on Pokedex.poke_id=pic.poke_id where Pokedex.Type1='$type'or Pokedex.Type2='$type'";
		$rows=array();
		$result=$this->conn->query($sql);

		if($result->num_rows>0){

        while($row=$result->fetch_assoc()){
					$rows[]=$row;
				}

				return $rows;
		}


		else{

		}
	}

	public function searchAbility($abi){

		$sql1="SELECT * FROM Pokedex INNER JOIN pic on Pokedex.poke_id=pic.poke_id where Pokedex.ability='$abi' or Pokedex.ability2='$abi' or Pokedex.hidden_ability='$abi'";	
		$rows=array();
		$result=$this->conn->query($sql1);
		
		if($result->num_rows>0){
		
			while($row=$result->fetch_assoc()){
				 $rows[]=$row;
			}
		
			 return $rows;
		}
		
		}

		public function searchHeight($height){

			$sql1="SELECT * FROM Pokedex INNER JOIN pic on Pokedex.poke_id=pic.poke_id where Pokedex.height='$height'";	
			$rows=array();
			$result=$this->conn->query($sql1);
			
			if($result->num_rows>0){
			
				while($row=$result->fetch_assoc()){
					 $rows[]=$row;
				}
			
				 return $rows;
			}
			
			}	

			public function searchWeight($weight){

				$sql1="SELECT * FROM Pokedex INNER JOIN pic on Pokedex.poke_id=pic.poke_id where Pokedex.weight='$weight'";	
				$rows=array();
				$result=$this->conn->query($sql1);
				
				if($result->num_rows>0){
				
					while($row=$result->fetch_assoc()){
						 $rows[]=$row;
					}
				
					 return $rows;
				}
				
				}
				
		

///About user
public function InsertUserdata($uname,$email,$pass,$bday,$gender){
 
	$sql1="INSERT INTO login(password,email) value('$pass','$email')";
	 
	 if($this->conn->query($sql1)){
		$loginid=$this->conn->insert_id;

		$sql2="INSERT INTO user(user_name,birthday,gender,loginid) value('$uname','$bday','$gender','$loginid')";
			
			if($this->conn->query($sql2)){
				echo"You can be our member!!Let's login!!!";
				header("Location:index.php");
				
			}

			else{
				echo"error".$this->conn->error;
			}
		 
	 }

	 else{
		 echo"error".$this->conn->error;
	 }

}

public function SearchUser($pass,$email){

	 $sql="SELECT * from login where password='$pass' AND email='$email' ";
	 $result=$this->conn->query($sql);

	 if($result->num_rows>0){			

		  while($rows=$result->fetch_assoc()){
				$_SESSION['id']=$rows['loginid'];

				if($rows['status']=='U'){
					header("Location:user.php");
				}

				elseif($rows['status']=='A'){
					header("Location:admin.php");
				}

			}
	 }

	 else{
		 echo"error".$this->conn->error;
	 }

}

public function ShowUsers(){

	$sql="SELECT * from user INNER JOIN login on user.loginid=login.loginid";
	// $rows=array();
	$result=$this->conn->query($sql);

    if($result->num_rows>0){
      	
		while($rows=$result->fetch_assoc()){ 
		// $rows[]=$row;
	  
		// return $rows;
		$id1=$rows['user_id'];

		 echo"
		     <tr>
						<td>".$rows['user_id']."</td>
						<td>".$rows['user_name']."</td>
						<td>".$rows['password']."</td>
						<td>".$rows['email']."</td>
						<td>".$rows['birthday']."</td>
						<td>".$rows['gender']."</td>
						<td><a href='update.php?id=$id1'>Update</a></td>
						<td><a href='action.php?actiontype=delete&user_id=$id1'>Delete account</a></td>
		     </tr>
		 ";
		}

	}

		else{
			echo"error".$this->conn->error;
		}
}

///About opinion

public function InsertOpinion($pname,$message){

	$sql="INSERT INTO opinion(pen_name,message)value('$pname','$message')";

	if($this->conn->query($sql)){
    header("Location:contact.php");
	}

	else{
		echo"error.".$this->conn->error;
	}

}

public function ShowOpinion(){

	$sql="SELECT * from opinion";
	$result=$this->conn->query($sql);

    if($result->num_rows>0){
      	
		while($row=$result->fetch_assoc()){ 
		// $rows[]=$row;
	  
		// return $rows;
		// $id=$row['message_id'];
		 echo"
		     <tr>
						<td>".$row['message_id']."</td>
						<td>".$row['pen_name']."</td>
						<td>".$row['message']."</td>
		     </tr>";
		}

	}

		else{
			echo"error".$this->conn->error;
		}
}

///About BullentinBoard

public function InsertComment($uname,$comment){
	$comment= $this->conn->real_escape_string($comment);
	$sql1="INSERT INTO board(user_name,comment) value('$uname','$comment')";
	
	if($this->conn->query($sql1)){
    echo "<script>window.location='discussion.php';</script>";
	}

	else{
    echo"error in inserting the comment.".$this->conn->error;
	}

}

public function postComment(){

	$sql="SELECT * FROM board";
	$result=$this->conn->query($sql);
 
	if($result->num_rows>0){
		 while($row=$result->fetch_assoc()){
			 $id2=$row["comment_id"]; 
				echo"<div class='bg-white border-radius mb-5'>
								<p class='text-left pl-5'>".$row["user_name"]."<br></p>
								<p>".$row["comment"]."</p>
								<a href='action.php?actiontype=del&comment_id=$id2'>Delete comment</a>
						</div>";
	           	 
				}
		 
	}
 
	else{
 
	 echo"error.".$this->conn->error;
	}
 
 }

public function showComment(){

 $sql="SELECT * FROM board";
 $result=$this->conn->query($sql);

 if($result->num_rows>0){
	  while($row=$result->fetch_assoc()){
			$id=$row["comment_id"]; 
			 echo"<tr>
							<td class='text-white'>".$row['comment_id']."</td>
							<td class='text-white'>".$row['user_name']."</td>
							<td class='text-white'>".$row['comment']."</td>
              <td><a href='action.php?actiontype=del2&id=$id'>Delete Message</a></td>
						
						</tr>";
		}
    
 }

 else{

	echo"error.".$this->conn->error;
 }

}

///About skills

public function InsertSkills($skill,$stype,$power,$acc,$stext,$physpe,$pic){

	$sql="INSERT INTO Skill(skills,skills_text,skills_type,accuracy,power,physical_special)value('$skill','$stext','$stype','$acc','$power','$physpe')";
	
	 if($this->conn->query($sql)){
		$skill_id=$this->conn->insert_id; 

			$sql2="INSERT INTO pic2(image,skills,skills_type,physical_special,skills_text,accuracy,power,skill_id)value('$pic','$skill','$stype','$physpe','$stext','$acc','$power','$skill_id')";
				
			 if($this->conn->query($sql2)){
				 
				return 1;
			 }

			 else{
				return 0;
			 }
	 }
	   
	 else{
    echo"error.".$this->conn->error;
	 }

}

public function checkskills(){

	$sql="SELECT * FROM Skill INNER JOIN pic2 on Skill.skill_id=pic2.skill_id";
	$rows=array();
	$result=$this->conn->query($sql);

	if($result->num_rows>0){
		
		while($row=$result->fetch_assoc()){
        $rows[]=$row;
		}

		return $rows;

	}

}

public function searchSkill($skill){

	$sql="SELECT * FROM Skill INNER JOIN pic2 on Skill.skill_id=pic2.skill_id where Skill.skills='$skill'";
	$rows=array();
	$result=$this->conn->query($sql);

	if($result->num_rows>0){
		
		while($row=$result->fetch_assoc()){

			$rows[]=$row;
		}

		return $rows;
	}
}

public function searchSkillType($stype){

	$sql="SELECT * FROM Skill INNER JOIN pic2 on Skill.skill_id=pic2.skill_id where Skill.skills_type='$stype'";
	$rows=array();
	$result=$this->conn->query($sql);

	if($result->num_rows>0){
		
		while($row=$result->fetch_assoc()){

			$rows[]=$row;
		}

		return $rows;
	}
}

//About battle

public function InsertphysicalBattle($attack,$defence,$hp){
 
	$sql="INSERT INTO physical_battle(attack,defence,hit_points)value('$attack','$defence','$hp')";

	if($this->conn->query($sql)){
    echo"<script>window.location='calculationoutcome.php';</script>";
	}
	else{
		echo"error.".$this->conn->error;
	}

}

public function calculatephyBattle(){

	$sql="SELECT * from physical_battle";
	$result=$this->conn->query($sql);
	
	if($result->num_rows>0){
		 
		while($rows=$result->fetch_assoc()){
			
			if($rows["attack"]-$rows["defence"]>$rows["hit_points"]){	 
			
			echo"You win!!!";
		 }

		 else{
      echo"The battle is still going on.";
		}
	}

}

}




///Kind of actions
public function updateData($uname,$pass,$email,$id1){

	$sql="UPDATE user INNER JOIN login on user.loginid=login.loginid
	      SET user.user_name='$uname',
				    login.password='$pass',
						login.email='$email'
				where user.user_id='$id1'";
 
 if($this->conn->query($sql)){
	echo"<script>window.location='manageusers.php';</script>";
 }

 else{
	 echo"error.".$this->conn->error;
 }
 
}

public function updatePokemon($pname,$type1,$type2,$height,$weight,$abi,$abi2,$habi,$text,$id){

	$sql="UPDATE Pokedex INNER JOIN pic on
				Pokedex.name=pic.name 
				SET Pokedex.name='$pname',
						Pokedex.Type1='$type1',
						Pokedex.Type2='$type2',
						Pokedex.ability='$abi',
						Pokedex.ability2='$abi2',
						Pokedex.hidden_ability='$habi',
						Pokedex.height='$height',
						Pokedex.weight='$weight',
						Pokedex.text='$text',
						pic.name='$pname',
						pic.Type1='$type1',
						pic.Type2='$type2',
						pic.ability='$abi',
						pic.ability2='$abi2',
						pic.hidden_ability='$habi',
						pic.height='$height',
						pic.weight='$weight',
						pic.text='$text'
				where Pokedex.poke_id='$id'";	 
	
 if($this->conn->query($sql)){
		echo"<script>window.location='checkpokedex.php'</script>";
	 
 } 

 else{
	 echo"error.".$this->conn->error;
 }


}

public function updateskill($skill,$stype,$power,$acc,$physpe,$stext,$id){

	$sql="UPDATE Skill INNER JOIN pic2 on 
	      Skill.skill_id=pic2.skill_id

	      SET Skill.skills='$skill',
				    Skill.skills_type='$stype',
						Skill.power='$power',
						Skill.accuracy='$acc',
						Skill.physical_special='$physpe',
						Skill.skills_text='$stext',

				    pic2.skills='$skill',
				    pic2.skills_type='$stype',
						pic2.power='$power',
						pic2.accuracy='$acc',
						pic2.physical_special='$physpe',
						pic2.skills_text='$stext'

				where Skill.skill_id='$id'";
 
 if($this->conn->query($sql)){
	echo"<script>window.location='checkskills.php';</script>";
 }

 else{
	 echo"error.".$this->conn->error;
 }
 
}

public function deleteUser($id1){

$sql="DELETE user,login from user INNER JOIN login on user.loginid=login.loginid
			where user.user_id='$id1'";
		
		if($this->conn->query($sql)){
      echo"<script>window.location='manageusers.php';</script>";
		}

		else{
			echo"error.".$this->conn->error;
		}

}

public function deleteMessage($id2){

	$sql="DELETE from board 
				where comment_id='$id2'";
			
			if($this->conn->query($sql)){
				echo"<script>window.location='discussion.php';</script>";
			}
	
			else{
				echo"error.".$this->conn->error;
			}
	
	}

public function deleteMessageforAdmin($id){

	$sql="DELETE from board 
				where comment_id='$id'";
			
			if($this->conn->query($sql)){
				echo"<script>window.location='manageBulletinboard.php';</script>";
			}
	
			else{
				echo"error.".$this->conn->error;
			}
	
	}	

public function deletePokemon($id){
 
	$sql="DELETE Pokedex,pic from Pokedex INNER JOIN pic on  Pokedex.poke_id=pic.poke_id
				where Pokedex.poke_id='$id'";
				
			if($this->conn->query($sql)){
				echo"<script>window.location='checkpokedex.php';</script>";
			}	

			else{
				echo"error.".$this->conn->error;
			}

}

public function deleteSkill($id){

$sql="DELETE Skill,pic2 from Skill INNER JOIN pic2 on  Skill.skill_id=pic2.skill_id where Skill.skill_id='$id'";
			
			if($this->conn->query($sql)){
				echo"<script>window.location='checkskills.php';</script>";
			}	

			else{
				echo"error.".$this->conn->error;
			}


}


}

?>
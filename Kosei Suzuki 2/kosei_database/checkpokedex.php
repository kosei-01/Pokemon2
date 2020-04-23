<!DOCTYPE html>
<html>
<head>
  <title>Fairy books</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
  <style>
	
	@import url('https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700');
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
  @import url('font-awesome.css');

*{

	box-sizing:border-box;
	margin:0;
}

body {
	font-family:'Open Sans', Arial, sans-serif;
	font-size:16px;
	font-weight:300;
	line-height:1.6em;
	overflow-x:hidden;
	background-color:#263238 ;
 }

.page {   
    padding: 0;  
    width: 100%;
  	height:100%
}

#header {
	overflow: hidden;
	background-color:#263238;	
	width:1400px;
}

.nav-tabs {
	overflow: hidden;	
	border-bottom:0;
	position:relative;
	
}
.nav-tabs li {
	float: left;
	width: 190px;
	list-style: none;
	margin-bottom:0;	
}
.nav-tabs li.box {
	width: auto;
}
.nav-tabs li a {
	display: block;
	position: relative;
	height: 150px;
	-webkit-transition: color ease .4s, background ease .4s;
	-moz-transition: color ease .4s, background ease .4s;
	-ms-transition: color ease .4s, background ease .4s;
	-o-transition: color ease .4s, background ease .4s;
	transition: color ease .4s, background ease .4s;
	color: #fff;
	text-decoration: none;
	border-radius:0;
	margin-left:0;
	margin-bottom:15px;
}

.nav-tabs li.impidimp img
 {
	width:180px;
	margin-left:16px;
	margin-right:-16px;	
	color:white;
	position:absolute;
	left:0px;
	top:-10px;
	z-index:1;
}

.nav-tabs li.user a {
	background: #78909C ;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.pokedex a {
	background: #4A148C ;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.board a {
	background: #330099 ;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.skill a {
	background: #336600 ;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.opinion a {
	background: #660000 ;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.login a {
	background:#616161;
	width:50%;
	font-weight:bold;
}

.nav-tabs li a:hover{
	background: #fff !important;
	border-radius:0;
}
.nav-tabs li a span {
	font-size: 50px;
	line-height: 50px;
	display: block;
	position: absolute;
	top:50px;
	right:60px;
	text-align:center;
	overflow: hidden;
	font-weight: normal;
	left:50px;		
}

.nav-tabs li.portfolio a span {top: 50px;}
.nav-tabs li.contacts a span {left: 50px;}
.nav-tabs li.facebook a span {right: 50px;}
.nav-tabs li a:hover,
.nav-tabs li.current a {
	color: #ccc;
}

.profile_photo {
	float: left;
	height:830px;
	width: 1350px;
	background-image:url(img/darkpokemons.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	border:10px groove #FF33FF; 
}
.profile_photo img {
	vertical-align: top;
	width: 100%;
	height: auto;
}
.profile_name {
    background: none repeat scroll 0 0 black ;
    float: left;
    height:150px;
    width: 1350px;
	text-decoration:none;
}

.profile_name a .name {
	margin-top:50px;
    font-weight: 700;
	text-align:center;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-size: 40px;
	text-decoration:none;
	color:#fff;
	
}
.profile_name a:hover {
	text-decoration:none;
}

.profile_name .profile_inner {
	text-align:center;
	font-size:18px;
	color:#fff;	
}

.download {
	text-align:center;
	color:#FF33FF;
	text-decoration:none;
}

.download:hover {
	
	color:#4A148C ;
	text-decoration:none;
}

#footer {
	margin-top:10px;
	text-align:center;
	margin-bottom:60px;
	color:#666;
	font-size:20px;
	padding-top:30px;
}
.footer_copyright a {
	color:#FF33FF;
	text-decoration:none;
}
.footer_copyright a:hover {
	color:#4A148C;
	
}
	
	</style>

</head>
<div class="container">
    <div class="row">
      <div class="page">
        <header id="header">
          <ul class="nav nav-tabs" role="tablist">
						<li class="impidimp"><img src="img/impidimp.png"></li>
						<li class="user"><a href="manageusers.php">Manage Users</a></li>
            <li class="pokedex"><a href="managepokedex.php">Manage Pokedex</a></li>
						<li class="board"><a href="manageBulletinboard.php">Manage Bulletin Board</a></li>
						<li class="skill"><a href="manageskills.php">Manage Skills</a></li>
						<li class="opinion"><a href="manageOpinion.php">Manage Opinion</a></li>
						<li class="login"><a href="logout.php">Log out</span></a></li>
           
<div class="container-fluid">
 <form method="post" action="action.php" enctype="multipart/form-data" class="mt-5">
	 <div class="text-white w-100">
     <table class="table text-white w-75">
				<th>ID</th> 
				<th>Name</th> 
				<th>Type-1</th> 
				<th>Type-2</th> 
				<th>Ability</th> 
				<th>Ability2</th> 
				<th>Hidden-ability</th> 
				<th>Height</th> 
				<th>Weight</th> 
				<th>Text</th> 
				<th colspan="2">Action</th> 
		 <?php
				include 'classes/pokesql.php';
				$poke=New SQL();
				$result=$poke->checkPokedata();
				
				foreach($result as $rows){
					$id=$rows["poke_id"];
					echo"<tr>
					        <td>".$rows["poke_id"]."</td>
									<td>".$rows["name"]."</td>
									<td>".$rows["Type1"]."</td>
									<td>".$rows["Type2"]."</td>
									<td>".$rows["ability"]."</td>
									<td>".$rows["ability2"]."</td>
									<td>".$rows["hidden_ability"]."</td>
									<td>".$rows["height"]."</td>
									<td>".$rows["weight"]."</td>
									<td>".$rows["text"]."</td>
									<td><a href='editPokemon.php?id=$id'>Update</a></td>
									<td><a href='action.php?actiontype=dele&id=$id'>Delete</a></td>
					      </tr>";
             
				}
			
		 ?>   
		     
		 
		 </table>
   </div>
  </form>
 </div>	
                  
          </ul>
        </header>
        
      </div>
    </div>
  </div>
  
    <a href="admin.php" class="download"><h2>Go back to the top</h2></a>

    <footer id="footer">
      <div class="footer_copyright">
        Copyright &copy; Kosei Suzuki. All rights reserved.
    
      </div>
    </footer>

</body>
</html>
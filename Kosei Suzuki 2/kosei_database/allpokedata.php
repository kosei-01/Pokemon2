<?php

		session_start();
			include 'classes/pokesql.php';
		  $id=$_GET["poke_id"];
			$poke= NEW SQL();
			$result=$poke->showData($id);					
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fairy books</title>

  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	<link rel="stylesheet" href="css/pokedex.css" />
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
	background-color:#FF99CC;
	/* border:solid 10px #F06292 ; */
 }


.page {   
	/* margin: 50px auto; */
    /* max-width: 1200px; */
    /* border: 1px solid #eee; */
    padding: 0;  
    width: 100%;
  	height:100%
}


#header {
	overflow: hidden;
	background-color:#FF99CC;
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

.nav-tabs li.sylveon img
 {
	width:180px;
	margin-left:16px;
	margin-right:-16px;	
	color:white;
	position:absolute;
	left:60px;
	top:-10px;
	z-index:1;
}

.nav-tabs li.profile a {
	background:#CC66FF ;
	margin-left:16px;
	margin-right:-16px;
	color:white;
	font-weight:bold;
}
.nav-tabs li.pokedex a {
	background: #FF00CC;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.board a {
	background: #EA4C89;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.skill a {
	color:black;
	background: #CCFF00;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.contact a {
	background: #32CDFB;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.login a {
	background:  #FF3366 ;
	/* margin-left:16px;
	margin-right:-16px; */
	width:50%;
	font-weight:bold;
}

.nav-tabs li.sign a {
	background: #FF00FF ;
	/* margin-left:16px;
	margin-right:-16px; */
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
	/* min-height: 150px; */
	height:830px;
	/* background: #323232; */
	width:1150px;
	background-image:url(img/indexback.jpeg);
	background-size: cover;
	background-repeat: no-repeat;
	border:10px groove white;
	overflow:scroll; 
}
.profile_photo img {
	vertical-align: top;
	width: 100%;
	height: auto;
}
.profile_name {
    background: none repeat scroll 0 0 #FF0066 ;
    float: left;
    height:150px;
    width: 1350px;
	text-decoration:none;
	padding-left:20px;
}

.profile_name a .name {
	padding-top:130px;
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

.tab-content {
	background-color:#fff;
	margin-top:-100px;
}
.tab-pane#profile {
	border-bottom:0;
	border-top:0;
}
.panel-group {
  margin-bottom: 0;
  border-radius: 0;
  
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 0;
}
.panel-body h5 {
	text-transform:uppercase;
	text-align:center;
	margin-bottom:20px;	
}
.panel-group .panel-heading + .panel-collapse > .panel-body {
  border-top:0;
  border-bottom:0;
  border-top-color:#fff;
}

.panel-default {	
	border:0;	
}

.panel-default .panel-heading {
	background-color:#FF0066 ;
	border:0;	
}

h4.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 18px;
  text-decoration:none; 
  text-align:center;
  text-transform: uppercase;
  padding:30px;
  
}
h5.panel-title {
	margin-bottom: 30px;
	color:#000;
}

.panel-title > a {
  color: inherit;
  text-decoration:none;
  background-color:#FF0066;
  padding:10px 15px;
  color: #fff;
}
.panel-collapse {
	padding-bottom:20px;
	
	
}

.feature1 .feature {
	padding:50px;
	text-align:center;
	background-color:#f9f9f9;	
	margin-top:35px;
	margin-bottom:10px;
}
.feature h4 {
	margin-bottom:30px;
	color:#a9a9a9;
}
.feature h4 span {
	
	color:#50c0e9;
}
.feature .ficon i {
	border-radius: 50%;
	background-color:#50c0e9;
	color:#fff;
	width: 80px;
	height: 80px;
	line-height: 80px;	
}
.details_exp p {
	line-height: 23px;
	color:#89949B;
}

.feature .details_exp a {
	text-decoration:none;
	color:#fff;
	background-color:#50c0e9;
	padding:5px 10px;
    
}
.feature2 .feature {
	padding:50px;
	text-align:center;
	background-color:#f9f9f9;	
	margin-top:20px;
}

.download {
	text-align:center;
	color:#50c0e9;
	text-decoration:none;
}

.download:hover {
	
	color:#1892BF;
	text-decoration:none;
}


/* --- contact --- */

.tab-pane#contacts {
	background-color:#fff;
}

.details  {
	margin-top:30px;
	color:#000;
}
.details  h3 {
	
	
	color:#50c0e9;
	
}
.details  a:hover {
	color:#000;
	text-decoration:none;
}


/*===========================
  Portfolio
============================ */
/* --- section heading --- */
.section-header {
	text-align: center;
	padding-top:120px;
	margin:0 auto;
	font-size:30px;
	position:relative;
}

.section-header img{
	text-align: center;
	padding-top:120px;
	margin:0 auto;
	font-size:30px;
  height:300px;
	width:150px;
  position:absolute;
	left:120px;
	top:120px;

}

.section-header h2 {
	text-transform: uppercase;
	font-weight: 700;
	color:#FF0033 ;
	padding-bottom:40px;
}
.section-header p {
	color:#FF0033 ;
	padding-top: 10px;
	padding-bottom:40px;
	font-size:30px;
	line-height:0px;
}
#section-works {
	margin-top:-100px;
	background-color: #fff;
}

nav#filter a {
	background-color: #EEE;
	color:#555;	
}

nav#filter a:hover, nav#filter a.current {
	background-color: #50c0e9;
	color:#fff;
}

nav#filter {
	margin-bottom:1.5em;
}

nav#filter li {
	display:inline-block;
	margin:0 0 0 5px;
}
nav#filter a {
	padding: 4px 12px;
	line-height: 20px;
	text-decoration: none;
}
nav#filter ul {
	margin-top:30px;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

input{
   width:300px;
	 height:40px;
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
	color:#50C0E9;
	text-decoration:none;
}
.footer_copyright a:hover {
	color:#199DCC;
	
}

.pname{
	color:black;
}


</style>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="page">
        <header id="header">
          <ul class="nav nav-tabs" role="tablist">
            <li class="sylveon"><img src="img/Sylveon.png"></li>
            <li class="profile"><a href="profile.php">About us</a></li>
            <li class="pokedex"><a href="pokedex.php">Pokedex</a></li>
						<?php
								if(isset($_SESSION["id"]) && $_SESSION["id"]!=NULL){

									echo"<li class='board'><a href='Bulletinboard.php'>Bulletin Board</a></li>
									     <li class='skill'><a href='skill.php'>Skill</a></li>
											 <li class='contact'><a href='Contact.php'>Contact us</span></a></li>
											 <li class='login'><a href='logout.php'>Log out</span></a></li>";
								}		
								
								else{
									echo" <li class='skill'><a href='skill.php'>Skill</a></li>
									      <li class='contact'><a href='Contact.php'>Contact us</span></a></li>
												<li class='login'><a href='login.php'>Login</span></a></li>
												<li class='sign'><a href='signup.php'>Sign up</span></a></li>";
							}
							
						
						?>
								
						<div class="box">
              <div class="profile_photo">
								<!-- <img src="img/allfairy.jpg" alt="" class="img-responsive"> -->
								<div class="section-header">
							    <div class="container-fluid">
									  <div class="w-100">
		<?php  
		
			foreach($result as $rows){
				$pic=$rows["image"];
				$pname=$rows["name"];
				$type1=$rows["Type1"];
				$type2=$rows["Type2"];
				$abi=$rows["ability"];
				$abi2=$rows["ability2"];
				$habi=$rows["hidden_ability"];
				$text=$rows["text"];
				$height=$rows["height"];
				$weight=$rows["weight"];

       echo"<div class='m-5'>";
						echo"<img src='img/$pic'><br>";
						echo"<p class='text-dark'>".$pname."</p><br>";
			 echo"</div>";	

				echo"<div class='m-5 '>";
				 echo"<table class='table table-border '>";   
				   echo"<div class='w-50'>";
							echo"<th class='text-info bg-white w-25'>Type1</th>";
							echo"<th class='text-info bg-white w-25'>Type2</th>";
							echo"<th class='text-info bg-white w-25'>Ability</th>";
							echo"<th class='text-info bg-white w-25'>Ability2</th>";
							echo"<th class='text-info bg-white w-25'>Hidden Ability</th>";
							echo"<th class='text-info bg-white w-25'>Height</th>";
							echo"<th class='text-info bg-white w-25'>Weight</th>";
					

					 echo"<tr>";
						 echo"<td class='text-info p-4'> ".$type1."</td>";
							
						if($type2!=NULL){
									echo"<td class='text-info p-4'>".$type2."</td><br>";
						}	
						else{
              		echo"<td class='text-info p-4'>none</td><br>";
						}
							
							echo"<td class='text-info p-4'> ".$abi."</td><br>";
						if($abi2!=NULL){
									echo"<td class='text-info p-4'> ".$abi2."</td><br>";
						}
						else{
								  echo"<td class='text-info p-4'>none</td><br>";
						}
						if($habi!=NULL){
									echo"<td class='text-info p-4'> ".$habi."</td><br>";
						} 	
						else{
								echo"<td class='text-info p-4'> none</td><br>";
					  }	
								echo"<td class='text-info p-4'>".$height."</td><br>";
								echo"<td class='text-info p-4'>".$weight."</td><br>";
						 echo"</tr>";		
							 
				 
						 echo"<th colspan='7' class='text-info bg-white'>Text</th>";
						 echo"<tr>";   
								echo"<td colspan='5' class='text-info p-4'>".$text."</td>";
						 echo"</tr>";
            echo"</div>";    
					echo"</table>";	
         echo"</div><br><br><br>";
       
			}		
  	?>
		    
		    <p class="text-info p-5 float-left">I'm sorry... This page is under renewal.</p>
		               </div>
                 </div>
               </div>
		         </div>
						</div> 
          </ul>
        </header>
        <!-- /Header -->
      </div>
    </div>
  </div>
 
    
            
	<?php
		    if(isset($_SESSION["id"]) && $_SESSION["id"]!=NULL){

          echo"<a href='user.php' class='download'><h2>Go back to the top</h2></a>";
				}

				else{
          echo"<a href='index.php' class='download'><h2>Go back to the top</h2></a>";
				}
		?>
   

    <footer id="footer">
      <div class="footer_copyright">
        Copyright &copy; Kosei Suzuki. All rights reserved.
        <div class="credits">
          
          
        </div>
      </div>
    </footer>

</body>

</html>

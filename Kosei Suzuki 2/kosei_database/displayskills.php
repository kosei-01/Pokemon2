 <?php
    session_start();
 		
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
 }


.page {   
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

.nav-tabs li.skill a {
	color:black;
	background: #CCFF00;
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

.nav-tabs li.contact a {
	background: #32CDFB;
	margin-left:16px;
	margin-right:-16px;
	font-weight:bold;
}

.nav-tabs li.login a {
	background:  #FF3366 ;
	width:50%;
	font-weight:bold;
}

.nav-tabs li.sign a {
	background: #FF00FF ;
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
	background: #323232;
	width: 1150px;
	background:url(img/displayskill.jpeg);
	background-size: cover;
	background-repeat: no-repeat;
	border:10px groove #FF33FF;
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

.download {
	text-align:center;
	color:#50c0e9;
	text-decoration:none;
}

.download:hover {
	
	color:#1892BF;
	text-decoration:none;
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
								<div class="section-header">
							    <div class="container-fluid w-100">
		<?php
			$result=$_SESSION['myarr'];

         foreach($result as $rows){
          
						$skill=$rows["skills"];
						$stype=$rows["skills_type"];
						$acc=$rows["accuracy"];
						$power=$rows["power"];
						$physpe=$rows["physical_special"];
						$stext=$rows["skills_text"];
						$pic=$rows["image"];
						$id=$rows["skill_id"];
            
							echo"<div class='bg-light w-50 m-5 mx-auto'>";
							    echo"<img src=img/$pic>"; 
									echo"<p class='text-info'>Name:  ".$skill."</p>";
									echo"<p class='text-info'>Type:  ".$stype."</p>";
                    if($acc!=NULL){
											echo"<p class='text-info'>Accuracy:  ".$acc."</p>";
										}
										else{
											echo"<p class='text-info'>Accuracy:  "-"</p>";
										}	
										if($power!=NULL){
									echo"<p class='text-info'>Power:  ".$power."</p>";
									 }
									 else{
										 echo"<p class='text-info'>Power  :"-"</p>";
									 }
									 if($physpe!=NULL){
                    echo"<p class='text-info'>".$physpe." attack</p>";
									 }
									 else{
										echo"<p class='text-info'></p>";
									 }
									echo"<p class='text-info'>Text:  ".$stext."</p>";
              echo"</div>"; 
				 }

									
  	?>
                 </div>                
               </div>
		         </div>
						</div> 
          </ul>
        </header>
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
      
      </div>
    </footer>

</body>

</html>

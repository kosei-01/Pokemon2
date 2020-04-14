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
	/* border:solid 10px #F06292 ; */
 }

 /* .container{
	background-image:url(img/shinyfairies.jpg);
 } */

.page {   
	/* margin: 50px auto; */
    /* max-width: 1200px; */
    /* border: 1px solid #eee; */
    padding: 0;  
    width: 100%;
  	height:100%
}

/* .contact-area, .mar-bot40, .tab-content {
    margin-top: 60px;
} */

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
	background: #336600  ;
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
	background:#616161  ;
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


/* --- tab-content --- */
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
	color:#FF33FF ;
	text-decoration:none;
}

.download:hover {
	
	color:#4A148C ;
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
}
.section-header h2 {
	text-transform: uppercase;
	font-weight: 700;
	color:#FF0033 ;
}
.section-header p {
	color:#FF0033 ;
	padding-top: 10px;
	
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
            <!-- <li class="login"><a href="login.php">Login</span></a></li>

            <li class="sign"><a href="signup.php">Sign up</span></a></li> -->
<div class="container-fluid">
 <h1 class="text-danger">They are our users including you.</h1><br><br>	
 <table class="table text-white w-75" >
  
	 <th>Number</th>
	 <th>Name</th>
	 <th>Message</th>
	 <th>Action</th>
	 
	 <?php

   include 'classes/pokesql.php';

	 $poke= new SQL();
	 $result=$poke->showComment();

	
	 ?>
	
 </table>
 </div>	
            <!-- <li class="profile"><a href="#profile" role="tab" data-toggle="tab"><span i class="fa fa-align-justify"></i></span></a></li> -->
            <!-- <li class="contacts"><a href="#contacts" role="tab" data-toggle="tab"><span i class="far fa-id-card"></i></span></a></li> -->
						
             
          </ul>
        </header>
        <!-- /Header -->
      </div>
    </div>
  </div>
  <!-- Tab panes -->
  
    <a href="admin.php" class="download"><h2>Go back to the top</h2></a>

    <footer id="footer">
      <div class="footer_copyright">
        Copyright &copy; Kosei Suzuki. All rights reserved.
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Kelly
          -->
          
        </div>
      </div>
    </footer>

</body>
</html>
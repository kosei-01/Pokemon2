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
  
    <style>

@import url('https://fonts.googleapis.com/css?family=Caveat|Lato&display=swap');

*{

	box-sizing:border-box;
	margin:0;
}

body {
	font-family: 'Lato', sans-serif;
	font-size:16px;
	font-weight:300;
	line-height:1.6em;
	overflow-x:hidden;
  background-color:#FF99CC;
  border:solid 10px #F06292 ;
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
  float:left;
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
	left:810px;
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
	width: 1350px;
	background-image:url(img/allfairy.jpg);
	background-size: cover;
  background-repeat: no-repeat;
  margin:auto 0;
  border:10px groove #FF33FF; 
	
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
          <ul class="nav nav-tabs">
            <li class="sylveon"><img src="img/Sylveon.png"></li>
            <li class="profile"><a href="profile.php">About us</a></li>
						<li class="pokedex"><a href="pokedex.php">Pokedex</a></li>
						<li class='skill'><a href='skill.php'>Skill</a></li>
            <li class="contact"><a href="Contact.php">Contact us</span></a></li>
            <li class="login"><a href="login.php">Login</span></a></li>
            <li class="sign"><a href="signup.php">Sign up</span></a></li>

            <div class="box">
              <div class="profile_photo">
                
              </div>
              <div class="profile_name">
                <div class="author_name">
                  <div class="profile_inner">
                  
                    <a href="index.php">
                      <div class="name">Reference book</div>
                    </a>
                    <div class="pos"> Only fairy type Pokermons can be published.</div>
                  </div>
                </div>
              </div>
            </div>
       
          </ul>
        </header>
      </div>
    </div>
  </div>
  
    <a href="#" class="download"><h2>Go back to the top</h2></a>

    <footer id="footer">
      <div class="footer_copyright">
        Copyright &copy; Kosei Suzuki. All rights reserved.
      </div>
    </footer>

</body>
</html>

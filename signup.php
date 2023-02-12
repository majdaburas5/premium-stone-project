<style>
body {
    background: #222D32;
    font-family: 'Roboto', sans-serif;
}

.login-box {
    margin-top: 75px;
    height: auto;
    background: #1A2226;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.login-key {
    height: 100px;
    font-size: 80px;
    line-height: 100px;
    background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.login-title {
    margin-top: 15px;
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 15px;
    font-weight: bold;
    color: #ECF0F5;
}

.login-form {
    margin-top: 25px;
    text-align: left;
}

input[type=text] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #ECF0F5;
}

input[type=password] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color: #ECF0F5;
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #0DB8DE;
    outline: 0;
    background-color: #1A2226;
    color: #ECF0F5;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 10px;
    color: #6C6C6C;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-outline-primary {
    border-color: #0DB8DE;
    color: #0DB8DE;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #0DB8DE;
    right: 0px;
}

.login-btm {
    float: left;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: #A2A4A4;
}

.loginbttm {
    padding: 0px;
}

.captcha {
	background-color:#f9f9f9;
	border:2px solid #d3d3d3;
	border-radius:5px;
	color:#4c4a4b;
	display:flex;
	justify-content:center;
	align-items:center;
}

	.text {
		margin:.5em!important;
		text-align:center;
	}
	.logo {
		align-self: center!important;
	}
	.spinner {
		margin:2em .5em .5em .5em!important;
	}
}

.text {
	font-size:1.75em;
	font-weight:500;
	margin-right:1em;
}
.spinner {
	position:relative;
	width:2em;
	height:2em;
	display:flex;
	margin:2em 1em;
	align-items:center;
	justify-content:center;
}
input[type="checkbox"] { position: absolute; opacity: 0; z-index: -1; }
input[type="checkbox"]+.checkmark {
	display:inline-block;
	width:2em;
	height:2em;
	background-color:#fcfcfc;
	border:2.5px solid #c3c3c3;
	border-radius:3px;
	display:flex;
	justify-content:center;
	align-items:center;
	cursor: pointer;
}
input[type="checkbox"]+.checkmark span {
	content:'';
	position:relative;/*
	position:absolute;
	border-bottom:3px solid;
	border-right:3px solid;
	border-color:#029f56;*/
	margin-top:-3px;
	transform:rotate(45deg);
	width:.75em;
	height:1.2em;
	opacity:0;
}
input[type="checkbox"]+.checkmark>span:after {
	content:'';
	position:absolute;
	display:block;
	height:3px;
	bottom:0;left:0;
	background-color:#029f56;
}
input[type="checkbox"]+.checkmark>span:before {
	content:'';
	position:absolute;
	display:block;
	width:3px;
	bottom:0;right:0;
	background-color:#029f56;
}
input[type="checkbox"]:checked+.checkmark { 
	animation:2s spin forwards;
}
input[type="checkbox"]:checked+.checkmark>span { 
	animation:1s fadein 1.9s forwards;
}
input[type="checkbox"]:checked+.checkmark>span:after {animation:.3s bottomslide 2s forwards;}
input[type="checkbox"]:checked+.checkmark>span:before {animation:.5s rightslide 2.2s forwards;}
@keyframes fadein {
	0% {opacity:0;}
	100% {opacity:1;}
}
@keyframes bottomslide {
	0% {width:0;}
	100% {width:100%;}
}
@keyframes rightslide {
	0% {height:0;}
	100% {height:100%;}
}
.logo {
	display:flex;
	flex-direction:column;
	align-items:center;
	height:100%;
	align-self:flex-end;
	margin:0.5em 1em;
}
.logo img {
	height:4em;
	width:4em;
}
.logo p {
	color:#9d9ba7;
	margin:0;
	font-size:1em;
	font-weight:700;
	margin:.4em 0 .2em 0;
}
.logo small {
	color:#9d9ba7;
	margin:0;
	font-size:.8em;
}
@keyframes spin {
	10% {
		width:0;
		height:0;
		border-width:6px;
	}
	30% {
		width:0;
		height:0;
		border-radius:50%;
		border-width:1em;
		transform: rotate(0deg);
		border-color:rgb(199,218,245);
	}
	50% {
		width:2em;
		height:2em;
		border-radius:50%;
		border-width:4px;
		border-color:rgb(199,218,245);
		border-right-color:rgb(89,152,239);
	}
	70% {
		border-width:4px;
		border-color:rgb(199,218,245);
		border-right-color:rgb(89,152,239);
	}
	90% {
		border-width:4px;
	}
	100% {
		width:2em;
		height:2em;
		border-radius:50%;
		transform: rotate(720deg);
		border-color:transparent;
	}
}
::selection {
	background-color:transparent;
	color:teal;
}
::-moz-selection {
	background-color:transparent;
	color:teal;
} </style>
<style>
.button-33 {
  background-color:white;
  border-radius: 100px;
  box-shadow: black;
  color:black;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-33:hover {
  box-shadow: black;
  transform: scale(1.05) rotate(-1deg);
}
body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 30%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
      
    }
  

    .login-form{
        margin-top: 40%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 30%;
    padding: 60px;
    color: #fff;
    margin-left:-50px;
}

.login-main-text h2{
    font-weight: 300;
    
}

.btn-black{
    background-color: #000 !important;
    color: #fff;

}
</style>
<html>
<body style="background-color: #222D32">
   <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="insertSignup.php" method="post">
               <div class="form-group">
               <h2 class="fw-bold mb-2 text-uppercase" style="color:white;font-weight:bold">Register</h2>
               <br><br>
			   
                     <label class="form-control-label">ENTER YOUR ID</label>
                     <input type="text" class="form-control" name="id" placeholder=" ID" required>
                  </div>

                  <div class="form-group">
                     <label class="form-control-label">ENTER YOUR NAME</label>
                     <input type="text" class="form-control" name="usrName" placeholder="NAME" required>
                  </div>
                  <div class="form-group">
                     <label class="form-control-label">ENTER YOUR PHONE</label>
                     <input type="text" class="form-control" name="phone" placeholder="PHONE" required>
                  </div>
                  <div class="form-group">
                     <label class="form-control-label">ENTER YOUR ADDRESS</label>
                     <input type="text" class="form-control" name="address" placeholder="ADDRESS" required>
                  </div>

                  <div class="form-group">
                     <label class="form-control-label">ENTER YOUR EMAIL</label>
                     <input type="text" class="form-control" name="email" placeholder="EMAIL" required>
                  </div>

                  <div class="form-group">
                     <label class="form-control-label">ENTER YOUR PASSWORD</label>
                     <input type="password" class="form-control" name="password" placeholder="PASSWORD" required>
                  </div>
                  <div class="captcha">
	<div class="spinner">
		<label>
        <!-- css for checkbox of reCaptcha -->
			<input type="checkbox" onclick="$(this).attr('disabled','disabled');" required>
			<span class="checkmark"><span>&nbsp;</span></span>
		</label>
	</div>
	<div class="text">
		I'm not a robot
	</div>
	<div class="logo">
		<img src="images/RecaptchaLogo.svg.png"/>
		<p>reCAPTCHA</p>
		<small>Privacy - Terms</small>
	</div>
</div>                  
<br>
<div class="col-lg-6 login-btm login-button">
<a href="index.php"><button type="submit" name="create" class="btn btn-outline-primary">REGISTER</button></a>   
               </form>
            </div>
         </div>
      </div>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="login.css"> -->

<div class="sidenav">
         <div class="login-main-text">
         <img src="images/llogoo.png" class="ok" width="500px"  hieght="650px" />
         </div>
      </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>
			Home
	</title>
</head>

<body class ="home">	
	<header class="home">
	
	<ul class="a">
			<li style="float:left" class="a">	<img src="{{asset('images/logo2.png')}}" alt="Italian Trulli"></li>
			<li style="float:right" class="a"><button class="home1" onclick="openCheckin()" type="button">SIGN UP</a></li>
			<li style="float:right" class="a"><button class="home1" onclick="openForm()" type="button">LOG IN</a></li>
			<li style="float:right" class="a"><a href="/Hire">HIRE ME</a></li>
			<li style="float:right" class="a"><a href="http://sidharthmalik.uta.cloud/">BLOG</a></li>
			<li style="float:right" class="a"><a href="/Mywork">WORKS</a></li>
			<li style="float:right" class="a"><a href="/recommendations">RECOMMENDATION</a></li>
  			<li style="float:right" class="a"><a href="/Skills">MY SKILLS</a></li>
  			<li style="float:right" class="a"><a href="/home">HOME</a></li> 	
		</ul>
	</header>
	
	<div class="wrapper">

		<h1 class="home">Welcome to my website</h1>
		<h2 class="home">
			It is a great pleasure for me to recieve your visit and that my professional information is of your liking and meets what you are looking for
		</h2>
		<a href="{{asset('resume\sidharth_resume.pdf')}}" download="resume">
		<button class="home" type="button" ><i class="fa fa-download"> Download Resume
		 </i>
		</button>
  
  </a>
		<div class="form-popup" id="myForm_l">
  		<form action="/web_ad" class="form-container" style="background-color: grey">
    	<h1><font style="font-family:'roboto', sans-serif;">Login</font></h1>

    	<label for="email"><b><font style="font-family:'roboto', sans-serif;">user</font></b></label><br>
    	<input type="text"  name="user" required><br>

    	<label for="psw"><b><font style="font-family:'roboto', sans-serif;">Password</font></b></label><br>
    <input type="password"  name="password" required>
<br>
    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>

  </form>

</div>
<div class="form-popup" id="myForm_s">

  		<form action="/web" method="get" class="form-container" style="background-color: grey">
    	<h1><font style="font-family:'roboto', sans-serif;">Sign Up</font></h1>
    	<label for="name"><b><font style="font-family:'roboto', sans-serif;">name</font></b></label><br>
    	<input type="text"  name="firstName" required><br>
    	
    	<label for="lastname"><b><font style="font-family:'roboto', sans-serif;">last name</font></b></label><br>
    	<input type="text"  name="lastName" required><br>

    	
    	<label for="email"><b><font style="font-family:'roboto', sans-serif;">email:</font></b></label><br>
    	<input type="text"  name="email" required><br>

    	<label for="email"><b><font style="font-family:'roboto', sans-serif;">user:</font></b></label><br>
    	<input type="text"  name="user" required><br>

    	<label for="psw"><b><font style="font-family:'roboto', sans-serif;">Password:</font></b></label><br>
    <input type="password"  name="password" required><br>

<label for="psw"><b><font style="font-family:'roboto', sans-serif;">Confirm password:</font></b></label><br>
    	<input type="password"  name="psw2" required><br>

    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeCheckin()">Cancel</button>
  </form>

</div>


	</div>
	<script>
function openForm() {
  document.getElementById("myForm_l").style.display = "block";
}
function openCheckin() {
  document.getElementById("myForm_s").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm_l").style.display = "none";
}
function closeCheckin() {
  document.getElementById("myForm_s").style.display = "none";

}
function openproject() {
  document.getElementById("myWork").style.display = "block";
}
function closeproject() {
  document.getElementById("myWork").style.display = "none";
}
</script>




</body>
<div class="form-popup" id="myWork">
      <form action="mailto:sidmlk07@gmail.com" method="post" class="form-container" style="background-color: grey">
      <h1><font style="font-family:'roboto', sans-serif;">Have a project you'd like to discuss?</font></h1>

      

      <label for="psw"><b><font style="font-family:'roboto', sans-serif;">message</font></b></label><br>
    <input type="text"  name="message" required>
<br>
    <button type="submit" class="btn">send</button>
    <button type="button" class="btn cancel" onclick="closeproject()">Close</button>
  </form>

</div>



<footer>
		
	<div class="footer">CONTACT ME<br>Have a project you'd like to discuss?<br><br><br><br><br>LUIS M. ALVAREZ<br>luis.malvarez@gmail.com</div>
		
	
	<ul class="a">
			
			
			
			
			
  			
  			<<li style="float:left" class="a"><a href="/home">HOME</a></li>
<li style="float:left" class="a"><a href="/Skills">MY SKILLS</a></li>
<li style="float:left" class="a"><a href="/recommendations">RECOMMENDATION</a></li>
<li style="float:left" class="a"><a href="">CUSTOMERS</a></li> 
<li style="float:left" class="a"><a href="/Mywork">WORKS</a></li>
                  <li style="float:left" class="a"><a href=>CONTACT FORM</a></li>
    </ul>
	
	

</footer>

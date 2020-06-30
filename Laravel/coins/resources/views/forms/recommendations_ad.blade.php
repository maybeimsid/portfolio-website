<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>
			Recommendation
	</title>
</head>

	<body class="head">
	<header class="home">
	
	<ul class="a">
			<li style="float:left" class="a">	<img src="images\logo2.png" alt="Italian Trulli"></li>
			<li style="float:right" class="a">
				<button class="home1" onclick="openCheckin()" type="button">SIGN UP</button></li>
			<li style="float:right" class="a"><button class="home1" onclick="openForm()" type="button">LOG IN</button></li>
		<li style="float:right" class="a"><a href="/Hire">HIRE ME</a></li>
			<li style="float:right" class="a"><a href="http://sidharthmalik.uta.cloud/">BLOG</a></li>
			<li style="float:right" class="a"><a href="/Mywork">WORKS</a></li>
			<li style="float:right" class="a"><a href="/recommendations">RECOMMENDATION</a></li>
  			<li style="float:right" class="a"><a href="/Skills">MY SKILLS</a></li>
  			<li style="float:right" class="a"><a href="/home">HOME</a></li> 	
		</ul>
	</header>
	
	<h1 class="rec">REFERENCES</h1>
   <h2 class="rec">
   <img class="rec" src="images\testimonials\yury.jpg" width="300" height="300">
   </h2>
   <div class="rec">

<p class='rec'>"As always best creative thinking for the best solution. Luis Miguel is by far the most professional knowledgeable provider I worked with. I will hire him again :)".<br>
 	<br>Yuri Jajitzky</p>
 </div>

<div class="form-popup" id="myForm_l">
  		<form action="/web_ad" class="form-container" style="background-color: grey">
    	<h1>Login</h1>

    	<label for="email"><b>user</b></label>
    	<input type="text"  name="user" required>

    	<label for="psw"><b>Password</b></label>
    <input type="password"  name="psw" required>

    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm_l").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm_l").style.display = "none";
}
</script>
</body>
</html>
<footer>
		
	<div class="footer">
		CONTACT ME<br>
		Have a project you'd like to discuss?<br><br><br><br><br>
		LUIS M. ALVAREZ<br>
	luis.malvarez@gmail.com
</div>
		
	
	<ul class="a">
  			
  			<li style="float:left" class="a"><a href="/home">HOME</a></li>
<li style="float:left" class="a"><a href="/Skills">MY SKILLS</a></li>
<li style="float:left" class="a"><a href="/recommendations">RECOMMENDATION</a></li>
<li style="float:left" class="a"><a href="">CUSTOMERS</a></li> 
<li style="float:left" class="a"><a href="/Mywork">WORKS</a></li>
	                <li style="float:left" class="a"><a href=>CONTACT FORM</a></li>
		</ul>
	

</footer>

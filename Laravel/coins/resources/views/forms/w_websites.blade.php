<?php
	$conn = mysqli_connect('localhost','root','','sidhart1_wdm');
    
 
	$query= 'select * from latest_work';
	$result= mysqli_query($conn,$query);
	
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	 <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>	
	<title>
				My Work
	</title>
</head>
<body class ="head">	
	<header class="home">
	
	<ul class="a">
			<li style="float:left" class="a">	<img src="images\logo2.png" alt="Italian Trulli"></li>
			<li style="float:right" class="a"><a href="#home">SIGN UP</a></li>
			<li style="float:right" class="a"><button class="home1" onclick="openForm()" type="button">LOG IN</a></li>
	<li style="float:right" class="a"><a href="/Hire">HIRE ME</a></li>
			<li style="float:right" class="a"><a href="http://sidharthmalik.uta.cloud/">BLOG</a></li>
			<li style="float:right" class="a"><a href="/Mywork">WORKS</a></li>
			<li style="float:right" class="a"><a href="/recommendations">RECOMMENDATION</a></li>
  			<li style="float:right" class="a"><a href="/Skills">MY SKILLS</a></li>
  			<li style="float:right" class="a"><a href="/home">HOME</a></li> 		
		</ul>
	</header>

	<div class='workEx'>
		<h1 class='title'>
			MY LATEST WORK
		</h1>
		<h4 class='head'>
		I am looking to expand my portfolio while I'm young Luiz M Alwarez<br>
		brings your content to life with stunning clarity 
	</h4>
		
	</div>
	<div class='buttons'>
		<button type="button" class="head">
			<a href='/Mywork'>
			
			
			SHOW ALL
			</a>

			</button>
			<button type="button" class="head">
				<a href='/w_websites'>
				
				WEBSITES
				</a>
			</button>
			<button type="button" class="head">
				<a href='/w_apps'>
				
				APPS
				</a>
			</button>
			<button type="button" class="head">
				<a href='/w_design'>
				
				DESIGN
				</a>
			</button>
			<button type="button" class="head">
				<a href='/w_photography'>
				
				PHOTOGRAPHY
				</a>
			</button>
	</div>
	<div class='work1'>
		<?php 
		while ($rows = mysqli_fetch_assoc($result)){
			if ($rows['w_type']=="websites"){
		?>
		<button type="button" onclick="openproject()" class="apps">
		<img src='images\app\app5.PNG' class='app'> 
		<h2 class='app' >
			<?php 
			echo $rows['w_name'];

			?>

		</h2>
		<p> <?php 
			echo $rows['w_type'];
		}}
			?>
		</p>
		</img>
		</button>


	</div>
	<div class="form-popup" id="myForm">
  		<form action="/web_ad" class="form-container" style="background-color: grey">
    	<h1><font style="font-family:'roboto', sans-serif;">Login</font></h1>

    	<label for="email"><b><font style="font-family:'roboto', sans-serif;">user</font></b></label><br>
    	<input type="text"  name="user" required><br>

    	<label for="psw"><b><font style="font-family:'roboto', sans-serif;">Password</font></b></label><br>
    <input type="password"  name="psw" required>
<br>
    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>

</div>

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


<div class="form-popup" id="myForm2">
  		<form action="/web_ad" class="form-container">
    	<h1><font style="font-family:'roboto', sans-serif;">check in</font></h1>
    	<label for="name"><b><font style="font-family:'roboto', sans-serif;">name</font></b></label><br>
    	<input type="text"  name="email" required><br>
    	
    	<label for="lastname"><b><font style="font-family:'roboto', sans-serif;">last name</font></b></label><br>
    	<input type="text"  name="email" required><br>

    	
    	<label for="email"><b><font style="font-family:'roboto', sans-serif;">email:</font></b></label><br>
    	<input type="text"  name="email" required><br>

    	<label for="email"><b><font style="font-family:'roboto', sans-serif;">user:</font></b></label><br>
    	<input type="text"  name="email" required><br>

    	<label for="psw"><b><font style="font-family:'roboto', sans-serif;">Password:</font></b></label><br>
    <input type="password"  name="psw" required><br>

<label for="psw"><b><font style="font-family:'roboto', sans-serif;">Repeat password:</font></b></label><br>
    	<input type="password"  name="email" required><br>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeCheckin()">Close</button>
  </form>

</div>


	
	<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function openproject() {
  document.getElementById("myWork").style.display = "block";
}
function openCheckin() {
  document.getElementById("myForm2").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function closeproject() {
  document.getElementById("myWork").style.display = "none";
}
function closeCheckin() {
  document.getElementById("myForm2").style.display = "none";
}
</script>
</body>	
<footer>
		
	<div class="footer">CONTACT ME<br>Have a project you'd like to discuss?<br><br><br><br><br>LUIS M. ALVAREZ<br>luis.malvarez@gmail.com</div>
		
	
	<ul class="a">
			
			
			
			
			
  			
  			<li style="float:left" class="a"><a href="/home">HOME</a></li>
<li style="float:left" class="a"><a href="/Skills">MY SKILLS</a></li>
<li style="float:left" class="a"><a href="/recommendations">RECOMMENDATION</a></li>
<li style="float:left" class="a"><a href="">CUSTOMERS</a></li> 
<li style="float:left" class="a"><a href="/Mywork">WORKS</a></li>
	                <li style="float:left" class="a"><a href=>CONTACT FORM</a></li>
		</ul>
	
	

</footer>

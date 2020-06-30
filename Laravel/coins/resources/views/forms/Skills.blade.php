<?php
	$conn = mysqli_connect('localhost','root','','sidhart1_wdm');
    
 
	$query= 'select * from education';
	$result= mysqli_query($conn,$query);
	$query1= 'select * from work_ex';
	$result1= mysqli_query($conn,$query1);
	
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	 <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>	
	<title>
				Skills
	</title>

</head>

<body class ="head">	
	<header class="home">
	
	<ul class="a">
			<li style="float:left" class="a">	<img src="images\logo2.png" alt="Italian Trulli"></li>
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
<div class='wrapper2'>
	<div class='skill'>
		<h1 class='skill'>
			SKILLS & EXPERTISE
		</h1>

		<h4 class='head'>
			Visual Designer Front-end Deveoper 3D Designer
		</h4>
		<img src='images\profile1.png' class ='skill'>
	</div>
	
	<div class="skill1">
		<img class='skill1' src='images\branding.JPG' class ='skill'>
		<h3 class='skill1'>Branding</h3>
		<p class='skill1'>Creating logos and posters for your company</p>

	</div>
	
	
	<div class="skill2">
		<img class='skill1' src='images\marketing.JPG' class ='skill'>
		<h3 class='skill1'>Marketing</h3>
		<p class='skill1'>Trend designs for a better experience of both images,logos and website</p>


	</div>
	<div class="skill3">
		<img class='skill1' src='images\design.JPG' class ='skill'>
		<h3 class='skill1'>Design</h3>
		<p class='skill1'>maintaining the quality and productivity in the works to please my client</p>


	</div>	
	<div class="skill4">
		<img class='skill1' src='images\programming.JPG' class ='skill'>
		<h3 class='skill1'>Programming</h3>
		<p class='skill1'>Developing applications and systems that meet the needs and streamline the work and experience of users.</p>


	</div>
	<div class="skill5">
		
		<h3>
		<font class='a'>Smart Digital Solutions</font>
		<font class='b'>A Front-End Developer</font>
		</h3> 

		<img class='skill2' src='images\device01.png' class ='skill'>
		
		<img class='skill2' src='images\device02.png' class ='skill'>
		<img class='skill2' src='images\device03.png' class ='skill'>

	</div>

	</div>
<div class='WorkEx'>
	<h1 class='skill'>
		WORK EXPERIENCE

	</h1>
	<h4 class='head'>
		I am looking to expand my portfolio while I'm young Luiz M Alwarez<br>
		brings your content to life with stunning clarity 
	</h4>

	<?php 
		while ($rows = mysqli_fetch_assoc($result1)){
		?>
	<div class='work'>
	<font class='month'>
	<?php echo $rows['st_month'];?> <?php echo $rows['end_month'];?><br>
	</font>
	<font class='year'>
	<?php echo $rows['st_year'];?>-<?php echo $rows['end_year'];?>
	</font><br><br>
	<div class='details'>
		<font class='company'>
		<?php echo $rows['work_company'];?>
		</font><br><br>
		<font class='title'>
		<?php echo $rows['work_position'];?>
		</font>

	</div>


	</div>
	<div class='description'>
		<font class='company'>
		<?php echo $rows['work_position'];?>
		</font><br>
		<font class='title'>
		<?php echo $rows['work_info'];?>
		</font>
	
	</div>

	<hr>
	<?php }?>
	

<div class='WorkEx'>
	<h1 class='skill'>
		EDUCATION
	</h1>
	<h4 class='head'>
		I am looking to expand my portfolio while I'm young Luiz M Alwarez<br>
		brings your content to life with stunning clarity 
	</h4>
	<?php 
		while ($rows = mysqli_fetch_assoc($result)){
		?>

	<div class='work'>
	<font class='month'>
<?php echo $rows['st_month'];?> <?php echo $rows['end_month'];?><br>
	</font>
	<font class='year'>
<?php echo $rows['st_year'];?>-<?php echo $rows['end_year'];?>
	</font><br><br>
	<div class='details'>
		<font class='company'>
		<?php echo $rows['edulevel'];?>
		</font><br><br>
		

	</div>

	</div>
	<div class='description'>
		<font class='company'>
		<?php echo $rows['stream'];?>
		</font><br>
		<font class='title'>
			<br>
		<?php echo $rows['school'];?>
		</font>
	
	</div>

	<hr>
	<?php }?>
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
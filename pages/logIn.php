<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<title>	The Holy Quran</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- *****Style Sheets***** -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/logIn.css">
	<!-- *****Scripts***** -->
	<script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>    

</head>
<body>

 <!-- ********************************************** Header **********************************************-->
<header>
	<div class="container-fluid header-outer-div">
		<div class="container header-inner-div">
			<div class="logo">
				<img class="logo-img img-responsive" src="../images/logo1.png" width="90" height="90">
					<span class="arabic" dir="rtl" lang="ar">القران الکریم</span>
					<!-- <span class="account">
						<a href="pages/signUp.php">Sign-Up</a> 
						<a href="pages/logIn.php">Log In</a> 
					</span> -->
			</div>
		</div>
	</div>
</header>
<div class="container-fluid">
	<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Your Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="register.php">Sign Up Here</a>
		</div>
	</div>
</div>
</div>
<!-- <div class="container-fluid">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
			Surah View
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-6">
						<ul class="list-group">
							<li class="list-group-item Surah-list">
								<a href="#">1 : Al-Fatihah (The Opening) 
								<span dir="rtl" lang="ar">سُورۃ الفاتِحۃ</span> </a> 
							</li>
							<li class="list-group-item Surah-list">
								<a href="#">2 : Al-Baqarah (The Cow)</a> 
							</li>
							<li class="list-group-item Surah-list">
								<a href="#">3 : Al-'Imran (The Family of Amran)</a> 
							</li>
							<li class="list-group-item Surah-list">
								<a href="#">4 : An-Nisa' (The Women)</a> 
							</li>
							<li class="list-group-item Surah-list">
								<a href="#">5 : Al-Ma'idah (The Food)</a> 
							</li>
							<li class="list-group-item Surah-list">
								<a href="#">6 : Al-An'am (The Cattle)</a> 
							</li>
							<li class="list-group-item Surah-list">
								<a href="#">7 : Al-A'raf (The Elevated Places)</a> 
							</li>
							<li class="list-group-item Surah-list">
								<a href="#">8 : Al-Anfal (Voluntary Gifts)</a> 
							</li>
							<li class="list-group-item Surah-list">
								<a href="#">9 : Al-Bara'at / At-Taubah(The Immunity)</a> 
							</li>

						</ul>	
					</div>





Yunus (Jonah)
Hud (Hud)
Yusuf (Joseph)
Ar-Ra'd (The Thunder)
Ibrahim (Abraham)
Al-Hijr (The Rock)
An-Nahl (The Bee)
Bani Isra'il (The Israelites)
Al-Kahf (The Cave)
Maryam (Mary)
Ta Ha (Ta Ha)
Al-Anbiya' (The Prophets)
Al-Hajj (The Pilgrimage)
Al-Mu'minun (The Believers)
An-Nur (The Light)
Al-Furqan (The Discrimination)
Ash-Shu'ara' (The Poets)
An-Naml (The Naml)
Al-Qasas (The Narrative)
Al-'Ankabut (The Spider)
Ar-Rum (The Romans)
Luqman (Luqman)
As-Sajdah (The Adoration)
Al-Ahzab (The Allies)
Al-Saba' (The Saba')
Al-Fatir (The Originator)
Ya Sin (Ya Sin)
As-Saffat (Those Ranging in Ranks)
Sad (Sad)
Az-Zumar (The Companies)
Al-Mu'min (The Believer)
Ha Mim (Ha Mim)
Ash-Shura (Counsel)
Az-Zukhruf (Gold)
Ad-Dukhan (The Drought)
Al-Jathiyah (The Kneeling)
Al-Ahqaf (The Sandhills)
Muhammad (Muhammad)
Al-Fath (The Victory)
Al-Hujurat (The Apartments)
Qaf (Qaf)
Ad-Dhariyat (The Scatterers)
At-Tur (The Mountain)
An-Najm (The Star)
Al-Qamar (The Moon)
Ar-Rahman (The Beneficent)
Al-Waqi'ah (The Event)
Al-Hadid (Iron)
					<div class="col-sm-6">
						
					</div>

				</div>
			</div>
		</div>
	</div>
</div> -->
	
</body>
</html>

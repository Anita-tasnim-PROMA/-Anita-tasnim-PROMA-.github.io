<?php
	require_once("connect.php");
	if(isset($_POST['login']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		if(!empty($user_id) and !empty($user_password))
		{
			$sql = "Select * from user_info where user_id = '$user_id' and user_password = '$user_password'";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) > 0)
				{
					$rows = mysqli_fetch_assoc($result);
					$_SESSION['login'] = 1;	
					$_SESSION['user_id'] = $rows["user_id"];					
					$_SESSION['user_name'] = $rows["user_name"];
					$_SESSION['user_email'] = $rows["user_email"];				
					header("Location:home.php");
				}
				else
					echo "<script>	alert('Your ID or Password not correct');		</script>";
			}
		}
		else
			echo "<script>	alert('You need both information for Login');		</script>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prtfolio</title>
    <!-- Unicons -->
    <script src="https://kit.fontawesome.com/6c653065a1.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->
    <!-- css -->
    
    <link rel="icon" href="img/fav.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
<!--
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<body>
<main class="main">
        <!-- ------------- HOME---------- -->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_content grid">
                    
                    <div class="home_img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                <image class="home_blob-img" x='36' y='9'  xlink:href="img/pt.jpg"/>
                            </g>
                        </svg>
                    </div>
                        <div class="home_data">
                            <h1 class="home_title">
                                Salam,<br>It's Anita
                            </h1>
                            <h3 class="home_subtitle">Login or Sign UP for further information</h3>

                            <a href="user_registration.php" target="_self" class="button button_flex " target="_self">
                                Signup for Free &nbsp <i class="fas fa-envelope "></i>
                            </a>
                        </div>

                </div>

        </section>
    </main>

<table width="100%" border="0" cellspacing="2" cellpadding="2">

  <tr>
    <td><div align="center">
	<form action="" method="post">
      <table width="40%" border="0" cellspacing="2" cellpadding="2" >
	  <div class="contact_inputs grid">
                    <div class="contact_content">
                        <label for="" class="contact_label">UserName</label>
                        <input type="text" placeholder="Name"  name="user_id" class="contact_input">
                    </div>

                    <div class="contact_content">
                        <label for="" class="contact_label">Password</label>
                        <input type="password"  placeholder="Password" name="user_password" class="contact_input">
                    </div>

        <tr>
          <td><div align="center">(<a href="user_registration.php" target="_self">New User Registration</a>)</div></td>
        </tr>
        <tr>
          <td>
            
            <div align="center">
              <input type="submit" name="login" value="Login" class="button button_flex">
              </i>
              </input>
              </div></td></tr>
      </table>
	  </form>
    </div></td>
  </tr>

</table>


</body>
</html>

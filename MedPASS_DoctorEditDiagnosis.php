<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: MedPASS_Welcome.php");
  exit;
}
include 'config.php';
if(isset($_POST['submit'])) {
	$illness = $_POST['diagnosis'];
	$pid = $_SESSION['curPID'];
	$query = "DELETE FROM affects WHERE Illness_Name ='$illness' AND PID ='$pid' ";
	
  if (mysqli_query($link, $query)) {
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
mysqli_close($link);
header("Location: MedPASS_DoctorManagePatientInfo.php");
exit();
}

	
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MedPASS</title>
  <link rel="stylesheet" href="DoctorFormat.css">
</head>

<body>
  <div class="wrapper">
    <header>
      <nav>
        <div class="logo">
          <h2>Med<span class="highlight">PASS</span></h2>
        </div>
        <div class="menu">
          <ul>
            <li><a href="MedPASS_DoctorHome.php">Home</a></li>
			<li><a href="MedPASS_DoctorManagePatientInfo.php">Back</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Undiagnose an Illness</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
	    This Patient's Illnesses:<?php 
                 include 'config.php';
                $sql = "SELECT Illness_Name FROM affects WHERE PID = '".$pid."'";
                $result = mysqli_query($link, $sql);
                if(!$result) {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }
                $str ="    ";
                while ($row = mysqli_fetch_array($result)) {
                $ill = $row['Illness_Name'];
                
                $str.= " ".$ill.",";
                }
                $str = substr($str,0,-1);
                echo $str;
                mysqli_close($link);
                ?><br>
	    
      <p>
      <form  method="POST" action="">
		<label for="diag">Illness Name:</label><br>
		<input type="text" id="diag" name="diagnosis" placeholder="Illness Name..">
		<br>
	  <input type="submit" name="submit" value="Submit Diagnosis"></a>
      </form>
      </p>

    </div>
  </section>
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>

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
			<li><a href="MedPASS_Welcome.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="showcase">
      <div class="patientSubPage">
        <h1>Your Practitioner Information</h1>
      </div>
    </section>
  </div>

  <section id"content">
    <div class="container contentSubPage">
      <p>
      Patient ID: <span style="padding: 0 40px">&nbsp;</span>   <br>
	  First Name: <span style="padding: 0 40px">&nbsp;</span>   <br>
	  Last Name: <span style="padding: 0 40px">&nbsp;</span>    <br>
	  Birthday: <span style="padding: 0 40px">&nbsp;</span>     <br>
	  Gender: <span style="padding: 0 40px">&nbsp;</span>   <br>
	  Address: <span style="padding: 0 40px">&nbsp;</span>      <br>
	  Phone Number: <span style="padding: 0 40px">&nbsp;</span>     <br>
	  Email: <span style="padding: 0 40px">&nbsp;</span>    <br>
      Rented Equipments: <span style="padding: 0 40px">&nbsp;</span>    <br>
      <br> <br>
      Illnesses: <br>
      <a href="MedPASS_DoctorAddIllness.php"><input type="submit" value="Add Illnesses"></a> 
      <a href="MedPASS_DoctorEditIllness.php"><input type="submit" value="Edit Illnesses"></a> <br>
      Diagnosis: <br>
      <a href="MedPASS_DoctorAddDiagnosis.php"><input type="submit" value="Add Diagnosis"></a>
      <a href="MedPASS_DoctorEditIllness.php"><input type="submit" value="Edit Illnesses"></a> <br>
      Treatments: <br>  
	  <a href="MedPASS_DoctorAddTreatment.php"><input type="submit" value="Add Treatments"></a> 
      <a href="MedPASS_DoctorEditIllness.php"><input type="submit" value="Edit Illnesses"></a>
      </p>

    </div>
  </section>
  
  
  <footer>
    <p>The MedPASS Organization, Copyright &copy; 2018</p>
  </footer>

</body>

</html>
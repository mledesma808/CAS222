<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ace In The Hole Registration</title>
  <meta name="description" content="Register with Ace In The Hole Multisports Events. You can register as an athlete or volunteer.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include '../includes/link.inc.html.php' ?>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
  <div id="wrapper">
      <?php include '../includes/nav.inc.html.php' ?>
    <main>
      <h1>Complete Your Registration</h1>
      <div id="source">All fields are required.</div>
      <div id="registration">
      <form class="registrationForm" method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        
        <label class="registrationLabel" for="name">Name:</label>
        <input type="text" name="myname" id="myname">

        <label class="registrationLabel" for="age">Age:</label>
        <input type="number" name="myage" id="myage" required>

        <label class="registrationLabel" for="myrole">Role:</label>
        <select size="1" name="myrole" id="myrole" required>
          <option>Choose Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
        </select>

        <label class="registrationLabel" for="myemail">Email:</label>
        <input type="email" name="myemail" id="myemail" required>

        <label class="registrationLabel" or="myemergencyContact">Emergency Contact Name:</label>
        <input type="text" name="myemergencyContact" id="myemergencyContact" required>

        <label class="registrationLabel" for="myemergencyContactPhone">Emergency Contact Phone:</label>
        <input type="tel" name="myemergencyContactPhone" id="myemergencyContactPhone" required>

        <label class="registrationLabel" for="mygender">Gender:</label>
        <select size="1" name="mygender" id="mygender" required>
          <option>Choose Your Gender</option>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="non-binary/other">Non-Binary/Other</option>
        </select>

        <label class="registrationLabel" for="mysaturdayEvents">Saturday Events:</label>
        <select size="1" name="mysaturdayEvents" id="mysaturdayEvents" required>
          <option>Choose Your Event</option>
          <option value="Long Course Triathlon">Long Course Triathlon</option>
          <option value="Olympic Triathlon">Olympic Triathlon</option>
          <option value="10K">10K</option>
          <option value="Half Marathon">Half Marathon</option>
        </select>

        <label class="registrationLabel" for="mysundayEvents">Sunday Events:</label>
        <select size="1" name="mysundayEvents" id="mysundayEvents" required>
          <option>Choose Your Event</option>
          <option value="Sprint Triathlon">Sprint Triathlon</option>
          <option value="Try-a-Tri">Try-a-Try</option>
          <option value="Splash n Dash">Splash n Dash</option>
        </select>

        <label class="registrationLabel" for="myaccommodations">Special Needs:</label>
        <textarea name="myaccommodations" id="myaccommodations" rows="3" cols="20" required></textarea>

        <input id="mysubmit" type="submit" value="Submit">
      </form>
      </div>
    </main>
      <?php include '../includes/footer.inc.html.php' ?>
  </div>
</body>
</html>
<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=mledesma_aith_db', 'mledesma_aith_user', '!iSnW394');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

if (isset($_POST['myname']) AND empty($_POST['honeypot']))
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $mynameVar = $_POST['myname'];
    $myageVar = $_POST['myage'];
    $myroleVar = $_POST['myrole'];
    $myemailVar = $_POST['myemail'];
    $myemergencyContactVar = $_POST['myemergencyContact'];
    $myemergencyContactPhoneVar = $_POST['myemergencyContactPhone'];
    $mygenderVar = $_POST['mygender'];
    $mysaturdayEventsVar = $_POST['mysaturdayEvents'];
    $mysundayEventsVar = $_POST['mysundayEvents'];
    $myaccommodationsVar = $_POST['myaccommodations'];
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO registration SET
          name = :name,
          age = :age,
          role = :role,
          email = :email,
          emergencyContact = :emergencyContact,
          emergencyContactPhone = :emergencyContactPhone,
          gender = :gender,
          saturdayEvents = :saturdayEvents,
          sundayEvents = :sundayEvents,
          accommodations = :accommodations';
      $s = $pdo->prepare($sql);
      $s->bindValue(':name', $_POST['myname']);
      $s->bindValue(':age', $_POST['myage']);
      $s->bindValue(':role', $_POST['myrole']);
      $s->bindValue(':email', $_POST['myemail']);
      $s->bindValue(':emergencyContact', $_POST['myemergencyContact']);
      $s->bindValue(':emergencyContactPhone', $_POST['myemergencyContactPhone']);
      $s->bindValue(':gender', $_POST['mygender']);
      $s->bindValue(':saturdayEvents', $_POST['mysaturdayEvents']);
      $s->bindValue(':sundayEvents', $_POST['mysundayEvents']);
      $s->bindValue(':accommodations', $_POST['myaccommodations']);

      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted registration: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
    include 'success.html.php';

    // Add an else to load the initial page if the initial (line 19) if statement is false
    
  }
else {
    include 'registration.html.php';
}
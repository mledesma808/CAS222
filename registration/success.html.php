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
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Name: <?php echo htmlspecialchars($mynameVar, ENT_QUOTES, 'UTF-8') ?><br>
                  Age: <?php echo htmlspecialchars($myageVar, ENT_QUOTES, 'UTF-8') ?><br>
                  Role: <?php echo htmlspecialchars($myroleVar, ENT_QUOTES, 'UTF-8') ?><br>
                  E-Mail: <?php echo htmlspecialchars($myemailVar, ENT_QUOTES, 'UTF-8') ?><br>
                  Emergency Contact: <?php echo htmlspecialchars($myemergencyContactVar, ENT_QUOTES, 'UTF-8') ?><br>
                  Emergency Contact Phone: <?php echo htmlspecialchars($myemergencyContactPhoneVar, ENT_QUOTES, 'UTF-8') ?><br>
                  Gender: <?php echo htmlspecialchars($mygenderVar, ENT_QUOTES, 'UTF-8') ?><br>
                  Saturday Events: <?php echo htmlspecialchars($mysaturdayEventsVar, ENT_QUOTES, 'UTF-8') ?><br>
                  Sunday Events: <?php echo htmlspecialchars($mysundayEventsVar, ENT_QUOTES, 'UTF-8') ?><br>
                  Special Accommodations: <?php echo htmlspecialchars($myaccommodationsVar, ENT_QUOTES, 'UTF-8') ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>
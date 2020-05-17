<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace In The Hole Contact Success</title>
        <meta name="description" content="Ace In The Hole Multisports Events offers events for Every Body.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ace In The Hole Multisports Events offers events for Every Body.">
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
                  Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8') ?><br>
                  Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8') ?><br>
                  Question: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8') ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acme web design | About</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta name="viewport" content="width=device-wisth">
    <meta name="description" content="responsive web device">
    <meta name="keywords" content="responsive web , affordable website, good website">
    <meta name="author" content="Evans Kiptarus kibet">
</head>
<body>
   <?php include 'header.php' ?>
    <section id="newsletter">
        <div class="container">
            <h1>Subscribe to our newletter</h1>
            <form action="process.php" method="post">
                <input type="email" name="email" placeholder="Enter email..">
                <button type="submit" class="button_1">Subscribe</button>
            </form>
        </div>
    </section>
    <section id="main">
        <div class="container">
            <article id="main-col">
                   <h1 class="page-title">About us</h1>
                   <p>Online Missing people is the independent web application meant to keep the records of the lost
                   and found people. The users or client needs to create and login into there personal website, then give the description
                   of the lost person(s) including there names, date of lost, location last seen etc. The reporter can be a victim or
                   any other person close to the victim. Be our part as we bring people connection.
                   </p>
                   <p>
                    If you like our site, click and subscribe to our channel
                   </p>
            </article>
            <aside id="sidebar">
                <div class="dark">
                <h3>What we do;</h3>
                <p>We do the software development using the modern technologies, besides that we develop the android apps</p>

                   </div>
            </aside>

        </div>

    </section>
       <?php include 'footer.php'?>

</body>
</html>
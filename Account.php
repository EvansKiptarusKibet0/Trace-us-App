<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acme web design | Services</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta name="viewport" content="width=device-wisth">

    <meta name="description" content="responsive web device">
    <meta name="keywords" content="responsive web , affordable website, good website">
    <meta name="author" content="Evans Kiptarus kibet">
    <script type="text/javascript">
        var pass1=document.getElementById('p1');
        var pass2=document.getElementById('p2');
        if(pass1==pass2){

        }else{
            
        }



    </script>
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
            <article id="main-cl">
                <h2><img src="img/icon-signup.jpg"></h2>
                <form method="post" action="db-registration">
                <div>
                    <label>First name:</label><br>
                    <input type="text" name="firstname" placeholder="Firstname.." required>
                </div>

                <div>
                    <label>Last name:</label><br>
                    <input type="text" name="lastname" placeholder="Lastname..">
                </div>

                <div>
                    <label>Username:</label><br>
                    <input type="text" name="username" placeholder="Username..">
                </div>

                <div>
                    <label>Email ID:</label><br>
                    <input type="email" name="email" placeholder="Email Id..">
                </div>

                <div>
                    <label>Password:</label><br>
                    <input type="password" id="p1" name="pass" placeholder="Password...">
                </div>

                <div>
                    <label>Confirm Password:</label><br>
                    <input type="password" id="p2" name="pass1" placeholder="Confirm password...">
                </div>
                <div>
                    <button type="submit" class="button_1">Submit</button>

                </div>
                <p><a href="LoginIndex">Already have an account?</a></p>
                </form>


            </article>

        </div>

    </section>
        <?php include 'footer.php'?>
    <p>footer page</p>

</body>
</html>

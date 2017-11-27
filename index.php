<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acme web design | Welcome</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta name="viewport" content="width=device-wisth">

    <meta name="description" content="responsive web device">
    <meta name="keywords" content="responsive web , affordable website, good website">
    <meta name="author" content="Evans Kiptarus kibet">

</head>
<body onload="getTime()">
    <?php include 'header.php' ?>
    <section id="showcase">
        <div class="container">
        <div id="clock_dynamic">
            <h2><u>Time now:</u></h2>
        <h2 id="clock"></h2>
        </div>
        <h1>People Connections</h1>
        <p>
            This is a unique professional platform for searching, reporting and locating the lost people. It
            enables easy tracing of the people lost or found records. It serves a greater role
        </p>
        <p><span class="highlight">Trace your people</span></p>

        </div>

    </section>
    <section id="newsletter">
        <div class="container">
            <h1>Subscribe to our newletter</h1>
            <form action="process_subscribe" method="POST">
                <input type="email" name="email" name="subscribe" placeholder="Enter email..">
                <button type="submit" class="button_1">Subscribe</button>

            </form>
        </div>

    </section>
    <section id="boxes">
        <div class="container">
        <div class="box">
            <div class="img_top">
            
            </div>
            <img src="img/lost_1.jpg"/>
          <h3><span class="highlight">Have Lost person(s)?</span></h3>
          <p>Through this platform you can get the lost person, create an account and report it to the admin</p>
        </div>

         <div class="box">
            <div class="img_top"></div>
             <img src="img/lost_2.jpg"/>
          <h3><span class="highlight">Know the Lost people?</span></h3>
          <p>To know the lost people, Login in to your account and view the reported lost people</p>
        </div>

         <div class="box">
             <div class="img_top"></div>
             <img src="img/lost_3.jpg"/>
          <h3><span class="highlight">Know found people?</a></h3>
          <p>To know the found people, login into your account and view the found people on the dashboard.</p>
        </div>
        </div>

    </section>
        <?php include 'footer.php'?>
</body>
</html>

<script type="text/javascript">
function getTime(){
var now=new Date();	
var h=now.getHours();
var m=now.getMinutes();
var s=now.getSeconds();

m=checkTime(m);
s=checkTime(s);

document.getElementById("clock").innerHTML=h + ":" + m + ":" + s;
setTimeout("getTime()",1000);
	
}
function checkTime(time){
	if(time<10){
		time="0" + time;
	}
	return time;
	
}
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container" align="center">
        <h1>Lucy's XKCD Style Password Generator</h1>
        <h2>Dynamic Web Applications Project 2</h2>
        <!--Description of what XKCD form is-->
        <br>
        <div=container>
            <p>Use this app to choose a secure password. According to <a href="http://xkcd.com/936" target="_blank"> <strong>this</strong> </a>XKCD comic, using a string of random words is secure and easy to remember. Find your new secure password here!</p>
    </div>
    <br>
    <!--Form begins-->
    <div="container" align="center">
        <form>
            <p>How many words do you want your password to be?</p>
            <form action="results.php" method="get">
                Quantity (between 1 and 4):
                <input type="number" name="quantity" min="1" max="4">
                <br>
                <!--Any numbers or special symbols?-->
                <form action="demo_form.asp">
                    <input type="checkbox" name="numbers" value="Numbers"> I want to include a number in my password
                    <br>
                    <input type="checkbox" name="special symbols" value="Symbol" checked>I want to include a special symbol
                    <br>
                    <br>
                    <input type="submit" value="submit">
                </form>
    </div>
     <br>
    <!--End of form-->
    <div = container class="word">
    <!--Password output-->
    Your password is: <pre>
<?php
print_r ($arrayOfWords);
?>
</pre>
 

    <!--End of password output-->
    </div>


                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
</body>

</html>
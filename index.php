<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Calculator</title>
</head>
<body>
<div class="input-form">
    <h1>WeKKKK!</h1>

    <ul>
        <h4>Available Standard:</h4>
        <li>Standard 1</li>
        <li>Standard 2</li>
        <li>Standard 3</li>
    </ul>
    
        <form action="calculator.php">
            <input class="inp-box" type="number" name="standard" id="Standard" placeholder="Enter Standard Here">
            <input class="Submit" type="Submit">
        </form>
        <div class="gen-text">Please click the link below after submitting</div>
        <br>
        <br>

    <?php 
        $standard=$_GET["standard"];
        if($standard==1){
            unset($_GET);
            echo'<a href="1.html">Link for Calculator for Standard 1</a>';
        }
        elseif($standard==2){
            unset($_GET);
            echo'<a href="2.html">Link for Calculator for Standard 2</a>';
        }
        elseif($standard==3){
            unset($_GET);
            echo'<a href="3.html">Link for Calculator for Standard 3</a>';
        }
        else{
            unset($_GET);
            echo'Link not found (No standard has been input or Standard Not Found)</h4>';
        }
    ?>
    </div>
</body>
</html>

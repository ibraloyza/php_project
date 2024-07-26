<?php
if (isset($_POST['submit'])){
    #success
}else{
    echo "your name is unavalibale  we coldn't find your userName";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_project</title>
</head>
<style>
    *{
        font-family: sans-serif;
    }
    .container{
        height: 24rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .holder{
        display: flex;
        flex-direction: column;
    }
    .hero{
        position: relative;
        left: 30%;
        top: 30px;
    }
    .holder input[type="text"]{
        height: 30px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 20px;
        border-bottom: 2px solid green;
    }
    .holder input[type="submit"]{
        display: block;
        height: 32px;
        font-size: 20px;
        color: #ffff;
        border: 1px solid black;
        width: 250px;
        outline: none;
        background:crimson;
    }
    .footer{
        position: relative;
        left: 400px;
        top: 50px;
    }
</style>
<body>
   <h1 class="hero">
   <?php
    echo "this user's name is ". $_POST['name']." ⚒️⛏️🔧"
    ?>
    
   </h1>
   <div class="container">
    <div class="holder">
        <form action="index.php" method="POST">
            <div class="wrapper">
                <input type="text" placeholder="Entar UserNAme ?" name="name" >
            </div>
            <br>
            <br>
            <div class="wrapper">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
    </div>
   </div>
   <h4 class="footer"> Made with <span❤️</span>by ibra loyza</h4>

</body>
</html>
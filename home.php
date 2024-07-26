<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_project</title>
</head>
<body>
    <?php

    //if (condition){
        // code to be excuted if the condation id true
   // }

    $x = 1;
    if($x<10){
        echo "hello world!";
    }
    
    class fruits{
        public function my_value(){
            return __CLASS__;
        }
    }
    $kiwi = new fruits();
    $banaana = new fruits();
    echo $kiwi-> my_value();
    echo $banaana-> my_value();


    ?>
    
</body>
</html>
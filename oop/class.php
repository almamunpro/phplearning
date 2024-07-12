<?php
    class fruit{
        public $name;
        public $color;
        function set_name($name){
            $this ->name = $name;
        }
        function get_name(){
            return $this -> name;
        }

    }
    $apple = new fruit();
    $banana = new fruit();
    $apple -> set_name("Apple");
    $banana -> set_name("Banana");

    echo " name: ". $apple -> get_name(). "<br>";
    echo " name: ". $banana -> get_name(). "<br>";
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The fruit program</h1>
</body>
</html>
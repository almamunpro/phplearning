<?php 
   if(isset($_GET["name"])|| isset($_GET["age"])){
    echo "hi " . $_GET["name"]. "<br/>";
    echo "Your age is " .$_GET['age']." years";
    exit();
   }

?>

<html>
    <body>
        <form action = "<?php $_PHP_SELf ?>" method="get">
            Name: <input type="text" name="name"><br>
            Age: <input type="text" name="age"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
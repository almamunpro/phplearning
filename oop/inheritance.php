<html>
    <body>
        <?php
        class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }

            public function intro(){
                echo "The fruit is {$this->name} and the color is {$this->color}";
            }

        
        }
        class Cherry extends Fruit {
            public function message(){
                echo "Is Cherry a fruit or a berry?";
            

            }
        }
        $cherry = new Cherry("cherry", "red",20);
        $cherry->message();
        $cherry->intro();

        ?>
    </body>
</html>



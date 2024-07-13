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
            public $weight;
            public function __construct($name, $color, $weight) {
               
                $this->name = $name;
                $this->color = $color;
                $this->weight = $weight;
            }

            public function intro(){
                echo"This fruit is {$this->name} and the weight is {$this->weight} gram.\n";
            
            }
        }
        $cherry = new cherry ("cherry", "bright pink", 20);
        $cherry -> intro();

        ?>
    </body>
</html>
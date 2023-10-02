<?php
require_once './Helper/create.php';
?>


<?php
    class MathQuestion extends Helper
    {
        public function createQuestion(): string
        {
            echo  "Question is :";
            
            return  "";
        }
        public function createAnsware(): string
        {
            echo "Answare is :";
            return "";
        }
        public function createSolution(): bool
        {
            return true || false;
        }
    }

?>


<?php
require_once './Helper/create.php';
?>


<?php
    class MathQuestion extends Question
    {
        public function createQuestion(): string
        {
            echo  "Question is :";
            echo "What of this Therms are 'Access Modifier' in PHP ?</br></br>";
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


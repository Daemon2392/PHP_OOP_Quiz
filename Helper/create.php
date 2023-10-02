<?php

    abstract class Helper
    {
        //Propreties
        public $question;
        public $answare;
        public $solution;


        //Constructor
        public function __constructor($question, $answare, $solution)
        {
            $this -> question = $question;
            $this -> answare = $answare;
            $this -> solution = $solution;
        }

        //Methods
        
        //Method-Question
        abstract public function createQuestion(): string; 
        

        //Get
        public function getQuestion()
        {
            return $this -> question;
        }

        //Method-Answare
        abstract public function createAnsware(): string;

        public function getAnsware()
        {
            return $this -> answare;
        }

        //Method-Solution
        abstract public function createSolution(): bool;

        //Get
        public function getSolution()
        {
            return $this -> solution; 
        }
    }

?>
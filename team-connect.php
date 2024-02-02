<?php
class Team_connect{
        private $ID;
        private $firstName;
        private $lastName;
        private $pozita;
        private $pershkrimi;
        private $image ;
        private $modifikim;
        public function __construct( $firstName,$lastName,$pozita,$pershkrimi, $image, $modifikim){
            $this->firstName=$firstName;
            $this->lastName=$lastName;
            $this->pozita=$pozita;
            $this->pershkrimi=$pershkrimi;
            $this->image=$image;
            $this->modifikim=$modifikim;
        }
        public function getFName(){
            return $this->firstName;
        }
        public function setFName($firstName){
            $this->firstName = $firstName;
        }
        public function getLName(){
            return $this->lastName;
        }
        public function setLName($lastName){
            $this->lastName = $lastName;
        }
        public function getPozita(){
            return $this->pozita;
        }
        public function setPozita($pozita){
            $this->pozita = $pozita;
        }
        public function getPershkrimi(){
            return $this->pershkrimi;
        }
        public function setPershkrimi($pershkrimi){
            $this->pershkrimi = $pershkrimi;
        }
        public function getImage(){
            return $this->image;
        }
        public function setImage($image){
            $this->image = $image;
        }
        public function getModifikim(){
            return $this->modifikim;
        }
        public function setModifikim($modifikim){
            $this->modifikim = $modifikim;
        }

        public function __toString(){
            return "Team: ".$this->firstName."dhe".$this->lastName." dhe pershkrimi ".$this->pershkrimi;
        }

    }
?>           
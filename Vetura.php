<?php
    class Vetura{
        private $ID; //AutoIncrement
        private $Emri;
        private $VitiProdhimit;
        private $Km;
        private $Motori;
        private $Hp;
        private $Cmimi;

        public function __construct($Emri, $VitiProdhimit, $Km, $Motori, $Hp, $Cmimi){
            $this->Emri=$Emri;
            $this->VitiProdhimit=$VitiProdhimit;
            $this->Km=$Km;
            $this->Motori=$Motori;
            $this->Hp=$Hp;
            $this->Cmimi=$Cmimi;
        }

        public function getEmri(){
            return $this->Emri;
        }
        public function setEmri($Emri){
            $this->Emri = $Emri;
        }

        public function getVitiProdhimit(){
            return $this->VitiProdhimit;
        }
        public function setVitiProdhimit($VitiProdhimit){
            $this->VitiProdhimit = $VitiProdhimit;
        }

        public function getKm(){
            return $this->Km;
        }
        public function setKm($Km){
            $this->Km = $Km;
        }

        public function getMotori(){
            return $this->Motori;
        }
        public function setMotori($Motori){
            $this->Motori = $Motori;
        }

        public function getHp(){
            return $this->Hp;
        }
        public function setHp($Hp){
            $this->Hp = $Hp;
        }

        public function getCmimi(){
            return $this->Cmimi;
        }
        public function setCmimi($Cmimi){
            $this->Cmimi = $Cmimi;
        }

        public function __toString(){
            return "Vetura: ".$this->Emri." dhe viti i prodhimit ".$this->VitiProdhimit;
        }
    }
?>
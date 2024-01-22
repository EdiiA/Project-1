<?php
    include_once('DatabaseConnection.php');

    class VeturaRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertVetura($vetura){
            $conn = $this->connection;

            $emri = $vetura->getEmri();
            $vitiProdhimit = $vetura->getVitiProdhimit();
            $km = $vetura->getKm();
            $motori = $vetura->getMotori();
            $hp=$vetura->getHp();
            $cmimi = $vetura->getCmimi();

            $sql = "INSERT INTO Vetura(Emri, VitiProdhimit, Km, Motori, HP, Cmimi) VALUES (?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $vitiProdhimit, $km, $motori,$hp, $cmimi]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        // public function getAllVetura(){
        //     $conn = $this->connection;

        //     $sql = "SELECT * FROM Vetura";
        //     $statement = $conn->query($sql);

        //     $vetura = $statement->fetchAll();
        //     return $vetura;
        // }


        //Pjesa tjeter e funksioneve CRUD: update 
        //dergohet parametri ne baze te cilit e identifikojme studentin (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editVetura($id, $emri, $vitiProdhimit, $km, $motori,$hp, $cmimi){
            $conn = $this->connection;
            $sql = "UPDATE Vetura SET Emri=?,VitiProdhimit=?, Km=?, Motori=?, Hp=?, Cmimi=? WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $vitiProdhimit, $km, $motori,$hp, $cmimi]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        //delete

        function deleteVetura($id){
            $conn = $this->connection;

            $sql = "DELETE FROM Vetura WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr studentin ne baze te Id

        function getVeturaById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM Vetura WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $vetura=$statement->fetch();

            return $vetura;
        }

    }

?>
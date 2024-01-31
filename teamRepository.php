<?php
    include_once('DatabaseConnection.php');


    class TeamRepository{

        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }
        public function insertTeam($team){
            $conn = $this->connection;

            $firstName = $team->getFName();
            $lastName = $team->getLName();
            $pozita = $team->getPozita();
            $pershkrimi = $team->getPershkrimi();
            $img = $team->getImage();
           

            $sql = "INSERT INTO team (firstname, lastname, pozita ,pershkrimi ,img) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$firstName, $lastName, $pozita, $pershkrimi, $img]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }
        public function getAllTeam(){
            $conn = $this->connection;

            $sql = "SELECT * FROM team";
            $statement = $conn->query($sql);

            $team = $statement->fetchAll();
            return $team;
        }
        public function editTeam($id, $firstName, $lastName, $pozita, $pershkrimi,$image){
            $conn = $this->connection;
            $sql = "UPDATE team SET firstname=?, lastname=?, pozita=?, pershkrimi=?, img=? WHERE ID=?";


            $statement = $conn->prepare($sql);
            $statement->execute([$firstName, $lastName, $pozita, $pershkrimi,$image, $id]);
            echo "<script>alert('U ndryshua me sukses!')</script>";

        }
        function deleteTeam($id){
            $conn = $this->connection;

            $sql = "DELETE FROM team WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }
        function getTeamById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM team WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $team=$statement->fetch();

            return $team;
        }

    }
?>
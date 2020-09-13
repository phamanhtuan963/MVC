<?php
    require_once ("model/Game.php");
    class Database{
        public function getGameList(){
            //$gamelist = array();
            //$gamelist[] = new Game("Adventure space", 10000, "image", "producer");

            //return $gamelist;
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mvc";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT * FROM mvc";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["title"]. $row["price"]. '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>' . $row["producer"].  "<br>";
                }
            } else {
                echo "0 results";
            }
            return $row;
        }

        public function getGame($title){

            $gamelist = $this->getGameList();
            foreach ($gamelist as $key => $game){
                if($game->title== $title){
                    return $game;
                }
            }


        }
    }
?>
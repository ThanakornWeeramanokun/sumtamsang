<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'u503914755_admin');
    define('DB_PASS', 'YUIygvijn458');
    define('DB_NAME', 'u503914755_sumtamsang');

    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }
        //Insert of mySQL DB Name: food_lists
        public function insert_food($foodname, $foodtype, $calorie, $img) {
            $result = mysqli_query($this->dbcon,
            "INSERT INTO food_lists(foodname, foodtype, calorie, img)
            VALUES('$foodname', '$foodtype', '$calorie', '$img')");
            return $result;
            
        }
        //Fetch data of mySQL DB Name: food_lists
        public function fetchdata_food() {
            $result = mysqli_query($this->dbcon,"SELECT * FROM food_lists");
            return $result;
        }
        //Fetch one record of mySQL DB Name: food_lists
        public function fetchonerecord_food($foodid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM food_lists WHERE id = '$foodid'");
            return $result;
        }
        //Update of mySQL DB Name: food_lists
        public function update_food($foodname, $foodtype, $calorie, $img, $foodid) {
            $result = mysqli_query($this->dbcon, "UPDATE food_lists SET
                foodname = '$foodname',
                foodtype = '$foodtype',
                calorie = '$calorie',
                img = '$img'
                WHERE id = '$foodid'
            ");
            return $result;
        }
        
        public function update_food_noimg($foodname, $foodtype, $calorie, $foodid) {
            $result = mysqli_query($this->dbcon, "UPDATE food_lists SET
                foodname = '$foodname',
                foodtype = '$foodtype',
                calorie = '$calorie'
                WHERE id = '$foodid'
            ");
            return $result;
        }
        
        //Delete of mySQL DB Name: food_lists
        public function delete_food($foodid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM food_lists WHERE id = '$foodid'");
            return $deleterecord;
        }

        //Insert of mySQL DB Name: users
        public function insert_member($firstname, $lastname, $email, $password, $urole) {
            $result = mysqli_query($this->dbcon,
            "INSERT INTO users(firstname, lastname, email, password, urole)
            VALUES('$firstname', '$lastname', '$email', '$password', '$urole')");
            return $result;
            
        }
        //Fetch data of mySQL DB Name: users
        public function fetchdata_member() {
            $result = mysqli_query($this->dbcon,"SELECT * FROM users");
            return $result;
        }
        //Fetch one record of mySQL DB Name: users
        public function fetchonerecord_member($memberid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM users WHERE id = '$memberid'");
            return $result;
        }
        //Update of mySQL DB Name: users
        public function update_member($firstname, $lastname, $email, $urole, $memberid) {
            $result = mysqli_query($this->dbcon, "UPDATE users SET
                firstname = '$firstname',
                lastname = '$lastname',
                email = '$email',
                urole = '$urole'
                WHERE id = '$memberid'
            ");
            return $result;
        }
        //Delete of mySQL DB Name: users
        public function delete_member($memberid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM users WHERE id = '$memberid'");
            return $deleterecord;
        }
   
    }
    
    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
?>
<?php

class ShoppingList {

    // declare private field
    private $mysqli;

    // declare constructor
    function __construct() {
        // connect to filmcollector MySQL database
        // assign connection to field
        $this->mysqli = new mysqli('localhost:3306', 'root', '', 'shoppinglist');
    }

    // declare destructor
    function __destruct() {
        // close connection to filmcollector MySQL database
        $this->mysqli->close();
    }

    // declare getter 
    public function get_mysqli() {
        return $this->mysqli;
    }

    function select_list() {

        $listid = 0;

        //create SELECT statement to retrieve data from the user table
        $sql = "SELECT * "
                . "FROM list ";


        //execute query
        $retval = $this->mysqli->query($sql);
        return $retval;
        
    }

    public function create_list($name, $store, $date) {

        // format select statement as a String
        $sql = "INSERT INTO list (List_Name, List_Store, List_Date) 
                VALUES ('$name', '$store', '$date')";

        // execute select statement
        // assign return value to variable
        // allow only one query to be executed
        // at a time for security
        $retval = $this->mysqli->query($sql);

        //return result of executing select statement
        return $retval;
    }

}
?>
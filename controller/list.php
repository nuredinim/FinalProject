<?php

// include class.actor.php model file
require_once __DIR__ . '/../model/shopping.list.php';

// specify content type of data that will be
// sent to the actor Javascript file
header('Content-type: text/html');

function select_list() {

    // create an Instructor object
    $list = new ShoppingList();

    // call select_actors method
    $retval = $list->select_list();

    // if select statement fails, retval will be false
    if (!$retval) {
        // format error message in an
        // html paragraph element
        echo '<p class="help-block">Could not execute select statement : ' . $list->get_mysqli()->errno . '</p>';
    } else {
        if ($retval->num_rows != 0) {
            // format the data contained in retval in
            // html table row elements
            while ($row = $retval->fetch_array(MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>";
                echo $row["List_Name"];
                echo "</td>";
                echo "<td>";
                echo $row["List_Store"];
                echo "</td>";
                echo "<td>";
                echo $row["List_Date"];
                echo "</td>";
                echo "</tr>";
            }
        } else {
            //$html .= '<tr><th scope="row">' . $i . '</th>';
            echo "No Lists Found";
        }
    }
}

function create_list($name, $store, $date){
    $list = new ShoppingList();

    // call select_actors method
    $retval = $list->create_list($name, $store, $date);

    // if select statement fails, retval will be false
    if (!$retval) {
        // format error message in an
        // html paragraph element
        echo '<p class="help-block">Could not execute insert statement : ' . $list->get_mysqli()->errno . '</p>';
    } else {
        echo 'Shopping List Created';
    }
}
?>
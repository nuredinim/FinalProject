<?php

// include class.actor.php model file
require_once __DIR__ . '/../model/shopping.list.php';

// specify content type of data that will be
// sent to the actor Javascript file
header('Content-type: text/html');

function select_list() {

    // create an Instructor object
    $list = new List();

    // call select_actors method
    $retval = $list->select_list();

    // if select statement fails, retval will be false
    if (!$retval) {
        die('Could not execute select statement:' . mysqli_errno($link));
    } else {
        while ($row = $retval->fetch_array(MYSQLI_ASSOC)) {
            $list = $row['listid'];
            return $listid;
        }
    }
}

?>
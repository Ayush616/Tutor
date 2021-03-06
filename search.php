<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'tutor');


if (isset($_GET['term'])){
    $return_arr = array();

    try {
        $conn= mysqli_connect('localhost', 'root', '', 'tutor');
        
        $stmt = $conn->prepare('SELECT City FROM city WHERE City LIKE :term');
        $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
        
        while($row = $stmt->fetch()) {
            $return_arr[] =  $row['City'];
        }

    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }


    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}

?>
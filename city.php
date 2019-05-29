<?php include "connection.php";

$city = $_POST['query'];

    
    $query = "SELECT * FROM city WHERE City LIKE '%$city%' ORDER BY city ASC";
    $result = mysqli_query($connection, $query);
    
    $cities = array();
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result))  
           {  
                array_push($cities, $row['City']);
           }  
      }  
      else  
      {  
           $data['value'] = '<li>City Not Found</li>';  
      }  
      
      echo json_encode($cities); 

?>
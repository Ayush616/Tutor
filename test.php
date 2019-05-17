<?php include "connection.php";

$city = $_POST['query'];

    
    $query = "SELECT * FROM city WHERE City LIKE '%$city%' ORDER BY city ASC";
    $result = mysqli_query($connection, $query);
    
    $output = '';
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["City"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>City Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output; 

?>
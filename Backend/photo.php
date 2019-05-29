
<?php include "connection.php";


if($_POST['submit']){
    $name = $_POST['username'];
    $file = $_FILES['file'];    //It is an array which contains informations obout the file.
    
   $file_name = $file['name'];
    $file_type = $file['type'];
    $filetmp = $file['tmp_name'];
    $file_error = $file['error'];
    
    //details
    
    $qual = $_POST['qualification'];
    $exp = $_POST['experience'];
    $location = $_POST['location'];
    $sub = $_POST['subject'];
    
    $file_extension = explode('.', $file_name);
    $file_check = strtolower($file_extension[1]);
    
    $file_ext_mandat = array('jpg', 'png', 'jpeg');
    
    if(in_array($file_check, $file_ext_mandat)){
        $destination = 'file/'.$file_name;
        move_uploaded_file($filetmp, $destination);
        
    
$query = "INSERT INTO details(name, image, Qualification, experience, subject, Location)";
$query .= "VALUES ('$name', '$destination', '$qual', '$exp', '$sub', '$location')";

mysqli_query($connection, $query);
    }}
    ?>


  
 <form action="" method="post" enctype="multipart/form-data">
       Username:
       <input type="text" name="username"><br>
       Qualification:
       <input type="text" name="qualification"><br>
       Experience:
       <input type="number" name="experience"><br>
       Subject Interested:
       <input type="text" name="subject"><br>
       Location:
     <input type="text" name="location"><br>
       <input type="file" name="file"><br>
       <input type="submit" name="submit">
          
 </form>
    
 <form action="detail.php" method="post">
     <input type="submit" name="show" value="show">
 </form>

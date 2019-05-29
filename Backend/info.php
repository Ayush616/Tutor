
<?php include "connection.php"; 

    $q = "SELECT * FROM details";
        $result = mysqli_query($connection, $q);        
        
        while($row = mysqli_fetch_array($result)){ ?>

    

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Test</title>
    
    <style>
        #test{
          width: 800px;
          background-color: white;
          height: auto;
          padding: 10px;
            margin: 20px;
        }  
        
        body{
            background-color: #F5F5F5;
            font-family: Adobe Caslon Pro;
        }
    </style>
  </head>
  <body>
     <div class="container">
     <div id="test">
        
        <div class="row">
           <div class="col-lg-2">
               <img src="<?php echo $row['image']; ?>" alt="" width="100">
           </div>
           
           
            <div class="col-lg-10">      
                   <div class="row">
                      <h3><?php echo $row['name']; ?></h3>
                   </div>
                   
                   <div class="row" style="padding-Top: 10px;">
                       <div class="col-lg-4">
                          <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row['location']; ?>
                           
                       </div>
                       
                       <div class="col-lg-4">
                         <i class="fa fa-graduation-cap" aria-hidden="true"></i> <?php echo $row['Qualification']; ?>
                       </div>
                       
                       <div class="col-lg-4">
                          <i class="fa fa-database" aria-hidden="true"></i> <?php echo $row['experience']; ?> yrs.
                           
                       </div>
                   </div>
                   
                   <div class="row" style="padding-Top: 10px;">
                      
                      <p>
                          <?php echo $row['description']; ?>
                      </p>
                   </div>
             </div>
             
             
             
             
         </div>
     </div>
     
     </div>
    <?php }?>
     
     
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
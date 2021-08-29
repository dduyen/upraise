<?php
      include"./header.php"
?>
<style>
  #user{
    background-color:red
  }
 
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News</title>
  <style>
      .news{
        
      }
  </style>
</head>
<body>
<h1 class="text-center mt-3" style="margin-top:5%;"> Register_study</h1>



      <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
              
          </div>
      </div>
      <table class="table table-striped">
      <thead>
            <tr>
              
              <th scope="col">Name</th>
              <th scope="col">Sex</th>
              <th scope="col">Birthday</th>
              <th scope="col">Telephone</th>
              <th  scope="col">Address</th>
            <th  scope="col">School Name</th>
              <th scope="col">Education Level</th>
              <th scope="col">Japanese Level</th>
              <th scope="col">Time Come</th>
              <th scope="col">Card</th>
              <th scope="col">End  Time Stay</th>
             
            </tr>
        </thead>
        <tbody>
      <?php
        include ("../connect.php");
        $sql= "SELECT * FROM  register_study";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count>0){
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr  style="width:100%; ">
            
                  <td ><?php echo $row['name'] ?></td>
                  <td><?php echo $row['sex'] ?></td>
                  <td><?php echo $row['birthday'] ?></td>
                  <td><?php echo $row['telephone'] ?></td>
                  <td ><?php echo $row['address'] ?></td>
                  <td><?php echo $row['school_name'] ?></td>
                  <td><?php echo $row['education_level'] ?></td>
                  <td ><?php echo $row['japanese_level'] ?></td>
                  <td><?php echo $row['time_come'] ?></td>
                  <td><?php echo $row['card'] ?></td>
                  <td ><?php echo $row['time_stay'] ?></td>
                
            </tr>
            <?php
          }
        }
      ?>
      
          </tbody>
      </table>
    </div>


   
    
        

</body>
</html>
<?php 

?>
     

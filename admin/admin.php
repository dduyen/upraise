<?php
      include"./header.php"
?>
<style>
  #admin{
    background-color:red
  }
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
<h1 class="text-center mt-3" style="margin-top:5%;"> Admin</h1>
<button  class="bg-primary" style="margin-bottom:100px;"><a href="./add_admin.php">Add admin</a></button>
      <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
              
          </div>
      </div>
      <table class="table table-striped">
      <thead>
            <tr>
              <th  scope="col">ID</th>
              <th scope="col">Fullname</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
      <?php
        include ("../connect.php");
        $sql= "SELECT * FROM  admin";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count>0){
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr  style="width:100%; ">
              <th  scope="row"><?php echo $row['id'] ?></th>
                  <td ><?php echo $row['fullname'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['pass_word'] ?></td>
                  
                  <td>
                    <form action="" method="get">
                      <div class="btn-group mr-2" role="group" aria-label="Third group">
                          <button type="button" class="btn btn-warning" name="btndelete"><a style="color:black" href="delete_admin.php?id=<?php echo $row['id']; ?>">Delete</a></button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Four group">
                          <button type="button" class="btn btn-warning" name="btndelete"><a style="color:black" href="update_admin.php?id=<?php echo $row['id']; ?>">Update</a></button>
                        </div>
                    </form>
                      
                    
                  </td>
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
     

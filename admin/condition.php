<?php
      include"./header.php"
?>
<style>
  #news{
    background-color:red
  }
  td ,th {
    
    display:inline-block;
    width:10%;
    word-wrap: break-word;
  }
  tr{
    border:1px solid black;
    display:block;
    width:100%;
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
<h1 class="text-center mt-3" style="margin-top:5%;"> Condition</h1>

<button class="bg-primary" style="margin-bottom:100px;"><a href="./add_condition.php">Add  Condition</a> </button>

      <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
              
          </div>
      </div>
      <table class="table table-striped">
      <thead>
            <tr>
           
              <th scope="col">Title</th>
              <th scope="col">Link</th>
              
           
            </tr>
        </thead>
        <tbody>
      <?php
        include ("../connect.php");
        include"./login_check.php";
        $sql= "SELECT * FROM  news where id_category =1";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count>0){
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr  style="width:100%; ">
  
                  <td ><?php echo $row['title'] ?></td>
                  <td><?php echo $row['link'] ?></td>
                 
                  <td>
                    <form action="" method="get">
                      <div class="btn-group mr-2" role="group" aria-label="Third group">
                          <button type="button" class="btn btn-warning" name="btndelete"><a style="color:black" href="delete_condition.php?id=<?php echo $row['id']; ?>">Delete</a></button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Four group">
                          <button type="button" class="btn btn-warning" name="btndelete"><a style="color:black" href="update_condition.php?id=<?php echo $row['id']; ?>">Update</a></button>
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
     

<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div class="container-fluid">
        <div class=" bg-secondary ">
            <form class="form-inline ">
                <a class="navbar-brand mx-5 bg-white  href="#"> <img src="../imgs/i_logo.png"  width="210" height="100"  alt=""></a>
                <h6 class="  text-white  ">日本留学安心情報サイト「アプライズ」は、アジアの将来を担う人材の創出・育成を通じて産業発展に貢献します。</h6>

            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <div class="h1 d-flex justify-content-center"> Add Condition</div>
</html>

<form class="container" method="POST">
  <div class="form-group">
    <label for="title">Title</label>
    <textarea class="form-control" name="title" id="title" rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="link">Link</label>
    <textarea class="form-control" name="link"  rows="2"></textarea>
  </div>
 
  <button type="submit" name="btnInsert" class="btn btn-primary">Insert</button>
</form>
<?php
?>
<?php
    include("../connect.php");
    include"./login_check.php";
    if(isset($_POST['btnInsert'])){
      $title = $_POST['title'];
      $link = $_POST['link'];
      if($title != '' ){
        $sql = "INSERT INTO news set
        title = '$title',
        link = '$link',
        id_category = '1'
         ";
        $result = mysqli_query($conn, $sql);
        if($result == true){
          header('location:'.SITEURL.'admin/condition.php');
        }}
      else{
        echo "error " ;
      }
     
    }
   
?>


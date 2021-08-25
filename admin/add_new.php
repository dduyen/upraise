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

  <div class="h1 d-flex justify-content-center"> Add Article</div>
</html>

<form class="container" method="POST">
  <div class="form-group">
    <label for="title">Title</label>
    <textarea class="form-control" name="title" id="title" rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="img">Image Content</label>
    <textarea class="form-control" name="img" id="img" rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="link">Link</label>
    <textarea class="form-control" name="link"  rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="date_upload">Date</label>
    <textarea class="form-control" name="date_upload"  rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <textarea class="form-control" name="status" id="status" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="summary">Summary</label>
    <textarea class="form-control" name="summary" id="summary" rows="5"></textarea>
  </div>
  <button type="submit" name="btnInsert" class="btn btn-primary">Insert</button>
</form>
<?php
?>
<?php
    include("../connect.php");
    if(isset($_POST['btnInsert'])){
      $title = $_POST['title'];
      $img_content = $_POST['img'];
      $link = $_POST['link'];
      $date_upload = $_POST['date_upload'];
      $status = $_POST['status'];
      $summary = $_POST['summary'];
      if($title != '' &&  $img_content!='' &&  $link != '' &&  $date_upload!='' && $status != '' &&  $summary!=''  ){
        $sql = "INSERT INTO news set
        title = '$title',
        img_content = '$img_content',
        link = '$link',
        date_upload ='$date_upload',
        status = '$status',
        summary = '$summary'
         ";
        $result = mysqli_query($conn, $sql);
        if($result == true){
          header('location:'.SITEURL.'admin/news.php');
        }}
      else{
        echo "<h1> Vui lòng nhập  đầy đủ dữ liệu</h1> " ;
      }
     
    }
   
?>


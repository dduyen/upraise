
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- version 4.6 -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        .nav-item{
           margin-right:2%;
        }
        .search{
            margin-left:30%;
        }
        button > a {
            color:white;
            text-decoration: none;
        }
        button:hover > a{
            color:white;
            text-decoration: none;
        }
        
    </style>
<body>
    <div class="container-fluid">
        <div class=" bg-secondary ">
            <form class="form-inline ">
                <a class="navbar-brand mx-5 bg-white"  href="#"> <img src="../imgs/i_logo.png"  width="210" height="100"  alt=""></a>
                <h6 class="  text-white  ">日本留学安心情報サイト「アプライズ」は、アジアの将来を担う人材の創出・育成を通じて産業発展に貢献します。</h6>
                <button class="btn-danger" style="margin-left:20%"><a href="./logout.php">Logout</a></button>
            </form>
        </div>

    </div>

    <div  class="container .bg-secondary hidden" style="margin-bottom:10%; margin-top:10%;">
        <div class="row">
        <button  class="btn btn-secondary" id="admin" ><a href="./admin.php"> Admin</a></button>
        <button  class="btn btn-secondary" id="user" ><a href="./register_study.php"> User</a></button>
            <!-- <button  class="btn btn-secondary" id="news" ><a href="./news.php"> News</a></button> -->
           
            <div class="dropdown col-1"  class="btn btn-secondary" id="news" >
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" style="background-color:#6c757d;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    News
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="./news.php#">News</a>
                    <a class="dropdown-item" href="./condition.php">Condition</a>
                    <a class="dropdown-item" href="#">Admission</a>
                </div>
            </div>
        </div>
        <div>
            
        </div>
        
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
    
        
            
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ニュース::UPRAISE</title>
    <!-- version 4.6 -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
    <style>

    </style>

</head>
<body> 
    <?php include "./connect.php";?>
    <div class=" bg-secondary"><div class="container bg-white">
        <div class="row">
            <div class="col-8 ">
            </div>
            <div class="col-4 text-right my-2">
                <ins><a class="text-dark mr-1" href=""><small>メインページ</small></a></ins>
                <ins><a class="text-dark mr-1" href=""><small>サイトマップ</small></a></ins>
                <ins><a class="text-dark mr-1 " href=""><small>RSS</small></a></ins>
                <ins><a class="text-dark mr-1 " href=""><small>印刷</small></a></ins>
            </div>
        </div>
        <h6 style="padding:8% 3% 12% 9%;" class="border bg-info text-white">日本留学安心情報サイト「アプライズ」は、アジアの将来を担う人材の創出・育成を通じて産業発展に貢献します。</h6>
        <div class="row ">
            <div class="col-3 py-3">
                <h6 class="border-bottom border-info pb-3 " ><strong>メニュー</strong></h6>
                <ul style="list-style-type:square">
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small>メインページ</small></a></li>
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small><strong>ニュース</strong></small></a></li>
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small>留学生インタビュー</small></a></li>
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small><strong>About Us</strong></small></a></li>
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small>役員紹介</small></a></li>
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small>サービス</small></a></li>
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small>お問い合わせ</small></a></li>
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small><strong>For NIKKEI-JIN</strong></small></a></li>
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small>企業インタビュー</small></a></li>
                    <li><span class="font-weight-bold"><a class="text-dark mr-1" href=""><small>メインページ</small></a></li>
                </ul>
                <h6 class="border-bottom border-info pb-3 pt-2"><strong>サイト内検索</strong></h6>
                <input class="form-control form-control-sm mb-2" type="text">
                <button type="submit" class="btn btn-primary mb-4"><strong>探す</strong></button>
                <h6 class="border-bottom border-info pb-3 pt-2"><strong>お問い合わせ先</strong></h6>
                <h6 class="pb-2 pt-2"><strong>UPRAISE</strong></h6>
                <p> Headquarter Tokyo<br>
                    Cyoei Blg 8F 1-13-7<br>
                    Kitashinagawa Shinagawa-ku<br>
                    Tokyo<br>
                    Zipcode 140-0001<br>
                </p>
                <p class="mt-4"> 
                    〒140-0001<br>
                    東京都品川区北品川1-13-7<br>
                    長栄ビル8階<br>
                </p>
                <p>+81-3-6388-0835</p>
                <ins><a class="text-info mr-1" href="">info@upraise.tokyo</a></ins>
            </div>

            <div class="col-9">
               
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white pb-1">
                           <ins><li class="breadcrumb-item "><a href="#">メインページ </a></li></ins>
                           <li class="" aria-current="page" style=" margin-left: 0.3%;"> > ニュース</li>
                        </ol>
                </nav>
                <h6 class="pb-2 ml-3"><strong>ニュース</strong></h6>
                <?php
                $sql = "SELECT * FROM news  LIMIT 10";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if ($count >0){
                        while($row = mysqli_fetch_assoc($res)){ 
                            ?>
                            <ins><a  class="text-primary ml-3  " href="<?php echo $row['link'] ?>"><strong><?php echo $row['title'] ?> </strong></a></ins>
                            <p class="text-info ml-3 mt-2"><small><?php echo $row['date_upload'] ?></small></p>
                            <p class="ml-3 mt-2"><?php echo $row['summary'] ?> </p>
                        <?php
                        }
                    }
                    else{
                        echo " k co csdl";
                    }
                ?>
                


                <div class="btn-toolbar " style=" margin-top: 3%; margin-left: 80%;" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2 " role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary bg-white text-dark">1</button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-secondary">2</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-secondary"> >> </button>
                    </div>
                </div>
            </div>
        </div>
        <p class="d-flex justify-content-center " style=" margin-top: 3%; ">	&copy;© UPRAISE All rights reserved.| データ類は無断で加工・転送する事を禁じます。 |</p>
    </div> </div>
    


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>
</html>
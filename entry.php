    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/entry.css">
  <form class="container" id="form-1" method="POST">
    <h3>利用規約 </h3>
    <div class="form-group row">
      <label for="rules" class=" col-md-3 col-sm-12  col-form-label">Điều khoản và điều kiện thông tin cần thiết
        <br> <span>ひっす(Nhập thông tin cần thiết)</span>
      </label>
      <div class="col-md-9 col-sm-12">
        <textarea multiple class="form-control" name="rules" rows="3" >
          皆様の個人情報は職業紹介に伴うことに対して、収集し、使用されます。
          収集された個人情報は、事前にご本人の許可を得ないで別の目的で使用することはありません。
          また、私たちは、他の目的で第三者に個人情報の使用を許可することはありません。
        </textarea>
      </div>
    </div>
    <div class="row form-inline">
      <label class="offset-3" >
        <input type="radio" name="agree" value="yes"  checked="checked">
        どうい(Đồng ý)
      </label>
      <label class="offset-1"  >
        <input type="radio" name="agree" value="no">
        どういしない(Không đồng ý)
      </label>
    </div>
      <h3>基本情報 </h3>
      <div class="form-group row ">
        <label for="nameHissu" class=" col-md-3 col-sm-12 col-form-label">なまえ　Họ tên
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12  ">
          <input type="text" class="form-control nameHissu  " name="name" id="nameHissu">
          <p style="color:red;" class="message"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="nameFurigana" class=" col-md-3 col-sm-12 col-form-label">フリガナ
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control " name="nameFurigana"  id="nameFurigana">
          <p style="color:red;" class="message"></p>
        </div>
      </div>

      <div class="row " >
        <label for="nameFurigana" class=" col-md-3 col-sm-12col-form-label">せいべつ　Giới tính
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <label  >
          <input type="radio" name="sex" value="male"  checked="checked" >
          おとこ
        </label>
        <label class="offset-1"  >
          <input type="radio" name="sex" value="female">
          おんな
        </label>

      </div>

      <div class="form-group row ">
        <label class=" col-md-3 col-sm-12 col-form-label">なまえ　Birthday
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12  ">
          <input type="text" class="form-control   " name="birthday" id="birthday">
          <p style="color:red;" class="message"></p>
        </div>
      </div>

      <div class="form-group row ">
      <label for="tel" class=" col-md-3 col-sm-12 col-form-label">けいたい　ばんごう　Tel
        <br> <span>ひっす(Nhập thông tin cần thiết)</span>
      </label>
      <div class="col-md-9 col-sm-12 form-inline">
        <input type="text"  name="telephone" placeholder="0000" >
        <p style="padding:1% 1%" >-</p>
        <!-- <input type="text" class="" name="tel[1]" placeholder="0000" > -->
        <p style="padding:1% 1%">-</p>
        <!-- <input type="text" class="" name="tel[2]" placeholder="0000" > -->
      </div>
    </div>

    <div class="form-group row">
        <label for="address" class=" col-md-3 col-sm-12 col-form-label">じゅうしょ　Địa chỉ
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="address" id="address">
          <p style="color:red;" class="message"></p>
        </div>
    </div>

    <div class="form-group row">
        <label for="schoolNow" class=" col-md-3 col-sm-12 col-form-label">がっこう　の　なまえ <br> Tên trường đang học
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="school_name" id="schoolNow">
          <p style="color:red;" class="message"></p>
        </div>
    </div>

    <div class="row " >
        <label for="nameFurigana" class=" col-md-3 col-sm-12col-form-label">せいべつ　Education
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <label  >
          <input type="radio" name="education_level" value="university"  checked="checked" >
          おとこ
        </label>
        <label class="offset-1"  >
          <input type="radio" name="education_level" value="hightschool">
          おんな
        </label>
        <label class="offset-1"  >
          <input type="radio" name="education_level" value="vocational">
          おんな
        </label>
      </div>


      <div class="row " >
        <label for="nameFurigana" class=" col-md-3 col-sm-12col-form-label">せいべつ　Japanese Level
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <label  >
          <input type="radio" name="japanese_level" value="n1"  checked="checked" >
          N1
        </label>
        <label class="offset-1"  >
          <input type="radio" name="japanese_level" value="n2">
          N2
        </label>
        <label class="offset-1"  >
          <input type="radio" name="japanese_level" value="n3">
          N3
        </label>
        <label class="offset-1"  >
          <input type="radio" name="japanese_level" value="n4">
          N4
        </label>
        <label class="offset-1"  >
          <input type="radio" name="japanese_level" value="n5">
          N5
        </label>
      </div>

    <div class="row ">
        <label for="time" class=" col-md-3 col-sm-12 col-form-label">いつ　にほん　に　きましたか？ <br> Bạn đến nhật từ khi nào
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12  ">
          <input type="text" class="form-control   " name="time_come" >
          <p style="color:red;" class="message"></p>
        </div>
      </div>

      <div class="form-group row">
        <label for="linkFacebook" class=" col-md-3 col-sm-12 col-form-label">Facebookのなまえ
          <!-- <br> <span>ひっす(Nhập thông tin cần thiết)</span> -->
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="linkFacebook">
        </div>
      </div>


      <div class="row ">
        <label for="station" class=" col-md-3 col-sm-12 col-form-label">いえ　に　ちかい　えき
          <br> Ga gần nhất（nhà)
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>

        <select name="station" class="col-md-9 col-sm-12 form-control-lg">
          <option selected ="selected"> ---- </option>

          <option label="2011年1月～6月" value="2011年1月～6月">2011年1月～6月</option>
          <option label="2011年7月～12月" value="2011年7月～12月">2011年7月～12月</option>
          <option label="2012年1月～6月" value="2012年1月～6月">2012年1月～6月</option>
          <option label="2012年7月～12月" value="2012年7月～12月">2012年7月～12月</option>
        </select>
      </div>


      <div class="form-group row">
        <label for="SchoolNoChoose" class=" col-md-3 col-sm-12 col-form-label">いえ　に　ちかい　えき
          <br> (nhà）Không có lựa chọn
          <!-- <br> <span>ひっす(Nhập thông tin cần thiết)</span> -->
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="SchoolNoChoose">
        </div>
      </div>

      <div class="row ">
        <label for="school" class=" col-md-3 col-sm-12 col-form-label">がっこう　に　ちかい　えき
          <br> （Trường học）
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>

        <select name="school" class="col-md-9 col-sm-12 form-control-lg">
          <option selected ="selected"> ---- </option>

          <option label="2011年1月～6月" value="2011年1月～6月">2011年1月～6月</option>
          <option label="2011年7月～12月" value="2011年7月～12月">2011年7月～12月</option>
          <option label="2012年1月～6月" value="2012年1月～6月">2012年1月～6月</option>
          <option label="2012年7月～12月" value="2012年7月～12月">2012年7月～12月</option>
        </select>
      </div>

      <div class="form-group row">
        <label for="schoolNoChoose" class=" col-md-3 col-sm-12 col-form-label">がっこう　に　ちかい　えき
          <br> （Trường học）Không có lựa chọn
          <!-- <br> <span>ひっす(Nhập thông tin cần thiết)</span> -->
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="schoolNoChoose">
        </div>
      </div>

      <div class="form-group row">
        <label  class=" col-md-3 col-sm-12 col-form-label">がっこう　の　じかん
          <br><span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12" style="background-color:#F5F5F5; padding:3%">
          <label class="col-md-9 col-sm-12"  for="Gakko">
            <input type="radio" name="Gakko" >
            ① Gozen / AM
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ② Đi / Chiều
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ③ Gosen-Yugata
          </label>
        </div>
    </div>

    <div class="form-group row">
        <label  class=" col-md-3 col-sm-12 col-form-label">はたらく　ことが　できる　じかん
          <br><span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12" style="background-color:#F5F5F5; padding:3%">
          <label class="col-md-9 col-sm-12"  for="Gakko">
            <input type="radio" name="Gakko" >
            ① あさ6じ～あさ9じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ② あさ9じ～ひる12じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ④　ひる3じ～ゆうがた6じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ⑤　ゆうがた6じ～よる9じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ⑥　よる9じ～よる12じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ⑦　よる12じ～あさ6じ
          </label>
        </div>
    </div>

   
    <div class="form-group row">
        <label for="friend" class=" col-md-3 col-sm-12 col-form-label">しょうかい　して　くれた　ともだち
           の　でんわばんごう　と　なまえ
          <!-- <br> <span>ひっす(Nhập thông tin cần thiết)</span> -->
        </label>
        <div class="col-md-9 col-sm-12">
          <textarea name="friend" class="form-control" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="idCard" class=" col-md-3 col-sm-12 col-form-label">ざいりゅう　かーど　ばんごう
          <br>  (con số)
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12">
          <input name="card" class="form-control" placeholder="ABC123EF" id="idCard" ></input>
          <p class="message" style="color:red; padding:1%"></p>
        </div>
      </div>



      <div class="form-group row ">
        <label class=" col-md-3 col-sm-12 col-form-label">なまえ　Time Stay
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12  ">
          <input type="text" class="form-control   " name="time_stay" >
          <p style="color:red;" class="message"></p>
        </div>
      </div>
  <div class="d-flex justify-content-center"  id="btnNext">
    <button class="btn-primary" name="btnNext" type="submit"> Next</button>
  </div>
  </form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<?php
include("./connect.php");
if(isset($_POST['btnNext'])){
  $agree = $_POST['agree'];
  $name = $_POST['name'];
  $sex = $_POST['sex'];
  $birthday = $_POST['birthday'];
  $telephone = $_POST['telephone'];
  $address = $_POST['address'];
  $school_name = $_POST['school_name'];
  $education_level	 = $_POST['education_level'];
  $japanese_level = $_POST['japanese_level'];
  $time_come = $_POST['time_come'];
  $card = $_POST['card'];
  $time_stay = $_POST['time_stay'];
  if( $agree='yes'){
    $sql = "INSERT INTO register_study set
        name = '$name',
        sex = '$sex',
        birthday = '$birthday',
        telephone = '$telephone',
        address = '$address',
        school_name = '$school_name',
        education_level = '$education_level',
        japanese_level = '$japanese_level',
        time_come = '$time_come',
        card = '$card',
        time_stay = '$time_stay'
         ";
    $result = mysqli_query($conn, $sql);
  
    if($result == true){
     echo"Cảm ơn bạn đã đăng ký";
  
         
        
    }
    else{
      echo"error ";
    }}
 
}

?>
<?php

include "../Model/DBconfig.php";
$db = new Database();
$db -> connect();
session_start();

if(isset($_POST['add']))
        {
            $tenmay = $_POST['tenmayy'];
            $tiendo = '0%';
            $ngaybatdau = $_POST['ngaybatdau'];
            $ngaydukien = $_POST['ngaydukien'];
            $nhomthuchien = $_POST['nhomthuchien'];
            $bophan = $_POST['bophan'];
            $dfm = '0%';
            $dtod = '0%';
            $giacongvadathang = '0%';
            $lapdatvachinhmay = '0%';
            $buyoff = '0%';
            

            $dfm1 = '20%';
            $dtod1 = '20%';
            $giacongvadathang1 = '20%';
            $lapdatvachinhmay1 = '20%';
            $buyoff1 = '20%';
            
            if($db->InsertData($tenmay,$tiendo,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien)&&$db->InsertData1($tenmay,$ngaybatdau,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff)&&$db->InsertData2($tenmay,$ngaybatdau,$dfm1,$dtod1,$giacongvadathang1,$lapdatvachinhmay1,$buyoff1))
            {
                header('Location: ../Controller/index.php?action=test2');
            }
        }
if(isset($_POST['addluu']))
{
    $tenmay = $_POST['tenmay'];
    $tiendo = '0%';
    $ngaybatdau = $_POST['ngaybatdau'];
    $ngaydukien = $_POST['ngaydukien'];
    $nhomthuchien = $_POST['nhomthuchien'];
    $bophan = $_POST['bophan'];

    $may1 = '0%';
    $may2 = '0%';
    $may3 = '0%';
    $may4 = '0%';
    $may5 = '0%';
    $may6 = '0%';
    $may7 = '0%';
    $may8 = '0%';
    $may9 = '0%';
    $may10 = '0%'; 


    $dfm = '0%';
    $dtod = '0%';
    $giacongvadathang = '0%';
    $lapdatvachinhmay = '0%';
    $buyoff = '0%';

    $may11 = $_POST['may1'];
    $may21 = $_POST['may2'];
    $may31 = $_POST['may3'];
    $may41 = $_POST['may4'];
    $may51 = $_POST['may5'];
    $may61 = $_POST['may6'];
    $may71 = $_POST['may7'];
    $may81 = $_POST['may8'];
    $may91 = $_POST['may9'];
    $may101 = $_POST['may10'];



    $dfm1 = '20%';
    $dtod1 = '20%';
    $giacongvadathang1 = '20%';
    $lapdatvachinhmay1 = '20%';
    $buyoff1 = '20%';
    

     
    $tenmay1 = $_POST['may1'];
    $tiendomay1 = '0%';
    $ngaybatdaumay1 = $_POST['ngaybatdaumay1'];
    $ngaydukienmay1 = $_POST['ngaydukienmay1'];
    $bophanmay1 = $_POST['bophan'];
    $nhomthuchienmay1 = $_POST['nhomthuchienmay1'];
    $tenline = $_POST['tenmay'];


    $tenmay2 = $_POST['may2'];
    $tiendomay2 = '0%';
    $ngaybatdaumay2 = $_POST['ngaybatdaumay2'];
    $ngaydukienmay2 = $_POST['ngaydukienmay2'];
    $bophanmay2 = $_POST['bophan'];
    $nhomthuchienmay2 = $_POST['nhomthuchienmay2'];
    $tenline = $_POST['tenmay'];



    $tenmay3 = $_POST['may3'];
    $tiendomay3 = '0%';
    $ngaybatdaumay3 = $_POST['ngaybatdaumay3'];
    $ngaydukienmay3 = $_POST['ngaydukienmay3'];
    $bophanmay3 = $_POST['bophan'];
    $nhomthuchienmay3 = $_POST['nhomthuchienmay3'];
    $tenline = $_POST['tenmay'];



    $tenmay4 = $_POST['may4'];
    $tiendomay4 = '0%';
    $ngaybatdaumay4 = $_POST['ngaybatdaumay4'];
    $ngaydukienmay4 = $_POST['ngaydukienmay4'];
    $bophanmay4 = $_POST['bophan'];
    $nhomthuchienmay4 = $_POST['nhomthuchienmay4'];
    $tenline = $_POST['tenmay'];



    $tenmay5 = $_POST['may5'];
    $tiendomay5 = '0%';
    $ngaybatdaumay5 = $_POST['ngaybatdaumay5'];
    $ngaydukienmay5 = $_POST['ngaydukienmay5'];
    $bophanmay5 = $_POST['bophan'];
    $nhomthuchienmay5 = $_POST['nhomthuchienmay5'];
    $tenline = $_POST['tenmay'];



    $tenmay6 = $_POST['may6'];
    $tiendomay6 = '0%';
    $ngaybatdaumay6 = $_POST['ngaybatdaumay6'];
    $ngaydukienmay6 = $_POST['ngaydukienmay6'];
    $bophanmay6 = $_POST['bophan'];
    $nhomthuchienmay6 = $_POST['nhomthuchienmay6'];
    $tenline = $_POST['tenmay'];



    $tenmay7 = $_POST['may7'];
    $tiendomay7 = '0%';
    $ngaybatdaumay7 = $_POST['ngaybatdaumay7'];
    $ngaydukienmay7 = $_POST['ngaydukienmay7'];
    $bophanmay7 = $_POST['bophan'];
    $nhomthuchienmay7 = $_POST['nhomthuchienmay7'];
    $tenline = $_POST['tenmay'];



    $tenmay8 = $_POST['may8'];
    $tiendomay8 = '0%';
    $ngaybatdaumay8 = $_POST['ngaybatdaumay8'];
    $ngaydukienmay8 = $_POST['ngaydukienmay8'];
    $bophanmay8 = $_POST['bophan'];
    $nhomthuchienmay8 = $_POST['nhomthuchienmay8'];
    $tenline = $_POST['tenmay'];



    $tenmay9 = $_POST['may9'];
    $tiendomay9 = '0%';
    $ngaybatdaumay9 = $_POST['ngaybatdaumay9'];
    $ngaydukienmay9 = $_POST['ngaydukienmay9'];
    $bophanmay9 = $_POST['bophan'];
    $nhomthuchienmay9 = $_POST['nhomthuchienmay9'];
    $tenline = $_POST['tenmay'];



    $tenmay10 = $_POST['may10'];
    $tiendomay10 = '0%';
    $ngaybatdaumay10 = $_POST['ngaybatdaumay10'];
    $ngaydukienmay10 = $_POST['ngaydukienmay10'];
    $bophanmay10 = $_POST['bophan'];
    $nhomthuchienmay10 = $_POST['nhomthuchienmay10'];
    $tenline = $_POST['tenmay'];


    if($db->InsertData($tenmay,$tiendo,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien)&&$db->InsertLine($tenmay,$ngaybatdau,$may1,$may2,$may3,$may4,$may5,$may6,$may7,$may8,$may9,$may10,$bophan)&&$db->InsertTenline($tenmay,$ngaybatdau,$may11,$may21,$may31,$may41,$may51,$may61,$may71,$may81,$may91,$may101,$bophan)&&$db->InsertData3($tenmay,$ngaybatdau,$dfm1,$dtod1,$giacongvadathang1,$lapdatvachinhmay1,$buyoff1)&&$db->InsertTienDoMayMocLine($tenmay1,$tiendomay1,$ngaybatdaumay1,$ngaydukienmay1,$bophanmay1,$nhomthuchienmay1,$tenline)&&$db->InsertTienDoMayMocLine($tenmay2,$tiendomay2,$ngaybatdaumay2,$ngaydukienmay2,$bophanmay2,$nhomthuchienmay2,$tenline)&&$db->InsertTienDoMayMocLine($tenmay3,$tiendomay3,$ngaybatdaumay3,$ngaydukienmay3,$bophanmay3,$nhomthuchienmay3,$tenline)&&$db->InsertTienDoMayMocLine($tenmay4,$tiendomay4,$ngaybatdaumay4,$ngaydukienmay4,$bophanmay4,$nhomthuchienmay4,$tenline)&&$db->InsertTienDoMayMocLine($tenmay5,$tiendomay5,$ngaybatdaumay5,$ngaydukienmay5,$bophanmay5,$nhomthuchienmay5,$tenline)&&$db->InsertTienDoMayMocLine($tenmay6,$tiendomay6,$ngaybatdaumay6,$ngaydukienmay6,$bophanmay6,$nhomthuchienmay6,$tenline)&&$db->InsertTienDoMayMocLine($tenmay7,$tiendomay7,$ngaybatdaumay7,$ngaydukienmay7,$bophanmay7,$nhomthuchienmay7,$tenline)&&$db->InsertTienDoMayMocLine($tenmay8,$tiendomay8,$ngaybatdaumay8,$ngaydukienmay8,$bophanmay8,$nhomthuchienmay8,$tenline)&&$db->InsertTienDoMayMocLine($tenmay9,$tiendomay9,$ngaybatdaumay9,$ngaydukienmay9,$bophanmay9,$nhomthuchienmay9,$tenline)&&$db->InsertTienDoMayMocLine($tenmay10,$tiendomay10,$ngaybatdaumay10,$ngaydukienmay10,$bophanmay10,$nhomthuchienmay10,$tenline)&&$db->InsertDataLine($tenmay1,$ngaybatdaumay1,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay2,$ngaybatdaumay2,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay3,$ngaybatdaumay3,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay4,$ngaybatdaumay4,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay5,$ngaybatdaumay5,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay6,$ngaybatdaumay6,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay7,$ngaybatdaumay7,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay8,$ngaybatdaumay8,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay9,$ngaybatdaumay9,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay)&&$db->InsertDataLine($tenmay10,$ngaybatdaumay10,$dfm,$dtod,$giacongvadathang,$lapdatvachinhmay,$buyoff,$tenmay))
    {
        header('Location: ../Controller/index.php?action=test2');
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm Dự Án</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body>

   <a href="../Controller/index.php?action=test2#tableselectdata" style="font-weight: bold; border: 1px; text-decoration: none;" class="btn btn-success btn-lg aec">Trang Chủ</a>
<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" style="">
  <li class="nav-item" role="presentation" >
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Tiến Độ Máy</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Tiến Độ Line</button>
  </li>
</ul>

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <section class="book" id="book">
    <div class="row" style=" border-radius: 10px;">
     <form action="" method="POST">
        <ul class="btn justify-content-center" style="font-size: 40px; display: inline-block; width: 100%;margin-top: 10px;" >
                <li"><a href="" style="text-decoration: none;" class="text-success">Thêm Tiến Độ Máy</a></li>
              </ul>
           <div class="col-12" style="">
           </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="text" name="tenmayy" id="tenmayy" required ="required" placeholder="Tên Máy" style="width: 80%;text-align: center;margin-left: 22%; margin-top: 0%; font-size: 30px;">
            </div>
            <div style="text-align: center;">
                <span id="idspan1"></span>
            </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="date" name="ngaybatdau" required ="required" placeholder="Ngày Bắt Đầu" style="width: 80%;text-align: center;margin-left: 22%; margin-top: 3%;font-size: 30px;">
            </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="date" name="ngaydukien" required ="required" placeholder="Ngày Dự Kiến" style="width: 80%;text-align: center;margin-left: 22%;margin-top: 3%;font-size: 30px;">
            </div>
             <div class="inputBox" style=" width: 80%;">
                <input type="text" name="nhomthuchien" required ="required" placeholder="Nhóm Thực Hiện" style="width: 80%;text-align: center;margin-left: 22%;margin-top: 3%;font-size: 30px;">
            </div>
            <div class="inputBox" style=" width: 80%;">
                <select class="form-control" required ="required" name="bophan" style="width: 80%;margin-left: 22%; text-align: center; height: 45px;font-size: 20px; margin-top: 3%; ">
                    <option value="AEC" style="font-size: 10px;">AEC</option>
                    <option value="TSC" style="font-size: 10px;">TSC</option>
                    <option value="APS" style="font-size: 10px;">APS</option>
                </select>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-success form-control" name="add" value="Thêm Dự Án" style="margin-top: 20px;width: auto; margin-bottom: 20px; height: 10%;">Xác Nhận</button>
            </div>

        </form>
        <?php
           if(isset($thanhcong)&&in_array('thanh_cong',$thanhcong))
           {
            echo "<p style='color: green;text-align:center'>Thêm Thành Công</p>";
           }
        ?>
    </div>
</section>
  </div>


  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <section class="book" id="book">
    <div class="row" style=" border-radius: 10px;">
     <form action="" method="POST">
        <ul class="btn justify-content-center" style="font-size: 40px; display: inline-block; width: 100%;margin-top: 10px;" >
                <li"><a href="" style="text-decoration: none;" class="text-success">Thêm Tiến Độ Line</a></li>
            </ul>
           <div class="col-12" style="">
           </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="text" name="tenmay" id="idtenmay" required ="required" placeholder="Tên Line vd:line 2" style="width: 80%;text-align: center;margin-left: 22%; margin-top: 0%; font-size: 30px;">
            </div>
            <div style="text-align: center;">
                <span id="idspan"></span>
            </div>

            <div class="inputBox" style=" width: 80%;">
                <input type="date" name="ngaybatdau" required ="required" placeholder="Ngày Bắt Đầu" style="width: 80%;text-align: center;margin-left: 22%; margin-top: 3%;font-size: 30px;">
            </div>
            <div class="inputBox" style=" width: 80%;">
                <input type="date" name="ngaydukien" required ="required" placeholder="Ngày Dự Kiến" style="width: 80%;text-align: center;margin-left: 22%;margin-top: 3%;font-size: 30px;">
            </div>
             <div class="inputBox" style=" width: 80%;">
                <input type="text" name="nhomthuchien" required ="required" placeholder="Nhóm Thực Hiện" style="width: 80%;text-align: center;margin-left: 22%;margin-top: 3%;font-size: 30px;">
            </div>
            <div class="inputBox" style=" width: 80%;">
                <select class="form-control" required ="required" name="bophan" style="width: 80%;margin-left: 22%; text-align: center; height: 45px;font-size: 20px; margin-top: 3%; ">
                    <option value="AEC" style="font-size: 10px;">AEC</option>
                    <option value="TSC" style="font-size: 10px;">TSC</option>
                    <option value="APS" style="font-size: 10px;">APS</option>
                </select>
            </div>
            

             <div style="text-align: center;">
                 <button type="button" class="btn btn-success" name="add" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Thêm Dự Án" style="margin-top: 20px;margin-bottom: 20px; width: auto;height: 10%;">Xác Nhận</button>
             </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-body">
        <div style="margin-top:0px;">
             <ul style="font-size: 40px; display: inline; display: inline-block; width: 100%;margin-top: 0px; text-align: center;">
               
                <li style="display: inline; margin-left: 5%;width: 70%;"><span style="text-decoration: none;color:#FF6699; font-weight: bold;">Thêm Line</span></li>
              </ul>  
           </div>
           <div class="container">
                <div class="row" style="">
                    <table class="table table-hover">
                          <thead>
                            <tr style="text-align:center;">
                              <th scope="col">Tên Máy</th>
                              <th scope="col">Ngày Bắt Đầu</th>
                              <th scope="col">Ngày Dự Kiến</th>
                              <th scope="col">Nhóm Thực Hiện</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="">
                              <th scope="row" style="height:70px;">
                                <input type="text" style="text-align:center; margin-top: 7px;" required ="required" name="may1" class="form-control" placeholder="Máy 1" id="may1">
                            </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay1" placeholder="Ngày Bắt Đầu Máy 1" class="form-control" id="ngaybatdaumay1">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay1" class="form-control" id="ngaydukienmay1" placeholder="Ngày Dự Kiến Máy 1">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay1" placeholder="Nhóm Thực Hiện Máy 1" class="form-control" id="nhomthuchienmay1">
                              </td>
                              
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                                <input class="form-control" style="text-align:center;margin-top: 7px;" id="may2" type="text" placeholder="Máy 2" required ="required" name="may2">
                            </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay2" placeholder="Ngày Bắt Đầu Máy 2" class="form-control" id="ngaybatdaumay2">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay2" placeholder="Ngày Dự Kiến Máy 2" class="form-control" id="ngaydukienmay2">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay2" placeholder="Nhóm Thực Hiện Máy 2" class="form-control" id="nhomthuchienmay2">
                              </td>
                            
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                                   <input required ="required" style="text-align:center;margin-top: 7px;" class="form-control" placeholder="Máy 3" type="text" id="may3" name="may3">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay3" placeholder="Ngày Bắt Đầu Máy 3" class="form-control" id="ngaybatdaumay3">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay3" placeholder="Ngày Dự Kiến Máy 3" class="form-control" id="ngaydukienmay3">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay3" placeholder="Nhóm Thực Hiện Máy 3" class="form-control" id="nhomthuchienmay3">
                              </td>
                              
                            </tr>


                            <tr>
                              <th scope="row" style="height:70px">
                                   <input class="form-control" style="text-align:center;margin-top: 7px;" id="may4" type="text" placeholder="Máy 4" required ="required" name="may4">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay4" placeholder="Ngày Bắt Đầu Máy 4" class="form-control" id="ngaybatdaumay4">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay4" placeholder="Ngày Dự Kiến Máy 4" class="form-control" id="ngaydukienmay4">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay4" placeholder="Nhóm Thực Hiện Máy 4" class="form-control" id="nhomthuchienmay4">
                              </td>
                             
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                            <input class="form-control" id="may5" style="text-align:center;margin-top: 7px;" type="text" placeholder="Máy 5" required ="required" name="may5">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay5" placeholder="Ngày Bắt Đầu Máy 5" class="form-control" id="ngaybatdaumay5">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay5" placeholder="Ngày Dự Kiến Máy 5" class="form-control" id="ngaydukienmay5">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay5" placeholder="Nhóm Thực Hiện Máy 5" class="form-control" id="nhomthuchienmay5">
                              </td>
                             
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                            <input required ="required" style="text-align:center;margin-top: 7px;" class="form-control" type="text" placeholder="Máy 6" id="may6" name="may6">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay6" placeholder="Ngày Bắt Đầu Máy 6" class="form-control" id="ngaybatdaumay6">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay6" placeholder="Ngày Dự Kiến Máy 6" class="form-control" id="ngaydukienmay6">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay6" placeholder="Nhóm Thực Hiện Máy 6" class="form-control" id="nhomthuchienmay6">
                              </td>
                             
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                                 <input class="form-control" style="text-align:center;margin-top: 7px;" id="may7" type="text" placeholder="Máy 7" required ="required" name="may7">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay7" placeholder="Ngày Bắt Đầu Máy 7" class="form-control" id="ngaybatdaumay7">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay7" placeholder="Ngày Dự Kiến Máy 7" class="form-control" id="ngaydukienmay7">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay7" placeholder="Nhóm Thực Hiện Máy 7" class="form-control" id="nhomthuchienmay7">
                              </td>
                             
                            </tr>



                            <tr>
                              <th scope="row" style="height:70px">
                            <input class="form-control" id="may8" style="text-align:center;margin-top: 7px;" type="text" placeholder="Máy 8" required ="required" name="may8">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay8" placeholder="Ngày Bắt Đầu Máy 8" class="form-control" id="ngaybatdaumay8">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay8" placeholder="Ngày Dự Kiến Máy 8" class="form-control" id="ngaydukienmay8">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay8" placeholder="Nhóm Thực Hiện Máy 8" class="form-control" id="nhomthuchienmay8">
                              </td>
                             
                            </tr>




                            <tr>
                              <th scope="row" style="height:70px">
                            <input class="form-control" id="may9" style="text-align:center;margin-top: 7px;" type="text" placeholder="Máy 9" required ="required" name="may9">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay9" placeholder="Ngày Bắt Đầu Máy 9" class="form-control" id="ngaybatdaumay9">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay9" placeholder="Ngày Bắt Dự Kiến 9" class="form-control" id="ngaydukienmay9">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay9" placeholder="Nhóm Thực Hiện Máy 9" class="form-control" id="nhomthuchienmay9">
                              </td>
                              
                            </tr>




                            <tr>
                              <th scope="row" style="height:70px">
                            <input class="form-control" id="may10" style="text-align:center;margin-top: 7px;" type="text" placeholder="Máy 10" required ="required" name="may10">
                              </th>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaybatdaumay10" placeholder="Ngày Bắt Đầu Máy 10" class="form-control" id="ngaybatdaumay10">
                              </td>
                              <td>
                                <input type="date" style="text-align:center;margin-top: 7px;" required ="required" name="ngaydukienmay10" placeholder="Ngày Dự Kiến máy 10" class="form-control" id="ngaydukienmay10">
                              </td>
                              <td>
                                <input type="text" style="text-align:center;margin-top: 7px;" required ="required" name="nhomthuchienmay10" placeholder="Nhóm Thực Hiện Máy 10" class="form-control" id="nhomthuchienmay10">
                              </td>
                              
                            </tr>
                          </tbody>
                        </table>
                </div>
            </div>    
      </div>
      <div class="modal-footer" style="background:#EEEEEE">
        <button type="button" class="btn btn-secondary" style="width: 10%;height: 100%" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" style="width: 10%;height: 100%" id="adddd" name="addluu">Lưu</button>
      </div>
    </div>
  </div>
</div>
        </form>
        <?php
           if(isset($thanhcong)&&in_array('thanh_cong',$thanhcong))
           {
            echo "<p style='color: green;text-align:center'>Thêm Thành Công</p>";
           }
        ?>
    </div>
</section>
  </div>
</div>


<script type="text/javascript">
    document.getElementById("idtenmay").addEventListener("change", myFunction);

function myFunction() {
  var x = document.getElementById("idtenmay");
  x.value = x.value.toUpperCase();
  var chuoi = x.value.search("LINE");
    if(chuoi){
      document.getElementById("idtenmay").classList.add("form-control");
      document.getElementById("idtenmay").classList.add("is-invalid");
      document.getElementById("idspan").innerText = 'Vui Lòng Nhập Có Từ LINE...vd:line 2'
      document.getElementById("idspan").style.color = 'red'
  }else{
    document.getElementById("idtenmay").classList.remove("form-control");
    document.getElementById("idtenmay").classList.remove("is-invalid");
    document.getElementById("idtenmay").classList.add("form-control");
    document.getElementById("idtenmay").classList.add("is-valid");
    document.getElementById("idspan").innerText = ''
  }
}

</script>


<script type="text/javascript">
    document.getElementById("tenmayy").addEventListener("change", myFunction1);

function myFunction1() {
  var x = document.getElementById("tenmayy");
  x.value = x.value.toUpperCase();
  var chuoi = x.value.search("LINE");
    if(!chuoi){
      document.getElementById("tenmayy").classList.add("form-control");
      document.getElementById("tenmayy").classList.add("is-invalid");
      document.getElementById("idspan1").innerText = 'Vui Lòng Nhập Không Có Từ Line'
      document.getElementById("idspan1").style.color = 'red'
  }else{
    document.getElementById("tenmayy").classList.remove("form-control");
    document.getElementById("tenmayy").classList.remove("is-invalid");
    document.getElementById("tenmayy").classList.add("form-control");
    document.getElementById("tenmayy").classList.add("is-valid");
    document.getElementById("idspan1").innerText = ''
  }
}

</script>



<script type="text/javascript">
   window.onload = function()
{
  if(sessionStorage.getItem('key')!=1997){
      window.location="../Controller/index.php?action=test2#tableselectdata";
  }
};
</script>
   
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</body>
</html>
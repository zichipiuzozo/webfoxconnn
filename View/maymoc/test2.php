<?php 
include "../Model/DBconfig.php";
include "datachart.php";
$db = new Database();
$db -> connect();
session_start();

$table = 'tiendomaymoc';
$bophan = 'AEC';
$bophan1 = 'TSC';
$bophan2 = 'APS';
if(isset($_POST['dangxuat'])){
    session_destroy();
    header('Location: ../Controller/index.php?action=begin');
}
if(isset($_GET['delete'])){
if(isset($_GET['id'])){
$id = $_GET['id'];
$table = "tiendomaymoc";
if($db->Delete($id,$table))
{
   header('location: ../Controller/index.php?action=home#divtimkiem');
}
else{
     header('location: ../Controller/index.php?action=home#divtimkiem');
}
}
}

$table = 'tiendomaymoc';
$table1 = 'tiendomaymoc1';
$data1 = $db->getAllData($table);
$data2 = $db->getAllData($table1);
$num_row = $db->count_row($table);
$databophan = $db->getAllDatabophan($table,$bophan);
$databophan1 = $db->getAllDatabophan($table,$bophan1);
$databophan2 = $db->getAllDatabophan($table,$bophan2);

$databophan3 = $db->getAllDatabophan($table1,$bophan);
$databophan4 = $db->getAllDatabophan($table1,$bophan1);
$databophan5 = $db->getAllDatabophan($table1,$bophan2);

$a = 0;
$b = 0;
foreach ($data1 as $key) {
    	$datamin = $key['tiendo'];
		$ch = substr($datamin, 0, -1);
		if($ch < 100)
		{
         $a++;
		}
}
foreach ($data2 as $key) {
    	$datamin = $key['tiendo'];
		$ch = substr($datamin, 0, -1);
		if($ch < 100)
		{
         $b++;
		}
}
$ab = $a + $b;



 
$table = 'tiendomaymoc';
$data1 = $db->getAllData($table);
$num_row = $db->count_row($table);

$count_all_data = $db->count_row_alldata($table);

$num = $num_row;
$counthoanthanh = 0;
$countchua = 0;
$counttruocdukien = 0;
$countsaudukien = 0;

if($count_all_data>0)
{
foreach ($data1 as $value) {
   $ngaybatdau = $value['ngaybatdau'];
   $ngaydukien = $value['ngaydukien'];
   $today = date("Y-m-d");
   if(strtotime($ngaydukien) > strtotime($today)&&$value['tiendo']=='100%')
   {
        $counttruocdukien++;
   }
   else if(strtotime($ngaydukien) < strtotime($today)&&$value['tiendo']=='100%'){
        $countsaudukien++;
   }
    if($value['tiendo']=='100%')
    {
        $counthoanthanh++;
    }else{
        $countchua++;
    }

}
}

$tableusersview = 'usersview';
$matkhau = $db->getAllData($tableusersview);


$matkhau2 = array();
$a = 0;
foreach ($matkhau as $keyy) {
    $a++;
    $matkhau1[$a] = $keyy['password'];
}
$tabletiendomaymoc = 'tiendomaymoc';
$tabletiendomaymoc1 = 'tiendomaymoc1';
$count1 = $db->count_row_alldata($tabletiendomaymoc); 
$count2 = $db->count_row_alldata($tabletiendomaymoc1); 
$counttong = $count2 + $count1;






$AEC = 'AEC';
$TSC = 'TSC';
$APS = 'APS';
$table = 'tiendomaymoc';
$data1 = $db->getAllData($table);
$dataAEC = $db->getAllDatabophan($table,$AEC);
$dataTSC = $db->getAllDatabophan($table,$TSC);
$dataAPS = $db->getAllDatabophan($table,$APS);
$num_row = $db->count_row($table);
$count_row_AEC = $db->count_row_bophan($table,$AEC);
$count_row_TSC = $db->count_row_bophan($table,$TSC);
$count_row_APS = $db->count_row_bophan($table,$APS);
$count_all_data = $db->count_row_alldata($table);

$num = $num_row;
$counthoanthanh = 0;
$countchua = 0;
$counttruocdukien = 0;
$countsaudukien = 0;

if($count_all_data>0)
{

foreach ($data1 as $value) {
   $ngaybatdau = $value['ngaybatdau'];
   $ngaydukien = $value['ngaydukien'];
   $today = date("Y-m-d");
   if(strtotime($ngaydukien) > strtotime($today)&&$value['tiendo']=='100%')
   {
        $counttruocdukien++;
   }
   else if(strtotime($ngaydukien) < strtotime($today)&&$value['tiendo']=='100%'){
        $countsaudukien++;
   }
    if($value['tiendo']=='100%')
    {
        $counthoanthanh++;
    }else{
        $countchua++;
    }

}
}
$demAEC = 0;
$demAEC1 = 0;
$demTSC = 0;
$demTSC1 = 0;
$demAPS = 0;
$demAPS1 = 0;
if($count_row_AEC!=0)
{
    $tongaec = 0;
foreach ($dataAEC as $value) {
      $dau = $value['tiendo'];
      $ch = substr($dau, 0, -1);
      if($ch == ""){
        $ch=0;
      }
      $tongaec = $tongaec+$ch;
}
$phantramAEC = round(($tongaec/$count_row_AEC),2).'%';
}else{
    $demAEC=0;
    $phantramAEC = 'Không có dữ Liệu';
}

if($count_row_TSC!=0)
{
    $tongtsc = 0;
foreach ($dataTSC as $value2) {
      $dau1 = $value2['tiendo'];
      $ch1 = substr($dau1, 0, -1);

      $tongtsc = $tongtsc+$ch1;
}
$phantramTSC = round(($tongtsc/$count_row_TSC),2).'%';
}else{
    $demTSC=0;
    $phantramTSC = 'Không có dữ Liệu';
}

if($count_row_APS!=0)
{
      $tongaps = 0;
foreach ($dataAPS as $value3) {
      $dau2 = $value3['tiendo'];
      $ch2 = substr($dau2, 0, -1);
      $tongaps = $tongaps+$ch2;
}
$phantramAPS = round(($tongaps/$count_row_APS),2).'%';
}else{
    $phantramAPS = 'Không có dữ Liệu';
}

if($count_row_AEC==0){
   $count_row_AEC = 0;
}
if($count_row_TSC==0){
    $count_row_TSC = 0;
}
if($count_row_APS==0){
    $count_row_APS = 0;
}

$tongg = round(((round(($tongaps/$count_row_APS),2)+round(($tongtsc/$count_row_TSC),2)+round(($tongaec/$count_row_AEC),2))/3),2).'%';

$tonggg = substr($tongg, 0, -1);

?>
<?php	
			$dt = getdate();
			$day = $dt["mday"];
			$month = date("m");
			$year = $dt["year"];
			$today = "$year"."-"."$month"."-"."$day";
		
			$date = $today;
			include "../Model/connection.php";
			$query = "SELECT type_leave , COUNT(type_leave) AS type_leave_no FROM attendance WHERE date = '$date' GROUP BY type_leave";
			$result = mysqli_query($conn, $query);
		?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../codejavascript/sty3.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
	 <script type="text/javascript" src="../bootstrap-5/js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<title>Quản Lý Tự Đông Hóa</title>
	<style type="text/css">

    :root {
        --dk-gray-100: #F3F4F6;
        --dk-gray-200: #E5E7EB;
        --dk-gray-300: #D1D5DB;
        --dk-gray-400: #9CA3AF;
        --dk-gray-500: #6B7280;
        --dk-gray-600: #4B5563;
        --dk-gray-700: #374151;
        --dk-gray-800: #1F2937;
        --dk-gray-900: #111827;
        --dk-dark-bg: #313348;
        --dk-darker-bg: #2a2b3d;
        --navbar-bg-color: #6f6486;
        --sidebar-bg-color: #252636;
        --sidebar-width: 250px;
    }
        /** --------------------------------
 -- Charts
-------------------------------- */
        .charts .chart-container {
            background-color: var(--dk-dark-bg);
        }
        .charts .chart-container h3 {
            color: var(--dk-gray-400)
        }

        #pc1 {
            opacity: 0;
            transition: opacity 1s;
            } 

        #pc1.hide {
        opacity: 1;
        }
        #pc2 {
            opacity: 0;
            transition: opacity 2.5s;
            }

        #pc2.hide {
        opacity: 1;
        } 
 
	</style>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>

     <div id="app" class="app" style="">
	       <header id="app-header" class="app-header" style="">
					<div class="app-header-logo" style="">
			   				<h1 class="logo-title" style="">
			   					<img src="https://cdn3.iconfinder.com/data/icons/avatars-round-flat/33/man5-512.png">
							</h1>
						</div>
						<span class="span" style=""><?php 
						           if(isset($_SESSION['username'] ))	
						           {
						            echo $_SESSION['username'];
						           }
						         ?></span>

          
          <nav class="navigation" style="">
							<a href="#">
								<i class="fas fa-solid fa-house-user"></i>
								<span style="">Trang Chủ</span>
							</a>
							<a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
								<i style="" class="fas fa-solid fa-user"></i>
								<span style="">Tài Khoản</span>
							</a>
							<a href="../Employee-management-system/admin/dashboard.php" class="a1">
								<i style="" class="fas fa-solid fa-info"></i>
								<span style="" class="a3">Điểm Danh</span>
							</a>
							
						</nav>
             

                <footer class="footer">
									<h1 style="color:white;font-weight: bold;">Foxconn<small>©</small></h1>
									<div class="logof">
									    <a href="#" class="a2">
							             <form action="" method="POST">
												   <input style=";" type="submit" name="dangxuat" value="Đăng Xuất" class="">
								           </form>
											</a>
									</div>
								</footer>

				</header>

      <div class="app-body-main-content" style="">
			<section class="service-section">

				<div class="tiles">

					<article class="tile" style="position: relative;">


							<div class="sum" style="">
								<h3>
								  <span style="">Dự Án</span>
								  <span></span>
							   </h3>
							</div>

          
					<div class="b-skills" style="">
			    <div class="container" style="">


					<div class="row" style="">
						<div class="" style="">
							<div class="skill-item center-block" style="">

									<div class="chart-container" style="">
									<div class="chart " data-percent="<?php echo $tongg;  ?>" data-bar-color="#AF7345" style="">
										<span class="percent" data-after="%" style=""><?php echo $tongg; ?></span>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>

				<div class="test100" id="test100">
	<img style="" src="../Car/c2.png">
</div>
			</div>



						 
							<div class="sumcount" style="">
								<h4>
								  <span style="font-weight: bold;">Tổng Dự Án:</span>
								  <span style="font-weight: bold;"><?php echo $counttong; ?></span>
							   </h4>
							</div>
							<div class="loading" style="">
								<h4>
								  <span style="font-weight: bold;">Dự Án Đang</span>
								  <span style="font-weight: bold;">Thực Hiện:</span>
								  <span style="font-weight: bold;"><?php echo $ab; ?></span>
							   </h4>
							</div>

					</article>
					<article class="tile" style="">
                    <h2 style=""><a href="../Controller/index.php?action=selectaecdata#divtimkiem" style="">AEC</a></h2>
							      <span style="">Tên Máy</span>
							<table class="table" style="">
							 
							  		  <tbody class="bodytable">

							  		<?php foreach ($databophan as $value) { 

							  		   $pos = strpos(strtoupper($value['tenmay']), 'LINE'); 
                              if($pos !== false){ 

							  		?>

							  		 <tr>
							      <th style="border-bottom: none;" scope="row"> <a class="mobile" style="color: black;" href="../Controller/index.php?action=bieudoline&id=<?php echo $value['id']; ?>"> <?php echo $value['tenmay'] ?> </a></th>
							      <td style="color: black;border-bottom: none;"><?php echo $value['tiendo']; ?></td>
							    </tr>


							    <?php }else{ ?>

							    <tr>
							      <th scope="row" style="border-bottom: none;"> <a style="color: black;" href="../Controller/index.php?action=bieudo&id=<?php echo $value['id']; ?>"> <?php echo $value['tenmay'] ?></a> </th>

							      <td style="color: black;border-bottom: none;"><?php echo $value['tiendo']; ?></td>
							    </tr>
							    <?php } } ?>

							    	<?php foreach ($databophan3 as $value) { ?>

							    <tr>
							      <th scope="row" style="border-bottom: none;"> <a style="color: black;" href="../Controller/index.php?action=bieudoline1&id=<?php echo $value['id']; ?>"> <?php echo $value['tenmay'] ?></a> </th>

							      <td  style="color: black;border-bottom: none;"><?php echo $value['tiendo']; ?></td>
							    </tr>
							    <?php } ?>

							  </tbody>
						
							</table>
					</article>
					<article class="tile" style="">
						<h2 style=""><a href="../Controller/index.php?action=selecttscdata#divtimkiem" style="">TSC</a></h2>
							      <span style="">Tên Máy</span>
							<table class="table" style="overflow: scroll;overflow: hidden;">
							  <tbody>
							  	<?php foreach ($databophan1 as $value) { 
                                $pos = strpos(strtoupper($value['tenmay']), 'LINE'); 
                              if($pos !== false){ 
							  		?>
							     <tr>
							      <th style="color: red;color: black;border-bottom: none;" scope="row"><a class="mobile" style="color: black;" href="../Controller/index.php?action=bieudoline&id=<?php echo $value['id']; ?>"> <?php echo $value['tenmay'] ?> </a></th>
							      <td style="color: black;border-bottom: none;"><?php echo $value['tiendo']; ?></td>
							    </tr>


							    <?php }else{ ?>

							    <tr>
							      <th scope="row" style="color: black;border-bottom: none;"> <a style="color: black;" href="../Controller/index.php?action=bieudo&id=<?php echo $value['id']; ?>"> <?php echo $value['tenmay'] ?></a></th>
							      <td style="color: black;border-bottom: none;"><?php echo $value['tiendo']; ?></td>
							    </tr>
							    <?php } } ?>

							    	<?php foreach ($databophan4 as $value) { ?>

							    <tr>
							      <th scope="row" style="color: black;border-bottom: none;"><a style="color: black;" href="../Controller/index.php?action=bieudoline1&id=<?php echo $value['id']; ?>"> <?php echo $value['tenmay'] ?></a></th>
							      <td style="color: black;border-bottom: none;"><?php echo $value['tiendo']; ?></td>
							    </tr>
							    <?php } ?>

							  </tbody>
							</table>
					</article>
						<article class="tile" style="">
							<h2 style=""><a href="../Controller/index.php?action=selectapsdata#divtimkiem" style="">APS</a></h2>
							      <span style="">Tên Máy</span>
							<table class="table" style="overflow: scroll;overflow: hidden;">
							  <tbody>
							  	<?php foreach ($databophan2 as $value) { 
                               $pos = strpos(strtoupper($value['tenmay']), 'LINE'); 
                      	        if($pos !== false){ 

							  		?>
							    <tr>
							      <th style="color: black;border-bottom: none;" scope="row"><a class="mobile" style="color: black;" href="../Controller/index.php?action=bieudoline&id=<?php echo $value['id']; ?>"> <?php echo $value['tenmay'] ?> </a></th>
							      <td style="color: black;border-bottom: none;"><?php echo $value['tiendo']; ?></td>
							    </tr>


							    <?php }else{ ?>

							    <tr>
							      <th scope="row" style="color: black;border-bottom: none;"><a style="color: black;border-bottom: none;" href="../Controller/index.php?action=bieudo&id=<?php echo $value['id']; ?>"> <?php echo $value['tenmay'] ?></a></th>
							      <td style="color:black;border-bottom: none;"><?php echo $value['tiendo']; ?></td>
							    </tr>
							    <?php } } ?>

							    	<?php foreach ($databophan5 as $value) { ?>

							    <tr>
							      <th scope="row" style="color: black;border-bottom: none;"><a style="color: black;" href="../Controller/index.php?action=bieudoline1&id=<?php echo $value['id']; ?>"> <?php echo $value['tenmay'] ?></a></th>
							      <td style="color:black;border-bottom: none;"><?php echo $value['tiendo']; ?></td>
							    </tr>
							    <?php } ?>

							  </tbody>
							</table>
					</article>

				</div>

			</section>
       


			<div style="display: grid;grid-template-columns: repeat(2, 1fr);column-gap: 1.6rem;row-gap: 2rem;margin-top: 1rem;grid-template-columns: 49% 48% ;">
				<div style="background: #c7deff;border-radius: 20px; height: 380px;box-shadow:-7px -7px 15px rgb(255, 255, 255), 7px 7px 15px rgba(121, 130, 160, 0.747);">
				 	<div id="piechart" style="z-index: 2;"></div>
				</div>
				<div onclick="pcsh1()" style="background: #c7deff;border-radius: 20px; height: 380px;box-shadow:-7px -7px 15px rgb(255, 255, 255), 7px 7px 15px rgba(121, 130, 160, 0.747);">
					<div id="columnchart"></div>
				</div>
				<div id="pc2" style="background: #c7deff;border-radius: 20px; height: 400px;box-shadow:-7px -7px 15px rgb(255, 255, 255), 7px 7px 15px rgba(121, 130, 160, 0.747);">
				 	<div id="columnchart1"></div>
				</div>
				<div id="pc1" style="background: #c7deff;border-radius: 20px; height: 400px;box-shadow:-7px -7px 15px rgb(255, 255, 255), 7px 7px 15px rgba(121, 130, 160, 0.747);">
					<div id="columnchart2"></div>
				</div>
			</div>
			



		</div>
	   </div>

	   


<!-- mật Khẩu -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nhập Mật Khẩu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Mật Khẩu:</label>
            <input type="password" class="form-control" id="idmatkhau">
          </div>
          <div>
              <span id="span">
                  
              </span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="xacnhan" class="btn btn-primary">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    document.getElementById("xacnhan").addEventListener("click", myFunction);

function myFunction() {

     var x = document.getElementById("idmatkhau");
     var y = document.getElementById("span");
  x.value = x.value.toUpperCase();
    if(x.value == '<?php echo $matkhau1[1] ?>'){
        window.location="../Controller/index.php?action=usermanager&page=1";
    }else{
      document.getElementById("idmatkhau").classList.add("is-invalid");
      document.getElementById("span").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("span").style.color = 'red'
    }
    
}


</script>

 <script src="../plugins/jquery-2.2.4.min.js"></script>
 <script src="../plugins/jquery.appear.min.js"></script>
 <script src="../plugins/jquery.easypiechart.min.js"></script> 
 <script>
    'use strict';

var $window = $(window);

function run()
{
	var fName = arguments[0],
		aArgs = Array.prototype.slice.call(arguments, 1);
	try {
		fName.apply(window, aArgs);
	} catch(err) {
		 
	}
};
 
/* chart
================================================== */
function _chart ()
{
	$('.b-skills').appear(function() {
		setTimeout(function() {
			$('.chart').easyPieChart({
				easing: 'easeOutElastic',
				delay: 3000,
				barColor: '#369670',
				trackColor: '#fff',
				scaleColor: false,
				lineWidth: 21,
				trackWidth: 21,
				size: 250,
				lineCap: 'round',
				onStep: function(from, to, percent) {
					this.el.children[0].innerHTML = Math.round(percent);
				}
			});
		}, 150);
	});
};
 

$(document).ready(function() {
  
	run(_chart);
  
    
});


    
    </script>
 
  

<script type="text/javascript">

	window.onload = function()
{
	var tong = "<?php echo floor($tonggg); ?>"
	if(tong < 10)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test100");
	}
	if(tong < 20&&tong > 10)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test40");
	}
	if(tong < 30&&tong >= 20)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test80");
	}
	if(tong < 40&&tong >= 30)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test120");
	}
	if(tong < 50&&tong >= 40)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test160");
	}
	if(tong < 60&&tong >= 50)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test200");
	}
	if(tong < 70&&tong >= 60)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test240");
	}
	if(tong < 80&&tong >= 70)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test280");
	}
	if(tong < 90&&tong >= 80)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test320");
	}
	if(tong < 100&&tong >= 90)
	{
    var car = document.getElementById('test100')
	  car.classList.add("test360");
	}
} 

</script>
<script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
				['Loại phép', 'Thống kê'],
				<?php 
					while($rows = mysqli_fetch_array($result)){
						echo "['".$rows["type_leave"]."', ".$rows["type_leave_no"]."],";
						}
				?>

        ]);

          // Optional; add a title and set the width and height of the chart
            var options = {backgroundColor: '#c7deff',chartArea:{width:"400" , height:"300"},width:"620" , height:"350",
                            animation: {
                                    duration: 100,
                                    easing: 'in',
                                    startup: true
                            },
                            slices: { 0: {offset: 0.1},
                                      1: {offset: 0.01},
                                      2: {offset: 0.01},
                                      3: {offset: 0.01},
                                      4: {offset: 0.01},
                            },
                            is3D: true
        };

          // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            var counter = 0;

            var handler = setInterval(function(){ 
                counter = counter + 0.05,
                options = {title: 'Điểm danh trong ngày',backgroundColor: '#c7deff' ,chartArea:{width:"400" , height:"300"} ,height :"390",
                            animation: {
                                    duration: 100,
                                    easing: 'in',
                                    startup: true
                            },
                            slices: { 0: {offset: 0},
                                      1: {offset: counter},
                                      2: {offset: counter},
                                      3: {offset: counter},
                                      4: {offset: counter},
                            },
                            is3D: true
        };
                chart.draw(data, options);

                if (counter > 0.3) clearInterval(handler);
            }, 200);        
          
      }
    </script>
	<script type="text/javascript">
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		// Draw the chart and set the chart values
		function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Ngày', 'Đi làm', 'Nghỉ làm'],
		['<?php echo $thu2; ?>',<?php echo $tilenghilamthu2; ?>,<?php echo $tiledilamthu2; ?>],
		['<?php echo $thu3; ?>',<?php echo $tilenghilamthu3; ?>,<?php echo $tiledilamthu3; ?>],
		['<?php echo $thu4; ?>',<?php echo $tilenghilamthu4; ?>,<?php echo $tiledilamthu4; ?>],
        ['<?php echo $thu5; ?>',<?php echo $tilenghilamthu5; ?>,<?php echo $tiledilamthu5; ?>],
        ['<?php echo $thu6; ?>',<?php echo $tilenghilamthu6; ?>,<?php echo $tiledilamthu6; ?>],
        ['<?php echo $thu7; ?>',<?php echo $tilenghilamthu7; ?>,<?php echo $tiledilamthu7; ?>],
		
		
		]);

		// Optional; add a title and set the width and height of the chart
		var options = {title: 'Điểm danh trong tuần',
						titleTextStyle: {
							color: "red",               // color 'red' or '#cc00cc'
							fontName: "Courier New",    // 'Times New Roman'
							fontSize: 25,               // 12, 18
							bold: true,                 // true or false
							italic: true                // true of false
						},colors: ['#DA70D6', '#00CED1'] ,backgroundColor: '#c7deff',height:"380",width:"600",vAxis: {
            minValue: 0,
            maxValue: 100,
            format: '#\'%\''
        } ,  animation: {
          duration: 500,
          easing: 'out',
          startup: true
      }};

		// Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
      
		chart.draw(data, options);
		}
	</script>
	<script type="text/javascript">
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		// Draw the chart and set the chart values
		function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Tuần', 'Đi làm', 'Nghỉ làm'],
		['Tuần 1',<?php echo $tilenghilamtuan1; ?>,<?php echo $tiledilamtuan1; ?>],
		['Tuần 2',<?php echo $tilenghilamtuan2; ?>,<?php echo $tiledilamtuan2; ?>],
		['Tuần 3',<?php echo $tilenghilamtuan3; ?>,<?php echo $tiledilamtuan3; ?>],
		['Tuần 4',<?php echo $tilenghilamtuan4; ?>,<?php echo $tiledilamtuan4; ?>],
		]);

		// Optional; add a title and set the width and height of the chart
		var options = {title: 'Điểm danh trong tháng',
						titleTextStyle: {
							color: "red",               // color 'red' or '#cc00cc'
							fontName: "Courier New",    // 'Times New Roman'
							fontSize: 25,               // 12, 18
							bold: true,                 // true or false
							italic: true                // true of false
						},colors: ['#7B68EE','#FF7F50'], backgroundColor: '#c7deff',height:"400",width:"600",  
                animation:{
                            duration: 500,
                            easing: 'out',
                },
                vAxis: {
                    minValue: 0,
                    maxValue: 100,
                    format: '#\'%\''
                } 
            };

		// Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.ColumnChart(document.getElementById('columnchart1'));
        chart.draw(data, options);
		}
    


	</script>
	
    <script type="text/javascript">
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		// Draw the chart and set the chart values
		function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Tháng', 'Đi làm', 'Nghỉ làm'],
		['1',<?php echo $tilenghilamthang1; ?>,<?php echo $tiledilamthang1; ?>],
		['2',<?php echo $tilenghilamthang2; ?>,<?php echo $tiledilamthang2; ?>],
		['3',<?php echo $tilenghilamthang3; ?>,<?php echo $tiledilamthang3; ?>],
		['4',<?php echo $tilenghilamthang4; ?>,<?php echo $tiledilamthang4; ?>],
		['5',<?php echo $tilenghilamthang5; ?>,<?php echo $tiledilamthang5; ?>],
		['6',<?php echo $tilenghilamthang6; ?>,<?php echo $tiledilamthang6; ?>],
		['7',<?php echo $tilenghilamthang7; ?>,<?php echo $tiledilamthang7; ?>],
		['8',<?php echo $tilenghilamthang8; ?>,<?php echo $tiledilamthang8; ?>],
		['9',<?php echo $tilenghilamthang9; ?>,<?php echo $tiledilamthang9; ?>],
		['10',<?php echo $tilenghilamthang10; ?>,<?php echo $tiledilamthang10; ?>],
		['11',<?php echo $tilenghilamthang11; ?>,<?php echo $tiledilamthang11; ?>],
		['12',<?php echo $tilenghilamthang12; ?>,<?php echo $tiledilamthang12; ?>],
		]);

		// Optional; add a title and set the width and height of the chart
		var options = {title: 'Điểm danh trong năm',colors: ['#6495ED', '#DC143C'],backgroundColor: '#c7deff',height:"400",width:"600",vAxis: {
            minValue: 0,
            maxValue: 100,
            format: '#\'%\''
        } ,  animation: {
          duration: 500,
          easing: 'out',
          startup: true
      }};

		// Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.ColumnChart(document.getElementById('columnchart2'));
		chart.draw(data, options);
		}
	</script>
	<script>
		function pcsh1() {
					var x = document.getElementById("pc1");
					var y = document.getElementById("pc2");
					var z = document.getElementById("app");
					var w = document.getElementById("app-header");
					if (x.classList.contains("hide") && y.classList.contains("hide")) {
					x.classList.remove("hide");
					y.classList.remove("hide");
					z.style.height = '110vh';
					w.style.height = '110vh';
					
					} else {
					x.classList.add("hide");
					y.classList.add("hide");
					z.style.height = '170vh';
					w.style.height = '170vh';
					}
			} 
    </script>



</body>
</html>
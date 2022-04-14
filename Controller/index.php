<?php
// session_start();
if(isset($_GET['action'])){
	$action = $_GET['action'];
}else{
	$action ='';
}
$thanhcong = array();
switch ($action) {
	case 'add':{
	// 	if(isset($_POST['addluu']))
	// 	{
	// 		$tenmay = $_POST['tenmay'];
 //            $tiendo = '0%';
	// 		$ngaybatdau = $_POST['ngaybatdau'];
	// 		$ngaydukien = $_POST['ngaydukien'];
	// 		$nhomthuchien = $_POST['nhomthuchien'];
	// 		$bophan = $_POST['bophan'];
	// 		$thietke = '0%';
	// 		$xuatbanve = '0%';
	// 		$datdogiacong = '0%';
	// 		$datdotieuchuancokhi = '0%';
	// 		$datdotieuchuandien = '0%';
	// 		$lapdatcokhi = '0%';
	// 		$lapdattudien = '0%';
	// 		$suachuongtrinh = '0%';
	// 		$chinhmay = '0%';
	// 		$chaybuyoff = '0%';	

 //      if(($_POST['thietke']+$_POST['xuatbanve']+$_POST['datdogiacong']+$_POST['datdotieuchuancokhi']+$_POST['datdotieuchuandien']+$_POST['lapdatcokhi']+$_POST['lapdattudien']+$_POST['suachuongtrinh']+$_POST['chinhmay']+$_POST['chaybuyoff'])==100)
 //            {
	// 		$thietke1 = $_POST['thietke'].'%';
	// 		$xuatbanve1 = $_POST['xuatbanve'].'%';
	// 		$datdogiacong1 = $_POST['datdogiacong'].'%';
	// 		$datdotieuchuancokhi1 = $_POST['datdotieuchuancokhi'].'%';
	// 		$datdotieuchuandien1 = $_POST['datdotieuchuandien'].'%';
	// 		$lapdatcokhi1 = $_POST['lapdatcokhi'].'%';
	// 		$lapdattudien1 = $_POST['lapdattudien'].'%';
	// 		$suachuongtrinh1 = $_POST['suachuongtrinh'].'%';
	// 		$chinhmay1 = $_POST['chinhmay'].'%';
	// 		$chaybuyoff1 = $_POST['chaybuyoff'].'%';
            
	// 		if($db->InsertData($tenmay,$tiendo,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien)&&$db->InsertData1($tenmay,$ngaybatdau,$thietke,$xuatbanve,$datdogiacong,$datdotieuchuancokhi,$datdotieuchuandien,$lapdatcokhi,$lapdattudien,$suachuongtrinh,$chinhmay,$chaybuyoff)&&$db->InsertData2($tenmay,$ngaybatdau,$thietke1,$xuatbanve1,$datdogiacong1,$datdotieuchuancokhi1,$datdotieuchuandien1,$lapdatcokhi1,$lapdattudien1,$suachuongtrinh1,$chinhmay1,$chaybuyoff1))
	// 		{
	// 			header('Location: index.php?controller=may-moc&action=home');
	// 		}
	// 	   }
	// 		// else{
	// 	 //    $message = "Tổng Các Công Đoạn Phải Bằng 100 Vui Lòng Điền Lại";
 //   //          echo "<script type='text/javascript'>alert('$message');</script>";     
	// 	 //  }
	// 	}
         require_once('../View/maymoc/add.php');
         break;
	}
	case 'addtiendo':{

		require_once('../View/maymoc/addtiendo.php');
        break;
	}
	case 'edit':{
	// 	if(isset($_GET['id'])){
 //           $id = $_GET['id'];
 //           $table = "tiendomaymoc";
 //           $dataID = $db->getDataID($table,$id);

 //           if(isset($_POST['edit']))
 //           {
 //           	$tenmay = $_POST['tenmay'];
 //           	$result = strrchr( $_POST['tiendo'], '%');
 //           	if($result == false)
 //           	{
 //             	$tiendo = $_POST['tiendo'].'%';
 //            }else{
 //            	$tiendo = $_POST['tiendo'];
 //            }
 //           	$ngaybatdau = $_POST['ngaybatdau'];
 //           	$ngaydukien = $_POST['ngaydukien'];
 //           	$nhomthuchien = $_POST['nhomthuchien'];
 //           	$bophan = $_POST['bophan'];
 //           	if($db->UpdateData($id,$tenmay,$tiendo,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien))
 //           	{
 //           		header('Location: index.php?controller=may-moc&action=home#divtimkiem');
 //           	}
 //           }

	// 	}
         require_once('../View/maymoc/edit.php');
         break;
	}
	case 'editt':{
		    
// 		   if(isset($_GET['id'])){
//            $id = $_GET['id'];
//            $table = "tiendomaymoc";
//            $dataID = $db->getDataID($table,$id);
//            if(isset($_POST['edit']))
//            {
//            	$tenmay = $_POST['tenmay'];
//            	$ngaybatdau = $_POST['ngaybatdau'];
//            	$ngaydukien = $_POST['ngaydukien'];
//            	$nhomthuchien = $_POST['nhomthuchien'];
//            	$bophan = $_POST['bophan'];
//            	if($db->UpdateData($id,$tenmay,$ngaybatdau,$ngaydukien,$bophan,$nhomthuchien))
//            	{
//            		header('Location: index.php?controller=may-moc&action=home#divtimkiem');
//            	}
//            } 

// 		$tablee = 'tiendo';
// 		$tenmay = $dataID['tenmay'];
// 		$ngaybatdau = $dataID['ngaybatdau'];
// 		$datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);

// 		$tablee1 = 'tiendoquydinh';
//         $datatiendo1 = $db->getDatatiendo1($tablee1,$tenmay,$ngaybatdau);
        

//         $chuoidau = $dataID['tiendo'];
// 	    $chuoi = substr($chuoidau, 0, -1);

// 	    $dau = $datatiendo1['thietke'];
// 	    $ch = substr($dau, 0, -1);
// 	    $chuoidau1 = $datatiendo['thietke'];
// 	    $chuoi1 = substr($chuoidau1, 0, -1);
// 	    $tong1 = (($ch*$chuoi1)/100);

//         $dau1 = $datatiendo1['xuatbanve'];
// 	    $ch1 = substr($dau1, 0, -1);
// 	    $chuoidau2 = $datatiendo['xuatbanve'];
// 	    $chuoi2 = substr($chuoidau2, 0, -1);
// 	    $tong2 = (($ch1*$chuoi2)/100);
        
//         $dau2 = $datatiendo1['datdogiacong'];
// 	    $ch2 = substr($dau2, 0, -1);
// 	    $chuoidau3 = $datatiendo['datdogiacong'];
// 	    $chuoi3 = substr($chuoidau3, 0, -1);
// 	    $tong3 = (($ch2*$chuoi3)/100);
        
//         $dau3 = $datatiendo1['datdotieuchuancokhi'];
// 	    $ch3 = substr($dau3, 0, -1);
// 	    $chuoidau4 = $datatiendo['datdotieuchuancokhi'];
// 	    $chuoi4 = substr($chuoidau4, 0, -1);
// 	    $tong4 = (($ch3*$chuoi4)/100);
        
//         $dau4 = $datatiendo1['datdotieuchuandien'];
// 	    $ch4 = substr($dau4, 0, -1);
// 	    $chuoidau5 = $datatiendo['datdotieuchuandien'];
// 	    $chuoi5 = substr($chuoidau5, 0, -1);
// 	    $tong5 = (($ch4*$chuoi5)/100);
        
//         $dau5 = $datatiendo1['lapdatcokhi'];
// 	    $ch5 = substr($dau5, 0, -1);
// 	    $chuoidau6 = $datatiendo['lapdatcokhi'];
// 	    $chuoi6 = substr($chuoidau6, 0, -1);
// 	    $tong6 = (($ch5*$chuoi6)/100);
        
//         $dau6 = $datatiendo1['lapdattudien'];
// 	    $ch6 = substr($dau6, 0, -1);
// 	    $chuoidau7 = $datatiendo['lapdattudien'];
// 	    $chuoi7 = substr($chuoidau7, 0, -1);
// 	    $tong7 = (($ch6*$chuoi7)/100);
        
//         $dau7 = $datatiendo1['suachuongtrinh'];
// 	    $ch7 = substr($dau7, 0, -1);
// 	    $chuoidau8 = $datatiendo['suachuongtrinh'];
// 	    $chuoi8 = substr($chuoidau8, 0, -1);
// 	    $tong8 = (($ch7*$chuoi8)/100);
        
//         $dau8 = $datatiendo1['chinhmay'];
// 	    $ch8 = substr($dau8, 0, -1);
// 	    $chuoidau9 = $datatiendo['chinhmay'];
// 	    $chuoi9 = substr($chuoidau9, 0, -1);
// 	    $tong9 = (($ch8*$chuoi9)/100);
        
//         $dau9 = $datatiendo1['chaybuyofff'];
// 	    $ch9 = substr($dau9, 0, -1);
// 	    $chuoidau10 = $datatiendo['chaybuyoff'];
// 	    $chuoi10 = substr($chuoidau10, 0, -1);
// 	    $tong10 = (($ch9*$chuoi10)/100);
        

// 	    $phantram = ($tong1+$tong2+$tong3+$tong4+$tong5+$tong6+$tong7+$tong8+$tong9+$tong10);
// 	    $tong = $phantram.'%';

//         if(isset($_POST['namesubmitthietke']))
//         {
//         $tentiendo = 'thietke';
//         $tiendo = $_POST['nameinputthietke'].'%';
// 		if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
//             header('Refresh:0');
// 		}
// 	    }
//         if($datatiendo['thietke']=='100%')
// 	    {
// 	    if(isset($_POST['submitxuatbanve']))
//         {
// 	        $tentiendo = 'xuatbanve';
// 	        $tiendo = $_POST['inputxuatbanve'].'%';
// 			if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
				
// 	            header('Refresh:0');
// 	           }

// 		}
// 	    }
         
//         if($datatiendo['xuatbanve']=='100%')
// 	    {
// 	    if(isset($_POST['submitđatogiacong']))
//         {
//         $tentiendo = 'datdogiacong';
//         $tiendo = $_POST['inputdogiacong'].'%';
// 		if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
//             header('Refresh:0');
// 		}
// 	    }
// 	    }

// 	    if($datatiendo['datdogiacong']=='100%')
// 	    {
// 	    if(isset($_POST['submitdotieuchuancokhi']))
//         {
//         $tentiendo = 'datdotieuchuancokhi';
//         $tiendo = $_POST['inputdotieuchuancokhi'].'%';
// 		if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
//             header('Refresh:0');
// 		}
// 	    }
// 	    }
        
//         if($datatiendo['datdotieuchuancokhi']=='100%')
//         {
// 	    if(isset($_POST['submitdotieuchuandien']))
//         {
//         $tentiendo = 'datdotieuchuandien';
//         $tiendo = $_POST['inputdotieuchuandien'].'%';
// 		if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
//             header('Refresh:0');
// 		}
// 	    }
// 	    }

//         if($datatiendo['datdotieuchuandien']=='100%')
//         {
// 	    if(isset($_POST['submitlapdatcokhi']))
//         {
//         $tentiendo = 'lapdatcokhi';
//         $tiendo = $_POST['inputlapdatcokhi'].'%';
// 		if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
//             header('Refresh:0');
// 		}
// 	    }
// 	    }
        
//         if($datatiendo['lapdatcokhi']=='100%')
//         {
// 	    if(isset($_POST['submitlapdattudien']))
//         {
//         $tentiendo = 'lapdattudien';
//         $tiendo = $_POST['inputlapdattudien'].'%';
// 		if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
//             header('Refresh:0');
// 		}
// 	    }
// 	    }
        
//         if($datatiendo['lapdattudien']=='100%')
//         {
// 	    if(isset($_POST['submitsuachuongtrinh']))
//         {
//         $tentiendo = 'suachuongtrinh';
//         $tiendo = $_POST['inputsuachuongtrinh'].'%';
// 		if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
//             header('Refresh:0');
// 		}
// 	    }
// 	    }

//         if($datatiendo['suachuongtrinh']=='100%')
//         {
// 	    if(isset($_POST['submitchinhmay']))
//         {
//         $tentiendo = 'chinhmay';
//         $tiendo = $_POST['inputchinhmay'].'%';
// 		if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
//             header('Refresh:0');
// 		}
// 	    }
// 	    }
        
//         if($datatiendo['chinhmay']=='100%')
//         {
// 	    if(isset($_POST['submitchaybuyoff']))
//         {
//         $tentiendo = 'chaybuyoff';
//         $tiendo = $_POST['inputchaybuyoff'].'%';
// 		if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
//             header('Refresh:0');
// 		}
// 	    }
// 	    }
// 	     $db->UpdateTienDo($id,$tong);
         require_once('../View/maymoc/editt.php');
         break;
	}
// }

	case 'delete':{
	// 	if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
	// 		$table = "tiendomaymoc";
	// 		if($db->Delete($id,$table))
	// 		{
 //               header('location: Home.php#divtimkiem');
	// 		}
	// 		else{
	// 			 header('location: Home.php#divtimkiem');
	// 		}
	// 	}
         require_once('../View/maymoc/delete.php');
         break;
	}
	case 'list':{
	// 	$table = "tiendomaymoc";
	// 	$data = $db->getAllData($table);
         require_once('../View/maymoc/list.php');
         break;
	}
	case 'tim-kiem':{
	// 	$table = 'tiendomaymoc';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	if(isset($_GET['tukhoa']))
	// 	{
	// 		$bophan = $_GET['bophan'];
	// 		$key = $_GET['tukhoa'];
	// 		$table = "tiendomaymoc";
 //            $datasearch = $db->Search($table,$key,$bophan);
	// 	}
		require_once('../View/maymoc/timkiemmoi.php');
		break;
	}
	case 'tim-kiem1':{
	// 	$table = 'tiendomaymoc';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	if(isset($_GET['tukhoa']))
	// 	{
	// 		$key = $_GET['tukhoa'];
	// 		$table = "tiendomaymoc";
 //            $datasearch = $db->Search($table,$key);
	// 	}
		require_once('../View/maymoc/timkiemmoi1.php');
		break;
	}
	case 'home':{
	// 	$AEC = 'AEC';
	// 	$TSC = 'TSC';
	// 	$APS = 'APS';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$dataAEC = $db->getAllDatabophan($table,$AEC);
	// 	$dataTSC = $db->getAllDatabophan($table,$TSC);
	// 	$dataAPS = $db->getAllDatabophan($table,$APS);
	// 	$num_row = $db->count_row($table);
	// 	$count_row_AEC = $db->count_row_bophan($table,$AEC);
	// 	$count_row_TSC = $db->count_row_bophan($table,$TSC);
	// 	$count_row_APS = $db->count_row_bophan($table,$APS);
		require_once('../View/maymoc/Home.php');
		break;
	}
	case 'home1':{
	// 	$AEC = 'AEC';
	// 	$TSC = 'TSC';
	// 	$APS = 'APS';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$dataAEC = $db->getAllDatabophan($table,$AEC);
	// 	$dataTSC = $db->getAllDatabophan($table,$TSC);
	// 	$dataAPS = $db->getAllDatabophan($table,$APS);
	// 	$num_row = $db->count_row($table);
	// 	$count_row_AEC = $db->count_row_bophan($table,$AEC);
	// 	$count_row_TSC = $db->count_row_bophan($table,$TSC);
	// 	$count_row_APS = $db->count_row_bophan($table,$APS);
		require_once('../View/maymoc/Home1.php');
		break;
	}
	case 'login':{
	// 	$table = 'users';
	// 	if(isset($_POST['submit'])){
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if ($username == "" || $password =="") {
	//            echo "<span style='color:red;margin-left:44%;font-size:100%;'>Vui Lòng Không Để Trống</span>";
	//         }
	//         else{
 //            $query = $db->login($table,$username,$password);
 //               if ($query==0) {
 //              echo "<span style='color:red;margin-left:44%;font-size:100%;'>Sai Tài Khoản Mật Khẩu</span>";
 //              }else{
 //              	$_SESSION['username'] = $username;
 //                $_SESSION['dangnhap'] = $query['name_admin'];
 //                $_SESSION['id'] = $query['id'];
 //                header('Location: Home.php');
 //          }
 //        }
 //    }
		require_once('../View/maymoc/login.php');
		break;
	}
	case 'loginuser':{
	// 	$table = 'usersview';
	// 	if(isset($_POST['submit'])){
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if ($username == "" || $password =="") {
	//            echo "<span style='color:red;margin-left:44%;font-size:100%;'>Vui Lòng Không Để Trống</span>";
	//         }
	//         else{
 //            $query = $db->login($table,$username,$password);
 //               if ($query==0) {
 //              echo "<span style='color:red;margin-left:44%;font-size:100%;'>Sai Tài Khoản Mật Khẩu</span>";
 //              }else{
 //              	$_SESSION['username'] = $username;
 //                $_SESSION['dangnhap'] = $query['name_admin'];
 //                $_SESSION['id'] = $query['id'];
 //                header('Location: index.php?controller=may-moc&action=home1');
 //          }
 //        }
 //    }
		require_once('../View/maymoc/loginuser.php');
		break;
	}
	case 'logindeveloper':{
	// 	$table = 'developer';
	// 	if(isset($_POST['submit'])){
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if ($username == "" || $password =="") {
	//           echo "<span style='color:red;margin-left:44%;font-size:100%;'>Vui Lòng Không Để Trống</span>";
	//         }
	//         else{
 //            $query = $db->login($table,$username,$password);
 //               if ($query==0) {
 //              echo "<span style='color:red;margin-left:44%;font-size:100%;'>Sai Tài Khoản Mật Khẩu</span>";
 //              }else{
 //              	$_SESSION['username'] = $username;
 //                $_SESSION['dangnhap'] = $query['name_admin'];
 //                $_SESSION['id'] = $query['id'];
 //                header('Location: index.php?controller=may-moc&action=developer');
 //          }
 //        }
 //    }
		require_once('../View/maymoc/logindeveloper.php');
		break;
	}
	case 'selectaecdata':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'AEC';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/selectaecdata.php');
		break;
	}
	case 'dataaec':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'AEC';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/dataaec.php');
		break;
	}
	case 'dataaec1':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'AEC';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/dataaec1.php');
		break;
	}
	case 'selecttscdata':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'TSC';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/selecttscdata.php');
		break;
	}
	case 'datatsc1':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'TSC';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/datatsc1.php');
		break;
	}
	case 'datatsc':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'TSC';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/datatsc.php');
		break;
	}
	case 'selectapsdata':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'APS';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/selectapsdata.php');
		break;
	}
	case 'dataaps':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'APS';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/dataaps.php');
		break;
	}
	case 'dataaps1':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'APS';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/dataaps1.php');
		break;
	}
	case 'selectaecdata1':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'AEC';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/selectaecdata1.php');
		break;
	}
	case 'selecttscdata1':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'TSC';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/selecttscdata1.php');
		break;
	}
	case 'selectapsdata1':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'APS';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$num_row = $db->count_row($table);
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/selectapsdata1.php');
		break;
	}
	case 'tiendo':{
	// 	$table = 'tiendomaymoc';
	// 	$bophan = 'APS';
	// 	$databophan = $db->getAllDatabophan($table,$bophan);
		require_once('../View/maymoc/tiendo.php');
		break;
	}
	case 'bieudo':{
	// 	if(isset($_GET['id'])){
 //           $id = $_GET['id'];
 //           $table = "tiendomaymoc";
 //           $dataID = $db->getDataID($table,$id);

	// 	$tablee = 'tiendo';
	// 	$tenmay = $dataID['tenmay'];
	// 	$ngaybatdau = $dataID['ngaybatdau'];
	// 	$datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
	//    }
	// 	if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
	// 		$table = 'tiendomaymoc';
	// 		$dataID = $db->getDataID($table,$id); 
	// 	}
		require_once('../View/maymoc/bieudo.php');
		break;
	}
	case 'bieudocot':{
	// 	if(isset($_GET['id'])){
 //           $id = $_GET['id'];
 //           $table = "tiendomaymoc";
 //           $dataID = $db->getDataID($table,$id);

	// 	$tablee = 'tiendo';
	// 	$tenmay = $dataID['tenmay'];
	// 	$ngaybatdau = $dataID['ngaybatdau'];
	// 	$datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
	// }
	// 	if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
	// 		$table = 'tiendomaymoc';
	// 		$dataID = $db->getDataID($table,$id); 
	// 	}
		require_once('../View/maymoc/bieudocot.php');
		break;
	}
	case 'bieudoduong':{
	// 	if(isset($_GET['id'])){
 //           $id = $_GET['id'];
 //           $table = "tiendomaymoc";
 //           $dataID = $db->getDataID($table,$id);

	// 	$tablee = 'tiendo';
	// 	$tenmay = $dataID['tenmay'];
	// 	$ngaybatdau = $dataID['ngaybatdau'];
	// 	$datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
	// }
	// 	if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
	// 		$table = 'tiendomaymoc';
	// 		$dataID = $db->getDataID($table,$id); 
	// 	}
		require_once('../View/maymoc/bieudoduong.php');
		break;
	}
	case 'bieudotron':{
	// 	if(isset($_GET['id'])){
 //           $id = $_GET['id'];
 //           $table = "tiendomaymoc";
 //           $dataID = $db->getDataID($table,$id);

	// 	$tablee = 'tiendo';
	// 	$tenmay = $dataID['tenmay'];
	// 	$ngaybatdau = $dataID['ngaybatdau'];
	// 	$datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
	// }
	// 	if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
	// 		$table = 'tiendomaymoc';
	// 		$dataID = $db->getDataID($table,$id); 
	// 	}
		require_once('../View/maymoc/bieudotron.php');
		break;
	}
	case 'bieudo1':{
	// 	if(isset($_GET['id'])){
 //           $id = $_GET['id'];
 //           $table = "tiendomaymoc";
 //           $dataID = $db->getDataID($table,$id);

	// 	$tablee = 'tiendo';
	// 	$tenmay = $dataID['tenmay'];
	// 	$ngaybatdau = $dataID['ngaybatdau'];
	// 	$datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
	// }
	// 	if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
	// 		$table = 'tiendomaymoc';
	// 		$dataID = $db->getDataID($table,$id); 
	// 	}
		require_once('../View/maymoc/bieudo1.php');
		break;
	}
	case 'bieudocot1':{
	// 	if(isset($_GET['id'])){
 //           $id = $_GET['id'];
 //           $table = "tiendomaymoc";
 //           $dataID = $db->getDataID($table,$id);

	// 	$tablee = 'tiendo';
	// 	$tenmay = $dataID['tenmay'];
	// 	$ngaybatdau = $dataID['ngaybatdau'];
	// 	$datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
	// }
	// 	if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
	// 		$table = 'tiendomaymoc';
	// 		$dataID = $db->getDataID($table,$id); 
	// 	}
		require_once('../View/maymoc/bieudocot1.php');
		break;
	}
	case 'bieudoduong1':{
	// 	if(isset($_GET['id'])){
 //           $id = $_GET['id'];
 //           $table = "tiendomaymoc";
 //           $dataID = $db->getDataID($table,$id);

	// 	$tablee = 'tiendo';
	// 	$tenmay = $dataID['tenmay'];
	// 	$ngaybatdau = $dataID['ngaybatdau'];
	// 	$datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
	// }
	// 	if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
	// 		$table = 'tiendomaymoc';
	// 		$dataID = $db->getDataID($table,$id); 
	// 	}
		require_once('../View/maymoc/bieudoduong1.php');
		break;
	}
	case 'bieudotron1':{
	// 	if(isset($_GET['id'])){
 //           $id = $_GET['id'];
 //           $table = "tiendomaymoc";
 //           $dataID = $db->getDataID($table,$id);

	// 	$tablee = 'tiendo';
	// 	$tenmay = $dataID['tenmay'];
	// 	$ngaybatdau = $dataID['ngaybatdau'];
	// 	$datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
	// }
	// 	if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
	// 		$table = 'tiendomaymoc';
	// 		$dataID = $db->getDataID($table,$id); 
	// 	}
		require_once('../View/maymoc/bieudotron1.php');
		break;
	}
	case 'themthanhvien':{
	// 	$table = 'users';
		
		require_once('../View/maymoc/themnhanvien.php');
		break;
	}
	case 'adminmanager':{
	// 	$table = 'users';
	// 	$data = $db->getAllData($table);
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	if(isset($_POST['add']))
	// 	{
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if($db->Insertuser($table,$username,$password)){
	// 			header('Location: index.php?controller=may-moc&action=adminmanager');
	// 		}
	// 	}
	// 	if(isset($_POST['updatedata'])){
	// 		$id = $_POST['editid'];
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if($db->Updateuser($table,$id,$username,$password)){
	// 			header('Location: index.php?controller=may-moc&action=adminmanager');
	// 		}
	// 	}
	// 	if(isset($_POST['deletedata'])){
	// 		$id = $_POST['delete_id'];
	// 		if($db->Deleteuser($table,$id)){
	// 			header('Location:index.php?controller=may-moc&action=adminmanager');
	// 		}
	// 	}
		require_once('../View/maymoc/adminmanager.php');
		break;
	}
	case 'usermanager':{
	// 	$table = 'usersview';
	// 	if(isset($_GET['page'])){
 //          $page = $_GET['page'];
	// 	}else{
	// 	  $page = 1;
	// 	}
	// 	$rowsPerPage = isset($_POST['page']) ? $_POST['page'] : 5;   
	// 	$perRow = $page * $rowsPerPage - $rowsPerPage;
 //        $totalRows = $db->count_row($table);
	// 	$data = $db->getAllData($table);

	// 	$data5 = $db->usernamemanager($table,$perRow,$rowsPerPage);

	// 	$totalPage = ceil($totalRows/$rowsPerPage);
 //        $listPage = "";
 //            for ($i = 1; $i <= $totalPage; $i++){
 //        	if($page>1){
 //                $listPage0 = '<li class="page-item"><a class="page-link" href="index.php?controller=may-moc&action=usermanager&page=1">Đầu</a></li>';
 //                $listPage1 = '<li class="page-item"><a class="page-link" href="index.php?controller=may-moc&action=usermanager&page='.($page-1).'"><</a></li>';
 //                  }else{
 //                $listPage0 = '<li class="page-item disabled">
 //                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Đầu</a>
 //                      </li>';  
 //                $listPage1 = '<li class="page-item disabled">
 //                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><</a>
 //                    </li>'; 
 //                  }
 //        	if($page == $i){
 //        		$listPage.='<li class="page-item active" aria-current="page">
 //                      <a class="page-link" href="index.php?controller=may-moc&action=usermanager&page='.$i.'">'.$i.'</a>
 //                    </li>';
 //        	}else{
 //        		$listPage .= '<li class="page-item"><a class="page-link" href="index.php?controller=may-moc&action=usermanager&page='.$i.'">'.$i.'</a></li>';
 //        	}
 //        	if($page==$totalPage){
 //                $listPage2 = '<li class="page-item disabled">
 //                        <a class="page-link" href="#" tabindex="+1" aria-disabled="true">></a>
 //                      </li>'; 
	//               $listPage3 = '<li class="page-item disabled">
	//                 <a class="page-link" href="#" tabindex="+1" aria-disabled="true">Cuối</a>
	//               </li>'; 
 //                  }
 //            if($page<$totalPage){
 //                $listPage2 = '<li class="page-item"><a class="page-link" href="index.php?controller=may-moc&action=usermanager&page='.($page+1).'">></a></li>';
 //                 $listPage3 = '<li class="page-item"><a class="page-link" href="index.php?controller=may-moc&action=usermanager&page='.$totalPage.'">Cuối</a></li>';
 //            }
          
 //        }

	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	if(isset($_POST['add']))
	// 	{
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if($db->Insertuser($table,$username,$password)){
	// 			header('Location: index.php?controller=may-moc&action=usermanager');
	// 		}
	// 	}
	// 	if(isset($_POST['updatedata'])){
	// 		$id = $_POST['id'];
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if($db->Updateuser($table,$id,$username,$password)){
				
	// 			header('Location: index.php?controller=may-moc&action=usermanager');
	// 		}
	// 	}
	// 	if(isset($_POST['deletedata'])){
	// 		$id = $_POST['delete_id'];
	// 		if($db->Deleteuser($table,$id)){
	// 			header('Location:index.php?controller=may-moc&action=usermanager');
	// 		}
	// 	}
		require_once('../View/maymoc/usermanager.php');
		break;
	}
	case 'developer':{
	// 	$table = 'users';
	// 	$data = $db->getAllData($table);
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	if(isset($_POST['add']))
	// 	{
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if($db->Insertuser($table,$username,$password)){
	// 			header('Location: index.php?controller=may-moc&action=developer');
	// 		}
	// 	}
	// 	if(isset($_POST['updatedata'])){
	// 		$id = $_POST['id'];
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if($db->Updateuser($table,$id,$username,$password)){
	// 			 header('Location: index.php?controller=may-moc&action=developer');
	// 		}
	// 	}
	// 	if(isset($_POST['deletedata'])){
	// 		$id = $_POST['delete_id'];
	// 		if($db->Deleteuser($table,$id)){
	// 			header('Location:index.php?controller=may-moc&action=developer');
	// 		}
	// 	}
		require_once('../View/maymoc/developer.php');
		break;
	}
	case 'developeruser':{
	// 	$table = 'usersview';
	// 	$data = $db->getAllData($table);
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	if(isset($_POST['add']))
	// 	{
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if($db->Insertuser($table,$username,$password)){
	// 			header('Location: index.php?controller=may-moc&action=developeruser');
	// 		}
	// 	}
	// 	if(isset($_POST['updatedata'])){
	// 		$id = $_POST['id'];
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		if($db->Updateuser($table,$id,$username,$password)){
				
	// 			header('Location: index.php?controller=may-moc&action=developeruser');
	// 		}
	// 	}
	// 	if(isset($_POST['deletedata'])){
	// 		$id = $_POST['delete_id'];
	// 		if($db->Deleteuser($table,$id)){
	// 			header('Location:index.php?controller=may-moc&action=developeruser');
	// 		}
	// 	}
		require_once('../View/maymoc/developeruser.php');
		break;
	}
	case 'begin':{
		require_once('../View/maymoc/begin.php');
		break;
	}
	case 'test':{
	// 	$AEC = 'AEC';
	// 	$TSC = 'TSC';
	// 	$APS = 'APS';
	// 	if(isset($_POST['dangxuat'])){
	// 		session_destroy();
	// 		header('Location: index.php?controller=may-moc&action=begin');
	// 	}
	// 	$table = 'tiendomaymoc';
	// 	$data1 = $db->getAllData($table);
	// 	$dataAEC = $db->getAllDatabophan($table,$AEC);
	// 	$dataTSC = $db->getAllDatabophan($table,$TSC);
	// 	$dataAPS = $db->getAllDatabophan($table,$APS);
	// 	$num_row = $db->count_row($table);
	// 	$count_row_AEC = $db->count_row_bophan($table,$AEC);
	// 	$count_row_TSC = $db->count_row_bophan($table,$TSC);
	// 	$count_row_APS = $db->count_row_bophan($table,$APS);
		require_once('../View/maymoc/test.php');
		break;
	}
	
	case 'khongcoquyendangnhap':{
		require_once('../View/maymoc/khongcoquyendangnhap.php');
		break;
	}
	case 'mypage':{
		require_once('../View/maymoc/mypage.php');
		break;
	}
	case 'mypagemanager':{
		require_once('../View/maymoc/mypagemanager.php');
		break;
	}
	case 'bieudoline':{
		require_once('../View/maymoc/bieudoline.php');
		break;
	}
	case 'edit':{
		require_once('../View/maymoc/edit.php');
		break;
	}
	case 'add1':{
		require_once('../View/maymoc/add1.php');
		break;
	}
	case 'bieudoline1':{
		require_once('../View/maymoc/bieudoline1.php');
		break;
	}
	case 'test1':{
		require_once('../View/maymoc/test1.php');
		break;
	}
	case 'test2':{
		require_once('../View/maymoc/test2.php');
		break;
	}
}

?>
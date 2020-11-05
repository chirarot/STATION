<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
 <div class="container col-5">
			<form class="text border border-light p-5" action="<?php echo site_url('control_station/addstate') ?>" method="post"> 
            <center><p class="h4 mb-1" text-center>Station</p></center>
            <div class="col mb-3">
                   <p>หมายเลขขบวน</p>
			<input type="number" id="defaultRegisterFormFirstName" class="form-control" id="s_procession" name="s_procession" placeholder="หมายเลขขบวน">
					</div>
					<div class="col mb-3">
                   <p>สถานีต้นทาง</p>
				<input type="text" id="defaultRegisterFormFirstName" class="form-control" id="s_name" name="s_name" placeholder="ชื่อสถานีรถไฟ">
                </div>
					<div class="col mb-3">
                   <p>เวลาออก</p>
			<input type="time" id="defaultRegisterFormFirstName" class="form-control" id="s_timeout" name="s_timeout" >
                    </div>
                    					<div class="col mb-3">
                   <p>สถานีปลายทาง</p>
				<input type="text" id="defaultRegisterFormFirstName" class="form-control" id="de_name" name="de_name" placeholder="ชื่อสถานีรถไฟ">
                </div>
					<div class="col mb-3">
                   <p>เวลาถึง</p>
			<input type="time" id="defaultRegisterFormFirstName" class="form-control" id="de_time" name="de_time" >
                    </div>
                    					<div class="col mb-3">
                   <p>เวลาจุดพัก</p>
				<input type="Time" id="defaultRegisterFormFirstName" class="form-control" id="hr_to" name="hr_to" placeholder="ชื่อสถานีรถไฟ">
                </div>
					<div class="col mb-3">
                   <p>หมดเวลาจุดพัก</p>
			<input type="time" id="defaultRegisterFormFirstName" class="form-control" id="hr_out" name="hr_out" >
                    </div>
         <div class="col mb-3">
                   <p>หมายเหตุ</p>
			<input type="text" id="defaultRegisterFormFirstName" class="form-control" id="s_notation" name="s_notation" placeholder="หมายเหตุ">
					</div>
				<button class="btn btn-info my-4 btn-block" type="submit">เพิ่ม</button>
			</form>
				</div>
				<center>
			<a href=<?php echo site_url('control_station/index')?>>เเสดงข้อมูล</button>
</center>




</body>

</html>
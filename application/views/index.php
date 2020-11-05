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
    <div class="container">
        <div class="col-md-5">
            <h1><h3>ขบวนรถไฟ STATION</h3>
        </div>
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th scope="col">ขบวน</th>
                    <th scope="col">สถานีต้นทาง</th>
                    <th scope="col">เวลาออก</th>
                    <th scope="col">ถึง</th>
                    <th scope="col">ออก</th>
                    <th scope="col">สถานีปลายทาง</th>
                    <th scope="col">ถึงเวลา</th>
                    <th scope="col">หมายเหตุ</th>
                </tr>
            </thead>
            <?php foreach ($shows->result_array() as $to) { ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $to['s_procession'] ?></th>
                        <td><?php echo $to['s_name'] ?></td>
                        <td><?php echo $to['s_timeout'] ?></td>
                        <td><?php echo $to['hr_to'] ?></td>
                        <td><?php echo $to['hr_out'] ?></td>
                        <td><?php echo $to['de_name'] ?></td>
                        <td><?php echo $to['de_time'] ?></td>
                        <td><?php echo $to['s_notation'] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
        <a href=<?php echo site_url('control_station/showadd') ?>>เพิ่มข้อมูล</a>
        </center>
    </div>
</body>

</html>
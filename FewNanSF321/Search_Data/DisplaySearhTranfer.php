<!-- <!DOCTYPE html> -->
<html>

<head>
  <meta charset="utf-8" />
  <title>ค้นหารายการโอนเงินสมทบ</title>
  <link rel="stylesheet" href="../CSS/CSS.css">
</head>

<body>
   <div class="flex-container">
    <header>
        <section>
            <div><img src="../image/apple-touch-icon.jpg" width="150px" height="150px"></div>
            <h2>ระบบสารสนเทศและฐานข้อมูล</h2>
        </section>
    </header>

<!--manu bar-->

<nav class="nav">
    <ul>
    <li><a href="#home">เมนูหลัก</a></li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">บริหาร</a>
        <div class="dropdown-content">
            <a href="#">ทะเบียนหนังสือรับ</a>
            <a href="#">ทะเบียนหนังสือส่ง</a>
            <a href="#">เลขคุรุภัณฑ์</a>
        </div>
    </li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">รายได้</a>
        <div class="dropdown-content">
            <a href="../DisplayAddData.html">เพิ่มรายการส่งเงินสมทบปกติ</a>
            <a href="../DisplayAddDataMoney_Not_Paid_Enough.html">เพิ่มรายการส่งเงินสมทบส่วนที่ขาด</a>
            <a href="../DisplayAddtransfer_Money.html">เพิ่มรายงานโอนเงินสมทบ</a>
            <a href="../Displaysearch.html">ค้นหารายการส่งเงินสมทบปกติ</a>
            <a href="../DisplaySearchMoney_Not_Paid_Enough.html">ค้นหารายการส่งเงินสมทบปกติส่วนที่ขาด</a>
            <a href="../DisplaySearchTranfer.html">ค้นหารายการโอนเงินสมทบ</a>
        </div>
    </li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">การเงิน</a>
        <div class="dropdown-content">
            <a href="#">ใบฎีกาเบิกค่าใช้จ่าย</a>
            <a href="#">รายการรับเงินสมทบ</a>
            <a href="#">รายการเงินโอน</a>
            <a href="#">รายการคืนเงินเกิน</a>
        </div>
    </li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">ตรวจสอบ</a>
        <div class="dropdown-content">
            <a href="#">---</a>
        </div>
    </li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">บัญชี</a>
        <div class="dropdown-content">
            <a href="#">รายการปรับปรุงบัญชี</a>
            <a href="#">รายการรอบันทึกประจำวัน</a>
            <a href="#">รายการปรับปรุงสินทรัพย์</a>
            <a href="#">รายการรับชำระเงิน</a>
            <a href="#">เพิ่มบัญชีธนาคาร</a>
            <a href="#">ปิดบัญชีธนาคาร</a>
            <a href="#">รายงานประจำวัน</a>
            <a href="#">รายงานประจำเดือน</a>
        </div>
    </li>
</ul>

 </div>
<!--End manu bar-->

<br><br>
<div class="row">
  <div class="column side">

  </div>
  <div class="column middle">
<?php

require '../connect/dbconnect.php';

            $sql = "SELECT * FROM transfer_money ";




            if (isset($_POST['search'])) {

              $search_Province = mysqli_real_escape_string($conn,$_POST['search_Province']);
              $search_District = mysqli_real_escape_string($conn,$_POST['search_District']);
              $search_DLA = mysqli_real_escape_string($conn,$_POST['search_DLA']);
              $search_Date = mysqli_real_escape_string($conn,$_POST['search_Date']);
              $search_Transfer = mysqli_real_escape_string($conn,$_POST['search_Transfer']);
              $search_RealTransferRequests = mysqli_real_escape_string($conn,$_POST['search_RealTransferRequests']);

                $sql .= " WHERE Province = '{$search_Province}' ";
                $sql .= " OR District = '{$search_District}' ";
                $sql .= " OR DLA = '{$search_DLA}' ";
                $sql .= " OR Date  = '{$search_Date}' ";
                $sql .= " OR Transfer  = '{$search_Transfer}' ";
                $sql .= " OR RealTransferRequests = '{$search_RealTransferRequests}' ";





            }
            $query = mysqli_query($conn,$sql);
            ?>

            <form name="search_form" method="POST" action="DisplaySearhTranfer.php">

              <table>
                          <tr>
                            <th>จังหวัด</th>
                            <th><input type="text" name="search_Province" value="" /></th>
                          </tr>

                          <tr>
                            <th>อำเภอ</th>
                            <th><input type="text" name="search_District" value="" /></th>
                          </tr>

                          <tr>
                            <th>อปท</th>
                            <th><input type="text" name="search_DLA" value="" /></th>
                          </tr>

                          <tr>
                            <th>ลงวันที่</th>
                            <th><input type="text" name="search_Date" value="" /></th>
                          </tr>

                          <tr>
                            <th>โอน</th>
                            <th><input type="text" name="search_Transfer" value="" /></th>
                          </tr>

                          <tr>
                            <th>ขอโอนจริง</th>
                            <th><input type="text" name="search_RealTransferRequests" value="" /></th>
                          </tr>

</table>
            <input type="submit" name="search" value="ค้นหารายการโอนเงินสมทบ">
             <input type="submit" name="" value="ค้นหาทั้งหมด">
            </form>

            <table width="70%" cellpadding="5" cellspace="5">

            <tr>
                <td><strong>ID</strong></td>
                <td><strong>ลงวันที่</strong></td>
                <td><strong>โอน</strong></td>
                <td><strong>อปท.</strong></td>
                <td><strong>อำเภอ</strong></td>
                <td><strong>จังหวัด</strong></td>
                
                <td><strong>ขอโอนจริง</strong></td>
                <td><strong>หมายเหตุ</strong></td>
            </tr>
            
	          <?php while($row = mysqli_fetch_array($query)){?>

            <tr>
                <td><?php echo $row[0];?></td>
                <td><?php echo $row[1];?></td>
                <td><?php echo $row[2];?></td>
                <td><?php echo $row[3];?></td>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[5];?></td>

                <td><?php echo $row[13];?></td>
                <td><?php echo $row[14];?></td>



                <td><a href="../Edit/DisplayEditDataTranfer_Money.php?id=<?php echo $row[0]?>">Edit</a></td>

            </tr>

            <?php } ?>
            </table>
            </div>
  <div class="column side">

  </div>
</div>


  <table width="70%" cellpadding="5" cellspace="5">

<div class="footer">
  <br><br><br><br><br>
</div>

</body>
</html>

<!-- <!DOCTYPE html> -->
<html>

<head>
  <meta charset="utf-8" />
  <title>ค้นหารายการส่งเงินสมทบปกติส่วนที่ขาด</title>
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

            $sql = "SELECT * FROM contributions ";




            if (isset($_POST['search'])) {

              $search_AnnualBudget = mysqli_real_escape_string($conn,$_POST['search_AnnualBudget']);
              $search_Province = mysqli_real_escape_string($conn,$_POST['search_Province']);
              $search_District = mysqli_real_escape_string($conn,$_POST['search_District']);
              $search_DLA = mysqli_real_escape_string($conn,$_POST['search_DLA']);
              $search_ReceiptNumber = mysqli_real_escape_string($conn,$_POST['search_ReceiptNumber']);
              $search_MoneyReceiveDate = mysqli_real_escape_string($conn,$_POST['search_MoneyReceiveDate']);
              $search_SendingMethod = mysqli_real_escape_string($conn,$_POST['search_SendingMethod']);
              $search_EditBy= mysqli_real_escape_string($conn,$_POST['search_EditBy']);
                $sql .= " WHERE AnnualBudget  = '{$search_AnnualBudget}' ";
                $sql .= " OR Province = '{$search_Province}' ";
                $sql .= " OR District = '{$search_District}' ";
                $sql .= " OR DLA = '{$search_DLA}' ";
                $sql .= " OR ReceiptNumber  = '{$search_ReceiptNumber }' ";
                $sql .= " OR MoneyReceiveDate = '{$search_MoneyReceiveDate}' ";
                $sql .= " OR SendingMethod = '{$search_SendingMethod}' ";
                $sql .= " OR EditBy = '{$search_EditBy}' ";




            }
            $query = mysqli_query($conn,$sql);
            ?>

            <form name="search_form" method="POST" action="DisplaySearchMoney_Not_Paid_Enough.php">

              <table>
                          <tr>
                            <th>ปีงบประมาณ</th>
                            <th><input type="text" name="search_AnnualBudget" value="" /></th>
                          </tr>
                          
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
                            <th>เลขที่ใบเสร็จ</th>
                            <th><input type="text" name="search_ReceiptNumber" value="" /></th>
                          </tr>

                          <tr>
                            <th>วันที่รับเงิน</th>
                            <th><input type="text" name="search_MoneyReceiveDate" value="" /></th>
                          </tr>

                          <tr>
                            <th>วิธีการส่ง</th>
                            <th><input type="text" name="search_SendingMethod" value="" /></th>
                          </tr>

                          <tr>
                            <th>แก้ไขโดย</th>
                            <th><input type="text" name="search_EditBy" value="" /></th>
                          </tr>



                        </table>

            <input type="submit" name="search" value="ค้นหารายการส่งเงินสมทบปกติส่วนที่ขาด">
             <input type="submit" name="" value="ค้นหาทั้งหมด">
            </form>

            <table width="70%" cellpadding="5" cellspace="5">

            <tr>
                <td><strong>ID</strong></td>
                <td><strong>เลขที่หนังสือ</strong></td>
                <td><strong>วันที่รับ</strong></td>
                <td><strong>จังหวัด</strong></td>
                <td><strong>อำเภอ</strong></td>
                <td><strong>อปท.</strong></td>
                <td><strong>งบประมาณปี</strong></td>
                <td><strong>วิธีการส่ง</strong></td>
                <td><strong>วันที่รับเงิน</strong></td>
                <td><strong>เลขที่ใบเสร็จ</strong></td>
                <td><strong>แก้ไขโดย</strong></td>
            </tr>
	          <?php while($row = mysqli_fetch_array($query)){?>

            <tr>
                <td><?php echo $row[0];?></td>
                <td><?php echo $row[1];?></td>

                <td><?php echo $row[3];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[6];?></td>
                <td><?php echo $row[9];?></td>

                <td><?php echo $row[22];?></td>
               
                <td><?php echo $row[34];?></td>
                <td><?php echo $row[33];?></td>
                <td><?php echo $row[36];?></td>

                <td><a href="../Edit/DisplayEditDataMoney_Not_Paid_Enough.php?id=<?php echo $row[0]?>">Edit</a></td>

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

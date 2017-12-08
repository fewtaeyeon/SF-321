<!-- <!DOCTYPE html> -->
<html>

<head>
  <meta charset="utf-8" />
  <title>แก้ไขข้อมูล</title>
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
$idselect = $_GET['id'];
require '../connect/dbconnect.php';

  $sql = "SELECT * FROM transfer_money WHERE ID = $idselect ";
	$result= mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($result);
 ?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Insert from data</title>
</head>
<body>
  <form method="post" action='EditDataTranfer_Money.php' enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $row["ID"]?>" name='id_select'/>
      <table>

    <tr>
      <th>ID</th>
      <th><input type="text" name='ID' value='<?php echo $row['ID']?>'> <br/></th>
    </tr>

    <tr>
      <th>ลงวันที่</th>
      <th><input type="date" name='Date'value='<?php echo $row['Date']?>'><br/></th>
    </tr>

    <tr>
      <th>โอน</th>
      <th><input tโอนype="text" name='Transfer'value='<?php echo $row['Transfer']?>'> <br/></th>
    </tr>

    <tr>
      <th>อปท.</th>
      <th><input type="text" name='DLA'value='<?php echo $row['DLA']?>'> <br/></th>
    </tr>

    <tr>
      <th>อำเภอ</th>
      <th><input type="text" name='District'value='<?php echo $row['District']?>'> <br/></th>
    </tr>

    <tr>
      <th>จังหวัด</th>
      <th><input type="text" name='Province'value='<?php echo $row['Province']?>'> <br/></th>
    </tr>

    <tr>
      <th>ประมาณการ</th>
      <th><input type="decimal" name='Estimate'value='<?php echo $row['Estimate']?>'> <br/></th>
    </tr>

    <tr>
      <th>ส่งเงินสมทบ</th>
      <th><input type="decimal" name='Percent'value='<?php echo $row['Percent']?>'> <br/></th>
    </tr>

    <tr>
      <th>หักค่าใช้จ่ายทางหน่วยงาน</th>
      <th><input type="decimal" name='AgencyExpenses'value='<?php echo $row['AgencyExpenses']?>'><br/></th>
    </tr>

    <tr>
      <th>ขอโอนเงิน</th>
      <th><input type="decimal" name='TransferRequests'value='<?php echo $row['TransferRequests']?>'> <br/></th>
    </tr>

    <tr>
      <th>หักส่งรายเดือน</th>
      <th><input type="decimal" name='MonthlyDeduction'value='<?php echo $row['MonthlyDeduction']?>'> <br/></th>
    </tr>

    <tr>
      <th>หักขาดที่ยังไม่ได้ส</th>
      <th><input type="decimal" name='DeductionUnsent'value='<?php echo $row['DeductionUnsent']?>'> <br/></th>
    </tr>

    <tr>
      <th>บวกขอส่งคืน</th>
      <th><input type="decimal" name='AddTransferReturn'value='<?php echo $row['AddTransferReturn']?>'> <br/></th>
    </tr>

    <tr>
      <th>ขอโอนจริง</th>
      <th><input type="decimal" name='RealTransferRequests'value='<?php echo $row['RealTransferRequests']?>'> <br/></th>
    </tr>

    <tr>
      <th>หมายเหตุ</th>
      <th><input type="text" name='Note'value='<?php echo $row['Note']?>'><br/></th>
    </tr>

    <td><input type="submit" value="Edit"></td>
    </table>


  </form>
 </div>
  <div class="column side">
    
  </div>
</div>
<div class="footer">
  <br><br><br><br><br>
</div>

</body>
</html>


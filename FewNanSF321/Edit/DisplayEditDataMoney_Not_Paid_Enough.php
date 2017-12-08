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

  $sql = "SELECT * FROM contributions WHERE ID = $idselect ";
	$result= mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($result);
 ?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Insert from data</title>
</head>
<body>
  <form method="post" action='EditDataMoney_Not_Paid_Enough.php' enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $row["ID"]?>" name='id_select'/>
      <table>

    <tr>
      <th>ID</th> 
      <th><input type="text" name='ID' value='<?php echo $row['ID']?>'> <br></th>
    </tr>

    <tr>
      <th>เลขที่หนังสือ</th> 
      <th><input type="text" name='CorrespondenceNumber'value='<?php echo $row['CorrespondenceNumber']?>'><br></th>
    </tr>

    <tr>
      <th>เอกสาร</th> 
      <th><input type="text" name='Document'value='<?php echo $row['Document']?>'><br></th>
    </tr>

    <tr>
      <th>วันที่รับ</th> 
      <th><input type="date" name='ReceiveDate'value='<?php echo $row['ReceiveDate']?>'><br></th>
    </tr>

    <tr>
      <th>จังหวัด</th> 
      <th><input type="text" name='Province'value='<?php echo $row['Province']?>'><br></th>
    </tr>

    <tr>
      <th>อำเภอ</th> 
      <th><input type="text" name='District'value='<?php echo $row['District']?>'><br></th>
    </tr>

    <tr>
      <th>อปท.</th> 
      <th><input type="text" name='DLA'value='<?php echo $row['DLA']?>'><br></th>
    </tr>

    <tr>
      <th>ประเภทการส่ง</th> 
      <th><input type="text" name='ContributionType'value='<?php echo $row['ContributionType']?>'><br></th>
    </tr>

    <tr>
      <th>ฉบับที่</th> 
      <th><input type="int" name='IssuanceNumber'value='<?php echo $row['IssuanceNumber']?>'><br></th>
    </tr>

    <tr>
      <th>งบประมาณปี</th> 
      <th><input type="int" name='AnnualBudget'value='<?php echo $row['AnnualBudget']?>'><br></th>
    </tr>

    <tr> <th></th><th></th> </tr>
    <tr> <th></th><th></th> </tr>
    <tr> <th></th><th></th> </tr>
    <tr> <th></th><th></th> </tr>


    <tr>
      <th>ประมาณการ</th> 
      <th><input type="decimal" name='Estimate'value='<?php echo $row['Estimate']?>'><br></th>
    </tr>

    <tr>
      <th>หัก เงินอุดหนุน</th> 
      <th><input type="decimal" name='DeductionSubsidy'value='<?php echo $row['DeductionSubsidy']?>'><br></th>
    </tr>

    <tr>
      <th>หัก เงินกู้</th> 
      <th><input type="decimal" name='DeductionLoan'value='<?php echo $row['DeductionLoan']?>'><br></th>
    </tr>

    <tr>
      <th>หัก เงินอุทิศให้</th> 
      <th><input type="decimal" name='DeductionDedicated'value='<?php echo $row['DeductionDedicated']?>'><br></th>
    </tr>

    <tr>
      <th>หัก พันธบัตร</th> 
      <th><input type="decimal" name='DeductionBond'value='<?php echo $row['DeductionBond']?>'><br></th>
    </tr>

    <tr>
      <th>คงเหลือ</th> 
      <th><input type="decimal" name='Balance'value='<?php echo $row['Balance']?>'><br></th>
    </tr>

    <tr>
      <th>ส่งเงินสมทบ</th> 
      <th><input type="int" name='ContributionRate'value='<?php echo $row['ContributionRate']?>'><br></th>
    </tr>

    <tr>
      <th>รวม รายการเพิ่มเติมส่วนที่ขาด</th> 
      <th><input type='decimal' name="IncludeAdditionalMissingItems"value='<?php echo $row['IncludeAdditionalMissingItems']?>'><br></th>
    </tr>

    <tr>
      <th>รวมเงินสมทบก่อนหักค่าใช้จ่าย</th> 
      <th><input type='decimal' name="IncludeContributionsBeforeDeductingExpenses"value='<?php echo $row['IncludeContributionsBeforeDeductingExpenses']?>'><br></th>
    </tr>

    <tr>
      <th>หัก ค่าใช้จ่ายทางสังกัด</th> 
      <th><input type="decimal" name='DeductionExpenses'value='<?php echo $row['DeductionExpenses']?>'><br></th>
    </tr>

    <tr>
      <th>หัก ส่วนที่เกิน</th> 
      <th><input type="decimal" name='DeductionExcess'value='<?php echo $row['DeductionExcess']?>'><br></th>
    </tr>

    <tr>
      <th>เงินสมทบที่ต้องส่งจำนวน</th> 
      <th><input type="decimal" name='CalculateContributionToBeSubmitted'value='<?php echo $row['CalculateContributionToBeSubmitted']?>'><br></th>
    </tr>


    <tr> <th></th><th></th> </tr>
    <tr> <th></th><th></th> </tr>
    <tr> <th></th><th></th> </tr>
    <tr> <th></th><th></th> </tr>

    <tr>
      <th>วิธีการส่ง</th> 
      <th><input type="text" name='SendingMethod'value='<?php echo $row['SendingMethod']?>'><br></th>
    </tr>

    <tr>
      <th>เลขที่เช็ค</th> 
      <th><input type="text" name='CheckNumber'value='<?php echo $row['CheckNumber']?>'><br></th>
    </tr>

    <tr>
      <th>แคชเชียร์เช็คเลขที่</th> 
      <th><input type="text" name='CashierNumber'value='<?php echo $row['CashierNumber']?>'><br></th>
    </tr>

    <tr>
      <th>เลขที่ตั๋วแลกเงิน</th> 
      <th><input type="text" name='BillNumber'value='<?php echo $row['BillNumber']?>'><br></th>
    </tr>

    <tr>
      <th>เลขที่ธนาณัติ</th> 
      <th><input type="text" name='MoneyOrderNumber'value='<?php echo $row['MoneyOrderNumber']?>'><br></th>
    </tr>

    <tr>
      <th>เลขที่บัญชี</th> 
      <th><input type="text" name='AccountNumber'value='<?php echo $row['AccountNumber']?>'><br></th>
    </tr>

    <tr>
      <th>ปณ.</th> 
      <th><input type="text" name='ZipCode'value='<?php echo $row['ZipCode']?>'><br></th>
    </tr>

    <tr>
      <th>ลงวันที่</th> 
      <th><input type="date" name='Date'value='<?php echo $row['Date']?>'><br></th>
    </tr>

    <tr>
      <th>ธนาคาร</th> 
      <th><input type="text" name='Bank'value='<?php echo $row['Bank']?>'><br></th>
    </tr>

    <tr>
      <th>สาขา</th> 
      <th><input type="text" name='Branch'value='<?php echo $row['Branch']?>'><br></th>
    </tr>

    <tr>
      <th>จำนวนเงิน (บาท)</th> 
      <th><input type="decimal" name='Amount'value='<?php echo $row['Amount']?>'><br></th>
    </tr>


    <tr>
      <th>วันที่รับเงิน</th> 
      <th><input type="date" name='MoneyReceiveDate'value='<?php echo $row['MoneyReceiveDate']?>'><br></th>
    </tr>

    <tr>
      <th>เลขที่ใบเสร็จ</th> 
      <th><input type="text" name='ReceiptNumber'value='<?php echo $row['ReceiptNumber']?>'><br></th>
    </tr>

    <tr>
      <th>แก้ไขวันที่</th> 
      <th><input type="date" name='EditDate'value='<?php echo $row['EditDate']?>'><br></th>
    </tr>

    <tr>
      <th>แก้ไขโดย</th> 
      <th><input type="text" name='EditBy'value='<?php echo $row['EditBy']?>'><br></th>
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


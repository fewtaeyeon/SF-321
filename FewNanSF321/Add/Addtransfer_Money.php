<?php
require'../connect/dbconnect.php';


$Date  = $_POST['Date'];
$Transfer  = $_POST['Transfer'];
$DLA = $_POST['DLA'];
$District   = $_POST['District'];
$Province = $_POST['Province'];
$Estimate  = $_POST['Estimate'];
$Percent = $_POST['Percent'];
$AgencyExpenses = $_POST['AgencyExpenses'];
$TransferRequests  = $_POST['TransferRequests'];
$MonthlyDeduction = $_POST['MonthlyDeduction'];
$AddTransferReturn = $_POST['AddTransferReturn'];
$RealTransferRequests = $_POST['RealTransferRequests'];
$Note = $_POST['Note'];


$sql = "INSERT INTO transfer_money (Date,Transfer,DLA,District,Province,Estimate,Percent
  ,AgencyExpenses,TransferRequests,MonthlyDeduction,AddTransferReturn,RealTransferRequests,Note)
  VALUES ('$Date','$Transfer','$DLA','$District'
    ,'$Province','$Estimate','$Percent','$AgencyExpenses','$TransferRequests'
    ,'$MonthlyDeduction','$AddTransferReturn','$RealTransferRequests','Note')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href='../DisplayAddtransfer_Money.html'>กลับหน้าหลัก</a>

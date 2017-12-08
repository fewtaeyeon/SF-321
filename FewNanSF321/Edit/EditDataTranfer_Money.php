<?php
require'../connect/dbconnect.php';

$ID = $_POST['ID'];
$Date  = $_POST['Date'];
$Transfer  = $_POST['Transfer'];
$DLA = $_POST['DLA'];
$District  = $_POST['District'];
$Province = $_POST['Province'];
$Estimate  = $_POST['Estimate'];
$Percent = $_POST['Percent'];
$AgencyExpenses = $_POST['AgencyExpenses'];
$TransferRequests  = $_POST['TransferRequests'];
$MonthlyDeduction = $_POST['MonthlyDeduction'];
$AddTransferReturn = $_POST['AddTransferReturn'];
$RealTransferRequests = $_POST['RealTransferRequests'];
$Note = $_POST['Note'];

$id_select=$_POST['id_select'];


$sql = "UPDATE transfer_money SET ID='$ID',Date='$Date',Transfer='$Transfer',DLA='$DLA'
,District='$District',Province='$Province',Estimate='$Estimate',Percent='$Percent'
,AgencyExpenses='$AgencyExpenses',TransferRequests='$TransferRequests',MonthlyDeduction='$MonthlyDeduction'
,AddTransferReturn='$AddTransferReturn',RealTransferRequests='$RealTransferRequests',Note = '$Note' WHERE ID=$id_select";





   if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

<a href='../DisplaySearchTranfer.html'>กลับหน้าหลัก</a>
s
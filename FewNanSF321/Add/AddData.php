<?php
require'../connect/dbconnect.php';

$CorrespondenceNumber = $_POST['CorrespondenceNumber'];
$Document = $_POST['Document'];
$ReceiveDate = $_POST['ReceiveDate'];
$Province = $_POST['Province'];
$District  = $_POST['District'];
$DLA = $_POST['DLA'];
$ContributionType = $_POST['ContributionType'];
$IssuanceNumber   = $_POST['IssuanceNumber'];
$AnnualBudget  = $_POST['AnnualBudget'];
$Estimate  = $_POST['Estimate'];
$DeductionSubsidy = $_POST['DeductionSubsidy'];
$DeductionLoan  = $_POST['DeductionLoan'];
$DeductionDedicated  = $_POST['DeductionDedicated'];
$DeductionBond = $_POST['DeductionBond'];
$Balance = $_POST['Balance'];
$ContributionRate  = $_POST['ContributionRate'];
$IncludeAdditionalMissingItems  = $_POST['IncludeAdditionalMissingItems'];
$IncludeContributionsBeforeDeductingExpenses  = $_POST['IncludeContributionsBeforeDeductingExpenses'];
$DeductionExpenses  = $_POST['DeductionExpenses'];
$DeductionExcess  = $_POST['DeductionExcess'];
$CalculateContributionToBeSubmitted  = $_POST['CalculateContributionToBeSubmitted'];
$SendingMethod  = $_POST['SendingMethod'];
$CheckNumber  = $_POST['CheckNumber'];
$CashierNumber  = $_POST['CashierNumber'];
$BillNumber  = $_POST['BillNumber'];
$MoneyOrderNumber   = $_POST['MoneyOrderNumber'];
$AccountNumber   = $_POST['AccountNumber'];
$ZipCode   = $_POST['ZipCode'];
$Date   = $_POST['Date'];
$Amount   = $_POST['Amount'];
$Bank   = $_POST['Bank'];
$Branch   = $_POST['Branch'];
$MoneyReceiveDate  = $_POST['MoneyReceiveDate'];
$ReceiptNumber  = $_POST['ReceiptNumber'];
$EditDate  = $_POST['EditDate'];
$EditBy   = $_POST['EditBy'];




$sql = "INSERT INTO add_contributions (CorrespondenceNumber,Document,ReceiveDate,Province,District,DLA,ContributionType
  ,IssuanceNumber,AnnualBudget,Estimate,DeductionSubsidy,DeductionLoan,DeductionDedicated,DeductionBond,Balance
  ,ContributionRate,IncludeAdditionalMissingItems,IncludeContributionsBeforeDeductingExpenses,DeductionExpenses
  ,DeductionExcess,CalculateContributionToBeSubmitted,SendingMethod,CheckNumber,CashierNumber,BillNumber
  ,MoneyOrderNumber,AccountNumber,ZipCode,Date,Amount,Bank,Branch,MoneyReceiveDate,ReceiptNumber,EditDate,EditBy)
  VALUES ('$CorrespondenceNumber','$Document','$ReceiveDate','$Province','$District','$DLA','$ContributionType'
    ,'$IssuanceNumber','$AnnualBudget','$Estimate','$DeductionSubsidy','$DeductionLoan','$DeductionDedicated'
    ,'$DeductionBond','$Balance','$ContributionRate','$IncludeAdditionalMissingItems','$IncludeContributionsBeforeDeductingExpenses'
    ,'$DeductionExpenses','$DeductionExcess','$CalculateContributionToBeSubmitted','$SendingMethod','$CheckNumber'
    ,'$CashierNumber','$BillNumber','$MoneyOrderNumber','$AccountNumber','$ZipCode','$Date','$Amount','$Bank','$Branch'
    ,'$MoneyReceiveDate','$ReceiptNumber','$EditDate','$EditBy')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href='../DisplayAddData.html'>กลับหน้าหลัก</a>

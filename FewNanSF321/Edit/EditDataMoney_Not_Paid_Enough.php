 <?php
require'../connect/dbconnect.php';

$ID = $_POST['ID'];
$CorrespondenceNumber = $_POST['CorrespondenceNumber'];
$Document = $_POST['Document'];
$ReceiveDate = $_POST['ReceiveDate'];
$Province = $_POST['Province'];
$District  = $_POST['District'];
$DLA = $_POST['DLA'];
$ContributionType = $_POST['ContributionType'];
$IssuanceNumber  = $_POST['IssuanceNumber'];
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

$id_select=$_POST['id_select'];


$sql = "UPDATE contributions SET ID ='$ID',CorrespondenceNumber = '$CorrespondenceNumber',Document='$Document',ReceiveDate='$ReceiveDate',Province='$Province',District='$District',DLA='$DLA',ContributionType='$ContributionType'
    ,IssuanceNumber='$IssuanceNumber',AnnualBudget='$AnnualBudget',Estimate='$Estimate',DeductionSubsidy='$DeductionSubsidy',DeductionLoan='$DeductionLoan',DeductionDedicated='$DeductionDedicated'
    ,DeductionBond='$DeductionBond',Balance='$Balance',ContributionRate='$ContributionRate',IncludeAdditionalMissingItems='$IncludeAdditionalMissingItems',IncludeContributionsBeforeDeductingExpenses='$IncludeContributionsBeforeDeductingExpenses'
    ,DeductionExpenses='$DeductionExpenses',DeductionExcess ='$DeductionExcess',CalculateContributionToBeSubmitted='$CalculateContributionToBeSubmitted',SendingMethod='$SendingMethod',CheckNumber='$CheckNumber'
    ,CashierNumber='$CashierNumber',BillNumber='$BillNumber',MoneyOrderNumber='$MoneyOrderNumber',AccountNumber='$AccountNumber',ZipCode='$ZipCode',Date='$Date',Amount='$Amount',Bank='$Bank',Branch='$Branch'
    ,MoneyReceiveDate='$MoneyReceiveDate',ReceiptNumber='$ReceiptNumber',EditDate='$EditDate',EditBy='$EditBy'WHERE ID=$id_select";




    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<a href='../DisplaySearchMoney_Not_Paid_Enough.html'>กลับหน้าหลัก</a>

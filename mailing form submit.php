<?php 
if(isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$fullname=$firstname." ".$middlename." ".$lastname;
$homeaddress=$_POST['homeaddress'];
$passportnumber=$_POST['passportnumber'];
$issuedate=$_POST['issuedate'];
$expirydate=$_POST['expirydate'];
$email=$_POST['email'];
$mobilenumber=$_POST['mobilenumber'];
$dob=$_POST['dob'];

//education year 10
$startdate_1=$_POST['startdate_1'];
$enddate_1=$_POST['enddate_1'];
$marks_1=$_POST['marks_1'];
$subject_1=$_POST['subject_1'];
$comment_1=$_POST['comment_1'];
//year 12
$startdate_2=$_POST['startdate_2'];
$enddate_2=$_POST['enddate_2'];
$marks_2=$_POST['marks_2'];
$subject_2=$_POST['subject_2'];
$comment_2=$_POST['comment_2'];
//diploma
$startdate_3=$_POST['startdate_3'];
$enddate_3=$_POST['enddate_3'];
$marks_3=$_POST['marks_3'];
$subject_3=$_POST['subject_3'];
$comment_3=$_POST['comment_3'];
//bachelor
$startdate_4=$_POST['startdate_4'];
$enddate_4=$_POST['enddate_4'];
$marks_4=$_POST['marks_4'];
$subject_4=$_POST['subject_4'];
$comment_4=$_POST['comment_4'];
//masters
$startdate_5=$_POST['startdate_5'];
$enddate_5=$_POST['enddate_5'];
$marks_5=$_POST['marks_5'];
$subject_5=$_POST['subject_5'];
$comment_5=$_POST['comment_5'];

//ielts
$reading=$_POST['reading'];
$writing=$_POST['writing'];
$listening=$_POST['listening'];
$speaking=$_POST['speaking'];
$overall=$_POST['overall'];

//Finance fixed deposit
$fixeddeposit_1=$_POST['fixeddeposit_1'];
$fixeddeposit_2=$_POST['fixeddeposit_2'];
$fixeddeposit_3=$_POST['fixeddeposit_3'];
$fixeddeposit_4=$_POST['fixeddeposit_4'];
$fixeddeposit_5=$_POST['fixeddeposit_5'];
//saving account
$saving_1=$_POST['saving_1'];
$saving_2=$_POST['saving_2'];
$saving_3=$_POST['saving_3'];
$saving_4=$_POST['saving_4'];
$saving_5=$_POST['saving_5'];
//other saving
$othersaving_1=$_POST['othersaving_1'];
$othersaving_2=$_POST['othersaving_2'];
$othersaving_3=$_POST['othersaving_3'];
$othersaving_4=$_POST['othersaving_4'];
$othersaving_5=$_POST['othersaving_5'];
//Gold & Jewwlleries
$gold_1=$_POST['gold_1'];
$gold_2=$_POST['gold_2'];
$gold_3=$_POST['gold_3'];
$gold_4=$_POST['gold_4'];
$gold_5=$_POST['gold_5'];
//land valuation
$land_1=$_POST['land_1'];
$land_2=$_POST['land_2'];
$land_3=$_POST['land_3'];
$land_4=$_POST['land_4'];
$land_5=$_POST['land_5'];

//Work experience
$sn_1=$_POST['sn_1'];
$company_1=$_POST['company_1'];
$position_1=$_POST['position_1'];
$workstartdate_1=$_POST['workstartdate_1'];
$workenddate_1=$_POST['workenddate_1'];

$sn_2=$_POST['sn_2'];
$company_2=$_POST['company_2'];
$position_2=$_POST['position_2'];
$workstartdate_2=$_POST['workstartdate_2'];
$workenddate_2=$_POST['workenddate_2'];

$sn_3=$_POST['sn_3'];
$company_3=$_POST['company_3'];
$position_3=$_POST['position_3'];
$workstartdate_3=$_POST['workstartdate_3'];
$workenddate_3=$_POST['workenddate_3'];

//intrest
$intcourse=$_POST['intcourse'];
$intcity=$_POST['intcity'];
$d=date("d/m/Y");

	
	$to='info@aussieeducation.com.au, shuklasatya@yahoo.com';
	$subject=$fullname." ".$d;
	$message =  "<table width='850' border='1' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td width='393' height='70'><img src='http://www.aussieeducation.com.au/assets/img/logo.png' alt='' width='225' height='92' /></td>
    <td width='407' align='right'><strong></strong><br />
      <span tabindex='0' data-term='goog_357717061'>$d</span></td>
  </tr>
  <tr>
    <td height='20' style='border-top:1px solid #6D6D6D;'>&nbsp;</td>
    <td align='right' style='border-top:1px solid #6D6D6D;'>&nbsp;</td>
  </tr>
</table>
<table width='850' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td height='70'>
	<h2 style='margin-top:0px; margin-bottom:0px;'>Contact Request From Aussie Education Website</h2>
	IP Address: $ip_location
	[ <a href='http://www.ip-tracker.org/locator/ip-lookup.php?ip=$ip_location' target='_blank'>track location</a> ]</td>
  </tr>
</table>
<table width='850' border='0' align='center' cellpadding='5' cellspacing='1' style='border:1px solid #6D6D6D;'>
  <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>First name </td>
    <td>$firstname</td>
  </tr>
 <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Middle name</td>
    <td>$middlename</td>
  </tr>
 <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Last name </td>
    <td>$lastname</td>
  </tr>
 <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Home Address</td>
    <td>$homeaddress</td>
  </tr>
 <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Passport Number</td>
    <td>$passportnumber</td>
  </tr>
 <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Issue Date</td>
    <td>$issuedate</td>
  </tr>
 <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Expiry Date</td>
    <td>$expirydate</td>
  </tr>
  <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Email Address</td>
    <td>$email</td>
  </tr>
  <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Mobile Number </td>
    <td>$mobilenumber</td>
  </tr>
  <tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Date of Birth </td>
    <td>$dob</td>
  </tr>
<tr>
    <td width='850' bgcolor='yellow' style='color:#033691;text-align:center;' colspan='6'>Education </td>
   
  </tr>
<tr>
    <td> </td>
    <td>Start Date</td>
<td>End Date</td>
<td>Marks</td>
<td>Majoring Subject</td>
<td>Comment</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Year 10 </td>
    <td>$startdate_1</td>
<td>$enddate_1</td>
<td>$marks_1</td>
<td>$subject_1</td>
<td>$comment_1</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Year 12 </td>
    <td>$startdate_2</td>
<td>$enddate_2</td>
<td>$marks_2</td>
<td>$subject_2</td>
<td>$comment_2</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Diploma </td>
    <td>$startdate_3</td>
<td>$enddate_3</td>
<td>$marks_3</td>
<td>$subject_3</td>
<td>$comment_3</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Bachelor </td>
    <td>$startdate_4</td>
<td>$enddate_4</td>
<td>$marks_4</td>
<td>$subject_4</td>
<td>$comment_4</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Masters </td>
    <td>$startdate_5</td>
<td>$enddate_5</td>
<td>$marks_5</td>
<td>$subject_5</td>
<td>$comment_5</td>
  </tr>
<tr>
    <td bgcolor='yellow' style='color:#033691;' rowspan='2'>IELTS / PTE</td>
<td bgcolor='#f2f2f2' style='color:#033691;'>Reading </td>
<td bgcolor='#f2f2f2' style='color:#033691;'>Writing </td>
<td bgcolor='#f2f2f2' style='color:#033691;'>Listening </td>
<td bgcolor='#f2f2f2' style='color:#033691;'>Speaking </td>
<td bgcolor='#f2f2f2' style='color:#033691;'>Overal </td>
   
  </tr>

<tr>
<tr>
<td></td>
<td>$reading</td>
<td>$writing</td>
<td>$listening</td>
<td>$speaking</td>
<td>$overall</td>
</tr>

<tr width='850'>
    <td bgcolor='yellow' style='color:#033691;text-align:center;' colspan='6'>Finances</td>
   
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Fixed Deposit </td>
    <td>$fixeddeposit_1</td>
<td>$fixeddeposit_2</td>
<td>$fixeddeposit_3</td>
<td>$fixeddeposit_4</td>
<td>$fixeddeposit_5</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Saving Account </td>
    <td>$saving_1</td>
<td>$saving_2</td>
<td>$saving_3</td>
<td>$saving_4</td>
<td>$saving_5</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Other Savings </td>
    <td>$othersaving_1</td>
<td>$othersaving_2</td>
<td>$othersaving_3</td>
<td>$othersaving_4</td>
<td>$othersaving_5</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Gold & Jewelleries </td>
    <td>$gold_1</td>
<td>$gold_2</td>
<td>$gold_3</td>
<td>$gold_4</td>
<td>$gold_5</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Gold & Jewelleries </td>
    <td>$gold_1</td>
<td>$gold_2</td>
<td>$gold_3</td>
<td>$gold_4</td>
<td>$gold_5</td>
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Land Valuation </td>
    <td>$land_1</td>
<td>$land_2</td>
<td>$land_3</td>
<td>$land_4</td>
<td>$land_5</td>
  </tr>
<tr width='850'>
    <td bgcolor='yellow' style='color:#033691;text-align:center;' colspan='5'>ANY WORKING EXPERIENCE </td>
 
  </tr>
<tr>
    <td bgcolor='#f2f2f2' style='color:#033691;'>S.No </td>
 <td bgcolor='#f2f2f2' style='color:#033691;'>Company Name </td>
<td bgcolor='#f2f2f2' style='color:#033691;'>Position </td>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Start Date </td>
<td bgcolor='#f2f2f2' style='color:#033691;'>End Date </td>

  </tr>
<tr>
    <td>$sn_1</td>
    <td>$company_1</td>
 <td>$position_1</td>
 <td>$workstartdate_1</td>

    <td>$workenddate_1</td>
  </tr>
<tr>       
<td>$sn_2</td>
<td>$company_2</td>   
<td>$position_2</td>
<td>$workstartdate_2</td>
    
<td>$workenddate_2</td>
  </tr>
<tr>
<td>$sn_3</td>
<td>$company_3</td>  
<td>$position_3</td>
<td>$workstartdate_3</td>
<td>$workenddate_3</td>
  </tr>
<tr width='850'>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Intrested Course</td>
    <td>$intcourse</td>
  </tr>
<tr width='850'>
    <td bgcolor='#f2f2f2' style='color:#033691;'>Intrested CITY</td>
    <td>$intcity</td>
  </tr>
</table>
";







// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= "From: <$email>" . "\r\n";
	

	if(mail($to,$subject,$message, $headers))
	{
	echo "<script type='text/javascript'>alert('Form Submited Successfully! We will contact you Soon!');</script>";
	}
	else{
	echo "Something went wrong please try again!";
	}
}
?>

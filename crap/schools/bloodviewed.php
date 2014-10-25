<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$personid = mysql_real_escape_string($_POST['person']);
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/

$sql_check_user = "SELECT * FROM `blood_tbl` WHERE `p_id`='".$personid."' AND `comment_status` = '1' ";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$result_no = mysql_num_rows($res_check_user);
$count = 1;
if($result_no >0){
$htm_view = '<table id="cbc-tbl" style="width:100%; border:1px solid #eee;">
<tr style="width:100%; border:1px solid #CCC;text-align:center;">
  <td style="width:10%; border:1px solid #CCC;">S.No</td>
  <td style="width:10%; border:1px solid #CCC;">RBC</td>
  <td style="width:10%; border:1px solid #CCC;">WBC</td>
  <td style="width:10%; border:1px solid #CCC;">Hemoglobin</td>
  <td style="width:10%; border:1px solid #CCC;">Leukemia</td>
  <td style="width:40%; border:1px solid #CCC;">Comments</td>
</tr>';

	while($result = mysql_fetch_array($res_check_user)){
$htm_view .='<tr style="width:100%; border:1px solid #CCC;text-align:center;">
  <td style="width:10%; border:1px solid #CCC;">'.$count.'</td>
  <td style="width:10%; border:1px solid #CCC;">'.$result['rbc'].'</td>
  <td style="width:10%; border:1px solid #CCC;">'.$result['wbc'].'</td>
  <td style="width:10%; border:1px solid #CCC;">'.$result['hemoglobin'].'</td>
  <td style="width:10%; border:1px solid #CCC;">'.$result['leukemia'].'</td>
   <td style="width:40%; border:1px solid #CCC;"><textarea name="comments" id="commentbox_'.$result['b_id'].'" width100%; height:auto; style="margin-bottom:2px;">'.$result['doctor_comments'].'</textarea></td></tr>
  ';
$count++;
}
	}else{
		
		echo '<div style="width:100%;text-align:center;">No Record Found</div>';
		return false;
		
		}

$htm_view .='</table> ';
echo $htm_view;

?>
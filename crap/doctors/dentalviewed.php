<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$personid = mysql_real_escape_string($_POST['person']);
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/

$sql_check_user = "SELECT * FROM `dental_report` WHERE `p_id`='".$personid."' AND `comment_status` = '1' ";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$result_no = mysql_num_rows($res_check_user);
$count = 1;
if($result_no >0){
$htm_view = '<table id="dental-tbl" style="width:100%;">
<thead style="width:100%;text-align:center;">
  <th style="width:25%;">S.No</th>
  <th style="width:25%;">Date</th>
  <th style="width:25%;">Comments</th>
  <th style="width:25%;">Update/Edit</th>
</thead>';

	while($result = mysql_fetch_array($res_check_user)){
		$date_form = new DateTime($result['date_inserted']);
$date = date_format($date_form, 'd-m-Y');
$htm_view .='<tr style="width:100%; border:1px solid #CCC;text-align:center;">
  <td style="width:25%; border:1px solid #CCC;">'.$count.'</td>
  <td style="width:25%; border:1px solid #CCC;">'.$date.'</td>
   <td style="width:25%; border:1px solid #CCC;"><textarea name="comments" id="commentbox_'.$result['d_id'].'" style="margin-bottom:2px;width:90%; height:auto; ">'.$result['comment'].'</textarea></td>
  ';
  if($result['comment']==''||$result['comment']==null){
	  $htm_view .='<td style="width:25%; border:1px solid #CCC;"><input type="hidden" value="comment" id="viewtype_'.$result['d_id'].'"><a href="javascript:" id="commentlink_'.$result['d_id'].'" onclick="commentupdate('.$result['d_id'].')">Comment</a></td></tr>';
  }else{
	  $htm_view .='<td style="width:25%; border:1px solid #CCC;"><input type="hidden" value="update" id="updatetype_'.$result['d_id'].'"><a href="javascript:" id="ommentlink_'.$result['d_id'].'" onclick="commentupdate('.$result['d_id'].')">Update</a></br><input type="hidden" value="reconsult" id="cmnttype_'.$result['d_id'].'"><a href="javascript:" id="reconsultlink_'.$result['d_id'].'" onclick="commentreconsult('.$result['d_id'].')">Reconsult</a></td></tr>';
	  }
$count++;
}
	}else{
		
		echo '<div style="width:100%;text-align:center;">No Record Found</div>';
		return false;
		
		}

$htm_view .='</table> ';
echo $htm_view;

?>
<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$personid = mysql_real_escape_string($_POST['person']);
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/

$sql_check_user = "SELECT * FROM `hearing_tbl` WHERE `p_id`='".$personid."' AND `comment_status` = '1' ";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$result_no = mysql_num_rows($res_check_user);
$count = 1;
if($result_no >0){
$htm_view = '<table id="hearing-tbl" style="width:100%;">
<thead style="width:100%;text-align:center;">
  <th style="width:10%;">S.No</th>
  <th style="width:10%;">Right-Ear</th>
  <th style="width:10%;">Left-Ear</th>
  <th style="width:50%;">Comments</th>
  <th style="width:10%;">Update/Edit</th>
</thead>';

	while($result = mysql_fetch_array($res_check_user)){
$htm_view .='<tr style="width:100%; border:1px solid #CCC;text-align:center;">
  <td style="width:10%; border:1px solid #CCC;">'.$count.'</td>
  <td style="width:10%; border:1px solid #CCC;">'.$result['right_ear'].'</td>
  <td style="width:10%; border:1px solid #CCC;">'.$result['left_ear'].'</td>
   <td style="width:40%; border:1px solid #CCC;"><textarea name="comments" id="commentbox_'.$result['h_id'].'" style="margin-bottom:2px;width:90%; height:auto; ">'.$result['doctor_comments'].'</textarea></td>
  ';
  if($result['doctor_comments']==''||$result['doctor_comments']==null){
	  $htm_view .='<td style="width:10%; border:1px solid #CCC;"><input type="hidden" value="comment" id="viewtype_'.$result['h_id'].'"><a href="javascript:" id="commentlink_'.$result['h_id'].'" onclick="commentupdate('.$result['h_id'].')">Comment</a></td></tr>';
  }else{
	  $htm_view .='<td style="width:10%; border:1px solid #CCC;"><input type="hidden" value="update" id="updatetype_'.$result['h_id'].'"><a href="javascript:" id="commentlink_'.$result['h_id'].'" onclick="commentupdate('.$result['h_id'].')">Update</a></br><input type="hidden" value="reconsult" id="cmnttype_'.$result['h_id'].'"><a href="javascript:" id="reconsultlink_'.$result['h_id'].'" onclick="commentreconsult('.$result['h_id'].')">Reconsult</a></td></tr>';
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
<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$personid = mysql_real_escape_string($_POST['person']);
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/

$sql_check_user = "SELECT * FROM `pft_report` WHERE `p_id`='".$personid."' AND `comment_status` = '0' ";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$result_no = mysql_num_rows($res_check_user);
$count = 1;
if($result_no >0){
$htm_view = '<table id="dental-tbl" style="width:100%;">
<thead style="width:100%;text-align:center;">
  <th style="width:33%;">S.No</th>
  <th style="width:33%;">Date</th>
  <th style="width:33%;">Report</th>
</thead>';

	while($result = mysql_fetch_array($res_check_user)){
		$date_form = new DateTime($result['date_inserted']);
$date = date_format($date_form, 'd-m-Y');
$htm_view .='<tr style="width:100%; border:1px solid #CCC;text-align:center;">
  <td style="width:33%; border:1px solid #CCC;">'.$count.'</td>
  <td style="width:33%; border:1px solid #CCC;">'.$date.'</td>
   <td style="width:33%; border:1px solid #CCC;"><a href="javascript:" onclick="view('.$result['pft_id'].')">View</a><input type="hidden" id="pftcomment_'.$result['pft_id'].'" value="'.$result['comment'].'"/><div id="pftreport_'.$result['pft_id'].'" style="display:none;">
        <div id="pftajax" style="width:100%; height:auto; text-align:center; font-size: 16px;">
        		 <iframe src="http://docs.google.com/gview?url=http://'.$_SERVER['SERVER_NAME'].'/pftreport/'.$result['pdffile'].'&embedded=true" style="width:100%; height:700px;" frameborder="0"></iframe>
    		</div>
		</div></td></tr>
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
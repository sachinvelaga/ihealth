<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$personid = mysql_real_escape_string($_POST['person']);
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/

$sql_check_user = "SELECT * FROM `fitness_tbl` WHERE `s_id`='".$personid."' AND `comment_status` = '2' ";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$result_no = mysql_num_rows($res_check_user);
$count = 1;
if($result_no >0){
$htm_view = '<table id="fitness-tbl" style="width:100%; ">
<thead style="width:100%;text-align:center;">
  <th style="width:7%;">S.No</th>
  <th style="width:7%;">Height</th>
  <th style="width:7%;">Weight</th>
  <th style="width:7%;">BMI</th>
  <th style="width:10%;">Heart beat</th>
  <th style="width:7%;">Temp</th>
  <th style="width:7%;">Pulse</th>
  <th style="width:7%;">BP</th>
  <th style="width:7%;">SPO<sub>2</sub></th>
  <th style="width:7%;">ECG</th>
  <th style="width:20%;">Comments</th>
</thead>';

	while($result = mysql_fetch_array($res_check_user)){
$htm_view .='<tr style="width:100%; border:1px solid #CCC;text-align:center;">
  <td style="width:7%; border:1px solid #CCC;">'.$count.'</td>
  <td style="width:7%; border:1px solid #CCC;">'.$result['height'].'</td>
  <td style="width:7%; border:1px solid #CCC;">'.$result['weight'].'</td>
  <td style="width:7%; border:1px solid #CCC;">'.$result['bmi'].'</td>  <td style="width:10%; border:1px solid #CCC;"><input type="hidden" value="'.$result['hb'].'" id="hb_'.$result['f_id'].'"/><a href="javascript:" onclick="heartbeat('.$result['f_id'].')">Play</a></td>
  <td style="width:7%; border:1px solid #CCC;">'.$result['temp'].'</td>
  <td style="width:7%; border:1px solid #CCC;">'.$result['pulse'].'</td>
  <td style="width:7%; border:1px solid #CCC;">'.$result['bp'].'</td>
  <td style="width:7%; border:1px solid #CCC;">'.$result['spo'].'</td>
  <td style="width:7%; border:1px solid #CCC;"><input type="hidden" value="'.$result['ecg'].'" id="ecg_'.$result['f_id'].'"/><a href="javascript:" onclick="ecgview('.$result['f_id'].')">View</a></td>
   <td style="width:27%;">'.$result['doctor_comment'].'</td>
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
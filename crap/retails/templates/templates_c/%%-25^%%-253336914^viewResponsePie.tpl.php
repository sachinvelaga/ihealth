<?php /* Smarty version 2.6.0, created on 2013-10-25 03:53:46
         compiled from viewResponsePie.tpl */ ?>
<div class="view_responce_cnt">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="32"><img src="images/icons/tools.png" alt="<?php echo $this->_tpl_vars['manager']; ?>
" class="header_home_img" /></td>
        <td width="10">&nbsp;</td>
        <td class="header_home"> Manage&nbsp;
          
          <?php echo $this->_tpl_vars['manager']; ?>
</td>
        <td valign="middle" align="right"></td>
      </tr>
    </table>
    <div class="breadcrumb breadcrumb2"> <?php echo $this->_tpl_vars['breadcrumb']; ?>
 </div> 
    <div id="json" value="<?php echo $this->_tpl_vars['json']; ?>
" sid="<?php echo $this->_tpl_vars['scenarioId']; ?>
"></div>
	<div id="container"></div>
    <div id="result" style="text-align:center; margin-bottom:30px;"> <span style="color:#06F;">Responded :</span><span> <?php echo $this->_tpl_vars['active']; ?>
 </span> &nbsp; &nbsp;<span style="color:#06F;">Not Responded :</span><span> <?php echo $this->_tpl_vars['inactive']; ?>
</span></div>
</div>
<script src="js/highcharts.js"></script>
<script src="js/responseChart.js" type="text/javascript"></script>
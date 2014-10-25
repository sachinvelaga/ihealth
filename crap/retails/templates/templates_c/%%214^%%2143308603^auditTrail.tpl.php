<?php /* Smarty version 2.6.0, created on 2014-01-10 05:47:47
         compiled from auditTrail.tpl */ ?>
<?php echo '
<script type="text/javascript">
function getAudit(){
    var page = $(\'#pageno\').val();
	
          $.ajax({
                  url:"auditsearch.php",
                  type:"POST",
                  data:{page:page},
                  success:function(resp){
                         $(\'#tablesorter-demo tbody\').html(resp);
	 var pagination = $.trim($(\'#arr_page_vars\').val());
	 if(page>1){
	 		var check = document.getElementsByTagName(\'td\')[0].innerHTML;
								if(check == \'No Records Available\'){
							var newpage = --page;
							$(\'#pageno\').val(newpage);
							getAudit();
								}
								}
				    $(\'#paginationdiv\').show();
			if(page==1){
			 $(\'#pageprev\').hide();
			 $(\'#pagenext\').show();
			 $(\'#prevnill\').show();
			}else{
			 $(\'#pageprev\').show();
			$(\'#prevnill\').hide();
			}
			if(page==pagination){
			 $(\'#pagenext\').hide();
			 $(\'#pageprev\').show();
			 $(\'#nextnill\').show();
			}else{
			 $(\'#pagenext\').show();
			$(\'#nextnill\').hide();
			}
           if(pagination > 1){
		   
	
			var ppage = page;
			var pagenext = ++page;
			var pagep = --page;
			var pageprev = --pagep;
       $(\'#pagination\').html(ppage+\'&nbsp;of&nbsp;\'+pagination);
       }else{
	   
	   $(\'#origpage\').hide();
	   $(\'#paginationdiv\').hide();
	   }
						 
                     }    
                  })

}  
function nextuser(){
var page = $(\'#pageno\').val();
var nextpage = ++page;
$(\'#pageno\').val(nextpage);
getAudit();
}
function prevuser(){

var page = $(\'#pageno\').val();

var nextpage = --page;

$(\'#pageno\').val(nextpage);
getAudit();
}
 $(window).load(function(){
         
       getAudit();
       
});

</script> 
'; ?>
 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="7">
        <tr>
          <td width="100%" class="tbl_brder"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
              <tr>
                <td><table id="tablesorter-demo" class="tablesorter"  style="background-color:#E6EEEE; color:#385BBF; font-family:Tahoma,Arial,Helvetica,sans-serif; font-size:11px;" rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" border="0" cellpadding="0" cellspacing="1">
                    <thead>
                      <tr>
                          <form name="frmdept" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
" >
                          <div class="select-01" style="width:100%; background:#fff !important;display:none !important;">
                        <form name="frmsearch" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
" >
                          <input type="hidden" name="action" value="Search">
                          <input type="hidden" name="option" value="action"  />
                          <input type="hidden" name="keyname" value="">
                          <div class="select-01_right">
                            <p>
                              <input name="keyword" type="text" class="select-01_right_ta" value="<?php echo $this->_tpl_vars['keyword']; ?>
"/>
                            </p>
                            <input title="Search" name="Search" type="image" src="images/icons/search.png" class="sel" style="float:right; margin: 16px 0 0 0 !important; height:30px !important;" alt="Search" onClick="return valid()"/>
                          </div>
                        </form>
                          </div>
                      </tr>
                    </thead>
                    <tbody>
                    <form name="frmlist" id="frmlist" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
">
                      <input type="hidden" name="action" value="Search">
                      <input type="hidden" name="srname" value="">
                      <input type="hidden" name="keyname" value="">
                      <tr class="header-title-bg" style="color:#fff !important; background:#000; text-align: center;">
                        <th height="35" align="center" width="25%"class="line1"  style="padding-left:15px; text-align: left; padding-bottom:0 !important;">User Id</th>
                        <th width="25%" align="center"class="line1 line10" style="padding-bottom:0 !important;">Action Done</th>
                        <th width="15%" style="text-align:center;padding-bottom:0 !important;" class="line1">Time of Action</th>
                      </tr>
             
                      <input  type="hidden" name="no" value="<?php echo $this->_tpl_vars['count_db_res']; ?>
">
                    </form>
                      </tbody>
                    
                  </table></td>
              </tr>
              <tr>
                <td  bgcolor="#e6EEEE"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:5px solid #545453; margin-top: 4px">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0"  style="border-top:1px solid #c4c4c4;">
                          <tr>
                            <td align="right" class="action_menu"></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
    </td>
  
    </tr>
  
</table>
	  <input type="hidden" id="pageno" value="<?php echo $this->_tpl_vars['curr_page']; ?>
"/>
<div  class="select-02_right" id="paginationdiv" style="display:none;text-align:right; padding-bottom:8px;padding-right:0!important;">
         		
		   		 <img src="images/paging/previous.png" border="0" id="pageprev" style="cursor:pointer;" onclick="prevuser()" />
				  <img src="images/paging/previous_disable.png" id="prevnill" border="0" style="cursor:text;" />	
        	<span id="pagination" style="font-size: 14px;color:#999; float: center; padding-top:6px;"></span>
			<img src="images/paging/next_disable.png" border="0" id="nextnill" style="cursor:text;" />
		  <img src="images/paging/next.png" title="Next" border="0" id="pagenext" style="cursor:pointer;" onclick="nextuser()" />
	
</div>
                                        <div style="padding-bottom:109px !important;"> </div>
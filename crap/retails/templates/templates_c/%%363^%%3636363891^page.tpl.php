<?php /* Smarty version 2.6.0, created on 2013-12-27 06:15:02
         compiled from page.tpl */ ?>
<?php echo '
<script language="javascript" type="text/javascript">
function spanHighlight(id)
{
  document.getElementById(id).style.background="#CCCCCC";
}
function spanNormal(id,page)
{
  if(id==page) 
  {
    document.getElementById(id).style.background="#CCCCCC";
  }
  else
  {
    document.getElementById(id).style.background="#FFFFFF";
  }
}
</script>
'; ?>

<div  class="select-02_right" id="origpage" style="text-align:right; padding-bottom:8px;padding-right:0!important;">
                                      <?php if ($this->_tpl_vars['curr_page'] > 1): ?>
		  <a href="<?php echo $this->_tpl_vars['page_name'];  if ($this->_tpl_vars['page_args'] != ''):  echo $this->_tpl_vars['page_args']; ?>
&page=<?php echo $this->_tpl_vars['curr_page']-1;  else: ?>?page=<?php echo $this->_tpl_vars['curr_page']-1;  endif; ?>" style="cursor:pointer;"><img src="images/paging/previous.png" border="0" /></a>
		<?php else: ?>		
		   <img src="images/paging/previous_disable.png" border="0" style="cursor:text;" />		
		<?php endif; ?> 
        	<span style="font-size: 14px;color:#999; float: center; padding-top:6px;"><?php echo $this->_tpl_vars['curr_page']; ?>
&nbsp;of&nbsp;<?php echo $this->_tpl_vars['arr_page_vars']['no_of_pages']; ?>
</span>
  
        <?php if ($this->_tpl_vars['curr_page'] < $this->_tpl_vars['arr_page_vars']['no_of_pages']): ?>
		  <a href="<?php echo $this->_tpl_vars['page_name'];  if ($this->_tpl_vars['page_args'] != ''):  echo $this->_tpl_vars['page_args']; ?>
&page=<?php echo $this->_tpl_vars['curr_page']+1;  else: ?>?page=<?php echo $this->_tpl_vars['curr_page']+1;  endif; ?>" style="cursor:pointer;"><img src="images/paging/next.png" title="Next" border="0"  /></a>
		<?php else: ?>		
		  <img src="images/paging/next_disable.png" border="0" style="cursor:text;" />
		<?php endif; ?>
                                    </div>
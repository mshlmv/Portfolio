<?php /* Smarty version 2.6.22, created on 2015-07-09 16:01:23
         compiled from menu.tpl */ ?>
<div class="menu">
	<ul>
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['general_menu_count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
      		<?php if ($this->_sections['i']['index'] == 2): ?><li class="menu_space"><div>&nbsp;</div></li><?php endif; ?>
      		<?php if ($this->_tpl_vars['url'][2] != $this->_tpl_vars['general_menu'][$this->_sections['i']['index']]['link']): ?>
         		<li><a href="/instyle/<?php echo $this->_tpl_vars['general_menu'][$this->_sections['i']['index']]['link']; ?>
/"><?php echo $this->_tpl_vars['general_menu'][$this->_sections['i']['index']]['name']; ?>
</a></li>
      		<?php else: ?>
      			<li class="current"><span><?php echo $this->_tpl_vars['general_menu'][$this->_sections['i']['index']]['name']; ?>
</span></li>
      		<?php endif; ?>
		<?php endfor; endif; ?>
  	</ul>
</div>
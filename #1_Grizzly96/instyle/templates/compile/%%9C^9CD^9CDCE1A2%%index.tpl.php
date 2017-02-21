<?php /* Smarty version 2.6.22, created on 2015-07-09 16:01:23
         compiled from static/index.tpl */ ?>
<div class="v_space"></div>
<div class="pages">
    <?php unset($this->_sections['u']);
$this->_sections['u']['name'] = 'u';
$this->_sections['u']['start'] = (int)0;
$this->_sections['u']['loop'] = is_array($_loop=$this->_tpl_vars['static']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['u']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['u']['show'] = true;
$this->_sections['u']['max'] = $this->_sections['u']['loop'];
if ($this->_sections['u']['start'] < 0)
    $this->_sections['u']['start'] = max($this->_sections['u']['step'] > 0 ? 0 : -1, $this->_sections['u']['loop'] + $this->_sections['u']['start']);
else
    $this->_sections['u']['start'] = min($this->_sections['u']['start'], $this->_sections['u']['step'] > 0 ? $this->_sections['u']['loop'] : $this->_sections['u']['loop']-1);
if ($this->_sections['u']['show']) {
    $this->_sections['u']['total'] = min(ceil(($this->_sections['u']['step'] > 0 ? $this->_sections['u']['loop'] - $this->_sections['u']['start'] : $this->_sections['u']['start']+1)/abs($this->_sections['u']['step'])), $this->_sections['u']['max']);
    if ($this->_sections['u']['total'] == 0)
        $this->_sections['u']['show'] = false;
} else
    $this->_sections['u']['total'] = 0;
if ($this->_sections['u']['show']):

            for ($this->_sections['u']['index'] = $this->_sections['u']['start'], $this->_sections['u']['iteration'] = 1;
                 $this->_sections['u']['iteration'] <= $this->_sections['u']['total'];
                 $this->_sections['u']['index'] += $this->_sections['u']['step'], $this->_sections['u']['iteration']++):
$this->_sections['u']['rownum'] = $this->_sections['u']['iteration'];
$this->_sections['u']['index_prev'] = $this->_sections['u']['index'] - $this->_sections['u']['step'];
$this->_sections['u']['index_next'] = $this->_sections['u']['index'] + $this->_sections['u']['step'];
$this->_sections['u']['first']      = ($this->_sections['u']['iteration'] == 1);
$this->_sections['u']['last']       = ($this->_sections['u']['iteration'] == $this->_sections['u']['total']);
?>
	<div class="general_page<?php if ($this->_tpl_vars['static'][$this->_sections['u']['index_next']]['type'] != $this->_tpl_vars['static'][$this->_sections['u']['index']]['type']): ?> padding-bottom-30<?php endif; ?>"><a href="/instyle/static/<?php echo $this->_tpl_vars['static'][$this->_sections['u']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['static'][$this->_sections['u']['index']]['name']; ?>
</a></div>
    <?php endfor; endif; ?>
</div>
<?php /* Smarty version 2.6.22, created on 2015-07-06 19:06:26
         compiled from categories/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'categories/index.tpl', 9, false),)), $this); ?>
<div class="v_space"></div>
<div class="left">
	<a href="add" class="add_new">Добавить категорию</a>
	<form action="/instyle/catalog-tags/" method="POST">	
		<div class="newsblock">
			<?php if ($this->_tpl_vars['tags'] != ""): ?>
			<table class="projects_table">
			<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['start'] = (int)0;
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['tags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['q']['show'] = true;
$this->_sections['q']['max'] = $this->_sections['q']['loop'];
$this->_sections['q']['step'] = 1;
if ($this->_sections['q']['start'] < 0)
    $this->_sections['q']['start'] = max($this->_sections['q']['step'] > 0 ? 0 : -1, $this->_sections['q']['loop'] + $this->_sections['q']['start']);
else
    $this->_sections['q']['start'] = min($this->_sections['q']['start'], $this->_sections['q']['step'] > 0 ? $this->_sections['q']['loop'] : $this->_sections['q']['loop']-1);
if ($this->_sections['q']['show']) {
    $this->_sections['q']['total'] = min(ceil(($this->_sections['q']['step'] > 0 ? $this->_sections['q']['loop'] - $this->_sections['q']['start'] : $this->_sections['q']['start']+1)/abs($this->_sections['q']['step'])), $this->_sections['q']['max']);
    if ($this->_sections['q']['total'] == 0)
        $this->_sections['q']['show'] = false;
} else
    $this->_sections['q']['total'] = 0;
if ($this->_sections['q']['show']):

            for ($this->_sections['q']['index'] = $this->_sections['q']['start'], $this->_sections['q']['iteration'] = 1;
                 $this->_sections['q']['iteration'] <= $this->_sections['q']['total'];
                 $this->_sections['q']['index'] += $this->_sections['q']['step'], $this->_sections['q']['iteration']++):
$this->_sections['q']['rownum'] = $this->_sections['q']['iteration'];
$this->_sections['q']['index_prev'] = $this->_sections['q']['index'] - $this->_sections['q']['step'];
$this->_sections['q']['index_next'] = $this->_sections['q']['index'] + $this->_sections['q']['step'];
$this->_sections['q']['first']      = ($this->_sections['q']['iteration'] == 1);
$this->_sections['q']['last']       = ($this->_sections['q']['iteration'] == $this->_sections['q']['total']);
?>
				<?php echo smarty_function_math(array('assign' => 'step_1','equation' => "floor(step/2)",'step' => $this->_sections['q']['index']), $this);?>

				<?php echo smarty_function_math(array('assign' => 'step_2','equation' => "step/2",'step' => $this->_sections['q']['index']), $this);?>

				<tr>
					<td class="theme_td<?php if ($this->_tpl_vars['step_1'] == $this->_tpl_vars['step_2']): ?> second_line<?php endif; ?>" style="width: 300px;">
						<?php if ($this->_tpl_vars['tags'][$this->_sections['q']['index']]['depth'] == 1): ?>&nbsp;&nbsp;&nbsp;<?php endif; ?><a href="/instyle/catalog-tags/<?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['name']; ?>
</a>
					</td>
					<td class="news_date_td<?php if ($this->_tpl_vars['step_1'] == $this->_tpl_vars['step_2']): ?> second_line<?php endif; ?>" style="width: 50px;">
						<input name="weight[]" type="text" size="4" value="<?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['weight']; ?>
" />
						<input name="id[]" type="hidden" value="<?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['id']; ?>
" />
					</td>
				</tr>
				
				<?php if ($this->_sections['q']['last']): ?></table><?php endif; ?>
			<?php endfor; endif; ?>
			<?php endif; ?>
		</div>
		<input type="hidden" name="action" value="weight_change" />
		<div style="padding-top: 20px;"><input type="submit" value="Сохранить веса" /></div>
	</form>
</div>
<div class="clear_both"></div>
<div class="v_space"></div>
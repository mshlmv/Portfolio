<?php /* Smarty version 2.6.22, created on 2015-07-08 18:46:44
         compiled from catalog/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'catalog/index.tpl', 8, false),array('function', 'math', 'catalog/index.tpl', 10, false),)), $this); ?>
<div class="v_space"></div>
<div class="left">
	<a href="/instyle/catalog/add/" class="add_new">Добавить товар</a>

	<div class="newsblock">
		<?php if ($this->_tpl_vars['catalog'] != ""): ?>
		<table class="projects_table">
		<?php echo smarty_function_counter(array('name' => 'count','assign' => 'count','start' => 0,'print' => false), $this);?>

		<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['catalog']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['q']['show'] = true;
$this->_sections['q']['max'] = $this->_sections['q']['loop'];
$this->_sections['q']['step'] = 1;
$this->_sections['q']['start'] = $this->_sections['q']['step'] > 0 ? 0 : $this->_sections['q']['loop']-1;
if ($this->_sections['q']['show']) {
    $this->_sections['q']['total'] = $this->_sections['q']['loop'];
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
					<a href="/instyle/catalog/<?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['name']; ?>
</a>
				</td>
				<td class="theme_td<?php if ($this->_tpl_vars['step_1'] == $this->_tpl_vars['step_2']): ?> second_line<?php endif; ?>" style="width: 100px;">
					<?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['size']; ?>

				</td>
				<td class="theme_td<?php if ($this->_tpl_vars['step_1'] == $this->_tpl_vars['step_2']): ?> second_line<?php endif; ?>" style="width: 200px;">
					<?php if ($this->_tpl_vars['catalog'][$this->_sections['q']['index']]['sale'] == 'yes'): ?><span class="line-through"><?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['price']; ?>
</span> <?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['sale_price']; ?>
 руб.<?php else: ?><?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['price']; ?>
 руб.<?php endif; ?>
				</td>
			</tr>
			<?php echo smarty_function_counter(array('name' => 'count'), $this);?>

		<?php endfor; endif; ?>
		<?php endif; ?>
		</table>
	</div>
</div>
<div class="clear_both"></div>
<div class="v_space"></div>
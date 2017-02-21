<?php /* Smarty version 2.6.22, created on 2015-07-29 16:31:20
         compiled from catalog/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'catalog/edit.tpl', 84, false),array('modifier', 'count', 'catalog/edit.tpl', 84, false),)), $this); ?>
<div class="v_space"></div>
<div class="pages">
	<a href="/instyle/catalog/" class="go_back">&larr; Вернуться назад</a>
	
	<h2>Редактирование товара</h2>

	<form action="/instyle/catalog/" method="POST" enctype="multipart/form-data">

	<div class="some_left_part">
  		<table cellpadding="0" cellspacing="0" width="580px" class="static_table" style="width: 580px;">
			<tr>
  				<td style="width: 130px;">
  					Название
  				</td>
  				<td>
  					<input type="text" size="70" style="width: 450px;" name="name" value="<?php echo $this->_tpl_vars['catalog']['name']; ?>
" />
  				</td>
  			</tr>
			<tr>
  				<td style="width: 130px;">
  					Размер
  				</td>
  				<td>
  					<input type="text" size="70" style="width: 200px;" name="size" value="<?php echo $this->_tpl_vars['catalog']['size']; ?>
" />
  				</td>
  			</tr>	
			<tr>
  				<td class="padding-bottom-30 padding-top-30">
  					Тип
  				</td>
  				<td class="padding-bottom-30 padding-top-30">
				    <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['tags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<?php $this->assign('this_checked', 'no'); ?>
					<?php unset($this->_sections['w']);
$this->_sections['w']['name'] = 'w';
$this->_sections['w']['loop'] = is_array($_loop=$this->_tpl_vars['catalog']['tags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['w']['show'] = true;
$this->_sections['w']['max'] = $this->_sections['w']['loop'];
$this->_sections['w']['step'] = 1;
$this->_sections['w']['start'] = $this->_sections['w']['step'] > 0 ? 0 : $this->_sections['w']['loop']-1;
if ($this->_sections['w']['show']) {
    $this->_sections['w']['total'] = $this->_sections['w']['loop'];
    if ($this->_sections['w']['total'] == 0)
        $this->_sections['w']['show'] = false;
} else
    $this->_sections['w']['total'] = 0;
if ($this->_sections['w']['show']):

            for ($this->_sections['w']['index'] = $this->_sections['w']['start'], $this->_sections['w']['iteration'] = 1;
                 $this->_sections['w']['iteration'] <= $this->_sections['w']['total'];
                 $this->_sections['w']['index'] += $this->_sections['w']['step'], $this->_sections['w']['iteration']++):
$this->_sections['w']['rownum'] = $this->_sections['w']['iteration'];
$this->_sections['w']['index_prev'] = $this->_sections['w']['index'] - $this->_sections['w']['step'];
$this->_sections['w']['index_next'] = $this->_sections['w']['index'] + $this->_sections['w']['step'];
$this->_sections['w']['first']      = ($this->_sections['w']['iteration'] == 1);
$this->_sections['w']['last']       = ($this->_sections['w']['iteration'] == $this->_sections['w']['total']);
?>
					    <?php if ($this->_tpl_vars['catalog']['tags'][$this->_sections['w']['index']]['id_tag'] == $this->_tpl_vars['tags'][$this->_sections['q']['index']]['id']): ?><?php $this->assign('this_checked', 'yes'); ?><?php endif; ?>
					<?php endfor; endif; ?>
					<div class="tag depth-0 padding-bottom-10"><input type="checkbox" name="tags[]" value="<?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['this_checked'] == 'yes'): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['name']; ?>
</div>
				    <?php endfor; endif; ?>
				    <div class="clear_both"></div>
  				</td>
  			</tr>
			<tr>
				<td>
					Цена
				</td>
				<td>
					<input type="text" size="7" name="price" value="<?php echo $this->_tpl_vars['catalog']['price']; ?>
" /> руб.
				</td>
			</tr>
			<tr>
				<td>
					Цена для распродажи
				</td>
				<td>
					<input type="text" size="7" name="sale_price" value="<?php echo $this->_tpl_vars['catalog']['sale_price']; ?>
" /> руб.
				</td>
			</tr>
			<tr>
  				<td class="padding-bottom-30">
  					На распродаже
  				</td>
  				<td class="padding-bottom-30">
					<input type="checkbox" name="sale" value="yes" <?php if ($this->_tpl_vars['catalog']['sale'] == 'yes'): ?>checked="checked"<?php endif; ?> />
  				</td>
  			</tr>
			<tr>
  				<td>
  					Изображения
  				</td>
  				<td>					
					<?php if ($this->_tpl_vars['images'] != 0): ?>
					<div class="images-list">
						<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['images']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<div class="item">
							<a class="fancybox" href="<?php echo $this->_tpl_vars['images'][$this->_sections['q']['index']]['link_big']; ?>
"><img src="<?php echo $this->_tpl_vars['images'][$this->_sections['q']['index']]['link_sml']; ?>
"></a>
							<div><a href="/instyle/catalog/?action=image_delete&id=<?php echo $this->_tpl_vars['images'][$this->_sections['q']['index']]['id']; ?>
">Удалить</a></div>
						</div>
						<?php endfor; endif; ?>
						<div class="clear_both"></div>
					</div>				
					<?php endif; ?>
					
					<?php if ($this->_tpl_vars['images'] != 0): ?>
						<?php echo smarty_function_math(array('assign' => 'w','equation' => '3-x','x' => count($this->_tpl_vars['images'])), $this);?>

					<?php else: ?>
						<?php $this->assign('w', 3); ?>
					<?php endif; ?>
					
					<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['w']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<div class="one-field<?php if ($this->_sections['q']['last']): ?> last<?php endif; ?>"><input type="file" name="images[]" /></div>
					<?php endfor; endif; ?>
  				</td>
  			</tr>
  			<tr>
  				<td class="padding_top_50">&nbsp;</td>
  				<td class="padding_top_50"><input type="submit" value="Сохранить" /></td>
  			</tr>
  		</table>
	</div>

	<div class="some_left_part padding_left_50">
		<div class="checkbox_inputs">
			<div class="padding-bottom-30"><input type="checkbox" name="display" value="yes" <?php if ($this->_tpl_vars['catalog']['display'] == 'yes'): ?>checked <?php endif; ?> /> Показывать на сайте</div>
			<div><input type="checkbox" name="delete" value="yes" /> Удалить</div>
		</div>
	</div>

	<div class="clear_both"></div>

	<input type="hidden" name="action" value="edit" />
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['catalog']['id']; ?>
" />

	</form>
</div>
<div class="clear_both"></div>
<?php /* Smarty version 2.6.22, created on 2015-07-29 16:31:13
         compiled from catalog/add.tpl */ ?>
<div class="v_space"></div>
<div class="pages">
	<a href="/instyle/catalog/" class="go_back">&larr; Вернуться назад</a>
	
	<h2>Добавление нового товара</h2>

	<form action="/instyle/catalog/" method="POST" enctype="multipart/form-data">
	
	<div class="some_left_part">
  		<table cellpadding="0" cellspacing="0" width="580px" class="static_table" style="width: 580px;">
			<tr>
  				<td style="width: 130px;">
  					Название
  				</td>
  				<td>
  					<input type="text" size="70" style="width: 450px;" name="name" />
  				</td>
  			</tr>
			<tr>
  				<td style="width: 130px;">
  					Размер
  				</td>
  				<td>
  					<input type="text" size="70" style="width: 200px;" name="size" value="" />
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
					<div class="tag depth-<?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['depth']; ?>
<?php if ($this->_tpl_vars['tags'][$this->_sections['q']['index']]['depth'] != 0 && $this->_tpl_vars['tags'][$this->_sections['q']['index_next']]['depth'] == 0): ?> padding-bottom-10<?php endif; ?>"><input type="checkbox" name="tags[]" value="<?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['id']; ?>
" /> <?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['name']; ?>
<input type="hidden" size="5" name="visible_id[]" value="<?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['id']; ?>
" /><input type="text" size="5" name="tags_weight[]" value="<?php echo $this->_tpl_vars['tags'][$this->_sections['q']['index']]['weight']; ?>
" /></div>
					<?php endfor; endif; ?>
					<div class="clear_both"></div>
  				</td>
  			</tr>
			<tr>
				<td>
					Цена
				</td>
				<td>
					<input type="text" size="7" name="price" value="" /> руб.
				</td>
			</tr>
			<tr>
				<td>
					Цена для распродажи
				</td>
				<td>
					<input type="text" size="7" name="sale_price" value="" /> руб.
				</td>
			</tr>
			<tr>
  				<td class="padding-bottom-30">
  					На распродаже
  				</td>
  				<td class="padding-bottom-30">
					<input type="checkbox" name="sale" value="yes" />
  				</td>
  			</tr>
			<tr>
  				<td>
  					Изображения
  				</td>
  				<td>
					<div class="one-field"><input type="file" name="images[]" /></div>
					<div class="one-field"><input type="file" name="images[]" /></div>
					<div class="one-field"><input type="file" name="images[]" /></div>
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
			<div class="checkbox_padding_bottom"><input type="checkbox" name="display" value="yes" checked /> Показывать на сайте</div>
		</div>
	</div>

	<div class="clear_both"></div>

	<input type="hidden" name="action" value="post" />

	</form>
</div>
<div class="clear_both"></div>
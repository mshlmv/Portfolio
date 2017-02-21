<?php /* Smarty version 2.6.22, created on 2015-07-08 18:35:52
         compiled from categories/edit.tpl */ ?>
<div class="v_space"></div>
<div class="pages">
	<a href="/instyle/catalog-tags/" class="go_back">&larr; Вернуться назад</a>
	<h2>Редактирование категории</h2>
	<form action="/instyle/catalog-tags/" method="POST" enctype="multipart/form-data">
		<div class="some_left_part">
			<table cellpadding="0" cellspacing="0" width="580px" class="static_table">
				<tr>
					<td>
						Название
					</td>
					<td>
						<input type="text" class="st_text" size="70" name="name" value="<?php echo $this->_tpl_vars['tags']['name']; ?>
" />
					</td>
				</tr>
				<tr>
					<td>
						На сайте
					</td>
					<td>
						<input type="text" class="st_text" size="70" name="site_name" value="<?php echo $this->_tpl_vars['tags']['site_name']; ?>
" />
					</td>
				</tr>				
				<tr>
					<td>
						Ссылка
					</td>
					<td>
						<input type="text" class="st_text" size="70" name="link" value="<?php echo $this->_tpl_vars['tags']['link']; ?>
" />
					</td>
				</tr>
				<tr>
					<td class="padding_top_50">
						&nbsp;
					</td>
					<td class="padding_top_50">
						<input type="submit" value="Сохранить" />
					</td>
				</tr>
			</table>
		</div>
		<div class="some_left_part padding_left_50">
			<div class="checkbox_inputs">
				<div class="padding-bottom-30"><input type="checkbox" name="display" value="yes" <?php if ($this->_tpl_vars['tags']['display'] == 'yes'): ?>checked="checked"<?php endif; ?> /> Показывать на сайте</div>
				<div class="padding-bottom-30"><input type="checkbox" name="delete" value="yes" /> Удалить</div>
			</div>
		</div>
		<div class="clear_both"></div>
		<input type="hidden" name="action" value="edit" />
		<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['tags']['id']; ?>
" />
	</form>
</div>
<div class="clear_both"></div>
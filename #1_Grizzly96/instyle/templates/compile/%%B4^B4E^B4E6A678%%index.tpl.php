<?php /* Smarty version 2.6.22, created on 2015-07-10 00:28:36
         compiled from settings/index.tpl */ ?>
<div class="v_space"></div>
<div class="pages">
	<h2>Дополнительные настройки</h2>
	<form action="/instyle/settings/" method="POST" enctype="multipart/form-data">
	<div class="some_left_part">
		<table cellpadding="0" cellspacing="0" width="750px" class="static_table" style="width: 750px;">
			<tr>
				<td style="width: 200px;">
					Основной адрес<br /> электронной почты
				</td>
				<td>
					<input name="general_email" value="<?php echo $this->_tpl_vars['settings']['general_email']; ?>
" type="text" style="width: 500px;" />
				</td>
			</tr>			
			<tr>
				<td>
					&nbsp;
				</td>
				<td class="padding_top_50">
					<input type="submit" value="Сохранить" />
				</td>
			</tr>
		</table>
	</div>
	<div class="clear_both"></div>
	<input type="hidden" name="action" value="edit" />
	</form>
</div>
<div class="clear_both"></div>
<div class="v_space"></div>
<div class="pages">
	<a href="/instyle/catalog-tags/" class="go_back">&larr; Вернуться назад</a>
	<h2>Добавление категории</h2>
	<form action="/instyle/catalog-tags/" method="POST" enctype="multipart/form-data">
		<div class="some_left_part">
			<table cellpadding="0" cellspacing="0" width="580px" class="static_table">
				<tr>
					<td>
						Название
					</td>
					<td>
						<input type="text" class="st_text" size="70" name="name" value="" />
					</td>
				</tr>
				<tr>
					<td>
						На сайте
					</td>
					<td>
						<input type="text" class="st_text" size="70" name="site_name" value="" />
					</td>
				</tr>				
				<tr>
					<td>
						Ссылка
					</td>
					<td>
						<input type="text" class="st_text" size="70" name="link" value="" />
					</td>
				</tr>
				<tr>
					<td class="padding_top_50">
						&nbsp;
					</td>
					<td class="padding_top_50">
						<input type="submit" value="Добавить" />
					</td>
				</tr>
			</table>
		</div>
		<div class="some_left_part padding_left_50">
			<div class="checkbox_inputs">
				<div><input type="checkbox" name="display" value="yes" checked /> Показывать на сайте</div>				
			</div>
		</div>
		<div class="clear_both"></div>
		<input type="hidden" name="action" value="post" />
	</form>
</div>
<div class="clear_both"></div>
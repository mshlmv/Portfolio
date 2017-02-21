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
  					{section name=q loop=$tags}
					<div class="tag depth-{$tags[q].depth}{if $tags[q].depth != 0 && $tags[$smarty.section.q.index_next].depth == 0} padding-bottom-10{/if}"><input type="checkbox" name="tags[]" value="{$tags[q].id}" /> {$tags[q].name}<input type="hidden" size="5" name="visible_id[]" value="{$tags[q].id}" /><input type="text" size="5" name="tags_weight[]" value="{$tags[q].weight}" /></div>
					{/section}
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
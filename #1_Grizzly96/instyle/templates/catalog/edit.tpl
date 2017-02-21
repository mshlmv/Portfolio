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
  					<input type="text" size="70" style="width: 450px;" name="name" value="{$catalog.name}" />
  				</td>
  			</tr>
			<tr>
  				<td style="width: 130px;">
  					Размер
  				</td>
  				<td>
  					<input type="text" size="70" style="width: 200px;" name="size" value="{$catalog.size}" />
  				</td>
  			</tr>	
			<tr>
  				<td class="padding-bottom-30 padding-top-30">
  					Тип
  				</td>
  				<td class="padding-bottom-30 padding-top-30">
				    {section name=q loop=$tags}
					{assign var=this_checked value="no"}
					{section name=w loop=$catalog.tags}
					    {if $catalog.tags[w].id_tag == $tags[q].id}{assign var=this_checked value="yes"}{/if}
					{/section}
					<div class="tag depth-0 padding-bottom-10"><input type="checkbox" name="tags[]" value="{$tags[q].id}" {if $this_checked == "yes"}checked="checked"{/if} /> {$tags[q].name}</div>
				    {/section}
				    <div class="clear_both"></div>
  				</td>
  			</tr>
			<tr>
				<td>
					Цена
				</td>
				<td>
					<input type="text" size="7" name="price" value="{$catalog.price}" /> руб.
				</td>
			</tr>
			<tr>
				<td>
					Цена для распродажи
				</td>
				<td>
					<input type="text" size="7" name="sale_price" value="{$catalog.sale_price}" /> руб.
				</td>
			</tr>
			<tr>
  				<td class="padding-bottom-30">
  					На распродаже
  				</td>
  				<td class="padding-bottom-30">
					<input type="checkbox" name="sale" value="yes" {if $catalog.sale == "yes"}checked="checked"{/if} />
  				</td>
  			</tr>
			<tr>
  				<td>
  					Изображения
  				</td>
  				<td>					
					{if $images != 0}
					<div class="images-list">
						{section name=q loop=$images}
						<div class="item">
							<a class="fancybox" href="{$images[q].link_big}"><img src="{$images[q].link_sml}"></a>
							<div><a href="/instyle/catalog/?action=image_delete&id={$images[q].id}">Удалить</a></div>
						</div>
						{/section}
						<div class="clear_both"></div>
					</div>				
					{/if}
					
					{if $images != 0}
						{math assign=w equation='3-x' x=$images|@count}
					{else}
						{assign var=w value=3}
					{/if}
					
					{section name=q loop=$w}
					<div class="one-field{if $smarty.section.q.last} last{/if}"><input type="file" name="images[]" /></div>
					{/section}
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
			<div class="padding-bottom-30"><input type="checkbox" name="display" value="yes" {if $catalog.display == "yes"}checked {/if} /> Показывать на сайте</div>
			<div><input type="checkbox" name="delete" value="yes" /> Удалить</div>
		</div>
	</div>

	<div class="clear_both"></div>

	<input type="hidden" name="action" value="edit" />
	<input type="hidden" name="id" value="{$catalog.id}" />

	</form>
</div>
<div class="clear_both"></div>
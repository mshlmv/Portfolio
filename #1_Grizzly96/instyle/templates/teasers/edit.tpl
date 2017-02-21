<div class="v_space"></div>

<div class="pages">
	<a href="/instyle/teasers/" class="go_back">&larr; Вернуться назад</a>

	<h2>Добавление тизера</h2>

	<form action="/instyle/teasers/" method="POST" enctype="multipart/form-data">

	<div class="some_left_part">
  		<table cellpadding="0" cellspacing="0" width="580px" class="static_table" style="width: 580px;">
  			<tr>
  				<td style="width: 130px;">
  					Название
  				</td>
  				<td>
  					<input type="text" size="70" style="width: 450px;" name="name" value="{$teasers.name}" />
  				</td>
  			</tr>
  			<tr>
  				<td>
  					Ссылка
  				</td>
  				<td>
  					<input type="text" size="70" style="width: 450px;" name="link" value="{$teasers.link}" />
  				</td>
  			</tr>
			<tr>
  				<td>
  					Картинка
  				</td>
  				<td>
  					{if $teasers.image != ""}
						<div class="padding-bottom-10"><img width="600px" src="{$teasers.image}" /></div>
						<a href="/instyle/teasers/?action=image_delete&id={$teasers.id}">Удалить</a>
					{else}
						<input type="file" name="image" />
					{/if}
  				</td>
  			</tr>
  			<tr>
  				<td style="padding-top: 35px;">
  					&nbsp;
  				</td>
  				<td style="padding-top: 35px;">
  					<input type="submit" value="Сохранить" />
  				</td>
  			</tr>
  		</table>
	</div>
	
	<div class="some_left_part padding_left_50">
		<div class="checkbox_inputs">
			<div class="padding-bottom-30"><input type="checkbox" name="display" value="yes" {if $teasers.display == "yes"}checked="checked" {/if}/> Показывать на сайте</div>
			<div><input type="checkbox" name="delete" value="yes" /> Удалить</div>
		</div>
	</div>

	<div class="clear_both"></div>

   	<input type="hidden" name="action" value="edit" />
	<input type="hidden" name="id" value="{$teasers.id}" />

	</form>

  	</div>

  	<div class="clear_both"></div>
</div>
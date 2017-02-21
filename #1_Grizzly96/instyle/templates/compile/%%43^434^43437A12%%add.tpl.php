<?php /* Smarty version 2.6.22, created on 2015-11-25 15:03:07
         compiled from teasers/add.tpl */ ?>
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
  					<input type="text" size="70" style="width: 450px;" name="name" />
  				</td>
  			</tr>
  			<tr>
  				<td>
  					Ссылка
  				</td>
  				<td>
  					<input type="text" size="70" style="width: 450px;" name="link" />
  				</td>
  			</tr>
			<tr>
  				<td>
  					Картинка
  				</td>
  				<td>
  					<input type="file" name="image" />
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
			<div class="checkbox_padding_bottom"><input type="checkbox" name="display" value="yes" checked /> Показывать на сайте</div>
		</div>
	</div>

	<div class="clear_both"></div>

   	<input type="hidden" name="action" value="post" />

	</form>

  	</div>

  	<div class="clear_both"></div>
</div>
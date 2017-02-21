<?php /* Smarty version 2.6.22, created on 2015-12-27 00:13:58
         compiled from upload/add.tpl */ ?>
<div class="v_space">
</div>

<a href="/instyle/upload" class="go_back">&larr; Вернуться назад</a>

<h2>Добавление нового файла</h2>

	<div>

	<form action="/instyle/upload/" method="POST" enctype="multipart/form-data">

		<div class="add_part">
			<table class="add_table" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						Комментарий
					</td>
					<td>
						<input type="text" size="50" maxlength="50" name="comment" />
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						<input type="submit" value="Сохранить" class="submit_left" />

						<div class="clear_both">
						</div>
					</td>
				</tr>
			</table>
		</div>

		<div class="add_part">
			<table class="add_table" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						Файл
					</td>
					<td>
						<div>
							<input type="file" name="filename" class="photo_input" />
						</div>
					</td>
				</tr>
			</table>
		</div>

	<input type="hidden" name="action" value="post" />
	</form>

		<div class="clear_both">
		</div>
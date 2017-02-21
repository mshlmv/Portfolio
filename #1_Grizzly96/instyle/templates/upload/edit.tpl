<div class="v_space">
</div>

<a href="/instyle/upload" class="go_back">&larr; Вернуться назад</a>

<h2>Редактирование файла</h2>

	<div>

	<form action="/instyle/upload/" method="POST" enctype="multipart/form-data">

		<div class="add_part">
			<table class="add_table" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						Комментарий
					</td>
					<td>
						<input type="text" size="50" maxlength="50" name="comment" value="{$upload.comment}" />
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
						Ссылка &#151; <a href="{$upload.link}">{$upload.link}</a><br />
						Размер &#151; {$upload.size} кб.
					</td>
					<td>
					</td>
				</tr>
				<tr>
					<td>
						<div>
							<input type="checkbox" name="delete" value="1" /> <b size="+1">Удалить</b>
						</div>
					</td>
					<td>
					</td>
				</tr>
			</table>
		</div>

	<input type="hidden" name="action" value="edit" />
	<input type="hidden" name="id" value="{$upload.id}" />
	</form>

		<div class="clear_both">
		</div>

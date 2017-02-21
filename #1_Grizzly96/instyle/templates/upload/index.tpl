  	<div class="v_space">
    	</div>

    	<div class="catalog">
    		<a href="/instyle/upload/add" class="add_link">Загрузить файл</a>

    		<table cellpadding="0" cellspacing="1" class="files_table">
  					<tr>
  						<td class="first_files_td_header">
  							Тип
  						</td>
  						<td class="second_files_td_header">
  							Комментарий
  						</td>
  						<td class="third_files_td_header">
  							Ссылка
  						</td>
  						<td class="last_td">
  						</td>
  					</tr>

  					{section name=y start=0 loop=$upload}
  						<tr>
  							<td class="simple_td">
  								<img src="http://funburg.ru/instyle/images/{$upload[y].type}.gif" width="25px" />
  							</td>
  							<td class="simple_td">
  								{$upload[y].comment}</br>
  								<a href="/instyle/upload/{$upload[y].id}" class="persents_95">Редактировать</a>
  							</td>
  							<td class="simple_td">
  								<a href="{$upload[y].link}">{$upload[y].link}</a>
  							</td>
  						</tr>
  					{/section}
  					<tr>
  						<td colspan="3" class="files_total_td">
  							Всего <b>{$smarty.section.y.total} файла</b> объемом <b>{$upload[0].sum} кб</b>
  						</td>
  					</tr>
  				</table>
    	</div>

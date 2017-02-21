<div class="v_space"></div>
<div class="left">
	<a href="add" class="add_new">Добавить категорию</a>
	<form action="/instyle/catalog-tags/" method="POST">	
		<div class="newsblock">
			{if $tags != ""}
			<table class="projects_table">
			{section name=q start=0 loop=$tags}
				{math assign="step_1" equation="floor(step/2)" step=$smarty.section.q.index}
				{math assign="step_2" equation="step/2" step=$smarty.section.q.index}
				<tr>
					<td class="theme_td{if $step_1 == $step_2} second_line{/if}" style="width: 300px;">
						{if $tags[q].depth == 1}&nbsp;&nbsp;&nbsp;{/if}<a href="/instyle/catalog-tags/{$tags[q].id}">{$tags[q].name}</a>
					</td>
					<td class="news_date_td{if $step_1 == $step_2} second_line{/if}" style="width: 50px;">
						<input name="weight[]" type="text" size="4" value="{$tags[q].weight}" />
						<input name="id[]" type="hidden" value="{$tags[q].id}" />
					</td>
				</tr>
				
				{if $smarty.section.q.last}</table>{/if}
			{/section}
			{/if}
		</div>
		<input type="hidden" name="action" value="weight_change" />
		<div style="padding-top: 20px;"><input type="submit" value="Сохранить веса" /></div>
	</form>
</div>
<div class="clear_both"></div>
<div class="v_space"></div>
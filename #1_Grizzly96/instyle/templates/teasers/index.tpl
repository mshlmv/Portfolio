<div class="v_space"></div>

<div class="left">
	<a href="add" class="add_new">Добавить тизер</a>

	<form action="/instyle/teasers/" method="POST">

	<div class="newsblock">
		{if $teasers != 0}
		<table class="projects_table">
		{section name=q start=0 loop=$teasers}
			{math assign="step_1" equation="floor(step/2)" step=$smarty.section.q.index}
			{math assign="step_2" equation="step/2" step=$smarty.section.q.index}
			<tr>
				<td class="theme_td{if $step_1 == $step_2} second_line{/if}" style="width: 300px;">
					<a href="/instyle/teasers/{$teasers[q].id}">{$teasers[q].name}</a>
				</td>
				<td class="weight_td{if $step_1 == $step_2} second_line{/if}">
					<input type="text" size="3" name="weight[]" value="{$teasers[q].weight}" />
					<input type="hidden" name="id[]" value="{$teasers[q].id}" />
				</td>
			</tr>
			{if $smarty.section.q.last}</table>{/if}
		{/section}
		{/if}
	</div>

	<input type="hidden" name="action" value="weight_change" />

	<div style="padding-top: 20px;">
		<input type="submit" value="Сохранить веса" />
	</div>

	</form>
</div>

<div class="clear_both"></div>

<div class="v_space"></div>
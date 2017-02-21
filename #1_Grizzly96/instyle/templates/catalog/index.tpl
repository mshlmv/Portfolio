<div class="v_space"></div>
<div class="left">
	<a href="/instyle/catalog/add/" class="add_new">Добавить товар</a>

	<div class="newsblock">
		{if $catalog != ""}
		<table class="projects_table">
		{counter name=count assign=count start=0 print=false}
		{section name=q loop=$catalog}
			{math assign="step_1" equation="floor(step/2)" step=$smarty.section.q.index}
			{math assign="step_2" equation="step/2" step=$smarty.section.q.index}
			<tr>
				<td class="theme_td{if $step_1 == $step_2} second_line{/if}" style="width: 300px;">
					<a href="/instyle/catalog/{$catalog[q].id}">{$catalog[q].name}</a>
				</td>
				<td class="theme_td{if $step_1 == $step_2} second_line{/if}" style="width: 100px;">
					{$catalog[q].size}
				</td>
				<td class="theme_td{if $step_1 == $step_2} second_line{/if}" style="width: 200px;">
					{if $catalog[q].sale == "yes"}<span class="line-through">{$catalog[q].price}</span> {$catalog[q].sale_price} руб.{else}{$catalog[q].price} руб.{/if}
				</td>
			</tr>
			{counter name=count}
		{/section}
		{/if}
		</table>
	</div>
</div>
<div class="clear_both"></div>
<div class="v_space"></div>
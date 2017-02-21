<div class="menu">
	<ul>
		{section name=i loop=$general_menu_count}
      		{if $smarty.section.i.index == 2}<li class="menu_space"><div>&nbsp;</div></li>{/if}
      		{if $url[2] != $general_menu[$smarty.section.i.index].link}
         		<li><a href="/instyle/{$general_menu[$smarty.section.i.index].link}/">{$general_menu[$smarty.section.i.index].name}</a></li>
      		{else}
      			<li class="current"><span>{$general_menu[$smarty.section.i.index].name}</span></li>
      		{/if}
		{/section}
  	</ul>
</div>
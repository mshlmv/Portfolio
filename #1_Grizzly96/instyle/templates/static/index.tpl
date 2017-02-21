<div class="v_space"></div>
<div class="pages">
    {section name=u start=0 loop=$static step=1}
	<div class="general_page{if $static[$smarty.section.u.index_next].type != $static[u].type} padding-bottom-30{/if}"><a href="/instyle/static/{$static[u].id}">{$static[u].name}</a></div>
    {/section}
</div>

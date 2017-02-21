<html>

<head>
	<title>Интернет-магазин &laquo;Grizzly96.ru&raquo;</title>
	<link rel="stylesheet" type="text/css" href="/instyle/style.css" />
	<script src="/instyle/javascript/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="/instyle/javascript/scripts.js" type="text/javascript"></script>
	<script type="text/javascript" src="/instyle/tiny_mce/tiny_mce.js"></script>
	
	<script type="text/javascript">
	{literal}
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_buttons1 : ",bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,|,image,code,",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		editor_deselector : "mceNoEditor",
		convert_urls: false,
		relative_urls: false,
		cleanup : false,
		cleanup_on_startup : false,
		verify_html : false
	});
	{/literal}
	</script>

    <script language="javascript">
  	{literal}
	var display_switch = false;

	function switching() {
		var switch_div = document.getElementById('switch_div');
		var switch_text = document.getElementById('switch_text');

		if(display_switch == true) {
    		switch_div.style.display = "none";
    		display_switch = false;
		}
		else {
			switch_div.style.display = "block";
    		display_switch = true;
		}
	}
	{/literal}
	</script>

	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
</head>

<body>
	<div class="top_margin">
		<div class="top_links">
			{if $url[2] != ""}
				<a href="/instyle/">Стартовая страница</a>
			{else}
			    <span>Стартовая страница</span>
			{/if}
			<a href="/instyle/logout/">Выход &rarr;</a>
		</div>

		<div class="clear_both">
		</div>
	</div>

	{include file="menu.tpl"}

	<div class="main">
		{include file="$module.tpl"}
	</div>

	<div class="footer">
		<hr width="100%" size="1" />
		<div>
			Консультации по телефону (343) 268-47-97
		</div>
	</div>

	</body>
</html>
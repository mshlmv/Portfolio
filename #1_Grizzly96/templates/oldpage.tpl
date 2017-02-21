<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta name="format-detection" content="telephone=no" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/css/reset.css" />
<link rel="stylesheet" type="text/css" href="/magnific-popup/magnific-popup.css" />
<link rel="stylesheet" type="text/css" href="/css/fonts.css" />
<link rel="stylesheet" type="text/css" href="/css/footer.css" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<title>{$meta.title}</title>
<meta name="description" content="{$meta.meta_description}" />
<meta name="keywords" content="{$meta.meta_keywords}" />
<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/magnific-popup/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="/js/jquery-arbitrary-anchor.js"></script>
<script type="text/javascript" src="/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="/js/jquery.inputmask.js"></script>
<script type="text/javascript" src="/js/common.js"></script>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
{literal}
<script type="text/javascript">
VK.init({apiId: 4989374, onlyWidgets: true});
</script>
<!-- JS -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
    window.AA_CONFIG = {
	animationLength:  1500,
	easingFunction:   'easeOutCirc',
	readyEvent:       'aa-ready',
	scrollOffset:     30
    };
</script>
{/literal}
</head>

<body>
    
<div class="hidden">
    <img src="/images/button-1-hover.png" />
    <img src="/images/button-1-click.png" />
    <img src="/images/cross-hover.png" />
    <img src="/images/cross-active.png" />
</div>
	
<div id="wrap">
    <div id="main">
	<div class="header">
	    <div class="header-background">
		<div class="container">
		    <div class="logo"><h2>Grizzly<span>96</span>.ru</h2></div>
		    <h2 class="utp">Доставка больших<br /><span>плюшевых медведей</span><br />в Екатеринбурге</h2>
		    <div class="phone">
			<div class="text">Сделай заказ по телефону</div>
			<a class="number" href="tel:+73433289698"><span>(343)</span> 328-96-98</a>
		    </div>
		    <a id="callback-link-top" class="button callback" href="#callback"><span>Позвоните мне сами</span></a>
		    <div class="phrase-1">Надоело<br /><span>дарить цветы?</span></div>
		    <div class="phrase-2">Подари мишку!</div>
		    <a class="button choose" href="#.medvedi"><span>Выбрать<br /><strong>медведя</strong></span></a>
		</div>
	    </div>
	</div>
    
	<div class="teaser">{section name=q loop=$teasers}<a{if $smarty.section.q.first} class="active"{/if} style="background-image: url('{$teasers[q].image}');" href="{$teasers[q].link}"></a>{/section}</div>
	
	<div class="benefits">
	    <div class="container">
		<div class="item item-1">
		    <h3>Изготавливаем<br />медведей сами</h3>
		    <p>И на 100% уверены в их качестве.<br />Если мишка вам не понравится &#151;<br />мы сразу вернем деньги</p>
		</div>
		<div class="item item-2">
		    <h3>Бесплатно доставим<br />по Екатеринбургу</h3>
		    <p>Доставим в любой район города.<br />Вежливые и опрятные курьеры<br />оставят хорошее впечатление</p>
		</div>
		<div class="item item-3">
		    <h3>Привезем 3-х медведей<br />на выбор</h3>
		    <p>Не можете решить,<br />какой из мишек больше нравится?<br />Мы привезем несколько на выбор</p>
		</div>
		<span></span>
	    </div>
	</div>
	
	<div id="medvedi" class="catalog medvedi">
	    <div class="catalog-top"></div>
	    <div class="container">
		<h3><span>Выбери<br />своего<br />медведя!</span></h3>
		<div class="submenu">
		    {section name=q loop=$catalog}
		    {math assign=step equation='x+1' x=$smarty.section.q.index}
		    <!-- --><a class="item item-{$step}{if $smarty.section.q.first} active{/if}{if $smarty.section.q.last} last{/if}" href="javascript:void(0);"><span>{$catalog[q].category_name}</span></a><!-- -->
		    {/section}
		</div>
		<div class="clear"></div>
		{assign var=current_category value=""}
		{section name=q loop=$catalog}
		    {if $catalog[q].category_name != $current_category}
		      <div class="items{if $smarty.section.q.first} active{/if}">
		    {/if}
		    {section name=w loop=$catalog[q].items}
			{math assign="step_1" equation="floor((x+1)/3)" x=$smarty.section.w.index}
			{math assign="step_2" equation="(x+1)/3" x=$smarty.section.w.index}
			{if !$smarty.section.w.first}-->{/if}<div class="item{if $step_1 == $step_2} no-margin{/if}">
			    <div class="description">
				<a title="{$catalog[q].items[w].name}, {$catalog[q].items[w].size}, {if $catalog[q].items[w].sale == "yes"}{$catalog[q].items[w].sale_price} руб.{else}{$catalog[q].items[w].price} руб.{/if}" class="image" href="javascript:void(0);"><span class="zoom"></span><img src="{$catalog[q].items[w].images[0].link_sml}" /><div><div>{$catalog[q].items[w].name}</div><span>{$catalog[q].items[w].size}</span></div></a>
			    </div>
			    <a class="buy" href="javascript:void(0);">
				<span class="f">Купить за</span>
				<span class="s">{if $catalog[q].items[w].sale == "yes"}<span class="old">{$catalog[q].items[w].price}</span> <span class="sale">{$catalog[q].items[w].sale_price} руб.</span>{else}{$catalog[q].items[w].price} руб.{/if}</span>
			    </a>
			    <div class="hidden item-gallery">
			    {section name=e loop=$catalog[q].items[w].images}
				<a title="{$catalog[q].items[w].name}, {$catalog[q].items[w].size}, {if $catalog[q].items[w].sale == "yes"}{$catalog[q].items[w].sale_price} руб.{else}{$catalog[q].items[w].price} руб.{/if}" href="{$catalog[q].items[w].images[e].link_big}"></a>
			    {/section}
			    </div>
			</div>{if !$smarty.section.w.last}<!--{/if}
		    {/section}
		    </div>
		{/section}
	    </div>
	    <div class="catalog-bottom"></div>
	    <div class="phrase-container"><div class="phrase">Еще сомневаешься?</div><div class="arrow"></div></div>
	</div>
	
	<div class="reasons">
	    <div class="container">
		<h2>6 причин<br /><span>подарить мягкого медведя:</span></h2>
		<div class="items">
		    <div class="item item-1">
			<div>1</div>
			<h3>Будь оригинален!</h3>
			<p>
			    Все дарят надоевшие<br />
			    цветы и конфеты.<br />
			    А у тебя — медведь.
			</p>
		    </div>
		    <div class="item item-2">
			<div>2</div>
			<h3>Придумай историю</h3>
			<p>
			    Медведь защитит твою девушку<br />
			    от ночных кошмаров?<br />
			    Будет слушать ее секреты?<br />
			    Отлично!
			</p>
		    </div>
		    <div class="item item-3">
			<div>3</div>
			<h3>Медведь &#151; живой</h3>
			<p>
			    Ему можно дать имя, можно<br />
			    с ним дружить, делать селфи,<br />
			    постить фотки в Instagram<br />
			    и даже возить в машине.
			</p>
		    </div>
		    <div class="item item-4">
			<div>4</div>
			<h3>Медведь — теплый</h3>
			<p>
			    Его можно обнять ночью<br />
			    или в ненастный день.
			</p>
		    </div>
		    <div class="item item-5">
			<div>5</div>
			<h3>На долгую память</h3>
			<p>
			    Цветы завянут через неделю,<br />
			    а медведь будет радовать<br />
			    девушку долгое время
			</p>
		    </div>
		    <div class="item item-6">
			<div>6</div>
			<h3>Медведи бесконечно милые :)</h3>
			<p>
			    Разве это не то,<br />
			    что любят жещины?
			</p>
		    </div>
		    <span></span>
		</div>
	    </div>
	</div>
	
	<div class="responses">
	    <div class="container">
		<h2>100% <br /><span class="f">положительные отзывы</span><br /><span class="s">от реальных покупателей</span></h2>
		<div class="widget">
		{literal}
		<!-- Put this div tag to the place, where the Comments block will be -->
		<div id="vk_comments"></div>
		<script type="text/javascript">
		VK.Widgets.Comments("vk_comments", {limit: 10, width: "980", attach: "*"});
		</script>
		{/literal}
		</div>
	    </div>
	</div>
	
	<div class="social">
	    <div class="container">
		<h2>Следи за новостями и скидками!<br /><span>Иногда мы разыгрываем медведей бесплатно!</span></h2>
		<div class="social-container">
		    <div class="item vk">
		    {literal}
			<!-- VK Widget -->
			<div id="vk_groups"></div>
			<script type="text/javascript">
			VK.Widgets.Group("vk_groups", {mode: 0, width: "336", height: "290", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 57927787);
			</script>
		    {/literal}
		    </div>
		    <div class="item fb">
		      <div class="fb-page" data-href="https://www.facebook.com/grizzly96.ru" data-width="336" data-height="290" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/grizzly96.ru"><a href="https://www.facebook.com/grizzly96.ru">grizzly96.ru</a></blockquote></div></div>
		    </div>
		    <div class="item flamp">
		      {literal}
		      <a class="flamp-widget" href="http://ekaterinburg.flamp.ru/firm/grizzly96_internet_magazin-70000001019267848"  data-flamp-widget-type="big" data-flamp-widget-count="1" data-flamp-widget-orientation="landscape" data-flamp-widget-id="70000001019267848" data-flamp-widget-width="100%">Отзывы о нас на Флампе</a><script>!function(d,s){var js,fjs=d.getElementsByTagName(s)[0];js=d.createElement(s);js.async=1;js.src="//widget.flamp.ru/loader.js";fjs.parentNode.insertBefore(js,fjs);}(document,"script");</script>
		      {/literal}
		    </div>
		    <span></span>
		</div>
	    </div>
	</div>
    
	<div class="text">
	    <div class="container">
		<h1>Доставка мягких медведей<br />в Екатеринбурге</h1>
		<div class="text-container">
		  {$static.body}
		</div>
		<h2>Расскажи о Grizzly<span>96</span>.ru друзьям!</h2>
		{literal}
		<script type="text/javascript">(function() {
		if (window.pluso)if (typeof window.pluso.start == "function") return;
		if (window.ifpluso==undefined) { window.ifpluso = 1;
		  var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
		  s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
		  s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
		  var h=d[g]('body')[0];
		  h.appendChild(s);
		}})();</script>
		<div class="pluso-container">		    
		  <div class="pluso" data-background="#ebebeb" data-options="big,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
		</div>
		{/literal}
	    </div>
	</div>
	
    </div>
</div>

<div id="footer">
    <div class="container">
	<div class="company">Grizzly96.ru<div>&copy; 2015 Доставка мягких медведей в Екатеринбурге</div></div>
	<div class="phone">Звони! Заказывай!<div><span>(343)</span> 328-96-98</div></div>
	<div class="callback">
	    <a id="callback-link-bottom" class="button callback" href="#callback"><span>Позвоните мне сами</span></a>
	</div>
    </div>
</div>

<div class="popups">
    <div id="callback" class="popup-center-align">
	<div class="popup">
	    <a class="close" href="javascript:$.magnificPopup.close();"></a>
	    <div class="popup-container">
		<h3>Заказать звонок</h3>
		<div class="inputs-container">
		    <form action="" method="POST">
		    
		    <input class="necessary" type="text" name="contacts" />
		    <button type="submit" class="button"><span>Перезвоните мне</span></button>
		    
		    <input type="hidden" name="key" value="" />
		    <input type="hidden" name="action" value="call_order" />
		    
		    </form>
		    <div class="clear"></div>
		</div>
	    </div>
	</div>
    </div>
    <div id="callback-thanks" class="popup-center-align">
	<div class="popup popup-text">
	    <a class="close" href="javascript:$.magnificPopup.close();"></a>
	    <div class="popup-container">
		<h3>Большое спасибо!</h3>
		<div class="text-container">
		    Заказ звонка, мы обязательно<br />перезвонить вам!
		</div>
	    </div>
	</div>
    </div>
    <div id="order" class="popup-center-align">
	<div class="popup">
	    <a class="close" href="javascript:$.magnificPopup.close();"></a>
	    <div class="popup-container">
		<h3>Заказать медведя</h3>
		<div class="inputs-container">
		    <form action="" method="POST">
			
		    <div class="field">
			<div class="name">Представьтесь, пожалуйста</div>
			<input type="text" name="name" />
			<div class="clear"></div>
		    </div>
		    <div class="field">
			<div class="name">Ваш номер телефона<span>*</span></div>
			<input class="necessary" type="text" name="contacts" />
			<div class="clear"></div>
		    </div>
		    <div class="field">
			<div class="name">Пожелания к заказу</div>
			<textarea name="comment"></textarea>
			<div class="clear"></div>
		    </div>
		    <div class="submit-field">
			<button type="submit" class="button"><span>Перезвоните мне</span></button>
			<div class="clear"></div>
		    </div>
		    
		    <input type="hidden" name="key" value="" />
		    <input type="hidden" name="action" value="medved_order" />
		    <input type="hidden" name="item" value="" />
		    
		    </form>
		    <div class="clear"></div>
		</div>
	    </div>
	</div>
    </div>
    <div id="order-thanks" class="popup-center-align">
	<div class="popup popup-text">
	    <a class="close" href="javascript:$.magnificPopup.close();"></a>
	    <div class="popup-container">
		<h3>Большое спасибо!</h3>
		<div class="text-container">
		    Ваш заказ принят, мы обязательно<br />свяжемся с вами!
		</div>
	    </div>
	</div>
    </div>
</div>
{literal}
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31342278 = new Ya.Metrika({
                    id:31342278,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31342278" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
{/literal}
</body>
</html>
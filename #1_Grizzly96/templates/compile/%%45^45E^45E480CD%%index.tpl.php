<?php /* Smarty version 2.6.22, created on 2016-01-21 19:18:16
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'index.tpl', 150, false),)), $this); ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $this->_tpl_vars['meta']['title']; ?>
</title>
    <meta name="description" content="<?php echo $this->_tpl_vars['meta']['meta_description']; ?>
">
    <meta name="keywords" content="<?php echo $this->_tpl_vars['meta']['meta_keywords']; ?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="/css/app.css">
    <script src="https://vk.com/js/api/openapi.js?116"></script>
    <?php echo '
    <script type="text/javascript">
      VK.init({apiId: 4989374, onlyWidgets: true});
    </script>
    '; ?>

  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="header__logo col-md-4">
            <a href="/"><h1>Grizzly<span class="logo--special">96</span>.ru</h1></a>
            <h2 class="header__sublogo">Доставка больших <em>плюшевых медведей</em> в Екатеринбурге</h2>
          </div>
          <div class="header__phone col-md-4 col-md-offset-4">
            <p>Сделай заказ по телефону</p>
            <a class="number" href="tel:+73433289698">
              <span>(343)</span> 328-96-98
            </a>
            <a id="callback-link-top" class="callback" href="#callback">Позвоните мне сами</a>
          </div>
        </div>
        <div class="row header__line-two">
          <div class="header__hero hero--one col-md-4">Надоело дарить цветы?</div>
          <div class="header__hero hero--two col-md-4">Подари мишку!</div>
          <div class="header__button col-md-4">
            <a class="button button--yellow button--large" href="#.heading-box">Выбрать медведя</a>
          </div>
        </div>
      </div>
    </header>
    <main id="main">
      <section class="teaser">
        <div class="sticker">
          <div class="sticker__heading">ТЕД <br> 90 см</div>
          <div class="sticker__offer">всего&nbsp;за</span>
          <div class="sticker__price--new">1 990&nbsp;руб.</div>
          <div class="sticker__price--old">2 590&nbsp;руб.</div>
        </div>
      </section>

      <section class="benefits container">
        <div class="row">
          <div class="benefits__item col-md-4">
            <svg xmlns="http://www.w3.org/2000/svg" data-name="Icon 1" viewBox="0 0 214 194">
              <ellipse cx="102.5" cy="97" fill="#fff9c1" rx="101.5" ry="97"/>
              <ellipse cx="110" cy="96.5" fill="#fdd729" rx="90" ry="83.5"/>
              <circle cx="103" cy="97" r="76" fill="#fff9c1"/>
              <path fill="#3a4c7f" d="M103.48 86.88a8.59 8.59 0 0 1 6.25 2.32c4.49 4.49 2.28 14-4.95 21.21-4.69 4.69-10.35 7.27-15 7.27a8.59 8.59 0 0 1-6.25-2.32c-4.49-4.49-2.27-14 4.95-21.21 4.69-4.69 10.35-7.27 15-7.27m0-5c-6.11 0-13 3.27-18.5 8.74-9.32 9.32-11.49 21.74-4.98 28.28a13.48 13.48 0 0 0 9.79 3.79c6.11 0 13-3.27 18.5-8.74a30.12 30.12 0 0 0 8.2-14c1.32-5.67.14-10.86-3.25-14.25a13.47 13.47 0 0 0-9.79-3.79z"/>
              <circle cx="127.05" cy="60.57" r="3.5" fill="#3a4c7f" transform="rotate(-45 127.056 60.562)"/>
              <circle cx="136.95" cy="69.05" r="3.5" fill="#3a4c7f" transform="rotate(-45 136.95 69.044)"/>
              <circle cx="126.35" cy="71.17" r="3.5" fill="#3a4c7f" transform="rotate(-45 126.35 71.174)"/>
              <path fill="none" stroke="#3a4c7f" stroke-width="5" stroke-miterlimit="10" d="M140.41 114.62c0-8.17-2.83-19-3.34-20.84a1.07 1.07 0 0 0-.29-.49L133 89.63a1.08 1.08 0 0 1 .81-1.85c5.92.34 13.71-.35 17.24-3.88 2.11-2.11 4.38-7.41 4.38-7.41a1.08 1.08 0 0 1 1.16-.79s6.66-1.18 9-3.47c3.71-3.71 3.16-13.1-.35-16.62-2.93-2.93-8.69-3.3-12.47-1.19a1.07 1.07 0 0 1-1.5-.47c-.94-2-1.78-4.18-3.36-5.76s-3.8-2.42-5.76-3.36a1.07 1.07 0 0 1-.47-1.5c2.11-3.78 1.75-9.53-1.19-12.47-3.51-3.51-12.2-3.36-15.91.35-2.3 2.3-4.41 5.44-4.15 8.32a1.05 1.05 0 0 1-.67 1.08 98.41 98.41 0 0 0-8.26 6.5 18.43 18.43 0 0 0-5.8 14.15 1.08 1.08 0 0 1-1.82.86 1 1 0 0 0-.37-.23c-1.41-.51-9.78-3.46-17.47-3.46-12.7 0-23 4.22-23 9.19 0 4.44 5.15 10.18 15.49 11.16a1.08 1.08 0 0 1 .58 1.9c-2.11 1.78-2 2.17-5.85 6-17.57 17.57-27.86 40-23 44.9 3.33 3.33 8.5 4 18.29-2.82a1.08 1.08 0 0 1 1.5 1.5c-6.78 9.79-6.15 15-2.82 18.29 4.88 4.88 25.91-4 43.49-21.57 4.15-4.15 4.67-4.2 6.66-6.63a1.08 1.08 0 0 1 1.91.57c1.14 10.33 8.07 14.48 12.56 14.48 5.05.05 8.56-8.08 8.56-20.78z"/>
              <path fill="#3a4c7f" d="M35.54 100L54 76c-12.27 2.29-21.65 12-27.76 20.62l-5.71-5.14a11 11 0 1 0-4.72 4.4l6.42 7a82.64 82.64 0 0 0-3.9 7.42 11 11 0 1 0 6.29 3.93l4.76-6.23H53l6-8H35.54zm-25-7A6.5 6.5 0 1 1 17 86.5a6.5 6.5 0 0 1-6.5 6.5zm5 35a6.5 6.5 0 1 1 6.5-6.5 6.5 6.5 0 0 1-6.54 6.5zM28 106a3 3 0 1 1 3-3 3 3 0 0 1-3 3zM196.5 61.25C192.13 56.88 156 118 156 118s45.79-51.46 40.5-56.75zM188 73s3.88-9.5 6-8c2.95 2.08-6 8-6 8z"/>
              <path fill="none" stroke="#3a4c7f" stroke-width="2" stroke-miterlimit="10" d="M198 111s-3.25 1.5-3.5-10 7.5-24 7.5-24 1.25-2.87 1.13-10.5S200.25 55 195 55s-6 6.5-6 10a13.37 13.37 0 0 0 14 13s10 9.25 10 16"/>
            </svg>
            <h3 class="benefits__heading">Изготавливаем медведей сами</h3>
            <p>И на 100% уверены в их качестве. Если мишка вам не понравится &#151; мы сразу вернем деньги</p>
          </div>
          <div class="benefits__item col-md-4">
            <svg xmlns="http://www.w3.org/2000/svg" data-name="Icon 2" viewBox="0 0 202 196">
              <ellipse cx="101" cy="98" fill="#fff9c1" rx="101" ry="98"/>
              <ellipse cx="101" cy="104" fill="#fdd729" rx="90" ry="84"/>
              <circle cx="112" cy="97" r="77" fill="#ffed92"/>
              <g>
                <path fill="#3a4c7f" d="M102.12 69.07c4.62 0 10.27 2.58 15 7.27 7.22 7.22 9.44 16.72 4.95 21.21a8.59 8.59 0 0 1-6.25 2.32c-4.62 0-10.27-2.58-15-7.27-7.22-7.22-9.44-16.72-4.95-21.21a8.59 8.59 0 0 1 6.25-2.32m0-5a13.48 13.48 0 0 0-9.79 3.79c-6.54 6.54-4.37 19 4.95 28.28 5.47 5.47 12.39 8.74 18.5 8.74a13.48 13.48 0 0 0 9.79-3.79c6.54-6.54 4.37-19-4.95-28.28-5.47-5.47-12.39-8.74-18.5-8.74z"/>
                <circle cx="67.23" cy="54.07" r="3.5" fill="#3a4c7f" transform="rotate(-45 67.236 54.07)"/>
                <circle cx="75.72" cy="44.17" r="3.5" fill="#3a4c7f" transform="rotate(-45 75.723 44.164)"/>
                <circle cx="77.84" cy="54.77" r="3.5" fill="#3a4c7f" transform="rotate(-45 77.836 54.77)"/>
                <path fill="none" stroke="#3a4c7f" stroke-width="5" stroke-miterlimit="10" d="M138.3 130.79c3.33-3.33 4-8.5-2.82-18.29A1.08 1.08 0 0 1 137 111c9.79 6.78 15 6.15 18.29 2.82 4.88-4.88-4-25.91-21.57-43.49-4.15-4.15-4.2-4.67-6.63-6.66a1.08 1.08 0 0 1 .57-1.91c10.33-1.14 14.48-8.07 14.48-12.56 0-5-8.13-8.49-20.83-8.49-8.17 0-19 2.83-20.84 3.34a1.07 1.07 0 0 0-.49.29l-3.68 3.73a1.08 1.08 0 0 1-1.85-.81c.34-5.92-.35-13.71-3.88-17.24-2.11-2.11-7.41-4.38-7.41-4.38a1.08 1.08 0 0 1-.79-1.16s-1.18-6.66-3.47-9c-3.71-3.71-13.1-3.16-16.62.35-2.93 2.93-3.3 8.69-1.19 12.47a1.07 1.07 0 0 1-.47 1.5c-2 .94-4.18 1.78-5.76 3.36S52.44 37 51.5 39a1.07 1.07 0 0 1-1.5.47c-3.78-2.11-9.53-1.75-12.47 1.19-3.51 3.51-3.36 12.2.35 15.91 2.3 2.3 5.44 4.41 8.32 4.15a1.05 1.05 0 0 1 1.08.67 98.41 98.41 0 0 0 6.5 8.26 18.43 18.43 0 0 0 14.15 5.8 1.08 1.08 0 0 1 .86 1.82 1 1 0 0 0-.23.37c-.51 1.41-3.46 9.78-3.46 17.47"/>
              </g>
              <g>
                <path fill="#3a4c7f" d="M142 76.48a3.46 3.46 0 0 1 2.72 1.31l3.41 4.28 4.08 5.12 4.63 5.8H55l4.63-5.8 4.08-5.12 3.41-4.28-2.72-2.17-14 17.52a14.32 14.32 0 0 0-2.63 7.86v12.8a9 9 0 0 1 4.68-3.73 9.75 9.75 0 0 1 7.26-8.68 10 10 0 0 1 2.56-.34 9.75 9.75 0 0 1 8.12 4.36 9.26 9.26 0 0 1 1.59-.14 9.06 9.06 0 0 1 4.53 1.22l7.74-2a11.75 11.75 0 0 1 14.34 8.42l15.16 58.27a11.76 11.76 0 0 1-8.42 14.34l-6.77 1.76h56.83a8.69 8.69 0 0 0 8.69-8.69v-77.86a14.21 14.21 0 0 0-2.65-7.58l-14-17.52C146.13 74 141.12 73 139 73zM56.4 114.4l-2 .51a3.89 3.89 0 0 0-2.78 4.74v.08a3.89 3.89 0 0 0 4.74 2.78l16.64-4.3a3.89 3.89 0 0 0 2.78-4.74v-.08a3.89 3.89 0 0 0-4.78-2.78l-2 .51a2 2 0 0 1-2.38-1.4v-.06a4.53 4.53 0 0 0-5.52-3.24H61a4.53 4.53 0 0 0-3.22 5.58v.06a2 2 0 0 1-1.38 2.34zm5.33-5.4a2 2 0 1 1-1.41 2.39 2 2 0 0 1 1.41-2.39zm24.38 59.93a1.31 1.31 0 0 1-.94 1.6l-24.07 6.22a1.31 1.31 0 0 1-1.6-.94l-.33-1.27a1.31 1.31 0 0 1 .94-1.6l24.07-6.26a1.31 1.31 0 0 1 1.6.94zM89 143.78l.38 1.22a1.31 1.31 0 0 1-.94 1.6l-32.94 8.61a1.31 1.31 0 0 1-1.6-.94l-.32-1.27a1.31 1.31 0 0 1 .94-1.6l32.94-8.57a1.31 1.31 0 0 1 1.54.95zm-3.57-8.54l-32.94 8.57a1.31 1.31 0 0 1-1.6-.94l-.33-1.27a1.31 1.31 0 0 1 .94-1.6l32.94-8.57a1.31 1.31 0 0 1 1.6.94l.33 1.27a1.31 1.31 0 0 1-.9 1.6zm-.73 23.18l-26.6 6.92a1.31 1.31 0 0 1-1.6-.94l-.33-1.27a1.31 1.31 0 0 1 .94-1.6l26.6-6.92a1.31 1.31 0 0 1 1.6.94l.33 1.27a1.31 1.31 0 0 1-.9 1.61zm23.95 14.06l-15.12-58.27a6.55 6.55 0 0 0-8-4.69l-7.73 2a6.56 6.56 0 0 1-4.19 9.21L57.32 125a6.67 6.67 0 0 1-8-4.1 6.74 6.74 0 0 1-.36-1.83l-7.73 2a6.54 6.54 0 0 0-4.69 8l15.16 58.27a6.54 6.54 0 0 0 8 4.69l44.3-11.56a6.54 6.54 0 0 0 4.69-7.98zM58 185.67L44.83 135l44.34-11.53 13.18 50.67z"/>
              </g>
            </svg>
            <h3 class="benefits__heading">Бесплатно доставим по Екатеринбургу</h3>
            <p>Доставим в любой район города. Вежливые и опрятные курьеры оставят хорошее впечатление</p>
          </div>
          <div class="benefits__item col-md-4">
            <svg xmlns="http://www.w3.org/2000/svg" data-name="Icon 3" viewBox="0 0 200 195">
              <ellipse cx="100" cy="97.5" fill="#fff9c1" rx="100" ry="97.5"/>
              <ellipse cx="98.84" cy="88.83" fill="#fdd729" rx="90.5" ry="83.5"/>
              <ellipse cx="102.34" cy="91.83" fill="#ffed92" rx="77" ry="76.5"/>
              <g data-name="Bear 1">
                <path fill="#3a4c7f" d="M49.34 54.33c12.15 0 22 6 22 13.5s-9.85 13.5-22 13.5-22-6-22-13.5 9.85-13.5 22-13.5m0-4c-14.58 0-26 7.69-26 17.5s11.42 17.5 26 17.5 26-7.69 26-17.5-11.42-17.5-26-17.5z"/>
                <path fill="#3a4c7f" d="M49.34 60.33c2.76 0 5 1.12 5 2.5s-2.24 2.5-5 2.5-5-1.12-5-2.5 2.24-2.5 5-2.5m0-4c-5.21 0-9 2.73-9 6.5s3.79 6.5 9 6.5 9-2.73 9-6.5-3.79-6.5-9-6.5z"/>
                <path fill="none" stroke="#3a4c7f" stroke-width="4" stroke-miterlimit="10" d="M49 68v14"/>
                <circle cx="34.34" cy="48.33" r="3" fill="#3a4c7f"/>
                <circle cx="64.34" cy="48.33" r="3" fill="#3a4c7f"/>
                <path fill="none" stroke="#3a4c7f" stroke-width="3" stroke-miterlimit="10" d="M20.34 39.33a9.82 9.82 0 0 1-4-8c0-7.08 3.33-9 9-9 6.67 0 10 7 10 7M78.34 40.33a9.82 9.82 0 0 0 4-8c0-7.08-3.33-9-9-9-6.67 0-10 7-10 7"/>
                <path fill="#3a4c7f" d="M72.84 17.33A14.49 14.49 0 0 1 80.7 44a26.44 26.44 0 0 1 3.64 13.33c0 16.57-15.67 30-35 30s-35-13.43-35-30A26.44 26.44 0 0 1 18 44a14.49 14.49 0 1 1 21.93-15.56 40.59 40.59 0 0 1 18.83 0 14.49 14.49 0 0 1 14.08-11.11m0-4a18.42 18.42 0 0 0-16.68 10.53 44.62 44.62 0 0 0-13.63 0 18.5 18.5 0 1 0-29.58 21.23 29.92 29.92 0 0 0-2.6 12.24c0 18.75 17.5 34 39 34s39-15.25 39-34a29.92 29.92 0 0 0-2.6-12.24 18.49 18.49 0 0 0-12.9-31.76z"/>
              </g>
              <g data-name="Bear 2">
                <path fill="#3a4c7f" d="M146.34 69.33c4.42 0 8 2 8 4.5s-3.58 4.5-8 4.5-8-2-8-4.5 3.58-4.5 8-4.5m0-3c-6.27 0-11 3.22-11 7.5s4.73 7.5 11 7.5 11-3.22 11-7.5-4.73-7.5-11-7.5z"/>
                <circle cx="138.84" cy="52.83" r="4.5" fill="#3a4c7f"/>
                <circle cx="153.84" cy="52.83" r="4.5" fill="#3a4c7f"/>
                <path fill="none" stroke="#3a4c7f" stroke-width="4" stroke-miterlimit="10" d="M146 79v10"/>
                <path fill="#3a4c7f" d="M172.84 18.33a14.76 14.76 0 0 1 14.5 15 15 15 0 0 1-10.12 14.3 36.27 36.27 0 0 1 3.12 13.7c0 9.46-5.15 15.23-15 18-1.45 5.72-9.54 10-19 10-9.31 0-17.37-4.42-19-10-9.89-2.47-15-7.52-15-17a42.24 42.24 0 0 1 3.05-14.73 15 15 0 0 1-10.05-14.27 14.76 14.76 0 0 1 14.5-15 14.44 14.44 0 0 1 12.89 8.14 26.59 26.59 0 0 1 12.61-3.14 29.11 29.11 0 0 1 14.31 3.79 14.48 14.48 0 0 1 13.19-8.79m0-4a18.37 18.37 0 0 0-14.77 7.58 32.66 32.66 0 0 0-12.73-2.58 30.56 30.56 0 0 0-11.11 2.06 18.23 18.23 0 0 0-14.39-7.06 18.78 18.78 0 0 0-18.5 19 19 19 0 0 0 9.09 16.36 43.74 43.74 0 0 0-2.09 12.64c0 10.41 5.26 17.08 16.05 20.34 3.26 6.3 12 10.66 21.95 10.66 10.18 0 19-4.41 22.05-10.76 7.69-2.64 15.95-8.45 15.95-21.24a37.19 37.19 0 0 0-2.07-11.64 19 19 0 0 0 9.07-16.36 18.78 18.78 0 0 0-18.5-19z"/>
                <path fill="#3a4c7f" d="M127.34 29.33l-10 10s-5-2.58-5-7a8 8 0 0 1 8-8c4.42 0 7 5 7 5zM182.34 32.33c0 4.42-5 7-5 7l-10-10s2.58-5 7-5a8 8 0 0 1 8 8zM146.34 65.33c10.49 0 19 5.37 19 12s-8.51 12-19 12-19-5.37-19-12 8.51-12 19-12m0-4c-12.9 0-23 7-23 16s10.1 16 23 16 23-7 23-16-10.1-16-23-16z"/>
              </g>
              <g data-name="Bear 3">
                <path fill="#3a4c7f" d="M71.84 109.33a16.49 16.49 0 0 1 15.38 10.55 35 35 0 0 1 27.43.51A16.5 16.5 0 1 1 134 142.78a35 35 0 1 1-67-1.17 16.5 16.5 0 0 1 4.82-32.28m0-5a21.51 21.51 0 0 0-10.72 40.15 40 40 0 1 0 78.7 1.39 21.5 21.5 0 1 0-27.38-31.67 40.08 40.08 0 0 0-22.79-.42 21.33 21.33 0 0 0-17.81-9.45z"/>
                <circle cx="85.84" cy="138.83" r="6.5" fill="#3a4c7f"/>
                <circle cx="116.84" cy="138.83" r="6.5" fill="#3a4c7f"/>
                <path fill="#3a4c7f" d="M100.84 147.33a16.5 16.5 0 1 1-16.5 16.5 16.5 16.5 0 0 1 16.5-16.5m0-4a20.5 20.5 0 1 0 20.5 20.5 20.52 20.52 0 0 0-20.5-20.5z"/>
                <circle cx="100.34" cy="155.33" r="6" fill="#3a4c7f"/>
                <path fill="none" stroke="#3a4c7f" stroke-width="3" stroke-miterlimit="10" d="M112.34 167.33a6.89 6.89 0 0 1-6 4c-2.76 0-2.75-4-6-4-2.76 0-3.24 4-6 4a5 5 0 0 1-4.9-4"/>
              </g>
            </svg>
            <h3 class="benefits__heading">Привезем 3-х медведей на выбор</h3>
            <p>Не можете решить, какой из мишек больше нравится? Мы привезем несколько на выбор</p>
          </div>
        </div>
      </section>

      <section class="catalog">
        <div class="container">
          <div class="catalog__header row">
            <div class="heading-box col-xs-4">
              <h1 class="section-heading">Выбери своего медведя!</h1>
            </div>
            <div class="catalog-filter col-md-8 js-catalog-filter">
              <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                <symbol id="grizzly" viewBox="0 0 115 130">
                  <path fill="inherit" d="M56.3 24.89c7.42 0 16.25 3.28 16.25 11.22 0 8.56-3.37 11.31-16.43 11.31-8.94 0-13.69-5.64-13.69-12s5.42-10.53 13.87-10.53m0-1c-9 0-14.87 4.52-14.87 11.52a12.49 12.49 0 0 0 3.8 9.13c2.66 2.55 6.42 3.89 10.89 3.89 13.36 0 17.43-2.88 17.43-12.31-.01-8.38-8.95-12.23-17.25-12.23z"/>
                  <circle fill="inherit" cx="50.09" cy="23.27" r="1.7"/>
                  <circle fill="inherit" cx="63.34" cy="23.27" r="1.7"/>
                  <path fill="inherit" d="M62.17 29.52c.24 1.73-1.88 3.64-4.68 4s-5.44-.83-5.68-2.56 1.76-3.89 4.56-4.28 5.56 1.1 5.8 2.84zM69.58 35.89c.6 0-.79 3.79-1 4.23l-1.78-3-1.66 2.5-1.84-2.09-2.19 2.23-1.91-2.27-2.23 2.47-2-2.38-2.51 2.22-1.68-2.19-2.18 2.82c-.49-.7-2.74-3.91-1.69-4.54a4 4 0 0 1 1.35 0H69.8m.26-1c-7.71 0-15.49-.33-23.19 0-3.2.14.77 5.81 1.65 7q1.09-1.34 2.19-2.66l1.58 2L54.8 39l2.11 2.47L59.14 39l1.91 2.22 2.2-2.26 2 2.24 1.55-2.31 1.92 3.12c.6-1.29 3.51-6.49 1.34-7.12z"/>
                  <path fill="inherit" d="M57.54 45.79a41 41 0 0 1-8.58-.73 1.91 1.91 0 0 1-1.49-1.17c-.44-1.19.57-2.64.69-2.8l.3-.42.41.32c3.68 2.86 14.88 2.41 19.13 0l.37-.21.27.33a2.74 2.74 0 0 1 .53 2.45c-.35.9-1.39 1.48-3.08 1.73a65.48 65.48 0 0 1-8.55.5zm-8.82-3.67a2 2 0 0 0-.31 1.44.91.91 0 0 0 .78.53c4.44 1 12.73.77 16.76.19 1.29-.19 2.08-.57 2.29-1.1a1.42 1.42 0 0 0-.16-1.11c-4.28 2.14-14.9 2.9-19.36.05z"/>
                  <path fill="inherit" d="M115.3 107.22c0-4.79-1.58-8.66-4.35-11.27-3.35-4.3-8.26-6.59-12.15-6.59a15.64 15.64 0 0 0-6.1 1.28 38.22 38.22 0 0 0-7.27-6c.48-1.61 1.84-8.08-2.47-19.7a18.32 18.32 0 0 0 12.07-7.56c4.07-6.14 10-16.66 10.86-18.29 6-1.1 6.3-7.67 6.22-9.76-.1-2.68-1.16-8.91-8.93-9-6.94-.06-12.5 8.31-12.72 8.64a78.6 78.6 0 0 1-5.56 6.47 16.78 16.78 0 0 0 1.83-7.82 17.88 17.88 0 0 0-.32-3.17c5.52-1.64 8.51-7.55 8.51-12.43 0-6.32-4.3-9.94-11.8-9.94a21.51 21.51 0 0 0-10.85 2.81A29.47 29.47 0 0 0 56.39 0a22.34 22.34 0 0 0-12.31 3.89C41.49 1.03 36.36 0 32.3 0c-7.4 0-11.81 2.95-11.81 7.89 0 7.3 5.72 13.83 10.71 14.78a29.73 29.73 0 0 0-.93 7.22 26.41 26.41 0 0 0 .66 6.12c-3.79-5.52-8.35-12.13-8.4-12.2-.24-.39-5.73-8.92-12.66-8.92H9.8a9.49 9.49 0 0 0-9.78 9.39c-.09 2.51.67 5.67 4.22 7.05.75 1.35 7.09 12.66 11.24 18.92S29.8 63.67 31.87 65.07c-3.83 9.82-4.85 20.82-5.07 23.45a13.88 13.88 0 0 0-2.72-.28C13.73 88.24 7 94.89 6.89 105.1v1.63s0 .52.06.78c.7 6.81 4.19 13.89 9.45 17.78 3.31 2.87 7.4 4.6 10.4 4.6h1.23c12.27 0 21.64-14.2 27.43-24.24a7.39 7.39 0 0 1 5.31-.75c11.52 16.78 22.23 24.99 32.49 24.99h.54a19.69 19.69 0 0 0 15.54-7.07 21.25 21.25 0 0 0 1.55-2.15 22.24 22.24 0 0 0 4.41-13.45zm-18 19.17h-.5c-7.64-.22-10.67-5.89-10.67-15s3.33-18.08 14.83-18.08a13.57 13.57 0 0 1 8.81 2.9 19.35 19.35 0 0 1 4 11.23 22.58 22.58 0 0 1-2.84 11.33 15.78 15.78 0 0 1-13.6 7.63zm-6.02-97.07c.06-.08 5.45-8.43 11.82-8.43h.07c6.66 1 7.84 5.27 7.94 8.24.08 2.25-.26 7.4-4.56 8.75v-.07l-1.12.32c-.24 0-.5.06-.76.08a4.93 4.93 0 0 1-1.64-.17 5.85 5.85 0 0 1-1-.39c-2.79-1.43-4.47-5.17-5.14-7-.12-.32-.23-.67-.34-1l-1 .27a20.48 20.48 0 0 0 .8 2.13 15.06 15.06 0 0 0 2.47 4.07 7.12 7.12 0 0 0 5.65 2.77h.19c-1.58 3-6.78 12.19-10.47 17.75s-10.16 7.1-11.68 7.33c-.57-1.08-1.47-2.48-2.5-4.08-3.1-4.8-7.32-11.35-6.21-15l.55-.27a25.11 25.11 0 0 0 7.2-4.73 73 73 0 0 0 9.73-10.57zM83.12 3.07c6.87 0 10.8 3.26 10.8 8.94 0 4.54-2.87 10-7.69 11.45-1.56-6.7-6.48-13.51-13-18a20.89 20.89 0 0 1 9.89-2.39zM21.49 7.89C21.49 1.67 29.05 1 32.3 1c3.62 0 8.53.91 11 3.43a32.12 32.12 0 0 0-11.87 17.29c-4.58-.83-9.94-7.16-9.94-13.83zm9.78 22a28.93 28.93 0 0 1 1-7.45A31 31 0 0 1 44.28 4.89 21.45 21.45 0 0 1 56.39 1a28.54 28.54 0 0 1 15.6 4.84c6.84 4.48 12 11.51 13.38 18.35a17 17 0 0 1 .37 3.42 15.8 15.8 0 0 1-6.33 12.83 38.4 38.4 0 0 1-5.54 3.3c-5.94 2.66-13.31 3.78-20.14 3.78-5.38 0-9.66-.6-13-1.85v-.08l-.25-.06-.25-.06a16.69 16.69 0 0 1-2.08-1 16.42 16.42 0 0 1-4.56-4.66l-.45-.65a20.68 20.68 0 0 1-1.87-9.27zm-15 19.84C12.69 44.25 7.4 34.89 5.63 31.79a11.73 11.73 0 0 0 4.4.23 8.1 8.1 0 0 0 1.57-.4 7.6 7.6 0 0 0 3.2-2.16 8.22 8.22 0 0 0 1.54-2.44l-.93-.39a7.5 7.5 0 0 1-3.1 3.54 7.5 7.5 0 0 1-4.21.82c-4.84-.3-7.22-2.62-7.07-6.68.09-3.01 2.06-7.42 8.77-8.42h.07c6.36 0 11.77 8.35 11.83 8.44l10.84 15.88a13.15 13.15 0 0 0 3.39 3.95 10.15 10.15 0 0 0 4.09 2.35c1.16 2.66-2 7.66-4.52 11.7a36.29 36.29 0 0 0-3.28 5.88c-2.42-1.7-12.13-8.67-15.92-14.39zm-8.26 57.83v-.17c0-.21 0-.42-.05-.64s0-.32 0-.47v-.58-.39-.21c.11-5.85 6.38-13.06 13.44-13.06 7.93 0 13.68 10.48 13.68 20.62s-4.71 14.67-9.83 14.67a13.46 13.46 0 0 1-8.2-3 27.78 27.78 0 0 1-9.04-16.77zm51.71-5.95l-.84.55c.42.64.84 1.24 1.26 1.86a4.36 4.36 0 0 0-4 .53l1.38-2.44a.5.5 0 0 0-.87-.49c-5.5 9.79-15.72 28-29.38 27.31a12 12 0 0 1-4-.74 12.84 12.84 0 0 0 2 .16c5 0 10.83-4.1 10.83-15.67a28.35 28.35 0 0 0-4-14.64c-2.81-4.5-6.6-7-10.66-7-5 0-9.45 3.17-12.07 7.13 2.37-5.59 7.68-8.94 14.84-8.94 6.33 0 11.8 4.59 14.28 12a.5.5 0 1 0 .95-.32c-2.23-6.34-6.47-10.73-11.64-12.16.16-2.21 1.1-13.24 4.9-23.1l.1.06.17-.7c.37-1.5 1.82-3.82 3.36-6.27 2.59-4.12 5.47-8.72 4.83-11.85a40.26 40.26 0 0 0 12.56 1.65 53.78 53.78 0 0 0 18.94-3.2c-.57 4.13 3.49 10.43 6.51 15.12 1.11 1.73 2.08 3.22 2.62 4.3l.14.29c4.89 13 2.46 19.55 2.43 19.62l-.15.39.35.22a40.59 40.59 0 0 1 7.24 5.81 21.19 21.19 0 0 0-11 14.52.51.51 0 1 0 1 .2c1.79-8.66 9.3-15.45 17.1-15.45a12.94 12.94 0 0 1 8.39 3.14 15.86 15.86 0 0 0-6.22-1.2c-10.21 0-15.83 6.78-15.83 19.08 0 10.39 3.92 15.77 11.64 16h.56a16.85 16.85 0 0 0 5.82-1 20.29 20.29 0 0 1-9.6 2.48h-.46c-10.33.03-21.59-9.17-33.48-27.24z"/>
                  <path fill="inherit" d="M59.27 65.89c-.45 10.34-1 21.66.28 32 .84-10.64.1-21.35-.28-32zM32.38 86.02c10-4.35 19.34 5.57 25.09 12.71-4.79-7.95-15.17-18.74-25.09-12.71zM59.8 100.27c5.49-6.87 13-12.48 21.91-13.38-9.31-.53-17.32 5.61-21.91 13.38z"/>
                  <path fill="inherit" d="M71.8 45.03l-.85.52c2.7 4.4-.68 8.42-3.11 10.09a9.58 9.58 0 0 1-1.32.76c-.43-3.1-4.58-5.5-6.42-6.42a1.47 1.47 0 0 0 .12-.55c0-1.08-1.17-1.93-2.66-1.93s-2.66.85-2.66 1.93a1.47 1.47 0 0 0 .08.46c-1.57.75-5.06 2.78-5.26 6.1-3.36-.85-5.46-2.21-6.22-4a5.51 5.51 0 0 1 .56-4.62l-.84-.55a6.43 6.43 0 0 0-.65 5.54c1 2.33 3.58 4 7.81 4.87a6.11 6.11 0 0 0 1.28.15 3.56 3.56 0 0 0 2.14-.69c-1 6.69-3.24 23.22-1.5 26.34l4.63 5.67.72-32.41 5.85 35.34.67-1.57c.15-.35 3.71-8.74 3-14a125.73 125.73 0 0 0-3.92-18.17 3.38 3.38 0 0 0 .92.13 7.82 7.82 0 0 0 4.23-1.58c3.52-2.4 6.08-7.02 3.4-11.41zm-14.25 3.49c1 0 1.66.49 1.66.93s-.68.93-1.66.93-1.66-.49-1.66-.93.68-.93 1.66-.93zm-4.33 7.37a3.16 3.16 0 0 1-2.51.35c.06-3 3.54-4.89 4.86-5.5a2.5 2.5 0 0 0 .46.3 11.33 11.33 0 0 0-1.77 3v.25a2.68 2.68 0 0 1-1.04 1.6zm2.8 30.07l-2.87-3.5c-1.56-2.8.92-21.09 2-28.07v-.07a11.88 11.88 0 0 1 1.65-2.68zm7.89 2l-6-36.6h.54c3.14.53 6.35 15.53 7.69 24.85.52 3.62-1.22 9.05-2.23 11.77zM62.8 56.51c-1-2.67-2.06-4.8-3.29-5.7 1.67.82 5.91 3.19 6 6-1.21.39-2.25.31-2.71-.3z"/>
               </symbol>
              </svg>
              <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['catalog']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['q']['show'] = true;
$this->_sections['q']['max'] = $this->_sections['q']['loop'];
$this->_sections['q']['step'] = 1;
$this->_sections['q']['start'] = $this->_sections['q']['step'] > 0 ? 0 : $this->_sections['q']['loop']-1;
if ($this->_sections['q']['show']) {
    $this->_sections['q']['total'] = $this->_sections['q']['loop'];
    if ($this->_sections['q']['total'] == 0)
        $this->_sections['q']['show'] = false;
} else
    $this->_sections['q']['total'] = 0;
if ($this->_sections['q']['show']):

            for ($this->_sections['q']['index'] = $this->_sections['q']['start'], $this->_sections['q']['iteration'] = 1;
                 $this->_sections['q']['iteration'] <= $this->_sections['q']['total'];
                 $this->_sections['q']['index'] += $this->_sections['q']['step'], $this->_sections['q']['iteration']++):
$this->_sections['q']['rownum'] = $this->_sections['q']['iteration'];
$this->_sections['q']['index_prev'] = $this->_sections['q']['index'] - $this->_sections['q']['step'];
$this->_sections['q']['index_next'] = $this->_sections['q']['index'] + $this->_sections['q']['step'];
$this->_sections['q']['first']      = ($this->_sections['q']['iteration'] == 1);
$this->_sections['q']['last']       = ($this->_sections['q']['iteration'] == $this->_sections['q']['total']);
?>
                <?php echo smarty_function_math(array('assign' => 'step','equation' => 'x+1','x' => $this->_sections['q']['index']), $this);?>

                <a class="menu__item menu__item--<?php echo $this->_tpl_vars['step']; ?>

                <?php if ($this->_sections['q']['first']): ?> is-active <?php endif; ?>"
                href="javascript:void(0);">
                  <svg class="item__icon">
                    <use xlink:href="#grizzly" class="use-default"/>
                  </svg>
                  <div class="item__text"><?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['category_name']; ?>
</div>
                </a>
              <?php endfor; endif; ?>
            </div> <!-- /.catalog__menu -->
          </div> <!-- /.catalog__header.row -->
          <?php $this->assign('current_category', ""); ?>
          <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['catalog']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['q']['show'] = true;
$this->_sections['q']['max'] = $this->_sections['q']['loop'];
$this->_sections['q']['step'] = 1;
$this->_sections['q']['start'] = $this->_sections['q']['step'] > 0 ? 0 : $this->_sections['q']['loop']-1;
if ($this->_sections['q']['show']) {
    $this->_sections['q']['total'] = $this->_sections['q']['loop'];
    if ($this->_sections['q']['total'] == 0)
        $this->_sections['q']['show'] = false;
} else
    $this->_sections['q']['total'] = 0;
if ($this->_sections['q']['show']):

            for ($this->_sections['q']['index'] = $this->_sections['q']['start'], $this->_sections['q']['iteration'] = 1;
                 $this->_sections['q']['iteration'] <= $this->_sections['q']['total'];
                 $this->_sections['q']['index'] += $this->_sections['q']['step'], $this->_sections['q']['iteration']++):
$this->_sections['q']['rownum'] = $this->_sections['q']['iteration'];
$this->_sections['q']['index_prev'] = $this->_sections['q']['index'] - $this->_sections['q']['step'];
$this->_sections['q']['index_next'] = $this->_sections['q']['index'] + $this->_sections['q']['step'];
$this->_sections['q']['first']      = ($this->_sections['q']['iteration'] == 1);
$this->_sections['q']['last']       = ($this->_sections['q']['iteration'] == $this->_sections['q']['total']);
?>
          <?php if ($this->_tpl_vars['catalog'][$this->_sections['q']['index']]['category_name'] != $this->_tpl_vars['current_category']): ?>
          <div class="catalog__grid items row js-catalog-items
          <?php if ($this->_sections['q']['first']): ?> is-active <?php endif; ?>">
          <?php endif; ?>
          <?php unset($this->_sections['w']);
$this->_sections['w']['name'] = 'w';
$this->_sections['w']['loop'] = is_array($_loop=$this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['w']['show'] = true;
$this->_sections['w']['max'] = $this->_sections['w']['loop'];
$this->_sections['w']['step'] = 1;
$this->_sections['w']['start'] = $this->_sections['w']['step'] > 0 ? 0 : $this->_sections['w']['loop']-1;
if ($this->_sections['w']['show']) {
    $this->_sections['w']['total'] = $this->_sections['w']['loop'];
    if ($this->_sections['w']['total'] == 0)
        $this->_sections['w']['show'] = false;
} else
    $this->_sections['w']['total'] = 0;
if ($this->_sections['w']['show']):

            for ($this->_sections['w']['index'] = $this->_sections['w']['start'], $this->_sections['w']['iteration'] = 1;
                 $this->_sections['w']['iteration'] <= $this->_sections['w']['total'];
                 $this->_sections['w']['index'] += $this->_sections['w']['step'], $this->_sections['w']['iteration']++):
$this->_sections['w']['rownum'] = $this->_sections['w']['iteration'];
$this->_sections['w']['index_prev'] = $this->_sections['w']['index'] - $this->_sections['w']['step'];
$this->_sections['w']['index_next'] = $this->_sections['w']['index'] + $this->_sections['w']['step'];
$this->_sections['w']['first']      = ($this->_sections['w']['iteration'] == 1);
$this->_sections['w']['last']       = ($this->_sections['w']['iteration'] == $this->_sections['w']['total']);
?>
          <?php echo smarty_function_math(array('assign' => 'step_1','equation' => "floor((x+1)/3)",'x' => $this->_sections['w']['index']), $this);?>

          <?php echo smarty_function_math(array('assign' => 'step_2','equation' => "(x+1)/3",'x' => $this->_sections['w']['index']), $this);?>

          <?php if (! $this->_sections['w']['first']): ?><?php endif; ?>
            <div class="catalog__grid__item col-xs-6 col-md-4 js-item">
              <div class="item__image">
                <a href="javascript:void(0);">
                  <div class="image__zoom">
                    <div class="zoom__icon"></div>
                  </div>
                  <img src="<?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items'][$this->_sections['w']['index']]['images'][0]['link_sml']; ?>
">
                </a>
              </div> <!-- /.item__image -->
              <div class="item__description">
                <div class="description__name"><?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items'][$this->_sections['w']['index']]['name']; ?>
</div>
                <div class="description__size">Размер:
                  <span class="size--normal"><?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items'][$this->_sections['w']['index']]['size']; ?>
</span>
                </div>
                <div class="description__price">
                  <?php if ($this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items'][$this->_sections['w']['index']]['sale'] == 'yes'): ?>
                  <span class="price--old"><?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items'][$this->_sections['w']['index']]['price']; ?>
&nbsp;руб.</span>
                  <span class="price--new"><?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items'][$this->_sections['w']['index']]['sale_price']; ?>
&nbsp;руб.</span>
                  <?php else: ?>
                  <span class="price--normal"><?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items'][$this->_sections['w']['index']]['price']; ?>
&nbsp;руб.</span>
                  <?php endif; ?>
                </div>
              </div> <!-- /.item__description -->
              <div class="item__button">
                <a class="button button--large button--yellow"
                href="javascript:void(0);">Заказать</a>
              </div> <!-- /.item__button -->
              <div class="hidden item-gallery">
                <?php unset($this->_sections['e']);
$this->_sections['e']['name'] = 'e';
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items'][$this->_sections['w']['index']]['images']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e']['show'] = true;
$this->_sections['e']['max'] = $this->_sections['e']['loop'];
$this->_sections['e']['step'] = 1;
$this->_sections['e']['start'] = $this->_sections['e']['step'] > 0 ? 0 : $this->_sections['e']['loop']-1;
if ($this->_sections['e']['show']) {
    $this->_sections['e']['total'] = $this->_sections['e']['loop'];
    if ($this->_sections['e']['total'] == 0)
        $this->_sections['e']['show'] = false;
} else
    $this->_sections['e']['total'] = 0;
if ($this->_sections['e']['show']):

            for ($this->_sections['e']['index'] = $this->_sections['e']['start'], $this->_sections['e']['iteration'] = 1;
                 $this->_sections['e']['iteration'] <= $this->_sections['e']['total'];
                 $this->_sections['e']['index'] += $this->_sections['e']['step'], $this->_sections['e']['iteration']++):
$this->_sections['e']['rownum'] = $this->_sections['e']['iteration'];
$this->_sections['e']['index_prev'] = $this->_sections['e']['index'] - $this->_sections['e']['step'];
$this->_sections['e']['index_next'] = $this->_sections['e']['index'] + $this->_sections['e']['step'];
$this->_sections['e']['first']      = ($this->_sections['e']['iteration'] == 1);
$this->_sections['e']['last']       = ($this->_sections['e']['iteration'] == $this->_sections['e']['total']);
?>
                <a href="<?php echo $this->_tpl_vars['catalog'][$this->_sections['q']['index']]['items'][$this->_sections['w']['index']]['images'][$this->_sections['e']['index']]['link_big']; ?>
"></a>
                <?php endfor; endif; ?>
              </div>
            </div> <!-- /.grid__item -->
          <?php if (! $this->_sections['w']['last']): ?><?php endif; ?>
          <?php endfor; endif; ?>
          </div> <!-- /.catalog-grid -->
          <?php endfor; endif; ?>
          <div class="catalog__motivation row">
            <div class="motivation__phrase col-xs-12 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-6">Еще сомневаешься?</div>
          </div>
        </div> <!-- /.container -->
      </section>

      <section class="reasons container">
        <div class="row">
          <div class="col-sm-7 col-md-8">
            <h1 class="section-heading"><span class="heading--special">6&nbsp;причин</span><br> подарить мягкого медведя:</h1>
          </div>
        </div>
        <ol class="reasons__grid row">
          <li class="reasons__grid__item col-xs-12 col-sm-6 col-md-4">
            <div class="item__heart"><span>1</span></div>
            <h3>Будь оригинален!</h3>
            <p>Все дарят надоевшие цветы и конфеты. А у тебя — медведь.</p>
          </li>
          <li class="reasons__grid__item col-xs-12 col-sm-6 col-md-4">
            <div class="item__heart"><span>2</span></div>
            <h3>Придумай историю</h3>
            <p>Медведь защитит твою девушку от ночных кошмаров? Будет слушать ее секреты? Отлично!</p>
          </li>
          <li class="reasons__grid__item col-xs-12 col-sm-6 col-md-4">
            <div class="item__heart"><span>3</span></div>
            <h3>Медведь &#151; живой</h3>
            <p>Ему можно дать имя, можно с ним дружить, делать селфи, постить фотки в Instagram и даже возить в машине.</p>
          </li>
          <li class="reasons__grid__item col-xs-12 col-sm-6 col-md-4">
            <div class="item__heart"><span>4</span></div>
            <h3>Медведь — теплый</h3>
            <p>Его можно обнять ночью или в ненастный день.</p>
          </li>
          <li class="reasons__grid__item col-xs-12 col-sm-6 col-md-4">
            <div class="item__heart"><span>5</span></div>
            <h3>На долгую память</h3>
            <p>Цветы завянут через неделю, а медведь будет радовать девушку долгое время</p>
          </li>
          <li class="reasons__grid__item item--special col-xs-12 col-sm-6 col-md-4">
            <div class="item__heart heart--special"><span>6</span></div>
            <h3>Медведи бесконечно милые&nbsp;:)</h3>
            <p>Разве это не то, что любят жещины?</p>
          </li>
        </ol>
      </section>

      <section class="responses">
        <div class="container">
          <div class="responses-box row">
            <h1 class="section-heading"><span class="heading--special">100%</span><br> положительные отзывы</h1>
            <span class="section-subheading">от реальных покупателей</span>
            <div class="box__item vk-comments col-xs-12">
              <!-- #Vkcomments -->
              <?php echo '
              <div id="vk_comments"></div>
              <script type="text/javascript">
                VK.Widgets.Comments(\'vk_comments\', {width: "auto", limit: 10, attach: "*"});
              </script>
              '; ?>

            </div>
          </div>
        </div>
      </section>

      <section class="social container">
        <div class="row">
          <div class="social-box col-xs-12">
            <h1 class="section-heading">Следи за новостями и скидками!</h1>
            <span class="section-subheading">Иногда мы разыгрываем медведей бесплатно!</span>
            <div class="box__item vk-widget col-xs-12 col-sm-4">
              <?php echo '
              <!-- VK Widget -->
              <div id="vk_groups"></div>
              <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {
                  mode: 0,
                  width: "auto",
                  height: "290",
                  color1: \'FFFFFF\',
                  color2: \'2B587A\',
                  color3: \'5B7FA6\'
                }, 57927787);
              </script>
              '; ?>

            </div>
            <div class="box__item flamp-widget col-xs-12 col-sm-5">
              <?php echo '
              <a class="flamp-widget"
              href="http://ekaterinburg.flamp.ru/firm/grizzly96_internet_magazin-70000001019267848"
              data-flamp-widget-type="responsive" data-flamp-widget-count="1"
              data-flamp-widget-id="70000001019267848"
              data-flamp-widget-width="100%">
                Отзывы о нас на Флампе
              </a>
              <script>
                !function(d,s){var js,fjs=d.getElementsByTagName(s)[0];js=d.createElement(s);
                  js.async=1;js.src="//widget.flamp.ru/loader.js";
                  fjs.parentNode.insertBefore(js,fjs);}(document,"script");
              </script>
              '; ?>

            </div>
            <!-- <div class="box__item fb-widget col-xs-12 col-sm-4">
            </div> -->
            <div class="box__item insta-widget col-xs-12 col-sm-3">
              <!-- TODO paste instagramm widget in -->
            </div>
          </div>
        </div>
      </section>

      <section class="text container">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="section-heading">Доставка мягких медведей в Екатеринбурге</h1>
            <div class="text-box">
              <?php echo $this->_tpl_vars['static']['body']; ?>

            </div>
            <h2 class="section-heading">Расскажи о Grizzly
              <span class="heading--special">96</span>.ru друзьям!
            </h2>
            <!-- #Pluso -->
            <?php echo '
            <script type="text/javascript">
              (function() {
                if (window.pluso)
                  if (typeof window.pluso.start == "function") return;
                if (window.ifpluso == undefined) {
                  window.ifpluso = 1;
                  var d = document,
                    s = d.createElement(\'script\'),
                    g = \'getElementsByTagName\';
                  s.type = \'text/javascript\';
                  s.charset = \'UTF-8\';
                  s.async = true;
                  s.src = (\'https:\' == window.location.protocol ? \'https\' : \'http\')
                    + \'://share.pluso.ru/pluso-like.js\';
                  var h = d[g](\'body\')[0];
                  h.appendChild(s);
                }
              })();
            </script>
            <div class="pluso-container">
              <div class="pluso" data-background="#ebebeb"
                data-options="big,square,line,horizontal,counter,theme=04"
                data-services="vkontakte,odnoklassniki,facebook,twitter,google">
              </div>
            </div>
            '; ?>

          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 col-md-push-6 footer__phone">
            <span>Звони! Заказывай!</span>
            <div class="number-phone"><span>(343)</span> 328-96-98</div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-md-push-6 footer__callback">
            <a id="callback-link-bottom"
               class="button button--normal button--yellow" href="#callback">
               Позвоните мне сами
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-md-pull-6 footer__company">
            <div class="footer__logotype">Grizzly96.ru</div>
            <div class="footer__copyright">
              &copy; 2015 Доставка мягких медведей в Екатеринбурге
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- #Popups -->
    <div id="callback" class="white-popup mfp-hide">
      <h3 class="popup-heading">Заказать звонок</h3>
      <form action="" method="POST">
        <span class="popup-label">Номер телефона *</span>
        <input class="popup-input" type="tel" name="contacts" placeholder="+7 (922) 131-22-52" required autofocus>
        <button type="submit" class="button button--normal button--yellow">
          Перезвоните мне
        </button>
        <input type="hidden" name="key" value="">
        <input type="hidden" name="action" value="call_order">
      </form>
      <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div>

    <div id="order" class="white-popup mfp-hide">
      <h3 class="popup-heading">Заказать медведя</h3>
      <form class="" action="" method="POST">
        <span class="popup-label">Имя</span>
        <input class="popup-input" type="text" name="name" placeholder="Василий Петрович">
        <span class="popup-label">Номер телефона *</span>
        <input class="popup-input" type="tel" name="contacts" placeholder="+7 (922) 131-22-52" required>
        <span class="popup-label">Пожелания к заказу</span>
        <textarea class="popup-input popup-textarea" name="comment" placeholder="Нужно перезвонить сегодня до 23:00. Доставить по адресу ул.Шевченко д.213 кв.357"></textarea>
        <p class="js-item-order"></p>
        <button type="submit" class="button button--normal button--yellow">
          Заказать
        </button>
        <input type="hidden" name="item">
        <input type="hidden" name="key" value="">
        <input type="hidden" name="action" value="medved_order">
      </form>
      <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div>

    <div id="callback-thanks" class="white-popup mfp-hide">
      <h3 class="popup-heading">Большое спасибо!</h3>
      <p class="popup-text">Ваш номер у нас! Мы обязательно перезвоним вам</p>
      <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div>

    <div id="order-thanks" class="white-popup mfp-hide">
      <h3 class="popup-heading">Большое спасибо!</h3>
      <p class="popup-text">Ваш заказ принят! Мы обязательно перезвоним вам</p>
      <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div>

    <!-- #Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
    <script src="/js/app.js"></script>
    <?php echo '
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function(d, w, c) {
        (w[c] = w[c] || []).push(function() {
          try {
            w.yaCounter31342278 = new Ya.Metrika({
              id: 31342278,
              clickmap: true,
              trackLinks: true,
              accurateTrackBounce: true,
              webvisor: true
            });
          } catch (e) {}
        });

        var n = d.getElementsByTagName("script")[0],
          s = d.createElement("script"),
          f = function() {
            n.parentNode.insertBefore(s, n);
          };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
          d.addEventListener("DOMContentLoaded", f, false);
        } else {
          f();
        }
      })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
      <div>
        <img src="https://mc.yandex.ru/watch/31342278" style="position:absolute; left:-9999px;" alt="" />
      </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    '; ?>

  </body>
</html>
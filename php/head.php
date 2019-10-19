<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="Bludit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;subset=cyrillic,greek,vietnamese" rel="stylesheet">

<?php
	echo Theme::metaTagTitle();
	echo Theme::metaTagDescription();
	echo Theme::favicon('img/favicon.png');
	echo Theme::cssLineAwesome();

        echo Theme::css('css/style.css');
	echo Theme::css('css/bludit.css');

	echo '<!--[if lt IE 9]>';
	echo Theme::js('js/respond.min.js');
	echo '<![endif]-->';

        // Load plugins with the hook siteHead
        Theme::plugins('siteHead');
?>
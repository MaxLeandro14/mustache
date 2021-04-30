<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charSet="utf-8"/>
	<title></title>
	<meta name="author" content="Max Silva"/>
	<meta name="application-name" content=""/>
	<meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<meta name="description" content=""/>
	<meta property="og:title" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content="website"/>
	<link rel="apple-touch-icon" href="/icon_192.png"/>
	<link rel="canonical" href=""/>
	<?php wp_head(); ?>
</head>
<body>
	<nav>
		<div class="container align-space">
			<div class="align-itens">
			<label class="logo" >
				<a href="index.html"><img src="<?= get_template_directory_uri(); ?>/assets/img/moustache.svg" alt="logo A Melhor Você"></a>
			</label>
			<?php
                $args = array(
                        'menu' => 'principal',
                        'theme_location' => 'header-menu',
                        'container' => false,
						'items_wrap' => '<ul id="menu">%3$s</ul>',
                    );
            	wp_nav_menu( $args );
            ?>
			</div>
			<span id="mobile-btn" class="mobile-btn"></span>
			<span class="buscar">
				<form class="d-flex">
					<div class="input-group">
					  <input type="text" class="form-control serch-back" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
					  <button class="btn btn-outline-secondary" type="button" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
					  </svg></i></button>
					</div>
      			</form>
			</span>
		</div>
	</nav>
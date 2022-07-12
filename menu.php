<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="site-header-brand">
			<a class="site-header-brand__item" href="<?php echo esc_url(home_url('/')); ?>">
				<img id="brand" data-brand="<?php echo get_theme_mod('brand_img'); ?>" data-brandtwo="<?php echo get_theme_mod('brand_img-revert'); ?>" src="<?php echo get_theme_mod('brand_img'); ?>">
			</a>
		</div>
		<div class="site-header-sandwich">
			<div class="menu menu-1"></div>
			<div class="menu menu-2"></div>
			<div class="menu menu-3"></div>
		</div>

		<div class="site-header-nav">
			<nav style="color: white;" id="site-navegation" class="main-navegation" role="navegation">
				<?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
			</nav>
		</div>
		<script>
			const menu = document.querySelector("#menu-menu-principal");
			const menuLength = menu.childNodes.length;
			for (let menuNumber = 0; menuNumber < menuLength; menuNumber = menuNumber + 2) {
				const submenu = menu.childNodes[menuNumber].querySelector('.sub-menu');
				if (submenu) {
					const svg = document.createElement("span")
					svg.innerHTML = `<svg width = "10"
					    height = "7"
					    viewBox = "0 0 10 7"
					    fill = "none"
					    xmlns = "http://www.w3.org/2000/svg" >
					    <path d = "M9 1L5 6L1 1"
					    stroke = "#FF2D4F"
					    stroke-linecap = "round"
					    stroke-linejoin = "round" />
					    </svg>`
					const subMenuLink = submenu.parentNode.querySelector("a");
					subMenuLink.appendChild(svg)
					// subMenuLink.style = "display:flex;gap:5px;width:auto;"
				}
			}
		</script>
	</div>
</header>
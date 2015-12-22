<div id="pull-form" class="overlay overlay-contentpull pull-form menu-bg">
	<div class="overlay-page-table">
		<div class="overlay-page-cell">


			<div class="topline-nav clearfix">
				<div class="logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<?php get_template_part('assets/svg/logo.svg') ?>
					</a>
				</div>
				<div class="menu-wrap">
					<p class="menu-trigger icon-cancel js-overly-trigger" data-overlay="#pull-form"></p>
				</div>
			</div>


			<div class="overlay-page">

				<?php get_template_part('parts/contact-form'); ?>


				<div class="row pull-footer">
					<div class="col contacts-info">
						<p class="headline">Adress</p>
						<?php get_template_part('parts/contacts'); ?>
					</div>
					<div class="col social">
						<p class="headline">Share</p>
						<?php get_template_part('parts/soc-icons'); ?>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>


<?php

/*
* Template Name: Home Page EN
*/
get_header();
$templateurl = get_bloginfo('template_url');

?>

<body>
<div id="container" class="container">
<div id="fullpage">

<div class="section box-1 switcher" data-section-name="Home">
	<div class="box-bg animate"></div>
	<section class="content">
		<div class="title-wrapper">
			<div class="title-container content-switch">
				<div data-target="1" class="title entry-content" style="display:block">
					<p>We are a studio of architecture & interior design <b>arch.design</b></p>
				</div>
				<div data-target="2" class="title entry-content">
					<p>We create the projects for our client's happy life, comfort and aesthetic enjoyment!</p>
				</div>
				<div data-target="3" class="title entry-content small-title">
					<p>We are a studio of architecture & interior design <b>arch.design</b></p>
				</div>
			</div>
		</div>
		<ul id="home-switcher">
			<li class="active">
				<div data-switch="1" class="switch-trigger trigger"><span>1</span><p>Who we<br />are</p></div>
			</li><li>
				<div data-switch="2" class="switch-trigger trigger"><span>2</span><p>Why<br />we</p></div>
			</li><li>
				<div data-switch="3" class="switch-trigger trigger"><span>3</span><p>Our<br />approach</p></div>
			</li>
		</ul>
	</section>
</div>
<div class="section box-2 switcher" data-section-name="Service">
	<div class="box-bg"></div>


	<?php
	if( wp_mobile_detect() ) {
		get_template_part( 'parts/mobile/box-2_en' );
	} else { ?>
		<section class="content">
			<div class="row">
				<div class="col left">
					<h1>Our services</h1>
					<div class="row">
						<div class="col">
							<div data-switch="architecture" class="content-tile switch-trigger">

								<figure>
									<?php get_template_part('assets/svg/2slide/l1.svg');?>
								</figure>
								<p>Architecture</p>

								<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Архитектура">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
										<path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 2 5 L 2 6 L 2 20 L 2 21 L 3 21 L 6 21 L 6 24 L 6 26.09375 L 7.625 24.78125 L 12.34375 21 L 21 21 L 22 21 L 22 20 L 22 6 L 22 5 L 21 5 L 3 5 L 2 5 z M 4 7 L 20 7 L 20 19 L 12 19 L 11.65625 19 L 11.375 19.21875 L 8 21.90625 L 8 20 L 8 19 L 7 19 L 4 19 L 4 7 z M 24 9 L 24 11 L 28 11 L 28 23 L 24 23 L 24 25.90625 L 20.34375 23 L 12.84375 23 L 10.34375 25 L 19.65625 25 L 26 30.09375 L 26 25 L 30 25 L 30 9 L 24 9 z" overflow="visible" font-family="Bitstream Vera Sans"></path>
									</svg>
									Learn more
								</a>
							</div>
						</div>
						<div class="col">
							<div data-switch="design" class="content-tile switch-trigger">

								<figure>
									<?php get_template_part('assets/svg/2slide/l2.svg');?>
								</figure>
								<p>Design</p>

								<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Дизайн">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
										<path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 2 5 L 2 6 L 2 20 L 2 21 L 3 21 L 6 21 L 6 24 L 6 26.09375 L 7.625 24.78125 L 12.34375 21 L 21 21 L 22 21 L 22 20 L 22 6 L 22 5 L 21 5 L 3 5 L 2 5 z M 4 7 L 20 7 L 20 19 L 12 19 L 11.65625 19 L 11.375 19.21875 L 8 21.90625 L 8 20 L 8 19 L 7 19 L 4 19 L 4 7 z M 24 9 L 24 11 L 28 11 L 28 23 L 24 23 L 24 25.90625 L 20.34375 23 L 12.84375 23 L 10.34375 25 L 19.65625 25 L 26 30.09375 L 26 25 L 30 25 L 30 9 L 24 9 z" overflow="visible" font-family="Bitstream Vera Sans"></path>
									</svg>
									Learn more
								</a>
							</div>
						</div>
						<div class="col">
							<div data-switch="acquisition" class="content-tile switch-trigger">

								<figure>
									<?php get_template_part('assets/svg/2slide/l3.svg');?>
								</figure>
								<p>Acquisition, supervision, various demarches</p>


								<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Комплектация, авторский надзор, различные демарши">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
										<path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 2 5 L 2 6 L 2 20 L 2 21 L 3 21 L 6 21 L 6 24 L 6 26.09375 L 7.625 24.78125 L 12.34375 21 L 21 21 L 22 21 L 22 20 L 22 6 L 22 5 L 21 5 L 3 5 L 2 5 z M 4 7 L 20 7 L 20 19 L 12 19 L 11.65625 19 L 11.375 19.21875 L 8 21.90625 L 8 20 L 8 19 L 7 19 L 4 19 L 4 7 z M 24 9 L 24 11 L 28 11 L 28 23 L 24 23 L 24 25.90625 L 20.34375 23 L 12.84375 23 L 10.34375 25 L 19.65625 25 L 26 30.09375 L 26 25 L 30 25 L 30 9 L 24 9 z" overflow="visible" font-family="Bitstream Vera Sans"></path>
									</svg>
									Learn more
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col right">
					<div class="content-right">
						<div class="content-switch">
							<div data-target="architecture" class="entry-content" style="display: block">
								<h2>Architecture</h2>
								<p>Мы спроектируем и возведем для вас дом, отвечающий всем вашим вкусам и требованиям. Наша команда специализируется на проектировании зданий разного функционального назначения. Тщательно прорабатывая каждый проект, мы создаем не просто красивую архитектурную форму, но и правильно организованное пространство, которое удобно в эксплуатации. Используя гармоничное сочетание современных строительных технологий, мы реализуем проект, выражающий ваше представление о комфортной жизни и характеризующий вашу индивидуальность.</p>
							</div>
							<div data-target="design" class="entry-content">
								<h2>Design</h2>
								<p>Мы создадим интерьер вашей мечты, в котором будет комфортно отдыхать, творить и просто жить. Мы разрабатываем функциональные дизайнерские решения по оформлению индивидуальных и производственных помещений: домов, квартир, офисов, вилл, ресторанов и т.д. Проектируя дизайн интерьера, мы руководствуемся законами архитектурных форм, освещения, цвета и фактуры материалов. Созданные нами интерьеры внушительны в своей красоте и соответствуют всем принципам удобства, комфорта и качества.</p>
							</div>
							<div data-target="acquisition" class="entry-content">
								<h2>Acquisition, supervision, various demarches</h2>
								<p>По вашему желанию, мы разработаем для вас концепцию, подготовим рабочие чертежи и качественную 3D-визуализацию проекта любой сложности. Неправильно подобранные отделочные материалы, сантехника, мебель или предметы декора могут в корне загубить интерьер, на который было потрачено столько сил. Поэтому мы предлагаем квалифицированные услуги экспертов, разбирающихся в строительстве и ремонте, авторский надзор, услуги по подбору мебели и аксессуаров, помощь в подборе подрядчика, а также сопровождение строительных и отделочных работ.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>



</div>
<section class="section box-3" data-section-name="Наши последние проекты">
	<h1>Наши последние работы</h1>

	<?php
	$args = array(
		'post_status' => 'publish',
		'posts_per_page' => 5,
		'meta_key'		=> 'show_on_slider',
		'meta_value'	=> true
	);



	$query = new WP_Query($args);

	if($query->have_posts()){
		while($query->have_posts()){
			$query->the_post();
			$post_id = get_the_ID();
			?>
			<div id="slide<?php echo $post_id; ?>" class="slide" style="background-image: url('<?php the_field('slide_image'); ?>')">
				<div class="slide-content">
					<h2><?php the_title(); ?></h2>
					<a href="<?php echo get_permalink(); ?>" class="trigger-push-content js-single-ajax" data-project="<?php echo $post_id; ?>">посмотреть проект</a>
				</div>
			</div>

		<?php
		}
	}
	?>
</section>

<div class="section gallery" data-section-name="Our projects" >
	<div class="box-bg"></div>
	<section class="content">
		<h1 class="box-title">Our projects</h1>

		<div id="tab-block" class="tab-block">
			<div class="outer-tab-caption"></div>


			<?php

			$args = array(
				'parent'  => '0',
			);

			foreach ( get_terms('category', $args) as $category){ ?>
				<div class="outer-tab-content">
					<div class="undertitle"><?php echo $category->name; ?></div>
					<?php echo post_projects($category); ?>
				</div>
			<?php } ?>
		</div>









	</section>
</div>

<div class="section box-5" data-section-name="What do we offer">
	<div class="box-bg"></div>
	<section class="content">
		<h1>What do we offer</h1>
		<div class="row">
			<div class="col">
				<div class="entry-content">

					<figure>
						<?php get_template_part('assets/svg/5slide/n1.svg');?>
					</figure>
					<h2>Architectural design</h2>
					<p>The architectural form showing the character of the owner at a glance. The project of a residential building, restaurant, cottage or a commercial building.</p>

					<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Architectural design">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
							<path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 2 5 L 2 6 L 2 20 L 2 21 L 3 21 L 6 21 L 6 24 L 6 26.09375 L 7.625 24.78125 L 12.34375 21 L 21 21 L 22 21 L 22 20 L 22 6 L 22 5 L 21 5 L 3 5 L 2 5 z M 4 7 L 20 7 L 20 19 L 12 19 L 11.65625 19 L 11.375 19.21875 L 8 21.90625 L 8 20 L 8 19 L 7 19 L 4 19 L 4 7 z M 24 9 L 24 11 L 28 11 L 28 23 L 24 23 L 24 25.90625 L 20.34375 23 L 12.84375 23 L 10.34375 25 L 19.65625 25 L 26 30.09375 L 26 25 L 30 25 L 30 9 L 24 9 z" overflow="visible" font-family="Bitstream Vera Sans"></path>
						</svg>
						Learn more
					</a>
				</div>
			</div>
			<div class="col">
				<div class="entry-content">

					<figure>
						<?php get_template_part('assets/svg/5slide/n2.svg');?>
					</figure>
					<h2>Interior design</h2>
					<p>The optimization of space, interior design of rooms, apartments, houses, offices, cafes, clubs, restaurants, showroom, shop.</p>


					<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Interior design">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
							<path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 2 5 L 2 6 L 2 20 L 2 21 L 3 21 L 6 21 L 6 24 L 6 26.09375 L 7.625 24.78125 L 12.34375 21 L 21 21 L 22 21 L 22 20 L 22 6 L 22 5 L 21 5 L 3 5 L 2 5 z M 4 7 L 20 7 L 20 19 L 12 19 L 11.65625 19 L 11.375 19.21875 L 8 21.90625 L 8 20 L 8 19 L 7 19 L 4 19 L 4 7 z M 24 9 L 24 11 L 28 11 L 28 23 L 24 23 L 24 25.90625 L 20.34375 23 L 12.84375 23 L 10.34375 25 L 19.65625 25 L 26 30.09375 L 26 25 L 30 25 L 30 9 L 24 9 z" overflow="visible" font-family="Bitstream Vera Sans"></path>
						</svg>
						Learn more
					</a>
				</div>
			</div>
			<div class="col">
				<div class="entry-content">

					<figure>
						<?php get_template_part('assets/svg/5slide/n3.svg');?>
					</figure>
					<h2>Object design</h2>
					<p>Coziness is even in tiny details. Design of furniture, interior parts, lighting, tableware.</p>


					<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Object design">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
							<path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 2 5 L 2 6 L 2 20 L 2 21 L 3 21 L 6 21 L 6 24 L 6 26.09375 L 7.625 24.78125 L 12.34375 21 L 21 21 L 22 21 L 22 20 L 22 6 L 22 5 L 21 5 L 3 5 L 2 5 z M 4 7 L 20 7 L 20 19 L 12 19 L 11.65625 19 L 11.375 19.21875 L 8 21.90625 L 8 20 L 8 19 L 7 19 L 4 19 L 4 7 z M 24 9 L 24 11 L 28 11 L 28 23 L 24 23 L 24 25.90625 L 20.34375 23 L 12.84375 23 L 10.34375 25 L 19.65625 25 L 26 30.09375 L 26 25 L 30 25 L 30 9 L 24 9 z" overflow="visible" font-family="Bitstream Vera Sans"></path>
						</svg>
						Learn more
					</a>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="section box-4 switcher" data-section-name="How we are working">
	<div class="box-bg animate"></div>
	<?php
	if( wp_mobile_detect() ) {
		get_template_part( 'parts/mobile/box-4_en' );
	} else { ?>
		<section class="content">
			<div class="row">
				<div class="col left">
					<h1>How we are working</h1>
					<div class="row">
						<div class="col">
							<div data-switch="preproject" class="content-tile switch-trigger">
								<span>1</span>
								<p>The pre-design part</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="sketch" class="content-tile switch-trigger">
								<span>2</span>
								<p>Sketchup part</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="production" class="content-tile switch-trigger">
								<span>3</span>
								<p>The working part</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="delivery" class="content-tile switch-trigger">
								<span>4</span>
								<p>A hand over of a design project</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="supervision" class="content-tile switch-trigger">
								<span>5</span>
								<p>The construction design supervision</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="decorating" class="content-tile switch-trigger">
								<span>6</span>
								<p>The Decoration</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col right">
					<div class="content-right">
						<div class="content-switch">
							<div data-target="preproject" class="entry-content"  style="display:block">
								<h2>The pre-design part</h2>
								<p>We make an arrangement for a meeting onsite, our experts measure the rooms, we discuss your wishes and draw up the terms of reference for a future project. Then begins an active and creative process of creating of first sketches. There are some variants of layout which are provided to a customer and then we pass on creation of the fundamental concept of design.</p>
							</div>
							<div data-target="sketch" class="entry-content">
								<h2>Sketchup part</h2>
								<p>Then begins the work on the design decisions and visualization of your future interior. Usually, there are 3 variants of different designs for each room. After an approval of the final version is made a computer 3D visualization of all necessary interior zones in different angles. The virtual modeling of interior space allows you to see the project the way it will look for real after its implementation.</p>
							</div>
							<div data-target="production" class="entry-content">
								<h2>The working part</h2>
								<p>On the approved sketches makes the series of drawings which are needed for construction and repair works. At the same stage goes a process of selection and approval of final finishing materials and makes a room finish schedule.</p>
							</div>
							<div data-target="delivery" class="entry-content">
								<h2>A hand over of a design project</h2>
								<p>After all the agreement of all the drawings and decorative materials, all the necessary changes include in the project. Having the “working” project with all drawings, you can spend the marketing of the construction market, offering several construction companies design – a project on a checking of cost account and, of course, to choose the most suitable company or a maintenance crew according to a quality and budget.</p>
							</div>
							<div data-target="supervision" class="entry-content">
								<h2>The construction design supervision</h2>
								<p>If you need the author’s control over the progress of the project, then, on the beginning of the construction works makes a contract on construction design supervision of the design project. Under the contract, designer will visit regularly a place and monitor the progress of the work, to make the necessary measurements, check the accordance of the work make necessary modifications in it.</p>
							</div>
							<div data-target="decorating" class="entry-content">
								<h2>The Decoration</h2>
								<p>If you need assistance in selecting of equipment, furniture, light, plumbing, textile design and other accessories here concludes a contract for the decoration which have all the necessary elements of the selection. To select the necessary equipment will be an ability to make the visits also will be the consultations and will be carried out a selection of the most profitable places for the customer to buy in the needed elements of decoration. This service can be carried out simultaneously with the supervision.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
</div>


<div class="section box-7 switcher" data-section-name="Наши услуги">
	<div class="box-bg"></div>

	<section class="content">
		<h1>What do you get when you work with us</h1>
		<div class="row">
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/2slide/l1.svg');?>
					</figure>
					<p>A quality design project that reflects your character</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/2slide/l2.svg');?>
					</figure>
					<p>Schemes of arrangement of furniture and space planning</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/2slide/l3.svg');?>
					</figure>
					<p>Sophisticated colors and perfectly matched materials</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/2slide/l1.svg');?>
					</figure>
					<p>Designed details and interior items, underlining the overall concept</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/2slide/l2.svg');?>
					</figure>
					<p>Дизайн деталей и предметов интерьера, подчеркивающих общую концепцию</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/2slide/l3.svg');?>
					</figure>
					<p>Custom art solutions - including the creation of art objects</p>
				</div>
			</div>
		</div>
	</section>
</div>


<section class="section box-6" data-section-name="Contacts">

    <?php get_template_part('parts/gmap'); ?>

	<div class="row">
		<div>
			<div class="col left js-col">
				<div class="js-cell">
					<div class="entry-content">
						<p class="text-logo"><span>ARCH</span> design</p>
						<div class="info">
							<p><?php pll_e('1058, Rue des Plans 06510 CARROS'); ?></p>
							<p><span><?php pll_e('Fax'); ?>:</span> 09 50 10 82 11</p>
							<p class="tel clearfix"><span class="lable"><?php pll_e('Telephone'); ?>:</span><span class="numb">+33 078 564 60 90<br />+33 07 85 64 60 90</span></p>
							<p><span>Email:</span> contact@buroarchdesign.com</p>
							<div class="soc-icons">
								<ul>
									<li><a href="https://www.facebook.com/BuroArchDesign" class="icon-facebook"></a></li>
									<li><a href="https://www.instagram.com/buroarchdesign/" class="icon-instagram"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col right js-col">
				<div class="js-cell">
					<?php get_template_part('parts/contact-form'); ?>
				</div>
			</div>
		</div>

	</div>

	<div id="copy-witty">
		<div>
			<a href="http://witty-digital.com" target="_blank">
				<span>Made in</span>
				<figure>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve">
                        <path fill="#F77165" d="M29.757,25.07l6.526,13.491l-4.093,7.521L21.461,25.07h-7.076l17.914,35.942l7.743-14.929l7.853,14.929  L65.698,25.07H29.757z M47.619,46.083l-7.577-14.488h15.152L47.619,46.083z"/>
                    </svg>
				</figure>
				<b>Witty Digital</b>
			</a>
		</div>
	</div>

</section>
</div>
</div>


<div class="overlay overlay-contentpush">
	<div id="query-content"></div>
</div>

<?php get_template_part( 'parts/menu' ); ?>
<?php get_template_part( 'parts/form' ); ?>
<?php get_template_part( 'parts/flying-panel' ); ?>

<?php get_footer(); ?>
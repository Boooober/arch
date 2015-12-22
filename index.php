<?php
get_header();
$templateurl = get_bloginfo('template_url');

?>

<body>
<div id="container" class="container">
<div id="fullpage">

<div class="section box-1 switcher" data-section-name="Главная">
	<div class="box-bg animate"></div>
	<section class="content">
		<div class="title-wrapper">
			<div class="title-container content-switch">
				<div data-target="1" class="title entry-content" style="display:block">
					<p><b>Bonjour!</b><br />Мы студия архитектуры и дизайна интерьеров <b>arch.design</b></p>
				</div>
				<div data-target="2" class="title entry-content">
					<p>Проектируем, строим, декорируем лучшие виллы на <b>Лазурном Берегу!</b></p>
				</div>
				<div data-target="3" class="title entry-content small-title">
					<p><b>Создаем проекты</b> для счастливой жизни, комфортного отдыха и эстетического удовольствия наших клиентов!</b></p>
				</div>
			</div>
		</div>
		<ul id="home-switcher">
			<li class="active">
				<div data-switch="1" class="switch-trigger trigger"><span>1</span><p>Кто<br />мы</p></div>
			</li><li>
				<div data-switch="2" class="switch-trigger trigger"><span>2</span><p>Почему<br />мы</p></div>
			</li><li>
				<div data-switch="3" class="switch-trigger trigger"><span>3</span><p>Наш подход</p></div>
			</li>
		</ul>
	</section>
</div>
<div class="section box-2 switcher" data-section-name="Наши услуги">
	<div class="box-bg"></div>


	<?php
	if( wp_mobile_detect() ) {
		get_template_part( 'mobile-templates/box-2_ru' );
	} else { ?>
		<section class="content">
			<div class="row">
				<div class="col left">
					<h1>Наши услуги</h1>
					<div class="row">
						<div class="col">
							<div data-switch="architecture" class="content-tile switch-trigger">

								<figure>
									<?php get_template_part('assets/svg/2slide/l1.svg');?>
								</figure>
								<p>Архитектура</p>

								<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Архитектура">
									Подробнее
								</a>
							</div>
						</div>
						<div class="col">
							<div data-switch="design" class="content-tile switch-trigger">

								<figure>
									<?php get_template_part('assets/svg/2slide/l2.svg');?>
								</figure>
								<p>Дизайн</p>

								<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Дизайн">
									Подробнее
								</a>
							</div>
						</div>
						<div class="col">
							<div data-switch="acquisition" class="content-tile switch-trigger">

								<figure>
									<?php get_template_part('assets/svg/2slide/l3.svg');?>
								</figure>
								<p>Комплектация, авторский надзор, различные демарши</p>


								<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Комплектация, авторский надзор, различные демарши">
									Подробнее
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col right">
					<div class="content-right">
						<div class="content-switch">
							<div data-target="architecture" class="entry-content" style="display: block">
								<h2>Архитектура</h2>
								<p>Мы спроектируем и возведем для вас дом, отвечающий всем вашим вкусам и требованиям. Наша команда специализируется на проектировании зданий разного функционального назначения. Тщательно прорабатывая каждый проект, мы создаем не просто красивую архитектурную форму, но и правильно организованное пространство, которое удобно в эксплуатации. Используя гармоничное сочетание современных строительных технологий, мы реализуем проект, выражающий ваше представление о комфортной жизни и характеризующий вашу индивидуальность.</p>
							</div>
							<div data-target="design" class="entry-content">
								<h2>Дизайн</h2>
								<p>Мы создадим интерьер вашей мечты, в котором будет комфортно отдыхать, творить и просто жить. Мы разрабатываем функциональные дизайнерские решения по оформлению индивидуальных и производственных помещений: домов, квартир, офисов, вилл, ресторанов и т.д. Проектируя дизайн интерьера, мы руководствуемся законами архитектурных форм, освещения, цвета и фактуры материалов. Созданные нами интерьеры внушительны в своей красоте и соответствуют всем принципам удобства, комфорта и качества.</p>
							</div>
							<div data-target="acquisition" class="entry-content">
								<h2>Комплектация, авторский надзор, различные демарши</h2>
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
					<a href="<?php echo get_permalink(); ?>" class="js-overly-trigger js-single-ajax" data-project="<?php echo $post_id; ?>" data-overlay="#push-page">посмотреть проект</a>
				</div>
			</div>

		<?php
		}
	}
	?>
</section>

<div class="section gallery" data-section-name="Наши проекты" >
	<div class="box-bg"></div>
	<section class="content">
		<h1 class="box-title">Наши проекты</h1>

		<div id="tab-block" class="tab-block">
			<div class="outer-tab-caption"></div>


			<?php

			$args = array(
				'parent'  => '0',
				'orderby' => 'slug'
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

<div class="section box-5" data-section-name="Мы предлагаем">
	<div class="box-bg"></div>
	<section class="content">
		<h1>Мы предлагаем</h1>
		<div class="row">
			<div class="col">
				<div class="entry-content">

					<figure>
						<?php get_template_part('assets/svg/5slide/n1.svg');?>
					</figure>
					<h2>Архитектурное проектирование</h2>
					<p>Архитектурная форма, демонстрирующая характер владельца с первого взгляда. Проект жилого дома, ресторана, коттеджа, коммерческого здания.</p>

					<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Архитектурное проектирование">
						Подробнее
					</a>
				</div>
			</div>
			<div class="col">
				<div class="entry-content">

					<figure>
						<?php get_template_part('assets/svg/5slide/n2.svg');?>
					</figure>
					<h2>Дизайн интерьера</h2>
					<p>Оптимизация пространства, проект интерьера комнаты, квартиры, дома, офиса, кафе, клуба, ресторана, шоу-рум, магазина.</p>


					<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Дизайн интерьера">
						Подробнее
					</a>
				</div>
			</div>
			<div class="col">
				<div class="entry-content">

					<figure>
						<?php get_template_part('assets/svg/5slide/n3.svg');?>
					</figure>
					<h2>Предметный дизайн</h2>
					<p>Уют даже в миниатюрных деталях. Дизайн мебели, деталей интерьера, освещения, посуды.</p>


					<a class="form-btn js-overly-trigger" href="#" data-overlay="#pull-form" data-ftitle="Предметный дизайн">
						Подробнее
					</a>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="section box-4 switcher" data-section-name="Как мы работаем">
	<div class="box-bg animate"></div>
	<?php
	if( wp_mobile_detect() ) {
		get_template_part( 'mobile-templates/box-4_ru' );
	} else { ?>
		<section class="content">
			<div class="row">
				<div class="col left">
					<h1>Как мы работаем</h1>
					<div class="row">
						<div class="col">
							<div data-switch="preproject" class="content-tile switch-trigger">
								<span>1</span>
								<p>Предпроектная часть</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="sketch" class="content-tile switch-trigger">
								<span>2</span>
								<p>Эскизная часть</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="production" class="content-tile switch-trigger">
								<span>3</span>
								<p>Рабочая часть</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="delivery" class="content-tile switch-trigger">
								<span>4</span>
								<p>Сдача дизайн-проекта</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="supervision" class="content-tile switch-trigger">
								<span>5</span>
								<p>Авторский надзор</p>
							</div>
						</div>
						<div class="col">
							<div data-switch="decorating" class="content-tile switch-trigger">
								<span>6</span>
								<p>Декорирование</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col right">
					<div class="content-right">
						<div class="content-switch">
							<div data-target="preproject" class="entry-content"  style="display:block">
								<h2>Предпроектная часть</h2>
								<p>Мы договариваемся с вами о встрече на объекте, наши специалисты производят обмер помещений, обсуждаем ваши пожелания и составляем техническое задание будущего проекта. После чего начинается активный творческий процесс создания первых эскизов. Заказчику предоставляем нескольких вариантов планировки, после чего переходим к созданию основной концепции дизайна.</p>
							</div>
							<div data-target="sketch" class="entry-content">
								<h2>Эскизная часть</h2>
								<p>Далее начинается работа над планировочными решениями и визуализацией вашего будущего интерьера. Обычно делается по 3 варианта дизайна на каждое помещение. После утверждения итогового варианта составляется компьютерная 3D визуализация всех необходимых интерьерных зон в разных ракурсах. Виртуальное моделирование интерьера помещения позволяет увидеть дизайн проект, так, как он будет выглядеть в жизни после его реализации.</p>
							</div>
							<div data-target="production" class="entry-content">
								<h2>Рабочая часть</h2>
								<p>По утвержденным эскизам составляется комплект чертежей, необходимый для проведения ремонтно-строительных работ. На этом же этапе происходит подбор и согласование финишных отделочных материалов, составляется ведомость отделки.</p>
							</div>
							<div data-target="delivery" class="entry-content">
								<h2>Сдача дизайн-проекта</h2>
								<p>После согласования всех чертежей и отделочных материалов в проект вносятся все необходимые изменения. Имея на руках «рабочий» проект со всеми чертежами, Вы можете провести маркетинг строительного рынка, предложив нескольким строительным фирмам дизайн — проект на просчет сметы — и, соответственно, выбрать наиболее подходящую фирму, или бригаду мастеров — по качеству и бюджету.</p>
							</div>
							<div data-target="supervision" class="entry-content">
								<h2>Авторский надзор</h2>
								<p>Если Вам необходим авторский контроль за ходом выполнения проекта, то с началом проведения ремонтно-строительных работ заключается договор на авторский надзор по выполненному дизайн-проекту. По условиям договора дизайнер будет регулярно посещать объект, следить за ходом работ, производить необходимые замеры, проверять соответствие выполняемых работ и вносить необходимые коррективы.</p>
							</div>
							<div data-target="decorating" class="entry-content">
								<h2>Декорирование</h2>
								<p>В случае, если Вам понадобится помощь в подборе оборудования, мебели, светильников, сантехники, текстильного декора и иных аксессуаров — заключается договор на декорирование, где прописываются все необходимые элементы подбора. Будут осуществятся выезды с целью выбора необходимого оборудования, проводится консультации, а также будет осуществлен подбор наиболее выгодных для заказчика мест покупки требуемых элементов декорирования. Эта услуга может осуществляться одновременно с авторским надзором.</p>
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
		<h1>Что вы получите при работе с нами</h1>
		<div class="row">
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/7slide/l2.svg');?>
					</figure>
					<p>Качественный дизайн-проект, отражающий ваш характер</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/7slide/y2.svg');?>
					</figure>
					<p>Схемы расстановки мебели и организации пространства</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/7slide/l3.svg');?>
					</figure>
					<p>Продуманные цветовые решения и идеально подобранные материалы</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/7slide/y1.svg');?>
					</figure>
					<p>Дизайн деталей и предметов интерьера, подчеркивающих общую концепцию</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/7slide/y3.svg');?>
					</figure>
					<p>Дизайн деталей и предметов интерьера, подчеркивающих общую концепцию</p>
				</div>
			</div>
			<div class="col">
				<div class="content-tile">
					<figure>
						<?php get_template_part('assets/svg/7slide/y4.svg');?>
					</figure>
					<p>Нестандартные худо- жественные решения — вплоть до создания предметов искусства</p>
				</div>
			</div>
		</div>
	</section>
</div>


<section class="section box-6" data-section-name="Контакты">
	<div class="map-container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d81295.50604234143!2d30.567537809521486!3d50.450700782061084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1447250718941" width="100%" height="350" frameborder="0" style="border:0; display: block;" allowfullscreen></iframe>
		<!--                --><?php //get_template_part('parts/gmap'); ?>
	</div>
	<div class="row">
		<div>
			<div class="col left js-col">
				<div class="js-cell">
					<div class="left-container">

						<p class="text-logo"><span>ARCH</span> design</p>

						<?php get_template_part('parts/contacts') ?>
						<?php get_template_part('parts/soc-icons') ?>
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

	<?php get_template_part('parts/copy-witty'); ?>

</section>
</div>
</div>




<?php get_template_part( 'templates/push_page' ); ?>
<?php get_template_part( 'templates/pull_menu' ); ?>
<?php get_template_part( 'templates/pull_form' ); ?>
<?php get_template_part( 'parts/flying-panel' ); ?>



<?php get_footer(); ?>

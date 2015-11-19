<?php

    /*
    * Template Name: Home Page RU
    */
    get_header();
    $templateurl = get_bloginfo('template_url');

?>

<body>
<div class="container">
<div id="fullpage">
<div class="section box-1" data-section-name="Главная">
    <div class="box-bg animate"></div>
    <section class="content">
        <div class="title-wrapper">
            <div class="title">
                <h1>Мы студия архитектуры и дизайна интерьеров <b>arch.design</b></h1>
            </div>
        </div>
        <ul>
            <li>
                <a href="#"><span>1</span><p>Назание слайда</p></a>
            </li><li>
                <a href="#"><span>2</span><p>Кто<br />мы</p></a>
            </li><li>
                <a href="#"><span>3</span><p>Наш подход</p></a>
            </li>
        </ul>
    </section>
</div>
<div class="section box-2 switcher" data-section-name="Наши услуги">
    <div class="box-bg"></div>


    <?php
        if( wp_mobile_detect() ) {
            get_template_part( 'parts/mobile/box-2' );
        } else { ?>
            <section class="content">
                <div class="row">
                    <div class="col left">
                        <h2 class="mob-title">Наши услуги</h2>
                        <div class="row">
                            <div class="col">
                                <div data-switch="design" class="content-tile switch-trigger">
                                    <span>img<?php /*get_template_part('assets/svg/l1.svg'); */?></span>
                                    <p>Дизайн проект-интерьеров</p>
                                </div>
                            </div>
                            <div class="col">
                                <div data-switch="3d" class="content-tile switch-trigger">
                                    <span>img</span>
                                    <p>Эскизы 3D</p>
                                </div>
                            </div>
                            <div class="col">
                                <div data-switch="engineering" class="content-tile switch-trigger">
                                    <span>img</span>
                                    <p>Проектирование вилл</p>
                                </div>
                            </div>
                            <div class="col">
                                <div data-switch="1" class="content-tile switch-trigger">
                                    <span>img</span>
                                    <p>Планировочные решения</p>
                                </div>
                            </div>
                            <div class="col">
                                <div data-switch="2" class="content-tile switch-trigger">
                                    <span>img</span>
                                    <p>Согласование перепланировок</p>
                                </div>
                            </div>
                            <div class="col">
                                <div data-switch="3" class="content-tile switch-trigger">
                                    <span>img</span>
                                    <p>Авторский надзор</p>
                                </div>
                            </div>
                            <div class="col">
                                <div data-switch="4" class="content-tile switch-trigger">
                                    <span>img</span>
                                    <p>Квалифицированная помощь в подборе подрядчика</p>
                                </div>
                            </div>
                            <div class="col">
                                <div data-switch="5" class="content-tile switch-trigger">
                                    <span>img</span>
                                    <p>Сопровождение строительных и отделочных работ</p>
                                </div>
                            </div>
                            <div class="col">
                                <div data-switch="6" class="content-tile switch-trigger">
                                    <span>img</span>
                                    <p>Разработка рабочего проекта и технической документации</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col right">
                        <div class="content-right">
                            <h1>Наши услуги</h1>
                            <div class="content-switch">
                                <div data-target="design" class="entry-content">
                                    <h2>Дизайн проект-интерьеров</h2>
                                    <p>Профессиональное, творческое действие по созданию функционального и дизайнерского решения по оформлению дома, офиса, виллы или производственного помещения.</p>
                                </div>
                                <div data-target="3d" class="entry-content">
                                    <h2>Эскизы 3D</h2>
                                    <p>Помогает Вам правильно увидеть мысль автора проекта. Благодаря 3D визуализации красивая картинка воплотится для Вас в жизнь.</p>
                                </div>
                                <div data-target="engineering" class="entry-content" style="display:block">
                                    <h2>Проектирование вилл</h2>
                                    <p>Наша команда создаст проект оптимально комфортного, надежного и красивого дома, что поможет не только сэкономить Ваше время, нервы и средства, но и ускорить процесс строительства Вашего дома.</p>
                                </div>
                                <div data-target="1" class="entry-content">
                                    <h2>Планировочные решения</h2>
                                    <p>Интерьер должен быть не только внушительным в своей красоте, но и считаться с принципами удобства. Именно поэтому планировочные решения неотъемлемая часть дизайн-проекта.</p>
                                </div>
                                <div data-target="2" class="entry-content">
                                    <h2>Согласование перепланировок</h2>
                                    <p>Процесс оформления документов для приведения в соответствие планировки квартиры и документов о собственности.</p>
                                </div>
                                <div data-target="3" class="entry-content">
                                    <h2>Авторский надзор</h2>
                                    <p>Участие автора проекта гарантирует своевременное устранение возможных ошибок; во-вторых, при проведении авторского надзора часто приходят новые идеи, о возможном дополнении или усовершенствовании проектных решений.</p>
                                </div>
                                <div data-target="4" class="entry-content">
                                    <h2>Квалифицированная помощь в подборе подрядчика</h2>
                                    <p>Если Вы нуждаетесь в квалифицированной помощи экспертов, разбирающихся в строительстве и ремонте, наша компания поможет сделать действительно правильный выбор, основываясь на собственном опыте работы.</p>
                                </div>
                                <div data-target="5" class="entry-content">
                                    <h2>Сопровождение строительных и отделочных работ</h2>
                                    <p>Это подразумевает выполнение локальных эскизов и чертежей по мере необходимости, при возникновении затруднений во время реализации проекта.</p>
                                </div>
                                <div data-target="6" class="entry-content">
                                    <h2>Разработка рабочего проекта и технической документации</h2>
                                    <p>Часть работы над проектом, необходимая для его реализации. Рабочий проект требуется для проведения строительных работ при возведении дома, а также для проведения строительных и ремонтных работ в квартире.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php } ?>



</div>
<section class="section box-3" data-section-name="Проекты">
    <?php
        $args = array(
            'cat' => 1,
            'post_status' => 'publish',
            'posts_per_page' => 5
        );



        $query = new WP_Query($args);

        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
                $post_id = get_the_ID();
                ?>

                    <div id="slide<?php echo $post_id; ?>" class="slide" style="background-image: url('<?php the_field('slide_image'); ?>')">
                        <div class="slide-content">
                            <h2 style="color:<?php the_field('slide_text_color'); ?>"><?php the_title(); ?></h2>
                            <a href="<?php echo get_permalink(); ?>" class="trigger-overlay js-single-ajax" style="color:<?php the_field('slide_text_color'); ?>" data-project="<?php echo $post_id; ?>">посмотреть проект</a>
                        </div>
                    </div>

                <?php
            }
        }
    ?>
</section>
<div class="section box-4 switcher" data-section-name="Этапы работы">
    <div class="box-bg animate"></div>
        <?php
        if( wp_mobile_detect() ) {
            get_template_part( 'parts/mobile/box-4' );
        } else { ?>
            <section class="content">
                <h1>Этапы работы</h1>
                <div class="row">
                    <div class="col left">
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
<div class="section box-5" data-section-name="Что мы предлагаем">
    <div class="box-bg"></div>
    <section class="content">
        <h1>Что мы вам предлагаем</h1>
        <div class="row">
            <div class="col">
                <a href="#">
                    <div class="entry-content">
                        <h2>Архитектурное проектирование</h2>
                        <p>Архитектурная форма, демонстрирующая характер владельца с первого взгляда. Проект жилого дома, ресторана, коттеджа, коммерческого здания.</p>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="entry-content">
                        <h2>Дизайн интерьера</h2>
                        <p>Оптимизация пространства, проект интерьера комнаты, квартиры, дома, офиса, кафе, клуба, ресторана, шоу-рум, магазина.</p>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="entry-content">
                        <h2>Предметный дизайн</h2>
                        <p>Уют даже в миниатюрных деталях. Дизайн мебели, деталей интерьера, освещения, посуды.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>
<section class="section box-6" data-section-name="Контакты">
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d81295.50604234143!2d30.567537809521486!3d50.450700782061084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1447250718941" width="100%" height="350" frameborder="0" style="border:0; display: block;" allowfullscreen></iframe>
<!--        --><?php //get_template_part('parts/gmap'); ?>
    </div>
    <div class="row">
        <div>
            <div class="col left js-col">
                <div class="js-cell">
                    <div class="entry-content">
                        <p class="text-logo"><span>ARCH</span> design</p>
                        <div class="info">
                            <p>1058, Rue des Plans 06510 CARROS</p>
                            <p><span>Fax:</span> 09 50 10 82 11</p>
                            <p class="tel clearfix"><span class="lable">Telephone:</span><span class="numb">+33 078 564 60 90<br />+33 07 85 64 60 90</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col right js-col">
                <div class="js-cell">
                    <p class="title">Оставьте заявку на встречу с дизайнером и проведение необходимых замеров</p>
                    <form action="">
                        <div class="row">
                            <div class="col">
                                <lable class="flable" for="name">Ваше имя</lable>
                                <input type="text" placeholder="Ваше имя"/>
                            </div>
                            <div class="col">
                                <lable class="flable" for="email">Ваш email</lable>
                                <input type="text" placeholder="Ваш email"/>
                            </div>
                            <div class="col">
                                <lable class="flable" for="phone">Ваш телефон</lable>
                                <input type="text" placeholder="Ваш телефон"/>
                            </div>
                            <div class="col">
                                <input type="submit" value="ОТПРАВИТЬ"/>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>
</div>
</div>


<div class="overlay overlay-contentpush">
    <div id="query-content"></div>
</div>

<div id="flying-panel" class="flying-panel white">
    <div class="topline-nav clearfix">
        <div id="logo" class="logo">
            <?php get_template_part('assets/svg/logo.svg') ?>
        </div>
        <nav class="menu-wrap">
        <?php
            wp_nav_menu( array(
                'container'      => '',
                'menu_class'     => 'menu main-header_menu',
                'menu_id'        => '',
                'theme_location' => 'header',
            ) );

            wp_nav_menu( array(
                'container'      => '',
                'menu_class'     => 'menu langs-menu',
                'menu_id'        => '',
                'theme_location' => 'langs',
            ) );
        ?>

            <div class="menu-button">MENU</div>
        </nav>

    </div>
<!--    <div id="next" class="next">-->
<!--        go next-->
<!--    </div>-->
</div>

<?php get_footer(); ?>

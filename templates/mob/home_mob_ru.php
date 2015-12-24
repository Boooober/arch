<div id="container" class="container">

    <section id="box-1" class="section box-1 switcher" data-section-name="Главная">
        <div class="content">
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
        </div>
    </section>

    <section id="box-2" class="section box-2 switcher" data-section-name="Наши услуги">
        <div class="content">
            <div class="row">
                <div class="col left">
                    <h2 class="mob-title">Наши услуги</h2>
                    <div class="row">
                        <div class="col">
                            <div  class="content-tile">
                                <figure>
                                    <?php get_template_part('assets/svg/2slide/l1.svg');?>
                                </figure>
                                <p>Архитектура</p>

                                <span class="slide-trigger">Подробнее</span>
                                <p class="description">Профессиональное, творческое действие по созданию функционального и дизайнерского решения по оформлению дома, офиса, виллы или производственного помещения.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div  class="content-tile">
                                <figure>
                                    <?php get_template_part('assets/svg/2slide/l2.svg');?>
                                </figure>
                                <p>Дизайн</p>

                                <span class="slide-trigger">Подробнее</span>
                                <p class="description">Профессиональное, творческое действие по созданию функционального и дизайнерского решения по оформлению дома, офиса, виллы или производственного помещения.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="content-tile">
                                <figure>
                                    <?php get_template_part('assets/svg/2slide/l3.svg');?>
                                </figure>
                                <p>Комплектация, авторский надзор, различные демарши</p>

                                <span class="slide-trigger">Подробнее</span>
                                <p class="description">Профессиональное, творческое действие по созданию функционального и дизайнерского решения по оформлению дома, офиса, виллы или производственного помещения.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="box-3" class="section box-3" data-section-name="Наши последние проекты">


        <div class="owl-carousel">
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
                    <div class="slide" style="background-image: url('<?php the_field('slide_image'); ?>')">
                        <div class="slide-content">
                            <span class="section-title">Наши последние работы</span>
                            <h2><?php the_title(); ?></h2>
                            <a href="<?php echo get_permalink(); ?>" class="js-overly-trigger js-single-ajax" data-project="<?php echo $post_id; ?>" data-overlay="#push-page">посмотреть проект</a>
                        </div>
                    </div>

                <?php
                }
            }
            ?>
        </div>
    </section>

    <section id="gallery" class="section gallery" data-section-name="Наши проекты" >
    <!--    <div class="box-bg"></div>-->
        <div class="content">
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
                        <?php echo projects_tree($category); ?>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>

    <section id="box-5" class="section box-5" data-section-name="Мы предлагаем">
    <!--    <div class="box-bg"></div>-->
        <div class="content">
            <h1>Мы предлагаем</h1>
            <div class="row">
                <div class="col" data-ftitle="Архитектурное проектирование">
                    <div class="entry-content">

                        <figure>
                            <?php get_template_part('assets/svg/5slide/n1.svg');?>
                        </figure>
                        <h2>Архитектурное проектирование</h2>
                        <p>Архитектурная форма, демонстрирующая характер владельца с первого взгляда. Проект жилого дома, ресторана, коттеджа, коммерческого здания.</p>

<!--                        <span class="form-btn">Подробнее</span>-->
                    </div>
                </div>
                <div class="col" data-ftitle="Дизайн интерьера">
                    <div class="entry-content">

                        <figure>
                            <?php get_template_part('assets/svg/5slide/n2.svg');?>
                        </figure>
                        <h2>Дизайн интерьера</h2>
                        <p>Оптимизация пространства, проект интерьера комнаты, квартиры, дома, офиса, кафе, клуба, ресторана, шоу-рум, магазина.</p>

<!--                        <span class="form-btn">Подробнее</span>-->
                    </div>
                </div>
                <div class="col" data-ftitle="Предметный дизайн">
                    <div class="entry-content">

                        <figure>
                            <?php get_template_part('assets/svg/5slide/n3.svg');?>
                        </figure>
                        <h2>Предметный дизайн</h2>
                        <p>Уют даже в миниатюрных деталях. Дизайн мебели, деталей интерьера, освещения, посуды.</p>

<!--                        <span class="form-btn">Подробнее</span>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="box-4" class="section box-4 switcher" data-section-name="Как мы работаем">
    <!--    <div class="box-bg animate"></div>-->
        <div class="content">

            <h1>Как мы работаем</h1>

            <div class="content-tile">
                <span>1</span>
                <p>Предпроектная часть</p>
                <span class="slide-trigger">Подробнее</span>
                <div class="entry-content">
                    <p>Мы договариваемся с вами о встрече на объекте, наши специалисты производят обмер помещений, обсуждаем ваши пожелания и составляем техническое задание будущего проекта. После чего начинается активный творческий процесс создания первых эскизов. Заказчику предоставляем нескольких вариантов планировки, после чего переходим к созданию основной концепции дизайна.</p>
                </div>
            </div>

            <div class="content-tile">
                <span>2</span>
                <p>Эскизная часть</p>
                <span class="slide-trigger">Подробнее</span>
                <div class="entry-content">
                    <p>Далее начинается работа над планировочными решениями и визуализацией вашего будущего интерьера. Обычно делается по 3 варианта дизайна на каждое помещение. После утверждения итогового варианта составляется компьютерная 3D визуализация всех необходимых интерьерных зон в разных ракурсах. Виртуальное моделирование интерьера помещения позволяет увидеть дизайн проект, так, как он будет выглядеть в жизни после его реализации.</p>
                </div>
            </div>


            <div class="content-tile">
                <span>3</span>
                <p>Рабочая часть</p>
                <span class="slide-trigger">Подробнее</span>
                <div class="entry-content">
                    <p>По утвержденным эскизам составляется комплект чертежей, необходимый для проведения ремонтно-строительных работ. На этом же этапе происходит подбор и согласование финишных отделочных материалов, составляется ведомость отделки.</p>
                </div>
            </div>

            <div class="content-tile">
                <span>4</span>
                <p>Сдача дизайн-проекта</p>
                <span class="slide-trigger">Подробнее</span>
                <div class="entry-content">
                    <p>После согласования всех чертежей и отделочных материалов в проект вносятся все необходимые изменения. Имея на руках «рабочий» проект со всеми чертежами, Вы можете провести маркетинг строительного рынка, предложив нескольким строительным фирмам дизайн — проект на просчет сметы — и, соответственно, выбрать наиболее подходящую фирму, или бригаду мастеров — по качеству и бюджету.</p>
                </div>
            </div>

            <div class="content-tile">
                <span>5</span>
                <p>Авторский надзор</p>
                <span class="slide-trigger">Подробнее</span>
                <div class="entry-content">
                    <p>Если Вам необходим авторский контроль за ходом выполнения проекта, то с началом проведения ремонтно-строительных работ заключается договор на авторский надзор по выполненному дизайн-проекту. По условиям договора дизайнер будет регулярно посещать объект, следить за ходом работ, производить необходимые замеры, проверять соответствие выполняемых работ и вносить необходимые коррективы.</p>
                </div>
            </div>


            <div class="content-tile">
                <span>6</span>
                <p>Декорирование</p>
                <span class="slide-trigger">Подробнее</span>
                <div class="entry-content">
                    <p>В случае, если Вам понадобится помощь в подборе оборудования, мебели, светильников, сантехники, текстильного декора и иных аксессуаров — заключается договор на декорирование, где прописываются все необходимые элементы подбора. Будут осуществятся выезды с целью выбора необходимого оборудования, проводится консультации, а также будет осуществлен подбор наиболее выгодных для заказчика мест покупки требуемых элементов декорирования. Эта услуга может осуществляться одновременно с авторским надзором.</p>
                </div>
            </div>

        </div>
    </section>


    <section id="box-7" class="section box-7 switcher" data-section-name="Наши услуги">
    <!--    <div class="box-bg"></div>-->

        <div class="content">
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
        </div>
    </section>


    <section id="box-6" class="section box-6" data-section-name="Контакты">
        <div class="map-container">
            <?php get_template_part('parts/gmap'); ?>
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
<?php get_header() ?>
    <section id="scroll-bottom" class="team">
        <div class="team__inner">
            <div class="team__banner">
                <div class="team__banner-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis et nisi eum tempora dolores
                    perspiciatis!
                </div>

                <img class="team__banner-img"
                     src="<?php echo get_template_directory_uri() ?> . /dist/images/icon_brackets.svg"
                     alt="img">
            </div>

            <div class="team__title">
                Наша команда
                <img class="team__title-img"
                     src="<?php echo get_template_directory_uri() ?> . /dist/images/icon_brackets2.svg"
                     alt="img">
            </div>

            <div class="team__branch-wrapper">
                <div class="team__branch-list">
                    <?php
                    $args = array('post_type' => 'branch_of_law', 'posts_per_page' => 10);
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="team__branch-item">
                                <div class="team__branch-title">
                                    <div class="team-icon">
                                        <?php echo get_the_post_thumbnail($args->ID, ''); ?>
                                    </div>
                                    <h3><?php the_title() ?></h3>
                                </div>

                                <div class="team__branch-description">
                                    <?php the_content(); ?>
                                </div>

                                <div class="team__specialists">
                                    <h4>Переглянути спеціалістів</h4>
                                    <img class="rotate-reset"
                                         src="<?php echo get_template_directory_uri() ?> . /dist/images/arrow_right.svg"
                                         alt="img">

                                    <ul class="team__list">
                                        <?php $specialists = get_field('specialists') ?>
                                        <?php if ($specialists): ?>
                                            <?php foreach ($specialists as $specialist): ?>
                                                <li class="team__item">- <?php echo $specialist->post_title ?></li>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <li class="team__item">- Немає спеціалістів у цій галузі!</li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>

                            <?php wp_reset_postdata(); ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <h2>Нажаль в нас не має команди &#9785;</h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>
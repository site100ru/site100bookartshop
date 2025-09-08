<?php
/**
 * Template Name: Архивная страница
 * Template Post Type: page
 */

get_header(); ?>

<div id="rec129449181" class="r t-rec t-rec_pt_90 t-rec_pb_90" style="padding-top:90px;padding-bottom:90px;">
    <div class="t404">
        <div class="t-container">
            <?php
            // Параметры запроса
            $args = array(
                'posts_per_page' => -1, // -1 = Вывод всех записей, при желании можно написать любое другое положительное число
                'post_status' => 'publish',
				'category_name' => 'Uncategorized', // Замените 'Uncategorized' на слаг нужной категории
            );
			
            // Создаем новый объект запроса
            $query = new WP_Query($args);

            // Проверяем, есть ли записи
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    // Получение URL изображения
                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                    if (!$image_url) {
                        $image_url = 'http://bookartshop.ru/images/tild6265-3534-4430-a230-363830343766__logo_theatr_i_ego_dn.jpg'; // на случай, если нет миниатюры
                    }
            ?>
                <div class="t404__col t-col t-col_4 t-align_left">
                    <a class="t404__link" href="<?php the_permalink(); ?>">
                        <div class="t404__imgbox">
                            <div class="t404__img t-bgimg"
                                 style="background-image: url('<?php echo esc_url($image_url); ?>');"></div>
                            <div class="t404__separator"></div>
                        </div>
                        <div class="t404__textwrapper">
                            <div class="t404__uptitle t-uptitle" style="text-transform:uppercase;">
                                <span class="t404__date"><?php echo get_the_date(); ?></span>
                            </div>
                            <div class="t404__title t-heading t-heading_xs" style="height: 96px;">
                                <?php the_title(); ?>
                            </div>
                            <div class="t404__descr t-descr t-descr_xs" style="height: 74px;">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
                endwhile;
                wp_reset_postdata(); // сбрасываем данные после завершения цикла
            else :
                echo '<p>Записей не найдено.</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<div class="archive-container" style="padding: 50px;">
    <?php
    // Параметры для отображения всех записей из нужной категории
    $args = array(
        'posts_per_page' => -1, // -1 = Вывод всех записей
        'post_status' => 'publish',
        'category_name' => 'Uncategorized' // Укажите слаг нужной категории
    );

    // Запрос постов
    $query = new WP_Query($args);

    // Проверка наличия постов
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // Получение URL изображения поста или использование изображения по умолчанию
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            if (!$image_url) {
                $image_url = 'http://bookartshop.ru/images/tild6265-3534-4430-a230-363830343766__logo_theatr_i_ego_dn.jpg';
            }

            // Уникальный ID контейнера для каждой записи
            $unique_id = 'rec' . get_the_ID();
    ?>
            <div id="<?php echo esc_attr($unique_id); ?>" class="r t-rec t-rec_pt_75 t-rec_pb_75" style="padding-top:75px; padding-bottom:75px;">
                <div class="t422">
                    <div class="t422__container t-container">
                        <div class="t422__wrapper t-width_12 t422__prefix t-prefix_1">
                            <meta itemprop="image" content="<?php echo esc_url($image_url); ?>">
                            <div class="t422__img-mobile t-col t-bgimg" style="background-image: url('<?php echo esc_url($image_url); ?>');"></div>
                            <div class="t422__img t422__col t422__col_3 t-col t-bgimg loaded" style="background-image: url('<?php echo esc_url($image_url); ?>'); height: 231px;"></div>
                            <div class="t422__text t422__col t422__col_7 t-col t422__text_right" style="border-color: #e6e6e6; border-width: 1px;">
                                <div class="t422__text_mobile t-col" style="border-color: #e6e6e6; border-width: 1px;">
                                    <div class="t422__textwrapper">
                                        <div class="t422__cell t-cell">
                                            <div class="t422__title t-heading t-heading_md" style="font-size:22px;">
                                                <strong><?php the_title(); ?></strong><br>
                                            </div>
                                            <div class="t422__descr t-descr t-descr_sm">
                                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                            </div>
                                            <div class="t422__btn-wrapper">
                                                <a href="<?php the_permalink(); ?>" class="t-btn t-btn_sm" style="color:#000000; border:1px solid #000000; border-radius:21px;">
                                                    <table style="width:100%; height:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Увидеть больше</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
        wp_reset_postdata(); // сброс данных после завершения цикла
    else :
        echo '<p>Записей не найдено.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>

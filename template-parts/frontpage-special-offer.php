<!-- Start Slider -->
<?php
$args = array(
    'posts_per_page' =>15,
    'post_type' =>'advertising_home',
);
$args['meta_query'] = array(
    array(
        'key'		=> 'show_in_special_offer',
        'value'		=> '1',
        'compare'	=> '='
    ),
);
$posts = get_posts($args);
if (count($posts)>2): ?>
<div class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center faeture">
                <h5> پیشنهادات ویژه </h5>
                <p>  Special Offers </p>
            </div>
        </div>
        <div class="slider1st">
            <div class="slider1">
            <?php foreach ($posts as $post):
                get_template_part('loop/frontpage','3-slide');
            endforeach;
                wp_reset_postdata();
            ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- End Slider -->

<!-- END Slider 1  -->


<!-- END Slider 1  -->
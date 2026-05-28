<?php 
$hero_bg = get_sub_field('hero_bg'); // acf color picker field
$hero_badge_text = get_sub_field('hero_badge_text'); // acf text field
$hero_eyebrow = get_sub_field('hero_eyebrow'); // acf text field
$hero_text = get_sub_field('hero_text'); // acf text field
$hero_description = get_sub_field('hero_description'); // acf whys field
$hero_btn_1 = get_sub_field('hero_btn_1'); // acf button link array field
$hero_btn_2 = get_sub_field('hero_btn_2'); // acf button link array field
$hero_counter_wrapper = get_sub_field('hero_counter_wrapper'); // acf repeater field

?>

<section class="lumen-hero-section layout-padding pt-50 pb-50 pt-lg-130 pb-lg-100" style="background-color: <?php echo $hero_bg; ?>">
    <div class="lumen-hero-inner">
        <div class="hero__content">
            <?php if($hero_badge_text): ?>
                <span class="hero__badge">
                    <?php echo $hero_badge_text; ?>
                </span>
            <?php endif; ?>

            <?php if($hero_eyebrow): ?>
                <div class="hero__eyebrow">
                     <?php echo $hero_eyebrow; ?>
                 </div>
            <?php endif; ?>

            <?php if($hero_text): ?>
                <div class="hero__title">
                    <h1><?php echo $hero_text; ?></h2>
                </div>
            <?php endif; ?>

             <?php if($hero_description): ?>
                <div class="hero__description">
                    <?php echo $hero_description; ?>
                </div>
            <?php endif; ?>

            <div class="hero__buttons">
                <?php if($hero_btn_1): ?>
                    <a href="<?php echo $hero_btn_1['url']; ?>" class="site-btn btn-orange"><?php echo $hero_btn_1['title']; ?></a>
                <?php endif; ?>

                <?php if($hero_btn_2): ?>
                    <a href="<?php echo $hero_btn_2['url']; ?>" class="site-btn btn-transparent"><?php echo $hero_btn_2['title']; ?></a>
                <?php endif; ?>
        </div>

            <div class="hero-counter-wrapper">

                <?php 
                    if($hero_counter_wrapper):

                    foreach($hero_counter_wrapper as $hero_counter):

                        $hero_counter_number = $hero_counter['hero_counter_number']; // ACF text field
                        $hero_counter_text   = $hero_counter['hero_counter_text']; // ACF textarea field
                  ?>

                    <div class="hero-counter">

                        <div class="counter-number">
                            <?php echo esc_html($hero_counter_number); ?>
                        </div>

                        <div class="counter-text">
                            <?php echo esc_html($hero_counter_text); ?>
                        </div>

                    </div>

                <?php 
                    endforeach;

                endif;
                ?>
        </div>
    </div>
</section>
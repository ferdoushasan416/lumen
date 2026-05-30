<?php
$counter_impact_bg = get_sub_field('counter_impact_bg');// acf colorpiker Field
$section_title = get_sub_field('section_title');// acf Text Field
$section_description = get_sub_field('section_description');// acf Textarea Field
$customer_counter_box = get_sub_field('customer_counter_box');// acf Repeater Field

?>

<section class="customer-impact layout-padding pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-color: <?php echo $counter_impact_bg; ?>">
    <div class="container">
       <?php if ($section_title) : ?>
            <div class="customer-impact__heading">
                <h2><?php echo $section_title; ?></h2>
            </div>
        <?php endif; ?>

        <?php if (!empty($customer_counter_box)) : ?>
    
         <div class="customer-impact__counter-boxes">
            <?php foreach ($customer_counter_box as $counter_box) : ?>
                <?php
                $counter_number   = $counter_box['counter_number'];
                $counter_title    = $counter_box['counter_title'];
                $counter_subtitle = $counter_box['counter_subtitle'];
                ?>
                <div class="customer-impact__item">
                        <div class="counter-number">
                           <h2><?php echo esc_html ($counter_box['counter_number']); ?></h3>
                        </div>

                    <div class="customer-impact__content">
                        <span><?php echo esc_html ($counter_box['counter_title']); ?></span>
                        <p><?php echo esc_html ($counter_box['counter_subtitle']); ?></p>
                    </div>
                </div>
               <?php endforeach; ?>
            </div>
             <?php endif; ?>
      </div>
</section>
 
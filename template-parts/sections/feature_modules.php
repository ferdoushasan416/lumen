<?php
$module_bg = get_sub_field('module_bg'); // acf color picker field
$section_tagline = get_sub_field('section_tagline');// acf text field
$section_title = get_sub_field('section_title');// acf text field
$module_boxes = get_sub_field('module_boxes');// acf repeater field
$module_boxes = get_sub_field('module_boxes');// acf repeater field
$module_number = get_sub_field('module_number');// acf text field
$module_title = get_sub_field('module_title');// acf text field
$module_description = get_sub_field('module_description');// acf textarea field
?>

<section class="feature-modules layout-padding pt-50 pb-50 pt-lg-120 pb-lg-120" style="background-color: <?php echo $module_bg; ?>">
        <div class="section-header">
              <?php if ($section_tagline): ?>
                <div class="section-tagline text-tagline">
                    <?php echo esc_html($section_tagline); ?>
                </div>
                <?php endif; ?>
                 <?php if ($section_title): ?>
                    <div class="section-title">
                       <h2><?php echo esc_html($section_title); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
        <div class="module-boxes">
            <?php foreach ($module_boxes as $module): ?>
                <div class="module-box">
                    <?php if ($module['module_number']): ?>
                        <div class="module-number">
                           <span><?php echo esc_html($module['module_number']); ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if ($module['module_title']): ?>
                        <div class="module-title">
                            <h4><?php echo esc_html($module['module_title']); ?></h4>
                        </div>
                    <?php endif; ?>
                    <?php if ($module['module_description']): ?>
                        <div class="module-description">
                           <p><?php echo esc_html($module['module_description']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
</section>
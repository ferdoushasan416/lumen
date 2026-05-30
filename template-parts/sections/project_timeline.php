<?php 
$timeline_bg = get_sub_field('timeline_bg');// acf color picker field
$section_title = get_sub_field('section_title');// acf text field
$project_timeline_boxes = get_sub_field('project_timeline_boxes');// acf repeater field

?>


<section class="project-timeline layout-padding pt-50 pb-50 pt-lg-80 pb-lg-80 mt-50 mt-lg-80" style="background-color: <?php echo $timeline_bg; ?>">
      <div class="section-heading">
            <h2><?php echo esc_html($section_title); ?></h2>
       </div>
        <div class="project-timeline-content">
            <?php if( $project_timeline_boxes ): ?>
                <?php foreach( $project_timeline_boxes as $box ): ?>
                    <div class="project-timeline-box">
                        <?php if( $box['step_number'] ): ?>
                            <div class="project-timeline-number">
                               <h3><?php echo esc_html($box['step_number']); ?></h3>
                            </div>
                        <?php endif; ?>
                        <?php if( $box['step_title'] ): ?>
                            <div class="project-timeline-box-title">
                                 <h5><?php echo esc_html($box['step_title']); ?></h5>
                            </div>
                        <?php endif; ?>
                        <?php if( $box['step_description'] ): ?>
                            <div class="project-timeline-box-description">
                                <p><?php echo esc_html($box['step_description']); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
</section>
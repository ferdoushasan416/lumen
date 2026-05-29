<?php 
$media_position = get_sub_field('media_position');// acf button group field
$media_type = get_sub_field('media_type');// acf button group field
$media_tagline = get_sub_field('media_tagline');// acf text field
$section_title = get_sub_field('section_title');// acf text field
$section_description = get_sub_field('section_description');// acf wysiwyg field
$media_btn_1 = get_sub_field('media_btn_1');// acf button field
$media_btn_2 = get_sub_field('media_btn_2');// acf button field
$smart_media_lists = get_sub_field('smart_media_lists');// acf repeater field

$image = get_sub_field('image');// acf group field

$image_type = $image ['image_type']; // button group field with option single and gallery
$single_image = $image['single_image']; // image field type with array output
$gallery_images = $image['gallery_images']; // gallery field type with array output
$media_video = get_sub_field ('media_video');// acf file field type with array output



if($media_position === 'left') {
    $media_position_class = 'media-left';
}else {
   $media_position_class = 'media-right';
}

?>


<section class="smart-media-section layout-padding pt-50 pb-50 pt-lg-120 pb-lg-120">
    <div class="smart-media-grid <?php echo $media_position_class; ?>">
        <div class="smart-section-content">
            <?php if($media_tagline):?>
                <div class="media-tagline text-tagline">
                    <span><?php echo esc_html($media_tagline); ?></span>
                </div>
            <?php endif;?>

            <?php if($section_title):?>
                <div class="section-title">
                    <h2><?php echo esc_html($section_title); ?></h2>
                </div>
            <?php endif;?>

            <?php if($section_description):?>
                <div class="section-description">
                   <p><?php echo esc_html($section_description); ?></p>
                </div>
            <?php endif;?>
            
            <?php if($smart_media_lists): ?>
                <div class="smart-media-list">
                    <ul>
                        <?php foreach($smart_media_lists as $list_item) { ?>          
                            
                            <li>
                                <?php echo esc_html($list_item['smart_media_list']); ?>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
            <?php endif; ?>
            
         
            <div class="smart-section-btns">
                <?php if( $media_btn_1 ) {
                    $btn_url    = $media_btn_1['url'];
                    $btn_title  = $media_btn_1['title'];
                    $btn_target = $media_btn_1['target'] ? $media_btn_1['target'] : '_self';
                 } ?>
            
                 <a href="<?php echo esc_url($btn_url); ?>" target="<?php echo esc_attr($btn_target); ?>" 
                    class="site-btn btn-orange">
                       <span class="btn-text"><?php echo esc_html($btn_title); ?></span>
                </a>

                 <?php if( $media_btn_2 ) {
                    $btn_url    = $media_btn_2['url'];
                    $btn_title  = $media_btn_2['title'];
                    $btn_target = $media_btn_2['target'] ? $media_btn_2['target'] : '_self';
                 } ?>
            
                 <a href="<?php echo esc_url($btn_url); ?>" target="<?php echo esc_attr($btn_target); ?>" 
                    class="site-btn btn-transparent">
                       <span class="btn-text"><?php echo esc_html($btn_title); ?></span>
                </a>
            </div>
        </div>
        <div class="smart-section-media">

            <?php if($media_type === 'image'):?>

                <?php if($image_type === 'single'):?>
                    <?php if($single_image): ?>
                    <div class="single-image media">
                        <img src="<?php echo esc_url($single_image['url']); ?>" alt="<?php echo esc_attr($single_image['alt']); ?>">
                    </div>
                <?php endif;?>   

                <?php elseif($image_type === 'gallery'):?>   
                <div class="gallery-images media column-count-<?php echo esc_attr(count($gallery_images));?>">
                    <?php if($gallery_images): ?>
                            <?php foreach( $gallery_images as $gallery_image ) : ?>
                                <div class="gallery-image">
                                   <img src="<?php echo esc_url($gallery_image['url']); ?>" alt="<?php echo esc_attr($gallery_image['alt']); ?>">
                                </div>
                            <?php endforeach; ?>
                        <?php endif;?>   
                </div>
                <?php endif;?>
            
                <?php elseif($media_type === 'video'): ?>
                <?php if($media_video): ?>
                        <video controls>
                            <source src="<?php echo esc_url($media_video['url']); ?>" type="<?php echo esc_attr($media_video['mime-type']); ?>">
                        </video>
                <?php endif; ?>

            <?php endif;?>      
        </div>
    </div>
</section>
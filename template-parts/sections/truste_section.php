<?php 
$trusted_title = get_sub_field('trusted_title');// acf text field
$trusted_brands = get_sub_field('trusted_brands');// acf repeater field
$trusted_brand_name = get_sub_field('trusted_brand_name');// acf text field
?>

<section class="trusted-section layout-padding pt-50 pb-50">
    <div class="container">
        <?php if($trusted_title ): ?>
            <div class="trusted-title text-tagline">
                <span><?php echo $trusted_title; ?></span>
            </div>
        <?php endif; ?>
        <div class="trusted-brands">
            <?php foreach($trusted_brands as $brand): ?>
                <?php $trusted_brand_name = $brand['trusted_brand_name']; ?>
                <div class="trusted-brand">
                    <span><?php echo $trusted_brand_name; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
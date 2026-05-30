<?php
$eyebrow      = get_sub_field('eyebrow');//acf text field
$headline     = get_sub_field('headline');//acf text field
$button_label = get_sub_field('button_label');//acf text field
$button_url   = get_sub_field('button_url');//acf url field
$cards        = get_sub_field('cards');//acf repeater field 

$stat_colors = array(
    'orange' => '#c8713a',
    'teal'   => '#2ab894',
    'gold'   => '#c89a2a',
);
?>

<section class="cs-section">
    <div class="cs-wrap">
        <div class="cs-header">
            <div>
                <?php if( $eyebrow ): ?>
                    <p class="cs-eyebrow"><?php echo esc_html($eyebrow); ?></p>
                <?php endif; ?>
                <?php if( $headline ): ?>
                    <h2 class="cs-headline"><?php echo esc_html($headline); ?></h2>
                <?php endif; ?>
            </div>
            <?php if( $button_label && $button_url ): ?>
                <a href="<?php echo esc_url($button_url); ?>" class="cs-btn">
                    <?php echo esc_html($button_label); ?> →
                </a>
            <?php endif; ?>
        </div>

        <?php if( $cards ): ?>
        <div class="cs-grid">
            <?php foreach( $cards as $card ):
                $color_key = $card['stat_color'] ?? 'orange';
                $stat_color = $stat_colors[$color_key];
                $image = $card['card_image'];
            ?>
            <a href="<?php echo esc_url($card['card_link']); ?>" class="cs-card">
                <div class="cs-img">
                    <?php if( $image ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endif; ?>
                </div>
                <div class="cs-body">
                    <div class="cs-meta">
                        <span class="cs-company"><?php echo esc_html($card['company']); ?></span>
                        <span class="cs-industry"><?php echo esc_html($card['industry']); ?></span>
                    </div>
                    <p class="cs-title"><?php echo esc_html($card['card_title']); ?></p>
                    <hr class="cs-divider">
                    <div class="cs-stat">
                        <span class="cs-stat-num" style="color: <?php echo $stat_color; ?>">
                            <?php echo esc_html($card['stat_number']); ?>
                        </span>
                        <span class="cs-stat-label"><?php echo esc_html($card['stat_label']); ?></span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
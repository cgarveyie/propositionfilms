<?php
/**
 * The template for displaying centered title section
 *
 * @package WordPress
 * @subpackage Struck
 * @since Struck 1.0
 */

// Check for section or slide
$tw_section = $slidestuff ? $slidestuff : $tw_row; ?>

<div class="section-wrapper">
    <div class="section-entry">
        <div class="container text-image-wrapper">
            <div class="col-md-12 text-cell">

                <?php if ( $tw_section['content'] ) : ?>
                    <div class="<?php echo sanitize_html_class( $tw_section['animations'] ); ?> content">
                        <?php echo apply_filters( 'the_content', $tw_section['content'] ); // run through the_content filter ?>
                    </div>
                <?php endif; ?>

                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
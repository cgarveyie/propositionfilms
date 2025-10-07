<?php
/**
 * The template for sanitizing and displaying the Slide tag.
 *
 * @package WordPress
 * @subpackage Struck
 * @since Struck 1.0
 */ 

/**
 * Prepare Slide attributes and sanitize on output
 */
echo '<div ';

/**
 * Slide ids
 */
if ( isset( $slidestuff['ids'] ) && is_array( $slidestuff['ids'] ) ) :

    $numItems = count( $slidestuff['ids'] );
    $i = 0;

    // start id attribute
    echo 'id="';

    foreach ( $slidestuff['ids'] as $id ) :

        echo sanitize_html_class( $id );

        // add space if not the last one
        if ( ++$i < $numItems ) {
            echo ' ';      
        }

    endforeach;

    // end id attribute
    echo '" ';
endif;

/**
 * Slide classes
 */
if ( isset( $slidestuff['classes'] ) && is_array( $slidestuff['classes'] ) ) :

    $numItems = count( $slidestuff['classes'] );
    $i = 0;

    // start class attribute
    echo 'class="';

    foreach ( $slidestuff['classes'] as $class ) :

        echo sanitize_html_class( $class );

        // add space if not the last one
        if ( ++$i < $numItems ) {
            echo ' ';      
        }

    endforeach;

    // end class attribute
    echo '" ';
endif;

/**
 * Slide data-attributes
 */
if ( isset( $slidestuff['data_attributes'] ) && is_array( $slidestuff['data_attributes'] ) ) :

    foreach ( $slidestuff['data_attributes'] as $attribute => $value ) :
        if ( $value !== false ) {
            echo esc_attr( $attribute ) . '="' . esc_attr( $value ) . '" ';
        }
    endforeach;

endif;

/**
 * Slide styles
 */
if ( isset( $slidestuff['inline_section_styles'] ) ) :
    tw_inline_style( array( 
        'styles' => $slidestuff['inline_section_styles'] 
    ) );
endif;

// end slide tag
echo '>'; 
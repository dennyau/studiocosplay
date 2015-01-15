<?php
/*
 * Sanitizing functions reused by customizer controls
 */

function customizer_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function customizer_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

// sanitize_hex_color is a default WP function

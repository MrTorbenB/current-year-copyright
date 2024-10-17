<?php
/*
Plugin Name: Current Year Shortcode
Plugin URI: https://torbenb.info/download/
Description: Zeigt das aktuelle Jahr mit dem Shortcode [current_year] an, ideal für dynamische Copyright-Hinweise.
Version: 1.0
Author: TorbenB
Author URI: https://torbenb.info/
*/

// Funktion, um das aktuelle Jahr zurückzugeben
function current_year_shortcode() {
    return date('Y'); // Holt das aktuelle Jahr im YYYY-Format
}

// Shortcode registrieren
add_shortcode('current_year', 'current_year_shortcode');

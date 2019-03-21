<?php
/*
*Plugin Name: Menzer og Kristensen kontakt form
*Description: Menzer og Kristensen kontakt form
*Version: 0.1
*Author: Sebastian, Lasse og Martin
*License: GPL2
*/

function my_form()
{
    $content = '';
    
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">+</div>';
    $content .= '<div class="promotion-header">';
    $content .= '<h1 id="promotion-header-title">Bestil vores gratis inspirationskatalog</h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '<h2 id="promotion-body-h2">Gratis inspiration til nybyg</h2>';
    $content .= '<p id="promotion-body-text">
                        Sætter du pris på det unikke og ønsker du at have en bolig som ingen andre har? Men mangler du inspiration eller ønsker du blot at udvide din viden for, hvad der er muligt? Få inspiration i vores katalog allerede i dag.

                    </p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" name="username" id="username" placeholder="Navn..." required>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Email..." required>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" name="address" id="address" placeholder="Addresse..." required>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" name="phone" id="phone" placeholder="Telefonnummer..." required>';
    $content .= '</div>';
    $content .= '<div id="checkbox">';
    $content .= '<input type="checkbox" name="checkbox1"> Jeg ønsker også at modtage kataloget med posten<br>';
    $content .= '<input type="checkbox" name="checkbox2"> Ønsker hjælp til at købe byggegrund<br>';
    $content .= '<input type="checkbox" name="checkbox3" required> Ved bestilling af Menzer&Kristensens katalog giver jeg samtidig tilladelse til, at Menzer&Kristensen må kontakte mig vedrørende byggeri af hus, design og indretning via email eller telefon. Og at jeg ved at bruge denne formular accepterer, at Menzer&Kristensen opbevarer og håndterer mine data i henhold til GDPR.<br>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" value="SEND MIG INSPIRATION" name="submitBtn" id="submitBtn">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
}

    add_shortcode('show_form_plugin', 'my_form');

    // Register stylesheet with the name - "register_plugin_styles
    add_action('wp_enqueue_scripts', 'register_plugin_styles');


    function register_plugin_styles() {
    wp_register_style('form_plugin_style', plugins_url('mogk-form/css/style.css'));
    wp_enqueue_style('form_plugin_style');
    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    //wp_enqueue_script('Customjquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1', true);
    wp_enqueue_script('Customscript', plugins_url('mogk-form/js/script.js'), array('jquery'), 'null', true);

}


?>
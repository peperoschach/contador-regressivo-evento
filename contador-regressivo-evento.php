<?php
/*
Plugin Name: Contador Regressivo de Evento
Description: Adiciona um contador regressivo para data de eventos no site.
Version: 1.0
Author: Luiz Felipe Massaneiro
*/

register_activation_hook(__FILE__, 'registrar_opcoes_plugin');

// Incluir arquivos necessários
include_once(plugin_dir_path(__FILE__) . 'inc/helpers.php');

if (is_admin()) {
    include_once(plugin_dir_path(__FILE__) . 'inc/admin/admin-page.php');
} else {
    include_once(plugin_dir_path(__FILE__) . 'inc/public/front-end-functions.php');
}

// Adiciona scripts e estilos
function adicionar_recursos() {
    wp_enqueue_style('contador-estilos', plugin_dir_url(__FILE__) . 'css/contador-estilos.css');
    wp_enqueue_script('contador-scripts', plugin_dir_url(__FILE__) . 'js/contador-scripts.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'adicionar_recursos');

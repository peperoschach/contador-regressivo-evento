<?php

// Função para exibir o contador regressivo
function exibir_contador() {
    $data_evento = get_option('data_evento');
    $hora_evento = get_option('hora_evento');
    ?>
    <div id="contador-data" style="display:none;"><?php echo $data_evento; ?></div>
    <div id="contador-hora" style="display:none;"><?php echo $hora_evento; ?></div>
<?php

    if (empty($data_evento) || empty($hora_evento)) {
        echo '<p>Por favor, configure a data e hora do evento.</p>';
        return;
    }

    $data_evento_completa = $data_evento . 'T' . $hora_evento;
    $data_evento_timestamp = strtotime($data_evento_completa);

    if (time() >= $data_evento_timestamp) {
        echo '<p>O evento já ocorreu.</p>';
        return;
    }

    $agora = current_time('timestamp');
    $diferenca = $data_evento_timestamp - $agora;

    $dias = floor($diferenca / (60 * 60 * 24));
    $horas = floor(($diferenca % (60 * 60 * 24)) / (60 * 60));
    $minutos = floor(($diferenca % (60 * 60)) / 60);
    $segundos = $diferenca % 60;

    echo '<div id="contador">';
    echo '<p>' . $dias . ' dias ' . $horas . ' horas ' . $minutos . ' minutos ' . $segundos . ' segundos </p>';
    echo '</div>';
}

// Enfileira o script JavaScript para atualizar o contador dinamicamente
function enfileirar_scripts_contador() {
    wp_enqueue_script('contador-scripts', plugin_dir_url(__FILE__) . '../../js/contador-scripts.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enfileirar_scripts_contador');

// Adiciona a função ao shortcode [contador_evento]
add_shortcode('contador_evento', 'exibir_contador');

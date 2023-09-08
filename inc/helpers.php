<?php
/**
 * Função para calcular o tempo restante até o evento.
 *
 * @return array Retorna um array associativo com os valores de dias, horas, minutos e segundos.
 */
function calcular_tempo_restante() {
    $data_evento = get_option('data_evento');
    $hora_evento = get_option('hora_evento');

    if (empty($data_evento) || empty($hora_evento)) {
        return array(
            'dias' => 0,
            'horas' => 0,
            'minutos' => 0,
            'segundos' => 0
        );
    }

    $data_evento_completa = $data_evento . 'T' . $hora_evento;
    $data_evento_timestamp = strtotime($data_evento_completa);

    $agora = current_time('timestamp');
    $diferenca = $data_evento_timestamp - $agora;

    if ($diferenca < 0) {
        return array(
            'dias' => 0,
            'horas' => 0,
            'minutos' => 0,
            'segundos' => 0
        );
    }

    $dias = floor($diferenca / (60 * 60 * 24));
    $horas = floor(($diferenca % (60 * 60 * 24)) / (60 * 60));
    $minutos = floor(($diferenca % (60 * 60)) / 60);
    $segundos = $diferenca % 60;

    return array(
        'dias' => $dias,
        'horas' => $horas,
        'minutos' => $minutos,
        'segundos' => $segundos
    );
}

/**
 * Função para obter o link personalizado do botão.
 *
 * @return string Retorna o link personalizado do botão.
 */
function obter_link_personalizado() {
    return get_option('link_personalizado');
}

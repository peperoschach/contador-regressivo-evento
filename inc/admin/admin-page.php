<?php

function registrar_opcoes_plugin() {
    register_setting('contador_regressivo_evento_opcoes', 'data_evento');
    register_setting('contador_regressivo_evento_opcoes', 'hora_evento');
}

function adicionar_pagina_opcoes() {
    add_options_page('Opções do Plugin', 'Contador Regressivo Evento', 'manage_options', 'contador_regressivo_evento_opcoes', 'pagina_opcoes');
}

function pagina_opcoes() {
    ?>
    <div class="wrap">
        <h1>Opções do Meu Plugin</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('contador_regressivo_evento_opcoes');
            do_settings_sections('contador_regressivo_evento_opcoes');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Data do Evento</th>
                    <td><input type="date" name="data_evento" value="<?php echo esc_attr(get_option('data_evento')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Hora do Evento</th>
                    <td><input type="time" name="hora_evento" value="<?php echo esc_attr(get_option('hora_evento')); ?>" /></td>
                </tr>
            </table>
            <input type="submit" class="button button-primary" value="Salvar Alterações">
        </form>
    </div>
    <?php
}

add_action('admin_init', 'registrar_opcoes_plugin');
add_action('admin_menu', 'adicionar_pagina_opcoes');

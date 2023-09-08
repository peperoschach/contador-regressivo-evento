(function() {
    function atualizarContador() {
        var dataEvento = document.getElementById('contador-data').textContent;
        var horaEvento = document.getElementById('contador-hora').textContent;
        var dataCompleta = dataEvento + 'T' + horaEvento;
        var dataEventoTimestamp = new Date(dataCompleta).getTime();
        var agora = new Date().getTime();
        var diferenca = dataEventoTimestamp - agora;

        var segundos = Math.floor((diferenca % (1000 * 60)) / 1000);
        var minutos = Math.floor((diferenca % (1000 * 60 * 60)) / (1000 * 60));
        var horas = Math.floor((diferenca % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var dias = Math.floor(diferenca / (1000 * 60 * 60 * 24));

        document.getElementById('contador').innerHTML = dias + ' dias ' + horas + ' horas ' + minutos + ' minutos ' + segundos + ' segundos ';
    }

    setInterval(atualizarContador, 1000); // Atualiza o contador a cada segundo
})();

# Plugin de Contador Regressivo para WordPress

Este plugin permite a adição de um contador regressivo em seu site WordPress para eventos especiais, como lançamentos de produtos, ofertas temporárias, entre outros.

## Instalação

1. Faça o download do plugin no formato .zip.
2. No painel administrativo do seu site WordPress, vá até "Plugins" > "Adicionar Novo".
3. Clique em "Enviar Plugin" e selecione o arquivo .zip que você baixou.
4. Após o upload, clique em "Ativar Plugin".

## Configuração

1. No painel administrativo, vá até "Configurações" > "Contador Regressivo Evento".
2. Preencha a "Data do Evento" e "Hora do Evento".
3. Opcional: Adicione um link personalizado que será exibido quando o evento ocorrer.
4. Clique em "Salvar Alterações".

## Como Adicionar o Contador no seu Site

### Usando um Shortcode

Você pode adicionar o contador em qualquer página ou post usando o shortcode `[contador_evento]`.

### Integrando ao Seu Tema WordPress

1. Abra o arquivo onde deseja exibir o contador.
2. Insira o seguinte código PHP:

```php
<?php echo do_shortcode('[contador_evento]'); ?>
```

## Estilizando o Contador (Opcional)

Para personalizar o estilo do contador, você pode adicionar suas próprias regras CSS no arquivo de estilo do seu tema WordPress ou em um plugin de personalização.

## Boas Práticas

- Mantenha sempre uma cópia de segurança do seu site antes de instalar novos plugins ou fazer modificações importantes.
- Mantenha o WordPress e seus plugins atualizados para garantir a segurança e o desempenho do site.
- Evite fazer modificações diretamente nos arquivos principais do tema. Use um tema filho para personalizações.
- Verifique se o tema em uso é compatível com os plugins que você está instalando.

**Observação**: Este plugin foi desenvolvido até a data de corte em setembro de 2021 e pode requerer ajustes em futuras atualizações do WordPress.


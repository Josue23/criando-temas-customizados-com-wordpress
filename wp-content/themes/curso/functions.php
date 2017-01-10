<?php

function carrega_scripts() {
    // wp_enqueue_style carrega (enfileira) as folhas de estilo
    // 1º argumento: ('template')
    // 2º argumento: get_template_directory_uri (caminho até o arquivo template)
    //      '/css/template.css' caminho do template
    // 3º argumento: se a folha de estilo depende de outro arquivo
    //      - se alguma outra folha de estilo precisa ser carrehada antes de carregar o template.css
    //      - se existir a gente coloca dentro do array()
    // 4º argumento: versão, neste caso a versão é (1.0)
    // 5º argumento: tipo de mídia ('all') todos os tipos de mídias
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}

// hooks (ganchos)
// add_action fala qual a ação que o WordPress vai realizar neste momento, neste hook
// a função que vamos enganchar neste momento é 'carrega_scripts'
// add_action adiciona uma ação dentro da execução do wordpress
// assim que  página wordpress for carregada
//      um dos momentos de execução vai se chamar wp_enqueue_scripts, é cmo se fosse uma isca
//      joga o anzol (hook) chamado carrega_scripts
//      a função carrega_scripts vai enganchar no wp_enqueue_scripts
//      ultimo passo é criar a função <?php wp_head();  no header.php
//      verifico em http://0.0.0.0:8080/wp-admin/themes.php
//      depois em http://0.0.0.0:8080/
add_action('wp_enqueue_scripts', 'carrega_scripts');
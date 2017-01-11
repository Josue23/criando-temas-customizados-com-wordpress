<?php

function carrega_scripts() {
    // wp_enqueue_style carrega (enfileira) as folhas de estilo
    // 1º argumento: ('template')
    // 2º argumento: get_template_directory_uri (caminho até o arquivo template.css)
    //      '/css/template.css' caminho do template
    // 3º argumento: se a folha de estilo depende de outro arquivo
    //      - se alguma outra folha de estilo precisa ser carrehada antes de carregar o template.css
    //      - se existir a gente coloca dentro do array()
    // 4º argumento: versão, neste caso a versão é (1.0)
    // 5º argumento: tipo de mídia ('all') todos os tipos de mídias
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');


    // 1º argumento: identificador ('template')
    // 2º argumento: get_template_directory_uri (caminho até o arquivo template.js)
    // 3º argumento também é o argumento da dependẽncia, geralmente os scripts dependem do jquery
    // null, não vai ter versão
    // true, carrega o template.js no final da página, acima do </body>
    wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), null, true);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
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
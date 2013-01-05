//adicionei estas linhas, para chamar o controller pages, poderá ser chamado por dois modos : /pagina/ ou /  
  Router::connect('/pagina/*', array('controller' => 'pages', 'action' => 'display'));
  Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));

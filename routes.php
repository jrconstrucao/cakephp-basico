//adicionei estas linhas  
  Router::connect('/pagina/*', array('controller' => 'pages', 'action' => 'display'));
  Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));

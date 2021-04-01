<?php

require __DIR__ . '/vendor/autoload.php';

use   \App\Entidy\Produto;
use    \App\Db\Pagination;
use     \App\Session\Login;


define('TITLE', 'Caixa');
define('BRAND', 'Movimentação Finaceira ');

Login::requireLogin();

// USUARIO-LOGADO

$usuariologado = Login::getUsuarioLogado();

$usuario = $usuariologado['nome'];

$buscar = filter_input(INPUT_GET, 'buscar', FILTER_SANITIZE_STRING);

$condicoes = [
  strlen($buscar) ? 'p.nome LIKE "%' . str_replace(' ', '%', $buscar) . '%" 
                       or 
                       p.codigo LIKE "%' . str_replace(' ', '%', $buscar) . '%"
                       or 
                       c.nome LIKE "%' . str_replace(' ', '%', $buscar) . '%"
                       or 
                       p.barra LIKE "%' . str_replace(' ', '%', $buscar) . '%"
                       or 
                       p.data LIKE "%' . str_replace(' ', '%', $buscar) . '%"' : null
];

$condicoes = array_filter($condicoes);

$where = implode(' AND ', $condicoes);

$qtd = Produto::qtdCount($where);

$pagination = new Pagination($qtd, $_GET['pagina'] ?? 1, 100);

$produtos = Produto::getRelacinadas($where, 'nome ASC', $pagination->getLimit());


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/top.php';
include __DIR__ . '/includes/menu.php';
include __DIR__ . '/includes/pdv/pdv-form.php';
include __DIR__ . '/includes/footer.php';

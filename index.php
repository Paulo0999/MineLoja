<?php
require './lib/autoload.php';

$smarty = new Template();



$smarty->assign('H2', 'paulo');
$smarty->assign('GET_TEMA', Rotas::get_siteTEMA());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_siteHOME());
$smarty->assign('PAG_CLIENTE_CONTA', Rotas::pag_ClienteConta());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_contato());


//Rotas::get_Pagina();

$dados = new Conexao();

//$dados->ExecSQL("select * from produtos");

//echo $dados->TotalRegistros();

//while ($lista = $dados->ListarDados()):

 // echo $lista['cate_nome']. '<hr>';

//endwhile;



//echo '<pre>';
//var_dump($dados);
//echo '</pre>';
//echo Rotas:: get_siteTEMA();


//echo $;

$smarty->display('index.tpl');




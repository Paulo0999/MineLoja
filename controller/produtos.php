
<?php

$smarty = new Template(); 
$produtos = new Produtos();

$produtos->GetProdutos();

$smarty->assign('PRO',$produtos->GetItens());
$smarty->assign('URL', Rotas::get_siteHOME());

echo Rotas::get_ImageURL();

$smarty->display('produtos.tpl');

//echo '<pre>';
//var_dump($produtos->GetItens());
//echo '</pre>';
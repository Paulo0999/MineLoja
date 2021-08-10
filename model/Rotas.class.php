<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rotas
 *
 * @author pprod
 */
class Rotas {
    
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

//parametros da url
    public static $pag;
    
    
    static function get_Pagina(){
        if(isset($_GET['pag'])):
            $pagina = $_GET['pag'];
            
            self::$pag = explode('/',$pagina);
            
            $barra = DIRECTORY_SEPARATOR;
        
            $pagina = self::$pasta_controller . $barra . self::$pag[0] . '.php';
            //$pagina = 'controller'.$barra .$_GET['pag']. '.php';
            
                if(file_exists($pagina)):
                    
                    include $pagina;
                else:
                    include 'erro.php';
                endif;
                
                else:
                    
                
        endif;
    }
     //static function ImageLink($img,$largura,$altura){
      // $imagem= self::get_ImageURL().'thumb.php?src='.$img.'&w='.$largura.'&h='.$altura.'&zc=1';
        
       // return $imagem;
    //}
    
    //url home do site
    
    static function get_siteHOME(){
        return Config::SITE_URL . '/' .Config::SITE_PASTA;
        
    }
    //=============
    static function get_siteRAIZ() {
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }
    //============
    static function get_siteTEMA() {
        return self::get_siteHOME(). '/' .self::$pasta_view;
    }
    //============
    static function pag_Carrinho() {
        return self::get_siteHOME() . '/carrinho';
    }
     //============
    static function pag_CarrinhoAlterar() {
        return self::get_siteHOME() . '/carrinho_alterar';
    }
    //============
     static function pag_Produtos() {
        return self::get_siteHOME() . '/produtos';
    }
    //============
      static function pag_ProdutosInfo() {
        return self::get_siteHOME() . '/produtos_info';
    }
    //============
     static function pag_Login() {
        return self::get_siteHOME() . '/login';
    }
    //============
    static function pag_ClienteRecovery() {
        return self::get_siteHOME() . '/cliente_recovery';
    }

    //============
    static function pag_ClienteConta() {
        return self::get_siteHOME() . '/clientes_minhaconta';
    }
    //============
    static function pag_PedidoConfirmar() {
        return self::get_siteHOME() . '/pedido_confirmar';
    }
    //============
    static function pag_PedidoFinalizar() {
        return self::get_siteHOME() . '/pedido_finalizar';
    }
    //============
    static function pag_Contato() {
        return self::get_siteHOME() . '/contato';
    }
    //============
    static function get_ImagePasta(){
        return 'media/images/';
    }
    //============
    static function get_ImageURL(){
        return self::get_siteHOME() . '/' . self::get_ImagePasta();
    }


}

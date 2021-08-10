<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produtos
 *
 * @author pprod
 */
class Produtos extends Conexao{
    function __construct() {
        parent::__construct();
    }
    function GetProdutos(){
        $query = "SELECT * FROM produtos p INNER JOIN categorias c ON p.pro_categoria = c.cate_id";
        $this->ExecSQL($query);
        
      //$sql = "select * from produtos";
      
      $this->GetLista();
    }   
    function GetLista(){
        $i = 1;
        while ($lista = $this->ListarDados()):
            
        $this->itens[$i] = array(
            'pro_id'=> $lista['pro_id'],
            'pro_categoria'=> $lista['pro_categoria'],
            'pro_nome'=> $lista['pro_nome'],
            'pro_desc'=> $lista['pro_desc'],
            'pro_peso'=> $lista['pro_peso'],
            'pro_valor'=> $lista['pro_valor'],
            'pro_altura'=> $lista['pro_altura'],
            'pro_largura'=> $lista['pro_largura'],
            'pro_comprimento'=> $lista['pro_comprimento'],
            'pro_img'=> $lista['pro_img'],
            'cat_nome'=> $lista['cate_nome'],
            'cat_id'=> $lista['cate_id'],
            
        );
        
        $i++;
        
        endwhile;
        
        
        
        
        
    }
    
       
      
}       
     
       
      
       
       
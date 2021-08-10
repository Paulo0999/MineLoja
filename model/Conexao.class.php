<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author pprod
 */
class Conexao {
    private $host, $user, $senha, $banco;
    protected $obj, $itens = array();
            
    function __construct() {
        $this->host = Config::$BANCO_HOST;
        $this->user = Config::$BANCO_USER;
        $this->senha = Config::$BANCO_SENHA;
        $this->banco = Config::$BANCO_BD;
        
        try {
            if ($this->conectar()== null):
                
            $this->conectar();
                
            endif;
            
        } catch (Exception $e){
                die(exit($e->getMessage() . 'erro no banco'));
            }
    }
    
    function conectar(){
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        
        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->user, $this->senha, $options);
    
        return $link;
     
    }
    
    function ExecSQL($query, array $params = NULL){
        
        $this->obj = $this->conectar()->prepare($query);
        
        return $this->obj->execute();
    }
    
    function ListarDados(){
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }
    
    function TotalRegistros(){
        return $this->obj->rowCount();
    }
    
    function GetItens(){
        return $this->itens;
    }
}

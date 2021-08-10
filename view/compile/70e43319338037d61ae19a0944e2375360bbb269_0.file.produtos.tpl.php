<?php
/* Smarty version 3.1.39, created on 2021-08-09 12:50:55
  from 'C:\xampp\htdocs\loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6111088fde74a2_43441852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e43319338037d61ae19a0944e2375360bbb269' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos.tpl',
      1 => 1628506250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111088fde74a2_43441852 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>lista de produtos</h2>
<hr>
<ul style="list-style: none">
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    
    <li class="col-md-4">
        
        <div class="thumbnail">
            
            <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/media/images/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">
            
            <div class="caption">
                <h5> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                <h3 class="text-center text-danger">R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
                
                <button class="btn btn-success">detalhes</button>
                
            </div>
            
            
            
        </div> 
       
        
    
    </li>
    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</ul>
<?php }
}

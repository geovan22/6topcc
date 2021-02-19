<?php
/* Smarty version 3.1.36, created on 2021-02-10 15:26:56
  from 'C:\xampp\htdocs\6topcc\View\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6023ed30225bf1_35004052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3b6f021ac1e8d36a7219e43164736ecb36b8411' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6topcc\\View\\Home.tpl',
      1 => 1612967110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6023ed30225bf1_35004052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <h1 align="center">INGRESO</h1>
</div>
    
 <div class="row " align="center">
    <form method="post" action="?controller=User&method=BuscarUsuario" class="col s4">
    
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" required="" name="email"/>
          <label for="email">Email</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" required="" name="pass"/>
          <label for="password">Password</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
            <input class="btn waves-effect waves-light" type="submit" name="action"/>  
        </div>
      </div>
      
    </form>
  </div>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

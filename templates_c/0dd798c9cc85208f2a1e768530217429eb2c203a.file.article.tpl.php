<?php /* Smarty version Smarty-3.1.15, created on 2015-11-11 08:40:26
         compiled from "templates\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164885642085d1b9869-10009056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd798c9cc85208f2a1e768530217429eb2c203a' => 
    array (
      0 => 'templates\\article.tpl',
      1 => 1447169624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164885642085d1b9869-10009056',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5642085d305967_97808826',
  'variables' => 
  array (
    '_SESSION' => 0,
    'msg_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642085d305967_97808826')) {function content_5642085d305967_97808826($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['_SESSION']->value['msg_error'])) {?>
<div class="alert alert-error" id="notif">
   <?php echo $_smarty_tpl->tpl_vars['msg_error']->value;?>
       
</div>
<?php }?>

    <form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">

        <div class="clearfix">
            <label for="titre">Titre: </label>
            <div class="input">
                <input type="text" name="titre" id="titre" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="texte">Texte: </label>
            <div class="textaea">
                <textarea name="texte" id="texte"></textarea>
            </div>
        </div>
        <div class="clearfix">
            <label for="image">Image: </label>
            <div class="input">
                <input type="file" name="image" id="image"/>
            </div>
        </div>
        <div class="clearfix">
            <label for="publie">Publié: </label>
            <div class="input">
                <input type="checkbox" name="publie" id="publie" value="1"/>
            </div>
        </div>
        <div class="form-actions">
            <input type="submit" name="envoyer" value="envoyer" class="btn btn-large btn-primary"/>
        </div>
    </form><?php }} ?>

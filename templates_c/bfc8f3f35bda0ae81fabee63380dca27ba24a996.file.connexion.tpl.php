<?php /* Smarty version Smarty-3.1.15, created on 2015-11-17 16:51:52
         compiled from "templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166645641f7c5ba5ef9-44192255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc8f3f35bda0ae81fabee63380dca27ba24a996' => 
    array (
      0 => 'templates\\connexion.tpl',
      1 => 1447238308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166645641f7c5ba5ef9-44192255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5641f7c5cb7661_83919891',
  'variables' => 
  array (
    'bad_connexion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641f7c5cb7661_83919891')) {function content_5641f7c5cb7661_83919891($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['bad_connexion']->value)) {?>  
  <div class="alert alert-error" id="notif">
      <?php echo $_smarty_tpl->tpl_vars['bad_connexion']->value;?>

  </div>
  <?php }?>
  <h2>Connectez vous !</h2>
<form action="connexion.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">

        <div class="clearfix">
            <label for="email">email: </label>
            <div class="input">
                <input type="text" name="email" id="email" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="mot_de_passe">mot de passe: </label>
            <div class="input">
                <input type="password" name="mot_de_passe" id="mot_de_passe"/>
            </div>
        </div>

        <div class="form-actions">
            <input type="submit" name="connexion" value="connexion" class="btn btn-large btn-primary"/>
        </div>
    </form>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-12-18 13:40:10
         compiled from "templates\inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20770564b5b287602e7-14585675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56fec87ad8abd67e025e9b14e4baf41c119b6d90' => 
    array (
      0 => 'templates\\inscription.tpl',
      1 => 1448900498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20770564b5b287602e7-14585675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564b5b28813e34_89828585',
  'variables' => 
  array (
    'bad_inscription' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564b5b28813e34_89828585')) {function content_564b5b28813e34_89828585($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['bad_inscription']->value)) {?>
    <div class="alert alert-error" id="notif">
      <?php echo $_smarty_tpl->tpl_vars['bad_inscription']->value;?>

  </div>
  <?php }?>
    
<form action="inscription.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
    <div class="clearfix">
        <label for="nom">Votre nom: *</label>
        <div class="input">
            <input type="text" name="nom" id="nom" value=""/>
        </div>    
    </div>
    <div class="clearfix">
        <label for="prenom">Votre prénom: *</label>
        <div class="input">
            <input type="text" name="prenom" id="prenom" value=""/>
        </div>    
    </div>    
        <div class="clearfix">
            <label for="email">email: *</label>
            <div class="input">
                <input type="text" name="email" id="email" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="mot_de_passe">mot de passe: *</label>
            <div class="input">
                <input type="password" name="mot_de_passe" id="mot_de_passe"/>
            </div>
        </div>
        
        
        <div class="form-actions">
            <input type="submit" name="inscription" value="inscription" class="btn btn-large btn-primary"/>
        </div>
    </form>
<?php }} ?>

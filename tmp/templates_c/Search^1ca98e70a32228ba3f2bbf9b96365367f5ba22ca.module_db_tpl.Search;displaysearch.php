<?php /* Smarty version Smarty-3.1.12, created on 2016-02-04 11:27:09
         compiled from "module_db_tpl:Search;displaysearch" */ ?>
<?php /*%%SmartyHeaderCode:1827056b3277d169e17-86793981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ca98e70a32228ba3f2bbf9b96365367f5ba22ca' => 
    array (
      0 => 'module_db_tpl:Search;displaysearch',
      1 => 1454571274,
      2 => 'module_db_tpl',
    ),
  ),
  'nocache_hash' => '1827056b3277d169e17-86793981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'startform' => 0,
    'search_actionid' => 0,
    'searchprompt' => 0,
    'searchtext' => 0,
    'hogan' => 0,
    'submittext' => 0,
    'hidden' => 0,
    'endform' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56b3277d17f226_02520157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3277d17f226_02520157')) {function content_56b3277d17f226_02520157($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['startform']->value;?>

<label for="<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput"><?php echo $_smarty_tpl->tpl_vars['searchprompt']->value;?>
:&nbsp;</label><input type="text" class="search-input" id="<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput" name="<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput" size="20" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['searchtext']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['hogan']->value;?>
/>

<input class="search-button" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['submittext']->value;?>
" type="submit" />
<?php if (isset($_smarty_tpl->tpl_vars['hidden']->value)){?><?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['endform']->value;?>
<?php }} ?>
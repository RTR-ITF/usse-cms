<?php /* Smarty version Smarty-3.1.12, created on 2016-02-04 11:27:09
         compiled from "module_file_tpl:MenuManager;minimal_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2565456b3277d64d164-41895029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af57ef73c603d4634de6415d7ac361d99a5334c' => 
    array (
      0 => 'module_file_tpl:MenuManager;minimal_menu.tpl',
      1 => 1248365389,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '2565456b3277d64d164-41895029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'nodelist' => 0,
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56b3277d6a91e6_20121235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3277d6a91e6_20121235')) {function content_56b3277d6a91e6_20121235($_smarty_tpl) {?><?php if (!is_callable('smarty_function_repeat')) include 'C:\\xampp\\htdocs\\projects\\usse\\plugins\\function.repeat.php';
?> 
<?php if ($_smarty_tpl->tpl_vars['count']->value>0){?>
<ul class="clearfix">
<?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value){
$_smarty_tpl->tpl_vars['node']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->depth>$_smarty_tpl->tpl_vars['node']->value->prevdepth){?>
<?php echo smarty_function_repeat(array('string'=>"<ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->depth-$_smarty_tpl->tpl_vars['node']->value->prevdepth),$_smarty_tpl);?>

<?php }elseif($_smarty_tpl->tpl_vars['node']->value->depth<$_smarty_tpl->tpl_vars['node']->value->prevdepth){?>
<?php echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->prevdepth-$_smarty_tpl->tpl_vars['node']->value->depth),$_smarty_tpl);?>

</li>
<?php }elseif($_smarty_tpl->tpl_vars['node']->value->index>0){?></li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['node']->value->current==true){?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
" class="currentpage"<?php if ($_smarty_tpl->tpl_vars['node']->value->target!=''){?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
 </a>

<?php }elseif($_smarty_tpl->tpl_vars['node']->value->parent==true&&$_smarty_tpl->tpl_vars['node']->value->depth==1&&$_smarty_tpl->tpl_vars['node']->value->type!='sectionheader'&&$_smarty_tpl->tpl_vars['node']->value->type!='separator'){?>
<li class="activeparent"> <a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
" class="activeparent"<?php if ($_smarty_tpl->tpl_vars['node']->value->target!=''){?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
 </a>

<?php }elseif($_smarty_tpl->tpl_vars['node']->value->type=='sectionheader'){?>
<li class="sectionheader"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>


<?php }elseif($_smarty_tpl->tpl_vars['node']->value->type=='separator'){?>
<li style="list-style-type: none;"> <hr class="separator" />

<?php }else{ ?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value->target!=''){?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
 </a>

<?php }?>

<?php } ?>

<?php echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->depth-1),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
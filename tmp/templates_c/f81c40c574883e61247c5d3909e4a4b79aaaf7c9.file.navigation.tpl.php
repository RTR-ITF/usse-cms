<?php /* Smarty version Smarty-3.1.12, created on 2016-02-04 11:32:29
         compiled from "C:\xampp\htdocs\projects\usse\admin\themes\OneEleven\templates\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3213856b328bdc1f507-15154720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f81c40c574883e61247c5d3909e4a4b79aaaf7c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\usse\\admin\\themes\\OneEleven\\templates\\navigation.tpl',
      1 => 1343068302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3213856b328bdc1f507-15154720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'depth' => 0,
    'nav' => 0,
    'navitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56b328bdc83b09_30165858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b328bdc83b09_30165858')) {function content_56b328bdc83b09_30165858($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['depth']->value)){?><?php if (isset($_smarty_tpl->tpl_vars['depth'])) {$_smarty_tpl->tpl_vars['depth'] = clone $_smarty_tpl->tpl_vars['depth'];
$_smarty_tpl->tpl_vars['depth']->value = '0'; $_smarty_tpl->tpl_vars['depth']->nocache = null; $_smarty_tpl->tpl_vars['depth']->scope = 0;
} else $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable('0', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['depth']->value=='0'){?><nav class="navigation" id="oe_menu" role="navigation"><div class="box-shadow">&nbsp;</div><ul<?php if ($_smarty_tpl->tpl_vars['depth']->value=='0'){?> id="oe_pagemenu"<?php }?>><?php }?><?php  $_smarty_tpl->tpl_vars['navitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navitem']->key => $_smarty_tpl->tpl_vars['navitem']->value){
$_smarty_tpl->tpl_vars['navitem']->_loop = true;
?><li class="nav<?php if (isset($_smarty_tpl->tpl_vars['navitem']->value['module'])||isset($_smarty_tpl->tpl_vars['navitem']->value['firstmodule'])){?> module<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['navitem']->value['selected'])||(isset($_GET['section'])&&$_GET['section']==mb_strtolower($_smarty_tpl->tpl_vars['navitem']->value['name'], 'UTF-8'))){?> current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navitem']->value['url'];?>
" class="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['navitem']->value['name'], 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['navitem']->value['children'])){?> parent<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['navitem']->value['target'])){?> target="_blank"<?php }?> title="<?php if (!empty($_smarty_tpl->tpl_vars['navitem']->value['description'])){?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['navitem']->value['description']);?>
<?php }else{ ?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['navitem']->value['title']);?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['navitem']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['depth']->value=='0'){?><span class="open-nav" title="<?php echo lang('open');?>
/<?php echo lang('close');?>
 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['navitem']->value['title']);?>
"><?php echo lang('open');?>
/<?php echo lang('close');?>
 <?php echo $_smarty_tpl->tpl_vars['navitem']->value['title'];?>
</span><?php }?><?php if (isset($_smarty_tpl->tpl_vars['navitem']->value['children'])){?><?php if ($_smarty_tpl->tpl_vars['depth']->value=='0'){?><ul><?php }?><?php echo $_smarty_tpl->getSubTemplate (basename($_smarty_tpl->source->filepath), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>$_smarty_tpl->tpl_vars['navitem']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), 0);?>
<?php if ($_smarty_tpl->tpl_vars['depth']->value=='0'){?></ul><?php }?><?php }?></li><?php } ?><?php if ($_smarty_tpl->tpl_vars['depth']->value=='0'){?></ul></nav><?php }?>
<?php }} ?>
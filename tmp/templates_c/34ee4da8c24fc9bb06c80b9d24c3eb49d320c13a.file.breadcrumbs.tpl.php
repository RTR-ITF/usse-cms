<?php /* Smarty version Smarty-3.1.12, created on 2016-02-04 11:32:29
         compiled from "C:\xampp\htdocs\projects\usse\admin\themes\OneEleven\templates\breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:943956b328bda09b19-52479523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34ee4da8c24fc9bb06c80b9d24c3eb49d320c13a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\usse\\admin\\themes\\OneEleven\\templates\\breadcrumbs.tpl',
      1 => 1340269302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '943956b328bda09b19-52479523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'config' => 0,
    'one' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56b328bda42182_55881933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b328bda42182_55881933')) {function content_56b328bda42182_55881933($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['items']->value)){?>
<div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><ul class="cf"><li class="home"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
" title="<?php echo lang('home');?>
"><?php echo lang('home');?>
</a></li><?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['one']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['one']->iteration=0;
 $_smarty_tpl->tpl_vars['one']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
$_smarty_tpl->tpl_vars['one']->_loop = true;
 $_smarty_tpl->tpl_vars['one']->iteration++;
 $_smarty_tpl->tpl_vars['one']->index++;
 $_smarty_tpl->tpl_vars['one']->first = $_smarty_tpl->tpl_vars['one']->index === 0;
 $_smarty_tpl->tpl_vars['one']->last = $_smarty_tpl->tpl_vars['one']->iteration === $_smarty_tpl->tpl_vars['one']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['first'] = $_smarty_tpl->tpl_vars['one']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['last'] = $_smarty_tpl->tpl_vars['one']->last;
?><li<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['last']&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['first']){?> class="current"<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['first']){?> class="first" itemprop="parent"<?php }else{ ?> itemprop="child"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['one']->value['url'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['url'];?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['one']->value['description'])){?><?php echo $_smarty_tpl->tpl_vars['one']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
<?php }?>" itemprop="url"><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
<?php }?></li><?php } ?></ul></div>
<?php }?><?php }} ?>
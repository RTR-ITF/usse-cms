<?php /* Smarty version Smarty-3.1.12, created on 2016-02-04 11:23:42
         compiled from "tpl_body:24" */ ?>
<?php /*%%SmartyHeaderCode:2518056b326ae34d921-00770189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad83cfdd496e0d74150f5e8179bf0ea1e88e3ac2' => 
    array (
      0 => 'tpl_body:24',
      1 => 1454575589,
      2 => 'tpl_body',
    ),
  ),
  'nocache_hash' => '2518056b326ae34d921-00770189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56b326ae37d505_36806185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b326ae37d505_36806185')) {function content_56b326ae37d505_36806185($_smarty_tpl) {?><?php if (!is_callable('smarty_function_metadata')) include 'C:\\xampp\\htdocs\\projects\\usse\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_global_content')) include 'C:\\xampp\\htdocs\\projects\\usse\\plugins\\function.global_content.php';
?><?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

<?php echo smarty_function_global_content(array('name'=>'header'),$_smarty_tpl);?>

<?php echo smarty_function_global_content(array('name'=>'nav-bar'),$_smarty_tpl);?>

<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
<?php echo smarty_function_global_content(array('name'=>'footer'),$_smarty_tpl);?>
<?php }} ?>
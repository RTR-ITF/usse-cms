<?php /* Smarty version Smarty-3.1.12, created on 2016-02-04 11:32:29
         compiled from "C:\xampp\htdocs\projects\usse\admin\themes\OneEleven\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1700956b328bde44495-86406338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05d2d8a282a3c063220b52cc583dd2b6e51bee35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\usse\\admin\\themes\\OneEleven\\templates\\footer.tpl',
      1 => 1353007426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1700956b328bde44495-86406338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'marks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56b328bde5f700_36033195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b328bde5f700_36033195')) {function content_56b328bde5f700_36033195($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_version')) include 'C:\\xampp\\htdocs\\projects\\usse\\plugins\\function.cms_version.php';
if (!is_callable('smarty_function_cms_versionname')) include 'C:\\xampp\\htdocs\\projects\\usse\\plugins\\function.cms_versionname.php';
?><footer id="oe_footer" class="cf"><div class="footer-left"><small class="copyright">Copyright &copy; <a rel="external" href="http://www.cmsmadesimple.org">CMS Made Simple&trade; <?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
 &ldquo;<?php echo smarty_function_cms_versionname(array(),$_smarty_tpl);?>
&rdquo;</a></small></div><?php if (isset($_smarty_tpl->tpl_vars['marks']->value)){?><div class="footer-right cf"><ul class="links"><li><a href="http://docs.cmsmadesimple.org/" rel="external" title="<?php echo lang('documentation');?>
"><?php echo lang('documentation');?>
</a></li><li><a href="http://forum.cmsmadesimple.org/" rel="external" title="<?php echo lang('forums');?>
"><?php echo lang('forums');?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/" rel="external" title="<?php echo lang('about');?>
"><?php echo lang('about');?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/about-us/" rel="external" title="<?php echo lang('team');?>
"><?php echo lang('team');?>
</a></li></ul></div><?php }?></footer><?php }} ?>
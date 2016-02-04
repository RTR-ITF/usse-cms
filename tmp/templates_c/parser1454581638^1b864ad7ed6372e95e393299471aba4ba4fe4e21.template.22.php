<?php /* Smarty version Smarty-3.1.12, created on 2016-02-04 11:27:18
         compiled from "template:22" */ ?>
<?php /*%%SmartyHeaderCode:1142856b3278699abb5-28669176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b864ad7ed6372e95e393299471aba4ba4fe4e21' => 
    array (
      0 => 'template:22',
      1 => 1242204199,
      2 => 'template',
    ),
  ),
  'nocache_hash' => '1142856b3278699abb5-28669176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'canonical' => 0,
    'content_obj' => 0,
    'cms_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56b32786a88985_81867325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b32786a88985_81867325')) {function content_56b32786a88985_81867325($_smarty_tpl) {?><?php if (!is_callable('smarty_function_global_content')) include 'C:\\xampp\\htdocs\\projects\\usse\\plugins\\function.global_content.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



  <head>
<?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
" /><?php }elseif(isset($_smarty_tpl->tpl_vars['content_obj']->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['content_obj']->value->GetURL();?>
" /><?php }?>

<title> | </title>









<?php echo smarty_function_cms_selflink(array('dir'=>"prev",'rellink'=>1),$_smarty_tpl);?>

<?php echo smarty_function_cms_selflink(array('dir'=>"next",'rellink'=>1),$_smarty_tpl);?>



<!--[if IE 6]>
<script type="text/javascript" src="modules/MenuManager/CSSMenu.js"></script>
<![endif]-->





<!--[if IE 6]>
<script type="text/javascript"  src="uploads/NCleanBlue/js/ie6fix.js"></script>
<script type="text/javascript">
 // argument is a CSS selector
 DD_belatedPNG.fix('.sbar-top,.sbar-bottom,.main-top,.main-bottom,#version');
</script>
<style type="text/css">
/* enable background image caching in IE6 */
html {filter:expression(document.execCommand("BackgroundImageCache", false, true));} 
</style>
<![endif]-->


  </head>
  <body>
    <div id="ncleanblue">
      <div id="pagewrapper" class="core-wrap-960 core-center">

        <ul class="accessibility">
          <li></li>
          <li><?php echo smarty_function_anchor(array('anchor'=>'main','title'=>'Skip to content','accesskey'=>'s','text'=>'Skip to content'),$_smarty_tpl);?>
</li>
        </ul>

        <hr class="accessibility" />



        <div id="header" class="util-clearfix">

          <div id="logo" class="core-float-left">
            <?php echo smarty_function_cms_selflink(array('dir'=>"start",'text'=>((string)$_smarty_tpl->tpl_vars['sitename']->value)),$_smarty_tpl);?>

          </div>
          

          <div id="search" class="core-float-right">
            
          </div>

          <span class="util-clearb">&nbsp;</span>
          

          <h2 class="accessibility util-clearb">Navigation</h2>

          <div class="page-menu util-clearfix">
          
          </div>
          <hr class="accessibility util-clearb" />


        </div>



        <div id="content" class="util-clearfix"> 


          <div title="CMS -  - " id="version">
          <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'cms_version', null); ob_start(); ?><?php ob_start();?><?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
<?php echo mb_strtolower(ob_get_clean(), 'UTF-8')?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo preg_replace("/-([a-z]).*/",'',$_smarty_tpl->tpl_vars['cms_version']->value);?>

          </div>



          <div id="bar" class="util-clearfix">

            <div class="breadcrumbs core-float-right">
              
            </div>


            <hr class="accessibility util-clearb" />
          </div>



          <div id="left" class="core-float-left">
            <div class="sbar-top">
              <h2 class="sbar-title">News</h2>
            </div>
            <div class="sbar-main">

              <div id="news">
              
              </div>
              <img class="screen" src="uploads/NCleanBlue/screen-1.6.jpg" width="139" height="142" title="CMS - <?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_cms_versionname(array(),$_smarty_tpl);?>
" alt="CMS - <?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_cms_versionname(array(),$_smarty_tpl);?>
" />
 
            </div>
            <span class="sbar-bottom">&nbsp;</span> 
          </div>



          <div id="main"  class="core-float-right">


            <div class="main-top">
              <div class="print core-float-right">
                
              </div>
            </div> 
            

            <div class="main-main util-clearfix">
              <h1 class="title"><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
            
            </div>
            

            <div class="main-bottom">
              <div class="right49 core-float-right">
              <?php echo smarty_function_anchor(array('anchor'=>'main','text'=>'^&nbsp;&nbsp;Top'),$_smarty_tpl);?>

              </div>
              <div class="left49 core-float-left">
                <span>
                  <?php echo smarty_function_cms_selflink(array('dir'=>"previous",'label'=>"Previous page: "),$_smarty_tpl);?>
&nbsp;

                </span>
                <span>
                  <?php echo smarty_function_cms_selflink(array('dir'=>"next"),$_smarty_tpl);?>
&nbsp;
                </span>
              </div>


              <hr class="accessibility" />
            </div>


          </div>


        </div>


      </div>

      <span class="util-clearb">&nbsp;</span>
      

      <div id="footer-wrapper">
        <div id="footer" class="core-wrap-960">

          <div class="block core-float-left">
            
          </div>
          

          <div class="block core-float-left">
            
          </div>
          

          <div class="block cms core-float-left">
            <?php echo smarty_function_global_content(array('name'=>'footer'),$_smarty_tpl);?>

          </div>
          
          <span class="util-clearb">&nbsp;</span>
        </div>
      </div>

    </div>

  </body>
</html><?php }} ?>
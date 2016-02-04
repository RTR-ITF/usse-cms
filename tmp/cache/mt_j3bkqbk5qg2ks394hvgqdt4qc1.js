
		//Creates a new plugin class and a custom listbox
		tinymce.create('tinymce.plugins.CMSLinkerPlugin', {
		createControl: function(n, cm) {
			switch (n) {
				case 'cmslinker':
					var c = cm.createMenuButton('cmslinker', {
						title : 'CMSMS Linker',
						image : 'http://localhost/projects/usse/modules/MicroTiny/images/cmsmslink.gif',
						icons : false
					});

					c.onRenderMenu.add(function(c, m) {
		
						m.add({title : '1 Home', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Home';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='home'}\">"+sel+"</a>");
						}});
							var mm = m.addMenu({title : '2 How CMSMS Works'});
		
						mm.add({title : '2 How CMSMS Works', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='How CMSMS Works';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='how-cmsms-works'}\">"+sel+"</a>");
						}});
							mm.addSeparator();
		
						mm.add({title : '2.1 Templates and stylesheets', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Templates and stylesheets';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='templates-and-stylesheets'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '2.2 Pages and navigation', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Pages and navigation';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='pages-and-navigation'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '2.3 Content', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Content';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='content_types'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '2.4 Menu Manager', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Menu Manager';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='menu-manager'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '2.5 Extensions', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Extensions';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='extensions'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '2.6 Event Manager', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Event Manager';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='event-manager'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '2.7 Workflow', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Workflow';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='workflow'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '2.8 Where do I get help?', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Where do I get help?';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='where-do-i-get-help'}\">"+sel+"</a>");
						}});
							var mm = m.addMenu({title : '3 Default Templates Explained'});
		
						mm.add({title : '3 Default Templates Explained', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Default Templates Explained';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='default_templates'}\">"+sel+"</a>");
						}});
							mm.addSeparator();
		
						mm.add({title : '3.1 CMSMS tags in the template &#133;', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='CMSMS tags in the templates';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='cmsms_tags'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '3.2 Left simple navigation + 1 &#133;', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Left simple navigation + 1 column';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='navleft'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '3.3 Top simple navigation + le &#133;', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Top simple navigation + left subnavigation + 1 column';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='top_left'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '3.4 CSSMenu top + 2 columns', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='CSSMenu top + 2 columns';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='cssmenu_horizontal'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '3.5 CSSMenu left + 1 column', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='CSSMenu left + 1 column';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='cssmenu_vertical'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '3.6 Minimal template', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Minimal template';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='minimal-template'}\">"+sel+"</a>");
						}});
							var mmm = mm.addMenu({title : '3.7 Higher End'});
		
						mmm.add({title : '3.7 Higher End', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Higher End';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='higher-end'}\">"+sel+"</a>");
						}});
							mmm.addSeparator();
		
						mmm.add({title : '3.7.1 NCleanBlue', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='NCleanBlue';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='ncleanblue'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '3.7.2 ShadowMenu Tab + 2 colum &#133;', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='ShadowMenu Tab + 2 columns';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='shadowmenu-tab-2-columns'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '3.7.3 ShadowMenu left + 1 colu &#133;', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='ShadowMenu left + 1 column';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='shadowmenu-left-1-column'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '3.8 Simplex Theme', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Simplex Theme';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='simplex-theme'}\">"+sel+"</a>");
						}});
							var mm = m.addMenu({title : '4 Default Extensions'});
		
						mm.add({title : '4 Default Extensions', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Default Extensions';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='default-extensions'}\">"+sel+"</a>");
						}});
							mm.addSeparator();
							var mmm = mm.addMenu({title : '4.1 Modules'});
		
						mmm.add({title : '4.1 Modules', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Modules';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='modules'}\">"+sel+"</a>");
						}});
							mmm.addSeparator();
		
						mmm.add({title : '4.1.1 News', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='News';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='news'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '4.1.2 Menu Manager', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Menu Manager';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='menu-manager-2'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '4.1.3 Theme Manager', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Theme Manager';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='theme-manager'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '4.1.4 MicroTiny', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='MicroTiny';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='microtiny'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '4.1.5 Search', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Search';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='search'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '4.1.6 Module Manager', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Module Manager';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='module-manager'}\">"+sel+"</a>");
						}});
							var mmm = mm.addMenu({title : '4.2 Tags'});
		
						mmm.add({title : '4.2 Tags', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Tags';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='tags'}\">"+sel+"</a>");
						}});
							mmm.addSeparator();
		
						mmm.add({title : '4.2.1 Tags in the core', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Tags in the core';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='tags-in-the-core'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '4.2.2 User Defined Tags', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='User Defined Tags';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='user-defined-tags'}\">"+sel+"</a>");
						}});
		
						m.add({title : '5 Contact', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Contact';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='contact'}\">"+sel+"</a>");
						}});
		
						m.add({title : '6 about', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='about';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='about'}\">"+sel+"</a>");
						}});
		
						m.add({title : '7 Careers', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Careers';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='careers'}\">"+sel+"</a>");
						}});
		
						m.add({title : '8 Clients', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Clients';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='clients'}\">"+sel+"</a>");
						}});
		
						m.add({title : '9 News-Events', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='News-Events';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='news-events'}\">"+sel+"</a>");
						}});
		
					});

					// Return the new menu button instance
					return c;
			}

			return null;
		}
		});

		// Register plugin with a short name
		tinymce.PluginManager.add('cmslinker', tinymce.plugins.CMSLinkerPlugin);

		 tinyMCE.init({ 
  
  mode : "exact",
  elements : "mt_content_en",
  body_class : "CMSMSBody",
      content_css : "http://localhost/projects/usse/tmp/cache/stylesheet_combined_9578dd38d0e6ebd61cffad972d2920f2.css",
    
  entity_encoding : "raw",
  button_tile_map : true, 

		
  theme : "advanced",
  skin : "o2k7",
  skin_variant : "black",
  theme_advanced_toolbar_location : "top",
  theme_advanced_toolbar_align : "left",
  visual : true,
	      
  accessibility_warnings : false,

  forced_root_block : '',      			
  fix_list_elements : true,
  verify_html : true,
  verify_css_classes : false,
  
  plugins : "paste,inlinepopups,cmslinker",
  
  paste_auto_cleanup_on_paste : true,
  paste_remove_spans : true,
  paste_remove_styles : true,
  theme_advanced_buttons1 : "undo,|,bold,italic,underline,|,cut,copy,paste,pastetext,removeformat,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,cmslinker,link,unlink,|,formatselect",
  theme_advanced_buttons2 : "",
  theme_advanced_buttons3 : "",
  

  theme_advanced_blockformats : "p,div,h1,h2,h3,h4,h5,h6,blockquote,code",
  document_base_url : "http://localhost/projects/usse/",

  relative_urls : true,
  remove_script_host : true,
  language: "en",
  dialog_type: "modal",
  apply_source_formatting : true  
	 

  ,file_browser_callback : 'CMSMSFilePicker'
  
});
  

function toggleMicroTiny(id) {
  if (!tinyMCE.getInstanceById(id))
    tinyMCE.execCommand('mceAddControl', false, id);
  else
    tinyMCE.execCommand('mceRemoveControl', false, id);
}
	
    
function CMSMSFilePicker (field_name, url, type, win) {
     
  var cmsURL = "http://localhost/projects/usse/admin/moduleinterface.php?mact=MicroTiny,,filepicker,0&_sx_=fb9e2d10&type="+type+"&showtemplate=false";
  
  tinyMCE.activeEditor.windowManager.open({
  
    file : cmsURL,
    title : 'File picker',
    width : '800',
    height : '500',
    resizable : "yes",
    scrollbars : "yes",
    inline : "yes",  
    close_previous : "no"
  
  }, {
    window : win,
    input : field_name
  });
  return false;
}


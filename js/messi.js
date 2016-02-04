/*
 * jQuery Messi Plugin 1.3
 * https://github.com/marcosesperon/jquery-messi
 *
 * Copyright 2012, Marcos Esperón
 * http://marcosesperon.es
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

// Clase principal
function Messi(data, options) {
  
  var _this = this;
  _this.options = jQuery.extend({}, Messi.prototype.options, options || {});
  
  // preparamos el elemento
  _this.messi = jQuery(_this.template);
  _this.setContent(data);
  
    if(_this.options.closeButton) {
      var close = jQuery('<span class="messi-closebtn"></span>');
      close.bind('click', function() {
        _this.hide();
      });
      
      jQuery('.messi-content', this.messi).prepend(close);
      
    };
  
  // ajustamos el ancho
  if(_this.options.width != null) 
	  jQuery('.messi-box', _this.messi).css('width', _this.options.width);
  

  jQuery('.messi-titlebox', _this.messi).remove();
    jQuery('.messi-footbox', this.messi).remove();
  


  
  // activamos la pantalla modal
  _this.modal = (_this.options.modal) ? jQuery('<div class="messi-modal"></div>').css({opacity: _this.options.modalOpacity, width: jQuery(document).width(), height: jQuery(document).height(), 'z-index': _this.options.zIndex + jQuery('.messi').length}).appendTo(document.body) : null;
  
  // mostramos el mensaje
  if(_this.options.show) _this.show();
  
  // controlamos el redimensionamiento de la pantalla
 // jQuery(window).bind('resize', function(){ _this.resize(); });
  
   jQuery('.messi-content', this.messi).bind( "mouseleave", function() {  _this.hide();});
     
  
  // configuramos el cierre automático
  if(_this.options.autoclose != null) {
    setTimeout(function(_this) {
      _this.hide();
    }, _this.options.autoclose, this);
  };
  
  return _this;
  
};

Messi.prototype = {

  options: {
    autoclose: null,                         // autoclose message after 'x' miliseconds, i.e: 5000
    buttons: [],                             // array of buttons, i.e: [{id: 'ok', label: 'OK', val: 'OK'}]
    callback: null,                          // callback function after close message
    center: true,                            // center message on screen
    closeButton: true,                       // show close button in header title (or content if buttons array is empty).
    height: 'auto',                          // content height
    title: null,                             // message title
    titleClass: null,                        // title style: info, warning, success, error
    modal: false,                            // shows message in modal (loads background)
    modalOpacity: .2,                        // modal background opacity
    padding: '10px',                         // content padding
    show: true,                              // show message after load
    unload: true,                            // unload message after hide
    viewport: {top: '0px', left: '0px'},     // if not center message, sets X and Y position
    width: '400px',                          // message width
    zIndex: 99                            // message z-index
  },
  template: '<div class="messi"><div class="messi-box"><div class="messi-wrapper"><div class="messi-titlebox"><span class="messi-title"></span></div><div class="messi-content"></div><div class="messi-footbox"><div class="messi-actions"></div></div></div></div></div>',
  content: '<div></div>',
  visible: false,
    
  setContent: function(data) {
    jQuery('.messi-content', this.messi).css({padding: this.options.padding, height: this.options.height}).empty().append(data);
  },
  
  viewport: function() {
  
    return {
      top: ((jQuery(window).height() - this.messi.height()) / 2) +  jQuery(window).scrollTop() + "px",
      left: ((jQuery(window).width() - this.messi.width()) / 2) + jQuery(window).scrollLeft() + "px"
    };
    
  },
    
  show: function() {

    if(this.visible) return;
    
    if(this.options.modal && this.modal != null) this.modal.show();
    this.messi.appendTo(document.body);
    
    // obtenemos el centro de la pantalla si la opción de centrar está activada
   // if(this.options.center) this.options.viewport = this.viewport(jQuery('.messi-box', this.messi));
    
    this.messi.css({top: this.options.viewport.top, left: this.options.viewport.left, 'z-index': this.options.zIndex + jQuery('.messi').length}).show().animate({opacity: 1}, 400);
    
    // cancelamos el scroll
    //document.documentElement.style.overflow = "hidden";
    
    this.visible = true;
  
  },
  
  hide: function(after) {
    
    if (!this.visible) return;
    var _this = this;
    
    this.messi.animate({opacity: 0}, 200, function() {
      if(_this.options.modal && _this.modal != null) _this.modal.remove();
      _this.messi.css({display: 'none'}).remove();
      // reactivamos el scroll
      //document.documentElement.style.overflow = "visible";
      _this.visible = false;
      if (after) after.call();
      if(_this.options.unload) _this.unload();
    });
    
    return this;
    
  },
  
  resize: function() {
    if(this.options.modal) {
      jQuery('.messi-modal').css({width: jQuery(document).width(), height: jQuery(document).height()});
    };
    if(this.options.center) {
      this.options.viewport = this.viewport(jQuery('.messi-box', this.messi));
      this.messi.css({top: this.options.viewport.top, left: this.options.viewport.left});
    };
  },
  
  toggle: function() {
    this[this.visible ? 'hide' : 'show']();
    return this;
  },
  
  unload: function() {
    if (this.visible) this.hide();
    jQuery('.messi-content', this.messi).unbind( "mouseleave", function() {  _this.hide();});
    this.messi.remove();
  },

};

// llamadas especiales
jQuery.extend(Messi, {

  showdialog: function(data, options) {        
      
      options = jQuery.extend(options || {}, {show: true, unload: true, params: {}});
      
      return new Messi(data, options);
      
  }
  
  });
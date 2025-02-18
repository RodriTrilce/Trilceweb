/*!
 * App.js v1.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

import { Validation } from 'bunnyjs/src/Validation';
import { tns } from 'tiny-slider/src/tiny-slider';
import { Tabs } from './require/tabs';
import VanillaModal from 'vanilla-modal';
import SliderTrilce from './require/slider_trilce';
import AcorditionProposal from './colegio/educational_proposal';
import pollyfill from 'array-from-polyfill';
import BadgerAccordion from './require/badger_accordion';
import SlimSelect from 'slim-select'

window.SlimSelect = SlimSelect;
const ValidationLang = {
  required      : "'{label}' es obligatorio.",
  email         : "'{label}' debe ser una dirección de e-mail válida.",
  maxLength     : "'{label}' debe tener máximo {maxLength} dígitos.",
  minLength     : "'{label}' debe tener mínimo {minLength} dígitos.",
  tel           : "{label} debe ser un número de teléfono.",
  onlytext      : "Solo se permite texto.",
  captcha       : "Verfica el captcha."
};
const ValidationConfig = {
  classInputGroup: 'form-group',
  classInputGroupError: 'has-danger',
  classLabel: 'form-control-label',
  tagNameError: 'small',
  classError: 'text-help',
  selectorInput: '[name]'
};
Validation.ui.config  = ValidationConfig;
Validation.lang       = ValidationLang;
Validation.validators.captcha = input => {
  return new Promise((valid, invalid) => {
      if (input.getAttribute('type') === 'captcha') {
              if(input.value == 'valid'){
                valid();
              }else{
                invalid();
              }
      } else {
          valid();
      }
  });
};
Validation.validators.onlytext = input => {
  return new Promise((valid, invalid) => {
      if (input.value.length > 0 && input.getAttribute('type') === 'onlytext') {
          const Regex = /(^[a-zA-Z ]+$)/i;
          if (Regex.test(input.value)) {
              valid();
          } else {
              invalid();
          }
      } else {
          valid();
      }
  });
};

Element.prototype.remove = function() {
   this.parentElement.removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
   for(var i = this.length - 1; i >= 0; i--) {
       if(this[i] && this[i].parentElement) {
           this[i].parentElement.removeChild(this[i]);
       }
   }
}
NodeList.prototype.forEach = Array.prototype.forEach;
String.prototype.capitalize = function(){
   return this.replace(/\b(\w+)/g, (m,p) => p[0].toUpperCase() + p.substr(1).toLowerCase());
}
//document.addEventListener('touchstart', function() {},false);
window.UID = {
  _current: 0,
  getNew: function(){
    this._current++;
    return this._current;
  }
};
HTMLElement.prototype.pseudoStyle = function(element,prop,value){
  var _this = this;
  var _sheetId = "pseudoStyles";
  var _head = document.head || document.getElementsByTagName('head')[0];
  var _sheet = document.getElementById(_sheetId) || document.createElement('style');
  _sheet.id = _sheetId;
  var className = "pseudoStyle" + window.UID.getNew();

  _this.className +=  " "+className;

  _sheet.innerHTML += "\n."+className+":"+element+"{"+prop+":"+value+"}";
  _head.appendChild(_sheet);
  return this;
};


/**!
 *  Index
 */
if(page == 'index'){
  var modal = new VanillaModal();
  var slider = tns({
    mode: 'gallery',
    container: '.index-banners',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    autoplayButtonOutput: false,
    touch: true,
    mouseDrag: true,
    controls: true,
    controlsText: ['&#xf111;', '&#xf112;'],
    nav: false,
    autoplayHoverPause: true,
    loop: true,
    animateIn: 'trilce_carousel_in',
   animateOut: 'trilce_carousel_out',
  });
  /*var slider = tns({
   mode: 'gallery',
   container: '.index-banners',
   items: 1,
   slideBy: 'page',
   autoplay: true,
   autoplayButtonOutput: false,
   touch: true,
   mouseDrag: true,
   controls: true,
   nav: true,
   autoplayHoverPause: true,
   loop: true,
   arrowKeys: true,
   speed: 700,
   animateIn: 'trilce_carousel_in',
   animateOut: 'trilce_carousel_out',
   swipeAngle : 50,
   controlsText: ['&#xf111;','&#xf112;'],
  });*/


  try {
    slider.events.on('indexChanged', function(info){
      var from;
      var currentIndex  = info.indexCached;
      var index         = info.index % info.slideCount;
      var force = true;

      if (currentIndex - index > 0) {
        if (!force && currentIndex === total - 1 && index === 0) {
          from = 'trilce_carousel_in_rigth';
        } else {
          from = 'trilce_carousel_in_left';
        }
      } else {
        from = 'trilce_carousel_in_rigth';
      }

      var nextElem = info.slideItems[info.index];

      nextElem.style.transition = "";
      nextElem.classList.add(from);

      slider.events.on('transitionEnd', function(){
        nextElem.classList.remove(from);
      })

    });

  } catch (e) {
  }

  SliderTrilce.init(slider);
  //if(modal_open.length) modal.open(modal_open[0]);
  var v = getCookie('colegio-popup');
   if(v == 'false'){
    //modal.open(modal_open[0]);
   }else{
  
    modal.open(modal_open[0]);
    document.cookie = "colegio-popup=false";
    
   }

   window.onbeforeunload = function (e) {
    var e = e || window.event;
       if (e) {
         deleteCookie('colegio-popup');
         //e.returnValue = 'Se perderan todos los datos que no hayas guardado';
    }
  }
}
//read and create cookie to popup

function deleteCookie(){
  log("eliminarCookie: " + key);
  return document.cookie = key + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function getCookie(cname)
{
  var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
        return "";
}


/**!
*  Contact
*/
if(page == 'contact'){
  Validation.init(document.forms[0], true);
}

/**!
*  Blog post
*/
if(page == 'blog_post'){
  var slider = tns({
   container: '#blog-banners',
   items: 1,
   slideBy: 'page',
   autoplay: true,
   autoplayButtonOutput: false,
   touch: true,
   mouseDrag: true,
   controls: true,
   controlsText: ['&#xf111;','&#xf112;'],
   nav: false,
   autoplayHoverPause: true,
   loop: true
  });

  //backgroundEffect.init();
}

/**!
 *  Propuesta educativa
 */
if(page == 'educational_proposal'){
  var tabs = new Tabs({
    elem: 'tabs_educational_propuse',
    open: 0
  });

  AcorditionProposal.init();
  tabs.init();

  var modal = new VanillaModal();
  if(modal_open.length){
    modal.open(modal_open[0]);
  }

  // video play
  var v = document.getElementById("proposal"),
      play = document.querySelector(".bt-play"),
      c = document.querySelector(".educationalproposal__video-bg");
  v.addEventListener("ended", function(){
    v.play();
    v.pause();
    c.style.display = "block";
    play.style.display = "flex";
  });
  play.addEventListener("click", function(){
    v.play();
    c.style.display = "none";
    play.style.display = "none";
  })

}

/**!
 *  Sede Colegio
 */
if(page == 'venue_colegio'){
  var content = document.querySelector('.venue-content-editable'),
      tables = content.querySelectorAll('table');

  [].forEach.call(tables, table => {
    let thead   = table.querySelector('thead'),
        ths     = thead.querySelectorAll('tr th'),
        tbody   = table.querySelector('tbody'),
        trs     = tbody.querySelectorAll('tr');

    [].forEach.call(trs, tr => {
      let tds = tr.querySelectorAll('td');

      [].forEach.call(tds, function(td, i){
        td.dataset.label = ths[i].textContent;
      });

    });

  });

}

/**!
*  Frecuent Questions
*/
if(page == 'frequent_questions'){
  const accordion1 = new BadgerAccordion('.js-badger-accordion_1'),
        accordion2 = new BadgerAccordion('.js-badger-accordion_2'),
        accordion3 = new BadgerAccordion('.js-badger-accordion_3'),
        tabs       = new Tabs({
          elem: 'tabs_frequent_questions',
          open: 0
        });

  tabs.events.on('render', info => {
   accordion1.open(0);
  });

  tabs.init();
}


/**!
*  Vacations
*/
if(page == 'vacations_venue' || page == 'vacations'){
  var slider = tns({
   container: '#vacations_slider',
   items: 1,
   slideBy: 'page',
   autoplay: true,
   autoplayButtonOutput: false,
   touch: true,
   mouseDrag: true,
   controls: true,
   controlsText: ['&#xf111;','&#xf112;'],
   nav: false,
   autoplayHoverPause: true,
   loop: true
  });

  new SlimSelect({
    select: '#slimselect_lima',
    placeholder: 'Lima',
    showSearch: false,
    onChange: (info) => {
      location.href = info.value;
    }
  });

  new SlimSelect({
    select: '#slimselect_provincia',
    placeholder: 'Provincia',
    showSearch: false,
    onChange: (info) => {
      location.href = info.value;
    }
  });

}

if(page == 'vacations_venue'){
  try {
      var tabs = new Tabs({
        elem: 'om__tabs',
        open: 0
      });

      tabs.init();
  }
  catch(err) {
  }

}

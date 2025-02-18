/*!
 * App.js v1.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

//import 'datalist-polyfill/datalist-polyfill'
import { Validation } from 'bunnyjs/src/Validation';
import { tns } from 'tiny-slider/src/tiny-slider'
import { Tabs } from './require/tabs';
import pollyfill from 'array-from-polyfill';
import VanillaModal from 'vanilla-modal';
import SlimSelect from 'slim-select'
import BadgerAccordion from './require/badger_accordion';
import SliderTrilce from './require/slider_trilce';
import Enrollment from './academia/enrollment';
import Preparation from './academia/preparation';
import backgroundEffect from './academia/blog';
import AcorditionProposal from './colegio/educational_proposal';
import SimulacrumExam from './academia/simulacrum_exam';
import OlimpicsRegister from './academia/olympics';
import OlimpicsRegisterGroup from './academia/olympics_group';



window.SlimSelect = SlimSelect;

window.UID = {
  _current: 0,
  getNew: function () {
    this._current++;
    return this._current;
  }
};

HTMLElement.prototype.pseudoStyle = function (element, prop, value) {
  var _this = this;
  var _sheetId = "pseudoStyles";
  var _head = document.head || document.getElementsByTagName('head')[0];
  var _sheet = document.getElementById(_sheetId) || document.createElement('style');
  _sheet.id = _sheetId;
  var className = "pseudoStyle" + window.UID.getNew();

  _this.className += " " + className;

  _sheet.innerHTML += "\n." + className + ":" + element + "{" + prop + ":" + value + "}";
  _head.appendChild(_sheet);
  return this;
};

Element.prototype.remove = function () {
  this.parentElement.removeChild(this);
}

NodeList.prototype.remove = HTMLCollection.prototype.remove = function () {
  for (var i = this.length - 1; i >= 0; i--) {
    if (this[i] && this[i].parentElement) {
      this[i].parentElement.removeChild(this[i]);
    }
  }
}

NodeList.prototype.forEach = Array.prototype.forEach;

String.prototype.capitalize = function () {
  return this.replace(/\b(\w+)/g, (m, p) => p[0].toUpperCase() + p.substr(1).toLowerCase());
}

//Safari fix hover touch
//document.addEventListener('touchstart', function() {},false);


/**!
 *  Index
 */
if (page == 'index') {
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
  /*
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
    nav: true,
    autoplayHoverPause: true,
    loop: true,
    arrowKeys: true,
    speed: 700,
    animateIn: 'trilce_carousel_in',
    animateOut: 'trilce_carousel_out',
    swipeAngle: 50,
    controlsText: ['&#xf111;', '&#xf112;'],
  });*/


  try {
    slider.events.on('indexChanged', function (info) {
      var from;
      var currentIndex = info.indexCached;
      var index = info.index % info.slideCount;
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

      slider.events.on('transitionEnd', function () {
        nextElem.classList.remove(from);
      })
    });


  } catch (e) {
  }


  SliderTrilce.init(slider);
  //if(modal_open2.length) modal.open(modal_open2[0]);
  //if(modal_open.length) modal.open(modal_open[0]);

  var v = getCookie('academina-popup');
  if (v == 'false') {
    //modal.open(modal_open[0]);
  } else {

    modal.open(modal_open[0]);
    document.cookie = "academina-popup=false";

  }

  window.onbeforeunload = function (e) {
    var e = e || window.event;
    if (e) {
      deleteCookie('academina-popup');
      //e.returnValue = 'Se perderan todos los datos que no hayas guardado';
    }
  }


}

//read and create cookie to popup

function deleteCookie() {
  log("eliminarCookie: " + key);
  return document.cookie = key + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for (var i = 0; i < ca.length; i++) {
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
  * Preparation
  */
if (page == 'preparation') {
  var init_preparation = new Preparation(),
    init_tabs = new Tabs({
      elem: 'preparation_tabs',
      open: 0
    });
    const accordion1 = new BadgerAccordion('.js-badger-accordion_1'),
    tabs2 = new Tabs({
      elem: 'tabs_frequent_questions',
      open: 0
    });

  init_tabs.init();
  tabs2.init();
  init_preparation.init();
}

/**!
 *  Enrollment
 */
if (page == 'enrollment') {
  let enrolment = new Enrollment('next', 'prev', 'enrollment-form', 'flex');
  enrolment.init();

  document.querySelector("#termsActive").addEventListener('click', () => {
    document.querySelector("#terms").style.display = 'block';
  });
}

/**!
 *  Contact
 */
if (page == 'contact') {
  Validation.init(document.forms[0], true);
}

/**!
 *  Blog
 */
if (page == 'blog_post') {
  var slider = tns({
    container: '#blog-banners',
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
    loop: true
  });

  //backgroundEffect.init(slider);
}

/**!
 *  Math Olympics
 */
if (page == 'math_olympics') {
  var accordion1 = new BadgerAccordion('.js-badger-accordion_1'),
    accordion2 = new BadgerAccordion('.js-badger-accordion_2'),
    tabs = new Tabs({
      elem: 'om__tabs',
      open: 0
    });

  tabs.init();
}

/**!
 *  Frecuent Questions
 */
if (page == 'frequent_questions') {
  var accordion1 = new BadgerAccordion('.js-badger-accordion_1'),
    accordion2 = new BadgerAccordion('.js-badger-accordion_2'),
    accordion3 = new BadgerAccordion('.js-badger-accordion_3'),
    accordion4 = new BadgerAccordion('.js-badger-accordion_4'),
    tabs = new Tabs({
      elem: 'tabs_frequent_questions',
      open: 0
    });

  tabs.events.on('render', info => {
    accordion1.open(0);
  });

  tabs.init();
}

/**!
*  Simulacrum > Exam
*/
if (page == 'simulacrum-exam') {
  let exam = new SimulacrumExam();
  exam.init();
}

/**!
 *  Math Olympics > Register
 */
if (page == 'olympics') {
  let olymp = new OlimpicsRegister();
  olymp.init();
}

/**!
 *  Math Olympics > Register Group
 */
if (page == 'olympics_group') {
  let olymp = new OlimpicsRegisterGroup();
  olymp.init();
}
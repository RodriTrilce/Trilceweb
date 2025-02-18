
const SliderTrilce = {
  init: function(slider)
  {
    this.slider = slider;

    this.setVariables();
    this.setListener();

    this.runOutLoaded();
    window.onload = () => this.run();
  },

  setListener: function()
  {
    window.addEventListener('resize', () => {
      this.run();
    });
  },

  setVariables: function()
  {
    try {
      this.items = document.querySelectorAll('.banner__item');
    } catch (e) {
    }
  },

  run: function()
  {
    this.loopSet();
    this.removeLoading()
    this.helpers();
  },

  helpers: function()
  {

    try {
      let all = document.querySelectorAll("div");
      [].forEach.call(all, (item, i) => {
        var position = item.getAttribute("data-banner-img-position");
        if(position){
          var father = document.querySelector(".tns-outer").offsetHeight;
          var formula = (father - item.offsetHeight)/2 + "px";

          item.style.position = "relative";

          switch (position) {
            case 'top':
                item.style.top = formula;
              break;

          }
        }
      });

    } catch (e) {
      console.log('Slider_trilce: e:helper:img_position')
    }

  },

  loopSet: function()
  {
    if(this.items)
      [].forEach.call(this.items, (item, i) => {
        this.setPositionBar(item);
        this.setImages(item);
      });

  },

  removeLoading: function()
  {
    var loader = document.querySelector('.banner__loader');
    loader.style.opacity = "0";

    loader.addEventListener('transitionend', evt => {
      loader.style.height = "0";
    });
  },

  setImages: function(item)
  {
    try {
      var banner = item.querySelector('.banner__image');

      if(banner)
      {
        var md      = banner.getAttribute("data-image-md"),
        mdPosition  = banner.getAttribute("data-position-md"),
        mdSize      = banner.getAttribute("data-size-md");

        var xs      = banner.getAttribute("data-image-xs"),
        xsPosition  = banner.getAttribute("data-position-xs"),
        xsSize      = banner.getAttribute("data-size-xs"),

        xsSizeLandscape = banner.getAttribute("data-size-xs-landscape");

        if(window.screen.availWidth < 767){

          banner.style.visibility = "visible";
          if(xsSize == 'hidden'){
            banner.style.visibility = "hidden";
          }else{
            banner.style.backgroundSize = `${xsSize}`;
          }


          banner.style.backgroundImage = `url(${xs})`;
          banner.style.backgroundPosition = `${xsPosition}`;
          banner.style.backgroundSize = `${xsSize}`;

          let orientation = window.matchMedia("(orientation: landscape)");
          if(orientation.matches){

            var xsPositionLandscape = banner.getAttribute("data-position-xs-landscape");
            if(xsPositionLandscape){
              banner.style.backgroundPosition = `${xsPositionLandscape}`;
            }

            if(xsSizeLandscape == 'hidden')
              banner.style.visibility = "hidden";
            else
              banner.style.backgroundSize = `${xsSizeLandscape}`;
          }

        }else{
          banner.style.backgroundImage = `url(${md})`;
          banner.style.backgroundPosition = `${mdPosition}`;

          banner.style.visibility = "visible";
          if(mdSize == 'hidden'){
            banner.style.visibility = "hidden";
          }else{
            banner.style.backgroundSize = `${mdSize}`;
          }

        }
      }
    } catch (e) {
      console.log('Slider_trilce: e:setImages');
      console.log(e);
    }
  },

  setShadowContent: function(item)
  {
    item.pseudoStyle("before","z-index", item.dataset.shadow);
    item.pseudoStyle("before","opacity", item.getAttribute("data-shadow-opacity"));
  },

  setPositionBar : function(item)
  {

    this.container_bar_referer = '.banner__content';

    if(item.getAttribute("data-border-referer")){
      this.container_bar_referer = item.getAttribute("data-border-referer");
    }

    if(item.getAttribute("data-border-referer-xs") && window.screen.availWidth < 767){
      this.container_bar_referer = item.getAttribute("data-border-referer-xs");
    }

    try {
      var heightContent = item.querySelector(this.container_bar_referer).offsetHeight;

    } catch (e) {
      console.log(this.container_bar_referer)
      console.log(e);
      console.log(item)
    }


    let borderColor   = item.dataset.bordercolor;
    let banner__box   = item.querySelector('.banner__box'),
        heightBox     = banner__box.offsetHeight,

        widthBox      = this.getStyle(banner__box, 'width').replace('px',''),
        widthBanner   = this.getStyle(item, 'width').replace('px',''),
        bar           = item.querySelector('.banner_box-bar');

    let widthSide  = (widthBanner-widthBox)/2,
        heightSide = (heightBox-heightContent)/2,
        fillHeight = (heightSide/heightBox*100)-2,
        fillHeightFinish = (100-fillHeight)+1.5;

    bar.style.background = `linear-gradient(to bottom,
      ${borderColor} 0%,
      ${borderColor} ${fillHeight}%,
      rgba(255, 255, 255,0) ${fillHeight}%,
      rgba(255, 255, 255,0) ${fillHeightFinish}%,
      ${borderColor} ${fillHeightFinish}%,
      ${borderColor} 100%
    )`;

    bar.style.marginLeft = widthSide + 'px';
    bar.style.visibility = 'visible';

  },

  getStyle: function (elem, prop)
  {
    var styles = window.getComputedStyle(elem, null);
    var value = styles.getPropertyValue(prop);
    if (!value) {
      throw "No se encontro la propiedad css: " + prop;
    }
    return value
  },

  runOutLoaded: function()
  {
    [].forEach.call(this.items, (item, i) => {
      this.setShadowContent(item);
    });
  }
}

export default SliderTrilce;

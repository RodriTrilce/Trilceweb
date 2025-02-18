var backgroundEffect = {
  init : function(slider){
    this.hearSelector();
    try {
      slider.events.on('indexChanged', () => this.hearSelector());
    } catch (e) {
        console.log('error: '+ e);
    }
  },

  hearSelector : function(){
    this.active = document.querySelector('.tns-slide-active');
    this.changeBackground();
  },

  changeBackground : function(){
    var image = this.active.getElementsByTagName('img'),
        image = image[0].src;

    document.querySelector('.background-image').style.background = `url('${image}')`;
  }
}

export default backgroundEffect;

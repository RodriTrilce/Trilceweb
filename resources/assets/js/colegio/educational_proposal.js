const AcorditionProposal = {
  init : function(){
    this.clickeable  = document.querySelector('.acordition-title');
    this.acordeable  = document.querySelector('.js-tabs__header');
    this.state       = false;
    this.icon        = document.querySelector('#tabs_educational_propuse_icon');
    this.fire        = false;
    this.hear();
  },

  hear : function(){
    setInterval(function(){
      if(window.getComputedStyle(this.clickeable).getPropertyValue('display') !== 'none'){
        if(!this.fire){
          this.height = '366px';
          this.hearClick();
          this.hearListClick();
          this.fire = true;
        }
      }
    }.bind(this), 100);
  },

  hearClick : function(){
    this.clickeable.addEventListener('click', function(){
      if(this.state)
        this.open();
      else
        this.close();
    }.bind(this));
  },

  hearListClick : function(){
    let elems = document.querySelectorAll('.js-tabs__title');

    [].forEach.call(elems, elem => {
      elem.addEventListener('click', click => {
        if(window.getComputedStyle(this.clickeable).getPropertyValue('display') === 'none') return false;
        this.close();
      });
    })
  },

  open : function(){
    this.state = false;
    this.acordeable.style.height = this.height;
    this.icon.classList.remove('fa-plus-square');
    this.icon.classList.add('fa-minus-square');
  },

  close : function(){
    this.state = true;
    this.acordeable.style.height = '0px';
    this.icon.classList.remove('fa-minus-square');
    this.icon.classList.add('fa-plus-square');
  }
}

export default AcorditionProposal;

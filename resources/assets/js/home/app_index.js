/*!
 * Home - app5.js v0.1
 * (c) 2019 Cristhian Sácnhez (chrithisam@gmail.com)
 * Released under the Trilce Group.
 */

const HomeTrilce = function () {

  this.init = function () {
    this.welcome();
    this.load();

  }

  this.welcome = function () {
    //alert('Bienvenidos');
  }

  this.load = function () {
    var v = this.getCookie('loader');
    if (v === 'false') {
      var element = document.getElementById('container_new');
      element.parentNode.removeChild(element);
    } else {
      var container = document.getElementById('container_new');
      setTimeout(function () {
        container.classList.add('cerrar');
        //document.body.style.overflowY= "visible";// después de cargar le devolvemos el scroll
        //document.cookie = "loader=false";
      }, 1000);
    }
  }

  this.getCookie = function (cname) {
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


}

export default HomeTrilce;
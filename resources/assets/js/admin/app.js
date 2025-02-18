/*!
 * App.js v1.1
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

import './jquery-global.js';
import 'bootstrap';
import flatpickr from "flatpickr";
import { Spanish } from "flatpickr/dist/l10n/es.js"
import dragula from "dragula"
import froalaEditor from "froala-editor/js/froala_editor.pkgd.min"

import VanillaModal from 'vanilla-modal';
import SlimSelect from 'slim-select';
import BootstrapTable from 'bootstrap-table';
import xlsx from 'xlsx';

import bootstrapTableExport from './plugin.bootstrapTableExport.js';
import tableExport from 'tableexport.jquery.plugin/tableExport.js';

import jsPDF from 'jspdf';
import 'jspdf-autotable'

import rasterizeHTML from 'rasterizehtml/dist/rasterizeHTML.min.js' 

import Dropzone from 'dropzone';


window.SlimSelect = SlimSelect;
window.modal      = new VanillaModal();
window.rasterizeHTML = rasterizeHTML;
window.XLSX = xlsx;


flatpickr.localize(Spanish);


window.sizeOf = function(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Byte';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
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

/**
 * Make a request post for purposes
 * @param  {url} post
 * @param  {data}
 * @return {Promise}        The XHR request as a Promise
 */
var post = (url, data) => {
  return new Promise((resolve, reject) => {
    var req = new XMLHttpRequest();
    req.open('POST', url, true);
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name=csrf-token]').content);
    req.onload  = () => {
      if(req.status == 200){
        resolve(req.response);
      }else{
        reject(Error(req.statusText));
      }
    }

    req.onerror = ()  => reject(Error('Network Error'));
    req.send(data);
  });
}

window.secureDelete = form => confirm('Seguro de querer eliminar?');

function createImage(input)
{
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#blah')
        .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
}

function manageImages()
{

  this.init = function()
  {
    this.images = document.getElementById('imagesMulti');
    this.manage = document.querySelector('.showimages');

    if(this.images){
      this.hearImages();
    }
  }

  this.hearImages = function()
  {
    this.images.addEventListener('change', input => Array.from(input.target.files).forEach(this.iterate.bind(this)) );
  }

  this.iterate = function(elem)
  {
    let name = elem.name;
    this.iterateDraw(elem);
  }

  this.iterateDraw = function(elem)
  {

    if(this.iterateCheck(elem.name)){
      return false;
    }

    var id = this.slug(elem.name);
    let insert = `
            <div class="item" id="__item_${id}">
               <input type="radio" value="${elem.name}" id="for_${id}" name='markerimage'>
               <label for="for_${id}" id="for_image_${id}"></label>
               <div class="img_delete">☓</div>
             </div>`;

    this.manage.insertAdjacentHTML('beforeend', insert);
    var img       = this.iterateDrawImg(elem);
    var forLabel  = document.getElementById('for_image_'+id);
    forLabel.appendChild(img);
  }

  this.iterateCheck = function(name)
  {
    if(document.getElementById('__item_' + this.slug(name)))
      return true;
    else
      return false;
  }

  this.iterateDrawImg = function(elem, img){
    var image     = new FileReader();
    var img       = document.createElement("img");
    image.onload = function(e){
      img.src = e.target.result;
    };
    image.readAsDataURL(elem);
    return img;
  }


  this.slug = function(text)
  {
    return text.toString().toLowerCase()
      .replace(/\s+/g, '-')
      .replace(/[^\w\-]+/g, '')
      .replace(/\-\-+/g, '-')
      .replace(/^-+/, '')
      .replace(/-+$/, '');
  }
}

if(page == 'blog_index'){
  try{
    // Mostramos el peso amigablemente
    var tableOpts = {
        addrbar: true,
        sortable: true,
        search: true,
        pagination: true,
        paginationVAlign: 'bottom',
        paginationHAlign: 'left',
        paginationDetailHAlign: 'right',
        showPaginationSwitch: true,
    }

    window.$table = $('#my-table');
    $table.bootstrapTable(tableOpts);

    $('#toolbar').find('select').change(function () {
      window.$table.bootstrapTable('refreshOptions', {
        exportDataType: $(this).val()
      });
    });


  }catch(err){
    console.log(err)
  }
}

if(page == 'blog_create'){
  // Date picker
  flatpickr("#mo_finish",{
      enableTime: true,
      dateFormat: "Y-m-d H:i:ss",
  });

  // Editor
  $(function() {
    $('#create_content').froalaEditor({
      height: 300,
      toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertLink', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
    });
  });

  var run = new manageImages;
  run.init();

}

if(page == 'math_olympics_create' || page == 'math_olympics_edit')
{
  flatpickr("#mo_finish",{
      enableTime: true,
      dateFormat: "Y-m-d H:i:s",
  });

  var remove  = document.getElementById('math_olympics_bases_remove');

  if(remove){
    remove.addEventListener('click', () => {
      document.getElementById('math_olympics_bases_div').innerHTML =  `
      <input class="form-control-file" id="create_bases" type='file' name="base_url" accept=".pdf">
      <small class="form-text text-muted">Selecionar el archivo pdf de las bases</small>`;

      var b = document.getElementById('create_bases');
      b.addEventListener('change', function(){
        if(b.name){
          remove.style.display = 'none';
        }
      });

    });
  }

  const resultAdd   = document.getElementById('result_newresult');
  var resultContent = document.getElementById('results_content');

  if(resultAdd){
    resultAdd.addEventListener('click', function(){
      resultContent.insertAdjacentHTML('beforeend', `
        <div class="row col-12">
          <div class="col-6"><input type="text" name="file_name[]" placeholder="Grados del resultado"></div>
          <div class="col-6"><input type="file" name="file_type[]"></div>
        </div>
      `);
    });

    document.getElementById('result_save').addEventListener('click', () => document.getElementById('result_save_form').submit());
  }
}

if(page == 'venue_create')
{
  // Editor
  $(function() {
    $('#create_content').froalaEditor({
      height: 300,
      toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertLink', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
    });
  });

}

window.hideUnlicensed = false;
window.hideUnlicensedT = false
window.hideUnlicensedElement = false;
var _hideUnlicensed = setInterval(function(){

  if(!window.hideUnlicensed){
    [].forEach.call(document.getElementsByTagName('a'), a => {
      if(a.href == 'https://www.froala.com/wysiwyg-editor?k=u'){
        window.hideUnlicensed = true;
        window.hideUnlicensedElement = a;
      }

    });

  }else{
    if(!window.hideUnlicensedT){
      var wrapper = document.querySelector('.fr-wrapper');
      wrapper.insertAdjacentHTML('afterbegin', `<div id='hideUnlicensed' style='width: 100%;position:absolute;background:white;z-index:10000;padding:5px;border-bottom:1px solid gray;'></div>`);
      window.hideUnlicensedT = true;
    }else{
      if(document.getElementById('hideUnlicensed')){
        document.getElementById('hideUnlicensed').style.height = window.getComputedStyle(window.hideUnlicensedElement, null).getPropertyValue('height');
      }
    }
  }
}, 100);

if(page == 'banners_index'){
  console.clear();

  flatpickr("#txtFinish",{
      enableTime: true,
      dateFormat: "Y-m-d H:i:s",
  });


  var bannerIndex = {

    init : function()
    {
      this.initVars();
      this.initEvents();
    },

    initVars : function()
    {
      this.icoEdit  = document.querySelectorAll('.edit'),
      this.icoClose = document.querySelectorAll('.close');
    },

    initEvents : function()
    {
      [].forEach.call(this.icoEdit,  elem => elem.addEventListener('click', x => this.eventEdit(elem))),
      document.getElementById('saveorderButton').addEventListener('click', x => this.eventSaveOrder());
    },

    eventSaveOrder : function()
    {
      var positions = this.getPosition();

      post('/api/admin/banners', 'positions='+JSON.stringify(positions)).then(
          response  => {
            var response = JSON.parse(response);
            var save     = document.getElementById('saveStatus');
            if(response.status == 'ok')
            {
              save.innerHTML = 'Guardado exitosamente';
              save.classList.add('saveStatus--ok');

            }
          },
          error => console.log('error api')
        );
    },

    eventEdit : function(elem)
    {
      //var modal_open = ['#modal-1'];
      //modal.open(modal_open[0]);
    },

    getPosition : function()
    {
       var elements  = document.querySelectorAll('.banner'),
           positions = [];

       [].forEach.call(elements, (elem, i) => {
         let id = elem.dataset.id,
             position = elem.dataset.position;

         positions.push({
           'id': id,
           'position': i
         });
       });

       return positions;
    },

    order : function()
    {
      return true;
    }
  }

  var drag = dragula();
  bannerIndex.init();

  drag.containers.push(document.getElementById('banners'));

  drag.on('drop', () => {
    document.getElementById('saveOrder').style.display = "flex";
  });
}

if(page == 'banners_create'){

  var listenImage = {
    init : function()
    {
      this.initVars();
      this.listen();
    },

    initVars : function()
    {
      this.image = document.getElementById('image_banner');
      this.preview = document.getElementById('img-preview');
    },

    listen : function(){
      this.image.addEventListener('change', input => Array.from(input.target.files).forEach(this.insertImage.bind(this)) );
    },

    insertImage : function(elem)
    {
      this.preview.innerHTML="";
      this.preview.appendChild(this.iterateDrawImg(elem));
    },

    iterateDrawImg : function(elem, img){
      var image     = new FileReader();
      var img       = document.createElement("img");

      image.onload = function(e){
        img.src = e.target.result;
      };

      image.readAsDataURL(elem);
      return img;
    }
  }

  //listenImage.init();

  new SlimSelect({
    select: '#create_section',
    addable: function (value) {
      return {
        text: value,
        value: value.toLowerCase()
      }
    }
  });

  flatpickr("#mo_finish",{
      enableTime: true,
      dateFormat: "Y-m-d H:i:s",
  });

  flatpickr("#mo_start",{
      enableTime: true,
      dateFormat: "Y-m-d H:i:s",
  });
}


if(page == 'rrhh_forms'){
  var tableOpts = {
      addrbar: true,
      sortable: true,
      search: true,
      pagination: true,
      paginationVAlign: 'bottom',
      paginationHAlign: 'left',
      paginationDetailHAlign: 'right',
      showPaginationSwitch: true,
  }

  window.$table = $('#my-table');
  $table.bootstrapTable(tableOpts);

  $('#toolbar').find('select').change(function () {
    window.$table.bootstrapTable('refreshOptions', {
      exportDataType: $(this).val()
    });
  });

}

if(page == 'file_manager'){
  try{

    // Mostramos el peso amigablemente
    document
      .querySelectorAll("[data-filesize]")
        .forEach(
          elem => elem.dataset.friendsize = sizeOf(elem.dataset.filesize)
          );

    var tableOpts = {
        addrbar: true,
        sortable: true,
        search: true,
        pagination: true,
        paginationVAlign: 'bottom',
        paginationHAlign: 'left',
        paginationDetailHAlign: 'right',
        showPaginationSwitch: true,
    }

    window.$table = $('#my-table');
    $table.bootstrapTable(tableOpts);

    $('#toolbar').find('select').change(function () {
      window.$table.bootstrapTable('refreshOptions', {
        exportDataType: $(this).val()
      });
    });


  }catch(err){}
}

if(page == 'file_manager_create')
{
  try{

    var dropZone = new Dropzone('#dropZoneForm', {
      maxFilesize: 50,
      previewTemplate: document.querySelector('#fileTemplate').innerHTML,
      previewsContainer: '.dropzone-previews',
      params : {
      },
      acceptedFiles : 'image/*,video/*,application/pdf'
    });

    dropZone.on('addedfile', file => {
    });

    dropZone.on('success', (file, responseText) => {
      var response = JSON.parse(JSON.stringify(responseText));
      $(file.previewElement).find('[data-dz-id]').html(response.data.id);
      $(file.previewElement).find('[data-dz-url]').html(response.data.url);
      $(file.previewElement).find('[data-dz-urlcute]').html(response.data.urlcute);
    })

  }catch(err){
    console.log(err);
  }
}




if(page == 'shortlink'){
  try{
    // Mostramos el peso amigablemente
    var tableOpts = {
        addrbar: true,
        sortable: true,
        search: true,
        pagination: true,
        paginationVAlign: 'bottom',
        paginationHAlign: 'left',
        paginationDetailHAlign: 'right',
        showPaginationSwitch: true,
    }

    window.$table = $('#my-table');
    $table.bootstrapTable(tableOpts);

    $('#toolbar').find('select').change(function () {
      window.$table.bootstrapTable('refreshOptions', {
        exportDataType: $(this).val()
      });
    });


  }catch(err){
    console.log(err)
  }  
}


if(page == 'simulacrum'){
  try{
    // Mostramos el peso amigablemente
    var tableOpts = {
        addrbar: true,
        sortable: true,
        search: true,
        pagination: true,
        paginationVAlign: 'bottom',
        paginationHAlign: 'left',
        paginationDetailHAlign: 'right',
        showPaginationSwitch: true,
    }

    window.$table = $('#my-table');
    $table.bootstrapTable(tableOpts);

    $('#toolbar').find('select').change(function () {
      window.$table.bootstrapTable('refreshOptions', {
        exportDataType: $(this).val()
      });
    });


  }catch(err){
    console.log(err)
  }  
}

if(page == 'simulacrum_create' || page == 'simulacrum_edit'){
  flatpickr("#mo_finish",{
      enableTime: true,
      dateFormat: "Y-m-d H:i:S",
  });  
}

if(page == 'solution'){
  try{
    // Mostramos el peso amigablemente
    var tableOpts = {
        addrbar: true,
        sortable: true,
        search: true,
        pagination: true,
        paginationVAlign: 'bottom',
        paginationHAlign: 'left',
        paginationDetailHAlign: 'right',
        showPaginationSwitch: true,
    }

    window.$table = $('#my-table');
    $table.bootstrapTable(tableOpts);

    $('#toolbar').find('select').change(function () {
      window.$table.bootstrapTable('refreshOptions', {
        exportDataType: $(this).val()
      });
    });


  }catch(err){
    console.log(err)
  }  
}

if(page == 'solution_create'){

  flatpickr("#mo_finish",{
      enableTime: true,
      dateFormat: "Y-m-d H:i:S",
  });  

  var list = document.getElementById('f_university');
  list.addEventListener('change', () => {
    var university = list.options[list.selectedIndex].value;
    var exm3 = document.getElementById('solution_f_exm3');
    switch(university){
      case '2':
        exm3.style.display = 'none';
      break;

      default:
        exm3.style.display = 'block';
    }
  });

}

if(page == 'forms_sorteo'){
  try{
    // Mostramos el peso amigablemente
    var tableOpts = {
        addrbar: true,
        sortable: true,
        search: true,
        pagination: true,
        paginationVAlign: 'bottom',
        paginationHAlign: 'left',
        paginationDetailHAlign: 'right',
        showPaginationSwitch: true,
    }

    window.$table = $('#my-table');
    $table.bootstrapTable(tableOpts);

    $('#toolbar').find('select').change(function () {
      window.$table.bootstrapTable('refreshOptions', {
        exportDataType: $(this).val()
      });
    });


  }catch(err){
    console.log(err)
  }  
}

if(page == 'forms_claves'){
  try{
    // Mostramos el peso amigablemente
    var tableOpts = {
        addrbar: true,
        sortable: true,
        search: true,
        pagination: true,
        paginationVAlign: 'bottom',
        paginationHAlign: 'left',
        paginationDetailHAlign: 'right',
        showPaginationSwitch: true,
    }

    window.$table = $('#my-table');
    $table.bootstrapTable(tableOpts);

    $('#toolbar').find('select').change(function () {
      window.$table.bootstrapTable('refreshOptions', {
        exportDataType: $(this).val()
      });
    });


  }catch(err){
    console.log(err)
  }  
}














//filesize column custom formatter
window.filesizeSorter = function(a, b) {
    var a_number = retnum(a);
    var b_number = retnum(b);

    a = a_number;
    b = b_number; 
    if (a > b) return 1;
    if (a < b) return -1;
    return 0;
}

//return bytes of filesize
window.retnum = function(number) {
    var num = number.replace(/[^0-9]/g, '');
    var filesizename = number.replace(/[^a-zA-Z]+/g, '').toUpperCase();

    num = parseInt(num, 10);

    switch (filesizename) {
        case "KB":
            num = num * 1024;
            break;
        case "MB":
            num = num * Math.pow(1024, 2);
            break;
        case "GB":
            num = num * Math.pow(1024, 3);
            break;
        case "TB":
            num = num * Math.pow(1024, 4);
            break;
    }

    return num;
}


window.onload = function()
{
  $('.dropdown-toggle').dropdown();
}

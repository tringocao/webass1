
function initDataTable(item) {
  if ($(item).length) {
    $(item).DataTable();
  }
}

function initTinymce(item) {
  var tinyOptions = {
    selector: item,
  }

  if ($(item).length) {
    tinymce.init(tinyOptions);
  }
}

$(document).ready(function () {
  initDataTable('#table');
  initTinymce('.tinymce');
  
  var url = window.location.pathname;
  if (url.indexOf('user') > 0) {
    $('#user').addClass('active');
  }
  if (url.indexOf('deal') > 0) {
    $('#deal').addClass('active');
  }
  if (url.indexOf('page') > 0) {
    $('#page').addClass('active');
  }
});

$('.menu-dropdown').click(function() {
  $('#left-sidebar').toggleClass('open');
});
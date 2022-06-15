jQuery(function ($) {
  var url = window.location.href;
  var last = url.split("/")
  var pgurl = last[last.length - 2];
  urlRegExp = new RegExp(pgurl.replace(/\/$/,'')); 
  $('.app-menu a').each(function(){
      if(urlRegExp.test(this.href)){
          $(this).addClass('active');
      }
  });
});

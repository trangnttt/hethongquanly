jQuery(function($) {
    var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
      $(".app-menu > li > a").each(function(){
      if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
      $(this).addClass("active");
      // $(this).parent("li").addClass("active");
    })
});
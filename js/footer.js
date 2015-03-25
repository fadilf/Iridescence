setInterval(function(){
  if($(document).height() > $(window).height()) {
    $('footer').css('position','static');
  } else {
    $('footer').css('position','fixed');
    $('footer').css('bottom','0px');
    $('footer').css('width','100%');
  }
},50);
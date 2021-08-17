$(Document).scroll(function(){
    $(".navbar").toggleClass('scrol',$(this).scrollTop() > $('.navbar').height());
  });
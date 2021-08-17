$('.btn').click(function(){
    $(this).toggleClass("click");
    $('.sidebar').toggleClass("show");
  });
    $('.feat-btn').click(function(){
      $('nav ul .feat-show').toggleClass("show");
      $('nav ul .first').toggleClass("rotate");
    });
    $('.serv-btn').click(function(){
      $('nav ul .serv-show').toggleClass("show1");
      $('nav ul .second').toggleClass("rotate");
    });
    $('.serv-cam').click(function(){
      $('nav ul .serv-cam').toggleClass("show2");
      $('nav ul .second').toggleClass("rotate");
    });
    $('.serv-cam2').click(function(){
      $('nav ul .serv-cam2').toggleClass("show3");
      $('nav ul .second').toggleClass("rotate");
    });
    $('.close-btn').click(function(){
      $('nav ul .close-show').toggleClass("show4");
      $('nav ul .third').toggleClass("rotate");
    });
    $('nav ul li').click(function(){
      $(this).addClass("active").siblings().removeClass("active");
    });
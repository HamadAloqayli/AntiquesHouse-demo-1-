sal();
new WOW().init();


$('.animIcon').click(function(){
    $('.icon')
      .toggleClass('menu')
      .toggleClass('close');
  });
  
  const main = document.querySelector('#maina');
  const icon = document.querySelector('.icon');
  const h2s = document.querySelectorAll('h2');
  
  
  main.addEventListener('click',function(){
  
    if(icon.classList.contains('close'))
    {
      main.style.cssText += "clip-path: circle(141.4% at 100% 0);";
      document.body.style.overflowY = "hidden";
      setTimeout(function(){
        h2s[0].style.opacity = "1";
      },250);
      setTimeout(function(){
        h2s[1].style.opacity = "1";
      },500);
      setTimeout(function(){
        h2s[2].style.opacity = "1";
      },750);
    }
      else{
      main.style.cssText += "clip-path: circle(5% at 100% 0);";
      document.body.style.overflowY = "scroll";
      for(let i=0; i < h2s.length; i++)
        h2s[i].style.opacity = "0";
      }
  });
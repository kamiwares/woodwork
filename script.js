window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
    document.getElementById("nav").style.padding = "0px 10px";
    document.getElementById("nav").style.height = "7vh";
    document.getElementById("nav-logo").style.padding = "100px 0 0 0";
    document.getElementById('nav').style.backgroundColor = "rgb(255 255 255 / 68%)";



  } else {
    document.getElementById("nav").style.padding = "40px 10px";
    document.getElementById("nav-logo").style.padding = "25px 0 0 0";
    document.getElementById('nav').style.backgroundColor = "white";

}
}


function menu(){
    document.getElementById('menu').style.display = "block";
    document.getElementById('menu').classList.add('animate__animated');
    document.getElementById('menu').classList.add('animate__fadeInRight');

}

function close(){
  document.getElementById('menu').style.display = "none";
  document.getElementById('menu').classList.add('animate__animated');
  document.getElementById('menu').classList.add('animate__slideInRight');
}

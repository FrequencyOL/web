window.onscroll = function () { scroll() };
var header = document.getElementById("header");
function scroll() {
  if (window.pageYOffset >= 30) {
    header.classList.add("sticky")
      }
   else {
    header.classList.remove("sticky")
  }
};



let offset=0;
const sliderLine = document.querySelector('.slider-line');

document.querySelector('.slider-next').addEventListener('click', function (){
    offset += 1520; 
    if(offset > 3040){
      offset=0
    }
    sliderLine.style.left = -offset +'px';
});

document.querySelector('.slider-prev').addEventListener('click', function (){
    offset -= 1520; 
    if(offset < 0){
      offset=3040
    }
    sliderLine.style.left = -offset +'px';
});

const links = document.querySelectorAll(".scroll-to");
links.forEach((item)=>{
    item.addEventListener("click",()=>{
        const el = document.getElementById(item.getAttribute("data-link"));
        el.scrollIntoView({behavior:"smooth", block:"center"})
    })
})
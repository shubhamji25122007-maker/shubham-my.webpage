const sub = document.querySelector('.sub');
const box = document.querySelector('.box');
const logo = document.querySelector('.logo');
const flogo = document.querySelector('.flogo')
const anker = document.querySelector('a');
const cross = document.querySelector('.cross')
box.addEventListener('click',function(){
    sub.classList.toggle("active");
    cross.style.display = "block";
    box.style.display = "none";
   
   
});
cross.addEventListener('click',function(){
    sub.classList.toggle("active");
    cross.style.display = "none";
    box.style.display = "block";
    
});

let span = document.querySelector('#pizza-animate');
let home =document.querySelector('#Home');
let progress = 0;
window.addEventListener('wheel',(event)=>{
    if (event.deltaY > 0){
    progress += 0.05;
    }
   else{
    progress -= 0.03;

    }

    progress = Math.max(0,Math.min(1,progress));

    // position (0-> 350,0->210)
    const x = 350 * progress;
    const y = 210 * progress;

    // rotation (0-> 360)
    const rotate =360*progress;
    //siza(50 -> 230)
    const size = 70 +(180 * progress);
    const radius = 20 + (95 * progress);
    span.style.width = size + "px";
    span.style.height = size + "px";
    span.style.borderRadius = "50%";
    span.style.transform = `translate(${x}px,${y}px) rotate(${rotate}deg)`;


});


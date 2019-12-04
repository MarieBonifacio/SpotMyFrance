require('./bootstrap');

const deroul = document.querySelector(".cat .btn_filter .icon");
deroul.addEventListener('click',toggle);

function toggle(){
  console.log("toggle");
  const filtre = document.querySelector(".filter");
  filtre.classList.toggle("show");
}
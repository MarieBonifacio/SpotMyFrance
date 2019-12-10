require('./bootstrap');

const deroul = document.querySelector(".cat .btn_filter .icon");
if (deroul){
  deroul.addEventListener('click',toggle);
}

function toggle(){
  console.log("toggle");
  const filtre = document.querySelector(".filter");
  filtre.classList.toggle("show");
}

const deroulbis = document.querySelector(".commentairesbis .peoplebis .add-com .adds");
deroulbis.addEventListener('click',togglebis);

function togglebis(){
  console.log("togglebis");
  const filtrebis = document.querySelector(".filterbis");
  filtrebis.classList.toggle("showb");
}
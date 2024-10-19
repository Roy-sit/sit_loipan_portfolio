(function(){
  console.log('JS file is connected.');

let burgerCon = document.querySelector("#burger-con");
const links = document.querySelectorAll(".hamburger menu")
  
function hamburgerMenu() {
  button.classList.toggle("expanded");
      burgerCon.classList.toggle("hidden");
};

button.addEventListener("click", hamburgerMenu);	
 
})();
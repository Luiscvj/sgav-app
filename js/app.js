import '../controllers/insertDataCountries.js';
import '../controllers/insertDataHouse.js';

let navOption = document.querySelectorAll('.nav-link');

navOption.forEach(nOption=>{
 
  
     nOption.addEventListener('click', (e) =>{
        let data = JSON.parse(e.target.dataset.verocultar);

        let divVer = document.querySelector(data[0]);
        divVer.style.display ='block';
        data[1].forEach(div=>{
            let divOcultar = document.querySelector(div);
            divOcultar.style.display ='none';
        })
    }) 

})
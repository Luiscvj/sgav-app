let myFormCountry = document.querySelector('#myFormCountries');
let myHeaderCountry = new Headers({"Content-Type":"aplicattion/json"});


myFormCountry.addEventListener('submit', async(e)=>{
    e.preventDefault();

    let dataCountry = Object.fromEntries(new FormData(e.target));
    console.log(dataCountry);
    let config ={
        method: "POST",
        headers: myHeaderCountry,
        body: JSON.stringify(dataCountry)
    };
   
    await fetch("scripts/insertDataCountries.php",config);
})
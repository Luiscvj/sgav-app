let myFormHouse = document.querySelector('#myFormHouse');
let myHeaderType = new Headers({'Content-Type':'application/json'});

myFormHouse.addEventListener('submit', async(e)=>{
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));

    let config ={
        method: "POST",
        headers: myHeaderType,
        body: JSON.stringify(data)
    }

    await fetch('scripts/insertDataTypeHouse.php',config)

})
addEventListener("DOMContentLoaded", async()=>{
    let peticion = await fetch("https://cesaraugustonavasserrano.000webhostapp.com/Variables_03_0_2022/api.php");
    let data = await peticion.text();
    document.body.innerHTML = data;
})

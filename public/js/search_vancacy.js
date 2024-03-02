let data = [
    "manzana"
];

function buscarVacante(){
    let query = document.getElementById("buscarVacante").value;

    console.log(query);

    if(query.trim() === ""){
        return
    }

    let results = [];

    for(let i = 0; i < data.length; i++){
        if(data[i].toLowerCase().includes(query.toLowerCase())){
            results.push(data[i]);
        }
    }

    document.getElementById("results").innerHTML = "";

    if(results.length > 0){
        for(let i = 0; i < results.length; i++){
            let li = document.createElement("li");
            li.textContent = results[i];
            document.getElementById("results").appendChild(li);
        }
    }
}

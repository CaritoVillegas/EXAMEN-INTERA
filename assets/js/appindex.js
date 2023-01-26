//AGREGAR MASCOTAS
const formMascota = document.getElementById("form-mascota");
const petList = document.getElementById("mascotas");
//const modalTweet = document.getElementById("modalTweet");

document.addEventListener("DOMContentLoaded", function() {
    //Agregar evento al formulario
    // formTweet.addEventListener("submit", submitTweet);

    getPets();

    let modals = document.getElementsByClassName("modal");

    for(var i = 0; i < modals.length; i++) {
        modals[i].addEventListener("click", function(e) {
            if(e.target === this){
                this.classList.remove("show");
            }
        });
    }
});

function getPets() {
    let xhttp = new XMLHttpRequest();

    xhttp.open("GET", "controllers/mascotasController.php", true);

    xhttp.onreadystatechange = function() {
        if (this.readyState === 4) {
            if (this.status === 200) {
                console.log(this.responseText);
                let list = JSON.parse(this.responseText);

                paintTweets(list);
            }
            else {
                console.log("Error");
            }
        }
    };

    xhttp.send();

    return [];
}

function paintTweets(list) {
    let html = '';

    for(var i = 0; i < list.length; i++) {

        html += 
        `    <tr>
                    <th>${list[i].nombre}</th>
                    <th>${list[i].raza}</th>
                    <th>${list[i].edad}</th>
                    <th>${list[i].photo}</th>
                    <th><button class="btn-option" onclick="editTweet(${list[i].id})">
                    editar
                </button>
                </th>
                    <th>Acción</th>
                </tr>`;
    }

    tweetList.innerHTML = html;

}

//MOSTRAR/OCULTAR TABLA
let hideTable_btn = document.getElementById('hideTable_btn');
let hideTable = document.getElementById('hideTable');

hideTable_btn.addEventListener('click', toggleTable);

function toggleTable(){
    hideTable.classList.toggle('show');
    if(hideTable.classList.contains('show')){
        hideTable_btn.innerHTML = 'OCULTAR';
    }
    else{
        hideTable_btn.innerHTML = 'MOSTRAR';
    }
}


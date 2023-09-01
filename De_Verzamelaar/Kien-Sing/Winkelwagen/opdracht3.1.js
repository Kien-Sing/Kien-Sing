// let output = document.getElementById("output");
 let Films = document.getElementById("films");

// function success() {
//     let studenten = JSON.parse(this.responseText);
//     let lijst = Object.keys(studenten[0]);
//     let table = "<thead><tr>";
//     for (let i = 0; i < lijst.length; i++) {
//         table += "<th>" + lijst[i] + "</th>";
//     }
//     table += "</tr></thead><tbody>";
//     for (let i = 0; i < studenten.length; i++) {
//         console.log(studenten[i]);
//         table += "<tr>";
//         table += "<td>" + studenten[i].studentNummer + "</td>";
//         table += "<td>" + studenten[i].studentNaam + "</td>";
//         table += "<td>" + studenten[i].studentTelefoon + "</td>";
//         table += "<td>" + studenten[i].studentKlas + "</td>";
//         table += "</tr>";
//     }
//     table += "</tbody>";
     Films.innerHTML = table;

// }

function error(err) {
    console.error('Error Occurred :', err);
}

function getStudent() {
    let xhr = new XMLHttpRequest();
    xhr.onload = success;
    xhr.onerror = error;
    xhr.open('GET', 'jsonRead.php', true);
    xhr.send();
}
function createStudent(){
    let voorNaam = document.getElementById("vname").value;
    let achterNaam = document.getElementById("aname").value;
    let eMail = document.getElementById("email").value;
    let postCode = document.getElementById("pcode").value;
    let huisNummer = document.getElementById("hnumber").value;
    let Producten = document.getElementById("...").value;

    console.log(voorNaam);
    console.log(achterNaam);
    console.log(eMail);
    console.log(postCode);
    console.log(huisNummer);
    console.log(Producten);



    let postObj = { 
       id: null,
       vNaam: voorNaam,
       aNaam: achterNaam,
       email: eMail,
       postcode: postCode,
       huisNmr: huisNummer,
       producten: Producten
    }

    let post = JSON.stringify(postObj)
 
let xhr = new XMLHttpRequest()
 
xhr.open('POST', 'jsonWrite.php', true);

xhr.send(post);

 window.location.reload();
xhr.onload = function () {
    if(xhr.status === 201) {
        console.log("Post successfully created!") 
    }
}
}

// Haal initieel al de studenten op die in de database staan
getStudent();

//
/*document.writeln("Hola mundo en JavaScript");

document.getElementById("mensaje").innerText = "Este es el mensaje 1";
document.getElementById("mensaje2").innerText = "Este es el mensaje 2";
document.getElementById("mensaje3").innerText = "Este es el mensaje 3";

const MiFecha = new Date();

document.getElementById("fecha").innerText = MiFecha.toLocaleDateString();



//Funcion Saludar
function Saludo() {
    alert("Hola Carlos, eres un crack!!!!!");
}

//Funcion para decir adios
function Adios() {
    alert("Adiooooooss");
}

//Saludo();
//Adios();

var Numero1 = 56;
var Numero2= 78;
var resultado = Numero1 + Numero2;

if(resultado > 150){

    document.getElementById("resultado").innerText="El resultado de la operacion es superior a 150";
    console.log("El resultado de la operacion es " + resultado);
}else{
    document.getElementById("resultado").innerText="El resultado de la operacion es inferior a 150";
    console.log("El resultado de la operacion es " + resultado);
}

*/

let nombre="Eva";
let apellido1="Rodriguez";
var apellido2= "Delgado";
const PI = 3.14;

console.log(nombre);
console.log(apellido1);
console.log(apellido2);
console.log(PI);

let saludo = "Bienvenido " + nombre;
console.log(saludo);

console.log(`Hola ${nombre}`);

let edad=26;
let temperatura =-6;
let decimal =1.55;

let activo=true;
let NoActivo=false;

milog(activo);

let frutas =["mazá", "pera", "pexego", "uvas"];
milog(frutas);
milog(frutas[2]);

let alumno={
    nombre:"Eva",
    apellido1: "Rodriguez",
    apellido2: "Delgado",
    edad: 26,
    estudios: "Daw"
}

milog(alumno);

saludar();
saludar(nombre);
saludar(nombre, apellido1,apellido2);

let oPersona = new Persona("Eva");

document.whiteln("Hola mundo");
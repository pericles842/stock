//variables globales
var buyShirt = document.getElementById('buy-shirt');
var buyBag = document.getElementById('buy-bag');
var buyHeadphones =document.getElementById('buy-headphones');
var boyTool = document.getElementById('buy-tool');
var buyLaptop = document.getElementById('buy-laptop');
var car = document.getElementById('car');
//botones
buyShirt.addEventListener('click',numProductCar);
buyBag.addEventListener('click',numProductCarTwo);
buyHeadphones.addEventListener('click',numProductCarThree);
boyTool.addEventListener('click',numProductCarFour);
buyLaptop.addEventListener('click',numProductCarFive);
car.addEventListener('click',carView);
var numCar =0; //numero del carrito
//variables de clics
var clic=1;
var clicTwo=1;
var clicThree=1;
var clicFour=1;
var clicFive=1;
function numProductCar(){
    var boxNumCar = document.getElementById('num');
    if (clic==1) {
        numCar = numCar +1;
        boxNumCar.innerHTML =numCar;
        clic = clic + 1;
        buyShirt.style.backgroundColor="#14f126";
        document.getElementById('product-shirt').style.display="flex";
        checkNumCar();
        return numCar;
    } else {
        numCar = numCar - 1;
        boxNumCar.innerHTML=numCar;
        clic =clic - 1;
        buyShirt.style.backgroundColor="#1d1a1a";
        document.getElementById('product-shirt').style.display="none";
        checkNumCar();
        return numCar;
    }
}
function numProductCarTwo(){
    var boxNumCar = document.getElementById('num');
    if (clicTwo==1) {
        numCar = numCar +1;
        boxNumCar.innerHTML =numCar;
        clicTwo = clicTwo + 1;
        buyBag.style.backgroundColor="#14f126";
        document.getElementById('product-bag').style.display="flex";
        checkNumCar();
        return numCar;
    } else {
        numCar = numCar - 1;
        boxNumCar.innerHTML=numCar;
        clicTwo =clicTwo - 1;
        buyBag.style.backgroundColor="#1d1a1a";
        document.getElementById('product-bag').style.display="none";
        checkNumCar();
        return numCar;
    }
}
function numProductCarThree(){
    var boxNumCar = document.getElementById('num');
    if (clicThree==1) {
        numCar = numCar +1;
        boxNumCar.innerHTML =numCar;
        clicThree = clicThree + 1;
        buyHeadphones.style.backgroundColor="#14f126";
        document.getElementById('product-headphones').style.display="flex";
        checkNumCar();
        return numCar;
    } else {
        numCar = numCar - 1;
        boxNumCar.innerHTML=numCar;
        clicThree =clicThree - 1;
        buyHeadphones.style.backgroundColor="#1d1a1a";
        document.getElementById('product-headphones').style.display="none";
        checkNumCar();
        return numCar;
    }
}
function numProductCarFour(){
    var boxNumCar = document.getElementById('num');
    if (clicFour==1) {
        numCar = numCar +1;
        boxNumCar.innerHTML =numCar;
        clicFour = clicFour + 1;
        boyTool.style.backgroundColor="#14f126";
        document.getElementById('product-tool').style.display="flex";
        checkNumCar();
        return numCar;
    } else {
        numCar = numCar - 1;
        boxNumCar.innerHTML=numCar;
        clicFour =clicFour - 1;
        boyTool.style.backgroundColor="#1d1a1a";
        document.getElementById('product-tool').style.display="none";
        checkNumCar();
        return numCar;
    }
}
function numProductCarFive(){
    var boxNumCar = document.getElementById('num');
    if (clicFive==1) {
        numCar = numCar +1;
        boxNumCar.innerHTML =numCar;
        clicFive = clicFive + 1;
        buyLaptop.style.backgroundColor="#14f126";
        document.getElementById('product-laptop').style.display="flex";
        checkNumCar();
        return numCar;
    } else {
        numCar = numCar - 1;
        boxNumCar.innerHTML=numCar;
        clicFive =clicFive - 1;
        buyLaptop.style.backgroundColor="#1d1a1a";
        document.getElementById('product-laptop').style.display="none";
        checkNumCar();
        return numCar;
    }
}
function checkNumCar() {
    if (numCar >= 1 ) {
        document.getElementById('num-box-id').style.display="block";
    } else if(numCar <= 0) {
        document.getElementById('num-box-id').style.display="none";
    }
}
var clicCar = 1;
function carView() {
    if (clicCar == 1) {
        document.getElementById('box-data-car').style.display="block";
        var boxNumCar = document.getElementById('num').style.visibility="hidden";
        clicCar = clicCar + 1
    } else {
        document.getElementById('box-data-car').style.display="none";
        var boxNumCar = document.getElementById('num').style.visibility="visible";
         clicCar= clicCar - 1
    }
}
var totalProduts = 0;
var totalMoney=0;

var moneyWindow = documnet.getElementById('money-total');
var TotalWindow = documenet.getElementById('product-total');

function Buttons(num) {
    if (num>1) {
        console.log('funciona');
    }else{
        console.log('funciona');
    }
}
var  buttonNegative = document.getElementById('negative');
var buttonPlus = document.getElementById('positive');

buttonNegative.addEventListener("click",() => Buttons(3));
buttonPlus.addEventListener("click", () => Buttons(2));



/*
function mainButtons( buttonAdd,buttonSubtract,money,total){
    if (buttonAdd == true) {
        function plus() {
            console.log('boton sumar');
        }
        plus();
    } else if(buttonSubtract == false) {
        function subtract() {
            console.log('boton restar');
        }
        subtract();
    }
}
var datosDePrueba= 'Datos de prueba';
mainButtons(buttonPlus,buttonNegative);
*/
function procesar1(){

  let a,b,c;
  a= parseInt(document.getElementById("txtn1").value);
  b= parseInt(document.getElementById("txtn2").value);
  c= document.getElementById("lstope").value;


  let r = 0;
  let cad = "";
if (c == "+") {
  r = a + b;
  cad ="El resultado de la Suma es: "+ r;
}
if (c == "-") {
  r = a - b;
  cad ="El resultado de la Resta es: "+ r;
}
if (c == "*") {
  r = a * b;
  cad ="El resultado de la Multiplicacion es: "+ r;
}
if (c == "/") {
  r = a / b;
  cad ="El resultado de la Division es: "+ r;
}
if (c == "%") {
  r = a % b;
  cad ="El Modulo es: "+ r;
}

alert(cad);


}




function procesar2(evt){
  
evt.preventDefault();// detiene el envio



  let a,b,c;
  a= parseInt(document.getElementById("txtn1").value);
  b= parseInt(document.getElementById("txtn2").value);
  c= document.getElementById("lstope").value;


  let r = 0;
  let cad = "";
if (c == "+") {
  r = a + b;
  cad ="El resultado de la Suma es: "+ r;
}
if (c == "-") {
  r = a - b;
  cad ="El resultado de la Resta es: "+ r;
}
if (c == "*") {
  r = a * b;
  cad ="El resultado de la Multiplicacion es: "+ r;
}
if (c == "/") {
  r = a / b;
  cad ="El resultado de la Division es: "+ r;
}
if (c == "%") {
  r = a % b;
  cad ="El Modulo es: "+ r;
}

alert(cad);



}
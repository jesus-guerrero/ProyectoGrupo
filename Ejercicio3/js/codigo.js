let contenidoCarrito = document.querySelector('.products');



var var1=0;
var var2=0;
var var3=0;
var u=0;
var o=0;
var i=0;
var t1=0;
var t2=0;
var t3=0;

function totalventas(){

    x=parseInt(t1)*1800+parseInt(t2)*3000+parseInt(t3)*2000;
    alert("Total de ventas: "+x)
}

function unvendidas(){
    alert("Artesanales:"+t1+
    "\nbocato:"+t2+
    "\nChococono:"+t3


    )
}



function agregar1(){
   q = prompt("Artesanales:");
   u=u+parseInt(q);
    document.getElementById("inventario1").innerHTML =u;
    
}
function agregar2(){
    f = prompt("Bocato");    
    o=o+parseInt(f);
    document.getElementById("inventario2").innerHTML =o;
    
 }

 function agregar3(){
    l = prompt("chococono");     
    i=i+parseInt(l);
    document.getElementById("inventario3").innerHTML =i;
    
    
    
 }

 function comprar1(){
    if(u<=0){
        alert("el inventaro esta en cero");

    }
    else{
        u--;
        document.getElementById("inventario1").innerHTML =u;
        t1++;
    }
    

    
 }
 function comprar2(){
    if(o<=0){
        alert("el inventaro esta en cero");

    }
    else{
        o--;
        document.getElementById("inventario2").innerHTML =o;
        t2++;
    }
    

   
  }
 
  function comprar3(){
    if(i<=0){
        alert("el inventaro esta en cero");
        

    }
    else{
        
        i--;
        document.getElementById("inventario3").innerHTML =i;
        t3++;
    }
    

    
  }
  
 

loadEventListenrs();
function loadEventListenrs(){
    contenidoCarrito.addEventListener('click', agregarProducto);

    productos.addEventListener('click', eliminarProducto);
}

function agregarProducto(e){
    e.preventDefault();
    if (e.target.classList.contains('btnagregar')) {
        const selectProduct = e.target.parentElement; 
        contenido(selectProduct);
    }
}

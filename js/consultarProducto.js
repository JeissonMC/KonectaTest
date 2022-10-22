

let idproducto = document.getElementById('idproducto');


fetch('consultas/consultarProducto.php',{
          
})
.then( response => response.json() )
.then( payload => { 


    for(data of payload.datos.productos){
        
        idproducto.innerHTML += `<option value="${data.id_producto}">${data.nombre}</option>`;
       
    }

   
});

         



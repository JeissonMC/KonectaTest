
let selectfkidcategoria = document.getElementById('fkcategoria');
let selectfkidcategoriaedit = document.getElementById('fk_id_categoria');


let selectfkidcafeteria = document.getElementById('fkcafeteria');
let selectfkidcafeteriaedit = document.getElementById('fk_id_cafeteria');


let idproducto = document.getElementById('idproducto');


fetch('consultas/consultas.php',{
          
})
.then( response => response.json() )
.then( payload => { 

    console.log(payload);


    for(data of payload.datos.categorias){
        
        selectfkidcategoria.innerHTML += `<option value="${data.id_categoria}">${data.nombre}</option>`;
        selectfkidcategoriaedit.innerHTML += `<option value="${data.id_categoria}">${data.nombre}</option>`;


    }

    for(data of payload.datos.sedecafeteria){
        

        selectfkidcafeteria.innerHTML += `<option value="${data.id_cafeteria}">${data.nombre}</option>`;

        selectfkidcafeteriaedit.innerHTML += `<option value="${data.id_cafeteria}">${data.nombre}</option>`;
       
    }

    for(data of payload.datos.productos){
        

        idproducto.innerHTML += `<option value="${data.id_producto}">${data.nombre}</option>`;

       
       
    }

});

         



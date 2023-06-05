import Dropzone from "dropzone";
//import { document } from "postcss";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube aquí tu imagen",
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar Archivo",
    maxFiles: 1,
    uploadMultiple: false,

    init: function () 
    {
        //alert("dropzone creado");   
        if (document.querySelector('[name="imagen"]').value.trim()) 
        {
            const imagenPublicada = {}
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector('[name="imagen"]').value;

            this.options.addedfile.call(this, imagenPublicada);
            this.options.thumbnail.call(this, imagenPublicada, '/uploads/${imagenPublicada.name}');
            imagenPublicada.previewElement.classList.add("dz-success", "dz-complete");
        } 
    }
})

/*dropzone.on("sending", function (file, xhr, formdata) 
{
    console.log(formdata);   
})*/

dropzone.on('success', function (file, response) 
{
    //console.log(response.imagen);    
    document.querySelector('[name="imagen"]').value = response.imagen;
})

/*dropzone.on('error', function (file, message) 
{
    console.log(message);    
})*/

dropzone.on('removedfile', function () 
{
    //console.log('Archivo Eliminado');    
    document.querySelector('[name="imagen"]').value = '';

})
CKEDITOR.replace('editor', {
    removeButtons: 'PasteFromWord',
    removeButtons: 'About,Anchor',
});  

const button = document.getElementById('butt');
const pregun = document.getElementById('preguntas');
const respuesta = document.getElementById('respuestas');

button.addEventListener('change', function(event) {
    if(pregun == null && respuesta == null){
        alert('hola');
    }
    // setTimeout(function() {
    //     event.target.disabled = true;
    // }, 0);
});





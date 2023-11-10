const ajax_form=document.querySelectorAll(".AjaxForm");


function send_ajax_form(e) {
    e.preventDefault();

    let send=confirm("Quieres enviar el formulario?");

    if(send==true){

        let data= new FormData(this);
        let method=this.getAttribute("method");
        let action=this.getAttribute("action");

        let headers= new headers();


        let config={
            method: method,
            headers: headers,
            mode: 'cors',
            cache: 'no-cache',
            body: data
        };

        fetch(action,config)
        .then(respuesta => respuesta.text())
        .then(respuesta =>{
            let container=document.querySelector(".form-rest");
            container.innerHTML = respuesta;
        });
        
    }
}


ajax_form.forEach(form => {
    form.addEventListener("submit", send_ajax_form);
});
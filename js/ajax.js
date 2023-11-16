const ajax_form=document.querySelectorAll(".ajaxForm");


function send_ajax_form(e) {
    e.preventDefault();

    let send=confirm("Quieres enviar el formulario?");

    if(send==true){

        let data= new FormData(this);
        let method=this.getAttribute("method");
        let action=this.getAttribute("action");

        let header= new Headers();


        let config={
            method: method,
            headers: header,
            mode: 'cors',
            cache: 'no-cache',
            body: data
        };

        fetch(action,config)
        .then(response => response.text())
        .then(response =>{
            let container=document.querySelector(".form-rest");
            container.innerHTML = response;
        });
        
    }
}


ajax_form.forEach(form => {
    form.addEventListener("submit", send_ajax_form);
});
import error , {API_PHP} from '../helpers/error.js';

document.addEventListener('DOMContentLoaded', () => {
   localStorage.removeItem("keyToken");   
}) 

document.getElementById("frmLogin").addEventListener("submit" , e => {
    e.preventDefault();   

    (async function(){
        try {
            let body = new FormData(document.getElementById("frmLogin"));
            let request = await fetch(API_PHP + `auth/${body.get('correo')}/${body.get('password')}/`);
            let response = await request.json();
    
            //console.log(response);

            if (response.status == "error") {                    
               error("error","alert-danger",response.result.errorMsg);
            } else if (response.data.login) {
                localStorage.setItem("keyToken" , response.data.keyToken);
                let body1 = new FormData();
                body1.append("name", response.data.name);
                body1.append("rol", response.data.rol);

                let request1 = await fetch("./Core/dataUser.php",{method: "post", body: body1});
                let response1 = await request1.json();

                if (response1 == "vacio") {
                   error("error", "alert-danger","Campos vacios 2");
                } else if(response1 == "listo") {
                    location.reload();
                }                        
            } else {
                error("error","alert-danger","Algo salio mal");
            }      
        } catch (error) {
            console.log(error);
        }        
    })()        
})
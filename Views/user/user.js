import error from '../helpers/error.js';
import config from '../helpers/config.js';

document.addEventListener('DOMContentLoaded', () => {
    disabledUserForm();
    //hiddenUserTable();
    //disabledUserTable();
})

/********************************************************************
*              function for enable user form                        *
********************************************************************/
const enableUserForm = () =>
{
   document.getElementById('nombre').disabled = false;
   document.getElementById('apellido').disabled = false;
   document.getElementById('cedula').disabled = false;
   document.getElementById('correo').disabled = false;
   document.getElementById('password').disabled = false;
   document.getElementById('confirmPassword').disabled = false;
   document.getElementById('estado').disabled = false;
   document.getElementById('rol').disabled = false;
   document.getElementById('btnprivilegeabout').disabled = false;
   document.getElementById('btnUserRegister').disabled = false;
   document.getElementById('btnUserClear').disabled = false;
   document.getElementById('btnUserEnable').disabled = true;
   document.getElementById('btnUserDisabled').disabled = false;
   document.getElementById('btnUserEnable').style.display = 'none';
   document.getElementById('btnUserRegister').style.display = '';
   document.getElementById('btnUserClear').style.display = '';
   document.getElementById('btnUserDisabled').style.display = '';
   
}

/********************************************************************
*              function for diabled user form                       *
********************************************************************/
const disabledUserForm = () =>
{
    document.getElementById('nombre').disabled = true;
    document.getElementById('apellido').disabled = true;
    document.getElementById('cedula').disabled = true;
    document.getElementById('correo').disabled = true;
    document.getElementById('password').disabled = true;
    document.getElementById('confirmPassword').disabled = true;
    document.getElementById('estado').disabled = true;
    document.getElementById('rol').disabled = true;
    document.getElementById('btnprivilegeabout').disabled = true;
    document.getElementById('btnUserRegister').disabled = true;
    document.getElementById('btnUserClear').disabled = true;
    document.getElementById('btnUserEnable').disabled = false;
    document.getElementById('btnUserRegister').style.display = 'none';
    document.getElementById('btnUserClear').style.display = 'none';
    document.getElementById('btnUserDisabled').style.display = 'none';
    document.getElementById('btnUserEnable').style.display = '';
}

/***************************************************************
*              Function for clear user form                    *
***************************************************************/
const clearUserForm = () =>
{
    document.getElementById('nombre').value = "";
    document.getElementById('apellido').value = "";
    document.getElementById('cedula').value = "";
    document.getElementById('correo').value = "";
    document.getElementById('password').value = "";
    document.getElementById('confirmPassword').value = "";   
}

/*****************************************************************
*              Function for show the user table                  *
*****************************************************************/ 
const showUserTable = () =>
{
    document.getElementById('table_user').style.display = "";
    document.getElementById('btnclearsearch').style.display = "";
}


/************************************************************************
*              function for disabled user table                         *
************************************************************************/
const disabledUserTable = () => 
{
    document.getElementById('search_cedula').disabled = true;
    document.getElementById('btn_search_cedula').disabled = true;
    document.getElementById('btndisabledsearch').style.display = "none";
    document.getElementById('btnenablesearch').style.display = "";    
}


/********************************************************************
*              Function for hidden the user table                   *
********************************************************************/
const hiddenUserTable = () =>
{
    document.getElementById('table_user').style.display = "none";
    document.getElementById('btnclearsearch').style.display = "none";
}


/**********************************************************
*             Function for clear user table               *
**********************************************************/ 
const clearUserTable = () =>
{
    document.getElementById('search_cedula').value = "";
    hiddenUserTable();        
}


/*************************************************************************
*                   event for enable user form                           *
*************************************************************************/
document.getElementById('btnUserEnable').addEventListener('click', e => 
{
    e.preventDefault();
    enableUserForm();
})


/**************************************************************************
*              event for disabled user form                               *
***************************************************************************/
document.getElementById('btnUserDisabled').addEventListener('click', e =>
{
    e.preventDefault();
    clearUserForm();
    disabledUserForm();
})


/**************************************************************************
*                      event for enable user table                        *
***************************************************************************/
// document.getElementById('btnenablesearch').addEventListener('click', e => 
// {
//     e.preventDefault();
//     document.getElementById('search_cedula').disabled = false;
//     document.getElementById('btn_search_cedula').disabled = false;
//     document.getElementById('btnenablesearch').style.display = "none";
//     document.getElementById('btndisabledsearch').style.display = "";
// })


/****************************************************************************
*              event for disabled user user table                           *
****************************************************************************/
// document.getElementById('btndisabledsearch').addEventListener('click', e => {
//     e.preventDefault();   
//     disabledUserTable();
//     clearUserTable();
// })


/*********************************************************************** 
*                 event for clear user form                            *
***********************************************************************/
document.getElementById('btnUserClear').addEventListener('click', e => {
    e.preventDefault();
    clearUserForm();
})


/*************************************************************************
*                   event for clear user table                           *
*************************************************************************/
// document.getElementById('btnclearsearch').addEventListener('click', e => {
//     e.preventDefault();
//     clearUserTable();
// })


/**************************************************************************
*      show the data of user in the modal modalUpdateUserPrivilege        *
**************************************************************************/
// document.getElementById("a_update_user").addEventListener("click" , e => {
//     e.preventDefault();

//     let privilege = document.getElementById("user_privilege").textContent;
//     let status = document.getElementById("user_status").textContent;

//     //console.log(privilege);

//     if(status == "Activo"){
//         document.getElementById("status_user_update").innerHTML = `<option>${status}</option>
//                                                                    <option>Inactivo</option>`;
//     }else if(status == "Inactivo"){
//         document.getElementById("status_user_update").innerHTML = `<option>${status}</option>
//                                                                    <option>Activo</option>`;
//     }
    
//     if(privilege == "1"){
//         document.getElementById("privilege_user_update").innerHTML = `<option>${privilege}</option>
//                                                                       <option>2</option><option>3</option>`;                                                                      
//     }else if(privilege == "2"){
//         document.getElementById("privilege_user_update").innerHTML = `<option>${privilege}</option>
//                                                                       <option>1</option><option>3</option>`;
//     }else if(privilege == "3"){
//         document.getElementById("privilege_user_update").innerHTML = `<option>${privilege}</option>
//                                                                       <option>1</option><option>2</option>`;
//     }    
// })


/****************************************************************************
*                            event for save user                       *
****************************************************************************/
document.getElementById('frmSaveUser').addEventListener('submit', e => {
   e.preventDefault();  
   
   let body = {};
   let formData = new FormData(document.getElementById("frmSaveUser"));
   formData.forEach((value, key) => {body[key] = value});

   (async function () {
       try {
           let request = await fetch(`${config.API}usuario/`,{
                                      headers: {"Content-Type":"application/json" , Authorization: `Bearer ${config.token}`},
                                      method: 'POST',body: JSON.stringify(body)});
           let response = await request.json();

           if (response.status == "error") {
               error("errorSaveUser","alert-danger" , response.message);
           } else if (response.status == "ok") {
              clearUserForm(); 
              disabledUserForm();
              error("errorSaveUser","alert-success" , response.message);
           } else {
               error("errorSaveUser","alert-danger" , "Algo salio mal");
           }
       } catch (error) {
           console.log(error);
       }
   })()
});


/*****************************************************************************
*                  event for search one user for the cedula                  *
*****************************************************************************/
// document.getElementById('btn_search_cedula').addEventListener('click', e => {
//     e.preventDefault();
     
//      let cedula = document.getElementById('search_cedula').value;
//      let body = new FormData();
//      body.append('cedula',cedula);
//      body.append('function','searchCedula');
     
//     fetch(REQUEST_USER_CONTROLLER,{method: 'post',body: body})
//     .then(res => res.json())
//     .then( res =>{
//        //console.log(res);
//         if (res.error) {
//             swal({
//                 title: res.title,
//                 text: res.message,
//                 icon: res.icon,
//                 button: "Aceptar"
//             });
//         }else{           
//             showUserTable();                
//             document.getElementById('user_token').value = res.token_usuario;          
//             document.getElementById('user_name').textContent = res.nombre_usuario; 
//             document.getElementById('user_cedula').textContent = res.cedula_usuario;
//             document.getElementById('user_email').textContent = res.correo_usuario;
//             document.getElementById('user_date').textContent = res.fecha_usuario;
//             document.getElementById('user_privilege').textContent = res.privilegio_usuario;
//             document.getElementById('user_status').textContent = res.estado_usuario;  
//         }     
//     }) 
//     .catch(res => console.log(res))
// })


/*****************************************************************************
*                      event for update user status                          *
*****************************************************************************/
// document.getElementById('formUpdateUserPrivilege').addEventListener('submit', e =>{
//     e.preventDefault();       

//     let token = document.getElementById('user_token').value;    
//     let body = new FormData(document.getElementById("formUpdateUserPrivilege"));
//     body.append('token',token);   
//     body.append('function','updateUserStatus');

//     fetch(REQUEST_USER_CONTROLLER,{method: 'post',body: body})
//     .then(res => res.json())
//     .then(res => {
//         //console.log(res);
//         if (res.error) {
//             swal({
//                 title: res.title,
//                 text: res.message,
//                 icon: res.icon,
//                 button: "Aceptar"
//                 });
//         }else if(!res.error){
//             swal({
//                 title: res.title,
//                 text: res.message,
//                 icon: res.icon,
//                 button: "Aceptar"
//             });
//             clearUserTable();
//             document.getElementById("modalCloseUpdateUser").click();            
//         }else{
//             swal({
//                 title: "Algo Salió Mal",
//                 text: "No se puede actualizar el estado del usuario",
//                 icon: "error",
//                 button: "Aceptar"
//             });
//         }              
       
//     })
//     .catch(res => console.log(res))
// })


/*******************************************************************************
*                      event for reset user password                           *
*******************************************************************************/
// document.getElementById('formResetPassword').addEventListener('submit', e => {
//     e.preventDefault();
    
//     let user_token = document.getElementById('user_token').value;     
//     let body = new FormData(document.getElementById("formResetPassword"));   
//     body.append('token',user_token);   
//     body.append('function','resetUserPassword');
     
//     fetch(REQUEST_USER_CONTROLLER,{method: 'post',body: body})
//     .then(res => res.json())
//     .then(res => {
//              //console.log(res);
//             if (res.error) {
//                 swal({
//                     title: res.title,
//                     text: res.message,
//                     icon: res.icon,
//                     button: "Aceptar"
//                     });
//             }else if(!res.error){
//                 swal({
//                     title: res.title,
//                     text: res.message,
//                     icon: res.icon,
//                     button: "Aceptar"
//                 });
//                 clearUserTable();
//                 document.getElementById("password_reset").value = "";
//                 document.getElementById("confirm_password_reset").value = "";
//                 document.getElementById("modalCloseResetPassword").click();            
//             }else{
//                 swal({
//                     title: "Algo Salió Mal",
//                     text: "No se puede restablecer la contraseña del usuario",
//                     icon: "error",
//                     button: "Aceptar"
//                 });
//             }         
          
//     })
//     .catch(res => console.log(res))
// })
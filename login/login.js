
//Validaciones de CREAR CUENTA
window.addEventListener('load', ()=> {
    const form = document.querySelector('#formulario')
    const nombre = document.getElementById('nombre')
  
    const email = document.getElementById('email')
    const contraseña = document.getElementById('contraseña')
    const conficontraseña = document.getElementById('conficontraseña')
   // redireccionar archivo no envia formulario ; hasta que se cumpla el evento
    form.addEventListener('submit', (e) => {
        e.preventDefault()
        validaCampos()
    })
    
    const validaCampos = ()=> {
        //capturar los valores ingresados por el usuario
        const nombreValor = nombre.value.trim() //elimina espacios en blanco
        const emailValor = email.value.trim()
        const contraseñaValor = contraseña.value.trim()
        const conficontraseñaValor = conficontraseña.value.trim();
     
        //validando campo nombre
        //(!usuarioValor) ? console.log('CAMPO VACIO') : console.log(usuarioValor)
        if(!nombreValor){
            //console.log('CAMPO VACIO')
            validaFalla(nombre, 'Campo vacío')
        }else{
            validaOk(nombre)
        }
       

        //validando campo email
        if(!emailValor){
            validaFalla(email, 'Campo vacío')            
        }else if(!validaEmail(emailValor)) {
            validaFalla(email, 'El e-mail no es válido')
        }else {
            validaOk(email)
        }
         //validando campo contraseña
         const er = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}$/          
         if(!contraseñaValor) {
         validaFalla(contraseña, 'Campo vacío')
         } else if (contraseñaValor.length < 8) {             
             validaFalla(contraseña, 'Debe tener 8 caracteres cómo mínimo.')
         } else if (!contraseñaValor.match(er)) {
             validaFalla(contraseña, 'Debe tener al menos una may., una min. y un núm.')
         } else {
             validaOk(contraseña)
         }

         //validando campo confirmar contraseña
         if(!conficontraseñaValor){
            validaFalla(conficontraseña, 'Confirme su contraseña')
         } else if(contraseñaValor !== conficontraseñaValor) {
             validaFalla(conficontraseña, 'La contraseña no coincide')
         } else {
             validaOk(conficontraseña)
         }


    }

    const validaFalla = (input, msje) => {
        const formControl = input.parentElement
        const aviso = formControl.querySelector('p')
        aviso.innerText = msje

        formControl.className = 'form-control falla'
    }
    const validaOk = (input, msje) => {
        const formControl = input.parentElement
        formControl.className = 'form-control ok'
    }

    const validaEmail = (email) => {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);        
    }

});
//validaciones para Recuperar Contraseña
window.addEventListener('load', ()=> {
    const form = document.querySelector('#formulario3')
    const email3 = document.getElementById('email3')
    form.addEventListener('submit', (e) => {
        e.preventDefault()
        validaCampos()
    })
    const validaCampos = ()=> {
        const emailValor = email3.value.trim()

        if(!emailValor){
            validaFalla(email3, 'Campo vacío')            
        }else if(!validaEmail(emailValor)) {
            validaFalla(email3, 'El e-mail no es válido')
        }else {
            validaOk(email3)
        }

        const validaFalla = (input, msje) => {
            const formControl = input.parentElement
            const aviso = formControl.querySelector('p')
            aviso.innerText = msje
    
            formControl.className = 'form-control falla'
        }
        const validaOk = (input, msje) => {
            const formControl = input.parentElement
            formControl.className = 'form-control ok'
        }
    
        const validaEmail = (email) => {
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);        
        }

    }



})


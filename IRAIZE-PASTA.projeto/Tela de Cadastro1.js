const fields = document.querySelectorAll("[required]")

function ValidateField(field){

//logica para verificar se existem erros
function verifyErrors(){
    let foundError = false;
    
    
    //propridades de um objeto for-in ele tira a propriedade e chama de error
    for(const error in field.validity){
    //se não for customError 
    //então verifica se tem erro
    
    if (field.validity[error] && !field.validity.valid){
    foundError = error
    
    }
    }
    
    
    return foundError;
    
    }

    //****PAREI AQUI - FUNCTION  */

    return verifyErrors()
}

function customValidation(event){




const field = event.target

const error = ValidateField(field)

console.log("Error Exists" , error)

const spanError = field.parentNode.querySelector("span.error")

if(error){

    spanError.classList.add("active")
    spanError.innerHTML = "Campo Obrigatório"
 
}else{

    spanError.classList.remove("active")
    spanError.innerHTML = ""
    

}


}

for( const field of fields){
field.addEventListener("invalid", event =>{

//eliminar o bubble
event.preventDefault()
customValidation(event)
})

field.addEventListener("blur", customValidation)


}



















document.querySelector("form")
.addEventListener("submit", event =>{
 console.log("enviar o formulário")

 //para não enviar no momento
event.preventDefault()

}
)
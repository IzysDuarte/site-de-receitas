function validar(){

    if(document.dados.nome.value=="" ||
    document.dados.nome.value.length <7)

{
    alert("Preencha campo NOME completo!" );
    document.dados.nome.focus();
return false;

} 

if(document.dados.email.value=="" ||
document.dados.email.value.indexOf ('@')==-1 ||
document.dados.email.value.indexOf ('.')==-1)
{
    alert ( "Preencha campo E-MAIL corretamente!" )
    document.dados.email.focus();
    return false;
}}
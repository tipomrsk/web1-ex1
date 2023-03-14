$(document).ready(function(){
    $('#birth').mask('00/00/0000');
    $('#phone').mask('(00)00000-0000');
});

$("form").submit(function( event ) {
    const form = $( this ).serializeArray()
    console.log(form);
    event.preventDefault();


    /**
     * A partir daqui da pra ter um AXIOS que vai fazer a request pra rota de cadastro
     * 
     * Com o retorno dessa rota é interessante usar um then/catch pra fazer o retorno do cliente
     */

    Swal.fire('Sucesso!','Usuário Cadastrado','success')

  });
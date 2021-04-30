
    $('#subForm').submit(function (e) {

    e.preventDefault();

    let nome = $('input[name="nome"]').val();
    let email = $('input[name="email"]').val();
    let fone = $('input[name="fone"]').val();
    let nascimento = $('input[name="nascimento"]').val();

    let cep = $('input[name="cep"]').val();
    let endereco = $('input[name="endereco"]').val();
    let numero = $('input[name="numero"]').val();
    let bairro = $('input[name="bairro"]').val();
    let cidade = $('input[name="cidade"]').val();
    let estado = $('input[name="estado"]').val();

    $( ".msg" ).html( "" )

    /* Ajax formulario */
        $.ajax({
            url: wp.ajaxUrl,
            type: 'POST',
            data: {action : "salvarPosts", nome: nome, email: email, fone: fone, nascimento: nascimento , cep: cep, endereco: endereco, numero: numero, bairro: bairro, cidade: cidade, estado: estado},
            beforeSend: function() {

                $('#loading').show();
        
            }
        })
        .done(function(res){
            console.log(res)
            $( ".msg" ).html( "<p>" + res + "</p>" )
            $('#loading').hide();
        });
    })
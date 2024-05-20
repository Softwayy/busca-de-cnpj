$(document).ready(function() {
    $('#cnpj').on('blur', function() {
        var cnpj = $(this).val().replace(/[^\d]+/g, '');

        $.ajax({
            url: 'https://www.receitaws.com.br/v1/cnpj/' + cnpj,
            dataType: 'jsonp',
            crossDomain: true,
            success: function(data) {
                $('#fornecedor').val(data.nome);
                $('#telefone').val(data.telefone);
                $('#email').val(data.email);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Erro na solicitação da API da Receita Federal:', textStatus, errorThrown);
            }
        });
    });
});

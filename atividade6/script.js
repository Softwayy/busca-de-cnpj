$(document).ready(function() {
    $('#cnpj').on('blur', function() {
        var cnpj = $(this).val().replace(/[^\d]+/g, '');

        if (cnpj === "") {
            $('#fornecedor').val('');
            $('#telefone').val('');
            $('#email').val('');
            return;
        }

        $.ajax({
            url: 'https://www.receitaws.com.br/v1/cnpj/' + cnpj,
            dataType: 'jsonp',
            crossDomain: true,
            success: function(data) {
                if (data.status === 'ERROR') {
                    alert('CNPJ inválido ou não encontrado.');
                    $('#fornecedor').val('');
                    $('#telefone').val('');
                    $('#email').val('');
                } else {
                    $('#fornecedor').val(data.nome);
                    $('#telefone').val(data.telefone);
                    $('#email').val(data.email);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Erro na solicitação da API da Receita Federal:', textStatus, errorThrown);
            }
        });
    });

    $('#cnpj').on('input', function() {
        if ($(this).val().trim() === '') {
            $('#fornecedor').val('');
            $('#telefone').val('');
            $('#email').val('');
        }
    });
});

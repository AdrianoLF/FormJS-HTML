<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./assets/styles.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Formulário de registro</title>
</head>

<body>
    <!-- FONTE : https://epicbootstrap.com/snippets/registration -->
    <div class="registration-form">
        <form>
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Nome">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Senha">
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" placeholder="Número de telefone">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="birth-date" placeholder="Data de aniversário">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="document-cnpj-cpf" placeholder="CPF/CNPJ">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-block create-account">Criar conta</button>
            </div>
        </form>

        <div class="social-media">
            <h5>Visite nossas redes sociais</h5>
            <div class="social-icons">
                <a class="icon-flip-flop" href="https://www.flipfloplab.com.br/"></a>
                <a class="icon-flip-flop" href="https://www.flipfloplab.com.br/"></a>
                <a class="icon-flip-flop" href="https://www.flipfloplab.com.br/"></a>
                <a class="icon-flip-flop" href="https://www.flipfloplab.com.br/"></a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <!-- // ? FUNÇÃO PARA MASCARAS - jQuery Plugin -->
    <script>
        $("#birth-date").mask("99/99/9999");

        var options = {
            onKeyPress: function(item, ev, el, op) {
                const docMasks = ['000.000.000-000', '00.000.000/0000-00'];
                $('#document-cnpj-cpf').mask((item.length > 14) ? docMasks[1] : docMasks[0], op);
            }
        }
        $('#document-cnpj-cpf').length > 11 ? $('#document-cnpj-cpf').mask('00.000.000/0000-00', options) : $('#document-cnpj-cpf').mask('000.000.000-00#', options);

        const optionsPhone = {
            onKeyPress: function(item, ev, el, op) {
                const phoneMasks = ['(99) 9999-9999', '(99) 99999-9999'];
                $('#phone-number').mask((item.length > 14) ? phoneMasks[1] : phoneMasks[0], op);
            }
        }
        $('#phone-number').length > 14 ? $('#phone-number').mask('(99) 99999-9999', options) : $('#phone-number').mask('(99) 9999-9999', options);
    </script>
</body>

</html>
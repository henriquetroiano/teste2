<div class="footer-section">
    <div class="content container">
        <div class="contact-section">

            <div class="contact">
                <a href="tel:551121075500"><i class="fas fa-phone"></i> 11 2105-5500</a>
                <a href="mailto:comercial@contiplan.com.br"><i class="fas fa-envelope"></i> comercial@contiplan.com.br</a>
                <a href="https://api.whatsApp.com/send?phone=551121055500" target="_blank"><i class="fab fa-whatsapp whatsapp"></i> Atendimento via Whatsapp</a>
                <a class="address" href="https://goo.gl/maps/xvZFxPhC1nN8Eqsq7" target="_blank"><i class="fas fa-map-marker-alt"></i><span>R. Francisco Hurtado, 431<br>São Paulo, SP</span></a>
                <a href="{{ url('/') }}" class="logo"><img src="{{ asset('img/logo_footer.png') }}" alt="Logo Footer"></a>
            </div>

            <div class="social-networks">
                <p>Acesse nossas<br>Redes Sociais:</p>
                <div class="items">
                    <a href="instagram.com" target="_blank"><i class="fab fa-instagram instagram"></i></a>
                    <a href="facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
                <a href="{{ url('/') }}" class="acessar">Acessar o Site</a>
            </div>

        </div>
        <div class="form-section">
            <form action="{{ url('/submit/form') }}" method="post" id="form">
                <p>Solicite um orçamento:</p>
                <div class="input-group">
                    <div class="input-group-btn">
                        <button class="btn" disabled>
                            <i class="fas fa-user"></i>
                        </button>
                    </div>
                    <input id="name" type="text" class="form-control" name="name" placeholder="Nome">
                </div>
                <div class="input-group" id="email-group">
                    <div class="input-group-btn">
                        <button class="btn" disabled>
                            <i class="fas fa-envelope"></i>
                        </button>
                    </div>
                    <input type="text" id="email" class="form-control" name="email" placeholder="Email" onblur="valida()">
                    <div class="invalid-feedback email-validation">
                        <b>Digite um endereço de email corretamente</b>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-btn">
                        <button class="btn" disabled>
                            <i class="fas fa-phone"></i>
                        </button>
                    </div>
                    <input id="phone" type="text" class="form-control" name="phone" placeholder="Telefone">
                </div>
                <div class="input-group textarea">
                    <div class="input-group-btn">
                        <button class="btn" disabled>
                            <i class="fas fa-pen"></i>
                        </button>
                    </div>
                    <textarea name="message" id="message" class="form-control" placeholder="Mensagem"></textarea>
                </div>
                <button type="submit" class="btn-form">
                    Enviar mensagem agora  <span><i class="fas fa-arrow-circle-right"></i></span>
                </button>
                
            </form>
        </div>
    </div>
</div>


<script>
// jquery mask para campo telefone (misto, fixo e celular)
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
    };

    $('#phone').mask(SPMaskBehavior, spOptions);

</script>
<script>

// validação de email client-side! 

    function valida() {
        inputEmail = document.querySelector('#email');
        inputEmailGroup = document.querySelector('#email-group');
        if(!isEmail(inputEmail.value)) {
            $( '#email' ).keypress(function() {

                if(isEmail(inputEmail.value)) {
                    document.querySelector('.email-validation').classList.add('hide-self');
                    inputEmail.classList.remove('is-invalid');
                    inputEmailGroup.classList.remove('invalid');
                }

            });
            document.querySelector('.email-validation').classList.remove('hide-self');
            inputEmail.classList.add('is-invalid');
            inputEmailGroup.classList.add('invalid');
            inputEmail.focus();
        } else {
            document.querySelector('.email-validation').classList.add('hide-self');
            inputEmail.classList.remove('is-invalid');
            inputEmailGroup.classList.remove('invalid');
        }
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $("#form").submit(function(e){
        if(!isEmail(inputEmail.value)) {
            e.preventDefault();
            document.querySelector('.email-validation').classList.remove('hide-self');
            inputEmail.classList.add('is-invalid');
            inputEmailGroup.classList.add('invalid');
            inputEmail.focus();
        } else {
            // se retornar tudo ok, prosseguir
        }
    });
</script>
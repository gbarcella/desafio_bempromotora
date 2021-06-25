<nav class="cabecalho-login shadow">
    <div class="container-texto-cabecalho-login">
        <p class="texto-cabecalho-login">Painel Administrativo</p>
    </div>
</nav>

<div class="container container-form-login shadow">

    <div class="container-texto-cabecalho-login-form">
        <p class="text-cabecalho-login">Autentique-se!</p>
    </div>

    <div class="container-form-login-input">

        <form action="" method="POST">

            <?php
            if (!empty($data['mensagem'])) {
                foreach ($data['mensagem'] as $m) {
                    echo ' <div class="alert alert-danger" role="alert">' . $m . '</div>';
                }
            }
            ?>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text box-icone-input">@</span>
                </div>

                <input type="email" placeholder="Digite seu email" class="form-control" id="email" name="email">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text box-icone-input"><i class="bi bi-lock-fill"></i></span>
                </div>
                <input type="password" placeholder="Digite sua senha" class="form-control" id="senha" name="senha">
            </div>

            <button type="submit" name='acessar' class="btn botao-login">Acessar <i class="bi bi-box-arrow-in-right"></i> </button>

            <div class="container-link-cadastrar">
                <p class="texto-cadastrar"><a href="/home/index" class="link-cadastrar"> Voltar ao início!</a></p>
            </div>
        </form>

    </div>
</div>
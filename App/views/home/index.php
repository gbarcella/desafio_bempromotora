<?php require_once('../App/views/layouts/header-home.php') ?>


<div class="container container-form-questoes shadow-lg">

    <form action="/home/index" class="form-questoes" method="POST">
        <?php
        if (!empty($data['mensagem'])) {
            foreach ($data['mensagem'] as $m) {
                echo ' <div class="alert alert-danger" role="alert">' . $m . '</div>';
            }
        }
        ?>
        <div class="mb-3">
            <label for="questao1" class="form-label">Qual sua faixa etária?</label>
            <select class="form-select" name="questao1" aria-label="Default select example">
                <option selected disabled>Clique para escolher</option>
                <option value="Até 30 anos">Até 30 anos</option>
                <option value="De 30 a 50 anos">De 30 a 50 anos</option>
                <option value="De 50 a 60 anos">De 50 a 60 anos</option>
                <option value="Acima e 65 anos">Acima e 65 anos</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="questao1" class="form-label">Qual seu convênio?</label>
            <select class="form-select" name="questao2" aria-label="Default select example">
                <option selected disabled>Clique para escolher</option>
                <option value="INSS">INSS</option>
                <option value="SIAPE">SIAPE</option>
                <option value="Forças Armadas">Forças Armadas</option>
                <option value="Outros">Outros</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="questao1" class="form-label">Qual sua faixa salarial?</label>
            <select class="form-select" name="questao3" aria-label="Default select example">
                <option selected disabled>Clique para escolher</option>
                <option value="Até 2 SM">Até 2 SM</option>
                <option value="De 2 a 4 SM">De 2 a 4 SM</option>
                <option value="De 4 a 6 SM">De 4 a 6 SM</option>
                <option value="Acima de 6 SM">Acima de 6 SM</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="questao1" class="form-label">Por que você realizou empréstimo?</label>
            <select class="form-select" name="questao4" aria-label="Default select example">
                <option selected disabled>Clique para escolher</option>
                <option value="Pagar contas">Pagar contas</option>
                <option value="Reforma da casa">Reforma da casa</option>
                <option value="Compra de carro">Compra de carro</option>
                <option value="Outras">Outras</option>
            </select>
        </div>
        <button type="submit" name="cadastrar" class="btn">Enviar respostas</button>
    </form>
</div>

<?php require_once('../App/views/layouts/footer-home.php') ?>
<?php require_once('../App/views/layouts/header-admin.php') ?>

<div class="container container-respostas-admin">
    <div class="row">
    <h3 class="text-center">Confira as respostas dos clientes</h3>
    <?php foreach($data as $q) { ?>
        <div class="col">
            <div class="card card-resposta" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b>Resposta de Cliente</b></h5>
                    <p class="card-text">Dados coletados do formulário de pesquisa.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Qual sua faixa de idade?</b> <?= $q['questao1']; ?></li>
                    <li class="list-group-item"><b>Qual seu convênio?</b> <?= $q['questao2']; ?></li>
                    <li class="list-group-item"><b>Qual sua faixa salarial?</b> <?= $q['questao3']; ?></li>
                    <li class="list-group-item"><b>Por que você realizou o empréstimo?</b> <?= $q['questao4']; ?></li>
                </ul>
                
            </div>
        </div>
        <?php } ?>
    </div>
    
</div>

<?php require_once('../App/views/layouts/footer-admin.php') ?>
<?php

use App\Auth;
use App\Core\Controller;

class Admin extends Controller {

    public function index() {
        Auth::checkLogin();

        $questao = $this->model('Questao');
        $dados = $questao->listarTodos();

        $this->view('admin/index', $dados);
    }

}

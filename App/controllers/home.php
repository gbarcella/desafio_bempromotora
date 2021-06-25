<?php

use App\Auth;
use App\Core\Controller;

class Home extends Controller
{

    public function index()
    {

        $mensagem = array();

        if (isset($_POST['cadastrar'])) {

            if (empty($_POST['questao1']) || empty($_POST['questao2']) 
            ||empty($_POST['questao3']) ||empty($_POST['questao4'])) {
                $mensagem[] = "Todas questões são obrigatórias!";
            } else {
                $questoes = $this->model('Questao');
                $questoes->questao1 = $_POST['questao1'];
                $questoes->questao2 = $_POST['questao2'];
                $questoes->questao3 = $_POST['questao3'];
                $questoes->questao4 = $_POST['questao4'];
    
                $mensagem[] = $questoes->criar();
            }

            
        }

        $this->view('home/index', $dados = ['mensagem' => $mensagem]);
    }

    public function login()
    {

        Auth::checkNotLogin();

        $mensagem = array();

        if (isset($_POST['acessar'])) {
            if (empty($_POST['email']) || empty($_POST['senha'])) {
                $mensagem[] = "O campo email e senha são obrigatórios";
            } else {
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $mensagem[] = Auth::Login($email, $senha);
            }
        }

        $this->view('home/login', $dados = ['mensagem' => $mensagem]);
    }

    public function logout()
    {
        Auth::Logout();
    }
}

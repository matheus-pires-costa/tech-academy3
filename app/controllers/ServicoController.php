<?php
namespace App\Controllers;

use App\Models\Servico;

class ServicoController {
    public function exibirLista() {
        $servicoModel = new Servico();
        $listaServicos = $servicoModel->listarTodos();

        // Aqui ele chama a sua página HTML antiga que agora está na pasta Views
        require_once __DIR__ . "/../Views/servicos.php";
    }
}
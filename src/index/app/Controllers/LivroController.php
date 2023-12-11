<?php
require_once 'app/Models/LivroModel.php';


class LivroController {
    private $livroModel;

    public function __construct($pdo) {

        $this->livroModel = new LivroModel($pdo);
    }

    public function listarLivros() {
        return $this->livroModel->listarLivros();
    }
}
?>
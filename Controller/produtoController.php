<?php

namespace EcommerceController;

require_once("../Model DB/produtoModel.php");
use EcommerceModel\ProdutoModel;

//outras Exceptions
use Exception;

class ProdutoController{

    public function buscarProdutos($nomeProduto = '') {
        $produtoModel = new ProdutoModel("../Model DB/DBconfig.ini");
        $produtoModel->setNomeProduto($nomeProduto);
        try {
            return $produtoModel->pesquisarProdutos();
        } catch (Exception $e) {
            throw new Exception("Não foi possível buscar os produtos, tente novamente mais tarde");
        }
    }

}
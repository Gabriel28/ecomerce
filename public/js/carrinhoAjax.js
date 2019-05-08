function adicionarProduto(vNomeProduto, vQuantidade, vPlataforma){
    $.ajax({
        method: "POST",
        url: "../Controller/carrinhoProdutoController.php",
        data: { nomeProduto: vNomeProduto, 
                quantidade:  vQuantidade,
                plataforma: vPlataforma,
                origem:     'incluir'
             }
    })
    .done(function(msg){
        if(msg == 'true')
            window.location.href = "produtos.php?status=success&produto="+vNomeProduto; 
        else
        window.location.href = "produtos.php?status=error&produto="+vNomeProduto; 
    })
    .fail(function(){
        alert('Não deu para gravar')
    })
}

function removerProduto(vProdutoId){
    //alert('removeu')
    $.ajax({
        method: "POST",
        url: "../Controller/carrinhoProdutoController.php",
        data: { produtoId: vProdutoId, 
                origem:     'excluir'
             }
    })
    .done(function(msg){
        if(msg =='true') {
            window.location.href = "produtos.php?acao=exclusao&status=success";
        }
        else
            window.location.href = "produtos.php?acao=exclusao&status=error";
            
    })
    .fail(function(){
        window.location.href = "produtos.php?acao=exclusao&status=error";
        //swal("Remoção", "Falha ao solicitar a remoção do produto :(", "error")
    })
}
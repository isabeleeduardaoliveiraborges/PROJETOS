<?php
require 'conexao.php';
$id = 1;
$novoPreco = 149.99;
$sql = "UPDATE livro SET preco = :preco WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':preco', $novoPreco);
$stmt->bindParam(':id', $id);
if (!is_numeric($novoPreco) || $novoPreco <= 0) {
    exit("Preço inválido.");
}  
else {
    echo "Erro ao atualizar produto.";}
?>

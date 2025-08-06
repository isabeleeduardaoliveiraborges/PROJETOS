<?php
require 'conexao.php';
$nome = "dom quexote";
$preco = 199.99;
$estoque = 10;
$sql = "INSERT INTO bananas (nome, preco, estoque) VALUES (:nome, :preco, :estoque)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':estoque', $estoque);
if ($stmt->execute()) {
echo "Produto inserido com sucesso!";
} else {
echo "Erro ao inserir produto.";
}
?>
<?php
require 'conexao.php';
$id = 1;
$sql = "DELETE FROM bananas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($stmt->execute()) {
echo "Produto excluído com sucesso!";
} else {
echo "Erro ao excluir produto.";
}
?>
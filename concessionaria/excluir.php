<?php
$id = 5;

try {
  $pdo = new PDO('mysql:host=localhost;dbname=bdmoises', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('DELETE FROM users WHERE id = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>
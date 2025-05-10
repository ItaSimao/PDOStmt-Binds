<?php 

$host = 'localhost';
$db = 'usuarios';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass);

    // Definindo o charset para utf8mb4
    $pdo->exec("SET NAMES utf8mb4");
$nome = 'Jesus';
$id = 3;

$sql = "UPDATE usuarios SET nome = :novonome WHERE id = :id";
$sql = $pdo->prepare($sql);
// Bind dos parâmetros

$sql->bindValue(':novonome', $nome);
$sql->bindValue(':id', $id);
$sql->execute();


echo "Atualizado com sucesso!";
} catch (PDOException $e) {
    echo "Falhou 1". $e->getMessage();
} catch (Error $e) {
    echo "Falhou 2". $e->getMessage();
} catch (TypeError $e) {
    echo "Falhou 3". $e->getMessage();
} catch (ArgumentCountError $e) {
    echo "Falhou 4". $e->getMessage();
} catch (ParseError $e) {
    echo "Falhou 5". $e->getMessage();
} catch (ArithmeticError $e) {
    echo "Falhou 6". $e->getMessage();
} catch (DivisionByZeroError $e) {
    echo "Falhou 7". $e->getMessage();
} catch (AssertionError $e) {
    echo "Falhou 8". $e->getMessage();
} catch (ErrorException $e) {
    echo "Falhou 9". $e->getMessage();
} catch (TypeError $e) {
    echo "Falhou 10". $e->getMessage();
} catch (ValueError $e) {
    echo "Falhou 11". $e->getMessage();
} catch (RuntimeException $e) {
    echo "Falhou 12". $e->getMessage();
} catch (LogicException $e) {
    echo "Falhou 13". $e->getMessage();
} catch (Exception $e) {
    echo "Falhou". $e->getMessage();
} finally {

    // Fechar a conexão
    // $pdo = null;
    $pdo = null;
    echo "Conexão encerrada!";
}
?>
<!-- <?php
// $con = mysqli_connect('localhost', 'root', '', 'emsql1');
// if (!$con) {
//     echo "A conexão com o banco falhou";
//     die(mysqli_error($con));
// }
?> -->

<?php
$host = "meu-banco-php.123456789012.us-east-1.rds.amazonaws.com"; // Endpoint que você copiou
$user = "admin1"; // Ou o nome de usuário que você definiu ao criar o banco
$password = "Admin123,"; // A senha mestra que você criou
$dbname = "sqlnovo"; // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($host, $user, $password, $dbname);

// Verifica erros
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
echo "Conectado ao banco com sucesso!";
?>
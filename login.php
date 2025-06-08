<?php
// Configurações do banco de dados
$host = 'localhost';
$dbname = 'test_db';
$username = 'root';
$password = '';

// Conexão com o banco de dados (intencionalmente insegura para demonstração)
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Coletando dados do formulário
$user = $_POST['username'];
$pass = $_POST['password'];

// Consulta SQL vulnerável a injection
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";

// Executando a consulta
try {
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($result) > 0) {
        // Login bem-sucedido
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['loggedin'] = true;
        
        // Redireciona para o dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Login falhou
        echo "<script>alert('Login falhou!'); window.location.href = 'index.html';</script>";
    }
} catch(PDOException $e) {
    die("Erro na consulta: " . $e->getMessage());
}
?>
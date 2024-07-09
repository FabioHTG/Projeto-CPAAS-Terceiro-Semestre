<?php
// função para obter uma variável externa pelo seu nome
$parametro = filter_input(INPUT_GET, "parametro");
$mysqli = new mysqli("localhost", "root", "bd142536SQL$", "Cadastro");

// Verifica a conexão
if ($mysqli->connect_errno) {
    echo "Falha ao conectar ao MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}

if ($parametro) {
    $query = "SELECT * FROM contato WHERE nome LIKE '$parametro%' ORDER BY nome";
} else {
    $query = "SELECT * FROM contato ORDER BY nome";
}

if ($result = $mysqli->query($query)) {
}
$result->free();
?>
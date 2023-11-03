<?php
    session_start();

    if(isset($_SESSION['login']) && isset($_SESSION['senha']) && isset($_SESSION['inicia_sessao']) && isset($_SESSION['ultima_requisicao']) && isset($_SESSION['tempo_sessao'])){
        echo "Login: ".$_SESSION['login']."<br>";
        echo "Senha: ".$_SESSION['senha']."<br>";
        echo "Data/hora de início da sessão: ".$_SESSION['inicia_sessao']."<br>";
        echo "Data/hora da última requisição: ".$_SESSION['ultima_requisicao']."<br>";
        echo "Tempo de sessão: ".(time() - $_SESSION['tempo_sessao'])." segundos<br>";
    } else {
        echo "Sessão não iniciada";
    }

?>

<script>
function atualizarPagina() {
    location.reload();
}
setInterval(atualizarPagina, 1000);
</script>
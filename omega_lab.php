<?php
/**
 * DEEP AUDIT RESEARCH - OMEGA LAB v3.0
 * Objetivo: Encontrar e explorar 18 vulnerabilidades.
 */

error_reporting(0); // Desativei erros para você não ter pistas fáceis (Obscuridade)
$db = mysqli_connect("localhost", "root", "", "deep_audit");

// --- MÓDULO DE AUTENTICAÇÃO E SESSÃO ---
if(isset($_COOKIE['session_data'])) {
    // [!] Possível Broken Cryptography / Session Hijacking
    $user_data = base64_decode($_COOKIE['session_data']);
}

// --- MÓDULO DE BUSCA (RECON) ---
$busca = $_GET['search']; // [!] Possível XSS / HTML Injection

// --- MÓDULO DE ARQUIVOS (DOCS) ---
$pagina = $_GET['file']; // [!] Possível LFI

// --- MÓDULO DE REDE (DIAGNÓSTICO) ---
if(isset($_POST['host'])) {
    $target = $_POST['host']; // [!] Possível Command Injection
}

// --- MÓDULO DE CONSULTA XML (XPATH) ---
if(isset($_POST['xml_data'])) {
    $xml = simplexml_load_string($_POST['xml_data']);
    // [!] Possível XPATH Injection
}

// --- MÓDULO DE ACESSO AO BD (SQLi) ---
$user_id = $_GET['id']; // [!] Possível SQL Injection

// --- MÓDULO DE INTEGRAÇÃO LDAP ---
$user_dn = $_GET['dn']; // [!] Possível LDAP Injection

// --- MÓDULO DE EXECUÇÃO DE SCRIPTS ---
if(isset($_GET['run'])) {
    $code = $_GET['run']; // [!] Possível RCE / Eval
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Deep Audit - Omega Lab</title>
    <style>
        body { background: #0a0a0a; color: #00ff00; font-family: 'Courier New', monospace; }
        .container { border: 1px dashed #00ff00; padding: 20px; margin: 20px; }
        input { background: #111; color: #00ff00; border: 1px solid #00ff00; }
    </style>
</head>
<body>
    <h1>[ DEEP AUDIT - OMEGA LAB ]</h1>
    
    <div class="container">
        <h3>Pesquisar no Sistema:</h3>
        <form method="GET">
            <input type="text" name="search">
            <input type="submit" value="Buscar">
        </form>
        <p><?php echo "Resultado para: " . $busca; ?></p>
    </div>

    <div class="container">
        <h3>Diagnóstico de Rede:</h3>
        <form method="POST">
            IP do Alvo: <input type="text" name="host">
            <input type="submit" value="Executar Ping">
        </form>
        <pre><?php if(isset($target)) { system("ping -c 2 " . $target); } ?></pre>
    </div>

    <div class="container">
        <h3>Gerenciador de Documentos:</h3>
        <a href="?file=manual">Ver Manual</a> | <a href="?file=contato">Ver Contato</a>
        <p>Lendo arquivo: <?php if(isset($pagina)) { include($pagina . ".php"); } ?></p>
    </div>

    <div class="container">
        <h3>Perfil do Funcionário:</h3>
        <p>ID selecionado: <?php echo $user_id; ?></p>
        <?php 
            $res = mysqli_query($db, "SELECT username FROM users WHERE id = $user_id");
            // Se você fizer o SQLi certo, os dados aparecem aqui.
        ?>
    </div>

    </body>
</html>

<?
// Destinatário
$para = "rafaelfelps62@gmail.com";

// Assunto do e-mail
$assunto = "Contato - Portifólio";

// Campos do formulário de contato
$nome = $_POST['nome'];
$sobrenome = $_POST['sobre_nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Monta o corpo da mensagem com os campos
$corpo = "<html><body>";
$corpo .= "Nome: $nome $sobrenome";
$corpo .= "Email: $email";
$corpo .= "Mensagem: $mensagem";
$corpo .= "</body></html>";

// Cabeçalho do e-mail
$email_headers = implode("\n", array("De: $nome", "Reply-To: $email", "Subject: $assunto", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

//Verifica se os campos estão preenchidos para enviar então o email
if (!empty($nome) && !empty($sobrenome) && !empty($email) && !empty($mensagem)) {
    mail($para, $assunto, $corpo, $email_headers);
    $msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');window.location.assign('http://localhost/portifolio/index.php');</script>";
} else {
    $msg = "Erro ao enviar a mensagem.";
    echo "<script>alert('$msg');window.location.assign('http://localhost/portifolio/index.php');</script>";
}
?>

if(isset($_POST['enviar'])){
    $assunto = "Contato via site";

   
    $msg = "Nome: " . $_POST["name"] . "<br>";
    $msg .= "Email: " . $_POST["email"] . "<br>";
    $msg .= "Idade: " . $_POST["comments"] . "<p>";

    // email onde tu vai receber a mensagem
    $destinatario = "eduarda.gama@salg.com.br";

    // headers que prepara a mensagem
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST["nome"] . "<" . $_POST["email"] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    // envia o email...
    mail($destinatario,$assunto,$msg,$headers);

    // volta para contato.html
    header("Location: uhu.html");
}
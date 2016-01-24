<html>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$conexao = mysqli_connect('mysql01.rootware.hospedagemdesites.ws', 'rootware', 'WBase94!', 'rootware');

$query = "insert into bruno(nome, email, mensagem) values ('{$nome}', '{$email}', '{$mensagem}')";
mysqli_query($conexao, $query);
mysqli_close($conexao);
$msg = "Sua mensagem foi recebida! Obrigado, entrarei em contato em breve!";
header("location: contato.php?msg=$msg");
/* enviar email ################################# */
$quebra_linha = "\n";
$emailsender = "contato@rootware.com.br";
$nomeremetente = "Rootware";
$emaildestinatario = "brunooliveira.mac@gmail.com";
$assunto = "Portfólio";

$mensagemHTML = '<p>Teste de funcao PHP Mail (): !</p>
<p>Titulo</p>
<p>'.$nome.'</p>
<p>'.$email.'</p>
<p>'.$mensagem.'</p>
<hr>';

$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: ".$emailsender.$quebra_linha;
$headers .= "Replay-To: ".$emailsender.$quebra_linha;

mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);
/* fim enviar email######################################*/

exit();
?>
    
Mensagem <?php echo $nome; ?>
</html>
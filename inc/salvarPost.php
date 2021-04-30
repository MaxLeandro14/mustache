<?php
function salvarPosts(){

    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$fone = $_POST['fone'];
	$nascimento = $_POST['nascimento'];
	$cep = $_POST['cep'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];

	global $wpdb;     
	$table_name = $wpdb->prefix . 'formdata';
	$message = 'Insert to database tutorial.';     
	$date = date('Y-m-d H:i:s');     
	$result = $wpdb->insert($table_name, array('id' => NULL, 'nome' => $nome, 'email' => $email, 'fone' => $fone, 'nascimento' => $nascimento, 'cep' => $cep, 'endereco' => $endereco, 'numero' => $numero, 'bairro' => $bairro, 'cidade' => $cidade, 'estado' => $estado)); 

	if($result){
		echo "Dados salvo com sucesso! Verifique a tabela 'wp_formdata' no banco de dados.";
	 } else {
	   echo "Não foi possível enviar seus dados, tente novamente mais tarde!";
	 }

	exit;
}
add_action('wp_ajax_salvarPosts','salvarPosts');
add_action('wp_ajax_nopriv_salvarPosts','salvarPosts');

?>
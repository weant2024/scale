<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "../sec/config.php"; 
include "../sec/sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: ../sec/sec_tipo.php"); exit;
}
?>
		<?php
$dia = date('d');
$mes = date('m');
$ano = date('Y');
		// Definimos o nome do arquivo que será exportado
		$arquivo = "Scale - Pesquisa de usuários $dia-$mes-$ano.xls";
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Login</b></td>';
		$html .= '<td><b>Matr&iacute;cula</b></td>';	
		$html .= '<td><b>Email</b></td>';	
		$html .= '<td><b>Telefone</b></td>';	
		$html .= '<td><b>N&iacute;vel</b></td>';			
		$html .= '<td><b>Status</b></td>';			
		$html .= '<td><b>Hor&aacute;rio</b></td>';	
		$html .= '<td><b>dia</b></td>';			
		$html .= '<td><b>M&ecirc;s</b></td>';	
		$html .= '<td><b>Ano</b></td>';	
		$html .= '<td><b>Operador</b></td>';		
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 		
$busca_query = "SELECT * FROM registrousuario ORDER BY nome ASC";
$result = $conn->query($busca_query);

if (empty($result)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}
while ($dados = mysqli_fetch_assoc($result)) {	
			$html .= '<tr>';
			$html .= '<td>'.$dados["id"].'</td>';
			$html .= '<td>'.$dados["nome"].'</td>';
			$html .= '<td>'.$dados["login"].'</td>';
			$html .= '<td>'.$dados["matricula"].'</td>';	
			$html .= '<td>'.$dados["email"].'</td>';			
			$html .= '<td>'.$dados["telefone"].'</td>';
			$html .= '<td>'.$dados["pnivel"].'</td>';			
			$html .= '<td>'.$dados["pativo"].'</td>';
			$html .= '<td>'.$dados["horario"].'</td>';
			$html .= '<td>'.$dados["dia"].'</td>';
			$html .= '<td>'.$dados["mes"].'</td>';
			$html .= '<td>'.$dados["ano"].'</td>';
			$html .= '<td>'.$dados["operador"].'</td>';			
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>

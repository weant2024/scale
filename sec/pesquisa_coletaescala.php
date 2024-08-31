<?php
include "config.php";
include "sec_verifica.php";
if ($nivel < 2) {
    header("Location: sem_acesso.php");
    exit;
}

// Verifica se a data foi passada na URL
if (isset($_POST['date'])) {
    // Sanitiza e obtém a data
    $date = htmlspecialchars($_POST['date']);

    // Tenta separar a data usando '-' como delimitador
    $separatedData = explode('-', $date);

    // Verifica se a data está no formato correto (dia-mes-ano)
    if (count($separatedData) == 3) {
        $escaladia = $separatedData[0];
        $escalames = $separatedData[1];
        $escalaano = $separatedData[2];

        $query_escalahorario = "
            SELECT DISTINCT e.id, e.id_usuario, e.id_afastamento, e.id_contrato, e.horarioinicio, e.horariofim, e.id_local, e.dia, e.mes, e.ano, r.id_usuario, r.id_cliente
            FROM escala e
            JOIN relacao_cliente r ON e.id_usuario = r.id_usuario
            WHERE r.id_cliente = $id_cliente_vdl_licenca
            AND dia='$escaladia' AND mes='$escalames' AND ano='$escalaano'
        ";
        $resultado_escalahorario = $conn->query($query_escalahorario);

        $escalas = [];
        $afastamentos = [];

        if ($resultado_escalahorario->num_rows > 0) {
            while ($dados_escalahorario = $resultado_escalahorario->fetch_assoc()) {
                $id_escalahorario = $dados_escalahorario['id'];
                $login_escalahorario = $dados_escalahorario['id_usuario'];
                $login_escalaidcontrato = $dados_escalahorario['id_contrato'];
                $login_escalalocaldetrabalho = $dados_escalahorario['id_local'];
                $login_escalainiciodeexpediente = $dados_escalahorario['horarioinicio'];
                @$login_escalainiciodeintervaloexpediente = $dados_escalahorario['intervaloinicio'];
                @$login_escalafimdeintervaloexpediente = $dados_escalahorario['intervalofim'];
                $login_escalafimdeexpediente = $dados_escalahorario['horariofim'];
                $login_escalaidafastamento = $dados_escalahorario['id_afastamento'];

                $query_usuarioescalado = "SELECT * FROM usuario WHERE id='$login_escalahorario'";
                $resultado_usuarioescalado = $conn->query($query_usuarioescalado);
                $dados_usuarioescalado = $resultado_usuarioescalado->fetch_assoc();
                $nome_usuarioescalado = $dados_usuarioescalado['nome'];
                $login_usuarioescalado = $dados_usuarioescalado['login'];

                $query_contratoescalado = "SELECT * FROM contrato WHERE id='$login_escalaidcontrato'";
                $resultado_contratoescalado = $conn->query($query_contratoescalado);
                $dados_contratoescalado = $resultado_contratoescalado->fetch_assoc();
                @$nome_contratoescalado = $dados_contratoescalado['nome'];

                $query_localescalado = "SELECT * FROM local WHERE id='$login_escalalocaldetrabalho'";
                $resultado_localescalado = $conn->query($query_localescalado);
                $dados_localescalado = $resultado_localescalado->fetch_assoc();
                @$nome_localescalado = $dados_localescalado['nome'];

                if ($login_escalaidafastamento == 0) {
                    $escalas[] = [
                        'nome' => $nome_usuarioescalado,
                        'contrato' => $nome_contratoescalado,
                        'local' => $nome_localescalado,
                        'inicio' => $login_escalainiciodeexpediente,
                        'fim' => $login_escalafimdeexpediente
                    ];
                } else {
                    $query_afastamento = "SELECT * FROM afastamento WHERE id='$login_escalaidafastamento'";
                    $resultado_afastamento = $conn->query($query_afastamento);
                    $dados_afastamento = $resultado_afastamento->fetch_assoc();
                    $id_afastamento = $dados_afastamento['id'];

                    $afastamentos[] = [
                        'nome' => $nome_usuarioescalado,
                        'motivo' => $dados_afastamento['motivo'],
                        'datainicial' => $dados_afastamento['datainicial'],
                        'datafinal' => $dados_afastamento['datafinal']
                    ];
                }
            }
        }

        // Exibir tabela de escalas
        if (!empty($escalas)) {
?>
            <table class="legenda">
                <tr>
                    <th>Turnos</th>
                </tr>
                <tr>
                    <th>Nome</th>
                    <th>Contrato</th>
                    <th>Local</th>
                    <th>Início de Expediente</th>
                    <th>Final de Expediente</th>
                </tr>
<?php
            foreach ($escalas as $escala) {
?>
                <tr>
                    <td><a href='editarturno.php?id=<?php echo $id_escalahorario; ?>'><?php echo $escala['nome']; ?></a></td>
                    <td><?php echo $escala['contrato']; ?></td>
                    <td><?php echo $escala['local']; ?></td>
                    <td><?php echo $escala['inicio']; ?></td>
                    <td><?php echo $escala['fim']; ?></td>
                </tr>
<?php
            }
?>
            </table>
            <div class="record-count" align="right">
<?php
            $num_rows = count($escalas);
            echo "<p><b>$num_rows registros</b></p>";
?>
            </div>
<?php
        }

        // Exibir tabela de afastamentos
        if (!empty($afastamentos)) {
?>
            <table class="legenda">
                <tr>
                    <th>Afastamentos</th>
                </tr>
                <tr>
                    <th>Nome</th>
                    <th>Motivo</th>
                    <th>Data Inicial</th>
                    <th>Data Final</th>
                </tr>
<?php
            foreach ($afastamentos as $afastamento) {
?>
                <tr>
                    <td><a href='editarafastamento_link.php?id=<?php echo $id_escalahorario; ?>&data=<?php echo "$escaladia/$escalames/$escalaano"; ?>'><?php echo $afastamento['nome']; ?></a></td>
                    <td><?php echo $afastamento['motivo']; ?></td>
                    <td><?php echo $afastamento['datainicial']; ?></td>
                    <td><?php echo $afastamento['datafinal']; ?></td>
                </tr>
<?php
            }
?>
            </table>
            <div class="record-count" align="right">
<?php
            $num_rows = count($afastamentos);
            echo "<p><b>$num_rows registros</b></p>";
?>
            </div>
<?php
        }
    }
}
?>

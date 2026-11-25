<?php 
include "acoes.php";

$enderecos = buscartabela("enderecos");
$verificar_linhas = $enderecos->num_rows> 0;
?>

<?php  if($verificar_linhas): ?>
    <?php foreach($enderecos as $endereco):?>
        <H2>dados</H2>
    <ul>
        <li><?php echo $enderecos['CEP']?></li>
        <li><?php echo $enderecos['logradouro']?></li>
           <li><?php echo $enderecos['bairro']?></li>
           <li><?php echo $enderecos['localidade']?></li>
            <li><?php echo $enderecos['uf']?></li>
            <li><?php echo $enderecos['estado']?></li>
            li><?php echo $enderecos['regiao']?></li>
            <li><?php echo $enderecos['ddd']?></li>
    </ul>
    <?php endforeach?>

<?php else: ?>
    <p>nenhum <b>CEP</b> em nosso sistema</p>
<?php endif?>
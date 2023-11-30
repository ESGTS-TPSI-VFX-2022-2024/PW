<?php 
// Inclui o arquivo de controller da página
include_once 'controllers/indexController.php';
?>

<?php 
    include_once 'includes/head.php';
?>

<?php 
    include_once 'includes/menu.php';
?>


<?php echo getTitulo(); ?>

<form action="index.php" method="POST">
    <input type="text" name="nome" placeholder="Digite o nome">
    <button name="Enviar" type="submit">Enviar</button>
</form>

<table>
    <thead>
        <tr>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        <?php echo getPessoas($pessoas); ?>
    </tbody>
</table>


<?php 
    include_once 'includes/footer.php';
?>
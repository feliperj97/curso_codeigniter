<?php if(!empty($get_home)): ?>
		<?php foreach($get_home as $index => $result): ?>
            <a href="<?= base_url('index.php/cadastro/editar/' . $result->id) ?>"><?= $result->name_site ?></a>
            <a href="<?= base_url('index.php/cadastro/delete/' . $result->id) ?>">Deletar</a><br><br>
        <?php endforeach; ?>
        
	<?php else: ?>
		<p>Sem conteúdo</p>
<?php endif; ?>
   

<form action="<?= $url ?>" method="post">
    <input type="text" name="name_site" value="<?= isset($form['name_site']) ? $form['name_site'] : ''; ?>">
    <input type="text" name="url" value="<?= isset($form['url']) ? $form['url'] : ''; ?>">
    <input type="submit" value="Gravar">
</form>
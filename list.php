<?p<?php $title = 'Lista de Productos' ?>
<?php ob_start() ?>
<h1>List of Post1</h1>
<ul>
    <?php foreach ($posts as $post): ?>
    <li>
        <a href="/read?id=<?php echo $post['id']?>">
            <?php echo $post['nombre']?>
            <?php echo $post['precio']?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
<?php $content = ob_get_clean() ?>
<?php include 'base.php' ?>

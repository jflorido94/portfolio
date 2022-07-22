<form action="subir" method="post" enctype="multipart/form-data">
    <input type="file" name="pdf" id="pdf">

    <button type="submit" class="btn btn-primary">Subir</button>
</form>

<?php if (! empty($archive) && is_file($archive)) : ?>

<?= var_dump($archive) ?>

<?php endif ?>
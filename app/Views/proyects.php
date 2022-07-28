<form action=<?= route_to('new_proyect') ?> method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Categoria</label>
        <select class="form-control" name="category" id="category">
            <option value="api">API</option>
            <option value="front">Front</option>
            <option value="soft">Software</option>
        </select>
    </div>

    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="type" id="type" value="personal"> Personal
            <input class="form-check-input" type="radio" name="type" id="type" value="profesional"> Profesional
            <input class="form-check-input" type="radio" name="type" id="type" value="lectivo"> Lectivo
        </label>
    </div>

    <div class="form-group">
        <label for="date">Repositorio</label>
        <input type="date" name="date" value="<?php echo date("Y-m-d");?>">
    </div>

    <div class="form-group">
        <label for="git_url">Repositorio</label>
        <input type="url" name="git_url" id="git_url" class="form-control">
    </div>

    <div class="form-group">
        <label for="url">Url</label>
        <input type="url" name="url" id="url" class="form-control">
    </div>

    <div class="form-group">
        <label for="image">Vista Previa</label>
        <input type="file" name="image" id="image">
    </div>

    <div class="form-group">
        <label for="details">Detalles</label>
        <input type="text" name="details" id="details" class="form-control" placeholder="">
    </div>

    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="in_progress" id="in_progress" value="true"> En progreso
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Subir</button>
</form>


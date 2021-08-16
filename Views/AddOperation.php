<div>
    <form action="<?php echo(FRONT_ROOT) ?>Operation/addOperation/" method="post">
        <label for="description">Description of the operation</label>
        <input type="text" name="description" id="">
        <label for="mount">Monto</label>
        <input type="number" name="mount" id="">
        <label for="type">Tipo</label>
        <select name="type" id="">
            <option value="gasto">Gasto</option>
            <option value="ganancia">Ganancia</option>
        </select>
        <label for="">Categoria</label>
        <select name="category" id="">
            <?php 
                foreach($categories as $category)
                {
                    echo ('<option value="'.$category->getId().'">'. $category->getName() . '</option>');
                }
            ?>
        </select>
        <label for="dateof">Fecha de la transaccion</label>
        <input type="date" name="dateof" id="">
        <button type="submit">Submit</button>
    </form>
</div>
<div>
    <a href="<?php echo(FRONT_ROOT)?>Operation/addOperationView/"></a>
</div>
<div>
    <h1>ADD NEW CATEGORY</h1>
    <form action="<?php echo(FRONT_ROOT)?>Category/addCategory/" method="post">
        <label for="name">Name of the category</label>
        <input type="text" name="name" id="">
        <button type="submit">Submit</button>
    </form>


</div>

<div>

    <h2>Edit Category</h2>
    <form action="<?php echo(FRONT_ROOT)?>Category/editCategory/" method="post">
        <label for="category">Select Category to edit</label>
        <select name="id" id="">
            <?php 
                foreach($categories as $category)
                {
                    echo ('<option value="'.$category->getId().'">'. $category->getName() . '</option>');
                }
            ?>
        </select>
        <label for="name">New Name</label>
        <input type="text" name="name" id="">
        <button type="submit">Update</button>
    </form>
</div>
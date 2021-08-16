<div>
    <h1>DASHBOARD</h1>
    <a href="<?php echo (FRONT_ROOT)?>Operation/addOperationView">Add Operation</a>
    <a href="<?php echo(FRONT_ROOT)?>Category/addCategoryView">Add Category</a>
    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Type</th>
                <th>Mount</th>
                <th>Category</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($operations as $operation) {
                echo ('<tr>');
                echo ('<th>' . $operation->getDescription() . '</th>');
                echo ('<th>' . $operation->getType() . '</th>');
                echo ('<th>' . $operation->getMount() . '</th>');
                echo ('<th>' . $operation->getCategory()->getName() . '</th>');
                echo ('<th>' . $operation->getDateof() . '</th>');
                echo ('</tr>');
            }
            ?>
        </tbody>
    </table>
</div>
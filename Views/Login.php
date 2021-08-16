<div>
    <h1>LOGIN</h1>
    <form action="<?php echo(FRONT_ROOT)?>Admin/login" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="" placeholder="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="">
        <button type="submit">LOGIN</button>
    </form>
    <p>
        <?php echo($message)?>
    </p>

</div>
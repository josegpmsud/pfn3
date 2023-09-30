<nav class="flex justify-between bg-white my-2 w-11/12 h-9  rounded-md">
    <a class="flex items-center" href="/src/views/dashboard.php">
    <span class="material-symbols-outlined">
        menu
    </span>
    Home
    </a>
    <label for="login"><?= $_SESSION['sesion']['nombre'] . " " . $_SESSION['sesion']['apellido'] . "<a href='/src/handle_db/closesesion.php'>(Logout)</a>" ?></label>
    
    
</nav>




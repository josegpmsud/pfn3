<nav class="flex justify-between bg-white my-2 w-11/12 h-9  rounded-md dark:bg-[#111827]">
    <a class="flex items-center text-slate-800 dark:text-white" href="/src/views/dashboard.php">
    <span class="material-symbols-outlined text-slate-800 dark:text-white">
        menu
    </span>
    Home
    </a>
    <button class="text-slate-800 dark:text-white" id="darkMode"><span class="material-symbols-outlined">brightness_6</span></button>
    
    <label class="text-slate-800 dark:text-white" for="login"><?= $_SESSION['sesion']['nombre'] . " " . $_SESSION['sesion']['apellido'] . "<a class='text-slate-800 dark:text-white' href='/src/handle_db/closesesion.php'>(Logout)</a>" ?></label>
    
    
</nav>




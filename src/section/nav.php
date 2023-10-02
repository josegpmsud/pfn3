<nav class="flex justify-between items-center bg-white my-2 w-15/16 w-11/12 h-9  rounded-md dark:bg-[#111827]">
    <a class="flex items-center text-slate-800 dark:text-white" href="/src/views/dashboard.php">
    <span class="material-symbols-outlined text-slate-800 dark:text-white">
        menu
    </span>
    Home
    </a>
    <button class="text-slate-800 dark:text-white" id="darkMode"><span class="material-symbols-outlined">brightness_6</span></button>
    
    <label class="text-slate-800 dark:text-white flex" for="login"><?= $_SESSION['sesion']['nombre'] . " " . $_SESSION['sesion']['apellido'] . "<a class='text- text-red-600  ' href='/src/handle_db/closesesion.php'><span class='material-symbols-outlined'>
logout
</span></a>" ?></label>
    
    
</nav>




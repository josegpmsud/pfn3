<?php require_once("../section/head.php") ?>

<body>
    <?php require_once("../section/nav.php") ?>

    

    <?php
        
        $id = $_GET["id"];
        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
        $stmnt = $mysqli->query("SELECT * FROM profiles WHERE id=$id");
        $result = $stmnt->fetch_assoc();


        if(isset($result['photo'])){
            $dataImg = base64_encode($result['photo']);
            $image= "<img class='image-perfil' src='data:img/jpg;base64,$dataImg' height='100'/>";
        }else{
            $image = "<img class='image-perfil' src='../assets/sinPerfil.jpg' alt=''>";
        }

        
    ?>
    <br>
    <br>
    <section class="p-show">
    
        <a class="back" href="../views/show.php?email=<?php echo $_SESSION['user'];?>"><span class="material-symbols-outlined back"> arrow_back_ios </span> Back </a>

    <section class="cont-edit">
    <form action="../handle_db/update.php" method="post" enctype="multipart/form-data">

        <h1>Change Info</h1>
        <span>Changes will be reflected to every services</span><br><br>
        
        <input type="text" hidden name="id" value="<?php echo $result['id']?>">
        
        
        <label class="label-edit" class="button-photo" for="photo"><?php echo $image?><span class="material-symbols-outlined photo-icon"> photo_camera </span> <span class="change-photo-label">CHANGE PHOTO</span></label>
        <input hidden id="photo" type="file" name="photo" value="">

        <br> <br>

        <label class="label-edit" for="nam">Name</label><br>
        <input class="input-edit" id="nam" type="text" name="nam" value="<?php echo $result['nam']?>" placeholder="Enter your name...">

        <br> <br>

        <label class="label-edit" for="bio">Bio</label><br>
        <input class="input-edit-bio" id="bio" type="text" name="bio" value="<?php echo $result['bio']?>" placeholder="Enter your bio...">

        <br> <br>

        <label class="label-edit" for="phone">Phone</label><br>
        <input class="input-edit" id="phone" type="text" name ="phone" value="<?php echo $result['phone']?>" placeholder="Enter your name...">

        <br> <br>

        <label class="label-edit" for="email">Email</label><br>
        <label><?php
            if(isset($_SESSION['mess'])) {echo $_SESSION['mess'];}
        ?></label>
        <input class="input-edit" id="email" type="email" name="email" value="<?php echo $result['email']?>" placeholder="Enter your email...">

        <br> <br>

        <label class="label-edit" for="pass">Password</label><br>
        <input class="input-edit" id="pass" type="password" name="pass" value="" placeholder="Enter your password...">

        <br> <br>

        <button class="button-save" type="submit">Save</button>


    </form>
    </section>
    <?php
        require_once("../section/footer.php");
    ?> 
    </section>

</body>
</html>

<?php


?>
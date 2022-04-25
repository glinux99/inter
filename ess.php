<?php $index=1;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('i_menu/header.php');?>
    <title>Document</title>
</head>
<body>
    <?php include('i_menu/menu_p.php');?>
    <div class="d-md-flex d-lg-flex">
        <div class="menu-g">
            <div class="d-md-block  d-lg-block d-none" >
                <?php include('i_menu/menug-md.php');?>
            </div>
            <div id="body_div" class="d-md-none  d-lg-none d-block">
                <!-- Menu gauche flottant -->
                <div class="menug">
                    <?php include('i_menu/menug.php');?>
                </div>
                <!-- Fin du boutton menu gauche flottant et son button -->
            </div>
        </div>
        <div class="vrai-body">
            <div class=" row mx-0 position-relative">
                <div class="col-3 p-0">
                    <div class="title bg-danger px-2 d-flex align-items-center " style="clip-path: polygon(0 0, 100% 0%, 70% 100%, 0% 100%); border: 1px solid green; height: 7vh;">
                        Urgence
                    </div>
                    <div style="position: absolute; z-index: 1;" class="d-md-none d-lg-none d-block">
                        <button class="btn float-start position-fixed m-0 p-0">
                            <i class="bi-list-columns bi--3xl text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#menug" aria-controls="menug"></i>
                        </button>
                    </div>
                </div>           
                <div class="message col-9">
                    Une bombe a explose dans un quartier de la ville mais n'a pas fait beaucoup de degat
                </div>
            </div>
            <div class="group-3">
                <?php while($x<6){?>
                    <div class="card mx-1 text-white arrounded">
                        <img src="i_img/inter7.jpg" alt="image" class="card-img-top" height="350">
                        <div class="card-img-overlay m-0 p-0">
                            <div class="card-title bg-dark p-2 h-25 overflow-hidden">
                                <div style="clip-path: polygon(0 0, 100% 0%, 70% 100%, 0% 100%);" class="bg-danger py-1 ps-2">Securite</div>
                                <div>
                                    Attaques des ADF a masisi Attaques des ADF a masisi
                                Attaques des ADF a masisi Attaques des ADF a masisi Attaques des ADF a masisi Attaques des ADF a masisi
                                Attaques des ADF a masisi Attaques des ADF a masisi
                                </div>
                            </div>
                            <div class="card-body fixed-bottom position-absolute px-2" style="max-height: 40%;overflow: hidden;">
                                Je suis un des survivants mais on a juste eu la chance
                                Je suis un des survivants mais on a juste eu la chance
                                Je suis un des survivants mais on a juste eu la chance
                                Je suis un des survivants mais on a juste eu la chance
                                Je suis un des survivants mais on a juste eu la chance
                                Je suis un des survivants mais on a juste eu la chance
                            </div>
                        </div>
                    </div>
                <?php $x++;}?>
            </div>
            <div class="d-flex justify-content-center my-2">
                <button class="btn btn-dark px-3 me-1">Back</button>
                <button class="btn btn-success px-3">Next</button>
            </div>
        </div>
    </div>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit odit nemo similique. Veniam atque, enim sint eligendi quisquam quia voluptatum ad sunt tenetur ut facere ex minus consectetur porro aperiam officia aspernatur fugiat dignissimos incidunt. Unde accusantium iusto cum consectetur voluptas laudantium aperiam magni ab architecto sunt fuga perspiciatis aspernatur optio ea expedita impedit, corporis debitis. Consequuntur ab magni fuga iure excepturi placeat exercitationem earum aliquam nulla explicabo distinctio tempora, molestias quas alias? Ducimus, similique voluptatum deleniti excepturi quos iure distinctio dolorem aspernatur perferendis blanditiis ipsam nesciunt, ea facilis expedita. Enim itaque eveniet quo, incidunt cum aut nemo temporibus nostrum perferendis quidem dicta officiis quis aliquam non quam suscipit, animi fugit quod. Repudiandae fugit, at ea sequi pariatur maxime iusto labore eaque error minus fugiat blanditiis assumenda! Odit quas quo at similique doloremque inventore et! Quaerat id sit quasi consequatur, ratione quia blanditiis in beatae quam facere. Odit, rerum voluptatum eveniet repudiandae quam eligendi. Aut dolorem maiores qui, reiciendis doloremque voluptate officiis quaerat culpa eum reprehenderit? Odit reiciendis repellat ipsam minima, ducimus similique facere! Distinctio rem, cumque deleniti dicta harum tenetur enim ducimus eaque minus consectetur ab quisquam. Esse at asperiores, unde cupiditate aut quisquam fugiat dolore alias! Maiores dolore officiis odio provident delectus, rerum exercitationem vitae harum accusamus architecto. Doloremque provident laborum cum, id itaque quas pariatur sunt maxime totam. Enim, sunt nisi. Est ab minima sed, modi distinctio voluptatem earum dolor dicta quisquam enim quas nesciunt soluta rem exercitationem officiis adipisci? Dolorem, facilis eaque. Eius odit eos beatae cupiditate ea maxime ipsum temporibus repudiandae officia voluptate illo maiores saepe molestiae dolor itaque accusantium sapiente, consequuntur, vitae explicabo nesciunt architecto! Quas ea labore nobis tempora perspiciatis. Rerum, vel eum vitae repudiandae, earum magnam officiis alias ut illo aliquid odit necessitatibus modi vero architecto ratione at! Obcaecati, asperiores. Dolores, non.
    <div class="footer">
        <?php include('i_menu/footer.php');?>
    </div>
</body>
</html>


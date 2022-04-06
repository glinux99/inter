<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
    <div class="navbar-brand">
        <img src="<?php echo $logo;?>" alt="mon logo" srcset="" class="d-block" height="40" width="60">
    </div>
    <div class="d-block d-sm-none">
        <div class="navbar-toggler text-center" style="color:rgb(30, 255, 0); z-index: 2"><span class="h5 bi-facebook m-2"></span><span class="h5 bi-instagram m-2"></span><span class="h5 bi-whatsapp m-2"></span></div>
        <div class="collapse in search ">
            <input id="search" type="search"  class="form-control border-0 bg-light" placeholder="search" />
        </div>
    </div>
    <span class="h5 bi-search text-white d-block d-sm-none h2 my-auto" role="button" data-bs-toggle="collapse" data-bs-target=".search"></span>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".coll">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse coll justify-content-center">
        <hr class="border-top border-success  border-2 p-0 m-0 mt-1">
        <ul class="nav nav-pills " role="tablist">
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="<?php echo $acceuil;?>" role="tab" aria-selected="true"><span class="h5 bi-house pIcons"></span><?php echo _(" Acceuil");?></a>
            </li>
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="<?php echo $apropos;?>"  title="Navigation vers apropos" role="tab" aria-selected="true">&nbsp;&nbsp;<span class="h5 bi-info-circle pIcons"></span><?php echo _(" A propos");?></a>
            </li>
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="#" role="tab" aria-selected="true"><span class="h5 bi-globe pIcons"></span><?php echo _(" Partenaires");?></a>
            </li>
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="<?php echo $service;?>" role="tab" aria-selected="true"><span class="h5 bi-briefcase pIcons"></span><?php echo _(" Services");?></a>
            </li>
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="#" role="tab" aria-selected="true"><span class="h5 bi-journal-plus pIcons"></span><?php echo _(" Divers");?></a>
            </li>
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="<?php echo $connexion;?>" role="tab" aria-selected="true">&nbsp;&nbsp;&nbsp;&nbsp;<span class=" h5 bi-person-bounding-box pIcons"></span><?php echo _(" Connection");?></a>
            </li>
        </ul>
        <form action="">
        <ul class="list-inline text-right my-auto d-none d-md-block ">
            <li class="list-inline-item">
              <input type="text" name="search" id="" class="form-control">
            </li>
            <li class="list-inline-item">
                <button type="submit" class="btn btn-success">Rechercher</button>
            </li>
        </ul>
    </form>
    </div>
</nav>
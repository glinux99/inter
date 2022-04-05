<div class="col-2 col-lg-2 d-flex flex-column align-items-center align-items-sm-start text-white" style="background: #0f222b!important; color: #666;">
            <div class="">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                    <li class="nav-item border-bottom w-100 pt-2 pb-2">
                        <a href="<?php echo $actus;?>" class="nav-link align-middle  h-50">
                            <i class="h5 bi-globe"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Actualite");?></span>
                        </a>
                    </li>
                    <li class="nav-item border-bottom w-100 pt-2 pb-2">
                        <a href="" class="nav-link align-middle  h-50" role="button" data-bs-toggle="collapse" data-bs-target=".humour">
                            <i class="h5 bi-chat-right-dots"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Humours | Amour");?></span>
                        </a>
                        <ul class="collapse nav-collapse humour">
                            <li class="navbar-nav">
                                <ul class="list-unstyled">
                                    <a href="<?php echo $amour;?>" class="nav-link">
                                        <li class="nav-item w-100">
                                            <span class="bi-chat"></span><span class="ms-1 d-none d-sm-inline"><?php echo("Messages d'amour");?></span> 
                                        </li>
                                    </a>
                                    <a href="<?php echo $blagues;?>" class="nav-link">
                                        <li class="nav-item w-100 ">
                                            <span class="bi-emoji-laughing"></span><span class="ms-1 d-none d-sm-inline"><?php echo("Blagues");?>
                                        </li>
                                    </a>
                                    <a href="<?php echo $videosBlagues;?>" class="nav-link">
                                        <li class="nav-item w-100 ">
                                            <span class="bi-play-btn-fill"></span> <span class="ms-1 d-none d-sm-inline"><?php echo("Videos droles");?>
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item border-bottom w-100 pt-2 pb-2">
                        <a href="<?php echo $service;?>" class="nav-link align-middle  h-50">
                            <i class="h5 bi-briefcase"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Services");?></span>
                        </a>
                    </li>
                    <li class="nav-item border-bottom w-100 pt-2 pb-2">
                        <a href="<?php echo $inscription;?>" class="nav-link align-middle  h-50">
                            <i class="h5 bi-person"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Inscritpion");?></span>
                        </a>
                    </li>
                    <li class="nav-item border-bottom w-100 pt-2 pb-2">
                        <a href="<?php echo $livres;?>" class="nav-link align-middle  h-50">
                            <i class="h5 bi-file-earmark-pdf text-danger"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Livres");?></span>
                        </a>
                    </li>
                    <li class="nav-item border-bottom w-100 pt-2 pb-2">
                        <a href="<?php echo $tutos;?>" class="nav-link align-middle  h-50 d-flex justify-content-center ">
                            <i class="h5 bi-folder2-open"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Tutoriels et Astuces");?></span>
                        </a>
                    </li>
                    <li class="nav-item border-bottom w-100 pt-2 pb-2">
                        <a href="<?php echo $gospel;?>" class="nav-link align-middle  h-50">
                            <i class="h5 bi-music-note-list"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Songs player");?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
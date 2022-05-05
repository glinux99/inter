<div class=" d-flex " style="">
    <div id="dimi" class="bg">
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start ms-1" id="menu">
        <li class="nav-item text-center ">
            <a href="/actus" class="nav-link border-top border-primary">
                <i class="bi--2xl bi-globe"></i> <span class="ms-0"><?php echo _("Actualite");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>i_humours/humours" class="nav-link h-50">
                <i class="bi--2xl bi-chat-right-dots"></i> <span class="ms-0"><?php echo _("Humours");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>i_services/services" class="nav-link h-50">
                <i class="bi--2xl bi-briefcase"></i> <span class="ms-0"><?php echo _("Services");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>i_login/login-inscription" class="nav-link h-50">
                <i class="bi--2xl bi-person"></i> <span class="ms-0"><?php echo _("Incription");?></span>
            </a>
        </li>
        <li class="nav-item d-flex mx-auto ">
            <a href="<?php echo $dir;?>i_pdf/librairie" class="nav-link h-50 px-4">
                <i class="bi--2xl bi-file-earmark-pdf d-block ps-2"></i> <span class="ms-0 d-block"><?php echo _("Livres");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>tutoriels/tutos" class="nav-link h-50">
                <i class="bi--2xl bi-folder2-open"></i> <span class="ms-0"><?php echo _("Tutoriels");?></span>
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="<?php echo $dir;?>i_songs/songs" class="nav-link h-50">
                <i class="bi--2xl bi-music-note-list"></i> <span class="ms-0"><?php echo _("Songs");?></span>
            </a>
        </li>  
    </ul>
    </div>
    <div class="bg-primary  rounded-end click d-flex border-success border elmnt" style="height: 40vh" onclick="dimi();">
        <span class="bi-box-arrow-left bi--xl align-self-center m-2 boxSpan">

        </span>
    </div>
</div>
<script>
    function dimi(){
        $('.boxSpan').toggleClass('bi-box-arrow-right bi-box-arrow-left');
        // $('.elmnt').toggleClass('bg-primary bg');
        $('#dimi').stop().animate({width: "toggle", overflow: 'hidden'}, "slow");
        // $('#dimi').css('overflow', 'hidden');

       
    }
</script>
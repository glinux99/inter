<nav class="navbar navbar-expand-lg navbar-dark bg px-3">
    <div class="nav-brand">
        <img src="i_menu/logo.png" alt="logo" class="d-block" height="40" width="60">
    </div>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".coll">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse coll justify-content-center">
        <ul class="nav nav-pills bi--lg" role="tablist" style="display: ;">
            <li class="navbar-item">
                <a class="nav-link" href="/inter/" role="tab" aria-selected="true">
                    <span class="bi-house-door"></span><?php echo _(" Acceuil");?>
                </a>
            </li>
            <li class="navbar-item">
                <a href="apropos" class="nav-link" role="tab" aria-selected="true">
                    <span class="bi-info-circle"></span><?php echo _("A propos");?>
                </a>
            </li>
            <li class="navbar-item">
                <a href="" class="nav-link" role="tab" aria-selected="true">
                    <span class="bi-briefcase"></span><?php echo _("Services");?>
                </a>
            </li>
            <li class="navbar-item">
                <a href="" class="nav-link" role="tab" aria-selected="true">
                    <span class="bi-people-fill"></span><?php echo _("Partenaires");?>
                </a>
            </li>
            <li class="navbar-item">
                <a href="" class="nav-link" role="tab" aria-selected="true">
                    <span class="bi-person-bounding-box"></span><?php echo _("Connection");?>
                </a>
            </li>
        </ul>
    </div>
</nav>
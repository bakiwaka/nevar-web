<nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="/#home"><?= $lang["nav_home"]?></a></li>
            <li><a class="nav-link scrollto" href="/#about"><?= $lang["nav_about"]?></a></li>
            <li><a class="nav-link scrollto" href="/#features"><?= $lang["nav_features"]?></a></li>
            <li><a class="nav-link scrollto" href="/#advantages"><?= $lang["nav_advantage"]?></a></li>
            <li><a class="nav-link scrollto" href="/#activeU"><?= $lang["nav_active"]?></a></li>
            <li><a class="nav-link scrollto" href="/#faq"><?= $lang["nav_faq"]?></a></li>
            <li><a class="nav-link scrollto" href="/#team"><?= $lang["nav_team"]?></a></li>

            <li><a class="nav_invite" href="/invite?r=false"><?= $lang["invite"]?></a></li>
            <li class="dropdown"><a href="#"><span><img src="/assets/img/lang/<?= $lang["lang_iso"]?>.webp" style="size: 28px;height:28px" width="auto" height="auto" alt="Current language"></span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="?lang=<?= $lang["lang_de_iso"]?>"><?= $lang["lang_de"]?> <img src="/assets/img/lang/<?= $lang["lang_de_iso"]?>.webp" style="size: 28px;height:28px" width="auto" height="auto" alt="German flag"></a></li>
                    <li><a href="?lang=<?= $lang["lang_en_iso"]?>"><?= $lang["lang_en"]?> <img src="/assets/img/lang/<?= $lang["lang_en_iso"]?>.webp" style="size: 28px;height:28px" width="auto" height="auto" alt="United Kingdom flag"></a></li>
                    <li><a href="?lang=<?= $lang["lang_es_iso"]?>"><?= $lang["lang_es"]?> <img src="/assets/img/lang/<?= $lang["lang_es_iso"]?>.webp" style="size: 28px;height:28px" width="auto" height="auto" alt="Spanish flag"></a></li>
                </ul>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

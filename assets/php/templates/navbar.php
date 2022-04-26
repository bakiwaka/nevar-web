<nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="/#home"><?php echo $lang["nav_home"]?></a></li>
            <li><a class="nav-link scrollto" href="/#about"><?php echo $lang["nav_about"]?></a></li>
            <li><a class="nav-link scrollto" href="/#features"><?php echo $lang["nav_features"]?></a></li>
            <li><a class="nav-link scrollto" href="/#advantages"><?php echo $lang["nav_advantage"]?></a></li>
            <li><a class="nav-link scrollto" href="/#faq"><?php echo $lang["nav_faq"]?></a></li>
            <li><a class="nav-link scrollto" href="/#team"><?php echo $lang["nav_team"]?></a></li>

            <li><a class="nav_invite" href="/invite?r=false"><?php echo $lang["invite"]?></a></li>
            <li class="dropdown"><a href="#"><span><img src="/assets/img/lang/<?php echo $lang["lang_iso"]?>.webp" style="size: 28px;height:28px"></span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="?lang=<?php echo $lang["lang_de_iso"]?>"><?php echo $lang["lang_de"]?> <img src="/assets/img/lang/<?php echo $lang["lang_de_iso"]?>.webp" style="size: 28px;height:28px"></a></li>
                    <li><a href="?lang=<?php echo $lang["lang_en_iso"]?>"><?php echo $lang["lang_en"]?> <img src="/assets/img/lang/<?php echo $lang["lang_en_iso"]?>.webp" style="size: 28px;height:28px"></a></li>
                    <li><a href="?lang=<?php echo $lang["lang_es_iso"]?>"><?php echo $lang["lang_es"]?> <img src="/assets/img/lang/<?php echo $lang["lang_es_iso"]?>.webp" style="size: 28px;height:28px"></a></li>
                </ul>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

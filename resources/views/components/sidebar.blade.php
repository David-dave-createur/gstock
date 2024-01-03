<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="{{ route('home') }}" class="menu-link {{ setMenuActive('home') }}">
                <i class="menu-icon tf-icons ti ti-layout-dashboard"></i>
                <div data-i18n="Tableau de bord">Tableau de bord</div>
            </a>
        </li>

        <!-- Gestion d'Équipe -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Gestion d'Équipe</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Équipe">Équipe</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link" target="_blank">
                        <div data-i18n="Membres &amp; Equipe">Membres &amp; Equipe</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Options de filtrage">Options de filtrage</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-login-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Vue d'ensemble">Vue d'ensemble</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-edit"></i>
                <div data-i18n="Création &amp; Édition">Création &amp; Édition</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="wizard-ex-checkout.html" class="menu-link">
                        <div data-i18n="Création de profil">Création de profil</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="wizard-ex-property-listing.html" class="menu-link">
                        <div data-i18n="Info sur l'employé">Info sur l'employé</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="wizard-ex-create-deal.html" class="menu-link">
                        <div data-i18n="Vue d'ensemble">Vue d'ensemble</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Gestion des Rôles -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Gestion des Rôles</span>
        </li>
        <!-- Liste des rôles -->
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div data-i18n="Liste des rôles">Liste des rôles</div>
            </a>
        </li>
        <!-- Attribution &amp; modification -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link">
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div data-i18n="Attribution ">Attribution </div>
            </a>
        </li>

        <!-- Communication Interne -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Communication Interne</span>
        </li>
        <!-- Messagerie interne -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons ti ti-send"></i>
                <div data-i18n="Messagerie interne">Messagerie interne</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
                <div data-i18n="Forums">Forums</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                <div data-i18n="Annonces & notifications">Annonces & notifications</div>
            </a>
        </li>

        <!-- Présence en Ligne -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Présence en Ligne</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                <div data-i18n="Suivi du Temps">Suivi du Temps</div>
            </a>
        </li>
    </ul>
</aside>

<nav class="navbar navbar-vertical navbar-expand-lg navbar-darker">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
            
                <li class="nav-item">
                    <!-- label-->
                    <hr class="navbar-vertical-line">
                    
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text"><br></span>
                            </div>
                    </div>
                    
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="{{ route('dashboard') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span><img src="{{ asset('assets/img/icons/dashboard.png') }}" alt="" width="15" height="15" style="margin-right: 7px"></span><span class="nav-link-text">Dashboard</span>
                            </div>
                        </a>
                    </div>
                    
                    <!-- parent pages--> 
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="{{ route('seance') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span><img src="{{ asset('assets/img/icons/seance.png') }}" alt="" width="18" height="18" style="margin-right: 5px"></span><span class="nav-link-text" style="font-size:15px">Seance</span>
                            </div>
                        </a>
                    </div>
                    
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span><img src="{{ asset('assets/img/icons/membres.png') }}" alt="" width="18" height="18" style="margin-right: 5px"></span><span class="nav-link-text" style="font-size:15px">Listes des membres</span>
                            </div>
                        </a>
                    </div>
                    
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span><img src="{{ asset('assets/img/icons/emprunt.png') }}" alt="" width="18" height="18" style="margin-right: 5px"></span><span class="nav-link-text" style="font-size:15px">Emprunts</span>
                            </div>
                        </a>
                    </div>
                    
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span><img src="{{ asset('assets/img/icons/malheur.png') }}" alt="" width="18" height="18" style="margin-right: 5px"></span><span class="nav-link-text" style="font-size:15px">Malheurs</span>
                            </div>
                        </a>
                    </div>
                    
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span><img src="{{ asset('assets/img/icons/remboursement.png') }}" alt="" width="18" height="18" style="margin-right: 5px"></span><span class="nav-link-text" style="font-size:15px">Remboursements</span>
                            </div>
                        </a>
                    </div>
                    
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span><img src="{{ asset('assets/img/icons/report.png') }}" alt="" width="18" height="18" style="margin-right: 5px"></span><span class="nav-link-text" style="font-size:15px">Rapport</span>
                            </div>
                        </a>
                    </div>
                
                      <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-text"><br></span>
                        </div>
                    </div>
                    
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="{{ route('settingMeet') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span><img src="{{ asset('assets/img/icons/setting.png') }}" alt="" width="18" height="18" style="margin-right: 5px"></span><span class="nav-link-text" style="font-size:15px">Parametres de la Tontine </span>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>

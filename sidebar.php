<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-3 border mt-1">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width:260px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Travel-Go</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 ">
                        <li class="nav-item">
                            <a class="nav-link ps-3 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ?
                                'active link-light' : 'link-dark'; ?>" aria-current="page" href="home"><i
                                class="bi bi-house-door"></i>
                                Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'tiket') ?
                                'active link-light' : 'link-dark'; ?> ps-2" href="tiket"><i
                                    class="bi bi-ticket-perforated"></i>
                                Tiket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'order') ?
                                'active link-light' : 'link-dark'; ?> ps-2" href="order"><i
                                    class="bi bi-ticket-perforated"></i>
                                order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'promo') ?
                                'active link-light' : 'link-dark'; ?> ps-2" href="promo"><i class="bi bi-percent"></i>
                                Promo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'maskapai') ?
                                'active link-light' : 'link-dark'; ?> ps-2" href="maskapai"><i
                                    class="bi bi-people-fill"></i> Maskapai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ?
                                'active link-light' : 'link-dark'; ?> ps-2" href="user"><i
                                    class="bi bi-person-badge-fill"></i> User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ?
                                'active link-light' : 'link-dark'; ?> ps-2" href="report"><i class="bi bi-cash-coin"></i>
                                Report</a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
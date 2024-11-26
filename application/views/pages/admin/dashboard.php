<div id="app">
    <?php $this->load->view('components/sidebar'); ?>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Dashboard</h3>
                        <p class="text-subtitle text-muted">Welcome to Admin</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <h1>Welcome <?= $this->session->userdata('nama'); ?></h1>
        </div>
    </div>
</div>
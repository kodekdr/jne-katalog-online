<?php
$active_routes_master_data = ['admin/dashboard/management-job', 'admin/dashboard/user-driver', 'admin/dashboard/data-armada'];
$active_routes_laporan = ['admin/dashboard/log-book', 'admin/dashboard/checklist-report'];
?>

<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li
                    class="sidebar-item <?= $this->uri->uri_string() == 'admin/dashboard' ? 'active' : '' ?> ">
                    <a href="<?= base_url('admin/dashboard') ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>


                </li>

                <li
                    class="sidebar-item  has-sub <?= in_array($this->uri->uri_string(), $active_routes_master_data) ? 'active' : '' ?>">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Master Data</span>
                    </a>

                    <ul class="submenu ">

                        <li class="submenu-item  ">
                            <a href="<?= base_url('admin/dashboard/management-job') ?>"" class=" submenu-link">Job / Pemberangkatan</a>

                        </li>

                        <li class="submenu-item  ">
                            <a href="<?= base_url('admin/dashboard/user-driver') ?>" class="submenu-link">Manajemen User</a>

                        </li>

                        <li class="submenu-item  ">
                            <a href="<?= base_url('admin/dashboard/data-armada') ?>" class="submenu-link">Armada</a>

                        </li>

                    </ul>


                </li>

                <li
                    class="sidebar-item has-sub <?= in_array($this->uri->uri_string(), $active_routes_laporan) ? 'active' : '' ?>">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Laporan</span>
                    </a>

                    <ul class="submenu ">

                        <li class="submenu-item  ">
                            <a href="<?= base_url('admin/dashboard/log-book') ?>" class="submenu-link">Log Book</a>

                        </li>

                        <li class="submenu-item  ">
                            <a href="<?= base_url('admin/dashboard/checklist-report') ?>" class="submenu-link">Ceklist</a>

                        </li>

                    </ul>


                </li>

            </ul>
        </div>
    </div>
</div>
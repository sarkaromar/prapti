<!-- Left side column -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <!-- portfolio -->
            <li class="treeview <?php if ($page == 'back/portfolio/portfolio') echo 'active' ?>">
                <a href="<?=site_url("admin_panel/portfolio")?>" >
                    <i class="fa fa-fw fa-file-image-o"></i>
                    <span>portfolio</span>
                </a>
            </li>
            <!-- user -->
            <?php if($this->back_user->info->level == 2) : ?>
                <li class="treeview <?php if ($page == 'back/user/user' || $page == 'back/user/add_user' ) echo 'active' ?>">
                    <a href="<?=site_url("admin_panel/user")?>" >
                        <i class="fa fa-fw fa-users"></i>
                        <span>User</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </section>
</aside>
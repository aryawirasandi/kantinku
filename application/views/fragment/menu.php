<nav class="navbar navbar-default">
    <div class="container-fluid">
       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                if ($this->ion_auth->in_group('admin')) {
                    $user = $this->ion_auth->user()->row();
                    ?>
                    <!-- <li><a href="<?= base_url() ?>welcome/cari">Pencarian</a></li> -->
                    <li><a href="<?= base_url() ?>login/logout">Logout (<?= $user->first_name ?>)</a></li>
                    <?php
                } elseif($this->ion_auth->in_group('members')) {
                    ?>
                    <li><a href="<?= base_url() ?>welcome/cari">Pencarian</a></li>
                    <li><a href="<?= base_url() ?>login">Login</a></li>
                <?php } ?>
            </ul>

        </div>
    </div>
</nav>
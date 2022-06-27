<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">cake shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url()?>"><i class="fas fa-fw fa-bed me-2"></i>回首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=goods"><i class="fas fa-fw fa-bed me-2"></i>管理商品</a>
                    </li>
                    <!-- <li class="nav-item">
                        <?php
                        if (isset($_SESSION['mem'])) {
                            echo "<a class='nav-link' href='?do=logout'><i class='fas fa-fw '></i>登出</a>";
                        } else {
                            echo "<a class='nav-link' href='?do=login'><i class='fas fa-fw '></i>會員登入</a>";
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['admin'])) {
                            echo "<a class='nav-link' href='backend.php'><i class='fas fa-fw '></i>返回管理</a>";
                        } else {
                            echo "<a class='nav-link' href=". base_url('login'). "><i class='fas fa-fw '></i>管理登入</a>";
                        }
                        ?>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="shortcut icon" href="../hotel/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Roboto&display=swap" rel="stylesheet">
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <!-- <?php $this->load->view('js/js.js'); ?> -->
    <!-- <?php $this->load->view('js/jquery-3.4.1.min.js'); ?> -->
</head>

<?php  $this->load->view('partials/head.php'); ?>

<body>
    <!-- 導覽列 -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">cake shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="?"><i class="fas fa-fw fa-bed me-2"></i>回首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=goods"><i class="fas fa-fw fa-bed me-2"></i>所有商品</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=news"><i class="fas fa-fw fa-dumbbell me-2"></i>最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=look"><i class="fas fa-fw fa-utensils me-2"></i>購物流程</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=buycart"><i class="fas fa-fw fa-envelope me-2"></i>購物車</a>
                    </li>
                    <li class="nav-item">
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
                            echo "<a class='nav-link' href='?do=admin'><i class='fas fa-fw '></i>管理登入</a>";
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        
        <div style="width: 100%;"> 

            <?php
            // $do = $_GET['do'] ?? 'home';
            // $file = 'frontend/' . $do . ".php";
            // if (file_exists($file)) {
            //     include $file;
            // } else {
            //     $this->load->view('frontend/home.php');
            // }
            $this->load->view('frontend/home.php');

            ?>

        </div>
    </div>

</body>

</html>
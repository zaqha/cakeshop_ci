<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>


<?php  $this->load->view('partials/head.php'); ?>

<body>
    <!-- 導覽列 -->
  
<?php  $this->load->view('partials/nav.php'); ?>
        
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
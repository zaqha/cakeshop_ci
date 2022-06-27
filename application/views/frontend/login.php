<?php $this->load->view('partials/head.php'); ?>
<?php $this->load->view('partials/nav.php'); ?>


<div style="margin-top: 100px;" class="container">
    <h2>管理登入</h2>
    <table class="all">
        <tr>
            <td class="tt ct">帳號</td>
            <td class="pp"><input class="acc" type="text" name="acc" id="acc" value=""></td>
        </tr>
        <tr>
            <td class="tt ct">密碼</td>
            <td class="pp"><input class="pw" type="password" name="pw" id="pw" value=""></td>
        </tr>
    </table>
    <div class="ct"><button onclick="login()">確認</button></div>

</div>



<script>
    function login() {
        acc = $(".acc").val();
        pw = $(".pw").val();

        $.ajax({
            type: "POST",
            url: "<?= base_url('login/check_password') ?>",
            data: {acc:acc,pw:pw},
            dataType: "json", //回傳資料格式
            success: function(res) {
                if (res == 'success') {
                    window.location.replace( "<?= base_url('backend/products') ?>");
                } else {
                    alert('帳號或密碼錯誤');
                }
            }
        });




    }
</script>
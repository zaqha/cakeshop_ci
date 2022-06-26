<h1 class="ct">新增商品</h1>
<form action="api/save_goods.php" method='post' enctype="multipart/form-data">
<table class="all">
    <tr>
        <td class="ct tt">所屬大分類</td>
        <td class="pp"><select name="big" id="big"></select></td>
    </tr>
    <tr>
        <td class="ct tt">所屬中分類</td>
        <td class="pp"><select name="mid" id="mid"></select></td>
    </tr>
    <tr>
        <td class="ct tt">商品編號</td>
        <td class="pp"><span id="showNo">完成分類後自動分配</span><input type="hidden" name="no" id="no" value=""></td>
    </tr>
    <tr>
        <td class="ct tt">商品名稱</td>
        <td class="pp"><input type="text" name="name" value=""></td>
    </tr>
    <tr>
        <td class="ct tt">商品價格</td>
        <td class="pp"><input type="text" name="price" value=""></td>
    </tr>
    <tr>
        <td class="ct tt">規格</td>
        <td class="pp"><input type="text" name="spec" value=""></td>
    </tr>
    <tr>
        <td class="ct tt">庫存量</td>
        <td class="pp"><input type="text" name="qt" value=""></td>
    </tr>
    <tr>
        <td class="ct tt">商品圖片</td>
        <td class="pp"><input type="file" name="img" value=""></td>
    </tr>
    <tr>
        <td class="ct tt">商品介紹</td>
        <td class="pp"><textarea name="intro" style="width:80%;height:50px"></textarea></td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    <input type="button" value="返回" onclick="location.href='?do=th'">
</div>
</form>


<script>

getBig()

$("#big").on("change",function(){
    getMid($("#big").val())
})
$("#mid").on("change",function(){
    getNo()
})


function getBig(){
    $.get("api/get_type.php",(list)=>{
        $("#big").html(list)

        getMid($("#big").val())
    })
}

function getMid(id){
    $.get("api/get_type.php",{'parent':id},(list)=>{
        $("#mid").html(list)
        getNo()
    })
}

function getNo(){
/*     $.get("api/get_no.php",(no)=>{
        $("#no").val(no)
        $("#showNo").text(no)
    }) */
    //Math.floor(Math.random()*(max-min))+min;
    let no=Math.floor(Math.random()*(999999-100000))+100000;
    $("#no").val(no)
    $("#showNo").text(no)
}
</script>
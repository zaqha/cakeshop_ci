
<!-- header -->
  <div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item vh-100 active">
        <img src="https://picsum.photos/1980/1080?random=1" class="b-block w-100 h-100">
        <div class="carousel-caption top-0 bottom-0 d-flex flex-column justify-content-center">
          <h1>CAKE</h1>
          <p class="d-none d-md-block">忙碌的生活中，你有多久沒有好好的考賞自己呢？放慢腳步，來cake shop好好享受吧</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
          <img src="https://picsum.photos/1980/1080?random=2" class="b-block w-100 h-100">
          <div class="carousel-caption top-0 bottom-0 d-flex flex-column justify-content-center">
          <h1>人氣店家 世界聞名而來</h1>
          <p class="d-none d-md-block">質感風格打造午茶新風景</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
          <img src="https://picsum.photos/1980/1080?random=3" class="b-block w-100 h-100">
          <div class="carousel-caption top-0 bottom-0 d-flex flex-column justify-content-center">
          <h1>寵愛有你 專案特惠</h1>
          <p class="d-none d-md-block">特惠方案</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
        <img src="https://picsum.photos/1980/1080?random=4" class="b-block w-100 h-100">
        <div class="carousel-caption top-0 bottom-0 d-flex flex-column justify-content-center">
        <h1>美食饗宴</h1>
        <p class="d-none d-md-block">歡迎外燴商約洽談</p>
      </div>
    </div>
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- 商品介紹 -->
<section id="room"  class=" py-5">
  <header  class="text-center">
    <h2 class="text-warning pb-3">最新商品</h2>

    <div class="row justify-content-evenly" >
        <?php 
        foreach($products as $key=> $row){
        ?>
        <div class="card m-2 col-3">
            <a href='?do=detail&id=<?=$row['id'];?>'><img src="<?php echo base_url('assets/img/'.$row['img'])?>" style="width:80%;height:80%"></a>
            <div class="card-body">
                <p class="card-text"><?=$row['name'];?></p>
                <div>規格:<?=$row['spec'];?></div>
                <div>簡介:<?=mb_substr($row['intro'],0,25);?>...</div>
                <div class="text-danger"><?=$row['price'];?></div>
                <a style="float:right" href='?do=buycart&id=<?=$row['id'];?>&qt=1'><img src="icon/0402.jpg"></a>
            </div>
        </div>

<?php
}
?>

</div>
   
<!-- 特色 -->
<section id="facility" class="py-5">
  <header class="container text-center">
    <h2 class="text-warning pb-3">特色</h2>
  </header>
  <article class="container py-5 text-white">
  <ul class="row list-unstyled gy-4">
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://picsum.photos/400/400?random=1">
        <div class="col-6">
          <h5>特色</h5>
          <p class="text-black-50 pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://picsum.photos/400/400?random=2">
        <div class="col-6">
          <h5>特色</h5>
          <p class="text-black-50 pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://picsum.photos/400/400?random=3">
        <div class="col-6">
          <h5>3特色</h5>
          <p class="text-black-50 pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://picsum.photos/400/400?random=4">
        <div class="col-6">
          <h5>特色</h5>
          <p class="text-black-50 pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
  </ul>
  </article>
</section>

<!-- 餐飲美食 -->
<section id="food" class="container py-5">
  <h2 class="text-warning  text-center">餐飲美食</h2>

  <article class="py-5 row gy-4">
    <!--圖片-->
    <div class="tab-content col-lg-6">
      <img id="foodImg1" class="img-thumbnail img-fluid tab-pane fade show active" src="https://picsum.photos/400/300?random=1" style="width: 100%;">
      <img id="foodImg2" class="img-thumbnail img-fluid tab-pane fade" src="https://picsum.photos/400/300?random=2" style="width: 100%;">
      <img id="foodImg3" class="img-thumbnail img-fluid tab-pane fade" src="https://picsum.photos/400/300?random=3" style="width: 100%;">
    </div>
    <!--Accordion-->
    <div class="accordion list-group col-lg-6 px-3" id="foodMenu">
      <div class="accordion-item" data-bs-toggle="list" data-bs-target="#foodImg1">
        <a class="accordion-header accordion-button  text-decoration-none text-warning alert-warning" data-bs-toggle="collapse" href="#foodTxt1">GOOD
          <small class="position-absolute start-0 top-0 badge bg-danger">first</small>
        </a>
        <div id="foodTxt1" class="accordion-collapse collapse show" data-bs-parent="#foodMenu">
          <div class="accordion-body">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?
            </p>
            <p class="text-end text-danger">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?
            </p>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-bs-toggle="list" data-bs-target="#foodImg2">
        <a class="accordion-header accordion-button collapsed text-decoration-none text-warning alert-warning" data-bs-toggle="collapse" href="#foodTxt2">GREAT
          <small class="position-absolute start-0 top-0 badge bg-danger">second</small>
        </a>
        <div id="foodTxt2" class="accordion-collapse collapse" data-bs-parent="#foodMenu">
          <div class="accordion-body">
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
            <p class="float-end text-danger">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?
            </p>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-bs-toggle="list" data-bs-target="#foodImg3">
        <a class="accordion-header accordion-button collapsed text-decoration-none text-warning alert-warning" data-bs-toggle="collapse" href="#foodTxt3">EXCELENT
          <small class="position-absolute start-0 top-0 badge bg-danger">third</small>
        </a>
        <div id="foodTxt3" class="accordion-collapse collapse" data-bs-parent="#foodMenu">
          <div class="accordion-body">
            <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?
            </p>
            <p class="float-end text-danger">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?）
            </p>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>

  <!-- 交通資訊 -->
  <section id="traffic" class="py-5 ratio">
    <!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7020090598976!2d121.41729491532458!3d25.044184944036388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bed3dc9b59%3A0x57e6439a2db0fa2a!2zMjQz5paw5YyX5biC5rOw5bGx5Y2A5rOw5bGx6IG36KiT5Lit5b-D!5e0!3m2!1szh-TW!2stw!4v1623306096916!5m2!1szh-TW!2stw"></iframe> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d5781.635252529873!2d121.51791124989974!3d25.000147078494837!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1656261000256!5m2!1szh-TW!2stw" ></iframe>
    <article class="container position-static">
      <div class="row">
        <div class="col-lg-6">
          <header class="text-center h2 card text-warning mb-4">交通資訊</header>
          <div class="card card-body">
            <strong>公車、捷運</strong>
            <ul class="ps-4">
              <li>公車：三重客運 (637、638)、指南客運 (797、798、801、858、880、883、1501、1503)，至中和站下車。</li>
            </ul>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- logo -->
  <article class="container-fluid bg-light py-5 text-center">
    <div class="d-flex justify-content-center align-items-center flex-wrap">
      <a href="https://www.facebook.com/" target="_blank" class="link-secondary m-3 p-3 border rounded">
        <i class="fab fa-facebook-square fa-3x"></i><br>
        cake shop
      </a>
    </div>
  </article>
</section>
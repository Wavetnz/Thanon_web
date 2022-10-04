<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Myweb</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  </head>
  <body>
  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="myweb_view" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="<?php echo base_url('img');?>/logo1.png" alt="" width="60" height="60">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="http://[::1]/ci/index.php/Myweb" class="nav-link px-2 text-white">หน้าแรก</a></li>
          <li><a href="http://[::1]/ci/index.php/History" class="nav-link px-2 text-white">ประวัติส่วนตัว</a></li>
          <li><a href="http://[::1]/ci/index.php/Work" class="nav-link px-2 text-white">ผลงานทางวิชาการ</a></li>
          <li><a href="http://[::1]/ci/index.php/Activity" class="nav-link px-2 text-white">กิจกรรม</a></li>
          <li><a href="http://[::1]/ci/index.php/Contact" class="nav-link px-2 text-white">ติดต่อ</a></li>
        </ul>
        
        
      </div>
    </div>
  </header>
  
  <main>
  <div class="position-relative overflow-hidden p-3  text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Thanon Waikaew</h1>
      <p class="lead fw-normal">ยินดีตอนรับสู่หน้าเว็บเพจของฉัน</p> 
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
  
<br>
  <main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">ประวัติส่วนตัว</h1>
      <p class="lead my-3">ประวัติส่วนตัวของฉัน</p>
      <p class="lead mb-0"><a href="http://[::1]/ci/index.php/History" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">ผลงานทางวิชาการ</strong>
          <h3 class="mb-0">ผลงานทางวิชาการ</h3>
          <div class="mb-1 text-muted">Oct 2</div>
          <p class="card-text mb-auto">แข่งขันการออกแบบแอพพลิเคชัน Idea piching</p>
          <a href="http://[::1]/ci/index.php/Work" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="<?php echo base_url('img');?>/rr.jpg" alt="" width="200" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">กิจกรรม</strong>
          <h3 class="mb-0">หล่อเทียนเข้าพรรษา</h3>
          <div class="mb-1 text-muted">Oct 3</div>
          <p class="mb-auto">กิจกรรมหล่อเทียนเข้าพรรษาที่มหาวิทยาลัยเทคโนโลยีราชมงคล ล้านนา ตาก</p>
          <a href="http://[::1]/ci/index.php/Activity" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="<?php echo base_url('img');?>/ac.jpg" alt="" width="200" height="250">
        </div>
      </div>
    </div>
  </div>

  




  </body>
</html>
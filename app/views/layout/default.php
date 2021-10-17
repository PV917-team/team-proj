<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="/public/styles/style.css">
  <link rel="stylesheet" href="/public/node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="/public/node_modules/@splidejs/splide/dist/css/splide.min.css">
</head>
<body>
  <div id="sub-header" class="pt-1 pb-1">
    <div class="container mt-1 mb-1 d-flex justify-content-between">
      <div>
        <select name="" id="location-sel" class="form-select-sm">
          <option value="1">Ковель</option>
          <option value="1">Луцьк</option>
          <option value="1">Киев</option>
        </select>
      </div>
      <div><a href="">+380 664-718-902</a></div>
      <div class="d-flex justify-content-between">
        <div class="me-5"><a href="">Пункты самовывоза</a></div>
        <div class="me-5"><a href="">Оплата и доставка</a></div>
        <div><a href="">Помощь</a></div>
      </div>
    </div>
  </div>
  <div class="container">
    <header class="d-flex justify-content-between align-items-center">
      <div>
        <a href="">
          <img src="/public/www/horizontal_on_white_by_logaster.png">
        </a>
      </div>
      <form action="" class="input-group w-50 h-50">
        <input
          type="text"
          class="form-control"
          placeholder="Найти книгу..."
          aria-label="Найти книгу..."
          aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="form-control btn btn-danger pe-5 ps-5" type="button">Найти</button>
        </div>
      </form>
      <div>
        <div id="bag">
          <a href="" class="d-block text-center">
            <span>
              <i class="fas fa-shopping-bag "></i>
            </span>
            <div>Корзина</div>
          </a>
        </div>
      </div>
    </header>
    <hr>
  </div>
  <!-- Слайдер -->
  <div class="container mt-3">
    <div class="splide">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <img src="https://w.wallhaven.cc/full/72/wallhaven-72rd8e.jpg" alt="">
        </li>
        <li class="splide__slide">
          <img src="https://w.wallhaven.cc/full/z8/wallhaven-z8dg9y.png" alt="">
        </li>
        <li class="splide__slide">
          <img src="https://w.wallhaven.cc/full/j3/wallhaven-j3y3jm.png" alt="">
        </li>
      </ul>
    </div>
    <div class="splide__progress">
      <div class="splide__progress__bar">
      </div>
    </div>
  </div>
  </div>
  <!-- Новинки -->
  <div class="container mt-3">
    <h1 class="mb-3">Новинки</h1>
    <div class="new-splide">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <a href="" class="d-block me-3">
              <div class="border rounded">
                <p>Первое название</p>
                <p>Первое название</p>
                <p>Первое название</p>
              </div>
            </a>
          </li>
          <li class="splide__slide">
            <a href="" class="d-block me-3">
              <div class="border rounded">
                <p>Первое название</p>
                <p>Первое название</p>
                <p>Первое название</p>
              </div>
            </a>
          </li>
          <li class="splide__slide">
            <a href="" class="d-block me-3">
              <div class="border rounded">
                <p>Первое название</p>
                <p>Первое название</p>
                <p>Первое название</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <script src="/public/node_modules/@splidejs/splide/dist/js/splide.js"></script>
  <script>
    // https://splidejs.com/
    const splide = new Splide('.splide', {
      type: 'slide',
      autoplay: 'playing',
      rewind: true,    // Повторы
      interval: 3500,  // Интервалл перехода
      autoHeight: true,
      height: '350px',
      width: '100%'
    });

    splide.mount();

    // 
    const newSplide = new Splide('.new-splide', {
      type: 'slide',
      perPage: 6,
      width: '100%',
      height: '350px',
      arrows: true,
      pagination: false
    });

    newSplide.mount();
  </script>
</body>
</html>
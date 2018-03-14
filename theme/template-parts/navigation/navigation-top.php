

        <nav id="navbar" class="navbar">
          <script type="text/javascript">
            let sandwich = document.getElementById("navbar");
            let viewport = window.innerWidth;
            if (viewport < 640) {
              sandwich.className += " navbar-default navbar-fixed-top"
            }
          </script>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-navbar-collapse">
            <a href="#" class="nav-item">Коллекции</a>
            <a href="#" class="nav-item">Проекты</a>
            <a href="#" class="nav-item">Преимущества</a>
            <a href="#" class="nav-item">Интернет-магазин</a>
            <a href="#" class="nav-item">Новости</a>
            <a href="#" class="nav-item">История</a>
            <a href="#" class="nav-item">Производство</a>
            <a href="#" class="nav-item">Контакты</a>
          </div>
        </nav>
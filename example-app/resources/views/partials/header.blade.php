<header class="header">
  <div class="header__nav-container">
    <nav class="header__nav header-nav">
      <ul class="header-nav__list header-nav-list">
        <li class="header-nav-list__item">
          <a href={{ route('home') }} class="header-nav-list__link">Главная</a>
        </li>

        <li class="header-nav-list__item">
          <a href="{{ route('posts.index') }}" class="header-nav-list__link">Все посты</a>
        </li>

        <li class="header-nav-list__item">
          <a href="#" class="header-nav-list__link">pages_3</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="header__btn-container">
    <a href="#" class="header__btn">Войти</a>
  </div>
</header>
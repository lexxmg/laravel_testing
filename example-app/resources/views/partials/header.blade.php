<header class="header">
  <div class="header__nav-container">
    <nav class="header__nav header-nav">
      <ul class="header-nav__list header-nav-list">
        <li class="header-nav-list__item {{ request()->routeIs('home') ? 'header-nav-list__item--active' : '' }}">
          <a href={{ route('home') }} class="header-nav-list__link">Главная</a>
        </li>

        <li class="header-nav-list__item {{ request()->routeIs('posts.index') ? 'header-nav-list__item--active' : '' }}">
          <a href="{{ route('posts.index') }}" class="header-nav-list__link">Все посты</a>
        </li>

        <li class="header-nav-list__item {{ request()->routeIs('laurent') ? 'header-nav-list__item--active' : '' }}">
          <a href="{{ route('laurent') }}" class="header-nav-list__link">Laurent</a>
        </li>
      </ul>
    </nav>
  </div>

  @auth
    <div class="header__btn-container header-btn-container">
      <span class="header-btn-container__text">{{ Auth::user()->name }}</span>

      <a href={{ route('logout') }} class="header__btn">Выйти</a>
    </div>
  @endauth
  
  @guest
    <div class="header__btn-container">
      <a href={{ route('login') }} class="header__btn">Войти</a>
    </div>
  @endguest
</header>
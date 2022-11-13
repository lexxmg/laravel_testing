<div class="home-content__card home-content-card">
  <a href="{{ route('posts.show', $item->id) }}" class="home-content-card__link">
    <img class="home-content-card__img" src="/storage/posts/{{ $item->img }}" alt="воздушный шар">
  </a>

  <h2 class="home-content-card__title">{{ $item->title }}</h2>

  <p class="home-content-card__text">{{ $item->discription }}</p>
</div>
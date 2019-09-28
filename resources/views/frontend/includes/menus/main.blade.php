<ul class="text-center text-capitalize nav-agile" data-aos="zoom-in-up">
  @foreach($items as $menu_item)
  <li><a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a></li>
  @endforeach
  <li>
    <button type="button" class="btn w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModalCenter2">
      Login
    </button>
  </li>
</ul>
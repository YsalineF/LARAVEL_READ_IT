{{--
  Variables disponibles :
    - $tags ARRAY(Tag)
 --}}
<div class="tag-widget post-tag-container mb-5 mt-5">
  <div class="tagcloud">
    @include('tags._list', $tags)
  </div>
</div>

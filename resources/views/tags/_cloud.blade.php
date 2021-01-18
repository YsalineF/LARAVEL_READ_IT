{{--
  Variables disponibles :
    - $tags ARRAY(Tag)
 --}}
 <h3>Tag Cloud</h3>
 <div class="tagcloud">
   @include('tags._list', $tags)
 </div>

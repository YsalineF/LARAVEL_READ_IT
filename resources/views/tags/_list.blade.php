{{--
  Variables disponibles :
    - $tags ARRAY(Tag)
 --}}
 @foreach ($tags as $tag)
   <a href="#" class="tag-cloud-link">{{ $tag->name }} - {{count($tag->posts)}}</a>
 @endforeach

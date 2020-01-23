<span class="text-muted">
<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
dans
@foreach (get_the_category() as $key => $category)
  <a href="{!! get_category_link($category->cat_ID) !!}">{{ $category->name }}</a>{{ $loop->last ? '': ', ' }}
@endforeach
</span>

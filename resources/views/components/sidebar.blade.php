<div class="container">
     @foreach ($major_category_names as $major_category_name)
        <h2>{{ $major_category_name }}</h2>
         @foreach ($categories as $category)
        <label class="samuraimart-sidebar-category-label"><a href="{{ route('products.index', ['category' => $category->id]) }}">{{ $category->name }}</a></label>
       @endif
      @endforeach
     @endforeach
 </div>
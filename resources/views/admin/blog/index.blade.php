
@foreach($parentCategories as $category)
 
{{$category->name}}

@if(count($category->subcategory))
  @include('admin.blog.category.subCategoryList',['subcategories' => $category->subcategory])
@endif

@endforeach
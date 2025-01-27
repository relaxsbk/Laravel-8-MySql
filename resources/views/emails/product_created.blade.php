@component('mail::message')
# Новый продукт


@component('mail::panel')
    Название - **{{$product->name}}**
    article -  **{{$product->article}}**
@endcomponent

@component('mail::button', ['url' => url('/products/' . $product->id)])
    Посмотреть
@endcomponent

Спасибо за внимание! <br>
relaxsbk - {{ config('app.name') }}
@endcomponent

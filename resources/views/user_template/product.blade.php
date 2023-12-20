@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="box_main">
                <div class="tshirt_img"><img src="{{asset($product->product_img)}}" alt=""></div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="box_main">
                <div class="product-info">
                    <h4 class="shirt_text text-left">{{$product->product_name}}</h4>
                <p class="price_text text-left">Цена <span style="color: #262626">₽ {{$product->price}}</span></p>
                </div>
                <div class="my-3 product-details">
                    <p class="lead">{{$product->product_long_des}}</p>
                    <ul class="p-2 bg-light my-2">
                        <li>Категория- {{$product->product_category_name}}</li>
                        <li>Подкатегория- {{$product->product_subcategory_name}}</li>
                        <li>Доступное Количество- {{$product->quantity}}</li>
                    </ul>
                </div>
                <div class="btn_main">
                    <div class="btn btn-warning"><a href="#">Добавить В Корзину</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="fashion_section">
        <div id="main_slider">
                 <div class="container">
                    <h1 class="fashion_taital">Похожие Товары</h1>
                    <div class="fashion_section_2">
                       <div class="row">
                        @foreach ($related_products as $product)
                        <div class="col-lg-4 col-sm-4">
                           <div class="box_main">
                              <h4 class="shirt_text">{{$product->product_name}}</h4>
                              <p class="price_text">Цена  <span style="color: #262626;">₽ {{$product->price}}</span></p>
                              <div class="tshirt_img"><img style="height: 300px" src="{{asset($product->product_img)}}"></div>
                              <div class="btn_main">
                                 <div class="buy_bt"><a href="#">Купить Сейчас</a></div>
                                 <div class="seemore_bt"><a href="{{route('singleproduct', [$product->id, $product->slug])}}">Подробнее</a></div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                       </div>
                    </div>
                 </div>
        </div>
     </div>
</div>
@endsection()

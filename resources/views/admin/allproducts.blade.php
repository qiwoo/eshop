@extends('admin.layouts.template')
@section('page_title')
Все товары
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Страница/</span> Все Товары</h4>
    @if(session()->has('message'))
          <div class="alert alert-success">
            {{ session()->get('message') }}
          </div>
          @endif
    <div class="card">
        <h5 class="card-header">Информация По Доступным Товарам</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Имя Товара</th>
                <th>Изображение</th>
                <th>Цена</th>
                <th>Действия</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($products as $product)

              <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->product_name}}</td>
                <td>
                    <img style="height: 100px" src="{{asset($product->product_img)}}" alt="">
                    <br>
                    <a href="{{route('editproductimg', $product->id)}}" class="btn btn-primary">Изменить</a>
                </td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{route('editproduct', $product->id)}}" class="btn btn-primary">Изменить</a>
                    <a href="{{route('deleteproduct', $product->id)}}" class="btn btn-warning">Удалить</a>
                </td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>

</div>
@endsection

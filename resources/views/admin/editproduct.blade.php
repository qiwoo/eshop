@extends('admin.layouts.template')
@section('page_title')
Изменить товар
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Страница/</span> Изменить  Товар</h4>
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Изменить Товар</h5>
            <small class="text-muted float-end">Введите информацию</small>
          </div>
          <div class="card-body">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form action="{{route('updateproduct')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$productinfo->id}}" name="id">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Имя товара</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="product_name" name="product_name" value="{{$productinfo->product_name}}" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Цена товара</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="price" name="price" value="{{$productinfo->product_price}}" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Количество товара</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="quantity" name="quantity" value="{{$productinfo->quantity}}" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Короткое Описание Товара</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="product_short_des" id="product_short_des" cols="30" rows="10">{{$productinfo->product_short_des}}</textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Длинное Описание Товара</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="product_long_des" id="product_long_des" cols="30" rows="10">{{$productinfo->product_long_des}}</textarea>
                </div>
              </div>

              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Изменить Товар</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection

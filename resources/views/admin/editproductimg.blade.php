@extends('admin.layouts.template')
@section('page_title')
Изменить изображение товара
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Страница/</span> Изменить Изображение  Товара</h4>
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Изменить Изображение Товара</h5>
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
            <form action="{{route('updateproductimg')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Прошлое Изображение</label>
                <div class="col-sm-10">
                <img src="{{asset($productinfo->product_img)}}" alt="">
                </div>
            </div>

            <input type="hidden" value="{{$productinfo->id}}" name="id">

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Выбрать Новое Изображение </label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="product_img" name="product_img" />
                </div>
              </div>

              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Изменить Изображение</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection

@extends('admin.layouts.template')
@section('page_title')
Добавить товар
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Страница/</span> Добавить  Товар</h4>
    <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Добавить Новый Товар</h5>
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
            <form action="{{route('storeproduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Имя товара</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Электроника" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Цена товара</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="price" name="price" placeholder="12" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Количество товара</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="quantity" name="quantity" placeholder="10" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Короткое Описание Товара</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="product_short_des" id="product_short_des" cols="30" rows="10"></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Длинное Описание Товара</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="product_long_des" id="product_long_des" cols="30" rows="10"></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Выбрать Категорию</label>
                <div class="col-sm-10">
                    <select class="form-select" id="product_category_id" name="product_category_id" aria-label="Default select example">
                        <option selected>. . .</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                      </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Выбрать Подкатегорию</label>
                <div class="col-sm-10">
                    <select class="form-select" id="product_subcategory_id" name="product_subcategory_id" aria-label="Default select example">
                        <option selected>. . .</option>
                        @foreach ($subcategories as $subcategory)
                        <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
                        @endforeach
                      </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Выбрать Изображение Товара</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="product_img" name="product_img" />
                </div>
              </div>

              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Добавить Товар</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection

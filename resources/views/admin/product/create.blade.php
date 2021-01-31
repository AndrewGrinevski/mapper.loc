@extends('layouts.admin')

@section('content')
    <main>
        <div class="container-fluid">
            <form action="{{ route('admin_product_store') }}" method="POST">
        @csrf
        <div class="form-group" >
            <label class="small mb-1" for="inputEmailAddress">Название</label>
            <input class="form-control py-4"  type="text" name="product_name"/>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Размер</label>
            <input class="form-control py-4"  type="text" name="product_size"/>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Стоимость</label>
            <input class="form-control py-4"  type="text" name="cost"/>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Наличие</label>
            <input class="form-control py-4" type="checkbox" value="1" name="in_stock"/>
        </div>
        <div class="form-group">
           <button class="btn btn-sm btn-info" type="submit">Сохранить</button>
        </div>
    </form>
        </div>
    </main>
@endsection

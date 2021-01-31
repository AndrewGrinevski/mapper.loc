@extends('layouts.admin')

@section('content')
    <main>
        <div class="container-fluid">
            <form action="{{ route('admin_category_store') }}" method="POST">
        @csrf
        <div class="form-group" >
            <label class="small mb-1" for="inputEmailAddress">Название</label>
            <input class="form-control py-4"  type="text" name="name"/>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Slug</label>
            <input class="form-control py-4"  type="text" name="slug"/>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Описание</label>
            <textarea name="description" id="" cols="10" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Наличие</label>
            <input class="form-control py-4" type="checkbox" value="1" name="is_active"/>
        </div>
        <div class="form-group">
           <button class="btn btn-sm btn-info" type="submit">Сохранить</button>
        </div>
    </form>
        </div>
    </main>
@endsection

@extends('layouts.admin')
@section('content')

<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="dashboard-wrapper">

    <div class="card uper col-md-6 offset-2">
        <div class="card-header">Yangi kitob qo'shish</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" enctype="multipart/form-data" action="{{ route('books.store') }}">
                <div class="row">
                    <div class="form-group col-md-12">
                        @csrf
                        <label for="name">Nomi:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Qisqa izoh :</label>
                        <input type="text" class="form-control" name="description"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="author_id">Muallif :</label>
                        <select class="form-control" name="author_id" id="">
                            @foreach($authors as $author)
                            <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category_id">Toifasi :</label>
                        <select class="form-control" name="category_id" id="">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="photo">Muqova rasmi :</label>
                        <input type="file" class="form-control" accept="image/jpeg,image/jpg,image/png" name="photo"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="file">Fayl :</label>
                        <input type="file" class="form-control" name="file"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="published">Chiqarilgan sanasi :</label>
                        <input type="date" class="form-control" name="published"/>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="cost">Narxi :</label>
                        <input type="number" class="form-control" name="cost"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="discount">chegirma :</label>
                        <input type="number" class="form-control" name="discount"/>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="language_id">Til guruhi :</label>
                        <select class="form-control" name="language_id" id="">
                            <option value="1">uz</option>
                            <option value="1">en</option>
                            <option value="1">ru</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Qo'shish</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
@endsection
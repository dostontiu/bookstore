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
            <form method="post" enctype="multipart/form-data" action="{{ route('books.update', $book->id) }}">
                <div class="row">
                    <div class="form-group col-md-12">
                        @csrf
                        @method('PATCH')
                        <label for="name">Nomi:</label>
                        <input value="{{$book->name}}" type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Qisqa izoh :</label>
                        <input value="{{$book->description}}" type="text" class="form-control" name="description"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="author_id">Muallif :</label>
                        <select class="form-control" name="author_id" id="">
                            @foreach($authors as $author)
                            <option {{($book->author_id==$author->id?'selected':'')}} value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category_id">Toifasi :</label>
                        <select class="form-control" name="category_id" id="">
                            @foreach($categories as $category)
                            <option {{($book->category_id==$category->id?'selected':'')}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <img width="80px" src="{{\Illuminate\Support\Facades\URL::to('images/'.$book->photo)}}" alt="">
                        <input type="hidden" name="old_photo" value="{{$book->photo}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="photo">Muqova rasmi :</label>
                        <input type="file" class="form-control" accept="image/jpeg,image/jpg,image/png" name="photo"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="file">Fayl :</label>
                        <input type="file" class="form-control" name="file"/>
                        <input type="hidden" value="{{$book->name}}" class="form-control" name="old_file"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="published">Chiqarilgan sanasi :</label>
                        <input value="{{$book->published}}" type="date" class="form-control" name="published"/>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="cost">Narxi :</label>
                        <input value="{{$book->cost}}" type="number" class="form-control" name="cost"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="discount">chegirma :</label>
                        <input value="{{$book->discount}}" type="number" class="form-control" name="discount"/>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="language_id">Til guruhi :</label>
                        <select class="form-control" name="language_id" id="">
                            <option value="1">uz</option>
                            <option value="1">en</option>
                            <option value="1">ru</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Tahrir</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
@endsection
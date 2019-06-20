@extends('layouts.admin')
@section('content')

<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="dashboard-wrapper">
<div class="uper">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
        <a href="{{route('books.create')}}" class="btn btn-primary">Yangi kitob qo'shish</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>ID</td>
            <td>Nomi</td>
            <td>Muallif</td>
            <td>Toifasi</td>
            <td>Narxi</td>
            <td colspan="2">Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->author->name}}</td>
                <td>{{$book->category->name}}</td>
                <td>{{$book->cost}}</td>
                <td width="50px"><a href="{{ route('books.show',$book->id)}}" class="btn btn-primary">Ko'rish</a></td>
                <td width="50px"><a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Tahrir</a></td>
{{--                <td width="50px">--}}
{{--                    <form action="{{ route('books.destroy', $book->id)}}" method="post">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button class="btn btn-danger" type="submit">O'chirish</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
    


</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
@endsection
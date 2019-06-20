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
    <table class="table table-striped">
        <thead>
        <tr>
            <td>ID</td>
            <td>Nomi</td>
            <td>Muallif</td>
            <td>Toifasi</td>
            <td>Narxi</td>
            <td>Kitob sanasi</td>
            <td>Xaridor</td>
            <td>E mail</td>
            <td>Vaqti</td>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->book->name}}</td>
                <td>{{$order->book->author->name}}</td>
                <td>{{$order->book->category->name}}</td>
                <td>{{$order->book->cost}}</td>
                <td>{{$order->book->published}}</td>
                <td>{{$order->user->name}}</td>
                <td>{{$order->user->email}}</td>
                <td>{{$order->created_at}}</td>
                {{--                <td width="50px"><a href="{{ route('books.show',$book->id)}}" class="btn btn-primary">Ko'rish</a></td>--}}
{{--                <td width="50px"><a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Tahrir</a></td>--}}
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
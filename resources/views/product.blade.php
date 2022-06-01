@extends('main')
@section('content')
<style>
    table{
        width:500px;
        text-align:center;
        margin: 20px;
    }
</style>
    <table border="1" >
        <tr>
            <th>PRODUCT ID</th>
            <th>PRODUCT NAME</th>
            <th>PRICE</th>
        </tr>
        @foreach($product as $p)
            <tr>
                <td>{{$p->pid}}</td>
                <td>{{$p->pname}}</td>
                <td>{{$p->price}}</td>
            </tr>
        @endforeach
    </table>
@endsection
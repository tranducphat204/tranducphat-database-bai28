@extends ('layouts.client')
@section('title')
{{$title}}
@endsection
@section('content')
@if(session('msg'))
<div class='alert alert-success text-center'>
    session('msg')
</div>
@endif
<h1>{{$title}}</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th width='5%'>STT</th>
            <th>Tên</th>
            <th>Email</th>
            <th width='15%'>Thời gian</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($users))
        @foreach($users as $key => $item )
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->fullName}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->create_at}}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="4">Không có người dùng</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection
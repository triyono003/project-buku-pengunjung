
  @extends('layouts.app',['title' => 'home'] )
  
  @section('container')
  <br> <br>
  <ul>
    @foreach( $datas as $index => $data )
    <li>
        {{ $index+1 }}. 
      <a href="/action/{{$data->username}}/data">{{ $data->name }} 
    </li>
    @endforeach
  </ul>
  @endsection
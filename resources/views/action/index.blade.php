
  @extends('layouts.app',['title' => 'home'] )
  
  @section('container')
  <br> <br>
  <ul>
    @foreach( $datas as $index => $data )
    <li>
        {{ $index+1 }}. 
      <a href="/action/{{$data->id}}/data">{{ $data->name }}</a>
    </li>
    @endforeach
  </ul>
  @endsection
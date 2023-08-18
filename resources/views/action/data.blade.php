
@foreach( $tamus as $tamu )
  <li> {{ $tamu->username }} </li>
  <li> {{ $tamu->name }} </li>
  <li> {{ $tamu->email }} </li>
  <li> {{ $tamu->phone }} </li>
  <li> {{ $tamu->tujuan_kunjungan }} </li>
  <li> {{ $tamu->waktu_kunjungan }} </li>
  <li> {{ $tamu->catatan }} </li>
@endforeach


  @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      
    {{ $error  }}
    </div>
  @endforeach
<form action=""method="post">
  @csrf
  <input type="text"name="username"placeholder="username"value="{{old('username') }}"> <br>
  <input type="text"name="name"placeholder="name"value="{{old('name') }}"> <br>
  <input type="email"name="email"placeholder="email"value="{{old('email') }}"> <br>
  <input type="number"name="phone"placeholder="phone"value="{{old('phone') }}"> <br>
  <input type="text"name="tujuan_kunjungan"placeholder="tujuan kunjungan"value="{{old('tujuan_kunjungan') }}"> <br>
  <input type="text"name="catatan"placeholder="catatan"value="{{old('catatan') }}"> <br>
  
  <button type="submit">Simpan</button>
</form>
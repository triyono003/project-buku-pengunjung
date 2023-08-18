
<form action=""method="post">
  @csrf
  <input type="text"name="username"placeholder="username"> <br>
  <input type="text"name="name"placeholder="name"> <br>
  <input type="email"name="email"placeholder="email"> <br>
  <input type="number"name="phone"placeholder="phone"> <br>
  <input type="text"name="tujuan_kunjungan"placeholder="tujuan kunjungan"> <br>
  <input type="text"name="catatan"placeholder="catatan"> <br>
  
  <button type="submit">Simpan</button>
</form>
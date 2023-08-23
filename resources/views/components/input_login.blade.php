<h2>Login untuk melanjutkan</h2>
<form action=""method="post">
  @csrf
  <input type="text"name="email"placeholder="email"> <br>
  <input type="text"name="password"placeholder="pas"> <br>
  <br>
  <a href="register">belum punya akun</a>
  <button type="submit">login</button>
</form>
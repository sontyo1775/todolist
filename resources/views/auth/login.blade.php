<form action="{{route('login')}}" method="post">
    @csrf
    <p>メール : <input type="email" name="email"></p>
    <p>パ  ス : <input type="password" name="password"></p>
    <input type="submit" value="ログイン">
</form>\
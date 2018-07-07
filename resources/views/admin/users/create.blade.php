<form action="/users" method="post">
    {!! csrf_field() !!}
    <input type="text" name="name" id="">
    <input type="email" name="email" id="">
    <input type="password" name="password" id="">
    <input type="submit" value="Submit">
</form>
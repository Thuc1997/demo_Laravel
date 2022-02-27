

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
<h3 class="text-center">Update thông tin user</h3>
<form action="/edit" method="POST" class="text-center">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <label for="">Name</label>
    <input type="text" name="name" value="{{$data['name']}}"><br>
    <label for="">Email</label>
    <input type="email" name="email" value="{{$data['email']}}"><br>
    <label for="">Quyền</label>
    <input type="number" name="roles" value="{{$data['roles']}}"><br>

    <button type="submit">update</button>
</form>



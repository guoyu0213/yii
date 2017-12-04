<form action="/9/laravel-master/public/updates" method="post">
	@foreach($data as $sort)
	<tr>
		<td>用户名：</td>
		<td><input type="text" name="username" value="{{$sort->username}}"></td>
	</tr>
	<tr>
		<td>密码：</td>
		<td><input type="text" name="password" value="{{$sort->password}}"></td>
	</tr>
	<tr>
		<td><input type="text" name="id" value="{{$sort->id}}"></td>
		<td><input type="submit" value="修改"></td>
	</tr>
	@endforeach
</form>


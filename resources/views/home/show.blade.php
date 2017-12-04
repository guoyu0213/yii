<table border="1"><tr>
	<td>用户名</td>
	<td>密码</td>
	<td>操作</td>
</tr>
@foreach($data as $sort)
    <tr>
	<td>{{$sort->username}}</td>
	<td>{{$sort->password}}</td>
	<td><a href="/9/laravel-master/public/delete?id={{$sort->id}}">删除</a>
		<a href="/9/laravel-master/public/update?id={{$sort->id}}">修改</a></td>
	</tr>         
 @endforeach
 </table>
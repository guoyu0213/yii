<script type="text/javascript" src="js/js/laydate.js"></script>
<form action="/9/laravel-master/public/add" method="post">
	<tr>
		<td>用户名：</td>
		<td><input type="text" name="username"></td>
	</tr>
	<br/>
	<br/>
	<br/>
	<br/>
	<tr>
		<td>密码：</td>
		<td><input type="text" name="password"></td>
	</tr>
	<br/>
	<br/>
	<br/>
	<br/>
	<tr><td><input placeholder="请输入日期" name="riqi" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})"></td></tr>
	<tr>
		<td></td>
		<td><input type="submit" value="添加"></td>
	</tr>
</form>


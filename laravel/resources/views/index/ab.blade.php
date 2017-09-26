<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>姓名</td>
			<td>密码</td>
			<td>积分</td>
		</tr>
		<?php foreach($aa as $k=>$v){ ?>
		<tr>
			<td><?php echo $v['username'] ?></td>
			<td><?php echo $v['password'] ?></td>
			<td><?php echo $v['jifen'] ?></td>
		</tr>
		<?php }?>
		<form action="tijiao" method="post">
			<table>
				<tr>
					<td>姓名</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>年龄</td>
					<td><input type="text" name="age"></td>
				</tr>
				<tr>
					<td>性别</td>
					<td><input type="text" name="sex"></td>
				</tr>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="submit" value="提交">
			</table>
			
		</form>
	</table>
</body>
</html>
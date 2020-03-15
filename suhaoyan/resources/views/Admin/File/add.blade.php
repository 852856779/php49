<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/file" method='post' enctype="multipart/form-data">
		<input type="file" name="upup">
		<button>上传</button>
		{{csrf_field()}}
	</form>
	<a href="/file">下载图片</a>
</body>
</html>
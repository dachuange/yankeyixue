<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
	    <!-- Loading Bootstrap -->
	    <link href="Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
	    <!-- Loading Flat UI -->
	    <link href="Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">
	    <link href="Public/Admin/Flat/docs/assets/css/demo.css" rel="stylesheet">
	    <link rel="shortcut icon" href="Public/Admin/Flat/img/favicon.ico">
	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	    <!--[if lt IE 9]>
	      <script src="dist/js/vendor/html5shiv.js"></script>
	      <script src="dist/js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<form action="" method="post">
			
		<div class="alert alert-success">编辑分类</div>
		<div class="form-group">
			<label for="exampleInputEmail1">分类名称</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类名称" required="" name="category_name" value="<?php echo ($oldData["category_name"]); ?>">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">所属类型</label><br />

			<input id="exampleInputEmail1" class="" type="radio" required="" name="category_sid" value="0">医学<br />
			<input id="exampleInputEmail1" class="" type="radio" required="" name="category_sid" value="1">新闻<br/>
			<input id="exampleInputEmail1" class="" type="radio" required="" name="category_sid" value="2">历史
		</div>





		<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>
</html>
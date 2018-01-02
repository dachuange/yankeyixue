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
	    <script type="text/javascript" src='Public/jquery-1.8.2.min.js'></script>
	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	    <!--[if lt IE 9]>
	      <script src="dist/js/vendor/html5shiv.js"></script>
	      <script src="dist/js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<table class="table table-hover">
			<tr class="active">
			  <th width="30">cid</th>
			  <th>分类名称</th>
			 <th>所属类型</th>
	
			  <th width="210">操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr class="open" cid="{<?php echo ($v['category_id']); ?>}" pid="{<?php echo ($v['category_sid']); ?>}" style="cursor: pointer;">
				<td><?php echo ($vo["category_id"]); ?></td>
				<td><?php echo ($vo["category_name"]); ?></td>
				<td>
					<?php  switch ($vo['category_sid']) { case 0: echo "医学"; break; case 1: echo "新闻"; break; case 2: echo "历史"; break; default: echo "No number between 0 and 2"; } ?>
				</td>
				<td>
					<!--<a href="{{U('Cate/addSon',array('cid'=>$v['cid']))}}" class="btn btn-sm btn-primary">添加子类</a>-->
					<a href="<?php echo U('Cate/edit',array('category_id'=>$vo['category_id']));?>" class="btn btn-sm btn-warning">编辑</a>
					<!-- 此处删除参照瑶瑶blog分类cate删除处 -->
					<a href="javascript:if(confirm('确认删除？')) location.href='<?php echo U('Cate/del',array('category_id'=>$vo['category_id']));?>'" class="btn btn-sm btn-danger">删除</a>
				</td>
			</tr><?php endforeach; endif; ?>
		</table>
<script type="text/javascript">
	$(function(){
		$('.open').toggle(function(){
			var cid = $(this).attr('cid');
			$('tr[pid=' + cid + ']').fadeIn(600);
		}, function(){
			var cid = $(this).attr('cid');
			$('tr[pid=' + cid + ']').fadeOut(600);
		});
	});
</script>
	</body>
</html>
<!doctype html>
<?php include("stye.php"); ?>
<html>
<head>
<meta charset="utf-8">

<title>Untitled Document</title>

</head>

<body>
	<?php include("menu.php");?>
	<div class="container">
	<?php include("slide.php")?>
	<div class="row">
  <div class="col-md-2">
	<div class="list-group">
	  <a href="#" class="list-group-item active">
		Cras justo odio
	  </a>
	  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
	  <a href="#" class="list-group-item">Morbi leo risus</a>
	  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
	  <a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
  </div>
  <div class="col-md-10">
  	<div class="panel panel-primary">
      <div class="panel-heading">Panel with panel-primary class</div>
      <div class="panel-body">
      	<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/ดาวน์โหลด.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/ดาวน์โหลด.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/ดาวน์โหลด.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
	</div>
	<!------------------popup dang nhap--------------------->
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
      </div>
      <div class="modal-body">
        <form>
        	<input type="email" name="ten" class="form-control"
        	placeholder="Tên">
        	<br>
        	<input type="password" name="pass" class="form-control"
        	placeholder="Mắt khậu">
        	<br>
        	<input type="submit" value="Đăng nhập" class="btn btn-info btn-xs btn-block">
        </form>
      </div>
      
    </div>
  </div>
</div>
<!--------------------popupdang ky-------------------->
<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Đăng ký</h4>
      </div>
      <div class="modal-body">
        <form>
        	<input type="text" name="ten" class="form-control" 
        	placeholder="họ tên">
        	<br>
        	
        	<input type="email" name="email" class="form-control"
        	placeholder="email">        	
        	<br>
        	
        	<input type="password" name="pass" class="form-control"
        	placeholder="mất khậu">
        	<br>
        	
        	<select name="gioitinh" class="form-control">
			  <option>Nam</option>
			  <option>Nữ</option>			  
			</select>
       		<br>
       		
        	<input type="date" name="namsinh" class="form-control"
        	placeholder="Năm sinh">
        	<br>
      
        	<textarea name="chitiet" class="form-control" rows="3"></textarea>
        	<br>
        	<input type="file" name="img" >
        	<br>
        	<input type="submit" value="Đăng ký" class="btn btn-info">
        	<button type="button" class="btn btn-default" data-dismiss="modal">thoát</button>
        	
        </form>
      </div>
      
    </div>
  </div>
</div>
</body>
</html>
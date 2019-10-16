<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Trị Hệ Thống</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="css/Xoa.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <div id="header">
          <div class="title col-md-6"> 
            <a class="navbar-brand" href="Quantrihethong.php">QUẢN TRỊ </a></div>
        <div class="ad_logout col-md-5">
           <ul  class="navbar-nav">
            
               <!-- Dropdown -->
               <li class="nav-item ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     Admin
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   
                     <a class="dropdown-item" href="">Profile</a><hr>
                     <a class="dropdown-item" href="">Help</a> 
                     <a class="dropdown-item" href="">Setting</a>
                     <a class="dropdown-item" href="../loginv1.php">Log out</a>
                  </div>
                </li>
            </ul>
        </div>
       </div>           
                    <div class="btn-group-vertical">
                            
                                   <ul>
                                      <li class="nav-item1">
                                          <a href="Quantrihethong.php">
                                            <i class="fa fa-home"> Trang chủ </i>
                                          </a>
                                       
                                           </li> <hr>
                                     <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-list"> Quản trị danh mục</i> 
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="baiviet.php">Thêm bài viết</a>
                                      <a class="dropdown-item" href="ChinhSuaBaiViet.php">Chỉnh sửa bài viết</a>
                                      <a class="dropdown-item" href="XoaBai.php">Xóa bài</a>
                                      <a class="dropdown-item" href="BaiVietDaDang.php">Bài viết đã đăng</a>
                                    </div>
                                     </li><hr>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-image"> Quản trị giao diện</i> 
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                          <a class="dropdown-item  " href="QuanTriHinhAnh.php"> Hình ảnh</a>
                                          <a class="dropdown-item" href="#">Hỗ trợ trực tuyến</a>
                                         
                                        </div></li><hr>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-users"> Cấu hình User</i> 
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                              <a class="dropdown-item" href="#">Quản lý user</a>
                                              <a class="dropdown-item" href="#">Danh sách quyền</a>
                                              <a class="dropdown-item" href="#">Thông tin user</a>
                                            </div></li>
                                  </ul>
                                   
                                            
  
                    </div>
                   <div class="content">
                            <div id="page-wrapper">

                                <div class="title-module">Xóa bài</div>
				<div class="filter">
					<div class="label">ID</div>
					<div class="value"><input type="text" name="title"></div>
					
					
					<div class="search"><input type="button" value="Tìm" name="search"></div>
				</div>
			  <div class="list-course">
					<table class="list-course" >
						<tr class="row-first">
							<td width="10"><input type="checkbox"></td>
							
              <td class="name" width="100"><a id="xoa" href="#">Xóa</a></td>
              <td class="name" width="450">ID</td>
							<td class="name" width="450">Tiêu đề</td>
						
																			
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							
							<td><a href="#"><img src="image/deleted.jpg" border="0"></a></td>
							<td></td>
							<td></td>
																		
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							
							<td><a href="#"><img src="image/deleted.jpg" border="0"></a></td>
							<td></td>
							<td></td>
																		
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							
              <td><a href="#"><img src="image/deleted.jpg" border="0"></a></td>
              
							<td></td>
							<td></td>
																		
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							
							<td><a href="#"><img src="image/deleted.jpg" border="0"></a></td>
							<td></td>
							<td></td>
																		
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							
							<td><a href="#"><img src="image/deleted.jpg" border="0"></a></td>
							<td></td>
							<td></td>
																		
						</tr>
					</table>
					<div class="task">
									<input type="button" name="Xóa" value="Xóa"> 
									
					</div>
			    </div>
        
                        
                                </div>
                        
                    </div>
                    
                     
                 
            
                
       
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>
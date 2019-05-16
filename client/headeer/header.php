 <div class="header">
                <div class="top-wrapper">
                    <div class="container top">
                        <div class="logo-wrapper">
                            <div class="logo verticle-center">
                                <span class="badge badge-primary">BK</span>
                                <span style="
					color: #e6cb3c;
				">Travel</span>
                            </div>
                        </div>
                        <div class="search-wrapper">
                            <div class="input-group verticle-center">
                                <form action="trangtimkiem.php" method="GET">
                                    <div class="input-group-prepend" style="display: inline;width: 30px; margin-right: 5px; height: 100%;">
                                        <span class="input-group-text" style="display: inline; height: 30px;">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Tìm bài viết" name="search" style="display: inline;width: 200px;">
                                    <div class="input-group-append" style="display: inline;">
                                        <button class="btn btn-primary btn-search" type="submit" name="submit">TÌM KIẾM</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="user-wrapper">
                            <div class="button-wrapper verticle-center" style="display: ${login ? "none" : "inline-block"}">
							<?php
								session_start();
								if (isset($_SESSION['username'])) {
									$username = $_SESSION['username'];
									$sql = "select * from dang_ky where Username = '$username'";
									$query = mysqli_query($conn, $sql);
									if (!$query) {
										printf("Error: %s\n", mysqli_error($conn));
										exit();
									}
								while ( $data = mysqli_fetch_array($query) ) {
									$lastname = $data["Ho_va_ho_lot"];
									$name = $data["Ten"];
									$email = $data["Email"];
									$level = $data["role"];
								}							
							?>
							
							    <a><?php echo $lastname." ".$name; ?></a>
                                <span> | </span>
                                <a href="trangcanhan.php?username=<?php echo $username; ?>">Profile</a>
								                                <span> | </span>
								<a href="trangcanhan.php?username=<?php echo $username; ?>">Logout</a>
							
							<?php
								}
								else {
							?>
                                <a href="index1.php">Đăng nhập</a>
                                <span> | </span>
                                <a href="dangky.php">Đăng ký</a>
							<?php
								}
								?>
                            </div>
                        </div>
                    </div>
                </div>
				
				
									<!-- Simulate a smartphone / tablet -->
					<div class="mobile-container">

					<!-- Top Navigation Menu -->
					<div class="topnav">
					  <a href="#home" class="active">Logo</a>
					  <div id="myLinks">
						<a href="index.php">Trang chủ</a>
						<a href="mienbac.php">Miền Bắc</a>
						<a href="mientrung.php">Miền Trung</a>
												<a href="miennam.php">Miền Nam</a>
																		<a href="monantonghop.php">Món ăn</a>


					  </div>
					  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					  </a>
					</div>

					<!-- End smartphone / tablet look -->
					</div>

					<script>
					function myFunction() {
					  var x = document.getElementById("myLinks");
					  if (x.style.display === "block") {
						x.style.display = "none";
					  } else {
						x.style.display = "block";
					  }
					}
					</script>
				
				
                <div class="bottom-wrapper">
                    <div class="container bottom">
                        <div class="nav-bar-wrapper">
                            <ul class="nav-bar">
                                <li class="item">
                                    <a href="index.php">Trang chủ</a>
                                </li>
                                <li class="item">
                                    <a href="mienbac.php">Miền Bắc</a>
                                </li>
                                <li class="item">
                                    <a href="mientrung.php">Miền Trung</a>
                                </li>
								<li class="item">
                                    <a href="miennam.php">Miền Nam</a>
                                </li>
								<li class="item">
                                    <a href="monantonghop.php">Món ăn</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
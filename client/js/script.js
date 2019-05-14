COMMON_TEMPLATE= {
    header: function(login) {
        var html =  `
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
                                <a href="index1.php">Đăng nhập</a>
                                <span> | </span>
                                <a href="dangky.php">Đăng ký</a>
                            </div>
                            <div class="button-wrapper verticle-center" style="display: ${login ? "inline-block" : "none"}">
                                <a href="user-info.html">
                                    <i class="fas fa-user-circle"></i>
                                </a>
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
        `

        $("body").prepend(html);
    },
    footer: function() {
        var html = `
            <div class="footer">
                <div class="top-wrapper">
                    <div class="container top">
                        <div class="left">
                            <div class="logo verticle-center">
                                <span class="badge badge-primary">BK</span>
                                <span style="
    color: #e6cb3c;
">Travel</span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="nav-bar-wrapper">
                                <ul class="nav-bar">
                                    <li class="item">
                                        <a href="mienbac.php">Trang chủ</a>
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
										</li>
									</ul>
                            </div>
                            <div class="social-button-wrapper">
                                <span>Follow us on</span>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-wrapper">
                    <div class="container bottom">
                        <span>
                            © BKDeal - 2018
                        </span>
                    </div>
                </div>
            </div>
        `;
        $("body").append(html);
    },
    ads: function(elem) {
        var html = `
            <div class="ads-wrapper">
                <div class="ads">
                    <div class="ads-title">
                        <span>Có thể bạn quan tâm</span>
                    </div>
                    <div class="owl-carousel owl-theme ads-slider">
                        <div class="item">
                            <img src="img/1.png">
                        </div>
                        <div class="item">
                            <img src="img/2.png">
                        </div>
                        <div class="item">
                            <img src="img/3.png">
                        </div>
                    </div>
                </div>
                <div class="ads">
                    <div class="ads-title">
                        <span>Xem nhiều</span>
                    </div>
                    <div class="owl-carousel owl-theme ads-slider">
                        <div class="item">
                            <img src="img/1.png">
                        </div>
                        <div class="item">
                            <img src="img/2.png">
                        </div>
                        <div class="item">
                            <img src="img/3.png">
                        </div>
                    </div>
                </div>
            </div>
        `;

        $(elem).html(html);
    }
};

$(document).on("click",  ".btn-search", function() {
    location.href = "trangtimkiem.html"
});


$(function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000
    })
});
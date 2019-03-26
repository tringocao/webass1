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
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Tìm bài viết">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-search" type="button">TÌM KIẾM</button>
                                </div>
                            </div>
                        </div>
                        <div class="user-wrapper">
                            <div class="button-wrapper verticle-center" style="display: ${login ? "none" : "inline-block"}">
                                <a href="login.html">Đăng nhập</a>
                                <span> | </span>
                                <a href="signup.html">Đăng ký</a>
                            </div>
                            <div class="button-wrapper verticle-center" style="display: ${login ? "inline-block" : "none"}">
                                <a href="user-info.html">
                                    <i class="fas fa-user-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-wrapper">
                    <div class="container bottom">
                        <div class="nav-bar-wrapper">
                            <ul class="nav-bar">
                                <li class="item">
                                    <a href="index.html">Bài viết tổng hơp</a>
                                </li>
                                <li class="item">
                                    <a href="voucher-list.html">Miền Bắc</a>
                                </li>
                                <li class="item">
                                    <a href="sell-list.html">Miền Trung</a>
                                </li>
								<li class="item">
                                    <a href="sell-list.html">Miền Nam</a>
                                </li>
								<li class="item">
                                    <a href="sell-list.html">Món ăn</a>
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
                                        <a href="index.html">Bài viết tổng hợp</a>
                                    </li>
                                    <li class="item">
										<a href="voucher-list.html">Miền Bắc</a>
                                    </li>
									<li class="item">
										<a href="sell-list.html">Miền Trung</a>
									</li>
									<li class="item">
										<a href="sell-list.html">Miền Nam</a>
									</li>
									<li class="item">
										<a href="sell-list.html">Món ăn</a>
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
    location.href = "search-result.html"
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
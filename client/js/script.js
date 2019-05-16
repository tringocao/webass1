COMMON_TEMPLATE= {
    header: function(login) {
        var html =  `
           
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
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" class="img-responsive"></a></div>
        
                        
        <div id="navbar" class="navbar-collapse collapse" style="padding:10px 0;">

          <ul class="navbar-nav navbar-right nav">
            <li><a href="/">首頁</a></li>
            <li><a href="/about">公司簡介</a></li>
            <li><a href="/news">最新消息</a></li>
            <li><a href="/products">產品型錄</a></li>
            <li><a href="/spec">產品規格表</a></li>
            <li><a href="/plastic">認識塑膠</a></li>
            <li><a href="/map">交通指引</a></li>
            <li><a href="/contact">聯絡我們</a></li>
            <li><div class="searchBox"><!-- searchBox -->
                	<div class="inputBox">
                      <input type="text" id="keyword" placeholder="請輸入產品關鍵字...">
                      <a class="btn_submit" onclick="if($('#keyword').val()==''){ alert('請輸入關鍵字');}else{location.href=encodeURI('../products?keyword=' + $('#keyword').val());}">
                        <img src="{{asset('img/i_search.png')}}" alt=""/>
                      </a>
                    </div>
                    <div class="btn" onClick="$(this).prev().slideToggle(200);"><a></a></div>
                </div><!-- searchBox end -->
				
            </li>
          </ul>

        </div><!--/.navbar-collapse -->
      </div>
</nav>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('img/ad01.jpg') }}" alt="最新商品圖">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/ad02.jpg') }}" alt="最新商品圖">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/ad03.jpg') }}" alt="最新商品圖">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
    
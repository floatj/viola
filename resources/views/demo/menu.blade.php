<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">信件系統222-測試-Demo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--<li class="active"><a href="#">統計圖表<span class="sr-only">(current)</span></a></li>-->
                <li><a href="/">Home</a></li>
                <li><a href="{{action('SupplierController@showInfo')}}">s信件info</a></li>
                <li><a href="{{action('NewsinfoController@showAllNewsinfo')}}">n錯誤info</a></li>
                <li><a href="{{action('CustomController@showCustomPage')}}">c分類page</a></li>
                <li><a href="{{action('ProductController@showAllProducts')}}">d統計m</a></li>
                <li><a href="#">con連接t</a></li>
                <li><a href="#">blalalaa</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
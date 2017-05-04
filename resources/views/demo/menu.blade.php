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
                <li><a href="{{action('CustomController@showCustomPage')}}">cust自訂分累om_pg</a></li>
                <li><a href="{{action('ProductController@showProductsList')}}">d統計m_ls(list)</a></li>
                <li><a href="{{action('ProductController@showProductsList2')}}">d統計m_ls(img)</a></li>

                <li><a href="{{action('ContactController@showContactPage')}}">con連接t</a></li>
                <li><a href="{{action('ContactController@showMapPage')}}">map連接t</a></li>
            </ul>
            <!--right side-->
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">搜尋</button>
                </form>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

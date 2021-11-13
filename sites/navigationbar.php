<div id="scoped-navigationbar">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="/css/navigationbar.css" type="text/css" rel="stylesheet">
    <link href="/js/navigationbar.js" type="text/js" rel="script">
    <div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
        <a class="navbar-brand" href="#"><img src="/img/wiese.png" alt="Wiese" height="51" width="68"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 order-1" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">[%tr%]Home[%/tr%]<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo HOST . '/fotografie'; ?>">[%tr%]Photograph[%/tr%]</a>
                </li>
                <li class="nav-item order">
                    <a class="nav-link disabled" href="#">[%tr%]CineCal[%/tr%]</a>
                </li>
            </ul>
        </div>
            <div class="collapse navbar-collapse w-100 order-3" id="navbarCollapse">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item" href="#"><a>Deutsch</a></li>
                        <li class="dropdown-item" href="#"><a>English</a></li>
                    </ul>
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">[%tr%]Language[%/tr%]</a>
                </li>
            </ul>
            <button type="button" class="btn btn-outline-light justify-content-md-end">[%tr%]Login[%/tr%]</button>
            <!--
            <form class="form-inline mt-2 mt-md-0 justify-content-md-end">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            -->


        </div>
    </div>

</div>

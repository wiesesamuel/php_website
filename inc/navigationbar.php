<div id="scoped-navigationbar">
    <link href="/css/navigationbar.css" type="text/css" rel="stylesheet">

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-4" aria-label="Third navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo HOST; ?>"> <img src="/img/wiese.png" alt="Wiese" height="51"
                                                                     width="68"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_wiese"
                    aria-controls="navbar_wiese" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar_wiese">
                <!-- left part -->

                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo HOST; ?>">[%tr%]Home[%/tr%]</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ENABLED_FOTO ? null : 'disabled' ?>"
                           href="<?php echo HOST . '/photography.php'; ?>">[%tr%]Photograph[%/tr%]</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ENABLED_CINECAL ? null : 'disabled' ?>"
                           href="<?php echo HOST . '/cinecal.php'; ?>">[%tr%]CineCal[%/tr%]</a>
                    </li>
                </ul>

                <!-- right part -->
                <!-- marginSTART-auto instead of mEnd-suto-->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown_lang" data-bs-toggle="dropdown"
                           aria-expanded="false">[%tr%]Language[%/tr%]</a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown_lang">
                            <li class="dropdown-item"
                                onclick="document.cookie = 'language=de-DE'; window.location.reload(); return false;">
                                <a>Deutsch</a>
                            </li>
                            <li class="dropdown-item"
                                onclick="document.cookie = 'language=en-EN'; window.location.reload(); return false;">
                                <a>English</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <button type="button"
                        class="btn btn-outline-light justify-content-md-end <?php echo ENABLED_LOGIN ? null : 'disabled' ?>"
                        onclick="document.getElementById('login_website').style.display='block'">[%tr%]Login[%/tr%]
                </button>
                <!--
                <div>
                    <form>
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                -->
            </div>
        </div>
    </nav>


</div>

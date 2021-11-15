<div id="scoped-navigationbar">

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-4" aria-label="Third navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/img/wiese.png" alt="Wiese" height="51" width="68"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_wiese"
                    aria-controls="navbar_wiese" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar_wiese">
                <!-- left part -->

                    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">[%tr%]Home[%/tr%]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="<?php echo HOST . '/fotografie'; ?>">[%tr%]Photograph[%/tr%]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">[%tr%]CineCal[%/tr%]</a>
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

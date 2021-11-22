<div id="scoped-landingpage">
    <link href="/css/brand.css" type="text/css" rel="stylesheet">
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark brand-wiese">
            <div class="col-md-6 px-0 ">
                <h1 class="display-4 fst-italic">[%tr%]Home_Title[%/tr%]</h1>
                <p class="lead my-3">[%tr%]Home_Text[%/tr%]</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">[%tr%]Home_Continue[%/tr%]</a></p>
            </div>
        </div>

        <div class="row mb-4">

            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">[%tr%]Design[%/tr%]</strong>
                        <h3 class="mb-0">[%tr%]Photograph[%/tr%]</h3>
                        <p class="card-text mb-auto">[%tr%]Home_Photograph_Teaser[%/tr%]</p>
                        <a href="#" class="stretched-link">[%tr%]Home_Continue[%/tr%]</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="/img/fotos-thumbnail.JPG" class="thumbnail" alt="finity">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">[%tr%]Work[%/tr%]</strong>
                        <h3 class="mb-0">[%tr%]Resume[%/tr%]</h3>
                        <p class="mb-auto">[%tr%]Resume_Teaser[%/tr%]</p>
                        <a href="<?php echo HOST . '/resume.php'; ?>" class="stretched-link">[%tr%]Home_Continue[%/tr%]</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="/img/suit.jpeg" class="thumbnail" alt="screenshot">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">[%tr%]Work[%/tr%]</strong>
                        <h3 class="mb-0">[%tr%]CineCal[%/tr%]</h3>
                        <p class="mb-auto">[%tr%]CineCal_Teaser[%/tr%]</p>
                        <a href="<?php echo (ENABLED_CINECAL OR isset($_SESSION['userid'])) ? HOST . '/cinecal/' : '#'; ?>" class="stretched-link">[%tr%]Home_Continue[%/tr%]</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="/img/pexels-pavel-danilyuk-7234304-thumbnail.jpg" class="thumbnail" alt="screenshot">
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
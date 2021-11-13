<?php
include('inc/sql.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title><?php echo TITLE ?></title>
    <link rel="icon" href="/img/logo.png" type="image/png">
    <link href="../css/style.css?v=<?php echo VERSION ?>" rel="stylesheet" type="text/css">

</head>
<body>
<header>

    <nav>
        <ul>
            <li><a href="/sites/resume.html">Resume</a></li>
            <li><a href="#">Seite 2</a></li>
            <li><a href="#">Seite 3</a></li>
            <li><a href="#">Seite 4</a></li>
            <li><a href="#">Seite 5</a></li>
        </ul>
    </nav>
    <?php
    require translate(ROOT_PATH . "/inc/login.php");
    ?>

    <!-- Rounded switch -->
    <label class="switch">
        <input type="checkbox" id="togBtn">
        <div class="slider round">
            <!--ADDED HTML -->
            <span class="on">DE</span>
            <span class="off">EN</span>
            <!--END-->
        </div>
    </label>


</header>
Hitler


<h1>[%tr%]formatted_value[%/tr%]</h1>
<h1>[%tr%]hello[%/tr%]</h1>
<h1>hi</h1>
</body>

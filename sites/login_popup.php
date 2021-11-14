<div id="scoped-login">
    <link rel="stylesheet" href="/css/login.css" type="text/css">
    <link rel="javascript" href="/js/login.js" type="text/js">
    <div id="login_website" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
            <!--
            <div class="imgcontainer">
                <span onclick="document.getElementById('login_website').style.display='none'" class="close"
                      title="Close Modal">&times;</span>
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>
            -->
            <div class="container">
                <label for="uname"><b>[%tr%]Username[%/tr%]</b></label>
                <input type="text" placeholder="[%tr%]Username placeholder[%/tr%]" name="uname" required>

                <label for="psw"><b>[%tr%]Password[%/tr%]</b></label>
                <input type="password" placeholder="[%tr%]Password placeholder[%/tr%]" name="psw" required>

                <button type="submit">[%tr%]Login[%/tr%]</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember">[%tr%]Remember me[%/tr%]
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('login_website').style.display='none'"
                        class="cancelbtn">[%tr%]Cancel[%/tr%]
                </button>
                <span class="psw"> <a href="#">[%tr%]Password forget[%/tr%]</a></span>
            </div>
        </form>
    </div>

</div>

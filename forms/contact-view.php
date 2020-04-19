<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>r00tless</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link href="/assets/logos/icon.jpg" rel="icon">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 style="color: red;font-weight: bold;">r00tless</h1>
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="teams.html">Team</a></li>
                <li class="drop-down"><a href="">Writeups</a>
                    <ul>
                        <li><a href="/writeups/hackthebox.html">Hack The Box</a></li>
                        <li><a href="/writeups/WPICTF2020.html">WPI CTF 2020</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<body>
    <div class="hi">
        <div class="form-container">
            <form name="frmContact" id="" frmContact="" method="post" action="" enctype="multipart/form-data"
                onsubmit="return validateContactForm()">

                <div class="input-row">
                    <label style="padding-top: 20px;">Name</label> <span id="userName-info" class="info"></span><br />
                    <input type="text" class="input-field" name="userName" id="userName" />
                </div>
                <div class="input-row">
                    <label>Email</label> <span id="userEmail-info" class="info"></span><br /> <input type="text"
                        class="input-field" name="userEmail" id="userEmail" />
                </div>
                <div class="input-row">
                    <label>Hack the Box Profile Link</label> <span id="subject-info" class="info"></span><br /> <input
                        type="text" class="input-field" name="subject" id="subject" />
                </div>
                <div class="input-row">
                    <label>Invite Code</label> <span id="userMessage-info" class="info"></span><br />
                    <textarea name="content" id="content" class="input-field" cols="60" rows="6"></textarea>
                </div>
                <div>
                    <input type="submit" name="send" class="btn-submit" value="Send" />

                    <div id="statusMessage">
                        <?php
                        if (! empty($message)) {
                            ?>
                        <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    function validateContactForm() {
        var valid = true;

        $(".info").html("");
        $(".input-field").css('border', '#e0dfdf 1px solid');
        var userName = $("#userName").val();
        var userEmail = $("#userEmail").val();
        var subject = $("#subject").val();
        var content = $("#content").val();

        if (userName == "") {
            $("#userName-info").html("Required.");
            $("#userName").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (userEmail == "") {
            $("#userEmail-info").html("Required.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#userEmail-info").html("Invalid Email Address.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }

        if (subject == "") {
            $("#subject-info").html("Required.");
            $("#subject").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (content != "I10v3r00tl3ss") {
            $("#userMessage-info").html("Incorrect");
            $("#content").css('border', '#e66262 1px solid');
            valid = false;
        }
        return valid;
    }
    </script>
</body>

</html>
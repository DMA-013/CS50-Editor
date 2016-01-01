     <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>
        <link href="/css/custom.css" rel="stylesheet" type="text/css" />

        <?php if (isset($title)): ?>
            <title>CS50 Notepad: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>CS50 Notepad:</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">
<!--This is to change the header if needed -->
            <div id="top">
                <a href="/">

                     <h1><img alt="CS50 RSS READER" src="/img/logo4.png"/></h1>

                </a>
            </div>

            <div id="middle">

<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Log In</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">log in</a> for an account
</div>

</div>

</body>

<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>
        <link href="/css/custom.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="//cdn.quilljs.com/0.20.1/quill.snow.css" />

        <?php if (isset($title)): ?>
            <title>CS50 Editor <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>CS50 Editor</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>
        <script src="/js/tabIndent.js"></script>

    </head>

    <body>

        <div class="container">
<!--This is to change the header if needed -->
            <div id="top">
                

            </div>

            <div id="middle">
            
            
            

<?php include './includes/header.php'; ?>
<head>
<title>ACE in Action</title>
<style type="text/css" media="screen">
    #editor { 
        position: absolute;
        top: 0;
        right: 0;
        bottom: 200;
        left: 0;
    }
</style>
</head>
<body>

<div>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <div id="editor"></div>

</form>
<button type="submit"></button>
</div>

<script src="./packages/src-min/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="./packages/src-min/mode-html.js" type="text/javascript" charset="utf-8"></script>
<script src="./packages/src-min/ext-language_tools.js"></script>
<script src="./packages/src-min/ext-emmet.js"></script>


<script src="./editor.js"></script>
</body>
</html>
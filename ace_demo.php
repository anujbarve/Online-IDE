
<head>
<title>ACE in Action</title>
<style type="text/css" media="screen">
    #editor { 
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>
</head>
<body>

<form action="" method="post">
    <div id=editor>
    <input id="editor" type="text"></input>
    </div>
</form>

<script src="./packages/src-min/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/one_dark");
    editor.session.setMode("ace/mode/python");
</script>
</body>
</html>
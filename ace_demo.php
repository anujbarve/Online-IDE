<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDN Code Editor</title>

<style>
    /* Variables */
:root {
    --editor-bg: #eee;
    --editor-border: #3f87a6;
}

/* Reset Styles */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

html, body {
    height: 100%;
    width: 100%;
}

.editor {
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.editor__wrapper {
    width: 95%;
    height: 100%;
    display: flex;
    flex-direction: column;
    background: var(--editor-bg);
    padding: 2em;
    border-radius: 3px;
    border: 1px solid #ccc;
}

.editor__body {
    flex: 1;
}
.editor__code {
    position: relative;
    height: 100%;
    width: 100%;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border: 1px solid var(--editor-border);
}
</style>
</head>

<body>
    <div class="editor">
        <div class="editor__wrapper">
            <div class="editor__body">
                <div id="editor" class="editor__code"></div>
            </div>
        </div>
        
    <button onclick="getValue()">Submit</button>
    </div>

    <script>
        function getValue(){
console.log(document.getElementById("editor").innerText)
}
    </script>


    <!-- Required Ace Libraries -->
    <script src="./packages/src-min/ace.js"></script>
    <script src="./packages/src-min/mode-python.js"></script>

    <!-- Custom Scripts -->
    <script src="./editor.js"></script>
</body>

</html>
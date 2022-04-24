let codeEditor = ace.edit("editor");

let editorLib = {
    init(){
        codeEditor.setTheme("ace/theme/dracula");
        codeEditor.session.setMode("ace/mode/python");

        codeEditor.setOptions({
            fontSize:'12pt',
            enableBasicAutocompletion: true,
            enableLiveAutocompletion:true,
            enableSnippets: true
        })
    }
}

editorLib.init();


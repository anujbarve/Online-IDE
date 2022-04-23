let codeEditor = ace.edit("editor");

let editorLib = {
    init(){
        codeEditor.setTheme("ace/theme/dracula");
        codeEditor.session.setMode("ace/mode/python");

        codeEditor.setOptions({
            fontSize:'16pt',
            enableBasicAutocompletion: true,
            enableLiveAutocompletion:true,
            enableSnippets: true,
            enableEmmet: true
        })
    }
}

editorLib.init();
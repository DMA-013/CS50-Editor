/**
 * scripts.js
 *
 * Computer Science 50
 * Problem Set 7
 *
 * Global JavaScript, if any.
 */

/*The variable to hold the text for text file*/
var ace_text;
var content_text;




function trigger(){
// Side Menu Trigger Function
$('a.sideTrigger').click(function() {
	$('body').toggleClass('sideOpen');
	return false;
});

// Close Menu Trigger Function
$('a.closeTrigger').click(function() {
	$('body').removeClass('sideOpen');
	return false;
});

}

/*This is from https://jsfiddle.net/Kritika/LnLpdpps/ to enable tab space indentation in contenteditable*/
function tabspace() {
    $(document).keydown(function(e) {  
    $("#textEditor").focus();
    if (e.keyCode == 66 && e.ctrlKey) { 
      e.preventDefault();
     $("#textEditor").focus();    
               boldIt();
          } 
          else if(e.keyCode===9){
           e.preventDefault();  // this will prevent us from tabbing out of the editor

        // now insert four non-breaking spaces for the tab key
        var editor = document.getElementById("textEditor");
        var doc = editor.ownerDocument.defaultView;
        var sel = doc.getSelection();
        var range = sel.getRangeAt(0);

        var tabNode = document.createTextNode("\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0");
        range.insertNode(tabNode);

        range.setStartAfter(tabNode);
        range.setEndAfter(tabNode); 
        sel.removeAllRanges();
        sel.addRange(range);
    }
    
  });
}

/*This is the javascript function to call up js functions from ace-min*/
function acebuild(){
    var theme='ace/theme/monokai';
    var mode='ace/mode/text';


    var editor= ace.edit('editor');
        editor.setTheme(theme);
        editor.getSession().setMode(mode);
        editor.setFontSize(this.$fontSize);
        editor.getSession().setUseWrapMode(true);

    /*This was part of codepen from jakob-e on ace editor tutorial*/
    /*This changes the mode of the editor*/
    $('#ace-mode').on('change',function(){
        editor.getSession().setMode('ace/mode/' +$(this).val().toLowerCase());
    });
    
    /*This was part of codepen from jakob-e on ace editor tutorial*/
    /*This changes the theme of the editor based on user's choice*/
    $('#ace-theme').on('change',function(){
        editor.setTheme('ace/theme/' +$(this).val().toLowerCase());
    });
    
    /*These are commands to increase or decrease font size with command keys*/
    editor.commands.addCommand({
    name: "increaseFontSize",
    
    bindKey: "Command-=|Command-+",
    exec: function(editor) {
        var size = parseInt(editor.getFontSize(), 10) || 12;
        editor.setFontSize(size + 1);
    }
    });
    
    editor.commands.addCommand({
    name: "decreaseFontSize",
    bindKey: "Command+-|Command-_",
    exec: function(editor) {
        var size = parseInt(editor.getFontSize(), 10) || 12;
        editor.setFontSize(Math.max(size - 1 || 1));
    }
    });
    
    //This resizes back to original size
    editor.commands.addCommand({
        name: "resetFontSize",
    bindKey: "Command+0|Command-Numpad0",
    exec: function(editor) {
        editor.setFontSize(12);
    }
    });
    
    editor.resize();
    
    /*This gets the content from ace editor*/
    editor.getSession().on('change', function () {
      ace_text = editor.session.getValue();
    });
    
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableLiveAutocompletion: false
    });
    

    





}


/*This is based on filesaver.js by Eli Gray*/
/*Function to be called when user selects an option from modal*/
function savetxt(){
    var filename = $("#input-fileName").val()
    var blob = new Blob([ace_text], {type: "text/plain;charset=utf-8"});
    saveAs(blob, filename +".txt");
}

/*Save as html*/
function savehtml(){
    var filename = $("#input-fileName").val()
    var blob = new Blob([ace_text], {type: "text/html"});
    saveAs(blob, filename +".html");
}


//These are functions to call from the note editor
//Getting the content came from stackoverflow user Mircea
//https://jsfiddle.net/E4W8y/1/
function note_txt(){
    var contenteditable = document.querySelector('[contenteditable]'),
    x = contenteditable.textContent;
    var filename = $("#input-fileName").val()
    var blob = new Blob([x], {type: "text/plain;charset=utf-8"});
    saveAs(blob, filename +".txt");
}

function html_txt(){
    var contenteditable = document.querySelector('[contenteditable]'),
    x = contenteditable.textContent;
    var filename = $("#input-fileName").val()
    var blob = new Blob([x], {type: "text/html"});
    saveAs(blob, filename +".html");

}

/*This is an example from html5 about local storage*/
/*Sami Samhuri on samsonjs/samhuri.net in Github*/
//https://github.com/samsonjs/samhuri.net/blob/f00ec57e1daa3170dba937324b9cac7a642c4d22/public/f/note.html
function localStr(){
    var notepad, html, timeout;
    window.addEventListener('load', function() {
    notepad = document.getElementById('notepad');
    html = document.getElementsByTagName('html')[0];
    html.addEventListener('keyup', function(ev) {
      if (timeout) clearTimeout(timeout);
      timeout = setTimeout(saveNote, 100);
    });
	restoreNote();
	notepad.focus();
    });
  
  function saveNote() {
    localStorage.notepad = notepad.innerText;
	timeout = null;
  }
  
  function restoreNote() {
    notepad.innerText = localStorage.notepad || '';
  }

}




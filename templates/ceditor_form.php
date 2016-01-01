<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <!--This was created from uikit custommaker -->
        <!--http://getuikit.com/index.html -->
        <link href="/css/uikit.css" rel="stylesheet"/>
   
        
        <?php if (isset($title)): ?>
            <title>CS50 Editor <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>CS50 Editor</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>
        <script src="/js/tabIndent.js"></script>

		<!--These are javascript files to deal with exporting the files as txt by eligrey on github -->      
		<script src="/js/FileSaver/FileSaver.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/js/Blob/Blob.js" type="text/javascript"></script>
		
        <!--This calls the ace editor from js folder -->
        <script src="/js/ace-min/ace.js" type="text/javascript" charset="utf-8"></script>
        <script src="/js/ace-min/ext-language_tools.js"></script>
        <script src="/js/garlic.js"></script>
    
      
                
        
                
    </head>
        
    
<div class="sideMenu">
        <ul class = "sidebar-nav">
            
            <li class="sidebar-brand"><a href="#" class="closeTrigger"> Menu</a></li>
            <li><a href="index.php">Notepad</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal">Export</a></li>
            <li><a href="logout.php">Log Out</a></li>
			
        </ul>

</div>



<!--This menu selection was based on Ace - embeddable code editor by  jakob-e on codepen -->
<!--http://codepen.io/jakob-e/pen/EJuiK -->
<div class="siteWrapper">
    <nav class="uk-navbar">
        <ul class="uk-navbar-nav">
        	<li class = "logo">
				<form class="navbar-form pull-right">
         			<img src="img/code3.png" alt="" />
				</form>
         	</li>
                <li>
                    <form class="navbar-form pull-right">
                        <select name="" id="ace-mode" class="form-control" style="width: 150px;">               
  						  <option value="ABAP">ABAP</option>
  						  <option value="ActionScript">ActionScript</option>
						  <option value="ADA">ADA</option>
						  <option value="Apache Conf">Apache Conf</option>
						  <option value="AsciiDoc">AsciiDoc</option>
						  <option value="assembly_x86">Assembly x86</option>
						  <option value="AutoHotKey">AutoHotKey</option>
						  <option value="BatchFile">BatchFile</option>
						  <option value="c_cpp">C/C++</option>
						  <option value="csharp">C#</option>
						  <option value="c9search">C9 Search Results</option>
						  <option value="cirru">Cirru</option>
						  <option value="Clojure">Clojure</option>
						  <option value="Cobol">Cobol</option>
						  <option value="CoffeeScript">CoffeeScript</option>
						  <option value="ColdFusion">ColdFusion</option>
						  <option value="CSS">CSS</option>
						  <option value="Curly">Curly</option>
						  <option value="D">D</option>
						  <option value="Dart">Dart</option>
						  <option value="Diff">Diff</option>
						  <option value="Dockerfile">Dockerfile</option>
						  <option value="Dot">Dot</option>
						  <option value="EJS">EJS</option>
						  <option value="Erlang">Erlang</option>
						  <option value="Forth">Forth</option>
						  <option value="Gherkin">Gherkin</option>
						  <option value="Gitignore">Gitignore</option>
						  <option value="Glsl">Glsl</option>
						  <option value="golang">Go</option>
						  <option value="Groovy">Groovy</option>
						  <option value="HAML">HAML</option>
						  <option value="Handlebars">Handlebars</option>
						  <option value="Haskell">Haskell</option>
						  <option value="haXe">haXe</option>
						  <option value="HTML">HTML</option>
						  <option value="HTML_ruby">HTML (Ruby)</option>
						  <option value="INI">INI</option>
						  <option value="Jack">Jack</option>
						  <option value="Jade">Jade</option>
						  <option value="Java">Java</option>
						  <option value="JavaScript">JavaScript</option>
						  <option value="JSON">JSON</option>
						  <option value="JSP">JSP</option>
						  <option value="JSX">JSX</option>
						  <option value="Julia">Julia</option>
						  <option value="LaTeX">LaTeX</option>
						  <option value="LESS">LESS</option>
						  <option value="Liquid">Liquid</option>
						  <option value="Lisp">Lisp</option>
						  <option value="LiveScript">LiveScript</option>
						  <option value="LogiQL">LogiQL</option>
						  <option value="LSL">LSL</option>
						  <option value="Lua">Lua</option>
						  <option value="LuaPage">LuaPage</option>
						  <option value="Lucene">Lucene</option>
						  <option value="Makefile">Makefile</option>
						  <option value="Markdown">Markdown</option>
						  <option value="MATLAB">MATLAB</option>
						  <option value="MEL">MEL</option>
						  <option value="MUSHCode">MUSHCode</option>
						  <option value="MySQL">MySQL</option>
						  <option value="Nix">Nix</option>
						  <option value="ObjectiveC">Objective-C</option>
						  <option value="OCaml">OCaml</option>
						  <option value="Pascal">Pascal</option>
						  <option value="Perl">Perl</option>
						  <option value="pgSQL">pgSQL</option>
						  <option value="PHP">PHP</option>
						  <option value="Plain_Text">Plain Text</option>
						  <option value="Powershell">Powershell</option>
						  <option value="Prolog">Prolog</option>
						  <option value="Properties">Properties</option>
						  <option value="Protobuf">Protobuf</option>
						  <option value="Python">Python</option>
						  <option value="R">R</option>
						  <option value="RDoc">RDoc</option>
						  <option value="RHTML">RHTML</option>
						  <option value="Ruby">Ruby</option>
						  <option value="Rust">Rust</option>
						  <option value="SASS">SASS</option>
						  <option value="SCAD">SCAD</option>
						  <option value="Scala">Scala</option>
						  <option value="Scheme">Scheme</option>
						  <option value="SCSS">SCSS</option>
						  <option value="SH">SH</option>
						  <option value="SJS">SJS</option>
						  <option value="Smarty">Smarty</option>
						  <option value="snippets">snippets</option>
						  <option value="Soy_Template">Soy Template</option>
						  <option value="Space">Space</option>
						  <option value="SQL">SQL</option>
						  <option value="Stylus">Stylus</option>
						  <option value="SVG">SVG</option>
						  <option value="Tcl">Tcl</option>
						  <option value="Tex">Tex</option>
						  <option value="Text" selected>Text</option>
						  <option value="Textile">Textile</option>
						  <option value="Toml">Toml</option>
						  <option value="Twig">Twig</option>
						  <option value="Typescript">Typescript</option>
						  <option value="Vala">Vala</option>
						  <option value="VBScript">VBScript</option>
						  <option value="Velocity">Velocity</option>
						  <option value="Verilog">Verilog</option>
						  <option value="XML">XML</option>
						  <option value="YAML">YAML</option>
                        </select>
                    </form>
                </li>
                
                <li>
                <form class="navbar-form pull-right">
					<select name="" id="ace-theme" class="form-control" style="width: 150px;">  
  				
		  					<optgroup label="bright">
								<option value="chrome">chrome</option>
								<option value="clouds">clouds</option>
								<option value="crimson_editor">crimson_editor</option>
								<option value="dawn">dawn</option>
								<option value="dreamweaver">dreamweaver</option>
								<option value="eclipse">eclipse</option>
								<option value="github">github</option>
								<option value="solarized_light">solarized_light</option>
								<option value="textmate">textmate</option>
								<option value="tomorrow">tomorrow</option>
								<option value="xcode">xcode</option>
		  					</optgroup>
		  					<optgroup label="dark">
								<option value="clouds_midnight">clouds_midnight</option>
								<option value="cobalt">cobalt</option>
								<option value="idle_fingers">idle_fingers</option>
								<option value="kr_theme">kr_theme</option>
								<option value="merbivore">merbivore</option>
								<option value="merbivore_soft">merbivore_soft</option>
								<option value="mono_industrial">mono_industrial</option>
								<option value="monokai" selected>monokai</option>
								<option value="pastel_on_dark">pastel_on_dark</option>
								<option value="solarized_dark">solarized_dark</option>
								<option value="terminal">terminal</option>
								<option value="tomorrow_night">tomorrow_night</option>
								<option value="tomorrow_night_blue">tomorrow_night_blue</option>
								<option value="tomorrow_night_bright">tomorrow_night_bright</option>
								<option value="tomorrow_night_eighties">tomorrow_night_eighties</option>
								<option value="twilight">twilight</option>
								<option value="vibrant_ink">vibrant_ink</option>
		  					</optgroup>
						</select>
                </form>
                </li>
         </ul>
         
     <!--This places the menu icon on the right side as part of uikit navbar flip -->
         <div class="uk-navbar-flip">
            <ul class="uk-navbar-nav">  
                 <a href="#" class="sideTrigger"><img src="img/menu.png" alt="" /></a> 

            </ul>
         </div>
    </nav>

    <!--The ace editor -->

    <div id="editor">
    First Click here. 
    Press Cmd-+ to increase font size
    Press Cmd-_ to decrease font size
    Press Cmd-0 to reset font size to 12px
    Press Cmd-1 to show settings menu
    Powered by Ace Editor
    </div>

</div>



<!--small modal to show export options -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Export</h4>
        </div>
        <div class="modal-body">
          <p>Choose which format to save</p>
          <p><input type="text" class="form-control" id="input-fileName" value="Enter filename" placeholder="Enter file name"></p>
          <div class="btn-group">
            <button type="button" class="btn btn-primary" id = "txt" onclick="savetxt()">.txt</button>
            <button type="button" class="btn btn-primary" id = "html" onclick="savehtml()">.html</button>
          </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>




<!--Call script to get function that trigger push and slide functions -->
<script type="text/javascript">
  trigger();
  tabspace();
  acebuild();


</script>



</html>

<!--http://codepen.io/jakob-e/pen/EJuiK -->






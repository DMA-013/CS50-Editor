<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>
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
        
        
       <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    </head>



<!--Menu Image is from https://www.iconfinder.com/icons/134216/hamburger_lines_menu_icon#size=32 -->
<!--Creative Commons (Attribution-Share Alike 3.0 Unported) -->

<!--This is the side menu that slides with items in -->
<div class="sideMenu">
        <ul class = "sidebar-nav">
            <li class="sidebar-brand"> <a href="#" class="closeTrigger">Menu</a></li>
            <li><a href="ceditor.php">Code Scratch</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal">Export</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
</div>

<!--The entire site -->
<div class="siteWrapper">
    
    <!--This is the nav header bar -->
    <nav class="uk-navbar">
        <ul class="uk-navbar-nav">
        	<li class = "logo">
				<form class="navbar-form pull-right">
         			<img src="img/note.png" alt="" />
				</form>
         	</li>
         	</ul>
         	   <div class="uk-navbar-flip">
            <ul class="uk-navbar-nav">  
                 <a href="#" class="sideTrigger"><img src="img/menu.png" alt="" /></a> 
            </ul>
         </div>
    </nav>
    

	<!-- This is the body container-->
	<div class= "bodyContainerWrapper">
	    <div class = "padding">
	        <div class = "bodyContainer">
	            <div class="scroll-bar-wrap">
                    <div class="scroll-box">
                        <div id = "test" class = "paddingeditor">
                            <div id = "notepad" contenteditable="true">This is cool</div>
                        </div>     
                    </div>
                <!--This covers the scrollbar -->    
                    <div class="cover-bar"></div>
                </div>
            </div>
        </div>
	</div>
	
	
		
</div>






<!--This is the modal for export options-->
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
            <button type="button" class="btn btn-primary" id = "txt" onclick="note_txt()">.txt</button>
            <button type="button" class="btn btn-primary" id = "html" onclick="html_txt()">.html</button>
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
  localStr();


</script>




</html>







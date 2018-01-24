<!-- header.php -->
<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WEB LAB CIM111 </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php if ($page == 'home') echo 'active';?>"><a href="index.php">Home</a></li>
                    <li><a href="assets/CIM111-Weblab.pdf" target="_blank">Syllabus</a></li>
                    <li  class="<?php if ($page == 'info') echo 'active';?>"><a href="info.php">News and Announcements</a></li>
                    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.worpress.org/" target="_blank">WordPress</a></li>
                <li><a href="http://www.w3schools.com/TagS/" target="_blank">HTML Reference</a></li>
                <li><a href="http://www.w3schools.com/css/default.asp" target="_blank">CSS Reference</a></li>
                <li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" target="_blank">Zen Garden</a></li>
                <li><a href="http://codepen.io" target="_blank">Codepen</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">jQuery</li>
                <li><a href="http://www.w3schools.com/jquery/default.asp" target="_blank">jQuery Reference</a></li>
                <li><a href="https://jquery.com/" target="_blank">Official Site</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Color</li>
                <li><a href="http://paletton.com" target="_blank">Color Palette</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Fonts</li>
                <li><a href="http://web.mit.edu/jmorzins/www/fonts.html" target="_blank">Common Fonts</a></li>
                <li><a href="https://fonts.google.com" target="_blank">Google Fonts</a></li>
                <li><a href="https://edgewebfonts.adobe.com" target="_blank">Adobe Fonts</a></li>
                <li><a href="http://www.cssfontstack.com/" target="_blank">CSS Fontstack</a></li>
              </ul>
            </li>
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Slides <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li class="dropdown-header">Week 1</li>
                <li><a href="slides/Intro to Web Design" target="_blank">Intro/History of Web Design</a></li>
                <li><a href="slides/2 Design Principles.pdf" target="_blank">Principles of Web Design</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Week 2</li>
                <li><a href="slides/3 Basic Web Design.pdf" target="_blank">Basic Web Design</a></li>
                <li class="dropdown-header">Week 4</li>
                <li><a href="slides/4 HTML.pdf" target="_blank">HTML</a></li>
                <li class="dropdown-header">Week 5</li>
                <li><a href="slides/CSS.pdf" target="_blank">CSS</a></li>
                <li class="dropdown-header">Week 7</li>               
                           <li><a href="slides/CSS Media Queries.pdf">Responsive Web</a></li>
                <li class="dropdown-header">Week 10</li>               

                                <li><a href="slides/jQuery Intro.pdf">jQuery Intro (slides)</a></li>
         
                            </ul>
            </li> 

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
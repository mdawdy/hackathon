<?php
if(isset($_GET['sidebar'])){
    include('s_header.php');
} else {
    include('header.php');
}
?>

<ul class="breadcrumbs">
    <li><a href="#">Admin Panel</a></li>
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Dashboard</a></li>
</ul>

    <div class="grid_16 widget first">
        <div class="widget_title clearfix">
            <h2>Grid_16</h2>
        </div>
        <div class="widget_body">
            <div class="widget_options clearfix">
                <select class="small left">
                    <option>Delete</option>
                    <option>Edit</option>
                </select>
                <a href="#" class="btn orange small left"><span>Apply to Selected</span></a>

                <input type="text" class="search right" />
            </div>
            <div class="widget_content">
                <h1>Header One</h1>
                <p>Lorem ipsum <em>emphasised text</em> dolor sit amet, <strong>strong text</strong> 
                consectetur adipisicing elit, <abbr title="This is an abbreviated text">abbreviated text</abbr> sed do eiusmod tempor 
                <acronym title="This is an acronym">acronym text</acronym> incididunt ut labore et dolore magna aliqua. Ut 
                <q>quoted text</q> enim ad minim veniam, quis nostrud exercitation <a href="/">link text</a> 
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute <del>deleted text</del> 
                <ins>inserted text</ins> irure dolor in reprehenderit in voluptate velit esse cillum 
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat <code>code text</code> cupidatat 
                non proident, sunt in <span class="highlight">highlighted text</span> culpa qui officia deserunt mollit anim id est laborum.</p>

                <blockquote>
                <p>Blockquote. Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                cupidatat non proident, sunt in culpa qui officia</p>
                </blockquote>

                <p><cite><a href="/">Cite author with link text</a></cite>, 2008</p>

                <h2>Header 2</h2>

                <p>Extended paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <ol class="numbered">
                <li>Ordered list</li>
                <li>Item 2 Consectetur adipisicing elit</li>
                <li>Item 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua</li>
                <li>Item 4</li>
                <li>Item 5</li>
                </ol>

                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                anim id est laborum.</p>

                <h3>Header 3</h3>

                <div class="captioned center">
                    <a href="http://fugue-icons-src.googlecode.com/svn/trunk/all-preview.png"><img src="demo/fugue.png" alt="Fugue Iconset" title="Fugue Iconset" /></a>
                    <p>Comes with <a href="http://p.yusukekamiyamane.com/">Fugue Icons - over 3115 icons in 16x16 PNG</a>! Click image to preview all</p>
                </div>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua.</p>

                <ul class="disc">
                <li>Unordered list</li>
                <li>Consectetur adipisicing elit</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua</li>
                <li>Item</li>
                <li>Item</li>
                <li>Item</li>
                </ul>

                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua.</p>

                <pre><code>pre and code pair{
                display:block;
                line-height:1.833em;
                border-top:0.083em solid #200;
                }</code></pre>

                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                anim id est laborum.</p>

                <h4>Header 4</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua.</p>

                <dl>
                <dt>Definition list</dt>
                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat.</dd>
                <dt>Lorem ipsum dolor sit amet</dt>
                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat.</dd>
                <dt>Lorem ipsum dolor sit amet</dt>
                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat.</dd>
                <dt>Lorem ipsum dolor sit amet</dt>
                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat.</dd>
                </dl>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua.</p>

                <table summary="Table summary">
                    <caption>Table Caption</caption>
                    <thead>
                        <tr>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>Content</td>
                        <td>1</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>Content</td>
                        <td>2</td>
                        <td>b</td>
                    </tr>
                    <tr>
                        <td>Content</td>
                        <td>3</td>
                        <td>c</td>
                    </tr>
                    <tr>
                        <td>Content</td>
                        <td>4</td>
                        <td>d</td>
                    </tr>
                    <tr>
                        <td>Content</td>
                        <td>5</td>
                        <td>e</td>
                    </tr>
                    <tr>
                        <td>Content</td>
                        <td>6</td>
                        <td>f</td>
                    </tr>
                </tbody>
                </table>

                <address>
                    The White House <br />
                    1600 Pennsylvania Avenue NW <br />
                    Washington, DC 20500 <br />
                </address>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div class="grid_10 widget first">
        <div class="widget_title clearfix">
            <h2>Grid_10</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat nulla non dolor ultricies eget viverra libero fermentum. Ut pulvinar accumsan tellus, ac adipiscing augue euismod eu. Donec accumsan faucibus interdum. Etiam tincidunt venenatis lorem at ullamcorper. Etiam massa felis, ornare et mattis et, adipiscing sit amet justo. Donec tristique leo ac dui hendrerit quis commodo augue accumsan. Sed hendrerit mauris quam, vel pulvinar velit. Sed tincidunt dignissim sapien vestibulum blandit. Donec sit amet justo a libero ultrices ultricies.</p>
                <p>Aenean magna sem, lacinia eu interdum ut, placerat lacinia quam. Nulla nec augue ligula, sed aliquam magna. Vivamus venenatis lorem eget massa pretium ullamcorper. Sed diam orci, aliquet non scelerisque eu, elementum non enim. Sed tempor, diam id sollicitudin auctor, sem mauris ornare est, in lacinia ante mi ac purus. Nunc in ante et libero suscipit laoreet eu tempor leo. Curabitur id lectus mi. In lorem massa, pharetra in hendrerit in, convallis non erat. Vestibulum mollis, orci eget facilisis vehicula, dui nibh rhoncus dolor, nec suscipit erat sem a magna. Morbi purus nibh, semper nec sollicitudin at, convallis sed libero. Etiam tristique dignissim varius. Praesent et convallis augue. In hac habitasse platea dictumst. Etiam ac erat ligula. Phasellus pulvinar dolor quis ipsum auctor sit amet tincidunt massa suscipit.</p>
            </div>
        </div>
    </div>

    <div class="grid_6 widget">
        <div class="widget_title clearfix">
            <h2>Grid_6</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat nulla non dolor ultricies eget viverra libero fermentum. Ut pulvinar accumsan tellus, ac adipiscing augue euismod eu. Donec accumsan faucibus interdum. Etiam tincidunt venenatis lorem at ullamcorper. Etiam massa felis, ornare et mattis et, adipiscing sit amet justo. Donec tristique leo ac dui hendrerit quis commodo augue accumsan. Sed hendrerit mauris quam, vel pulvinar velit. Sed tincidunt dignissim sapien vestibulum blandit. Donec sit amet justo a libero ultrices ultricies</p>
                <p>Donec sed massa nec nunc placerat consequat. Cras lacinia diam sit amet lorem elementum volutpat. Ut augue orci, tristique quis mollis a, hendrerit sed mi. Sed suscipit lectus non arcu condimentum iaculis. Suspendisse eu orci diam. </p>
            </div>
        </div>
    </div>


    <div class="clear"></div>

    <div class="grid_8 widget first">
        <div class="widget_title clearfix">
            <h2>Grid_8</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat nulla non dolor ultricies eget viverra libero fermentum. Ut pulvinar accumsan tellus, ac adipiscing augue euismod eu. Donec accumsan faucibus interdum. Etiam tincidunt venenatis lorem at ullamcorper. Etiam massa felis, ornare et mattis et, adipiscing sit amet justo. Donec tristique leo ac dui hendrerit quis commodo augue accumsan. Sed hendrerit mauris quam, vel pulvinar velit. Sed tincidunt dignissim sapien vestibulum blandit. Donec sit amet justo a libero ultrices ultricies</p>
            </div>
        </div>
    </div>

    <div class="grid_8 widget">
        <div class="widget_title clearfix">
            <h2>Grid_8</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat nulla non dolor ultricies eget viverra libero fermentum. Ut pulvinar accumsan tellus, ac adipiscing augue euismod eu. Donec accumsan faucibus interdum. Etiam tincidunt venenatis lorem at ullamcorper. Etiam massa felis, ornare et mattis et, adipiscing sit amet justo. Donec tristique leo ac dui hendrerit quis commodo augue accumsan. Sed hendrerit mauris quam, vel pulvinar velit. Sed tincidunt dignissim sapien vestibulum blandit. Donec sit amet justo a libero ultrices ultricies</p>
            </div>
        </div>
    </div>


<div class="clear"></div>

    <div class="grid_4 widget first">
        <div class="widget_title clearfix">
            <h2>Grid_4</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat nulla non dolor ultricies eget viverra libero fermentum. Ut pulvinar accumsan tellus, ac adipiscing augue euismod eu. Donec accumsan faucibus interdum. Etiam tincidunt venenatis lorem at ullamcorper. Etiam massa felis, ornare et mattis et, adipiscing sit amet justo. Donec tristique leo ac dui hendrerit quis commodo augue accumsan. Sed hendrerit mauris quam, vel pulvinar velit. Sed tincidunt dignissim sapien vestibulum blandit. Donec sit amet justo a libero ultrices ultricies</p>
            </div>
        </div>
    </div>
    <div class="grid_4 widget">
        <div class="widget_title clearfix">
            <h2>Grid_4</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat nulla non dolor ultricies eget viverra libero fermentum. Ut pulvinar accumsan tellus, ac adipiscing augue euismod eu. Donec accumsan faucibus interdum. Etiam tincidunt venenatis lorem at ullamcorper. Etiam massa felis, ornare et mattis et, adipiscing sit amet justo. Donec tristique leo ac dui hendrerit quis commodo augue accumsan. Sed hendrerit mauris quam, vel pulvinar velit. Sed tincidunt dignissim sapien vestibulum blandit. Donec sit amet justo a libero ultrices ultricies</p>
            </div>
        </div>
    </div>
    <div class="grid_4 widget">
        <div class="widget_title clearfix">
            <h2>Grid_4</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat nulla non dolor ultricies eget viverra libero fermentum. Ut pulvinar accumsan tellus, ac adipiscing augue euismod eu. Donec accumsan faucibus interdum. Etiam tincidunt venenatis lorem at ullamcorper. Etiam massa felis, ornare et mattis et, adipiscing sit amet justo. Donec tristique leo ac dui hendrerit quis commodo augue accumsan. Sed hendrerit mauris quam, vel pulvinar velit. Sed tincidunt dignissim sapien vestibulum blandit. Donec sit amet justo a libero ultrices ultricies</p>
            </div>
        </div>
    </div>
    <div class="grid_4 widget">
        <div class="widget_title clearfix">
            <h2>Grid_4</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat nulla non dolor ultricies eget viverra libero fermentum. Ut pulvinar accumsan tellus, ac adipiscing augue euismod eu. Donec accumsan faucibus interdum. Etiam tincidunt venenatis lorem at ullamcorper. Etiam massa felis, ornare et mattis et, adipiscing sit amet justo. Donec tristique leo ac dui hendrerit quis commodo augue accumsan. Sed hendrerit mauris quam, vel pulvinar velit. Sed tincidunt dignissim sapien vestibulum blandit. Donec sit amet justo a libero ultrices ultricies</p>
            </div>
        </div>
    </div>


<?php include("footer.php") ?>
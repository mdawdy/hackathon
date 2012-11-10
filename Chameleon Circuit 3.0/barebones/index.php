<?php
if(isset($_GET['sidebar'])){
    include('s_header.php');
} else {
    include('header.php');
}
?>

<ul class="breadcrumbs first">
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Dashboard</a></li>
</ul>

    <div class="grid_16 widget tabs first">
        <div class="widget_title clearfix">
            <h2>Tables</h2>
            <ul>
                <li><a href="#table2">Unlinked Table</a></li>
                <li><a href="#table3">Simple Table</a></li>
            </ul>
        </div>
        <div class="widget_body">            

            <div id="table2">
                <div class="widget_options clearfix">
                    <select class="small forcewidth">
                        <option>Delete</option>
                        <option>Edit</option>
                    </select>
                    <a href="#" class="btn orange small"><span>Apply to Selected</span></a>

                    <input type="text" class="search" />
                </div>
                <table>
                    <thead>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Design Name</td>
                            <td class="center">Author</td>
                            <td class="center">Country</td>
                            <td>Comment</td>
                            <td class="center">Views</td>
                            <td class="center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>This is a design name V.2.1</td>
                            <td><a href="#">random_user1</a></td>
                            <td>USA</td>
                            <td>Vivamus fringilla, felis in tincidunt semper, arcu velit mollis arcu, id dignissim tortor tortor a lectus.</td>
                            <td>1,233</td>
                            <td><ul class="hor-list piped"><li><a href="#">View</a></li><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>This is a design name V.2.1</td>
                            <td><a href="#">random_user1</a></td>
                            <td>USA</td>
                            <td>Vivamus fringilla, felis in tincidunt semper, arcu velit mollis arcu, id dignissim tortor tortor a lectus.</td>
                            <td>1,233</td>
                            <td><ul class="hor-list piped"><li><a href="#">View</a></li><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>This is a design name V.2.1</td>
                            <td><a href="#">random_user1</a></td>
                            <td>USA</td>
                            <td>Vivamus fringilla, felis in tincidunt semper, arcu velit mollis arcu, id dignissim tortor tortor a lectus.</td>
                            <td>1,233</td>
                            <td><ul class="hor-list piped"><li><a href="#">View</a></li><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>This is a design name V.2.1</td>
                            <td><a href="#">random_user1</a></td>
                            <td>USA</td>
                            <td>Vivamus fringilla, felis in tincidunt semper, arcu velit mollis arcu, id dignissim tortor tortor a lectus.</td>
                            <td>1,233</td>
                            <td><ul class="hor-list piped"><li><a href="#">View</a></li><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            
            <div id="table3">
                <table class="simple">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td class="center">Email</td>
                            <td class="center">Country</td>
                            <td class="center">Phone Number</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mr. Lorem Ipsum</td>
                            <td class="center">contact@lipsum.com</td>
                            <td class="center">Italy</td>
                            <td class="center">545-6323</td>
                        </tr>
                        <tr>
                            <td>Miss Dolor Sit</td>
                            <td class="center">doloris@lipsum.com</td>
                            <td class="center">Italy</td>
                            <td class="center">555-2123</td>
                        </tr>
                        <tr>
                            <td>Lord Amet the Second</td>
                            <td class="center">amet2@lipsum.com</td>
                            <td class="center">United Kingdom</td>
                            <td class="center">543-5235</td>
                        </tr>
                        <tr>
                            <td>Mrs. Concur Ipsum</td>
                            <td class="center">concur@lipsum.com</td>
                            <td class="center">Netherlands</td>
                            <td class="center">1242-41123</td>
                        </tr>
                        <tr>
                            <td>Mr. Vitaly Ipsum</td>
                            <td class="center">vitaly@lipsum.com</td>
                            <td class="center">Australia</td>
                            <td class="center">7242-41133</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

<div class="clear"></div>

<?php include("footer.php") ?>
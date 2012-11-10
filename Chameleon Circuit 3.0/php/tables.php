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
            <h2>Data Table</h2>
        </div>
        <div class="widget_body">
                <div id="table1">
                <table class='dataTable'>
                    <thead>
                            <tr>
                                <th></th>
                                    <th class="align-left">Rendering engine</th>
                                    <th class="align-left">Browser</th>
                                    <th class="align-left">Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td><input type="checkbox" /></td>
                                    <td>Trident</td>
                                    <td>Internet
                                             Explorer 4.0</td>

                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">X</td>
                            </tr>
                            <tr class="gradeC">
                                <td><input type="checkbox" /></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                    <td class="center">C</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Trident</td>
                                    <td>Internet
                                             Explorer 5.5</td>

                                    <td>Win 95+</td>
                                    <td class="center">5.5</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Trident</td>
                                    <td>Internet
                                             Explorer 6</td>

                                    <td>Win 98+</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>

                                    <td>Win XP SP2+</td>
                                    <td class="center">7</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>

                                    <td>Win XP</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>

                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>

                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Firefox 2.0</td>

                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>

                                    <td>Win 2k+ / OSX.3+</td>
                                    <td class="center">1.9</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>

                                    <td>OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>

                                    <td>OSX.3+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>

                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Netscape Browser 8</td>

                                    <td>Win 98SE+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Netscape Navigator 9</td>

                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.0</td>

                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.1</td>

                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.1</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.2</td>

                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.2</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.3</td>

                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.3</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.4</td>

                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.4</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.5</td>

                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.5</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.6</td>

                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.6</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.7</td>

                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.8</td>

                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Seamonkey 1.1</td>

                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Gecko</td>
                                    <td>Epiphany 2.20</td>

                                    <td>Gnome</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Webkit</td>
                                    <td>Safari 1.2</td>

                                    <td>OSX.3</td>
                                    <td class="center">125.5</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Webkit</td>
                                    <td>Safari 1.3</td>

                                    <td>OSX.3</td>
                                    <td class="center">312.8</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Webkit</td>
                                    <td>Safari 2.0</td>

                                    <td>OSX.4+</td>
                                    <td class="center">419.3</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Webkit</td>
                                    <td>Safari 3.0</td>

                                    <td>OSX.4+</td>
                                    <td class="center">522.1</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Webkit</td>
                                    <td>OmniWeb 5.5</td>

                                    <td>OSX.4+</td>
                                    <td class="center">420</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Webkit</td>
                                    <td>iPod Touch / iPhone</td>

                                    <td>iPod</td>
                                    <td class="center">420.1</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Webkit</td>
                                    <td>S60</td>

                                    <td>S60</td>
                                    <td class="center">413</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Opera 7.0</td>

                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>

                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Opera 8.0</td>

                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Opera 8.5</td>

                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Opera 9.0</td>

                                    <td>Win 95+ / OSX.3+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Opera 9.2</td>

                                    <td>Win 88+ / OSX.3+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Opera 9.5</td>

                                    <td>Win 88+ / OSX.3+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Opera for Wii</td>

                                    <td>Wii</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Nokia N800</td>

                                    <td>N800</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Presto</td>
                                    <td>Nintendo DS browser</td>

                                    <td>Nintendo DS</td>
                                    <td class="center">8.5</td>
                                    <td class="center">C/A<sup>1</sup></td>
                            </tr>
                            <tr class="gradeC">
                                <td><input type="checkbox" /></td>
                                    <td>KHTML</td>

                                    <td>Konqureror 3.1</td>
                                    <td>KDE 3.1</td>
                                    <td class="center">3.1</td>
                                    <td class="center">C</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>KHTML</td>

                                    <td>Konqureror 3.3</td>
                                    <td>KDE 3.3</td>
                                    <td class="center">3.3</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>KHTML</td>

                                    <td>Konqureror 3.5</td>
                                    <td>KDE 3.5</td>
                                    <td class="center">3.5</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeX">
                                <td><input type="checkbox" /></td>
                                    <td>Tasman</td>

                                    <td>Internet Explorer 4.5</td>
                                    <td>Mac OS 8-9</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                            </tr>
                            <tr class="gradeC">
                                <td><input type="checkbox" /></td>
                                    <td>Tasman</td>

                                    <td>Internet Explorer 5.1</td>
                                    <td>Mac OS 7.6-9</td>
                                    <td class="center">1</td>
                                    <td class="center">C</td>
                            </tr>
                            <tr class="gradeC">
                                <td><input type="checkbox" /></td>
                                    <td>Tasman</td>

                                    <td>Internet Explorer 5.2</td>
                                    <td>Mac OS 8-X</td>
                                    <td class="center">1</td>
                                    <td class="center">C</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Misc</td>

                                    <td>NetFront 3.1</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                            </tr>
                            <tr class="gradeA">
                                <td><input type="checkbox" /></td>
                                    <td>Misc</td>

                                    <td>NetFront 3.4</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                            </tr>
                            <tr class="gradeX">
                                <td><input type="checkbox" /></td>
                                    <td>Misc</td>

                                    <td>Dillo 0.8</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                            </tr>
                            <tr class="gradeX">
                                <td><input type="checkbox" /></td>
                                    <td>Misc</td>

                                    <td>Links</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                            </tr>
                            <tr class="gradeX">
                                <td><input type="checkbox" /></td>
                                    <td>Misc</td>

                                    <td>Lynx</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                            </tr>
                            <tr class="gradeC">
                                <td><input type="checkbox" /></td>
                                    <td>Misc</td>

                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                            </tr>
                            <tr class="gradeC">
                                <td><input type="checkbox" /></td>
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                            </tr>
                            <tr class="gradeU">
                                <td><input type="checkbox" /></td>
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td class="center">-</td>
                                <td class="center">U</td>
                            </tr>
                        </tbody>
                    </table>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
    
    <div class="grid_16 widget first">
        <div class="widget_title clearfix">
            <h2>Unlinked Table</h2>
        </div>
        <div class="widget_body">
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
            <ul class="pagination right">
                <li class="disabled"><a href="#">First</a></li>
                <li class="disabled"><a href="#">Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Next</a></li>
                <li><a href="#">Last</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="grid_16 widget first">
        <div class="widget_title clearfix">
            <h2>Simple Table</h2>
        </div>
        <div class="widget_body">
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


<?php include("footer.php") ?>
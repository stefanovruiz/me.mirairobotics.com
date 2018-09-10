<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Book Sell Back Page DEMO</title>
        <link rel="stylesheet" type="text/css" href="view.css" media="all"> 
    </head>
    <body>
        <div id="form_container">
            <form method="post" action="CE03result.php">
                <legend class="form_description"><h2>Your Information</h2></legend>
                <ul>
                    <li>
                        <div>
                            <label class="description">Subject</label>
                            <select name="Subject" id="Subject" class="element select medium required" >
                                <option value="English">English</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="World Languages">World Languages</option>
                                <option value="History and Social Sciences">History and Social Sciences</option>
                                <option value="Science">Science</option>
                                <option value="Visual and Performing  Arts">Visual and Performing  Arts</option>
                                <option value="Technology">Technology</option>
                                <option value="Communications">Communications</option>
                                <option value="Physical Education">Physical Education</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div>
                            <label class="description">Title</label>

                            <input type="text" name="Title" id="Title" value="Title of Book" class="element text medium required" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <label class="description">ISBN #</label>

                            <input type="text" name="ISBN" id="ISBN" value="" class="element text medium required" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <label class="description">Edition</label>

                            <input type="text" name="Edition" id="Edition" value="" class="element text medium" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <label class="description">Condition</label>


                            <select name="Condition" id="Condition" class="element select medium required" >
                                <option value="New">New</option>
                                <option value="Like New">Like New</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Acceptable">Acceptable</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div>
                            <label class="description">Price</label>

                            <input type="text" name="Price" id="Price" value="" class="element text medium" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <label class="description">Seller</label>

                            <input type="text" name="Seller" id="Seller" value="last, first" class="element text medium required" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <label class="description">Email</label>
                            
                            <input type="text" name="email" id="email" value="your email address here" class="element text medium required" />
                        </div>
                    </li>

                </ul>
                <div>
                    <input type="submit" name="Send"><br>
                </div>
            </form>
        </div>
        <?php
        // put your code here
        if ($_POST['Subject'] == NULL || $_POST['Title']== "Title of Book") {
            printf("<br><div style='color:red'>  No books are entered</div><br>");
        } else {
            $sub = $_POST['Subject'];
            $title = $_POST['Title'];
            $isbn = $_POST['ISBN'];
            $edition = $_POST['Edition'];
            $condition = $_POST['Condition'];
            $price = $_POST['Price'];
            $seller = $_POST['Seller'];
            $email = $_POST['email'];
            if($price>200.00)$price =200.00;
            if($price<0)$price =0.00;
            printf("<br><div style='color:white'>%s<br> "
                    . "Title: $title, $edition Edition ISBN:$isbn<br>"
                    . "Reported in $condition condition.<br>"
                    . "$seller would like %.2f dollars for it and will be "
                    . "contacted at $email</div><br>", $sub, $price);
        }
        ?>
    </body>
</html>

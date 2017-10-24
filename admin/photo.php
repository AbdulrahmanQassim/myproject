<?php
require 'parts/header.php'; ?>

<?php require 'parts/sidebar.php' ?>
    <div id="logo">
        <h1><a href="#">ExperimentalTestPage</a></h1>
        <h2>By Abdulrahman Qassim</h2>
    </div>

    <hr />

    <div id="page">

        <div id="content">
            <div class="post">
                <h1 class="title"><a href="#">Photo</a></h1>
                <div class="content">
                </div>
                <div class="entry">
                    <form method="post" enctype="multipart/form-data"
                          style="..">
                        Select Image To Upload;

                        <input style="color: white;padding: 8px; background-color: #212B35" type="file"  name="image">

                        <input style="color: white;padding: 8px; background-color: #212B35" type="submit" value="Upload" name="submit">

                    </form>
<?php require 'photos/text.php' ?>


                </div>

            </div>
        </div>


        <div style="clear: both;">&nbsp;
        </div>
    </div>
<!--    <hr />-->
<?php
require 'parts/footer.php'; ?>
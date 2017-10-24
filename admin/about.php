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
                <h1 class="title"><a href="photos/upload"">Photo</a></h1>
                <div class="content">
                </div>
                <div class="entry">

                    <br>
                    <?php
                    require 'conn.php';
                    $sql = "SELECT * FROM images ORDER BY namecode DESC ";
                    $result = mysqli_query($con, $sql);
                    $data = [];
                    while ($row = mysqli_fetch_assoc($result)):
                        $data[] = $row;
                    endwhile;
                    ?>
                    <?php foreach ($data as $item): ?>
                        <div>
                            <h3 > <a href="photos/upload"> <?= $item['namecode'] ?> </a> </h3>
                            <button> <a href="photos/upload"> ffgg </a></button>
                        </div>
                    <?php endforeach; ?>


                </div>

            </div>
        </div>


        <div style="clear: both;">&nbsp;</div>
    </div>
    <hr />

<?php
require 'parts/footer.php'; ?>

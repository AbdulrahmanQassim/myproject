<?php
require 'parts/header.php'; ?>

<?php require 'parts/sidebar.php' ?>
    <div id="logo">
        <h1><a href="#">ExperimentalTestPage</a></h1>
        <h2>By Abdulrahman Qassim</h2>
    </div>

    <hr />
    <div id="page">
        <div id="main">
            <div id="example" class="right-box">
                <h2 class="title">ADD MEMBER</h2>
                <div class="content">

                    <form action="post/add_post.php" method="post">
                        <input type="text" placeholder="add admin" name="title" required>
                        <br>
                    <br>
                        <input type="text" placeholder="add pasword" name="post" required>
                        <br>
                        <br>

                        <?php $sql = "SELECT * FROM section";
                        $result = mysqli_query($con,$sql);
                        $data = [];
                        while ($row = mysqli_fetch_assoc($result)):
                            $data[] = $row;
                        endwhile;
                        ?>
<!--                        Select The Section-->
<!---->
<!--                        <select name="section" >-->
<!--                            --><?php //foreach ($data as $item): ?>
<!--                                <option value="--><?//= $item['id'] ?><!--">-->
<!---->
<!--                                    --><?//= $item['name'] ?>
<!--                            --><?php //endforeach; ?>
<!---->
<!--                            <option value="1">1</option>-->
<!--                            <option value="2">2</option>-->
<!--                            <option value="3">3</option>-->
<!---->
<!---->
<!--                        </select>-->

                        <br>
                        <input type="submit" value="Add" class="button button2">
                        <a href="../blogs/blog.php" class="button button2">Back to Blog</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
<?php
require 'parts/footer.php'; ?>
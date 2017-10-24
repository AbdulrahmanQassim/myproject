<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    tr:hover{background-color:#996633;color: white}
</style>
<?php
require 'parts/header.php'; ?>

<?php require 'parts/sidebar.php' ?>
<div id="logo">
    <h1><a href="#">ExperimentalTestPage</a></h1>
    <h2>By Abdulrahman Qassim</h2>
</div>

<hr />

<div id="page">

        <div class="content">

            <div id="main">
                    <div class="content">
                        <?php $id = $_GET['id'];
                        $sql = "SELECT * FROM ftab WHERE id ='$id'";
                        $result = mysqli_query($con, $sql);
                        $data = [];
                        while ($row = mysqli_fetch_assoc($result)):
                            $data[] = $row;
                        endwhile;
                        ?>
                        <?php foreach ($data as $item): ?>
                            <form action="post/delete_post.php?id=<?= $id ?>" method="post">
                                <h1>Are You Sure To Delete This Blog ?</h1>
                                <h2><?= $item['title'] ?></h2>
                                <h2><?= $item['post'] ?></h2>
                                <input type="submit" value="Delete" class="button button3">
                                <a href="../blogs/blog.php" class="button button2">Back to Blog</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>



        </div>
    </div>
</div>


<?php
require 'parts/footer.php'; ?>

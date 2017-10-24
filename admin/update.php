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

    <!--    <div id="content">-->
    <!--        <div id="main">-->
    <div class="post">
        <h1 class="title"><a href="#">BLOGS</a></h1>
        <div class="content">
            <div id="main">
                <div id="example" class="right-box">
                    <h2 class="title">Update Blog</h2>
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
                            <form action="post/update_post.php?id=<?= $id ?>" method="post">
                                <input type="text" value="<?= $item['title'] ?>" name="title" required>
                                <br>
                                <br>
                                <input type="text" value="<?= $item['post'] ?>" name="post" required>
                                <br>
                                <br>
                                <select name="section">
                                    <?php
                                    $sql = "SELECT * FROM section";
                                    $result = mysqli_query($con, $sql);
                                    $data2 = [];
                                    while ($row = mysqli_fetch_assoc($result)):
                                        $data2[] = $row;
                                    endwhile;

                                    foreach ($data2 as $item2): ?>
                                        <?php if ($item['section'] == $item2['id']): ?>

                                            <option selected value="<?= $item2['id'] ?>" >  <?= $item2['name'] ?></option>

                                        <?php else: ?>

                                            <option value="<?= $item2['name'] ?>"><?= $item2['section'] ?></option>

                                        <?php endif; ?>


                                    <?php endforeach; ?>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>


                                <br>
                                <input type="submit" value="Update" class="button button2">
                                <a href="../blogs/blog.php" class="button button2">Back to Blog</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>




        </div>
    </div>


<?php
require 'parts/footer.php'; ?>

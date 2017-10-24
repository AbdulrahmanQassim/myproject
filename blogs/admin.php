<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid darkblue;
    }
    tr:hover{background-color:aquamarine;color: black}
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
            <div id="example" class="right-box">


<!--            <h1 class="title"><a href="#">Members</a></h1>-->
                <h2 style="color: white; background-color: #212B35 ; margin-left: 10px; margin-right: 82%; padding:10px "> <a href="../admin/add.php">Add Member</a></h2>




                <?php $sql = "SELECT * FROM ftab ORDER BY id DESC";
                $result = mysqli_query($con,$sql);
                $data = [];
                while ($row = mysqli_fetch_assoc($result)):
                    $data[] = $row;
                endwhile;
                ?>
                <table >
                    <tr style="background-color: cyan">
                        <th>Title</th>
                        <th>Post</th>
                        <th>section</th>
                        <th>action</th>
                    </tr>
                    <?php foreach ($data as $item): ?>
                        <tr>
                            <td><?= $item['title'] ?></td>
                            <td><?= $item['post'] ?></td>
                            <td><?= $item['section'] ?></td>

                            <td>
                                <a class="button button2" href="../admin/update.php?id=<?= $item['id'] ?>">Update</a>
                                <a class="button button3" href="../admin/delete.php?id=<?= $item['id'] ?>">Delete</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </table>
                </div>
            </div>
            </div>
        </div>
<?php
//this is the footer part for my cms
require 'parts/footer.php'; ?>
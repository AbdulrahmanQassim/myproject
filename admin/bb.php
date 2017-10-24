<?php
require 'conn.php';
$sql = "SELECT * FROM ftab ORDER BY id DESC";
$result = mysqli_query($con, $sql);
$data = [];
while ($row = mysqli_fetch_assoc($result)):
    $data[] = $row;
endwhile;
?>

<?php foreach ($data as $item): ?>
    <div>
        <h1><?= $item['title'] ?></h1>
        <p> <?= $item['post'] ?></p>
        <p> <?= $item['section'] ?></p>
    </div>
<?php endforeach; ?>
<!--</table>-->
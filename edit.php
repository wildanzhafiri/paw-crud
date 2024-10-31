<?php
$id = $_GET['id'];
if (!$id) {
    header('Location: .');
    die;
}
include_once 'db.php';
$sql = "SELECT * FROM post WHERE id = $id";
$result = $mysqli->query($sql);
if (!$result->num_rows) {
    header('Location: index.php');
}
$post = $result->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>

<body>
    <h1>Edit Post</h1>
    <?php if (isset($_GET['invalid'])): ?>
        <h3>Please complete the form</h3>
    <?php endif; ?>
    <form action="edit_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $post->id; ?>"><label>
            Title:
            <input type="text" name="title" value="<?php echo $post->title; ?>" autofocus>
        </label>
        <br>
        <label>
            Content:
            <textarea name="content" cols="30" rows="10"><?php echo $post->content; ?></textarea>
        </label>
        <br>
        <input type="submit" value="Update">
    </form>
</body>

</html>
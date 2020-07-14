<?php


if (isset($_POST['content'])) {
    $content = $_POST['content'];
    echo "The content you entered was: " . $content;
} else {
    echo "No Input yet";
}


?>

<form action="form.php" method="post">
    <input type="text" name="content">
        <button type="submit">Submit</button>
</form>

<br><br>


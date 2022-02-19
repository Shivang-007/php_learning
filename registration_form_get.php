<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET["form_submitted"])):?>
        <?php if($_GET["search"]=="GET"): ?>
        <h2>search result for <?php echo $_GET["search"];?></h2>
        <p>The GET method displays its values in the URL</p>
        <?php else: ?>
        <p>Sorry, no matches found for your search term</p>

        <?php endif; ?>
            <p> Go <a href="/registration_form_get.php">back</a> to the form</p>
    <?php else: ?>
    <form action="" method="get">
        Search Here:
        <br>
        <input type="text" name="search">
        <br>
        <input type="hidden" name="form_submitted" value="1">
        <input type="submit" value="submit">
    </form>
    <?php endif; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Optimizer</title>
</head>
<body>
    <div>
        <h1>Image Optimizer</h1>
        <p>with this tool you can optimize your picture.</p>
        <div>
            <form action="app/controllers/optimizerController.php" method="POST">
                <input type="text" name="path" placeholder="path"><br>
                <button type="submit" name="submit">send</button>
            </form>
        </div>
    </div>
</body>
</html>


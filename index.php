<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Image Optimizer</title>
</head>
<body>
    <div class="container">
        <h1>Image Optimizer</h1>
        <p>with this tool you can optimize your picture.</p>
        <div>
            <form action="app/controllers/optimizerController.php" method="POST">
                <div class="form-group">
                <label for="inputPath">insert dir PATH : </label>
                    <input type="text" class="form-control-file" name="path" id="inputPath" placeholder="path"><br>
                    <button type="submit" class="btn btn-primary" name="submit">send</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


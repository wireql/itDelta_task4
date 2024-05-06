<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5 w-25">
        <form method="post" action="src/app/main.php">

            <div class="mb-3">
                <label for="exampleInput" class="form-label">Url</label>
                <input type="text" class="form-control" id="exampleInput" name="url" value="https://it-delta.ru./local/docs/yandex_not_sku.xml" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Получить данные</button>

        </form>
    </div>

</body>
</html>
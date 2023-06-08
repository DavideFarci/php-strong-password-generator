<?php
$num_password = $_GET['number'] ?? '';

function generate_password($user_number)
{
    $arr_password = str_split("abcdefghilmnopqrstuvzxkjywABCDEFGHILMNOPQRSTUVZXKJWY1234567890*#@%&£_-!?");
    shuffle($arr_password);
    $generated_password = '';
    foreach ($arr_password as $pass) {
        if (strlen($generated_password) < $user_number) {
            $generated_password .= $pass;
        }
    }
    return $generated_password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" defer></script>
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-2">Strong Password Generator</h1>
        <h2 class="text-center mb-3">Genera una password sicura</h2>

        <form action="" method="get">
            <div class="row mb-3">
                <label for="number" class="col-sm-2 col-form-label">Lunghezza della password</label>
                <div class="col-sm-10 mb-3">
                    <input type="number" class="form-control" id="number" name="number">
                </div>

                <h2>La tua nuova password è: <?= generate_password($num_password) ?> </h2>
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
            <a class="btn btn-danger text-decoration-none" href="http://localhost:8888/06-Giugno/45-08Giu/php-strong-password-generator/">Reset</a>
        </form>

    </div>

</body>

</html>
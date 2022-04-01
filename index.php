<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I am not robot</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="form-container">
        <form action="./success.php">
            <h1> Select the correct hexadecimal code: <span id="selectcolor"></span> </h1>
            <input type="checkbox" id="checkbox">
            <label for="checkbox">Are you human?</label>
            <button class="btn btn-light" type="submit">Submit</button>
        </form>
        <div>
            <main class="container">
                <div class="element"></div>
                <div class="element"></div>
                <div class="element"></div>
                <div class="element"></div>
                <div class="element"></div>
                <div class="element"></div>
                <div class="element"></div>
                <div class="element"></div>
                <div class="element"></div>
            </main>
            <script src="./main.js"></script>
        </div>
    </div>
</body>

</html>
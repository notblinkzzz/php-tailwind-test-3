
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../src/styles.css">
        <title>PHP with Tailwind</title>
    </head>
    <body class="min-h-screen flex flex-col items-center justify-center bg-blue-500">
        <h1>forms demo</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = htmlspecialchars($_POST["name"] ?? "");
            $email = htmlspecialchars($_POST["email"] ?? "");
            if ($name && $email) {
                echo "<div class='mb-4 p-4 bg-green-100 rounded'>Thank you, <strong>$name</strong>! We received your email: <strong>$email</strong>.</div>";
            } else {
                echo "<div class='mb-4 p-4 bg-red-100 rounded'>Please fill in all fields.</div>";
            }
        }
        ?>
        <form action="" method="post" class="flex flex-col gap-2 w-64">
            <input type="text" name="name" placeholder="Enter your wawawa" class="border p-2 rounded" required class="text-red-300">
            <input type="email" name="email" placeholder="Enter your email" class="border p-2 rounded" required>
            <input type="submit" value="Submit" class="bg-blue-500 text-white p-2 rounded cursor-pointer">
        </form>
    </body>
</html>

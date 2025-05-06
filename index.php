<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Avatar Facebook by ID</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }

        input,
        button {
            padding: 10px;
            width: 300px;
            font-size: 16px;
            margin: 10px 0;
        }

        img {
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <h2>🔎 Get Avatar Facebook by ID</h2>
    <form method="get">
        <input type="text" name="id" placeholder="Facebook ID..." required>
        <br>
        <button type="submit">Get Avatar</button>
    </form>

    <?php
    if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);
        $avatarUrl = "https://graph2.fb.me/$id/picture?width=250&height=250&access_token=YOUR_ACCESS_TOKEN"; // Replace with your access token
        echo "<h3>Avatar of ID: $id</h3>";
        echo "<img src='$avatarUrl' alt='Facebook Avatar'>";
    }
    ?>
</body>

</html>
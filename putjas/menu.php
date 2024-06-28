<?php
// Koneksi ke database
$host = 'localhost:3307'; // Sesuaikan dengan host Anda
$user = 'root'; // Sesuaikan dengan username database Anda
$password = ''; // Sesuaikan dengan password database Anda
$dbname = 'restaurant'; // Sesuaikan dengan nama database Anda

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data menu
$sql = "SELECT name, description, price, image_url, is_seasonal, is_new FROM menu_item WHERE MENU_ITEM_ID NOT IN('MC02', 'MC03')";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

<section class="section menu" aria-label="menu-label" id="menu">
    <div class="container">
        <h1 class="headline-1 section-title text-center">Delicious Menu</h1>
        <ul class="grid-list">
            <?php while ($row = $result->fetch_assoc()): ?>
                <li class="menu-item">
                    <div class="menu-card hover:card">
                        <figure class="card-banner img-holder">
                            <img src="<?= htmlspecialchars($row['image_url']) ?>" alt="<?= htmlspecialchars($row['name']) ?>" class="img-cover" >
                        </figure>
                        <div class="menu-content">
                            <h3 class="menu-title">
                                <?= htmlspecialchars($row['name']) ?>
                                <?php if ($row['is_seasonal']): ?>
                                    <span class="badge label-1">Seasonal</span>
                                <?php endif; ?>
                                <?php if ($row['is_new']): ?>
                                    <span class="badge label-1">New</span>
                                <?php endif; ?>
                            </h3>
                            <p class="menu-description"><?= htmlspecialchars($row['description']) ?></p>
                            <p class="menu-price">$<?= htmlspecialchars($row['price']) ?></p>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
        <p class="menu-text text-center">
            During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
        </p>

    </div>
</section>

<?php
// Tutup koneksi database
// $conn->close();
?>

</body>
</html>

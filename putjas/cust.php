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

// Query untuk mengambil data
$sql = "SELECT c.name AS customer_name, 
               o.order_id, 
               me.name AS menu_item_name, 
               o.total 
        FROM CUSTOMERS c 
        JOIN ORDERS o ON c.customer_id = o.customer_id 
        JOIN MENU_ITEM me ON o.menu_item_id = me.menu_item_id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style-2.css">
    <title>Order List</title>

</head>
<body>

<section class="section order-list" aria-label="order-list-label" id="order-list">
    <div class="container">
        <h1 class="headline-1 section-title text-center">Order List</h1>
        <table class="order-table">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Order ID</th>
                    <th>Menu Item</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['customer_name']) ?></td>
                        <td><?= htmlspecialchars($row['order_id']) ?></td>
                        <td><?= htmlspecialchars($row['menu_item_name']) ?></td>
                        <td>$<?= htmlspecialchars($row['total']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>

<?php
// Tutup koneksi database
$conn->close();
?>

</body>
</html>

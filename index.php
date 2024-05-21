<?php
include 'db.php';

$stmt = $conn->prepare("SELECT * FROM articles");
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="blog.css">
</head>
<body>
    <header>
        <h1>Blog</h1>
    </header>
    <main>
        <aside class="sidebar">
            <img src="profil dan background/IMG-20240402-WA0050.jpg" alt="Your Photo" class="sidebar-photo">
            <blockquote>"Anyone who stops learning is old, whether at twenty or eighty. Anyone who keeps learning stays young" - Henry Ford</blockquote>
        </aside>
        <section class="blog-content">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<article class="blog-post">';
                    echo '<h2>' . htmlspecialchars($row["title"]) . '</h2>';
                    echo '<p>' . nl2br(htmlspecialchars($row["content"])) . '</p>';
                    echo '</article>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </section>
    </main>
    <footer>
        <button onclick="window.location.href='index.html'">Home</button>
        <button onclick="window.location.href='gallery.html'">Gallery</button>
        <button onclick="window.location.href='contact.html'">Contact</button>
    </footer>
    <script src="blog.js"></script>
</body>
</html>
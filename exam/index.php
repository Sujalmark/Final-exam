<?php
// index.php
include 'header.php';

// handle form submission
if (isset($_POST['submit'])) {
    $message = trim($_POST['message']);
    if ($message !== '') {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=final;charset=utf8mb4','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("INSERT INTO string_info (message) VALUES (:message)");
            $stmt->execute([':message' => $message]);
            echo "<p>Saved: “" . htmlspecialchars($message) . "”.</p>";
        } catch (PDOException $e) {
            echo "<p style='color:red'>Error: " . $e->getMessage() . "</p>";
        }
    }
}
?>

<form method="post" action="">
  <label>
    Enter message (max 50 chars):
    <input type="text" name="message" maxlength="50" required>
  </label>
  <button type="submit" name="submit">Submit</button>
</form>

<p><a href="showAll.php">Show all records</a></p>

</body>
</html>

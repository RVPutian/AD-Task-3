<?php
if (isAuthenticated()) {
    $user = currentUser();
    echo "<p>Welcome, <b>" . htmlspecialchars($user['username']) . "</b> (" . htmlspecialchars($user['role']) . ")!</p>";
    echo '<form method="POST" action="handlers/auth.handler.php">
        <button type="submit" name="logout">Logout</button>
    </form>';
} else {
    if (isset($_GET['login']) && $_GET['login'] === 'fail') {
        echo "<div style='color:red;'>Invalid username or password.</div>";
    }
    echo '<form method="POST" action="handlers/auth.handler.php">
        <input name="username" placeholder="Username" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>';
}
?>
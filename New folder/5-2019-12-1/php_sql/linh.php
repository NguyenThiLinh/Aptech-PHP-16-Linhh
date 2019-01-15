<?php
// require_once 'connect.php';
 $host = 'localhost';
    $dbname = ' 4_2019_10_1_sql';
    $username = 'root';
    $password = '12345';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql = 'SELECT users.id,users.name,users.email, roles.name from users   JOIN roles
    on users.role = roles.id';
  
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <h1>bang</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <-- <th>password</th> -->
                        <th>Email</th>
                        <th>Role_Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                        <?php
                         var_dump($row);
                        ?>
                            <td><?php echo htmlspecialchars($row['id']) ?></td>
                            <td><?php echo htmlspecialchars($row['name']) ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html> -->
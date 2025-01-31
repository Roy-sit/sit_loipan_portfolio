<!DOCTYPE html>
<html lang="en">
<?php
require_once('../includes/connect.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if ($id === null) {
    echo "<p>No project selected.</p>";
    exit;
}

$query = "SELECT id, title, image, image2, case_study, client, application FROM project WHERE id = :id";
$stmt = $connection->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt = null;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Detail</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
    <h1><?php echo htmlspecialchars($row['title']); ?></h1>
    <div class="image">
        <?php
        $file1 = $row['image'];
        $file2 = $row['image2'];
        $fileExtension1 = pathinfo($file1, PATHINFO_EXTENSION);
        $fileExtension2 = $file2 ? pathinfo($file2, PATHINFO_EXTENSION) : null;

        if (in_array($fileExtension1, ['mp4', 'webm', 'ogg'])): ?>
            <video controls>
                <source src="<?php echo htmlspecialchars($file1); ?>" type="video/<?php echo htmlspecialchars($fileExtension1); ?>">
                Your browser does not support the video tag.
            </video>
        <?php elseif (!empty($file1) && empty($file2)): ?>
            <img src="<?php echo htmlspecialchars($file1); ?>" alt="Project image">
        <?php elseif (!empty($file1) && !empty($file2)): ?>
            <img src="<?php echo htmlspecialchars($file1); ?>" alt="Project image 1">
            <img src="<?php echo htmlspecialchars($file2); ?>" alt="Project image 2">
        <?php endif; ?>
    </div>
    <div class="des-con">
        <div class="case_study">
            <p><span>CASE STUDY:</span> <?php echo htmlspecialchars($row['case_study']); ?></p>
        </div>
        <div class="client">
            <p><span>CLIENT / THEME:</span> <img src="<?php echo htmlspecialchars($row['client']); ?>" alt="Client logo"></p>
        </div>
        <div class="application">
            <p><span>APPLICATION:</span> <img src="<?php echo htmlspecialchars($row['application']); ?>" alt="Application logo"></p>
        </div>
    </div>
    <a href="project_list.php">Back to Project List</a>
</body>
</html>
<?php
$jsonFilePath = __DIR__ . '/../database/json/lecturer.json';

echo "JSON File Path: $jsonFilePath";

if (file_exists($jsonFilePath)) {
    echo "File exists!";
} else {
    echo "File does not exist!";
}

// Read the JSON file
$jsonData = file_get_contents($jsonFilePath);

// Decode JSON data
$lecturerData = json_decode($jsonData, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <title>Profile</title>
</head>
<body>

<div class="container mt-5">
    <h1>Profile Information</h1>

    <!-- Display Profile Information -->
    <div class="card">
        <img src="<?php echo $profileData['picture_url']; ?>" class="card-img-top" alt="Profile Picture">
        <div class="card-body">
            <h5 class="card-title"><?php echo $profileData['title_before'] . ' ' . $profileData['first_name'] . ' ' . $profileData['middle_name'] . ' ' . $profileData['last_name'] . ' ' . $profileData['title_after']; ?></h5>
            <p class="card-text"><?php echo $profileData['claim']; ?></p>
            <p class="card-text"><?php echo $profileData['bio']; ?></p>
        </div>
    </div>

    <!-- Display Tags -->
    <div class="mt-3">
        <h5>Tags:</h5>
        <ul class="list-inline">
            <?php foreach ($profileData['tags'] as $tag): ?>
                <li class="list-inline-item"><span class="badge badge-primary"><?php echo $tag['name']; ?></span></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Display Contact Information -->
    <div class="mt-3">
        <h5>Contact:</h5>
        <ul class="list-unstyled">
            <?php foreach ($profileData['contact']['telephone_numbers'] as $telephone): ?>
                <li>Telephone: <?php echo $telephone; ?></li>
            <?php endforeach; ?>
            <?php foreach ($profileData['contact']['emails'] as $email): ?>
                <li>Email: <?php echo $email; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>
</body>
</html>
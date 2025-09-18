<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUpdate</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg rounded-4">
            <div class="card-header bg-warning text-dark">
                <h3 class="mb-0">✏️ Update Profile</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label fw-bold">User ID</label>
                        <input type="text" id="username" name="username" 
                               value="<?= ($data['username']); ?>" 
                               class="form-control" placeholder="Enter your User ID" required>
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label fw-bold">Age</label>
                        <input type="number" id="age" name="age" 
                               value="<?= ($data['age']); ?>" 
                               class="form-control" placeholder="Enter your Age" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold">Address</label>
                        <input type="text" id="address" name="address" 
                               value="<?= ($data['address']); ?>" 
                               class="form-control" placeholder="Enter your Address" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/view" class="btn btn-secondary px-4">⬅️ Back</a>
                        <button type="submit" class="btn btn-primary px-4">💾 Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

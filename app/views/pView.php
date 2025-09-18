<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PView</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-primary">👤 PView Profiles</h1>
            <a href="/create" class="btn btn-success">➕ Create New Profile</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $item): ?>
                        <tr>
                            <td><?= ($item['id']); ?></td>
                            <td><?= ($item['user_id']); ?></td>
                            <td><?= ($item['age']); ?></td>
                            <td><?= ($item['address']); ?></td>
                            <td>
                                <a href="<?= site_url('/edit/' . ($item['id'])); ?>" class="btn btn-sm btn-warning">✏️ Edit</a>
                                <a href="<?= site_url('/delete/' . ($item['id'])); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this profile?');">🗑️ Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, for modal/alerts if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

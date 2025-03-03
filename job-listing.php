<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESO - Find Your Dream Job</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <style>
        .is-nav {
            background: linear-gradient(135deg, #1E3C72 0%, #2A5298 100%) !important;
        }
    </style>
</head>

<body>
    <nav class="navbar is-nav py-4 px-5" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item has-text-white has-text-weight-bold" href="#">PESO</a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarMenu" class="navbar-menu has-text-white">
            <div class="navbar-start">
                <a class="navbar-item has-text-white" href="/landing#about">About</a>
                <a class="navbar-item has-text-white" href="/landing#jobs">Jobs</a>
                <a class="navbar-item has-text-white" href="/job-listing">Job Listing</a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="/create-account">Sign Up</a>
                        <a class="button is-light" href="/">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="columns is-multiline">
            <?php foreach ($jobs as $key): ?>
                <div class="column is-12-mobile is-6-tablet is-4-desktop">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-title">
                                <?= $key['job_title'] ?>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <p><strong>Description:</strong> <?= $key['job_description'] ?></p>
                                <p><strong>Location:</strong> <?= $key['location'] ?></p>
                                <p><strong>Salary:</strong> <?= $key['salary_range'] ?? 'Not Disclosed' ?></p>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="/" class="card-footer-item">Apply Now</a>
                            <a href="/" class="card-footer-item">View Details</a>
                        </footer>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>
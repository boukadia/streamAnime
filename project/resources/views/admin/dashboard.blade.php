<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeAdmin - Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <span class="fs-4 text-white fw-bold">AnimeAdmin</span>
                    </div>

                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/80" alt="Admin" class="rounded-circle border border-3 border-secondary">
                        <h6 class="mt-2 text-white">Admin User</h6>
                        <span class="badge bg-success">Online</span>
                    </div>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">
                                <i class="bi bi-house-door me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route("contentManagement") }}">
                                <i class="bi bi-film me-2"></i>
                                Content Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user-management.html">
                                <i class="bi bi-people me-2"></i>
                                User Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-star me-2"></i>
                                Reviews
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-tags me-2"></i>
                                Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-collection-play me-2"></i>
                                Seasons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-graph-up me-2"></i>
                                Analytics
                            </a>
                        </li>
                        <li class="nav-item mt-3">
                            <a class="nav-link" href="#">
                                <i class="bi bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="{{ Route("logOut") }}">
                                <i class="bi bi-box-arrow-right me-2"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Header/Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
                    <div class="container-fluid">
                        <button class="btn btn-sm" id="sidebarToggle">
                            <i class="bi bi-list fs-5"></i>
                        </button>

                        <div class="d-flex flex-grow-1  mx-3">
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                                <input type="text" class="form-control bg-light border-start-0" placeholder="Search...">
                            </div>
                        </div>

                        <ul class="navbar-nav">
                            <li class="nav-item dropdown mx-2">
                                <a class="nav-link position-relative" href="#" role="button">
                                    <i class="bi bi-bell fs-5"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        3
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown mx-2">
                                <a class="nav-link position-relative" href="#" role="button">
                                    <i class="bi bi-envelope fs-5"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                        7
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="https://via.placeholder.com/32" alt="Profile" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Dashboard Content -->
                <div class="container-fluid px-4 py-4">
                    <!-- Page Header -->
                    <div class="row mb-4">
                        <div class="col">
                            <h2 class="fw-bold">Dashboard</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-secondary"><i class="bi bi-calendar me-2"></i>March 13, 2025</button>
                                <button type="button" class="btn btn-primary"><i class="bi bi-plus-circle me-2"></i>Add New Content</button>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="row g-4 mb-4">
                        <div class="col-xl-3 col-md-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="stats-icon bg-primary text-white rounded-circle p-3">
                                                <i class="bi bi-film"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Total Anime</h5>
                                            <h3 class="mt-2 mb-0">1,254</h3>
                                            <span class="text-success"><i class="bi bi-arrow-up"></i> 12% since last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="stats-icon bg-success text-white rounded-circle p-3">
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Users</h5>
                                            <h3 class="mt-2 mb-0">45,631</h3>
                                            <span class="text-success"><i class="bi bi-arrow-up"></i> 8% since last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="stats-icon bg-warning text-white rounded-circle p-3">
                                                <i class="bi bi-chat-left-text"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Reviews</h5>
                                            <h3 class="mt-2 mb-0">5,751</h3>
                                            <span class="text-success"><i class="bi bi-arrow-up"></i> 23% since last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="stats-icon bg-info text-white rounded-circle p-3">
                                                <i class="bi bi-eye"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Views</h5>
                                            <h3 class="mt-2 mb-0">2.3M</h3>
                                            <span class="text-success"><i class="bi bi-arrow-up"></i> 15% since last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Charts Row -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-8">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-transparent border-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Viewing Statistics</h5>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="viewStatsDropdown" data-bs-toggle="dropdown">
                                                This Month
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="viewingStatsChart" height="300"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-transparent border-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Top Genres</h5>
                                        <button class="btn btn-sm btn-outline-secondary">View All</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="genresChart" height="260"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Updates & Popular Content -->
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-transparent border-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Recent Updates</h5>
                                        <button class="btn btn-sm btn-outline-secondary">View All</button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item py-3 px-4">
                                            <div class="d-flex">
                                                <img src="https://via.placeholder.com/48" class="rounded" alt="Anime Cover">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Demon Slayer: Season 3 Added</h6>
                                                    <p class="mb-1 small text-muted">All episodes of Demon Slayer Season 3 are now available.</p>
                                                    <span class="badge bg-soft-primary text-primary">New Season</span>
                                                    <small class="text-muted ms-2">2 hours ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item py-3 px-4">
                                            <div class="d-flex">
                                                <img src="https://via.placeholder.com/48" class="rounded" alt="Anime Cover">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Attack on Titan: Final Season Updated</h6>
                                                    <p class="mb-1 small text-muted">Episode 87 has been added to the collection.</p>
                                                    <span class="badge bg-soft-success text-success">Update</span>
                                                    <small class="text-muted ms-2">1 day ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item py-3 px-4">
                                            <div class="d-flex">
                                                <img src="https://via.placeholder.com/48" class="rounded" alt="Anime Cover">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">My Hero Academia Movie Added</h6>
                                                    <p class="mb-1 small text-muted">The latest movie has been added to the collection.</p>
                                                    <span class="badge bg-soft-warning text-warning">Movie</span>
                                                    <small class="text-muted ms-2">3 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item py-3 px-4">
                                            <div class="d-flex">
                                                <img src="https://via.placeholder.com/48" class="rounded" alt="Anime Cover">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">One Piece: Episodes 1046-1050 Added</h6>
                                                    <p class="mb-1 small text-muted">5 new episodes available now.</p>
                                                    <span class="badge bg-soft-success text-success">Update</span>
                                                    <small class="text-muted ms-2">5 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-transparent border-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Popular Content</h5>
                                        <button class="btn btn-sm btn-outline-secondary">View All</button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Views</th>
                                                    <th scope="col">Rating</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://via.placeholder.com/36" class="rounded me-2" alt="">
                                                            <span>Demon Slayer</span>
                                                        </div>
                                                    </td>
                                                    <td>358K</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2">4.9</span>
                                                            <div class="text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://via.placeholder.com/36" class="rounded me-2" alt="">
                                                            <span>Attack on Titan</span>
                                                        </div>
                                                    </td>
                                                    <td>290K</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2">4.8</span>
                                                            <div class="text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://via.placeholder.com/36" class="rounded me-2" alt="">
                                                            <span>Jujutsu Kaisen</span>
                                                        </div>
                                                    </td>
                                                    <td>280K</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2">4.7</span>
                                                            <div class="text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://via.placeholder.com/36" class="rounded me-2" alt="">
                                                            <span>One Piece</span>
                                                        </div>
                                                    </td>
                                                    <td>275K</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2">4.9</span>
                                                            <div class="text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://via.placeholder.com/36" class="rounded me-2" alt="">
                                                            <span>My Hero Academia</span>
                                                        </div>
                                                    </td>
                                                    <td>230K</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2">4.6</span>
                                                            <div class="text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom JS -->
    <script src="scripts.js"></script>
</body>

</html>
</body>
</html>
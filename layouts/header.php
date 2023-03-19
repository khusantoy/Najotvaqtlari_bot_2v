<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Najot vaqtlari bot</title>

    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">

    <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link type="text/css" href="assets/css/sweetalert2.min.css" rel="stylesheet">
    <link type="text/css" href="assets/css/notyf.min.css" rel="stylesheet">
    <link type="text/css" href="assets/css/volt.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="index.php"><img class="navbar-brand-dark" src="assets/img/favicon.ico" alt="Rich logo"> <img class="navbar-brand-light" src="assets/img/dark.svg" alt="Rich logo"></a>
    <div class="d-flex align-items-center"><button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button></div>
</nav>
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4"><img src="assets/img/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green"></div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Jane</h2>
                    <a href="login.php" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Sign Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item"><a href="index.php" class="nav-link d-flex align-items-center"><span class="sidebar-icon"><img src="assets/img/favicon.ico" height="20" width="20" alt="Logo"> </span><span class="mt-1 ms-1 sidebar-text">Najot vaqtlari bot</span></a></li>
            <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
            <li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">
                <a href="index.php" class="nav-link">
                     <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                           <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                     </span>
                    <span class="sidebar-text">Statistika</span>
                </a>
            </li>
            <li class="nav-item <?= ($activePage == 'vaqtlar') ? 'active':''; ?>">
                <a href="vaqtlar.php" class="nav-link">
                     <span class="sidebar-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                     </span>
                    <span class="sidebar-text">Namoz vaqtlari</span>
                </a>
            </li>
            <li class="nav-item <?= ($activePage == 'xabarlar') ? 'active':''; ?>">
                <a href="xabarlar.php" class="nav-link">
                     <span class="sidebar-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                     </span>
                    <span class="sidebar-text">Xabarlar</span>
                </a>
            </li>
    </div>
</nav>


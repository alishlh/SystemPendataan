<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Exit to Qatar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-blue: #1a56db;
            --secondary-blue: #0e4bbb;
            --light-blue: #e1effe;
            --dark-blue: #1e3a8a;
            --accent-blue: #3b82f6;
            --text-small: 0.85rem;
            --sidebar-width: 260px;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --info: #3b82f6;
            --light: #f8fafc;
            --dark: #1e293b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            font-size: var(--text-small);
            background-color: #f8fafc;
            color: #334155;
            overflow-x: hidden;
        }
        
        /* ---------- SIDEBAR STYLING ---------- */
        .sidebar {
            background: linear-gradient(180deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: white;
            height: 100vh;
            position: fixed;
            width: var(--sidebar-width);
            padding-top: 20px;
            z-index: 1000;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow-y: auto;
        }
        
        .sidebar-brand {
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .sidebar-brand img {
            height: 40px;
            width: 40px;
            margin-right: 10px;
            object-fit: contain;
            filter: brightness(0) invert(1);
        }
        
        .sidebar-brand h2 {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0;
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.85);
            padding: 0.75rem 1.5rem;
            margin: 0.15rem 0.8rem;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            font-weight: 400;
            position: relative;
        }
        
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
            transform: translateX(5px);
        }
        
        .sidebar .nav-link i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            font-size: 1rem;
        }
        
        .sidebar .nav-link .badge {
            position: absolute;
            right: 1rem;
            background: rgba(255, 255, 255, 0.2);
        }
        
        /* ---------- NAVBAR STYLING ---------- */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            height: 70px;
            padding: 0 1.5rem;
            margin-left: var(--sidebar-width);
            transition: all 0.3s ease;
        }
        
        .navbar .search-form {
            position: relative;
            width: 300px;
        }
        
        .navbar .search-form .form-control {
            border-radius: 1.5rem;
            padding-left: 2.5rem;
            font-size: 0.85rem;
            border: 1px solid #e2e8f0;
            background-color: #f8fafc;
            transition: all 0.3s ease;
        }
        
        .navbar .search-form .form-control:focus {
            width: 350px;
            box-shadow: 0 0 0 3px rgba(26, 86, 219, 0.1);
        }
        
        .navbar .search-form i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
        }
        
        .navbar .navbar-nav .nav-link {
            color: #64748b;
            padding: 0.5rem 1rem;
            position: relative;
        }
        
        .navbar .navbar-nav .nav-link:hover {
            color: var(--primary-blue);
        }
        
        .navbar .notification-badge {
            position: absolute;
            top: 3px;
            right: 5px;
            background-color: #ef4444;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .navbar .user-profile {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .navbar .user-profile:hover {
            background-color: #f1f5f9;
        }
        
        .navbar .user-profile img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
            border: 2px solid #e2e8f0;
        }
        
        .navbar .user-profile .user-info {
            line-height: 1.2;
        }
        
        .navbar .user-profile .user-info .user-name {
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        .navbar .user-profile .user-info .user-role {
            font-size: 0.75rem;
            color: #94a3b8;
        }
        
        /* ---------- MAIN CONTENT STYLING ---------- */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 1.5rem;
            padding-top: 90px;
            transition: all 0.3s ease;
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .page-title h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1e293b;
            margin: 0;
        }
        
        .page-title .breadcrumb {
            margin-bottom: 0;
            font-size: 0.8rem;
            background: transparent;
            padding: 0;
        }
        
        .page-title .breadcrumb a {
            color: var(--primary-blue);
            text-decoration: none;
        }
        
        /* ---------- STATS GRID STYLING ---------- */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .stat-card {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.04);
            display: flex;
            align-items: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.07);
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.5rem;
        }
        
        .stat-icon.blue {
            background-color: #e1effe;
            color: var(--primary-blue);
        }
        
        .stat-icon.green {
            background-color: #dcfce7;
            color: var(--success);
        }
        
        .stat-icon.orange {
            background-color: #fef3c7;
            color: var(--warning);
        }
        
        .stat-icon.purple {
            background-color: #ede9fe;
            color: #8b5cf6;
        }
        
        .stat-content {
            flex: 1;
        }
        
        .stat-title {
            color: #64748b;
            font-size: 0.85rem;
            margin-bottom: 0.25rem;
        }
        
        .stat-number {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }
        
        .stat-change {
            font-size: 0.75rem;
            display: flex;
            align-items: center;
        }
        
        .stat-change.increase {
            color: var(--success);
        }
        
        .stat-change.decrease {
            color: var(--danger);
        }
        
        /* ---------- CARD STYLING ---------- */
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.04);
            margin-bottom: 1.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.07);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid #f1f5f9;
            font-weight: 600;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem 0.75rem 0 0 !important;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .card-header .card-title {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
            color: #1e293b;
        }
        
        .card-header .card-action {
            color: #94a3b8;
            cursor: pointer;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .chart-container {
            position: relative;
            height: 300px;
        }
        
        /* ---------- TABLE STYLING ---------- */
        .table-container {
            background: white;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.04);
        }
        
        .table thead th {
            background-color: #f8fafc;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            padding: 0.875rem 1rem;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .table tbody tr:last-child td {
            border-bottom: none;
        }
        
        .table tbody tr:hover {
            background-color: #f8fafc;
        }
        
        .user-info {
            display: flex;
            align-items: center;
        }
        
        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 0.75rem;
            border: 2px solid #f1f5f9;
        }
        
        .user-name {
            font-weight: 500;
            color: #1e293b;
        }
        
        .user-detail {
            font-size: 0.75rem;
            color: #64748b;
        }
        
        /* ---------- BADGE STYLING ---------- */
        .badge {
            padding: 0.45rem 0.75rem;
            border-radius: 0.5rem;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .badge-ready {
            background-color: #dcfce7;
            color: #166534;
        }
        
        .badge-process {
            background-color: #fef3c7;
            color: #92400e;
        }
        
        .badge-departed {
            background-color: #dbeafe;
            color: #1e40af;
        }
        
        /* ---------- BUTTON STYLING ---------- */
        .btn {
            border-radius: 0.5rem;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.2s ease;
        }
        
        .btn-sm {
            padding: 0.35rem 0.65rem;
            font-size: 0.8rem;
        }
        
        .btn-primary {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-blue);
            border-color: var(--secondary-blue);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(26, 86, 219, 0.2);
        }
        
        .btn-icon {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
        }
        
        /* ---------- FORM STYLING ---------- */
        .form-label {
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 0.85rem;
        }
        
        .form-control {
            border-radius: 0.5rem;
            border: 1px solid #d1d5db;
            padding: 0.5rem 0.75rem;
            font-size: 0.85rem;
        }
        
        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(26, 86, 219, 0.1);
        }
        
        /* ---------- ALERT STYLING ---------- */
        .alert {
            border-radius: 0.75rem;
            border: none;
            margin-bottom: 1.5rem;
        }
        
        .alert-success {
            background-color: #dcfce7;
            color: #166534;
        }
        
        /* ---------- RESPONSIVE STYLING ---------- */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
                width: 0;
            }
            
            .sidebar.show {
                transform: translateX(0);
                width: var(--sidebar-width);
            }
            
            .navbar,
            .main-content {
                margin-left: 0;
            }
            
            .navbar-toggler {
                display: block;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .navbar .search-form {
                width: 200px;
            }
            
            .navbar .search-form .form-control:focus {
                width: 250px;
            }
        }
        
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            
            .card-header .card-action {
                align-self: flex-end;
            }
        }
        
        /* ---------- DROPDOWN STYLING ---------- */
        .dropdown-menu {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            padding: 0.5rem;
        }
        
        .dropdown-item {
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
        }
        
        .dropdown-item i {
            width: 20px;
            margin-right: 0.5rem;
        }
        
        .dropdown-item:hover {
            background-color: #f1f5f9;
        }
        
        /* ---------- LOADING ANIMATION ---------- */
        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
        }
        
        /* ---------- CUSTOM SCROLLBAR ---------- */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        
        /* ---------- ANIMATIONS ---------- */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('admin.layout.sidebar')

    <!-- Navbar -->
   @include('admin.layout.navbar')

    <!-- Main Content -->
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle sidebar on mobile
            document.getElementById('sidebarToggle').addEventListener('click', function() {
                document.querySelector('.sidebar').classList.toggle('show');
            });
            
            // Initialize charts
            const statsCtx = document.getElementById('statsChart').getContext('2d');
            const statsChart = new Chart(statsCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [{
                        label: 'Pekerja Baru',
                        data: [65, 59, 80, 81, 56, 55, 40, 58, 75, 82, 90, 76],
                        backgroundColor: 'rgba(26, 86, 219, 0.7)',
                        borderColor: 'rgba(26, 86, 219, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Pekerja Berangkat',
                        data: [45, 49, 60, 71, 46, 45, 30, 48, 65, 72, 80, 66],
                        backgroundColor: 'rgba(16, 185, 129, 0.7)',
                        borderColor: 'rgba(16, 185, 129, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            
            const statusCtx = document.getElementById('statusChart').getContext('2d');
            const statusChart = new Chart(statusCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Proses Dokumen', 'Siap Berangkat', 'Sudah Berangkat'],
                    datasets: [{
                        data: [30, 25, 45],
                        backgroundColor: [
                            'rgba(245, 158, 11, 0.8)',
                            'rgba(16, 185, 129, 0.8)',
                            'rgba(26, 86, 219, 0.8)'
                        ],
                        borderColor: [
                            'rgba(245, 158, 11, 1)',
                            'rgba(16, 185, 129, 1)',
                            'rgba(26, 86, 219, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
            
            // Add animations to elements
            const animateElements = document.querySelectorAll('.stat-card, .card');
            animateElements.forEach(element => {
                element.classList.add('fade-in');
            });
        });
    </script>
</body>
</html>

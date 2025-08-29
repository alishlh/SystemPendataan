@extends('admin.master')
@section('content')
    <main class="main-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h1>Dashboard</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <button class="btn btn-primary">
                    <i class="fas fa-download me-2"></i> Generate Report
                </button>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-title">Total Agen</div>
                        <div class="stat-number"></div>
                        <div class="stat-change increase">
                            <i class="fas fa-arrow-up me-1"></i> 12% dari bulan lalu
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-title">Total Grub</div>
                        <div class="stat-number"></div>
                        <div class="stat-change increase">
                            <i class="fas fa-arrow-up me-1"></i> 5% dari bulan lalu
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-title">Total Exit</div>
                        <div class="stat-number"></div>
                        <div class="stat-change decrease">
                            <i class="fas fa-arrow-down me-1"></i> 2% dari minggu lalu
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon purple">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-title">Total User</div>
                        <div class="stat-number"></div>
                        <div class="stat-change decrease">
                            <i class="fas fa-arrow-down me-1"></i> 8% dari minggu lalu
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Workers Table -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Pekerja Terbaru</div>
                    <button class="btn btn-sm btn-primary">
                        <i class="fas fa-plus me-1"></i> Tambah Baru
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No. Paspor</th>
                                    <th>Perusahaan</th>
                                    <th>Posisi</th>
                                    <th>Status</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iIzFhNTZkYiI+PHBhdGggZD0iTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyczQuNDggMTAgMTAgMTAgMTAtNC40OCAxMC0xMFMxNy41MiAyIDEyIDJ6bTAgM2MyLjIxIDAgNCAxLjc5IDQgNHMtMS43OSA0LTQgNC00LTEuNzktNC00IDEuNzktNCA0LTR6bTAgMTcuMDJjLTMuMzMgMC02LjI4LTEuNzEtOC02LjAyQzcuNjIgNy44MiAxMS4yMjAxNyAxMiAxMiAxN3M0LjM4LTkuMTggNi05Ljk4Yy0xLjQxLTIuMzktMy45Ni00LTYuODYtNC0yLjkgMC01LjQ1IDEuNjEtNi44NiA0QzUuNjIgMTQuMTcgOS4yMjA3IDEyIDcgMTdjMi43OCAwIDYuMzggNy4xNyA2Ljg2IDcuOTgtLjQyLjcxLTEuNTIgMi4wMi0zLjE0IDMuMDItMS42MiAxLTMuNzIgMi01LjE0IDJ6Ii8+PC9zdmc+" alt="Ahmad">
                                            <div>
                                                <div class="user-name">Ahmad Supriyadi</div>
                                                <div class="user-detail">Laki-laki, 32 tahun</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>A12345678</td>
                                    <td>Qatar Construction Co.</td>
                                    <td>Welder</td>
                                    <td><span class="badge badge-ready">Siap Berangkat</span></td>
                                    <td>12 Jun 2023</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-sm btn-icon btn-primary me-2">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-light">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iI2UxMWY1ZSI+PHBhdGggZD0iTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyczQuNDggMTAgMTAgMTAgMTAtNC40OCAxMC0xMFMxNy41MiAyIDEyIDJ6bTAgM2MyLjIxIDAgNCAxLjc5IDQgNHMtMS43OSA0LTQgNC00LTEuNzktNC00IDEuNzktNCA0LTR6bTAgMTcuMDJjLTMuMzMgMC02LjI4LTEuNzktOC02LjAyQzcuNjIgNy44MiAxMS4yMjAxNyAxMiAxMiAxN3M0LjM4LTkuMTggNi05Ljk4Yy0xLjQxLTIuMzktMy45Ni00LTYuODYtNC0yLjkgMC01LjQ1IDEuNjEtNi44NiA0QzUuNjIgMTQuMTcgOS4yMjA3IDEyIDcgMTdjMi43OCAwIDYuMzggNy4xNyA2Ljg2IDcuOTgtLjQyLjcxLTEuNTIgMi4wMi0zLjE0IDMuMDItMS42MiAxLTMuNzIgMi01LjE0IDJ6Ii8+PC9zdmc+" alt="Budi">
                                            <div>
                                                <div class="user-name">Budi Santoso</div>
                                                <div class="user-detail">Laki-laki, 28 tahun</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>B98765432</td>
                                    <td>Al Rayyan Group</td>
                                    <td>Electrician</td>
                                    <td><span class="badge badge-process">Proses Dokumen</span></td>
                                    <td>10 Jun 2023</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-sm btn-icon btn-primary me-2">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-light">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iI2ZhOTQwMCI+PHBhdGggZD0iTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyczQuNDggMTAgMTAgMTAgMTAtNC40OCAxMC0xMFMxNy41MiAyIDEyIDJ6bTAgM2MyLjIxIDAgNCAxLjc5IDQgNHMtMS43OSA0LTQgNC00LTEuNzktNC00IDEuNzktNCA0LTR6bTAgMTcuMDJjLTMuMzMgMC02LjI4LTEuNzktOC02LjAyQzcuNjIgNy44MiAxMS4yMjAxNyAxMiAxMiAxN3M0LjM4LTkuMTggNi05Ljk4Yy0xLjQxLTIuMzktMy45Ni00LTYuODYtNC0yLjkgMC01LjQ1IDEuNjEtNi44NiA0QzUuNjIgMTQuMTcgOS4yMjA3IDEyIDcgMTdjMi43OCAwIDYuMzggNy4xNyA2Ljg2IDcuOTgtLjQyLjcxLTEuNTIgMi4wMi0zLjE0IDMuMDItMS42MiAxLTMuNzIgMi01LjE0IDJ6Ii8+PC9zdmc+" alt="Cici">
                                            <div>
                                                <div class="user-name">Cici Novitasari</div>
                                                <div class="user-detail">Perempuan, 26 tahun</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>C45678901</td>
                                    <td>Qatar Hospitality</td>
                                    <td>Housekeeping</td>
                                    <td><span class="badge badge-departed">Sudah Berangkat</span></td>
                                    <td>5 Jun 2023</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-sm btn-icon btn-primary me-2">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-light">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iIzE2YTM0YSI+PHBhdGggZD0iTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyczQuNDggMTAgMTAgMTAgMTAtNC40OCAxMC0xMFMxNy41MiAyIDEyIDJ6bTAgM2MyLjIxIDAgNCA1Ljc5IDQgNHMtMS43OSA0LTQgNC00LTEuNzktNC00IDEuNzktNCA0LTR6bTAgMTcuMDJjLTMuMzMgMC02LjI4LTEuNzktOC02LjAyQzcuNjIgNy44MiAxMS4yMjAxNyAxMiAxMiAxN3M0LjM4LTkuMTggNi05Ljk4Yy0xLjQxLTIuMzktMy45Ni00LTYuODYtNC0yLjkgMC01LjQ1IDEuNjEtNi44NiA0QzUuNjIgMTQuMTcgOS4yMjA3IDEyIDcgMTdjMi43OCAwIDYuMzggNy4xNyA2Ljg2IDcuOTgtLjQyLjcxLTEuNTIgMi4wMi0zLjE0IDMuMDItMS42MiAxLTMuNzIgMi01LjE0IDJ6Ii8+PC9zdmc+" alt="Dedi">
                                            <div>
                                                <div class="user-name">Dedi Gunawan</div>
                                                <div class="user-detail">Laki-laki, 35 tahun</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>D23456789</td>
                                    <td>Gulf Engineering</td>
                                    <td>Plumber</td>
                                    <td><span class="badge badge-process">Proses Dokumen</span></td>
                                    <td>3 Jun 2023</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-sm btn-icon btn-primary me-2">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-light">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iIzkzMzNlYSI+PHBhdGggZD0iTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyczQuNDggMTAgMTAgMTAgMTAtNC40OCAxMC0xMFMxNy41MiAyIDEyIDJ6bTAgM2MyLjIxIDAgNCAxLjc5IDQgNHMtMS43OSA0LTQgNC00LTEuNzktNC00IDEuNzktNCA0LTR6bTAgMTcuMDJjLTMuMzMgMC02LjI4LTEuNzktOC02LjAyQzcuNjIgNy44MiAxMS4yMjAxNyAxMiAxMiAxN3M0LjM4LTkuMTggNi05Ljk4Yy0xLjQxLTIuMzktMy45Ni00LTYuODYtNC0yLjkgMC01LjQ1IDEuNjEtNi44NiA0QzUuNjIgMTQuMTcgOS4yMjA3IDEyIDcgMTdjMi43ggMCA2LjM4IDcuMTcgNi44NiA3Ljk4LS40Mi43MS0xLjUyIDIuMDItMy4xNCAzLjAyLTEuNjIgMS0zLjcyIDItNS4xNCAyeiIvPjwvc3ZnPg==" alt="Eka">
                                            <div>
                                                <div class="user-name">Eka Prasetyo</div>
                                                <div class="user-detail">Laki-laki, 29 tahun</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>E34567890</td>
                                    <td>Doha Manufacturing</td>
                                    <td>Technician</td>
                                    <td><span class="badge badge-ready">Siap Berangkat</span></td>
                                    <td>1 Jun 2023</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-sm btn-icon btn-primary me-2">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-light">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="text-muted small">Menampilkan 5 dari 1245 data</div>
                        <nav>
                            <ul class="pagination mb-0">
                                <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
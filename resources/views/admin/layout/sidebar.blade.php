<div class="sidebar">
    <div class="sidebar-brand flex items-center space-x-2">
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBmaWxsPSIjZmZmIj48cGF0aCBkPSJNNDggMjU2YzAtMTE0LjkgOTMuMS0yMDggMjA4LTIwOHMyMDggOTMuMSAyMDggMjA4LTkzLjEgMjA4LTIwOCAyMDhTMjggMzcwLjkgNDggMjU2em0xNzAgNzJsLTYwLTYwIDYwLTYwIDYwIDYwLTYwIDZ6Ii8+PC9zdmc+" alt="Logo" class="w-8 h-8">
        <h2 class="text-lg font-bold">Exit to Qatar</h2>
    </div>
      @if (auth()->user()->role === 'admin')
    <ul class="nav flex-column mt-6">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.grubs.index') }}">
                <i class="fas fa-people-group"></i> Daftar Keberangkatan
            
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.agens.index')}}">
                <i class="fas fa-user-tie"></i> Data Agen
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.exit-data.index')}}">
                <i class="fas fa-plane-departure"></i> Exit Data
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <i class="fas fa-user-group"></i> Data Users
                <span class="badge">12</span>
            </a>
        </li>
    </ul>
     @elseif (auth()->user()->role === 'user')
     <ul class="nav flex-column mt-6">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>

       

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.exit-data.index')}}">
                <i class="fas fa-plane-departure"></i> Exit Data
            </a>
        </li>
        
        
    </ul>
     @endif
</div>

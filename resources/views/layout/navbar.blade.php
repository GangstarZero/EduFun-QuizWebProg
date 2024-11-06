<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="path/to/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            YourBrand
        </a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-4 mx-4" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" onclick="navigateToCategory('Data Science')">Data
                                Science</a></li>
                        <li><a class="dropdown-item" href="#"
                                onclick="navigateToCategory('Network Security')">Network Security</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4" href="{{ route('writer') }}">Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4" href="{{ route('popular') }}">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

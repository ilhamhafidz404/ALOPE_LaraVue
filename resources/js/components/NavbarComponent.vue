<template>
    <nav
        class="navbar navbar-expand-md navbar-dark bg-transparent fixed-top p-3"
    >
        <div class="container">
            <a class="navbar-brand" href="/">ALOPE</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <!-- @auth -->
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Serie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Topic</a>
                    </li>
                    <li class="nav-item dropdown ms-3">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            data-bs-toggle="dropdown"
                        >
                            Admin
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdown"
                        >
                            <li>
                                <a class="dropdown-item" href=""> Profil </a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-cog me-4"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-unlock-alt me-4"></i>
                                    Ganti Password
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-rocket me-4"></i>
                                    Beli Token
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-ticket-alt me-4"></i>
                                    Reedem Token
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    @endauth -->
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {};
</script>

<style></style>

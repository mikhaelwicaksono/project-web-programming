<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="">MAI BOUTIQUE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Search</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Profile</a>
                    </li>

                </ul>
                <form class="d-flex my-2 my-lg-0" action="">
                    @csrf
                    <button class="btn btn-outline-info me-4" type="submit">Add Item</button>
                    <button class="btn btn-outline-info" type="submit">Sign Out</button>
                </form>
                </ul>
            </div>
        </div>
    </nav>
</header>

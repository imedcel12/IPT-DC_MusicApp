<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <div class="container">
            <a class="navbar-brand" href="/dashboard"> MY MUSIC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                       </head>
                        <body>
                    </li>
                    <li class="nav-item">
                       </head>
                    </li>
                    <li class="nav-item">
                        <body>
                        <a class="nav-link" href="/index">Songs</a>
                         </body>
                    </li>
                    <li class="nav-item">
                        <body>
                        <a class="nav-link" href="/logs">Logs</a>
                         </body>
                    </li>
                    @if(auth()->guest())
                    <li class="nav-item">
                        <a class="nav-link" href="/log"> Login</a>
                    </li>
                    @else
                    <head>
                    <li class="nav-item">

                       </head>
                        <body>
                        <a class="nav-link" href="{{url('/logout')}}"> Logout </a>
                         </body>

                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

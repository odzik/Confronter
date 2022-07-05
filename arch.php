<!DOCTYPE html>
    <html lang="pl">
        <head>
            <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>County Flashcards - Confonter Task</title>

            <!-- Bootstrap implementation -->
            <link rel="stylesheet" href="CSS/bootstrap.min.css">
	        <link rel="stylesheet" href="CSS/main.css">

            <!-- Implementation js -->
            <script type="text/javascript" src="JS/jquery-3.6.0.js"></script>
            <script type="text/javascript" src="CSS/bootstrap-3.4.1-dist/js/bootstrap.js"></script>
            <script type="text/javascript" src="JS/start.js"></script>
        </head>
        <body>
            <!-- nav bar navigation -->
            <header>
               <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">Country Flashcards</a>

                    <!-- Toogler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-nav collapse navbar-collapse" id="mainmenu">
                        <ul class="navbar-nav d-flex">
                            <li class="nav-item"><a href="index.php" class="nav-link">Zagraj</a></li>
                            <li class="nav-item active"><a href="arch.php" class="nav-link">Archiwum</a></li>
                        </ul>
                    </div>
               </nav>
            </header>    
            
            <main>
                <div id="containerGame" class="w-100 h-100 p-15">
                    <input id="name" type="name" placeholder="User Name"/>
                    <input id="dateFrom" type="date"/>
                    <input id="dateTo" type="date"/>
                    <input id="sprawdz" class="favorite styled" type="button" value="Sprawdz"/>
                        <!-- Score table -->
                        <div id="score" class=" d-flex table-responsive  justify-content-center px-10 ">
                            <table class="table table-striped w-auto text-center">
                                
                                    <thead>
                                        <tr class="table-active">
                                            <td scope="row">#</td>
                                            <td scope="row">Imie</td>
                                            <td scope="row">Wynik</td>
                                            <td scope="row">Błedy</td>
                                            <td scope="row">Data</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                         
                                    </tbody>
                            </table>
                        </div>
                            
                </div>
            </main>
        </body>
</html>
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
                            <li class="nav-item active"><a href="index.php" class="nav-link">Zagraj</a></li>
                            <li class="nav-item"><a href="arch.php" class="nav-link">Archiwum</a></li>
                        </ul>
                    </div>
               </nav>
            </header>    
            
            <main>
                <div id="containerGame" class="w-100 h-100 p-10">
                        <!-- Score table -->
                        <div id="score" class=" d-none table-responsive  justify-content-end px-3 ">
                            <table class="table table-sm w-auto text-center">
                                <tbody>
                                    <tr class="table-active">
                                        <th scope="row">Imie:</th>
                                        <td id="imie"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pytanie:</th>
                                        <td id="pytanie">0</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Wynik:</th>
                                        <td id="wynik">0</td>
                                    </tr>
                                     
                                        
                                </tbody>
                            </table>
                        </div>
                            <div id="logo">
                                <img class="d-flex justify-content-center text-responsive" src="Flags/logo.jpg" alt="Logo" width="200px" height="300px">
                            </div>
                             <!-- Task description -->
                            <div id="task"  class="d-none">
                                <div id="question" class="d-flex justify-content-center text-responsive">
                                    <span class="justify-content-center text-center"></span>
                                </div>
                            
                            <!-- Flag and answer container -->
                                <div id="flag" class="d-flex justify-content-center">
                                        
                                 </div>
                            </div>

                            
                                <input id="start" class="favorite styled card w-auto mx-auto" type="button" value="START"/>
                </div>
            </main>
        </body>
</html>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://html5-templates.com/" />
    <title>Curso OpenShift v4</title>
    <meta name="description" content="Simplified Bootstrap template with sticky menu">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sticky-menu.css" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Welcome</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#whatwedo">What We Do</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>	<!-- .navbar-collapse -->
        </div>		<!-- .container -->
    </nav>
    <!-- Welcome   -->
    <section id="welcome" class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Curso OpenShift v4</h1>
                    <h2>Aplicación escrita en PHP</h2>
                    <p>Fecha: <strong>
                        <?php
                        $today = date("d/m/Y");
                        echo $today;
                        ?>
                    </strong></p>
                    <p>Variable de entorno: <strong>
                            <?php
                            echo $_ENV["INFORMACION"]
                            ?>
                    </strong></p>   
                    <a class="btn btn-primary page-scroll" href="#about">Click To Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- What we do Section -->
    <section id="whatwedo" class="whatwedo-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>What We Do</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>
	
	<a id="back2Top" title="Back to top" href="#">&#10148;</a>
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/sticky-menu.js"></script>

</body>

</html>

<? 
    include_once 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Topic</title>
    <? include_once 'head.php'; ?>
    <link rel="stylesheet" href="topic/css/style.css">
</head>

<body>
    <!-- HEADER-->
    <header>
        <? include_once 'top_footer.php'; ?>
        <? include_once 'menu.php'; ?>
    </header>
    <!-- WRAPPER-->
    <div id="wrapper-content">
        <!-- PAGE WRAPPER-->
        <div id="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <!-- CONTENT-->
                <div class="content">
                    <div class="section background-opacity page-title set-height-top">
                        <div class="container">
                            <div class="page-title-wrapper">
                                <!--.page-title-content-->
                                <h2 class="captions">VIEW ALL AVAILABLE COLLECTIONS</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">
                                            <?=$arr['home']?></a></li>
                                    <li class="active"><a href="#">Topic</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding">
                        <div class="">
                            <h1>Collection of articles</h1>
                            <div class="accordion">
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <p>Journal name: </p>
                                    </div>
                                    <div class="accordion-item-body">
                                        <div class="accordion-item-body-content">
                                            Web Development broadly refers to the tasks associated with developing functional websites and
                                            applications for the Internet. The web development process includes web design, web content
                                            development, client-side/server-side scripting and network security configuration, among other
                                            tasks.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        What is HTML?
                                    </div>
                                    <div class="accordion-item-body">
                                        <div class="accordion-item-body-content">
                                            HTML, aka HyperText Markup Language, is the dominant markup language for creating websites and
                                            anything that can be viewed in a web browser.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        What are some basic technical skills of a Front-End developer?
                                    </div>
                                    <div class="accordion-item-body">
                                        <div class="accordion-item-body-content">
                                            <ul style="padding-left: 1rem;">
                                                <li>HTML, CSS, JavaScript</li>
                                                <li>Frameworks (CSS and JavaScript frameworks)</li>
                                                <li>Responsive Design</li>
                                                <li>Version Control/Git</li>
                                                <li>Testing/Debugging</li>
                                                <li>Browser Developer Tools</li>
                                                <li>Web Performance</li>
                                                <li>SEO (Search Engine Optimization)</li>
                                                <!-- <li>CSS Preprocessing</li> -->
                                                <li>Command Line</li>
                                                <li>CMS (Content Management System)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        What is HTTP?
                                    </div>
                                    <div class="accordion-item-body">
                                        <div class="accordion-item-body-content">
                                            HTTP, aka HyperText Transfer Protocol, is the underlying protocol used by the World Wide Web and
                                            this protocol defines how messages are formatted and transmitted, and what actions Web servers and
                                            browsers should take in response to various commands.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        What is CORS?
                                    </div>
                                    <div class="accordion-item-body">
                                        <div class="accordion-item-body-content">
                                            CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images,
                                            stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain
                                            from which the resource originated.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <? include_once 'logo.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
    <? include_once 'bottom_footer.php'; ?>
    <? include_once 'loading.php'; ?>
    <? include_once 'js.php'; ?>
    <script type="text/javascript" src="topic/js/main.js"></script>
</body>

</html>
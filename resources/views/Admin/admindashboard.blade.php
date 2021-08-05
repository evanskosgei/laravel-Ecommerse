<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
xmlns:th="http://www.thymeleaf.org">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title>Admin  | Dashboard</title>

    <!-- Bootstrap core CSS -->

    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/lecStyle.css" rel="stylesheet">
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/assets/css/bootstrap.min.css.map" rel="stylesheet">
    <link href="admin/assets/css/bootstrap..min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/style.css">
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="/dashboard">Admin Panel</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/dashboard">Dashboard</a></li>
                    <!--<li><a href="/admin/stuResult"></a></li>-->
                    <li><a href="users.html">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#"  th:text="${userName}"></a></li>
                    <li><a href="{{route('admin.logout')}}">Logout</a></li>
                </ul>
            </div>
        </div>

    </nav>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage shop items</small></h1>
                </div>
                
            </div>
        </div>
    </header>
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">DashBoard</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active main-color-bg">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> DashBoard </a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">22</span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> SMS <span class="badge">64</span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Items <span class="badge">15 </span></a>
                    </div>
                    <div class="well">
                        <h4>My Items </h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                10%
                            </div>
                        </div>
                        <h4>Cartegories </h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                10%
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!--Website Overview--> 
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">My Shop </h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="badge" th:text="${countUsers}"></span></h2>
                                    <h5><a href="/itemshow"> Items</a></h5>
                                </div>
                            </div>
                            <div class="col-md-3 dash-box">
                                <div class="well">
                                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span class="badge" th:text="${countUnits}"></span></h2>
                                    <h5><a href="/addcategories">Add categories</a></h5>
                                </div>
                            </div>
                            <div class="col-md-3 dash-box">
                                <div class="well">
                                    <h2><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span class="badge" th:text="${countRooms}"></span></h2>
                                    <h5><a href="/addcountries">Country</a></h5> 
                                </div>
                            </div>
                            <div class="col-md-3 dash-box">
                                <div class="well">
                                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><span class="badge" th:text="${countDepartments}"></span></h2>
                                    <h5><a href="/addtypes">Item type</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
       
        <!--Footer-->
    
    <footer id="footer">
        <p>Copyright Kanga studios, &copy; 2021 </p>
    </footer>
    
  


    <script>
        CKEDITOR.replace('editor1');
    </script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/bootstrap.js"></script>
    <script src="admin/js/npm.js"></script>
</body>

</html>
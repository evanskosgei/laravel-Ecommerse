<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title>Admin  | Dashboard</title>

    <!-- Bootstrap core CSS -->

    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin/css/style.css">
    <link href="admin/css/lecStyle.css" rel="stylesheet">
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
                   
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Welcome Admin!</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>

    </nav>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Input item types </small></h1>
                </div>
                
            </div>
        </div>
    </header>
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/dashboard">Go Back</a></li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">

                    <!--Lates User-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Items type</h3>
                        </div>
                        <div class="panel-body">
                            <h1>Add Type</h1>
                            <br />
                           @if(Session::has('type_added'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('type_added')}}
                            </div>
                            @endif
                            
                            <form action="{{route('type.store')}}" class="row g-3" method="POST">
                                @csrf
                                 <div class="col-md-6">
                                    <label class="form-label" >Type code</label>
                                     <input type="text" name="typeCode" class="form-control" placeholder="Item type code eg cc" />   
                                 </div>
                                  <div class="col-md-12">
                                      <label class="form-label" >Item type Name</label>
                                      <input type="text" name="typeName" class="form-control" placeholder="Item type Name eg credit card"/>
                                    </div> 
                                    
                                    <div class="col-md-12" style="padding-top:10px">
                                    <button type="submit" class="btn btn-info">Save Details</button>
                                    </div>
                            </form>
                     
                        </div>
                    </div>
                </div>
            </div>
    
    </section>
       
        <!--Footer-->
    
    <footer id="footer">
        <p>Copyright Kamati, &copy; 2021 </p>
    </footer>
    
    <!--Modals-->

  

    <script>
        CKEDITOR.replace('editor1');
    </script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

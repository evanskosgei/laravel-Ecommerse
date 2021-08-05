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
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Shop items</small></h1>
                </div>
                
            </div>
        </div>
    </header>
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                 <li class="active"><a href="/dashboard">Back</a></li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
            
            			
            		<h4><a href="/additems">Add Items</a></h4>
                    <!--Lates User-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Items</h3>
                        </div>
                        <div class="panel-body">
                            <h1>Users</h1>
                           
                     <!--Lates User-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">List of items</h3>
                        </div>
                        @if(Session::has('item_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('item_deleted')}}
                            </div>
                            @endif
                        <div class="panel-body">
                             <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                          <th>Item image</th>
                                          <th>Item Name</th>
                                          <th>Item sell price</th>
                                          <th>Item balance</th>
                                          <th>country</th>
                                          <th>Item category</th>
                                          <th>Item type</th>
                                     </tr>
                                </thead>
                                <tbody>     
                                      @foreach($items as $item)
                                        <tr>
                                            
                                            <td><img src="{{asset('image')}}/{{$item->itemImage}}" style="max-width:60px;"/></td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->sellPrice}}</td>
                                            <td>{{$item->balance}}</td>
                                            <td>{{$item->country}}</td>
                                            <td>{{$item->category}}</td>
                                            <td>{{$item->type}}</td>
                                            <td>
                                            <a href="/edit-item/{{$item->id}}" class="btn btn-info">Edit</a>
                                            <a href="/delete-item/{{$item->id}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                   
                                </tbody>
                              </table>
                        </div>
                    </div>
                     
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
    <script src="admin/js/bootstrap.min.js"></script>
</body>

</html>

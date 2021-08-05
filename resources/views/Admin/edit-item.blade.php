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

    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/css/lecStyle.css" rel="stylesheet">
    <link href="../admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/assets/css/bootstrap.min.css.map" rel="stylesheet">
    <link href="../admin/assets/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin/css/style.css">
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
                    <li><a href="/logout">Logout</a></li>
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
                <li class="active"><a href="/itemshow">Go back</a></li>
            </ol>
        </div>
                    
                    <div class="card">
   
                        <div class="card-body">
                        @if(Session::has('item_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('item_updated')}}
                            </div>
                            @endif
                            <form method="POST" action="{{route('item.update')}}" enctype="multipart/form-data">
                                @csrf 
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{$item->name}}" class="form-control"/>
                                </div>
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <div class="form-group">
                                    <label for="name">Balance</label>
                                    <input type="text" name="balance" value="{{$item->balance}}" class="form-control"/>
                                </div>
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <div class="form-group">
                                    <label for="name">sell price</label>
                                    <input type="text" name="sellPrice" value="{{$item->sellPrice}}" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="file">choose profile image</label>
                                    <input type="file" name="file" class="form-control" onchange= "previewFile(this)"/>
                                    <img id="previewImg" alt="profile image" src="{{asset('image')}}/{{$item->profileimage}}" style="max-width:130px; margin-top:20px;"/>
                                </div>
                                <button type="submit" class="btn btn-primary">submit</button>
                            </form>
                    
                </div>
            </div>
        </div>
    </section>
       
        <!--Footer-->
    
    <footer id="footer">
        <p>Copyright Kanga studios, &copy; 2021 </p>
    </footer>

    <script>
        function previewFile(input){
            var file=$("input[type=file]").get(0).file[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src", reader.result)
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
    
  


    <script>
        CKEDITOR.replace('editor1');
    </script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../admin/js/bootstrap.min.js"></script>
    <script src="../admin/js/bootstrap.js"></script>
    <script src="../admin/js/npm.js"></script>
 
</body>

</html>
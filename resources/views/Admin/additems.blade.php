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
    <link rel="stylesheet" href="../admin/css/style.css">
    <link href="../admin/css/lecStyle.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>

    <script>
        function chkControl(j){
            total=0;
            for(i=0;i<document.form.ckb.length;i++){
                if(document.form.ckb[i].checked){
                   total=total+1; 
                }
            }
            if(total>1){
                alert("cant select more than 1")
                document.form.ckb[j].checked=false;
            }
            return false;
        }
    </script>
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
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Shop items</small></h1>
                </div>
                
            </div>
        </div>
    </header>
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active"><a href="/itemshow">Back</a></li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">

                    <!--Lates User-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add items and their categories</h3>
                        </div>
                        <div class="panel-body">
                            <h1>Add Items +Details</h1>
                            <br />
                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error')}}
                            </div>
                            @endif
                            @if(Session::has('item_added'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('item_added')}}
                            </div>
                            @endif
                            
                            <form class="row g-3" action="{{route('item.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                              
                                 <div class="col-md-12">
                           
                                        <label class="form-label" >item name</label>
                                            <input type="text" name="name" class="form-control" placeholder="item name" style="max-width:35%;"/>
                                 </div>   
                                    <div class="col-md-12">
                           
                                        <label class="form-label" >item Balance</label>
                                            <input type="text" name="balance" class="form-control" placeholder="item Balance in USSD" style="max-width:35%;"/>
                                    </div>
                                       <div class="col-md-4">
                                         <label class="form-label" >item sell price</label>
                                        <input type="text" name="sellPrice" class="form-control" placeholder="item new price" />
                                       
                                    <div class="col-md-8">
                                        <label class="form-label" >item country:</label>
                                        <select name="country" id="" class="form-control"> 
                                            @foreach($country as $row)
                                                <option value="{{$row->countryName}}">{{$row->countryName}}</option>
                                            @endforeach
                                         </select>
                                    </div>

                                    <div class="col-md-8">

                                        <label class="form-label" >item category:</label>
                                        <select name="category" class="form-control"> 
                                            @foreach($category as $row)
                                                <option value="{{$row->categoryName}}">{{$row->categoryName}}</option>
                                            @endforeach
                                         </select>
                                    </div>

                                    <div class="col-md-8">
                                        <label class="form-label" >Item type:</label>
                                        <select name="type" class="form-control"> 
                                            @foreach($type as $row)
                                            <option value="{{$row->typeName}}">{{$row->typeName}}</option>
                                            @endforeach
                                         </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">choose profile image</label>
                                        <input type="file" id="file" name="file" class="form-control" onchange= "#previewFile(this)"/>
                                        <img src="" id="previewImg" alt="profile image" style="max-width:130px; margin-top:20px;"/>
                                    </div>
                                    <br>
                                    <label for="feature">Feature this</label></br>
                                    <input type="radio" id="YES" name="feature" value="yes">
                                    <label for="YES">YES</label><br>
                                    <input type="radio" id="NO" name="feature" value="NO">
                                    <label for="NO">NO</label><br>
                                    
                                    <br>
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
<script>
    CKEDITOR.replace('editor1');
    </script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script>
        function previewFile(input){
            var file=$("input[type=file]").get(0).file[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $(' previewImg').attr("src", reader.result)
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>

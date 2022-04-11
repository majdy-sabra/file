<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD With Multiple Image Upload</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <style>
         .backgr{
             color = red;
         }
         .tiit {
             text-align : center;
             color:  #0000cc ;
         }
         .addo{
            color:  black ;
            background-color:blue;
            margin-left : 42vw;
         }
     </style>
    </head>
    <body style="background: rgb(87,87,91);
background: linear-gradient(90deg, rgba(87,87,91,1) 0%, rgba(216,216,230,1) 100%, rgba(0,212,255,1) 100%);">
        <div class="backgr">
        <div class="" style="margin: 100px;">
            <div class="">


                <div class=""></div>
                <div class="">
                    <h2 class="tiit"><b>Append a File !</b></h2>
				    <div class="form-group">
                        <form action="/post" method="post" enctype="multipart/form-data">
                         @csrf
        				 <input type="text" name="title" class="form-control m-2" placeholder="Name">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="Description"></Textarea>
                         <label class="m-2">File</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="img">
                        <div style="margin-left: 45vw;"><button type="submit" class="btn btn-outline-primary mt-3 center addo">Add</button></div>
                        </form>
                   </div>
                </div>
            </div>

</div>
         </body>
</html>










@extends('layouts.app')

 @section('content')
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add blog</button>



           

            <button class="btn btn-danger"  style="width:200px;"><a href="{{ url('home') }}" style="color:white;">Users</a></button>
            
          
          
            <div class="running">



              <title>Bootstrap Example</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
              <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
            </head>
            <body>
            
            <div class="container">
              <h2>Personal Blog</h2>
                        
              <table class="table">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>content</th>
                    <th>image</th>

                    @foreach ($articles as $article)
                        {{ $article->title }}
                        {{ $article->content }}
                        {{ $article->image }}
                          
               
                     @endforeach
                  </tr>
                  
               
                
             
                
              </table>
            </div>
            



               

          </div>
            <div id="id01" class="modal">

              
                 
           
                    {{-- another step for insert personal blog --}}
                    
                  
                  <form class="modal-content animate" method="POST" action="{{route('addblogdata')}}" enctype="multipart/form-data">
                  
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="form-control bg-danger" title="Close Modal" style="width:200px;color:white;font-size:20px;">&times;</span>
                      </div>

                      <div class="container">
                        <label for="uname"><b>title</b></label>
                         <input type="text" placeholder="Enter title" name="title" required>

                         <label for="psw"><b>Content</b></label>
                         <textarea type="text" rows='5' placeholder="Enter content" name="content" class="form-control">
                         </textarea>
                         <input type="file" id="myFile" name="filename">
                         <button type="submit">Submit</button>

                      

                      </div>
                  </form>

                 
                 

                  <script>
                  // Get the modal
                  var modal = document.getElementById('id01');

                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
      </div>
      
    </div>  

    
                  
                
              
               
                        
              
      
@endsection
                    
                
                  



        





      
                    
          
        
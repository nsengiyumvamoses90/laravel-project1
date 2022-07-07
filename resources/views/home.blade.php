@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add blog</button>
            <button class="btn btn-success" style="width:200px;"> <a href="{{ url('viewBlog') }}" style="color:white;"> View my blog</a></button>
            <div id="id01" class="modal">
            
            <form enctype="multipart/form-data" class="modal-content animate" action="{{route('addblogdata')}}">
                <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="form-control bg-danger" title="Close Modal" style="width:200px;color:white;font-size:20px;">&times;</span>
                </div>

                <div class="container">
                <label for="uname"><b>title</b></label>
                <input type="text" placeholder="Enter title" name="title" required>

                <label for="psw"><b>Content</b></label>
                <textarea type="text" rows='5' placeholder="Enter content" name="content" class="form-control">
                </textarea>
                
                <input type="file" name="image">

                <button type="submit">Submit</button>

                

                </div>
            </form>
            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>


            
            <div class="card">
                <table class="table table-bordered table-striped">
                    <thead>
                     <tr class="bg-success text-white">
                       
                       <th class="px-2 py-3 text-left">user</th>
                       <th class="px-2 py-3 text-left">email</th>
                       <th class="px-2 py-3 text-left">blog</th>
                       
                       

                     </tr>
                    </thead>
         
                   <tbody>
                       @foreach($data as $user)
                           <tr class="border-b">
                               
                               <td class="p-2 text-left">{{ $user->name }}</td>
                               <td class="p-2 text-left">{{ $user->email }}</td>
                               <td class="p-2 text-left"><a href="user_blog">blog</a></td>
                            
                           </tr>
                       @endforeach
                   </tbody>
                </table>        

         
            </div>
        </div>
    </div>
</div>
@endsection
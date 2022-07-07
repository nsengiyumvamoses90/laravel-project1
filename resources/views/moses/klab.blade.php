<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 
             
       <table class="w-full bg-white">
           <thead>
            <tr class="border-b-2">
              <
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
                      <td class="p-2 text-left">blog</td>
                  </tr>
              @endforeach
          </tbody>
       </table>

       
    </div>

</body>
</html>
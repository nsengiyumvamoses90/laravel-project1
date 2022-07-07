<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
<table class="w-full bg-white">
    <thead>
     <tr class="border-b-2">
       <th class="px-2 py-3 text-left">user</th>
       <th class="px-2 py-3 text-left">created by</th>
       <th class="px-2 py-3 text-left">Articles</th>
     </tr>
    </thead>

   <tbody>
       @foreach($users as user)
           <tr class="border-b">
               <td class="p-2 text-left">{{ $user->name }}</td>
               <td class="p-2 text-left">{{ $user->created_by }}</td>
               <td class="p-2 text-left">{{ $user->articles_count }}</td>
           </tr>
       @endforeach
   </tbody>
</table>
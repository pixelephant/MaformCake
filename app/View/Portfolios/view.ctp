<meta encoding="utf-8" />
<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>List Image</th>
        <th>Data</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

   <tr>
        <td><?php echo $portfolio['Portfolio']['id']; ?></td>
        <td><?php echo $portfolio['Portfolio']['name']; ?></td>
        <td><?php echo $portfolio['Portfolio']['description']; ?></td>
        <td><?php echo $portfolio['Portfolio']['list_image']; ?></td>
        <td><?php echo $portfolio['Portfolio']['data']; ?></td>
    </tr>

</table>
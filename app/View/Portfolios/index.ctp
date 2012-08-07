<meta encoding="utf-8" />
<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>List Image</th>
        <th>Data</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($portfolios as $post): ?>
    <tr>
        <td><?php echo $post['Portfolio']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Portfolio']['name'],
array('controller' => 'portfolios', 'action' => 'view', $post['Portfolio']['id'])); ?>
        </td>
        <td><?php echo $post['Portfolio']['description']; ?></td>
        <td><?php echo $post['Portfolio']['list_image']; ?></td>
        <td><?php echo $post['Portfolio']['data']; ?></td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Portfolio']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Portfolio']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<h2>記事一覧</h2>

<ul>
<?php foreach ($posts as $post) : ?> 
<li>
<?php
//debug($post);
//echo h($post['Post']['私']);
//
echo $this->Html->link($post['Post']['title'], '/posts/view/' .$post['Post']['id']);//記事のリンクは張れたがリンク先でエラー発生:リンクがヘルパーによってできてる
?>
<?php echo $this->Html->Link('編集', array('action'=>'edit', $post['Post']['id'])); ?>
<?php 
	echo $this->Form->postLink('削除', array('action'=>'delete', $post['Post']['id']), array('confirm'=>'sure?'));
	?>
</li>
<?php endforeach; ?>
</ul>

<h2>Add Post</h2>
<?php echo $this->Html->link('Add post', array('controller'=>'posts', 'action'=>'add'));
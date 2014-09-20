<h2>Add post</h2>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows'=>10)); //3やったら3行のフォームになる。
echo $this->Form->end('Save Post');
//リンクの作り方が慣れない。どういう構造？
//スペルが間違ってるケースが多い。スペルチェック大事！
/*できるようになったらソースコードを見てみる。
例、フォームタグのはずがインプットタグになっているという気づき。
*/
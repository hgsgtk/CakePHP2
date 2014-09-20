<?php

class Post extends AppModel{
	public $validate = array( //エラーチェックの文面。コメントの前は半角スペースにするように！
		'title' => array(
			'rule' => 'notEmpty',
			'message' => '空じゃダメだし'
			),
		'body' => array(
			'rule' => 'notEmpty'
			)
		);
}
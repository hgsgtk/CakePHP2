<?php

class PostsController extends AppController{
	//public $scaffold;
	public $helpers = array('Html', 'Form');

	public function index(){
		/*$params = array(
			'order' => 'modified desc',
			'limit' => 2
			);
			*/
		$this->set('posts', $this->Post->find('all'));
		$this->set('title_for_layout', '記事一覧');
	}

	public function view($id = null){
		$this->Post->id = $id; //データベースのキー設定ができていないのが問題:解決
		$this->set('post', $this->Post->read());
	}


	public function add(){ //unexpected 'public' (T_PUBLIC) という表示が現れる
		if($this->request->is('post')){
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash('Success!');
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('failed!');
			}
			
		}else{
			
		}
	}

	public function edit($id = null){
		$this->Post->id = $id;
		if($this->request->is('get')){
			$this->request->data = $this->Post->read();
		}else{
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash('success!');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('failed');
			}

		}
		}


	public function delete($id){
		if($this->request->is('get')){
			throw new MethodNotAllowedException();//エラーを返すやつらしい
		}
		if($this->Post->delete($id)){
			$this->Session->setFlash('Deleted.');
			$this->redirect(array('action'=>'index'));//-と=の違いは？
		}
	}
}	
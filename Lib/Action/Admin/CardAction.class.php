<?php


	/**
	* 
	*/
	
	
	
	class CardAction extends Action{
		
		private $_table;
		private $_action;
		
		public function _initialize(){
			checkAdmin();
			$this->_table = 'Cards';
			$this->_action = 'Card';
			
		}		
		
		function index(){
			$this->display();
		}
		
		public function getdata(){
			$sql = "SELECT c.id,c.email,c.phone,c.style,c.realname,m.username,ca.name
		FROM (members as m join cards as c on m.id=c.member_id) join categoires as ca on c.category_id = ca.id ";
			getDataWithSql($this->_table,$sql);
		}
		
		public function add(){
			$this->display();
		}
		
		public function create(){
			$member = D($this->_table);
			
			$member->create();
			
			if($member->add()){
				$this->redirect("{$this->_action}/index",'',3,'添加成功');
			}else{
				$this->redirect("{$this->_action}/index",'',3,'添加失败');
			}
		}
		
		
		public function edit(){
			$member = D($this->_table);
			$id = $this->_get('id');
			
			$row = $member->find($id);
			
			$this->assign('row',$row);
			$this->display();
		}
		
		public function update(){
			
			$member = D($this->_table);
			
			if($member->create()){
				//dump($_POST);
				if(!$member->save()){
					$this->redirect("{$this->_action}/index",'',3,'修改失败');
				}
				$this->redirect("{$this->_action}/index",'',3,'修改成功');
			}else{
				$this->error($member->errorInfo());
			}
		}
		public function destroy(){
			$member = D($this->_table);
			$id = $this->_get('id');
		
			if($member->delete($id)){
				$this->redirect("{$this->_action}/index",NULL,3,'删除成功');
			}else{
				$this->redirect("{$this->_action}/index",NULL,3,'删除失败');
			}
		}
	}
	

?>
<?php 
class reserveAction extends baseAction{
	function index(){
		//$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=company&a=add\', title:\'添加公司\', width:\'700px\', height:\'600px\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', '添加公司');
		$M = D('reserve');
		$list = $M->getlist();

		$ass['list']=$list['data'];
		//$ass['big_menu']=$big_menu;

		import('ORG.Util.Page');
		$Page = new Page($list['count'],$list['length']);
		$show = $Page->show();
		$ass['page'] = $show;

		$this->assign($ass);
		$this->display();
	}
	
	
	function status(){
		$id = (int) $_GET['id'];

		if (empty($id)) {
			$this->error('ID不能为空！');
		}

		$M = D('reserve');
		$status = intval($_GET['status']);
		$su = $M->status($id, array('status' => $status));
		if ($su['status'] == 1) {
			$this->success($su['msg']);
		} else {
			$this->error($su['msg']);
		}
	}

}

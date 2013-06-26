<?php 
class reserveModel extends Model{
	protected $trueTableName = 'yjl_reserve';
	
	public function addnew($param) {
		return parent::add($param);
	}	


}

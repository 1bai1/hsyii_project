<?php
class Clublist extends BaseModel {
  
    public function tableName()
    {
        return '{{clublist}}'; // 社区列表';
 }
    /*** Returns the static model of the specified AR class. */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /**  * 模型关联规则  */
    public function relations() {
        return array();
    }
    /*** 模型验证规则*/
    public function rules() {
      return $this->attributeRule();
    }
    /** * 属性标签 */
    public function attributeLabels() {
        return $this->getAttributeSet();
    }
    public function attributeSets() {
      $rs=array(
        'id' => '内部ID',
        'club_code' => '社区编码',
        'club_name' =>'社区名称',
        'club_logo_pic' => '社区图标',
        'apply_club_gfnick' => '法人名称',
        'apply_club_id_card' => '身份证号',
        'apply_club_phone' => '联系电话',
        'apply_club_email' => '电子邮箱',
        ) ;
        return $rs;
    }
    
    protected function afterFind(){
      parent::afterFind();
  
    }
    //保存图片时候 删除图片前面的路径
    protected function beforeSave(){
      parent::beforeSave();
        return true;
    }
 //  public function picLabels() {
  //      return '';//subpic';
  ///  }  
   //public  function pathLabels(){
   ///    return '';//articles
  // }
  
   /* 用于列表查询使用，三个参数分别是  1 条件 2 是排序 三是或取值，格式 变量[：变量]*/
    public function keySelect(){
      return array('1','club_code','club_name');
    }

}
   
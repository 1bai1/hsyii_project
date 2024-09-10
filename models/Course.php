
<?php
class Course extends BaseModel {
  
    
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

    public function tableName()
    {
        return '{{Course}}'; //课程表;
 }
    public function attributeSets() {
      $rs=array(
       'id' => 'ID',
        'f_code' =>'编码:k',
        'f_name'  => '名称:k',
 'f_memo'  =>  '备注',
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
      return array('1','F_CODE','F_NAME');
    }

}
   
<?php
/** 
* @author      lnc2014
* @date 2015-4-24 下午4:46:29 
*	后台公共的控制器
*
*/ 
class BaseAdminController extends CController{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 * 后台布局文件的使用
	 */
	public $layout='//layouts/admin';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	/**
	 * 后台一些常量的定义
	 * @var $adminPath
	 */
	protected $adminPath;//后台静态资源路径
	protected $mengfeiVersion = 'MengfeiSHOP 1.0';//梦飞商城版本号
    /**
	 * 初始化
	 * @see CController::init()
	 */
    public function init ()
    {
    	$this->adminPath = Yii::app()->baseUrl.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'admin';
    }
    
    /**
     * 重写createUrl方法
     * 如果存在aliasName参数默认追加，避免每次都传递aliasName参数
     */
    public function createUrl($route, $params = array(), $ampersand = '&') {
    	if(isset($_GET['aliasName']) && !isset($params['aliasName'])) {
    		$params=array_merge($params,array('aliasName'=>$_GET['aliasName']));
    	}
    	return parent::createUrl($route,$params,$ampersand);
    }
}
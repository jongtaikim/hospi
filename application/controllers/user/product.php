<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 * @property CI_Benchmark $benchmark
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Exceptions $exceptions
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Hooks $hooks
 * @property CI_Image_lib $image_lib
 * @property CI_Input $input
 * @property CI_Language $language
 * @property CI_Loader $load
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Router $router
 * @property CI_Session $session
 * @property CI_Sha1 $sha1
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit_test
 * @property CI_Upload $upload
 * @property CI_URI $uri
 * @property CI_User_agent $user_agent
 * @property CI_Validation $validation
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 *
 * Add additional libraries you wish
 * to use in your controllers here
 *
 * @property Accounts_model $Accounts_model
 * @property auth $auth
 *
 */
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */
/**
* 작성일: 2012-03-13
* 작성자: 김종태
* 설   명: 사이트 유저 페이지
*****************************************************************
* 
*/
class product extends CI_Controller {
	


	 var $SUB_LAYOUT =  "@sub";
	 var $site_menu="";
	 var $PERM="";

	 function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('cookie');
		$_SESSION = $this->session->all_userdata();
		$tpl = $this->display;
	
		//메뉴 불러오기
		$this->load->model('user/menu');
		$this->load->model('user/mdl_member');
		$this->site_menu = $this->menu->load_tree();
		
		$tpl->assign(array('site_menu_list'=>$this->site_menu));
		
		$this->load->library('permission');
		$this->PERM =$this->permission;
	}

    function view($seq){
    //    error_reporting(E_ALL & ~E_NOTICE);
        $WA = $this->webapp;
        $tpl = $this->display;
        $DB = $this->db;

        $cache_file = "./application/views/product/product_".$seq.".html";

        //아직 주간일수가 남았다면 캐시 이용하지 말고 바로 출력



        $row = $this->menus();

        for($ii=0; $ii<count($row); $ii++) {

            for($i=0; $i<count($row[$ii]['sub']); $i++) {
                if($row[$ii]['sub'][$i]['idx'] == $seq){
                    $category = $row[$ii]['sub'][$i]['카테고리'];
                }
            }
        }


        $tpl->assign('category',$category);

        $tpl->assign('menu_LIST',$row);
        $tpl->assign('seq',$seq);
	  
        $sql = "select * from product_data where idx = '".$seq."'  ";
        $data = $this->db-> sqlFetch($sql);


        $tpl->assign($data);

	  $datat['menu_location'] = " > 제품소개 >  ".$data['카테고리']." > ".$data['상품명'];

        $datat['menu_title'] = "제품 상세보기";
        $tpl->assign($datat);

        if(!is_file($cache_file) ) {

        if(!$_SESSION[USERID]){
           // WebApp::moveBack('로그인이 필요합니다.');
            //exit;
        }



        $tpl->setLayout('@sub');
        $tpl->define('CONTENT', $this->display->getTemplate('product/view.html'));

        

        $content = $this->display->fetch('CONTENT');
        /*@unlink($cache_file);
        $fp = fopen($cache_file,'w');
        fwrite($fp,$content);
        fclose($fp);*/

        }else{

            //$content =  file_get_contents($cache_file);

            $tpl->setLayout('@sub');
            $tpl->define('CONTENT', $cache_file);

            $this->display->assign('cache_y','y');

        }
        $tpl->printAll();

    }

    public function menu(){
        $sql = "SELECT 카테고리  FROM `product_data` group by 카테고리 order by idx asc;";
        $row = $this->db-> sqlFetchAll($sql);

        for($ii=0; $ii<count($row); $ii++) {
            $sql = "SELECT idx, 카테고리 , 상품명 ,상품명1 ,상품명2  FROM `product_data` where 카테고리 = '".$row[$ii]['카테고리']."' order by idx asc;";

            $row[$ii]['sub'] = $this->db-> sqlFetchAll($sql);



            for($i=0; $i<count($row[$ii]['sub']); $i++) {
                if($row[$ii]['sub'][$i]['idx'] == $seq){
                    $category = $row[$ii]['sub'][$i]['카테고리'];
                }
            }
        }

        for($ii=0; $ii<count($row); $ii++) {
        	echo '$config[\'menu\']['.$ii.'][\'카테고리\']="'.$row[$ii]['카테고리'].'"; <br>';
            for($i=0; $i<count($row[$ii]['sub']); $i++) {
                echo '$config[\'menu\']['.$ii.'][\'sub\']['.$i.'][\'idx\']="'.$row[$ii]['sub'][$i]['idx'].'"; <br>';
                echo '$config[\'menu\']['.$ii.'][\'sub\']['.$i.'][\'카테고리\']="'.$row[$ii]['sub'][$i]['카테고리'].'"; <br>';
                echo '$config[\'menu\']['.$ii.'][\'sub\']['.$i.'][\'상품명\']="'.$row[$ii]['sub'][$i]['상품명'].'"; <br>';
                echo '$config[\'menu\']['.$ii.'][\'sub\']['.$i.'][\'상품명2\']="'.$row[$ii]['sub'][$i]['상품명2'].'"; <br>';
                echo '$config[\'menu\']['.$ii.'][\'sub\']['.$i.'][\'상품명3\']="'.$row[$ii]['sub'][$i]['상품명3'].'"; <br>';
            }
        }


    }

    public function menus(){
        $this->config->load('product_menu');
        $row = $this->config->item('menu');
        return $row;
    }
	 


}

/* End of file member.php */
/* Location: ./application/controllers/member.php */
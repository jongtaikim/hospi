<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */
/**
* 작성일: 2012-03-13
* 작성자: 김종태
* 설   명: 사이트 유저 페이지
*****************************************************************
*
*/
class page extends CI_Controller {



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
		$this->site_menu = $this->menu->load_tree();

		$tpl->assign(array('site_menu_list'=>$this->site_menu));

		$this->load->library('permission');
		$this->PERM =$this->permission;

		if($_GET[cate]) {
			$_cate = $_GET[cate];
			while(strlen($_cate = substr($_cate,0,-2)) > 1) {
				$_location[] = $this->db->sqlFetchOne("SELECT str_title FROM ".tab_menu." WHERE num_oid="._OID." AND num_cate=$_cate");
			}
			$_location[] = '';
			$menu_location = implode(' > ',array_reverse($_location));
			$tpl->assign(array(
				'menu_location' => $menu_location,
			));
		$menu_title = $this->db->sqlFetchOne("SELECT str_title FROM ".tab_menu." WHERE num_oid="._OID." AND num_cate='".$_GET[cate]."'");
		$tpl->assign(array('menu_title'=>$menu_title));
		}

	}



	  //2012-02-21 메인페이지
	   function index(){
		$WA = $this->webapp;
		$tpl = $this->display;
		$this->db =  $this->db;

		$this->load->library('iniconf');
		$this->load->helper('file');

		$sql = "select * from tab_board where num_mcode = '1315' order by dt_date desc limit 5  ";
		$row = $this->db -> sqlFetchAll($sql);
		$tpl->assign(array('gong_LIST'=>$row));


		$site_data = @parse_ini_file(_DOC_ROOT.'/application/config/'.THEME.'/site_config.php',true);

		$tpl->assign(array(
			'popup_start'=>$site_data[popup_start],
			'popup_end'=>$site_data[popup_end],
			'popup_use'=>$site_data[popup_use],
		 ));


		if($site_data[popup_start] <= date("Y-m-d") && $site_data[popup_end] >= date("Y-m-d")){

			 if(is_file(_DOC_ROOT.'/data/docs/popup.html')){
				$contents = read_file(_DOC_ROOT.'/data/docs/popup.html');
			 }else{
				$contents ="";
			 }
			$sect = "popup/popup";
			$tpl->assign(array(
				'popup_contents'=>$contents,
				'sect'=>$sect,
			 ));
		}


           $this->config->load('product_menu');
           $rows = $this->config->item('menu');

     /*      $sql = "SELECT idx  FROM `product_data`  where idx in (13,14,15,1,2,17,18,19)  order by 순서 asc";
           $row = $this->db-> sqlFetchAll($sql);
           print_r($row);
           for($ii=0; $ii<count($row); $ii++) {
               echo $row[$ii][idx].",";
           }
           echo 111;
           exit;*/
		   $row = array(1,2,15,13,14,17,18,19);

           $ia = 0;
           for($ii=0; $ii<count($row); $ii++) {
               for($i=0; $i<count($rows); $i++) {
                    for($ib=0; $ib<count($rows[$i]['sub']); $ib++) {
                        if($row[$ii] == $rows[$i]['sub'][$ib]['idx']){
                            $row2[$ia] = $rows[$i]['sub'][$ib];
                            $ia++;
                        }
                    }

               }

           }


           $tpl->assign('main_LIST',$row2);


		$tpl->setLayout('@main');
		$tpl->define('CONTENT', $this->display->getTemplate(THEME.'/main.htm'));
		$tpl->printAll();

	  }


	/**
	 *
	 * 404 처리
	 * @return	object	$mcode
	 * @return	void
	 */

	function go404(){
		if(ENVIRONMENT == "development"){
			show_404('page');
		}else{
			echo "<meta http-equiv='Refresh' Content=\"0; URL='/'\">";
			exit;
		}
	}

	/**
	 *
	 * 웹페이지 출력
	 * @return	object	$mcode
	 * @return	void
	 */

	   function doc($mcode=''){
		$WA = $this->webapp;
		$tpl = $this->display;
		$this->db =  $this->db;

		if($mcode){
			
			if($_SERVER[HTTP_HOST] == "hospi.it-company.kr" || $_SERVER[HTTP_HOST] == "hospi.co,kr"){
				if($mcode=="1410"){
					echo "<meta http-equiv='Refresh' Content=\"0; URL='/user/ctl_online/list_view/1410?cate=1410&db_title=s1'\">";
					exit;
				}

				if($mcode=="1411"){
					echo "<meta http-equiv='Refresh' Content=\"0; URL='/user/ctl_online/list_view/1411?cate=1411&db_title=s2'\">";
					exit;
				}

				if($mcode=="1413"){
					echo "<meta http-equiv='Refresh' Content=\"0; URL='/user/ctl_online/list_view/1413?cate=1413&db_title=s4'\">";
					exit;
				}
			}

			//메뉴데이터
			$data = $this->menu->load_menu_data($mcode);

			$this->PERM->apply('menu',$mcode,'r');

			$data[mcode] = $mcode;
			$tpl->assign($data);

			if(!$data[str_layout]) $data[str_layout] = "@sub";
			$tpl->setLayout($data[str_layout]);


			if($_SESSION[ADMIN]){
				$edit_btn = '<div class="" style="margin:30px auto;width:100px"><a href="/admin/menu_adm/menu_docs/'.$mcode.'?cate='.$_GET[cate].'" class="btn btn-sm  btn-info  m-r10">웹페이지 편집</a></div>';
				$tpl->assign(array('edit_btn'=>$edit_btn));
			}

			$tpl->printAll();



			}else{
				$this->go404();
			}

	  }


	  /**
	 *
	 * 빈메뉴 하위 첫번째 메뉴로 이동
	 * @return	object	$mcode
	 * @return	void
	 */
	  function blank_menu($mcode){
		 if($mcode){
			//메뉴데이터
			$data = $this->menu->load_menu_data_sub($_GET[cate]);
			if($data[menu_url]){
				echo "<meta http-equiv='Refresh' Content=\"0; URL='".$data[menu_url]."'\">";
				exit;
			}else{
				$this->go404();
			}
		 }else{
			$this->go404();
		 }
	  }





	 function sitemap_view(){
		$tpl = $this->display;
		$tpl->setLayout('@sub');
		$tpl->define('CONTENT', $this->display->getTemplate(THEME.'/sitemap.htm'));
		$tpl->printAll();
	}


	 function introduce($type='policy'){
		$tpl = $this->display;
		$tpl->setLayout('@sub');

		$tpl->assign(array('type'=>$type));

		$tpl->define('CONTENT', $this->display->getTemplate(THEME.'/introduce.htm'));
		$tpl->printAll();
	}

	 function consult(){
		$tpl = $this->display;
		$tpl->setLayout('@sub');

		$tpl->assign(array('type'=>$type));

		$tpl->define('CONTENT', $this->display->getTemplate(THEME.'/consult.htm'));
		$tpl->printAll();
	}








}

/* End of file sub.php */
/* Location: ./application/controllers/sub.php */

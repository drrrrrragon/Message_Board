<?php
    class Message extends CI_Controller{
        //构造函数，重写，提前装载
        public function __construct()
        {
            parent::__construct();
            $this->load->model('message_model','msg');
            $this->load->helper('url_helper');
            $this->load->helper('url');
        }

        //主页，展示留言板内容
        public function index()
        {
            $data['list']=$this->msg->get_message();
            $data['title']='Message Board';
            $id=0;
            $data['id']=$id;

            $this->load->view('templates/header',$data);
            $this->load->view('message/board',$data);
            $this->load->view('templates/footer');
        }

        //获得某一行数据，很鸡肋，若简化url输入，可修改/application/config/routes.php
        public function view($id=NULL)
        {
            $data['list']=$this->msg->get_message($id);
            $data['title']='Message Board';
            $num=0;
            $data['id']=$num;

            if(empty($data['list']))
            {
                show_404();
            }

            $data['title']=$data['list'][0]->name;

            $this->load->view('templates/header',$data);
            $this->load->view('message/board',$data);
            $this->load->view('templates/footer');
        }

        //增加页
        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title']='Add';

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','email','required');

            if($this->form_validation->run()===FALSE)
            {
                $this->load->view('templates/header',$data);
                $this->load->view('message/create');
                $this->load->view('templates/footer'); 
            }
            else
            {
                $this->msg->set_message();
                redirect('/message/index');
            }
        }
        
        //实现删除功能
        public function delete($id)
        {
            $bool=$this->msg->delete_message($id);
            if($bool)
            {
                redirect('/message/index');
            }
            else
            {
                show_404();
            }
        }

        //更新页
        public function update($id=FALSE)
        {
            //错误原因：$id第二次没有传递，为FALSE，要在view中传
            //思考：完整性检测在CI中还是在Bootstrap中
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title']='Update';
            $data['id']=$id;
            $data['list']=$this->msg->get_message($id);
            
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required');
            if($this->form_validation->run()===FALSE)
            {
                $this->load->view('templates/header',$data);
                $this->load->view('message/update',$data);
                $this->load->view('templates/footer');
            }
            else
            {
                $bool=$this->msg->update_message($id);
                if($bool)
                {
                    redirect('/message/index');
                }
                else 
                {
                    show_404();
                }
                
            }
        }

    }

?>
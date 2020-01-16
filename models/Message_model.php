<?php
    class Message_model extends CI_Model{
        //构造函数，由于基类没有，不用重写
        public function __construct()
        {
            $this->load->database();
        }

        // 从数据库中获取某条数据或者全部数据
        public function get_message($id=FALSE)
        {
            if($id==FALSE)
            {
                $res=$this->db->get('message');
                return $res->result();
            }

            $res=$this->db->get_where('message',array('id' => $id));
            //只获取一行用row()，但show.php就不能用foreach了
            //为了统一视图，用result()，注意是个二维数组，控制器要$data['list'][0]->name
            return $res->result();
        }

        //向数据库插入增加的数据
        public function set_message()
        {
            $this->load->helper('url');
            $data=array(
                'name'=>$this->input->post('name'),
                'email'=>$this->input->post('email'),
                'content'=>$this->input->post('content'),
            );
            return $this->db->insert('message',$data);
        }

        //删除某条数据
        public function delete_message($id=FALSE)
        {
            $bool=0;
            if($id!=FALSE)
            {
                $bool=$this->db->delete('message',array('id' => $id));
            }
            return $bool;
        }

        //更新某条数据
        public function update_message($id=FALSE)
        {
            $bool=0;
            $data=array(
                'name'=>$this->input->post('name'),
                'email'=>$this->input->post('email'),
                'content'=>$this->input->post('content'),
            );
            if($id!=FALSE)
            {
                $bool=$this->db->update('message', $data, array('id' => $id));
            }   
            return $bool;
        }
        
    }


?>
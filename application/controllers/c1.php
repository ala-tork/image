<?php
    class C1 extends CI_Controller
    {

        function affiche ()
        {
            $this->load->model("crud");
            $data['data']=$this->crud->get();
            $this->load->view('const/header');
            $this->load->view('affiche',$data);
            $this->load->view('const/footer');
        }
        function index ()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            
            
            $this->load->view("const/header");
            $this->load->view("page1");
            $this->load->view("const/footer");
            

        }
        function insert_img()
        {
            $this->load->model('crud');
            $this->load->library('upload');
            if($this->input->post('submit'))
            {
                $fullname=$this->input->post('fullname');
                $email=$this->input->post('email');
                // var_dump($email); die();
                 // get image
                 $config['upload_path'] = './picture';
                 $config['allowed_types'] = 'jpg|png|jpeg|gif';
                 $config['max_size'] = '2048';  //2MB max
                 $config['max_width'] = '4480'; // pixel
                 $config['max_height'] = '4480'; // pixel
                 $config['file_name'] = $_FILES['image']['name'];
                 $this->upload->initialize($config);

                 if (!empty($_FILES['image']['name'])) 
                 {
                    if ( $this->upload->do_upload('image') ) 
                    {
                        $img = $this->upload->data();
                        $data = array(
                                      'fullname'       => $fullname,
                                      'email'     => $email,
                                    'img'       => $img['file_name'],
                                    );
                        $this->crud->insert($data);
                      redirect("C1/affiche","refresh");
                      
                    }
                    else{ echo "<script> alert('we cant save the image'); </script>";}
                    
                 }
                 else{ echo "<script> alert('pls shose a pick'); </script>";}
            }
        }
        function update($id)
        {   
            $this->load->model('crud');
            $data['data']=$this->crud->get_id($id);
            
            $this->load->view('const/header');
            $this->load->view('update',$data);
            $this->load->view('const/footer');
        }
        function update_img()
        {
            $id=$this->uri->segment(3);
            
            $this->load->model('crud');
            $this->load->library('upload');
            if($this->input->post('submit'))
            {
                $fullname=$this->input->post('fullname');
                $email=$this->input->post('email');
                // var_dump($email); die();
                 // get image
                 $config['upload_path'] = './picture';
                 $config['allowed_types'] = 'jpg|png|jpeg|gif';
                 $config['max_size'] = '2048';  //2MB max
                 $config['max_width'] = '4480'; // pixel
                 $config['max_height'] = '4480'; // pixel
                 $config['file_name'] = $_FILES['image']['name'];
                 $this->upload->initialize($config);

                 if (!empty($_FILES['image']['name'])) 
                 {
                    if ( $this->upload->do_upload('image') ) 
                    {
                        $img = $this->upload->data();
                        $data = array(
                                        'id'         =>$id,
                                      'fullname'       => $fullname,
                                      'email'     => $email,
                                    'img'       => $img['file_name'],
                                    );
                        $this->crud->update($data);
                        echo "<script> alert(' update success'); </script>";
                      redirect("C1/affiche","refresh");
                      
                    }
                    else{ echo "<script> alert('we cant update the image'); </script>";}
                    
                 }
                 else{ echo "<script> alert('pls shose a pick'); </script>";
                    redirect("C1/update/".$id,"refresh");
                    }
            }  
        }
        public function delete($id)
        {
            $this->load->model('crud');
            $data['data']=$this->crud->get_id($id);
            
            $this->load->view('const/header');
            $this->load->view('delete',$data);
            $this->load->view('const/footer');

        }
        public function delete_img($id)
        {
            $this->load->model('crud');
            $this->crud->delete_id($id);
            redirect('c1/affiche',"refresh");

        }

    }
?>
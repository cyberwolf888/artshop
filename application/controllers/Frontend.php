<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('users');
        $this->load->model('categoryModel');
        $this->load->library('cart');
    }

    public function index()
    {
        $this->load->model('productModel');
        $model = $this->productModel->getLastest(30)->result();
        $this->load->view('frontend/home',[
            'script'=>'frontend/page_script/home_script',
            'model'=>$model
        ]);
    }

    public function login()
    {
        if($this->users->isLogedIn()){
            if($this->session->type==1){
                redirect('/member');
            }elseif($this->session->type==2){
                redirect('/petugas');
            }elseif($this->session->type==3){
                redirect('/pengerajin');
            }elseif($this->session->type==4){
                redirect('/admin');
            }
        }

        $this->load->library('form_validation');
        if($this->input->post('email')){
            $login = $this->users->login($this->input->post('email'),$this->input->post('password'));
            if($login){
                $this->session->set_flashdata('success', 'Login success!');
                redirect('/login');
            }else{
                $this->session->set_flashdata('error', 'Email or password did not match!');
                redirect('/login');
            }
        }else{
            $this->load->view('frontend/login');
        }

    }

    public function register()
    {
        if($this->users->isLogedIn()){
            if($this->session->type==1){
                redirect('/member');
            }elseif($this->session->type==2){
                redirect('/petugas');
            }elseif($this->session->type==3){
                redirect('/pengerajin');
            }elseif($this->session->type==4){
                redirect('/admin');
            }
        }

        $this->load->library('form_validation');

        if($this->input->post('email')){
            $this->load->model('member');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('fullname', 'Full Name', 'required|min_length[5]|max_length[100]');
            $this->form_validation->set_rules('no_hp', 'No. Telp', 'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('alamat', 'Address', 'required|min_length[5]|max_length[100]');
            $this->form_validation->set_rules('kode_pos', 'Postal Code', 'required|min_length[4]|max_length[5]');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('frontend/register');
            }
            else{
                $user_id = $this->users->insert_member();
                $this->member->insert($user_id);
                $this->session->set_flashdata('success', 'Your account has been succesfully created!');
                redirect('/login');
            }
        }else{
            $this->load->view('frontend/register');
        }
    }

    public  function product($id)
    {
        //die(print_r($this->cart->contents()));
        $this->load->model('productModel');
        $this->load->model('productDetailModel');
        $this->load->model('productImagesModel');

        $model = $this->productModel->find($id)->result()[0];
        if(!$model){
            redirect('/');
        }
        $detail = $this->productDetailModel->findByProduct($model->id)->result();
        $images = $this->productImagesModel->getAll($model->id)->result();
        $category = $this->categoryModel->find($model->categories_id)->result()[0];
        $related = $this->productModel->getByCategory($category->id,4)->result();

        $this->load->view('frontend/product',[
            'script'=>'frontend/page_script/product_script',
            'model'=>$model,
            'details'=>$detail,
            'images'=>$images,
            'category'=>$category,
            'related'=>$related
        ]);
    }

    public function category($id)
    {
        $this->load->model('productModel');

        $category = $this->categoryModel->find($id)->result()[0];
        if(!$category){
            redirect('/');
        }
        $product = $this->productModel->getByCategory($category->id);

        $this->load->view('frontend/category',[
            'category'=>$category,
            'product'=>$product->result(),
            'qproduct'=>$product
        ]);
    }

    public function hotitem()
    {
        $this->load->model('productModel');

        $product = $this->productModel->getHotItem();

        //die(var_dump($product->result()));
        $this->load->view('frontend/hotitem',[
            'product'=>$product->result(),
            'qproduct'=>$product
        ]);
    }

    public function cart()
    {
        $this->load->model('productImagesModel');
        $this->load->view('frontend/cart',[
            'script'=>'frontend/page_script/cart_script',
        ]);
    }

    public function checkout()
    {
        $this->load->model('productImagesModel');
        if($this->cart->total_items()==0){
            redirect(base_url('/'));
        }
        $this->load->view('frontend/checkout');
    }

    public function search()
    {
        $this->load->view('frontend/search');
    }

    public function faq()
    {
        $this->load->view('frontend/faq');
    }

    public function contact()
    {
        $this->load->view('frontend/contact');
    }

    public function about()
    {
        $this->load->view('frontend/about');
    }

    public function logout()
    {
        $this->users->logout();
        redirect('/');
    }

    public function addCart()
    {
        if(isset($_POST['product_id'])){
            $this->load->model('productModel');
            $this->load->model('productImagesModel');

            $product_id = $_POST['product_id'];
            $qty = 1;
            if(isset($_POST['qty'])){
                $qty = $_POST['qty'];
            }

            $model = $this->productModel->find($product_id)->result();

            if($model){
                $model = $model[0];
                $price = $model->price;
                if($model->discount>0){
                    $price = $price - ($price*$model->discount/100);
                }
                $data = array(
                    'id'      => $product_id,
                    'qty'     => $qty,
                    'price'   => $price,
                    'name'    => $model->name,
                );

                if($this->cart->insert($data)){
                    $image = $this->productImagesModel->getOneByProduct($product_id)->result()[0];
                    $response = ['status'=>1,'total_item'=>$this->cart->total_items(),'name'=>$model->name,'price'=>$price,'image'=>$image->image];
                    echo json_encode($response);
                }else{
                    echo json_encode(['status'=>0]);
                }
            }

        }
    }

    public function updateCart()
    {
        $rowid = $_POST['rowid'];
        $qty = $_POST['qty'];

        $data = array(
            'rowid' => $rowid,
            'qty'   => $qty
        );

        $this->cart->update($data);
    }

    public function delCart($id)
    {
       $this->cart->remove($id);
        redirect(base_url('cart'));
    }

    public function getCart()
    {
        $this->load->model('productImagesModel');
        foreach ($this->cart->contents() as $key=>$row){

            $image = $this->productImagesModel->getOneByProduct($row['id'])->result()[0];

            echo '<tr>
                <td class="product-thumbnail">
                    <a href="'.base_url('product/'.$row['id']).'">
                        <img width="100" height="100" alt="" class="img-responsive" src="'.base_url('images/product/'.$row['id'].'/mini_'.$image->image) .'">
                    </a>
                </td>
                <td class="product-name">
                    <a href="'.base_url('product/'.$row['id']).'">'.$row['name'].'<br><span class="amount"><strong>Rp '.number_format($row['price'],0,',','.').'</strong></span></a>
                </td>
            </tr>';


        }
    }

}

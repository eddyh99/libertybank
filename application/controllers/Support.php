<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Support extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('user_id'))) {
            redirect(base_url('/'));
        }
    }

    public function index()
    {
        $data = array(
            "title"             => NAMETITLE . ' - Support',
            "content"           => "member/support/index",
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function topup()
    {        
        $userid = array(
            "userid" => $_SESSION["user_id"]
        );

        $url = URLAPI . "/v1/member/currency/getActiveCurrency";
        $currency = apitrackless($url, json_encode($userid));
        // print_r(json_encode($currency->message));
        // die;

        
        $data = array(
            "title"             => NAMETITLE . ' - Support',
            "content"           => "member/support/support_topup",
            "extra"             => "member/support/js/js_support",
            "currency"          => $currency->message,
        );

        $this->load->view('tamplate/wrapper', $data);
    }

    public function topup_proses()
    {
        $this->form_validation->set_rules('receiverucode', 'Unique Code Receiver', 'trim|required');
        $this->form_validation->set_rules('date', 'Date', 'trim|required');
        $this->form_validation->set_rules('currency', 'Currency', 'trim|required');
        $this->form_validation->set_rules('amount', 'Total amount', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url("support/topup"));
            return;
        }

        $input                  = $this->input;
        $receiverucode          = $this->security->xss_clean($input->post("receiverucode"));
        $date                   = $this->security->xss_clean($input->post("date"));
        $currency               = $this->security->xss_clean($input->post("currency"));
        $amount                 = $this->security->xss_clean($input->post("amount"));
        $description            = $this->security->xss_clean($input->post("description"));
        $email                  = $_SESSION['email'];

        $dateformat = date_format(date_create($date), "m-d-Y");


        // $config['allowed_types']        = 'jpg|png|jpeg';
        // $config['max_size']             = 1024000;
		// $config['overwrite']            = true;

        $file_tmp  = $_FILES['logo']['tmp_name'];
        $file_name = $_FILES['logo']['name'];

        // print_r($file_tmp);
        // print_r($file_name);
        // die;

        // $this->load->library('upload', $config);

        // if ( ! $this->upload->do_upload('logo')){
    	//     $this->session->set_flashdata("failed",$this->upload->display_errors());
        //     redirect(base_url('support/topup'));
        //     return;
        // }
        // else{
        //     $data   = $this->upload->data();
            
            $mdata = array(
                "receiverucode"     => $receiverucode, 
                "date"              => $dateformat, 
                "currency"          => $currency,
                "ammount"           => $amount,
                "description"       => $description,
                "logo"              => $data['file_name']
            );

            // $dirfile = FCPATH.'qr/banktf/' . $data['file_name'];

            // print_r(json_encode($mdata));
            // die;


            // if (@$result->code != 200) {
            //     $this->session->set_flashdata('failed', "Failed to submit data");
            //     redirect(base_url('support/topup'));
            //     return;
            // }
            // print_r("test");
            // die;
            
            $message = "
            Case                   : <b>Top up</b> <br>
            Unique Code Receiver   : <b>" . $receiverucode . "</b><br>
            Date                   : <b>" . $dateformat . "</b> <br>
            Currency               : <b>" . $currency . "</b> <br>
            Total Amount           : <b>" . $amount . " " . $currency . "</b> <br>
            Description            : <b>" . $description . "</b><br>
            "
            ;
            
            send_email_support_topup($email, $message, $file_tmp, $file_name, $this->phpmailer_lib->load());
            
            $this->session->set_flashdata("success", "Message successfully sent!");
            redirect(base_url("support"));
        }

    // }
}
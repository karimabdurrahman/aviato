

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controller_curl extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->library('cart');
    $this->load->helper('url');
  }

  public function shops(){

//  Calling cURL Library
    $this->load->library('Curl');

//  Setting URL To Fetch Data From
    $this->curl->create('http://128.199.140.179:5011/api/products');

//  To Temporarily Store Data Received From Server
    $this->curl->option('buffersize', 10);

//  To support Different Browsers
    $this->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');

//  To Receive Data Returned From Server
    $this->curl->option('returntransfer', 1);

// //  To follow The URL Provided For Website
// $this->curl->option('followlocation', 1);
//
// //  To Retrieve Server Related Data
// $this->curl->option('HEADER', true);
//
// //  To Set Time For Process Timeout
// $this->curl->option('connecttimeout', 600);

//  To Execute 'option' Array Into cURL Library & Store Returned Data Into $data
    $data = $this->curl->execute();
//  To Display Returned Data
// echo $data;
    $myArray = json_decode($data, true);
    $data2["produts"]=$myArray;
    $this->load->view("aviato/shop",$data2);

  }

  public function homepage(){

//  Calling cURL Library
    $this->load->library('Curl');

//  Setting URL To Fetch Data From
    $this->curl->create('http://128.199.140.179:5011/api/products');

//  To Temporarily Store Data Received From Server
    $this->curl->option('buffersize', 10);

//  To support Different Browsers
    $this->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');

//  To Receive Data Returned From Server
    $this->curl->option('returntransfer', 1);

// //  To follow The URL Provided For Website
// $this->curl->option('followlocation', 1);
//
// //  To Retrieve Server Related Data
// $this->curl->option('HEADER', true);
//
// //  To Set Time For Process Timeout
// $this->curl->option('connecttimeout', 600);

//  To Execute 'option' Array Into cURL Library & Store Returned Data Into $data
    $data = $this->curl->execute();
//  To Display Returned Data
// echo $data;
    $myArray = json_decode($data, true);
    $data2["produts"]=$myArray;
    $this->load->view("aviato/index",$data2);

  }

  public function shopsidebar(){

//  Calling cURL Library
    $this->load->library('Curl');

//  Setting URL To Fetch Data From
    $this->curl->create('http://128.199.140.179:5011/api/products');

//  To Temporarily Store Data Received From Server
    $this->curl->option('buffersize', 10);

//  To support Different Browsers
    $this->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');

//  To Receive Data Returned From Server
    $this->curl->option('returntransfer', 1);

// //  To follow The URL Provided For Website
// $this->curl->option('followlocation', 1);
//
// //  To Retrieve Server Related Data
// $this->curl->option('HEADER', true);
//
// //  To Set Time For Process Timeout
// $this->curl->option('connecttimeout', 600);

//  To Execute 'option' Array Into cURL Library & Store Returned Data Into $data
    $data = $this->curl->execute();
//  To Display Returned Data
// echo $data;
    $myArray = json_decode($data, true);

    // usort($myArray, function($a, $b) {
    // return $a['price'] <=> $b['price'];
    // });
    //
    $data2["produts"]=$myArray;
// print_r($myArray);
    $this->load->view("aviato/shop-sidebar",$data2);
  }

  public function shopsidebar_htl(){
    //  Calling cURL Library
        $this->load->library('Curl');

    //  Setting URL To Fetch Data From
        $this->curl->create('http://128.199.140.179:5011/api/products');

    //  To Temporarily Store Data Received From Server
        $this->curl->option('buffersize', 10);

    //  To support Different Browsers
        $this->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');

    //  To Receive Data Returned From Server
        $this->curl->option('returntransfer', 1);

    // //  To follow The URL Provided For Website
    // $this->curl->option('followlocation', 1);
    //
    // //  To Retrieve Server Related Data
    // $this->curl->option('HEADER', true);
    //
    // //  To Set Time For Process Timeout
    // $this->curl->option('connecttimeout', 600);

    //  To Execute 'option' Array Into cURL Library & Store Returned Data Into $data
        $data = $this->curl->execute();
    //  To Display Returned Data
    // echo $data;
        $myArray = json_decode($data, true);

        usort($myArray, function($a, $b) {
        return $b['price'] <=> $a['price'];
        });

        $data2["produts"]=$myArray;
    // print_r($myArray);
        $this->load->view("aviato/shop-sidebar_htl",$data2);

  }

  public function shopsidebar_lth(){
    //  Calling cURL Library
        $this->load->library('Curl');

    //  Setting URL To Fetch Data From
        $this->curl->create('http://128.199.140.179:5011/api/products');

    //  To Temporarily Store Data Received From Server
        $this->curl->option('buffersize', 10);

    //  To support Different Browsers
        $this->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');

    //  To Receive Data Returned From Server
        $this->curl->option('returntransfer', 1);

    // //  To follow The URL Provided For Website
    // $this->curl->option('followlocation', 1);
    //
    // //  To Retrieve Server Related Data
    // $this->curl->option('HEADER', true);
    //
    // //  To Set Time For Process Timeout
    // $this->curl->option('connecttimeout', 600);

    //  To Execute 'option' Array Into cURL Library & Store Returned Data Into $data
        $data = $this->curl->execute();
    //  To Display Returned Data
    // echo $data;
        $myArray = json_decode($data, true);

        usort($myArray, function($a, $b) {
        return $a['price'] <=> $b['price'];
        });

        $data2["produts"]=$myArray;
    // print_r($myArray);
        $this->load->view("aviato/shop-sidebar_lth",$data2);

  }
  public function shopsidebar_terbaru(){
    //  Calling cURL Library
        $this->load->library('Curl');

    //  Setting URL To Fetch Data From
        $this->curl->create('http://128.199.140.179:5011/api/products');

    //  To Temporarily Store Data Received From Server
        $this->curl->option('buffersize', 10);

    //  To support Different Browsers
        $this->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');

    //  To Receive Data Returned From Server
        $this->curl->option('returntransfer', 1);

    // //  To follow The URL Provided For Website
    // $this->curl->option('followlocation', 1);
    //
    // //  To Retrieve Server Related Data
    // $this->curl->option('HEADER', true);
    //
    // //  To Set Time For Process Timeout
    // $this->curl->option('connecttimeout', 600);

    //  To Execute 'option' Array Into cURL Library & Store Returned Data Into $data
        $data = $this->curl->execute();
    //  To Display Returned Data
    // echo $data;
        $myArray = json_decode($data, true);

        usort($myArray, function($a, $b) {
        return $b['id'] <=> $a['id'];
        });

        $data2["produts"]=$myArray;
    // print_r($myArray);
        $this->load->view("aviato/shop-sidebar_terbaru",$data2);

  }
  public function search(){
    //  Calling cURL Library
        $this->load->library('Curl');

    //  Setting URL To Fetch Data From
        $this->curl->create('http://128.199.140.179:5011/api/products');
    //  To Temporarily Store Data Received From Server
        $this->curl->option('buffersize', 10);
    //  To support Different Browsers
        $this->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');

    //  To Receive Data Returned From Server
        $this->curl->option('returntransfer', 1);

    // //  To follow The URL Provided For Website
    // $this->curl->option('followlocation', 1);
    //
    // //  To Retrieve Server Related Data
    // $this->curl->option('HEADER', true);
    //
    // //  To Set Time For Process Timeout
    // $this->curl->option('connecttimeout', 600);

    //  To Execute 'option' Array Into cURL Library & Store Returned Data Into $data
        $data = $this->curl->execute();
    //  To Display Returned Data
    // echo $data;
        $myArray = json_decode($data, true);

        $search = $this->input->post('search');

        //$myArray2 = array_keys(array_column($myArray, 'id'), $search);
        $myArray2 = array_keys(array_combine(array_keys($myArray), array_column($myArray, 'name')),$search);
        // usort($myArray, function($a, $b) {
        // return $b['id'] <=> $a['id'];
        // });
        $data2["produts"]=$myArray2;

        print_r(array_values($myArray2));

        // $this->load->view("aviato/shop-search",$data2);

  }

    public function tambahCart($id){

      $dataProd = array('id' => $id);
      $this->cart->insert($dataProd);
      redirect('controller_curl/shops');
    }



}
?>

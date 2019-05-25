<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class SingleCustomerController extends Controller
{

  public function __construct() {
    $this->API = new Client(['base_uri' => 'http://lpapi.test/']);
    $this->dbName = "lpclient";
  }

  //Adds Customer
  public function AddCustomer(Request $request) {
    $requestParams = $request->all();
    $requestParams['dbName'] = $this->dbName;
    $this->API->request('POST', "/customers/addcustomer", [
       'form_params' => $requestParams
    ]);

  }

  //Show details for single customer
  public function ShowSingleCustomer($customerid) {

      $tabs = $this->API->request('GET', "/singlecustomer/getTabs");
      $tabs = json_decode($tabs->getBody(), true);
      $tabs_links = $tabs['response'];

    //  $tabs_links['links'][] = ['button_color' => 'btn-warning', 'data_target' => '#add_email', 'fa' => 'fa-location-arrow'];

      //$tabs_links['tabs'][] = ['tab_name' => 'foo', 'tab_href' => '#tab-info', 'class' => 'active'];


      //$tabs['response'][] = ['tab_name' => 'foo', 'tab_href' => '#foo', 'class' => ''];


      $singleCustomer = $this->API->request('GET', "/singlecustomer", [
         'query' => ['dbName' => $this->dbName,
                      'id' => $customerid ]
      ]);

      $singleCustomer = json_decode($singleCustomer->getBody());

      return view('single_customer', ['single_customer' => $singleCustomer->response,
                                      'form_type' => "edit",
                                      'tabs_links' => $tabs_links
                                    ]);

  }


}

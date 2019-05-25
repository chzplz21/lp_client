<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CustomersController extends Controller
{

  public function __construct() {

    $this->API = new Client(['base_uri' => 'http://lpapi.test/']);
    $this->dbName = "lpclient";
  }

  public function GetAll() {


    //Gets header for customers table
    $customers_header = $this->API->request('GET', "customers/header");
    $customers_header = json_decode($customers_header->getBody(), true);
    $customers_header = $customers_header['response'];
    
    $customers_header['column_names'][] = 'fax number';


    //Gets all customers
    $allCustomers = $this->API->request('GET', "customers", [
       'query' => ['dbName' => $this->dbName]
    ]);
    $allCustomers = json_decode($allCustomers->getBody());

    return view('customers', ['customers_header' => $customers_header,
                              'allCustomers' => $allCustomers->response,
                              'form_type' => "create"
                            ]);

  }



}

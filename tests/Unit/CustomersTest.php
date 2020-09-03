<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\SingleCustomer;
use Illuminate\Http\Request;

class CustomersTest extends TestCase
{


    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testStore() {

       
        $this->call('POST', '/customers', 
        [   
            'name' => 'rim',
            'phone_number' => '70'
    
        ]);

        
        $this->assertDatabaseHas('customers', [
            'name' => 'rim',
            'phone_number' => "70"
        ]);

    }

    public function testUpdate()
    {   
       
        
        $this->call('PUT', '/customers/57', 
        [   
            'name' => 'zinn',
            'phone_number' => '4'
    
        ]);
        
        $this->assertDatabaseHas('customers', [
            'name' => 'zinn',
            'phone_number' => "4"
        ]);
        
        
    }


}

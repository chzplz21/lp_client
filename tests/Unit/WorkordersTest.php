<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorkordersTest extends TestCase
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

    public function testAll() {
        $this->call('GET', '/workorders', []);
        
    }


    public function testCreate() {
        $this->call('POST', '/workorders/create', 
        [   
          'customerid' => '4'
    
        ]);
        
        $this->assertDatabaseHas('workorders', [
            'customerid' => '4'
        ]);

    }

    public function testEdit() {
        $this->call('POST', '/workorders/edit/1', 
        [   
          'customerid' => '7'
    
        ]);
        
        $this->assertDatabaseHas('workorders', [
            'customerid' => '7'
        ]);

    }

    public function testDestroy() {
        $this->call('POST', '/workorders/1/destroy', 
        [   
          'id' => '1'
    
        ]);
        
        /*
        $this->assertDatabaseHas('workorders', [
            'customerid' => '7'
        ]);
        */

    }


    public function testSingleTab() {
        $this->call('get', '/workorders/1/info_tab', 
        [ ]);
        

        /*
        
        $this->assertDatabaseHas('workorders', [
            'customerid' => '7'
        ]);
        */

    }

}

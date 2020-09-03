<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LineItemsTest extends TestCase
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
        
        print_r("sdfo");
        $this->call('POST', '/lineitems/add_new_lineitem', 
        [   
            'name' => "red",
            'cost' => 8
    
        ]);
        
        /*
        $this->assertDatabaseHas('schedule', [
            'doc_type' => "estimates"
        ]);
        */

    }



    public function testAddToDoc() {
        
        $this->call('POST', '/lineitems/add_lineitem_to_doc', 
        [   
            'doc_type' => "sick",
            'lineitem_id' => 5
    
        ]);
        
        /*
        $this->assertDatabaseHas('schedule', [
            'doc_type' => "estimates"
        ]);
        */

    }


    public function testUpdateDoc() {
        
        $this->call('POST', '/lineitems/update_lineitem_in_doc', 
        [   
            'doc_type' => "zoo",
            'id' => 1,
            'lineitem_id' => 9
    
        ]);
        
        /*
        $this->assertDatabaseHas('schedule', [
            'doc_type' => "estimates"
        ]);
        */

    }

    public function testDeleteDoc() {
        
        $this->call('POST', '/lineitems/delete_lineitem_in_doc', 
        [   
            'doc_type' => "zoo",
            'id' => 1,
            'lineitem_id' => 9
    
        ]);
        
        /*
        $this->assertDatabaseHas('schedule', [
            'doc_type' => "estimates"
        ]);
        */

    }

}

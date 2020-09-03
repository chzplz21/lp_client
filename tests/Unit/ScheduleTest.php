<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ScheduleTest extends TestCase
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
        
        $this->call('POST', '/schedule', 
        [   
            'doc_type' => "sick",
            'users' => [2,3]
    
        ]);
        
        /*
        $this->assertDatabaseHas('schedule', [
            'doc_type' => "estimates"
        ]);
        */

    }

    public function testUpdate()
    {   
       
        
        $this->call('PUT', '/schedule/8', 
        [   
            'start_time' => 5,
            'end_time' => 6,
            'doc_type' => 'workorders',
            'doc_id' => 10,
            'users' => [2,3]
    

        ]);
        
        /*
        $this->assertDatabaseHas('schedule', [
            'start_time' => 5,
            'end_time' => 6,
            'doc_type' => 'workorders',
            'doc_id' => 10,
        ]);
        */
        
    }

    public function testDestroy()
    {   
       
        print("yo");
        
        $this->call('DELETE', '/schedule/9', 
        [   
            'start_time' => 5,
            'end_time' => 6,
            'doc_type' => 'workorders',
            'doc_id' => 10,
            'users' => [2,3]
    

        ]);
        
        /*
        $this->assertDatabaseHas('schedule', [
            'start_time' => 5,
            'end_time' => 6,
            'doc_type' => 'workorders',
            'doc_id' => 10,
        ]);
        */
        
    }
}

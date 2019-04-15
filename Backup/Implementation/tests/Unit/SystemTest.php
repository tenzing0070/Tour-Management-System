<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SystemTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


public function testLogin()
    {

	    $username="john";
	    $password="john1234";

	    $response = $this->call("GET",'/login',[
	    	'username'=>$username,
	    	'password' => $password
	    ]);

	    $this->assertEquals(200,$response->status());

    }


  public function testRegister()
    {
    	$response = $this->call("POST",'/register',[
    		'name' => "john",
    		'address' => "newyork",
    		'phone' => "999999999",
    		'nationality'=>"nepali",
    		'username'=>"john",
    		'email'=>"john@hotmail.com",
    		'password'=>"john1234",
    		
	    ]);

	    $this->assertEquals(302,$response->status());
    }

 public function testGallery()
    {
    	$response = $this->call('GET', '/tms/gallery');

    	$this->assertEquals(200,$response->status());
    }

public function testPackage()
    {
    	$response = $this->call('GET', '/tms/package');

    	$this->assertEquals(200,$response->status());
    }

public function testContact()
    {
    	$response = $this->call('GET', '/tms/contact');

    	$this->assertEquals(200,$response->status());
    }


public function testsearch()
    {
    	$response = $this->call('GET', '/tms/package');

    	$this->assertEquals(200,$response->status());
    }

public function testRegisteredUsers()
    {
    	$response = $this->call('GET', '/tms/print/users');

    	$this->assertEquals(200,$response->status());
    }

public function testPictureAdmin()
    {
    	$response = $this->call('GET', '/tms/pictureAdmin');

    	$this->assertEquals(200,$response->status());
    }

public function testpackageData()
    {
    	$response = $this->call('GET', '/tms/packageData');

    	$this->assertEquals(200,$response->status());
    }


  public function testEditProfile()
    {
    	$response = $this->call("GET",'/tms/editProfile',[
    		'name' => "john",
    		'address' => "newyork",
    		'phone' => "999999999",
    		'nationality'=>"nepali",
    		'email'=>"john@hotmail.com",
    		
    		
	    ]);

	    $this->assertEquals(200,$response->status());
    }

}

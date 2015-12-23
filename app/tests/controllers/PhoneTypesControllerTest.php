<?php 

class PhoneTypesControllerTest extends TestCase{
	public function testIndex()
	{
		$response = $this->call('GET','phoneTypes');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET','phoneTypes/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET','phoneTypes/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET','phoneTypes/1/edit');
		$this->assertTrue($response->isOk());
	}
}
<?php 

class PhoneTypesControllerTest extends TestCase{
	public function testIndex()
	{
		$response = $this->call('GET','phonetypes');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET','phonetypes/7');
		$this->assertTrue($response->isOk());
	}

	public function testCreateGet()
	{
		$response = $this->call('GET','phonetypes/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET','phonetypes/7/edit');
		$this->assertTrue($response->isOk());
	}

	public function testCreatePost()
	{
		$response = $this->call('POST','phonetypes',array('name' => 'İş'));
		$this->assertRedirectedToRoute('phonetypes.index');
	}

	public function testUpdatePut()
	{
		$response = $this->call('PUT','phonetypes/3',array('name' => 'Hadi ordan!'));
		$this->assertRedirectedToRoute('phonetypes.index');
	}

	public function testDestroyDelete()
	{
		$response = $this->call('DELETE','phonetypes/4');
		$this->assertRedirectedToRoute('phonetypes.index');
	}
}
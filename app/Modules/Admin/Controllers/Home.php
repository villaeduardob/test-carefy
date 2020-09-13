<?php

namespace App\Modules\Admin\Controllers;

class Home extends BaseController
{
	private $apiKey;
	private $token;

	public function __construct()
	{
		$this->apiKey	= '5489e149f5efcbb29236f57e22d66854';
		$this->token	= '84c255e4fe90f85c2b5a2bab497d1b3f8f2df2e12baec5b09bfb2ae11a45f0d2';
	}

	public function index()
	{
		# this url define speific target for guzzle
		$url = 'https://api.trello.com/1/members/me/boards?key=' . $this->apiKey . '&token=' . $this->token;

		# guzzle client define
		$client = new \GuzzleHttp\Client();

		$boards = NULL;

		try {
			
			# guzzle get request example with form parameter
			$response = $client->request('GET', $url, ['form_params' => ['processId' => '2']]);
			if ($response->getStatusCode() == 200) {

				$arrResponse = json_decode($response->getBody(), true);
				foreach ($arrResponse as $key => $data) {

					$boards[$key] = $data['name'];

				}

				$data = [
					'title'		=> 'Boards',
					'view'		=> 'admin/boards',
					'boards'	=> $boards
				];

				return view('template/layout', $data);

			}

		} catch (\GuzzleHttp\Exception\BadResponseException $e) {
			
			#guzzle repose for future use
			$response = $e->getResponse();
			$responseBodyAsString = $response->getBody()->getContents();
			print_r($responseBodyAsString);
		
		}
	}
}

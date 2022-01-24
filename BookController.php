<?php
namespace App\Controller;

use App\Controller\AppController;

class BookController extends AppController {

	public function index() {
		if ($this->request->isPost()){
			$find = $this->request->getData()['Book']['find'];
			$condition = [
				'conditions' => ['genreID like' => $find],
				'order' => ['Book.sales' => 'desc']
			];
			$data = $this->Book->find('all', $condition);
		} else {
			$data = $this->Book->find('all',
				['order' => ['Book.sales' => 'desc']]
			);
		}
		$this->set('data', $data);
		}
	}
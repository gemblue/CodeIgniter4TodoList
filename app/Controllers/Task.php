<?php namespace App\Controllers;

class Task extends BaseController
{
	public $task;

	public function __construct()
	{
		$this->task = new \App\Models\Task;
		$this->task->orderBy('id', 'desc');
	}

	public function index()
	{
		return view('task', ['task' => $this->task->paginate(10), 'pager' => $this->task->pager]);
	}

	public function edit($id)
	{
		return view('task_form', ['task' => $this->task->find($id)]);
	}

	public function update()
	{
		$this->task->save($this->request->getPost());
		$this->session->setFlashdata('message', '<div style="background:#2ecc71;color:#FFF;padding:10px;margin-top:10px; margin-bottom:10px;">Updated ..</div>');
		
		return redirect()->to(site_url('task'));
	}

	public function insert()
	{
		$this->task->save($this->request->getPost());

		return redirect()->back();
	}

	public function delete($id)
	{
		$this->task->delete($id);
		$this->session->setFlashdata('message', '<div style="background:#2ecc71;color:#FFF;padding:10px;margin-top:10px; margin-bottom:10px;">Deleted ..</div>');
		return redirect()->back();
	}

	public function uncheck(int $id)
	{
		$this->task->save(['id' => $id, 'is_done' => false]);

		return redirect()->back();
	}

	public function check(int $id)
	{
		$this->task->save(['id' => $id, 'is_done' => true]);

		return redirect()->back();
	}
}
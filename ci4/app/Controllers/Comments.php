<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Comments extends BaseController
{
    public function index()
    {
        $model = model(CommentsModel::class);

		$data = [
            'comments'  => $model->getComments(),
            'title' => 'Guestbook',
        ];

        return view('templates/header', $data)
             . view('comments/index')
             . view('templates/footer');
    }
	
	public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a comments entry'])
                . view('comments/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'surname', 'email', 'subject', 'message']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'name' => 'required|max_length[255]|min_length[3]',
            'surname' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',			
            'subject'  => 'required|max_length[5000]|min_length[3]',
            'message' => 'required|max_length[5000]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Add a comments entry'])
                . view('comments/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'name' => $post['name'],
            'surname'  => $post['surname'],
            'email'  => $post['email'],
            'subject'  => $post['subject'],
            'messasge'  => $post['message'],
        ]);

        return view('templates/header', ['title' => 'Add a comments Entry'])
            . view('comments/success')
            . view('templates/footer');
    }
}	
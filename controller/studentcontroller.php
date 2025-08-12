<?php

class StudentController {
    protected $model;

    public function __construct() {
        $this->model = new Students();
    }

    public function index(): array {
        return $this->model->all();
    }

    public function show(int $id) {
        return $this->model->find($id);
    }

    public function store(array $input) {
        // basic validation
        $name = trim($input['name'] ?? '');
        $mobile = trim($input['mobile'] ?? '');

        if ($name === '' || $mobile === '') {
            throw new Exception('Name and mobile are required.');
        }

        $data = [
            'name' => $name,
            'address' => $input['address'] ?? null,
            'mobile' => $mobile,
            'age' => isset($input['age']) ? (int)$input['age'] : null,
            'parent_contact' => $input['parent_contact'] ?? null
        ];

        return $this->model->create($data);
    }

    public function update(int $id, array $input) {
        $data = [
            'name' => trim($input['name'] ?? ''),
            'address' => $input['address'] ?? null,
            'mobile' => $input['mobile'] ?? null,
            'age' => isset($input['age']) ? (int)$input['age'] : null,
            'parent_contact' => $input['parent_contact'] ?? null
        ];
        return $this->model->update($id, $data);
    }

    public function delete(int $id) {
        return $this->model->softDelete($id);
    }
}

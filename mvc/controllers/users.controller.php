<?php

class UsersController extends Controller
{
    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->model = new User();
    }

    public function admin_login()
    {
        if ($_POST) {
            $errors = [];

            if (empty($_POST['login'])) {
                $errors[] = 'Login is required';
            }

            if (empty($_POST['password'])) {
                $errors[] = 'Password is required';
            }

            if (empty($errors)) {
                $user = $this->model->getByLogin($_POST['login']);
                $hash = md5(Config::get('salt').$_POST['password']);
                if (!empty($user) && $user['password'] == $hash) {
                    Session::set('user', $user['login']);
                    Router::redirect('/admin');
                } else {
                    Session::setFlash('Login or password is wrong');
                }
            } else {
                Session::setFlash('Validation errors:<br>'.implode('<br>', $errors));
            }
        }
    }

    public function admin_logout()
    {
        Session::clear('user');
        Router::redirect('/admin');
    }

    public function admin_index()
    {
        $this->data['users'] = $this->model->getList();
    }

    public function admin_edit()
    {
        if ($_POST) {
            $errors = [];

            if (empty($_POST['login'])) {
                $errors[] = 'Login is required';
            }

            if (empty($_POST['email'])) {
                $errors[] = 'Email is required';
            }

            if (empty($_POST['role'])) {
                $errors[] = 'Role is required';
            }

            if (empty($_POST['password'])) {
                $_POST['password'] = null;
            }

            if (empty($errors)) {
                if ($this->model->save($_POST, $_POST['id'])) {
                    Session::setFlash('User was edited');
                } else {
                    Session::setFlash('DB error! User was not saved');
                }
                Router::redirect('/admin/users');
            } else {
                Session::setFlash('Validation errors:<br>'.implode('<br>', $errors));
            }
        }

        if (isset($this->params[0])) {
            $id = (int) $this->params[0];
            $this->data['user'] = $this->model->getById($id);
        } else {
            Session::setFlash('Empty user ID');
            Router::redirect('/admin/users');
        }
    }

    public function admin_add()
    {
        if ($_POST) {
            $errors = [];

            if (empty($_POST['login'])) {
                $errors[] = 'Login is required';
            }

            if (empty($_POST['email'])) {
                $errors[] = 'Email is required';
            }

            if (empty($_POST['role'])) {
                $errors[] = 'Role is required';
            }

            if (empty($_POST['password'])) {
                $errors[] = 'Password is required';
            }

            if (empty($errors)) {
                if ($this->model->save($_POST)) {
                    Session::setFlash('User was created');
                } else {
                    Session::setFlash('DB error! User was not saved');
                }
                Router::redirect('/admin/users');
            } else {
                Session::setFlash('Validation errors:<br>'.implode('<br>', $errors));
            }
        }
    }
}
<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Illuminate\Database\Capsule\Manager as DB;

class UserController {
    public function getAllUsers(Request $request, Response $response, $args) {
        $users = DB::table('users')->get();
        return $response->withJson($users);
    }

    public function getUser(Request $request, Response $response, $args) {
        $id = $args['id'];
        $user = DB::table('users')->find($id);
        return $response->withJson($user);
    }

    public function createUser(Request $request, Response $response, $args) {
        $data = $request->getParsedBody();
        $user = DB::table('users')->insert($data);
        return $response->withJson($user);
    }

    public function updateUser(Request $request, Response $response, $args) {
        $id = $args['id'];
        $data = $request->getParsedBody();
        $user = DB::table('users')->where('id', $id)->update($data);
        return $response->withJson($user);
    }

    public function deleteUser(Request $request, Response $response, $args) {
        $id = $args['id'];
        $user = DB::table('users')->where('id', $id)->delete();
        return $response->withJson($user);
    }
}

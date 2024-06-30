use App\Controllers\UserController;

$app->get('/users', UserController::class . ':getAllUsers');
$app->get('/users/{id}', UserController::class . ':getUser');
$app->post('/users', UserController::class . ':createUser');
$app->put('/users/{id}', UserController::class . ':updateUser');
$app->delete('/users/{id}', UserController::class . ':deleteUser');

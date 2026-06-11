<?php

$uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Remove base path when running in a subdirectory (e.g. /shapepro/public)
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
if ($basePath && strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}

// Remove trailing slash
$uri = rtrim($uri, '/') ?: '/';

// =============================================
// ROTAS PÚBLICAS
// =============================================
$routes = [
    'GET'  => [
        '/'                     => ['LandingController', 'index'],
        '/landing'              => ['LandingController', 'index'],
        '/login'                => ['AuthController', 'showLogin'],
        '/logout'               => ['AuthController', 'logout'],
        '/register'             => ['AuthController', 'showRegister'],
        '/forgot-password'      => ['AuthController', 'showForgot'],
    ],
    'POST' => [
        '/landing/lead'         => ['LandingController', 'storeLead'],
        '/login'                => ['AuthController', 'login'],
        '/register'             => ['AuthController', 'register'],
        '/forgot-password'      => ['AuthController', 'forgot'],
    ],
];

// =============================================
// ADMIN
// =============================================
$routes['GET']['/admin']                     = ['AdminController', 'dashboard'];
$routes['GET']['/admin/trainers']            = ['AdminController', 'trainers'];
$routes['GET']['/admin/trainers/create']     = ['AdminController', 'createTrainer'];
$routes['POST']['/admin/trainers/store']     = ['AdminController', 'storeTrainer'];
$routes['GET']['/admin/trainers/edit']       = ['AdminController', 'editTrainer'];
$routes['POST']['/admin/trainers/update']    = ['AdminController', 'updateTrainer'];
$routes['POST']['/admin/trainers/toggle']    = ['AdminController', 'toggleTrainer'];
$routes['GET']['/admin/plans']               = ['AdminController', 'plans'];
$routes['POST']['/admin/plans/store']        = ['AdminController', 'storePlan'];
$routes['GET']['/admin/exercises']           = ['AdminController', 'exercises'];
$routes['GET']['/admin/logs']                = ['AdminController', 'logs'];
$routes['GET']['/admin/settings']            = ['AdminController', 'settings'];
$routes['POST']['/admin/settings']           = ['AdminController', 'saveSettings'];

// =============================================
// TRAINER
// =============================================
$routes['GET']['/dashboard']                 = ['TrainerController', 'dashboard'];
$routes['GET']['/students']                  = ['StudentController', 'index'];
$routes['GET']['/students/create']           = ['StudentController', 'create'];
$routes['POST']['/students/store']           = ['StudentController', 'store'];
$routes['GET']['/students/show']             = ['StudentController', 'show'];
$routes['GET']['/students/edit']             = ['StudentController', 'edit'];
$routes['POST']['/students/update']          = ['StudentController', 'update'];
$routes['POST']['/students/delete']          = ['StudentController', 'delete'];

$routes['GET']['/assessments/create']        = ['AssessmentController', 'create'];
$routes['POST']['/assessments/store']        = ['AssessmentController', 'store'];
$routes['GET']['/assessments/show']          = ['AssessmentController', 'show'];

$routes['GET']['/exercises']                 = ['ExerciseController', 'index'];
$routes['GET']['/exercises/create']          = ['ExerciseController', 'create'];
$routes['POST']['/exercises/store']          = ['ExerciseController', 'store'];
$routes['GET']['/exercises/show']            = ['ExerciseController', 'show'];
$routes['GET']['/exercises/edit']            = ['ExerciseController', 'edit'];
$routes['POST']['/exercises/update']         = ['ExerciseController', 'update'];

$routes['GET']['/workouts']                  = ['WorkoutController', 'index'];
$routes['GET']['/workouts/create']           = ['WorkoutController', 'create'];
$routes['POST']['/workouts/store']           = ['WorkoutController', 'store'];
$routes['GET']['/workouts/show']             = ['WorkoutController', 'show'];
$routes['GET']['/workouts/edit']             = ['WorkoutController', 'edit'];
$routes['POST']['/workouts/update']          = ['WorkoutController', 'update'];
$routes['POST']['/workouts/activate']        = ['WorkoutController', 'activate'];
$routes['GET']['/workouts/templates']        = ['WorkoutController', 'templates'];

$routes['GET']['/checkins']                  = ['CheckinController', 'index'];
$routes['GET']['/checkins/show']             = ['CheckinController', 'show'];
$routes['POST']['/checkins/review']          = ['CheckinController', 'review'];

$routes['GET']['/alerts']                    = ['AlertController', 'index'];
$routes['POST']['/alerts/resolve']           = ['AlertController', 'resolve'];

$routes['GET']['/radar']                     = ['RadarController', 'index'];

$routes['GET']['/reports']                   = ['ReportController', 'index'];
$routes['GET']['/reports/generate']          = ['ReportController', 'generate'];
$routes['POST']['/reports/store']            = ['ReportController', 'store'];
$routes['GET']['/reports/show']              = ['ReportController', 'show'];

$routes['GET']['/whatsapp']                  = ['WhatsappController', 'index'];
$routes['POST']['/whatsapp/store']           = ['WhatsappController', 'store'];
$routes['POST']['/whatsapp/update']          = ['WhatsappController', 'update'];

$routes['GET']['/financial']                 = ['FinancialController', 'index'];
$routes['POST']['/financial/store']          = ['FinancialController', 'store'];
$routes['POST']['/financial/update']         = ['FinancialController', 'update'];

$routes['GET']['/copilot']                   = ['CopilotController', 'index'];
$routes['POST']['/copilot/generate']         = ['CopilotController', 'generate'];

$routes['GET']['/habits']                    = ['HabitController', 'trainerIndex'];
$routes['POST']['/habits/store']             = ['HabitController', 'store'];

// =============================================
// ALUNO
// =============================================
$routes['GET']['/my']                        = ['StudentAreaController', 'dashboard'];
$routes['GET']['/my/workout']                = ['StudentAreaController', 'workout'];
$routes['GET']['/my/exercise']               = ['StudentAreaController', 'exercise'];
$routes['POST']['/my/log']                   = ['StudentAreaController', 'logExercise'];
$routes['GET']['/my/checkin']                = ['StudentAreaController', 'checkinForm'];
$routes['POST']['/my/checkin']               = ['StudentAreaController', 'submitCheckin'];
$routes['GET']['/my/progress']               = ['StudentAreaController', 'progress'];
$routes['GET']['/my/habits']                 = ['StudentAreaController', 'habits'];
$routes['POST']['/my/habits/log']            = ['StudentAreaController', 'logHabit'];
$routes['GET']['/my/photos']                 = ['StudentAreaController', 'photos'];
$routes['GET']['/my/doubts']                 = ['StudentAreaController', 'doubts'];
$routes['POST']['/my/doubts/store']          = ['StudentAreaController', 'storeDoubt'];

// =============================================
// DISPATCH
// =============================================
$handler = $routes[$method][$uri] ?? null;

if (!$handler) {
    // Tentar rotas com query string (ex: /students/show?id=1)
    $uriClean = strtok($uri, '?');
    $handler  = $routes[$method][$uriClean] ?? null;
}

if ($handler) {
    [$controllerClass, $action] = $handler;
    $file = ROOT . '/app/controllers/' . $controllerClass . '.php';
    if (file_exists($file)) {
        require_once $file;
        $ctrl = new $controllerClass();
        $ctrl->$action();
    } else {
        http_response_code(500);
        echo "Controller não encontrado: $controllerClass";
    }
} else {
    http_response_code(404);
    require ROOT . '/app/views/partials/404.php';
}

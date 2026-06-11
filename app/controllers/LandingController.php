<?php

require_once ROOT . '/app/models/LandingLeadModel.php';

class LandingController extends Controller {

    public function index(): void {
        $this->view('landing.index', [
            'pageTitle' => 'ShapePro IA — Plataforma Inteligente para Personal Trainers',
        ], 'landing');
    }

    public function storeLead(): void {
        csrf_check();

        $data = $this->sanitize($_POST, [
            'name', 'whatsapp', 'email',
            'professional_type', 'student_range', 'interest',
        ]);

        // Validação básica
        $errors = [];
        if (empty($data['name']))      $errors[] = 'Nome é obrigatório.';
        if (empty($data['whatsapp']))  $errors[] = 'WhatsApp é obrigatório.';
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'E-mail inválido.';
        }

        $allowed_types    = ['personal','consultor','studio','academia','outro'];
        $allowed_ranges   = ['ate15','16a50','51a120','acima120'];
        $allowed_interest = ['testar','demonstracao','precos','equipe'];

        if (!in_array($data['professional_type'], $allowed_types))    $data['professional_type'] = 'personal';
        if (!in_array($data['student_range'],     $allowed_ranges))   $data['student_range']     = 'ate15';
        if (!in_array($data['interest'],          $allowed_interest)) $data['interest']          = 'testar';

        if (!empty($errors)) {
            $this->json(['success' => false, 'errors' => $errors], 422);
            return;
        }

        $data['source_page'] = '/landing';
        $data['ip_address']  = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? null;
        $data['user_agent']  = $_SERVER['HTTP_USER_AGENT'] ?? null;

        LandingLeadModel::create($data);

        $this->json(['success' => true, 'message' => 'Lead registrado com sucesso.']);
    }
}

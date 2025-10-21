<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode(['ok' => false, 'message' => 'Método inválido']);
  exit;
}

// tenta ler JSON (fetch) e cai para POST tradicional
$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);
if (!$data) $data = $_POST;

$lead = [
  'name'      => trim($data['name'] ?? ''),
  'email'     => trim($data['email'] ?? ''),
  'whatsapp'  => trim($data['whatsapp'] ?? ''),
  'gender'    => trim($data['gender'] ?? ''),
  'interests' => $data['interests'] ?? [],
  'consent'   => !empty($data['consent']),
  'created_at'=> date('Y-m-d H:i:s')
];

if ($lead['name'] === '' || $lead['email'] === '') {
  echo json_encode(['ok' => false, 'message' => 'Preencha nome e e-mail.']);
  exit;
}

$file = __DIR__ . '/leads.json';
$rows = [];
if (file_exists($file)) {
  $json = file_get_contents($file);
  $rows = $json ? json_decode($json, true) : [];
}
$rows[] = $lead;

file_put_contents($file, json_encode($rows, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo json_encode(['ok' => true, 'message' => 'Inscrição salva com sucesso!']);

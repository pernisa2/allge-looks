<?php
// api/build_products.php
header('Content-Type: text/plain; charset=utf-8');

// base de imagens
$base = realpath(__DIR__ . '/../assets/img');

// mapeamento: PASTA REAL => slug + tamanhos + preço
$map = [
  'Camisas'     => ['slug' => 'camisas',    'sizes' => ['P','M','G','GG'],               'price' => 129.90],
  'Calças'      => ['slug' => 'calcas',     'sizes' => ['36','38','40','42','44'],      'price' => 179.90],
  'Acessórios'  => ['slug' => 'acessorios', 'sizes' => [],                               'price' =>  89.90],
  'Calçados'    => ['slug' => 'calcados',   'sizes' => ['37','38','39','40','41','42','43'], 'price' => 219.90],
  'moletons'    => ['slug' => 'moletons',   'sizes' => ['P','M','G','GG'],               'price' => 199.90],
];

$all = [];
$id  = 1;

foreach ($map as $folder => $meta) {
  $dir = $base . DIRECTORY_SEPARATOR . $folder;
  if (!is_dir($dir)) {
    echo "Pasta não encontrada: $folder\n";
    continue;
  }

  $files = glob($dir . '/*.{jpg,jpeg,png,JPG,JPEG,PNG}', GLOB_BRACE);
  natsort($files);

  $i = 1;
  foreach ($files as $f) {
    $rel = 'assets/img/' . $folder . '/' . basename($f); // caminho relativo web
    $all[] = [
      'id'          => $id++,
      'name'        => ucfirst($meta['slug']) . ' ' . str_pad((string)$i, 2, '0', STR_PAD_LEFT),
      'category'    => $meta['slug'],
      'price'       => $meta['price'],
      'sizes'       => $meta['sizes'],
      'image'       => $rel,
      'description' => 'Produto ' . $meta['slug'] . ' — foto ' . basename($f)
    ];
    $i++;
  }
}

$out = __DIR__ . '/products.json';
file_put_contents($out, json_encode($all, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE));

echo "Gerado: api/products.json com " . count($all) . " itens.\n";

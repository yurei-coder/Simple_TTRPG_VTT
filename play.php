<?php
$languages = [
    'en' => [
        'new' => 'New', 'save' => 'Save', 'share' => 'Share', 'map' => 'Map Settings', 'tokens' => 'Tokens', 'exit' => 'Exit',
        'url_map' => 'Map Image URL', 'grid_size' => 'Grid Size (Cells)', 'cell_size' => 'Cell Size (Pixels)',
        'grid_color' => 'Grid Color', 'grid_opacity' => 'Grid Opacity', 'add_token' => 'Add Token', 'del_token' => 'Delete',
        'token_name' => 'Name', 'token_url' => 'Icon URL', 'pos' => 'Position', 'size' => 'Size',
        'border' => 'Border', 'color' => 'Color', 'copied' => 'URL copied to clipboard!',
        'library' => 'Character Library', 'bars' => 'Status Bars (Cur/Max)', 'help' => 'Help',
        'help_title' => 'VIRTUAL TABLETOP TOOL',
        'help_body' => '
            <p>With this <em>magnificent</em> tool you can configure maps to use in any game on the web. Make your changes, hit save, and it is as simple as copying the URL and pasting it wherever you want.</p>
            <p><em>Or just hit the Share button and it will copy it for you.</em></p>
            <p>Try to hide the link (use a hyperlink) when you post it, or the link will be longer than Don Quixote. That is the price of not using a database.<br><br>
            <a href="./play.php?v=7&lang=en&d=eJylkL1uwyAURl8lYo74czCx10h5gm5RBsDYocKAMFaHqu_eS2pVHtqh6vDpHkD3HuAd6Qn16FFKWnpCHE4uuHnCJs4kZje5oPxCWEOkJlQCSE3lIMZOcEYbdhaGt1KNp0aP0tIOv6YJHdEbjOQNwAOAtQAGQNAKPgNO2doAqwhMsQAqqL_d0Iudk1fZxQOr3dutBjevi1k9Nj4GynCwhazJRzUs37V8dV6Vsdsl2i11Eodov1oo9Mfcj3s5_7f8DBG_y59H9YNOz0W1X1RWh6uNf1SPquy0HURuyppsh52V1S2xe_T94xOT4ZBt" style="color:#007bff" target="_blank">[Example here]</a></p>
            <p>To move tokens, just drag them across the board. <em>Drag \'n drop baby</em>. You must add them via the Token form first, of course.</p>
            <p>In an ideal world, I would create tutorials. Maybe one day. Do not wait up.</p>
            <p>Here is a video to keep you entertained: <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" style="color:#007bff">Video Tutorial</a></p>'
    ],
    'es' => [
        'new' => 'Nuevo', 'save' => 'Guardar', 'share' => 'Compartir', 'map' => 'Ajustes Mapa', 'tokens' => 'Fichas', 'exit' => 'Salir',
        'url_map' => 'URL Imagen Mapa', 'grid_size' => 'Tamaño Cuadrícula (Casillas)', 'cell_size' => 'Tamaño Casilla (Píxeles)',
        'grid_color' => 'Color Rejilla', 'grid_opacity' => 'Opacidad Rejilla', 'add_token' => 'Añadir Ficha', 'del_token' => 'Eliminar',
        'token_name' => 'Nombre', 'token_url' => 'URL Icono', 'pos' => 'Posición', 'size' => 'Tamaño',
        'border' => 'Borde', 'color' => 'Color', 'copied' => '¡URL copiada!',
        'library' => 'Biblioteca de Personajes', 'bars' => 'Barras de Estado (Act/Max)', 'help' => 'Ayuda',
        'help_title' => 'HERRAMIENTA DE TABLERO VIRTUAL',
        'help_body' => '
            <p>Desde esta <em>magnífica</em> herramienta podrás configurar mapas para usar en cualquier partida de la red. Tú haces tus modificaciones, le das a guardar y es tan simple como copiar la URL y pegar en el sitio que te dé más rabia.</p>
            <p><em>O le das al botón de compartir que ya te lo copia por ti.</em></p>
            <p>Intenta ocultar el enlace cuando hagas el post, o te va a quedar un enlace más largo que el Quijote. Cosas que tiene no usar base de datos.<br><br>
            <a href="./play.php?v=7&lang=en&d=eJylkL1uwyAURl8lYo74czCx10h5gm5RBsDYocKAMFaHqu_eS2pVHtqh6vDpHkD3HuAd6Qn16FFKWnpCHE4uuHnCJs4kZje5oPxCWEOkJlQCSE3lIMZOcEYbdhaGt1KNp0aP0tIOv6YJHdEbjOQNwAOAtQAGQNAKPgNO2doAqwhMsQAqqL_d0Iudk1fZxQOr3dutBjevi1k9Nj4GynCwhazJRzUs37V8dV6Vsdsl2i11Eodov1oo9Mfcj3s5_7f8DBG_y59H9YNOz0W1X1RWh6uNf1SPquy0HURuyppsh52V1S2xe_T94xOT4ZBt" style="color:#007bff" target="_blank">[Ejemplo aquí]</a></p>
            <p>Para mover las fichas, simplemente arrástralas por el tablero. <em>Drag \'n drop baby</em>. Aunque antes deberás añadirlas a través del formulario de fichas, <em>of course</em>.</p>
            <p>En un mundo ideal debería crear una serie de videos o tutoriales para mostrar cómo se usa la herramienta. Quizá algún día, no esperes de pie.</p>
            <p>Aquí tienes un video para que te entretengas: <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" style="color:#007bff">Video tutorial</a></p>'
    ]
];

//$userLang = $_GET['lang'] ?? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en', 0, 2);
//$L = $languages[$userLang] ?? $languages['en'];
$requestedLang = $_GET['lang'] ?? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en', 0, 2);
// Only allow 'en' or 'es'. If anything else is sent, force it to 'en'.
$userLang = array_key_exists($requestedLang, $languages) ? $requestedLang : 'en';
$L = $languages[$userLang];

// --- DATA DECODING ---
if (isset($_GET['v']) && ($_GET['v'] == '6' || $_GET['v'] == '7') && isset($_GET['d'])) {
    $incomingData = str_replace([' ', '-', '_'], ['+', '+', '/'], $_GET['d']);
    $binaryData = base64_decode($incomingData);
    $jsonStr = @gzuncompress($binaryData);
    $data = json_decode($jsonStr, true);

    if ($data) {
        $_REQUEST['bgURL']    = $data['bg'];
        $_REQUEST['bxWidth']  = $data['w'];
        $_REQUEST['bxHeight'] = $data['h'];
        $_REQUEST['cellSize'] = $data['c'];
        $_REQUEST['bxColor']  = $data['clr'];
        $_REQUEST['bxOpacity']= $data['o'] ?? 0.5; 
        $_REQUEST['tkNumber'] = count($data['t']);
        $_REQUEST['load'] = 'S';
        foreach ($data['t'] as $key => $t) {
            $i = $key + 1;
            $_REQUEST["ntk$i"]=$t[0]; $_REQUEST["tk$i"]=$t[1]; $_REQUEST["pXtk$i"]=$t[2];
            $_REQUEST["pYtk$i"]=$t[3]; $_REQUEST["si$i"]=$t[4]; $_REQUEST["bstk$i"]=$t[5]; $_REQUEST["bctk$i"]=$t[6];
            $_REQUEST["b1v$i"]=$t[7] ?? 0; $_REQUEST["b1m$i"]=$t[8] ?? 0;
            $_REQUEST["b2v$i"]=$t[9] ?? 0; $_REQUEST["b2m$i"]=$t[10] ?? 0;
            $_REQUEST["b3v$i"]=$t[11] ?? 0; $_REQUEST["b3m$i"]=$t[12] ?? 0;
        }
    }
}

$v_bgURL    = $_REQUEST["bgURL"] ?? "";
$v_bxWidth  = (int)($_REQUEST["bxWidth"] ?? 20);
$v_bxHeight = (int)($_REQUEST["bxHeight"] ?? 15);
$v_cellSize = (int)($_REQUEST["cellSize"] ?? 50);
$v_bxColor  = $_REQUEST["bxColor"] ?? "white";
$v_bxOpacity= (float)($_REQUEST["bxOpacity"] ?? 0.5);
$v_tkNumber = (int)($_REQUEST["tkNumber"] ?? 0);
$v_load     = $_REQUEST["load"] ?? "";

$tokens = [];
for ($i = 1; $i <= $v_tkNumber; $i++) {
    if (isset($_REQUEST["del$i"])) continue;
    $tokens[] = [
        'n'   => $_REQUEST["ntk$i"] ?? "Token $i",
        'src' => $_REQUEST["tk$i"] ?? "https://game-icons.net/icons/ffffff/000000/1x1/lorc/skull-crossed-bones.svg",
        'x'   => (int)($_REQUEST["pXtk$i"] ?? 1),
        'y'   => (int)($_REQUEST["pYtk$i"] ?? 1),
        's'   => (float)($_REQUEST["si$i"] ?? 1),
        'bs'  => (int)($_REQUEST["bstk$i"] ?? 0),
        'bc'  => $_REQUEST["bctk$i"] ?? "#000",
        'b1v' => (int)($_REQUEST["b1v$i"] ?? 0), 'b1m' => (int)($_REQUEST["b1m$i"] ?? 0),
        'b2v' => (int)($_REQUEST["b2v$i"] ?? 0), 'b2m' => (int)($_REQUEST["b2m$i"] ?? 0),
        'b3v' => (int)($_REQUEST["b3v$i"] ?? 0), 'b3m' => (int)($_REQUEST["b3m$i"] ?? 0),
    ];
}
foreach($tokens as &$tk) { if($tk['s'] <= 0) $tk['s'] = 1; }
$v_tkNumber = count($tokens);

$presetImages = [
    "https://game-icons.net/icons/ffffff/000000/1x1/lorc/haunting.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/lorc/harpy.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/delapouite/mummy-head.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/delapouite/mimic-chest.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/delapouite/goblin-head.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/lorc/cultist.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/carl-olsen/brutal-helm.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/kier-heyl/dwarf-helmet.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/delapouite/woman-elf-face.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/delapouite/warlock-hood.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/lorc/skull-crossed-bones.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/skoll/open-chest.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/lorc/wolf-trap.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/lorc/fire-wave.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/lorc/wave-crest.svg",
    "https://game-icons.net/icons/ffffff/000000/1x1/sbed/lava.svg"
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>VTT Tabletop</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pako/2.1.0/pako.min.js"></script>
    <style>
        :root { --panel-bg: rgba(20, 20, 20, 0.98); --accent: #007bff; --text: #eee; }
        body { margin: 0; background: #000; font-family: sans-serif; color: var(--text); overflow: hidden; }
        
        header { 
            position: fixed; top: 0; left: 0; right: 0; height: 50px; 
            background: #000; display: flex; align-items: center; 
            padding: 0 15px; z-index: 100; border-bottom: 1px solid #333;
        }
        .btn { background: #333; color: white; border: none; padding: 7px 12px; margin-right: 8px; cursor: pointer; border-radius: 4px; font-size: 13px; }
        .btn:hover { background: var(--accent); }
        .btn-zoom { font-weight: bold; font-size: 16px; background: #444; width: 35px; }

        #viewport { width: 100vw; height: calc(100vh - 50px); margin-top: 50px; overflow: auto; }
        
        #map-container { position: relative; display: inline-block; line-height: 0; transform-origin: 0 0; transition: transform 0.1s ease-out; }

        #bg-image { 
            display: block; 
            width: <?php echo (int)$v_bxWidth * (int)$v_cellSize; ?>px; 
            height: <?php echo (int)$v_bxHeight * (int)$v_cellSize; ?>px; 
            object-fit: fill; 
        }
        .grid-overlay { position: absolute; top:0; left:0; pointer-events: none; }
        
        .token { position: absolute; cursor: move; z-index: 10; line-height: normal; user-select: none; }
        .token.highlight { outline: 3px solid #0f0; box-shadow: 0 0 15px #0f0; z-index: 11; }
        
        .bars-wrapper { position: absolute; bottom: -12px; left: 0; width: 100%; display: flex; flex-direction: column; gap: 2px; pointer-events: none; }
        .bar-bg { background: rgba(0,0,0,0.8); height: 4px; width: 100%; border-radius: 2px; overflow: hidden; display: none; }
        .bar-fill { height: 100%; transition: width 0.3s ease; }

        .panel { 
            position: fixed; top: 50px; right: -420px; width: 380px; height: calc(100vh - 50px);
            background: var(--panel-bg); transition: 0.3s ease; z-index: 90; 
            box-shadow: -5px 0 20px rgba(0,0,0,0.8); border-left: 1px solid #333;
            display: flex; flex-direction: column;
        }
        .panel.open { right: 0; }
        .panel-header { padding: 20px; border-bottom: 1px solid #333; flex-shrink: 0; }
        .panel-content { padding: 20px; overflow-y: auto; flex-grow: 1; }

        .modal { 
            position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); 
            background: #1a1a1a; border: 1px solid #444; padding: 25px; z-index: 2000; 
            display:none; width: 450px; max-width: 90vw; box-shadow: 0 0 100px rgba(0,0,0,1); border-radius: 8px; 
        }
        .modal h2 { margin-top: 0; font-family: 'Courier New', Courier, monospace; color: var(--accent); }
        .modal p { line-height: 1.5; color: #ccc; font-size: 14px; }

        .lib-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-top: 15px; }
        .lib-item { width: 70px; height: 70px; cursor: pointer; border: 1px solid #333; background: #000; border-radius: 4px; }
        .lib-item:hover { border-color: #0f0; transform: scale(1.05); }

        .token-card { background: #252525; padding: 12px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #333; }
        .token-card.active-card { border: 1px solid #0f0; background: #1a2a1a; }
        label { display: block; font-size: 11px; color: #888; text-transform: uppercase; margin-bottom: 3px; }
        input { width: 100%; background: #000; border: 1px solid #444; color: white; padding: 7px; box-sizing: border-box; border-radius: 3px; }
        .bar-input-row { display: flex; align-items: center; gap: 5px; margin-bottom: 4px; }
        .bar-dot { width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; }
        .del-label { color:#f55; cursor:pointer; font-size:10px; white-space:nowrap; display: flex; align-items: center; gap: 5px; }
    </style>
</head>
<body>

<header>
    <a href="play.php" class="btn" style="background: #444; text-decoration: none; display: flex; align-items: center; justify-content: center;"><?php echo $L['new']; ?></a>
    <button class="btn" style="background: #218838;" onclick="compressAndSave()"><?php echo $L['save']; ?></button>
    <button class="btn" onclick="copyToClip()"><?php echo $L['share']; ?></button>
    
    <div style="margin-left: 15px; display: flex; align-items: center; gap: 2px;">
        <button class="btn btn-zoom" onclick="applyZoom(-0.1)">-</button>
        <span id="zoomVal" style="width: 45px; text-align: center; font-size: 12px; color: #888;">100%</span>
        <button class="btn btn-zoom" onclick="applyZoom(0.1)">+</button>
    </div>

    <div style="flex-grow: 1;"></div>
    
    <button class="btn" style="background:#555;" onclick="toggleModal('helpModal')"><?php echo $L['help']; ?></button>

    <select onchange="changeLanguage(this.value)">
        <?php foreach($languages as $code => $data): ?>
            <option value="<?php echo $code; ?>" <?php echo $userLang==$code?'selected':''; ?>><?php echo strtoupper($code); ?></option>
        <?php endforeach; ?>
    </select>
    <button class="btn" onclick="togglePanel('editMap')"><?php echo $L['map']; ?></button>
    <button class="btn" onclick="togglePanel('editFichas')"><?php echo $L['tokens']; ?></button>
    <a href="https://cyberpunk.clon01.net/" class="btn" style="background:#a33"><?php echo $L['exit']; ?></a>
</header>

<div id="viewport">
    <div id="map-container" ondrop="drop(event)" ondragover="allowDrop(event)">
        <?php if ($v_load == "S"): ?>
            <img id="bg-image" src="<?php echo htmlspecialchars($v_bgURL); ?>">
            <canvas id="gridCanvas" class="grid-overlay"></canvas>
            <?php foreach ($tokens as $idx => $t): 
                $i = $idx + 1; 
                $cs = (int)$v_cellSize;
                $sz = (float)$t['s'];
                $sizePx = $cs * $sz;
                $leftPx = ((int)$t['x'] - 1) * $cs;
                $topPx  = ((int)$t['y'] - 1) * $cs;
            ?>
                <div id="DivTk<?php echo $i; ?>" class="token" 
                     onmousedown="handleTokenMousedown(event, <?php echo $i; ?>)"
                     onmouseup="handleTokenMouseup(event, <?php echo $i; ?>)"
                     style="left: <?php echo $leftPx; ?>px; top: <?php echo $topPx; ?>px; width:<?php echo $sizePx; ?>px; height:<?php echo $sizePx; ?>px;">
                    
                    <img id="Tk<?php echo $i; ?>" src="<?php echo htmlspecialchars($t['src']); ?>" title="<?php echo htmlspecialchars($t['n']); ?>"
                         style="width:100%; height:100%; border:<?php echo (int)$t['bs']; ?>px solid <?php echo htmlspecialchars($t['bc']); ?>; box-sizing: border-box; border-radius: 4px;"
                         draggable="true" ondragstart="drag(event)">
                    
                    <div class="bars-wrapper">
                        <?php 
                        $barColors = ['#28a745', '#dc3545', '#007bff'];
                        for($b=1; $b<=3; $b++): 
                            $cur = (float)($t["b{$b}v"]); $max = (float)($t["b{$b}m"]);
                            $perc = ($max > 0) ? min(100, max(0, ($cur / $max) * 100)) : 0;
                            $show = ($max > 0) ? 'display:block;' : '';
                        ?>
                        <div class="bar-bg" style="<?php echo $show; ?>">
                            <div class="bar-fill" style="width:<?php echo $perc; ?>%; background:<?php echo $barColors[$b-1]; ?>;"></div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<div id="helpModal" class="modal">
    <h2><?php echo $L['help_title']; ?></h2>
    <div style="font-family: Tahoma, Geneva, sans-serif;">
        <?php echo $L['help_body']; ?>
    </div>
    <img src="https://umbria.clon01.net/xd.gif" style="float: right; width: 60px; height: 60px; margin-top: -40px;" />
    <button class="btn" style="width:100%; margin-top:20px; background:#444;" onclick="toggleModal('helpModal')">Close</button>
</div>

<div id="libModal" class="modal">
    <h3 style="margin-top:0; font-size: 16px;"><?php echo $L['library']; ?></h3>
    <div class="lib-grid">
        <?php foreach($presetImages as $url): ?>
            <img class="lib-item" src="<?php echo $url; ?>" onclick="selectFromLibrary('<?php echo $url; ?>')">
        <?php endforeach; ?>
    </div>
    <button class="btn" style="width:100%; margin-top:20px; background:#444;" onclick="toggleModal('libModal')">Close</button>
</div>

<form id="formEdit" action="play.php" method="get">
    <input type="hidden" name="load" value="S">
    <input type="hidden" name="lang" value="<?php echo $userLang; ?>">
    <input type="hidden" name="tkNumber" value="<?php echo $v_tkNumber; ?>">

    <div id="editMap" class="panel">
        <div class="panel-header"><h3><?php echo $L['map']; ?></h3></div>
        <div class="panel-content">
            <div style="margin-bottom:12px;"><label><?php echo $L['url_map']; ?></label><input type="text" name="bgURL" value="<?php echo htmlspecialchars($v_bgURL); ?>"></div>
            <div style="display:flex; gap:10px; margin-bottom:12px;">
                <div><label>Grid W</label><input type="number" name="bxWidth" value="<?php echo $v_bxWidth; ?>"></div>
                <div><label>Grid H</label><input type="number" name="bxHeight" value="<?php echo $v_bxHeight; ?>"></div>
            </div>
            <div style="margin-bottom:12px;"><label><?php echo $L['cell_size']; ?></label><input type="number" name="cellSize" value="<?php echo $v_cellSize; ?>"></div>
            <div style="display:flex; gap:10px; margin-bottom:12px;">
                <div style="flex:2;"><label><?php echo $L['grid_color']; ?></label><input type="text" name="bxColor" value="<?php echo htmlspecialchars($v_bxColor); ?>"></div>
                <div style="flex:1;"><label><?php echo $L['grid_opacity']; ?></label><input type="number" name="bxOpacity" step="0.1" value="<?php echo $v_bxOpacity; ?>"></div>
            </div>
            <button type="submit" class="btn" style="width:100%; padding:12px;"><?php echo $L['save']; ?></button>
        </div>
    </div>

    <div id="editFichas" class="panel">
        <div class="panel-header">
            <h3><?php echo $L['tokens']; ?></h3>
            <button type="submit" name="newTk" value="1" class="btn" style="width:100%;"><?php echo $L['add_token']; ?></button>
        </div>
        <div class="panel-content">
            <?php if (isset($_REQUEST['newTk'])) $v_tkNumber++; ?>
            <?php for ($i = 1; $i <= $v_tkNumber; $i++): 
                $t = $tokens[$i-1] ?? ['n'=>"Token $i", 'src'=>'https://game-icons.net/icons/ffffff/000000/1x1/lorc/skull-crossed-bones.svg', 'x'=>1, 'y'=>1, 's'=>1, 'bs'=>0, 'bc'=>'#000', 'b1v'=>0,'b1m'=>0,'b2v'=>0,'b2m'=>0,'b3v'=>0,'b3m'=>0];
            ?>
                <div class="token-card" id="card-<?php echo $i; ?>">
                    <div style="display:flex; gap:10px; align-items:center; margin-bottom:8px;">
                        <img src="<?php echo htmlspecialchars($t['src']); ?>" width="35" height="35" style="background:#000; border-radius:4px;">
                        <input type="text" name="ntk<?php echo $i; ?>" value="<?php echo htmlspecialchars($t['n']); ?>">
                    </div>
                    <label><?php echo $L['bars']; ?></label>
                    <div class="bar-input-row"><div class="bar-dot" style="background:#28a745"></div><input type="number" name="b1v<?php echo $i; ?>" value="<?php echo $t['b1v']; ?>"><input type="number" name="b1m<?php echo $i; ?>" value="<?php echo $t['b1m']; ?>"></div>
                    <div class="bar-input-row"><div class="bar-dot" style="background:#dc3545"></div><input type="number" name="b2v<?php echo $i; ?>" value="<?php echo $t['b2v']; ?>"><input type="number" name="b2m<?php echo $i; ?>" value="<?php echo $t['b2m']; ?>"></div>
                    <div class="bar-input-row" style="margin-bottom:10px;"><div class="bar-dot" style="background:#007bff"></div><input type="number" name="b3v<?php echo $i; ?>" value="<?php echo $t['b3v']; ?>"><input type="number" name="b3m<?php echo $i; ?>" value="<?php echo $t['b3m']; ?>"></div>
                    <label><?php echo $L['token_url']; ?></label>
                    <div style="display:flex; gap:5px; margin-bottom:8px;">
                        <input type="text" id="tkUrl<?php echo $i; ?>" name="tk<?php echo $i; ?>" value="<?php echo htmlspecialchars($t['src']); ?>" style="font-size:10px;">
                        <button type="button" class="btn" style="margin:0;" onclick="openLibrary(<?php echo $i; ?>)">...</button>
                    </div>
                    <div style="display:flex; gap:8px;">
                        <div><label>X</label><input type="number" id="pXTk<?php echo $i; ?>" name="pXtk<?php echo $i; ?>" value="<?php echo $t['x']; ?>"></div>
                        <div><label>Y</label><input type="number" id="pYTk<?php echo $i; ?>" name="pYtk<?php echo $i; ?>" value="<?php echo $t['y']; ?>"></div>
                        <div><label><?php echo $L['size']; ?></label><input type="number" step="0.1" name="si<?php echo $i; ?>" value="<?php echo $t['s']; ?>"></div>
                    </div>
                    <div style="display:flex; gap:8px; margin-top:8px; align-items:flex-end; justify-content:space-between;">
                        <div style="display:flex; gap:5px;">
                            <div><label>Bord.</label><input style="width:40px;" type="number" name="bstk<?php echo $i; ?>" value="<?php echo $t['bs']; ?>"></div>
                            <div><label>Color</label><input style="width:70px;" type="text" name="bctk<?php echo $i; ?>" value="<?php echo htmlspecialchars($t['bc']); ?>"></div>
                        </div>
                        <label class="del-label"><input type="checkbox" name="del<?php echo $i; ?>"> <?php echo $L['del_token']; ?></label>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</form>

<script>
    let currentEditingToken = null;
    let mouseDownPos = {x: 0, y: 0};
    let currentZoom = 1.0;

    function applyZoom(delta) {
        currentZoom = Math.min(Math.max(0.2, currentZoom + delta), 3.0);
        const container = document.getElementById('map-container');
        container.style.transform = `scale(${currentZoom})`;
        const baseW = <?php echo (int)$v_bxWidth * (int)$v_cellSize; ?>;
        const baseH = <?php echo (int)$v_bxHeight * (int)$v_cellSize; ?>;
        container.style.width = (baseW) + "px";
        container.style.height = (baseH) + "px";
        document.getElementById('zoomVal').innerText = Math.round(currentZoom * 100) + "%";
    }

    function toggleModal(id) {
        const m = document.getElementById(id);
        m.style.display = (m.style.display === 'block') ? 'none' : 'block';
    }

    function togglePanel(id) {
        const panel = document.getElementById(id);
        const isOpen = panel.classList.contains('open');
        document.querySelectorAll('.panel').forEach(p => { if(p.id !== id) p.classList.remove('open'); });
        if (isOpen) panel.classList.remove('open'); else panel.classList.add('open');
    }

    function handleTokenMousedown(e, num) { mouseDownPos = { x: e.clientX, y: e.clientY }; }
    function handleTokenMouseup(e, num) {
        const deltaX = Math.abs(e.clientX - mouseDownPos.x);
        const deltaY = Math.abs(e.clientY - mouseDownPos.y);
        if (deltaX < 5 && deltaY < 5) focusToken(num);
    }

    function focusToken(num) {
        document.querySelectorAll('.token').forEach(t => t.classList.remove('highlight'));
        const tk = document.getElementById('DivTk' + num);
        if (tk) tk.classList.add('highlight');
        document.getElementById('editMap').classList.remove('open');
        const panel = document.getElementById('editFichas');
        panel.classList.add('open');
        document.querySelectorAll('.token-card').forEach(c => c.classList.remove('active-card'));
        const card = document.getElementById('card-' + num);
        if (card) {
            card.classList.add('active-card');
            card.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }

    function openLibrary(num) {
        currentEditingToken = num;
        toggleModal('libModal');
    }

    function selectFromLibrary(url) {
        if (currentEditingToken) {
            document.getElementById('tkUrl' + currentEditingToken).value = url;
            toggleModal('libModal');
        }
    }

    const canvas = document.getElementById('gridCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        const w = <?php echo $v_bxWidth; ?>, h = <?php echo $v_bxHeight; ?>, cs = <?php echo $v_cellSize; ?>;
        canvas.width = w * cs; canvas.height = h * cs;
        ctx.strokeStyle = "<?php echo json_encode($v_bxColor); ?>";
        ctx.globalAlpha = <?php echo json_encode($v_bxOpacity); ?>;
        ctx.lineWidth = 1;
        for (let x = 0; x <= w * cs; x += cs) { ctx.beginPath(); ctx.moveTo(x, 0); ctx.lineTo(x, h * cs); ctx.stroke(); }
        for (let y = 0; y <= h * cs; y += cs) { ctx.beginPath(); ctx.moveTo(0, y); ctx.lineTo(w * cs, y); ctx.stroke(); }
    }

    function allowDrop(ev) { ev.preventDefault(); }
    function drag(ev) { ev.dataTransfer.setData("text", ev.target.id); }
    function drop(ev) {
        ev.preventDefault();
        const id = ev.dataTransfer.getData("text");
        const el = document.getElementById("Div" + id);
        const rect = document.getElementById('map-container').getBoundingClientRect();
        const cs = <?php echo $v_cellSize; ?>;
        let x = (ev.clientX - rect.left) / currentZoom;
        let y = (ev.clientY - rect.top) / currentZoom;
        const gridX = Math.floor(x / cs);
        const gridY = Math.floor(y / cs);
        el.style.left = (gridX * cs) + "px";
        el.style.top = (gridY * cs) + "px";
        const num = id.replace('Tk', '');
        document.getElementById('pXTk' + num).value = gridX + 1;
        document.getElementById('pYTk' + num).value = gridY + 1;
    }

    function changeLanguage(newLang) { compressAndSave(newLang); }

    function compressAndSave(targetLang) {
        const lang = targetLang || "<?php echo $userLang; ?>";
        const data = {
            bg: document.getElementsByName("bgURL")[0].value,
            w: document.getElementsByName("bxWidth")[0].value,
            h: document.getElementsByName("bxHeight")[0].value,
            c: document.getElementsByName("cellSize")[0].value,
            clr: document.getElementsByName("bxColor")[0].value,
            o: document.getElementsByName("bxOpacity")[0].value,
            t: []
        };
        let i = 1;
        while (document.getElementsByName("ntk" + i).length > 0) {
            const del = document.getElementsByName("del" + i)[0];
            if (del && !del.checked) {
                data.t.push([
                    document.getElementsByName("ntk" + i)[0].value,
                    document.getElementsByName("tk" + i)[0].value,
                    document.getElementById("pXTk" + i).value,
                    document.getElementById("pYTk" + i).value,
                    document.getElementsByName("si" + i)[0].value,
                    document.getElementsByName("bstk" + i)[0].value,
                    document.getElementsByName("bctk" + i)[0].value,
                    document.getElementsByName("b1v" + i)[0].value,
                    document.getElementsByName("b1m" + i)[0].value,
                    document.getElementsByName("b2v" + i)[0].value,
                    document.getElementsByName("b2m" + i)[0].value,
                    document.getElementsByName("b3v" + i)[0].value,
                    document.getElementsByName("b3m" + i)[0].value
                ]);
            }
            i++;
        }
        const compressed = pako.deflate(JSON.stringify(data));
        let binary = "";
        for (let k = 0; k < compressed.length; k++) binary += String.fromCharCode(compressed[k]);
        const safeBase64 = btoa(binary).replace(/\+/g, '-').replace(/\//g, '_');
        window.location.href = "play.php?v=7&lang=" + lang + "&d=" + safeBase64;
    }

    function copyToClip() {
        navigator.clipboard.writeText(window.location.href);
        alert("<?php echo $L['copied']; ?>");
    }
</script>
</body>

</html>


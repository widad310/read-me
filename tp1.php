<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Démarrer la session
session_start();

// Citations selon humeur avec traductions multilingues complètes
$quotes = [
    'heureux' => [
        [
            'fr' => "La joie ne se trouve pas dans les choses, elle est en nous.",
            'en' => "Joy is not found in things, it is within us.",
            'ar' => "الفرح لا يوجد في الأشياء، بل هو بداخلنا.",
            'es' => "La alegría no se encuentra en las cosas, está en nosotros."
        ],
        [
            'fr' => "Quand ton cœur sourit, le monde entier danse avec toi.",
            'en' => "When your heart smiles, the whole world dances with you.",
            'ar' => "عندما يبتسم قلبك، يرقص العالم كله معك.",
            'es' => "Cuando tu corazón sonríe, el mundo entero baila contigo."
        ],
        [
            'fr' => "Le bonheur est fait de petites choses… et de grands rires.",
            'en' => "Happiness is made of small things... and big laughs.",
            'ar' => "السعادة مصنوعة من أشياء صغيرة... وضحكات كبيرة.",
            'es' => "La felicidad está hecha de pequeñas cosas... y grandes risas."
        ]
    ],
    'triste' => [
        [
            'fr' => "Même les nuages les plus sombres finissent par laisser passer la lumière.",
            'en' => "Even the darkest clouds eventually let the light through.",
            'ar' => "حتى أحلك السحب تسمح في النهاية بمرور الضوء.",
            'es' => "Incluso las nubes más oscuras eventualmente dejan pasar la luz."
        ],
        [
            'fr' => "La douleur d'aujourd'hui sera la force de demain.",
            'en' => "Today's pain will be tomorrow's strength.",
            'ar' => "ألم اليوم سيكون قوة الغد.",
            'es' => "El dolor de hoy será la fuerza del mañana."
        ],
        [
            'fr' => "Il faut connaître la pluie pour apprécier le soleil.",
            'en' => "You need to know rain to appreciate the sun.",
            'ar' => "يجب أن تعرف المطر لتقدّر الشمس.",
            'es' => "Hay que conocer la lluvia para apreciar el sol."
        ]
    ],
    'calme' => [
        [
            'fr' => "Le silence est le refuge des âmes paisibles.",
            'en' => "Silence is the refuge of peaceful souls.",
            'ar' => "الصمت هو ملاذ النفوس الهادئة.",
            'es' => "El silencio es el refugio de las almas pacíficas."
        ],
        [
            'fr' => "La sérénité ne vient pas de l'absence de tempête, mais de la paix intérieure.",
            'en' => "Serenity does not come from the absence of storm, but from inner peace.",
            'ar' => "الطمأنينة لا تأتي من غياب العاصفة، بل من السلام الداخلي.",
            'es' => "La serenidad no viene de la ausencia de tormenta, sino de la paz interior."
        ],
        [
            'fr' => "Respire… tout est temporaire.",
            'en' => "Breathe... everything is temporary.",
            'ar' => "تنفس... كل شيء مؤقت.",
            'es' => "Respira... todo es temporal."
        ]
    ],
    'amoureux' => [
        [
            'fr' => "L'amour ne se regarde pas, il se ressent dans chaque geste.",
            'en' => "Love is not looked at, it is felt in every gesture.",
            'ar' => "الحب لا يُنظر إليه، بل يُشعر به في كل حركة.",
            'es' => "El amor no se mira, se siente en cada gesto."
        ],
        [
            'fr' => "Quand deux âmes se reconnaissent, les mots deviennent inutiles.",
            'en' => "When two souls recognize each other, words become unnecessary.",
            'ar' => "عندما تتعارف روحان، تصبح الكلمات غير ضرورية.",
            'es' => "Cuando dos almas se reconocen, las palabras se vuelven innecesarias."
        ],
        [
            'fr' => "Ton sourire est mon lever de soleil.",
            'en' => "Your smile is my sunrise.",
            'ar' => "ابتسامتك هي شروق شمسي.",
            'es' => "Tu sonrisa es mi amanecer."
        ]
    ],
    'motivé' => [
        [
            'fr' => "N'attends pas que les choses arrivent, fais-les arriver.",
            'en' => "Don't wait for things to happen, make them happen.",
            'ar' => "لا تنتظر أن تحدث الأشياء، اجعلها تحدث.",
            'es' => "No esperes a que las cosas sucedan, haz que sucedan."
        ],
        [
            'fr' => "Chaque pas te rapproche de ton rêve.",
            'en' => "Every step brings you closer to your dream.",
            'ar' => "كل خطوة تقربك من حلمك.",
            'es' => "Cada paso te acerca a tu sueño."
        ],
        [
            'fr' => "L'échec n'est pas la fin, c'est juste le début d'un apprentissage.",
            'en' => "Failure is not the end, it's just the beginning of learning.",
            'ar' => "الفشل ليس النهاية، إنما只是 بداية التعلم.",
            'es' => "El fracaso no es el final, es solo el comienzo del aprendizaje."
        ]
    ],
    'inspiré' => [
        [
            'fr' => "La vie est un défi à relever, un bonheur à mériter, une aventure à tenter.",
            'en' => "Life is a challenge to meet, a happiness to deserve, an adventure to try.",
            'ar' => "الحياة تحدٍ يجب تخطيه، وسعادة يجب استحقاقها، ومغامرة يجب خوضها.",
            'es' => "La vida es un desafío que enfrentar, una felicidad que merecer, una aventura que intentar."
        ],
        [
            'fr' => "Rêve ta vie en couleurs, c'est le secret du bonheur.",
            'en' => "Dream your life in colors, that's the secret of happiness.",
            'ar' => "احلم بحياتك بألوان، هذا هو سر السعادة.",
            'es' => "Sueña tu vida en colores, ese es el secreto de la felicidad."
        ],
        [
            'fr' => "La beauté commence au moment où vous décidez d'être vous-même.",
            'en' => "Beauty begins the moment you decide to be yourself.",
            'ar' => "تبدأ الجمالية في اللحظة التي تقرر فيها أن تكون نفسك.",
            'es' => "La belleza comienza en el momento en que decides ser tú mismo."
        ]
    ]
];

// Fonction pour obtenir une traduction sécurisée
function getSafeTranslation($quote_data, $lang) {
    // Vérifier si la traduction existe pour cette langue
    if (isset($quote_data[$lang]) && !empty($quote_data[$lang])) {
        return $quote_data[$lang];
    }
    
    // Fallback: chercher dans l'ordre Français -> English -> première traduction disponible
    if (isset($quote_data['fr']) && !empty($quote_data['fr'])) {
        return $quote_data['fr'];
    }
    
    if (isset($quote_data['en']) && !empty($quote_data['en'])) {
        return $quote_data['en'];
    }
    
    // Si rien n'est trouvé, prendre la première traduction disponible
    if (!empty($quote_data)) {
        return reset($quote_data);
    }
    
    // Fallback ultime
    return "Citation non disponible";
}

// Images de fond optimisées
$backgrounds = [
    'heureux' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'triste' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'calme' => 'https://images.unsplash.com/photo-1439066615861-d1af74d74000?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'amoureux' => 'https://images.unsplash.com/photo-1518568814500-bf0f8d125f46?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'motivé' => 'https://images.unsplash.com/photo-1579546929662-711aa81148cf?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'inspiré' => 'https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80'
];

// Couleurs par humeur
$colors = [
    'heureux' => ['primary' => '#FFD166', 'secondary' => '#FF9E00'],
    'triste' => ['primary' => '#A0C4FF', 'secondary' => '#6A8EFF'],
    'calme' => ['primary' => '#C8E6C9', 'secondary' => '#66BB6A'],
    'amoureux' => ['primary' => '#FFB7C5', 'secondary' => '#FF6B8B'],
    'motivé' => ['primary' => '#FFA94D', 'secondary' => '#FF7B00'],
    'inspiré' => ['primary' => '#D8B4FE', 'secondary' => '#A855F7']
];

// Émojis par humeur
$emojis = [
    'heureux' => '😊',
    'triste' => '😢',
    'calme' => '🌙',
    'amoureux' => '💖',
    'motivé' => '💪',
    'inspiré' => '✨'
];

// Langues disponibles
$languages = [
    'fr' => ['name' => 'Français', 'flag' => '🇫🇷'],
    'en' => ['name' => 'English', 'flag' => '🇺🇸'],
    'ar' => ['name' => 'العربية', 'flag' => '🇸🇦'],
    'es' => ['name' => 'Español', 'flag' => '🇪🇸']
];

// Gestion de la langue
$current_lang = $_POST['lang'] ?? ($_SESSION['current_lang'] ?? 'fr');
if (!array_key_exists($current_lang, $languages)) {
    $current_lang = 'fr';
}
$_SESSION['current_lang'] = $current_lang;

// Gestion de l'humeur
$mood = $_POST['mood'] ?? ($_SESSION['last_mood'] ?? 'calme');
if (!array_key_exists($mood, $quotes)) {
    $mood = 'calme';
}
$_SESSION['last_mood'] = $mood;

// Gestion des citations précédentes pour éviter les répétitions
if (!isset($_SESSION['previous_quotes'])) {
    $_SESSION['previous_quotes'] = [];
}

if (!isset($_SESSION['previous_quotes'][$mood])) {
    $_SESSION['previous_quotes'][$mood] = [];
}

// Réinitialiser si toutes les citations ont été vues
if (count($_SESSION['previous_quotes'][$mood]) >= count($quotes[$mood])) {
    $_SESSION['previous_quotes'][$mood] = [];
}

// Sélectionner une nouvelle citation
$available_quotes = array_diff_key($quotes[$mood], array_flip($_SESSION['previous_quotes'][$mood]));
if (empty($available_quotes)) {
    $_SESSION['previous_quotes'][$mood] = [];
    $available_quotes = $quotes[$mood];
}

$random_index = array_rand($available_quotes);
$selected_quote_data = $available_quotes[$random_index];

// Utiliser la fonction sécurisée pour obtenir la traduction
$selected_quote = getSafeTranslation($selected_quote_data, $current_lang);

$_SESSION['previous_quotes'][$mood][] = $random_index;

// Statistiques
if (!isset($_SESSION['stats'])) {
    $_SESSION['stats'] = [
        'total_views' => 0,
        'mood_views' => array_fill_keys(array_keys($quotes), 0),
        'favorite_mood' => '',
        'languages_used' => array_fill_keys(array_keys($languages), 0)
    ];
}

$_SESSION['stats']['total_views']++;
$_SESSION['stats']['mood_views'][$mood]++;
$_SESSION['stats']['languages_used'][$current_lang]++;

// Déterminer l'humeur favorite
$favorite_mood = array_keys($_SESSION['stats']['mood_views'], max($_SESSION['stats']['mood_views']))[0];
$_SESSION['stats']['favorite_mood'] = $favorite_mood;

$selected_bg = $backgrounds[$mood];
$selected_color = $colors[$mood];
$selected_emoji = $emojis[$mood];

// Préchargement des images
$preload_bgs = array_values($backgrounds);

// Textes de l'interface selon la langue
$ui_texts = [
    'fr' => [
        'title' => 'Citations Inspirantes - Selon ton Humeur',
        'subtitle' => 'Trouve la citation parfaite pour ton humeur du moment',
        'choose_mood' => 'Choisis ton humeur',
        'show_quote' => 'Afficher la citation',
        'share' => 'Partager',
        'copy' => 'Copier',
        'new' => 'Nouvelle',
        'listen' => 'Écouter',
        'favorite' => 'Favoris',
        'quotes_viewed' => 'Citations vues',
        'favorite_mood' => 'Humeur favorite',
        'languages' => 'Langues',
        'footer' => "Inspiré par la sagesse marocaine – %d/%d citations découvertes ✨",
        'share_success' => 'Citation copiée ! Partagez-la où vous voulez 📤',
        'copy_success' => 'Citation copiée dans le presse-papier ! 📋',
        'favorite_success' => 'Citation ajoutée aux favoris ! ⭐',
        'favorite_exists' => 'Cette citation est déjà dans vos favoris 💫',
        'listening' => '⏸️ Lecture...'
    ],
    'en' => [
        'title' => 'Inspirational Quotes - Based on Your Mood',
        'subtitle' => 'Find the perfect quote for your current mood',
        'choose_mood' => 'Choose your mood',
        'show_quote' => 'Show Quote',
        'share' => 'Share',
        'copy' => 'Copy',
        'new' => 'New',
        'listen' => 'Listen',
        'favorite' => 'Favorite',
        'quotes_viewed' => 'Quotes viewed',
        'favorite_mood' => 'Favorite mood',
        'languages' => 'Languages',
        'footer' => "Inspired by Moroccan wisdom – %d/%d quotes discovered ✨",
        'share_success' => 'Quote copied! Share it wherever you want 📤',
        'copy_success' => 'Quote copied to clipboard! 📋',
        'favorite_success' => 'Quote added to favorites! ⭐',
        'favorite_exists' => 'This quote is already in your favorites 💫',
        'listening' => '⏸️ Listening...'
    ],
    'ar' => [
        'title' => 'اقتباسات ملهمة - حسب مزاجك',
        'subtitle' => 'ابحث عن الاقتباس المثالي لمزاجك الحالي',
        'choose_mood' => 'اختر مزاجك',
        'show_quote' => 'عرض الاقتباس',
        'share' => 'مشاركة',
        'copy' => 'نسخ',
        'new' => 'جديد',
        'listen' => 'استماع',
        'favorite' => 'مفضلة',
        'quotes_viewed' => 'الاقتباسات المشاهدة',
        'favorite_mood' => 'المزاج المفضل',
        'languages' => 'اللغات',
        'footer' => "مستوحى من الحكمة المغربية – تم اكتشاف %d/%d من الاقتباسات ✨",
        'share_success' => 'تم نسخ الاقتباس! شاركه حيثما تريد 📤',
        'copy_success' => 'تم نسخ الاقتباس إلى الحافظة! 📋',
        'favorite_success' => 'تمت إضافة الاقتباس إلى المفضلة! ⭐',
        'favorite_exists' => 'هذا الاقتباس موجود بالفعل في مفضلتك 💫',
        'listening' => '⏸️ جاري الاستماع...'
    ],
    'es' => [
        'title' => 'Citas Inspiradoras - Según tu Estado de Ánimo',
        'subtitle' => 'Encuentra la cita perfecta para tu estado de ánimo actual',
        'choose_mood' => 'Elige tu estado de ánimo',
        'show_quote' => 'Mostrar Cita',
        'share' => 'Compartir',
        'copy' => 'Copiar',
        'new' => 'Nueva',
        'listen' => 'Escuchar',
        'favorite' => 'Favorita',
        'quotes_viewed' => 'Citas vistas',
        'favorite_mood' => 'Estado de ánimo favorito',
        'languages' => 'Idiomas',
        'footer' => "Inspirado en la sabiduría marroquí – %d/%d citas descubiertas ✨",
        'share_success' => '¡Cita copiada! Compártela donde quieras 📤',
        'copy_success' => '¡Cita copiada al portapapeles! 📋',
        'favorite_success' => '¡Cita añadida a favoritos! ⭐',
        'favorite_exists' => 'Esta cita ya está en tus favoritos 💫',
        'listening' => '⏸️ Escuchando...'
    ]
];

// Fonction sécurisée pour obtenir les textes de l'interface
function getUIText($key, $lang) {
    global $ui_texts;
    return $ui_texts[$lang][$key] ?? $ui_texts['fr'][$key] ?? $key;
}
?>
<!DOCTYPE html>
<html lang="<?= $current_lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= getUIText('title', $current_lang) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Préchargement des images -->
    <?php foreach ($preload_bgs as $bg): ?>
    <link rel="preload" as="image" href="<?= htmlspecialchars($bg) ?>">
    <?php endforeach; ?>
    
    <style>
        :root {
            --primary-color: <?= $selected_color['primary'] ?>;
            --secondary-color: <?= $selected_color['secondary'] ?>;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Noto Sans Arabic', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: #fff;
            text-shadow: 0 1px 3px rgba(0,0,0,0.6);
            background: linear-gradient(135deg, 
                rgba(0,0,0,0.7) 0%, 
                rgba(0,0,0,0.5) 50%, 
                rgba(0,0,0,0.7) 100%),
                url('<?= htmlspecialchars($selected_bg) ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            transition: all 0.8s ease-in-out;
            padding: 20px;
        }

        /* Style pour l'arabe */
        body[lang="ar"] {
            direction: rtl;
            font-family: 'Noto Sans Arabic', 'Poppins', sans-serif;
        }

        .container {
            width: 100%;
            max-width: 900px;
            text-align: center;
        }

        .header {
            margin-bottom: 30px;
        }

        h1 {
            color: var(--primary-color);
            font-size: clamp(1.8em, 4vw, 2.8em);
            margin-bottom: 10px;
            background-color: rgba(0,0,0,0.6);
            padding: 15px 30px;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.1);
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        }

        .subtitle {
            color: var(--primary-color);
            font-size: 1.1em;
            opacity: 0.9;
        }

        .controls-panel {
            margin-bottom: 30px;
            background-color: rgba(255,255,255,0.1);
            padding: 25px;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.2);
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .control-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }

        select, button {
            font-size: 1em;
            padding: 12px 20px;
            border-radius: 12px;
            border: none;
            background-color: var(--primary-color);
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            min-width: 150px;
        }

        select {
            flex: 1;
            min-width: 200px;
        }

        select:focus, button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255,255,255,0.3);
        }

        button {
            background-color: var(--secondary-color);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .language-selector {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 15px;
        }

        .lang-btn {
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            padding: 8px 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            font-size: 0.9em;
        }

        .lang-btn.active {
            background: var(--secondary-color);
            border-color: var(--primary-color);
        }

        .lang-btn:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-2px);
        }

        .quote-container {
            position: relative;
            margin-bottom: 30px;
        }

        .quote-box {
            background: linear-gradient(135deg, 
                rgba(255,255,255,0.15) 0%, 
                rgba(255,255,255,0.1) 100%);
            border: 2px solid var(--primary-color);
            border-radius: 25px;
            padding: 40px 35px;
            text-align: center;
            font-size: clamp(1.1em, 2.5vw, 1.5em);
            backdrop-filter: blur(20px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease-out;
            line-height: 1.7;
            position: relative;
            overflow: hidden;
        }

        .quote-box::before {
            content: '"';
            font-size: 5em;
            color: var(--primary-color);
            position: absolute;
            top: 10px;
            left: 25px;
            opacity: 0.3;
            font-family: serif;
        }

        .quote-box::after {
            content: '"';
            font-size: 5em;
            color: var(--primary-color);
            position: absolute;
            bottom: -30px;
            right: 25px;
            opacity: 0.3;
            font-family: serif;
        }

        body[lang="ar"] .quote-box::before {
            left: auto;
            right: 25px;
        }

        body[lang="ar"] .quote-box::after {
            right: auto;
            left: 25px;
        }

        .mood-emoji {
            font-size: 2.5em;
            margin-bottom: 15px;
            display: block;
            animation: bounce 2s infinite;
        }

        @keyframes fadeInUp {
            from { 
                opacity: 0; 
                transform: translateY(40px) scale(0.95);
            }
            to { 
                opacity: 1; 
                transform: translateY(0) scale(1);
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-10px);}
            60% {transform: translateY(-5px);}
        }

        .actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin: 25px 0;
            flex-wrap: wrap;
        }

        .action-btn {
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            padding: 12px 20px;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            font-size: 0.9em;
            display: flex;
            align-items: center;
            gap: 8px;
            min-width: 120px;
            justify-content: center;
        }

        .action-btn:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .translation-actions {
            margin-top: 15px;
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .stats-panel {
            background: rgba(0,0,0,0.5);
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            text-align: center;
        }

        .stat-item {
            padding: 10px;
        }

        .stat-value {
            font-size: 1.5em;
            font-weight: bold;
            color: var(--primary-color);
        }

        .stat-label {
            font-size: 0.8em;
            opacity: 0.8;
        }

        footer {
            margin-top: 30px;
            font-size: 0.9em;
            background-color: rgba(0,0,0,0.6);
            padding: 15px 25px;
            border-radius: 15px;
            color: var(--primary-color);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        /* Mode Sombre/Clair */
        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(0,0,0,0.5);
            border: none;
            color: white;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            backdrop-filter: blur(10px);
            z-index: 1000;
        }

        .language-toggle {
            position: fixed;
            top: 70px;
            right: 20px;
            background: rgba(0,0,0,0.5);
            border: none;
            color: white;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            backdrop-filter: blur(10px);
            z-index: 1000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .control-group {
                flex-direction: column;
                width: 100%;
            }
            
            select, button {
                width: 100%;
            }
            
            .quote-box {
                padding: 30px 25px;
                margin: 0 10px;
            }
            
            .actions {
                flex-direction: column;
            }
            
            .action-btn {
                width: 100%;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .theme-toggle, .language-toggle {
                position: relative;
                top: auto;
                right: auto;
                margin: 5px;
            }
        }

        /* Loading animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--secondary-color);
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            z-index: 1000;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from { transform: translateX(-50%) translateY(-100%); }
            to { transform: translateX(-50%) translateY(0); }
        }
    </style>
</head>
<body>
    <button class="theme-toggle" onclick="toggleTheme()">🌓</button>
    <button class="language-toggle" onclick="showLanguageModal()">🌐</button>

    <div class="container">
        <div class="header">
            <h1>🌿 <?= getUIText('title', $current_lang) ?></h1>
            <div class="subtitle"><?= getUIText('subtitle', $current_lang) ?></div>
        </div>

        <form method="POST" id="moodForm" class="controls-panel">
            <div class="control-group">
                <select name="mood" id="moodSelect" required>
                    <option value=""><?= getUIText('choose_mood', $current_lang) ?></option>
                    <option value="heureux" <?= $mood == 'heureux' ? 'selected' : '' ?>><?= $current_lang === 'fr' ? 'Heureux 😊' : ($current_lang === 'en' ? 'Happy 😊' : ($current_lang === 'ar' ? 'سعيد 😊' : 'Feliz 😊')) ?></option>
                    <option value="triste" <?= $mood == 'triste' ? 'selected' : '' ?>><?= $current_lang === 'fr' ? 'Triste 😢' : ($current_lang === 'en' ? 'Sad 😢' : ($current_lang === 'ar' ? 'حزين 😢' : 'Triste 😢')) ?></option>
                    <option value="calme" <?= $mood == 'calme' ? 'selected' : '' ?>><?= $current_lang === 'fr' ? 'Calme 🌙' : ($current_lang === 'en' ? 'Calm 🌙' : ($current_lang === 'ar' ? 'هادئ 🌙' : 'Calma 🌙')) ?></option>
                    <option value="amoureux" <?= $mood == 'amoureux' ? 'selected' : '' ?>><?= $current_lang === 'fr' ? 'Amoureux 💖' : ($current_lang === 'en' ? 'In Love 💖' : ($current_lang === 'ar' ? 'عاشق 💖' : 'Enamorado 💖')) ?></option>
                    <option value="motivé" <?= $mood == 'motivé' ? 'selected' : '' ?>><?= $current_lang === 'fr' ? 'Motivé 💪' : ($current_lang === 'en' ? 'Motivated 💪' : ($current_lang === 'ar' ? 'متحمس 💪' : 'Motivado 💪')) ?></option>
                    <option value="inspiré" <?= $mood == 'inspiré' ? 'selected' : '' ?>><?= $current_lang === 'fr' ? 'Inspiré ✨' : ($current_lang === 'en' ? 'Inspired ✨' : ($current_lang === 'ar' ? 'مُلهم ✨' : 'Inspirado ✨')) ?></option>
                </select>
                <button type="submit" id="submitBtn">
                    <span id="btnText"><?= getUIText('show_quote', $current_lang) ?></span>
                    <span id="btnLoading" class="loading" style="display: none;"></span>
                </button>
            </div>

            <div class="language-selector">
                <?php foreach ($languages as $code => $lang): ?>
                    <button type="submit" name="lang" value="<?= $code ?>" class="lang-btn <?= $current_lang === $code ? 'active' : '' ?>">
                        <?= $lang['flag'] ?> <?= $lang['name'] ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </form>

        <div class="quote-container">
            <div class="quote-box">
                <span class="mood-emoji"><?= $selected_emoji ?></span>
                <?= htmlspecialchars($selected_quote) ?>
            </div>
        </div>

        <div class="translation-actions">
            <div class="language-selector">
                <?php foreach ($languages as $code => $lang): ?>
                    <?php if ($code !== $current_lang && isset($selected_quote_data[$code]) && !empty($selected_quote_data[$code])): ?>
                        <button class="lang-btn" onclick="translateQuote('<?= $code ?>')">
                            <?= $lang['flag'] ?> <?= $lang['name'] ?>
                        </button>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="actions">
            <button class="action-btn" onclick="shareQuote()">
                <span>📤</span> <?= getUIText('share', $current_lang) ?>
            </button>
            <button class="action-btn" onclick="copyQuote()">
                <span>📋</span> <?= getUIText('copy', $current_lang) ?>
            </button>
            <button class="action-btn" onclick="newQuote()">
                <span>🔄</span> <?= getUIText('new', $current_lang) ?>
            </button>
            <button class="action-btn" onclick="speakQuote()">
                <span>🔊</span> <?= getUIText('listen', $current_lang) ?>
            </button>
            <button class="action-btn" onclick="saveFavorite()">
                <span>⭐</span> <?= getUIText('favorite', $current_lang) ?>
            </button>
        </div>

        <div class="stats-panel">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-value"><?= $_SESSION['stats']['total_views'] ?></div>
                    <div class="stat-label"><?= getUIText('quotes_viewed', $current_lang) ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?= $_SESSION['stats']['mood_views'][$mood] ?></div>
                    <div class="stat-label"><?= $current_lang === 'fr' ? ucfirst($mood) . ' vues' : ($current_lang === 'en' ? ucfirst($mood) . ' views' : ($current_lang === 'ar' ? 'مشاهدات ' . $mood : 'vistas ' . $mood)) ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?= $emojis[$_SESSION['stats']['favorite_mood']] ?></div>
                    <div class="stat-label"><?= getUIText('favorite_mood', $current_lang) ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?= count(array_keys($languages)) ?></div>
                    <div class="stat-label"><?= getUIText('languages', $current_lang) ?></div>
                </div>
            </div>
        </div>

        <footer>
            <?php
            printf(getUIText('footer', $current_lang), count($_SESSION['previous_quotes'][$mood]), count($quotes[$mood]));
            ?>
        </footer>
    </div>

    <!-- Modal pour les langues -->
    <div id="languageModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 2000; justify-content: center; align-items: center;">
        <div style="background: white; padding: 30px; border-radius: 15px; text-align: center; color: #333; max-width: 400px;">
            <h3 style="margin-bottom: 20px;">🌐 Choose Language / Choisir la langue</h3>
            <div style="display: flex; flex-direction: column; gap: 10px;">
                <?php foreach ($languages as $code => $lang): ?>
                    <form method="POST" style="margin: 0;">
                        <input type="hidden" name="lang" value="<?= $code ?>">
                        <button type="submit" style="width: 100%; padding: 12px; border: none; border-radius: 8px; background: var(--secondary-color); color: white; cursor: pointer;">
                            <?= $lang['flag'] ?> <?= $lang['name'] ?>
                        </button>
                    </form>
                <?php endforeach; ?>
            </div>
            <button onclick="hideLanguageModal()" style="margin-top: 15px; padding: 8px 15px; border: none; border-radius: 5px; background: #ccc; cursor: pointer;">
                Cancel
            </button>
        </div>
    </div>

    <script>
        // Données de traduction
        const quoteTranslations = <?= json_encode($selected_quote_data) ?>;
        const currentLang = '<?= $current_lang ?>';
        const languages = <?= json_encode($languages) ?>;

        // Textes de l'interface selon la langue
        const uiTexts = {
            'fr': {
                'shareSuccess': 'Citation copiée ! Partagez-la où vous voulez 📤',
                'copySuccess': 'Citation copiée dans le presse-papier ! 📋',
                'favoriteSuccess': 'Citation ajoutée aux favoris ! ⭐',
                'favoriteExists': 'Cette citation est déjà dans vos favoris 💫',
                'listening': '⏸️ Lecture...',
                'newQuote': 'Nouvelle citation'
            },
            'en': {
                'shareSuccess': 'Quote copied! Share it wherever you want 📤',
                'copySuccess': 'Quote copied to clipboard! 📋',
                'favoriteSuccess': 'Quote added to favorites! ⭐',
                'favoriteExists': 'This quote is already in your favorites 💫',
                'listening': '⏸️ Listening...',
                'newQuote': 'New quote'
            },
            'ar': {
                'shareSuccess': 'تم نسخ الاقتباس! شاركه حيثما تريد 📤',
                'copySuccess': 'تم نسخ الاقتباس إلى الحافظة! 📋',
                'favoriteSuccess': 'تمت إضافة الاقتباس إلى المفضلة! ⭐',
                'favoriteExists': 'هذا الاقتباس موجود بالفعل في مفضلتك 💫',
                'listening': '⏸️ جاري الاستماع...',
                'newQuote': 'اقتباس جديد'
            },
            'es': {
                'shareSuccess': '¡Cita copiada! Compártela donde quieras 📤',
                'copySuccess': '¡Cita copiada al portapapeles! 📋',
                'favoriteSuccess': '¡Cita añadida a favoritos! ⭐',
                'favoriteExists': 'Esta cita ya está en tus favoritos 💫',
                'listening': '⏸️ Escuchando...',
                'newQuote': 'Nueva cita'
            }
        };

        // Préchargement des images pour transitions fluides
        const backgrounds = <?= json_encode(array_values($backgrounds)) ?>;
        backgrounds.forEach(bg => {
            const img = new Image();
            img.src = bg;
        });

        // Animation de soumission du formulaire
        document.getElementById('moodForm').addEventListener('submit', function() {
            const btnText = document.getElementById('btnText');
            const btnLoading = document.getElementById('btnLoading');
            
            btnText.style.display = 'none';
            btnLoading.style.display = 'inline-block';
        });

        // Traduction de citation
        function translateQuote(langCode) {
            if (quoteTranslations[langCode]) {
                document.querySelector('.quote-box').innerHTML = 
                    `<span class="mood-emoji"><?= $selected_emoji ?></span>` +
                    quoteTranslations[langCode];
                
                showNotification(`🌐 ${languages[langCode].name}`);
            }
        }

        // Fonction de partage
        function shareQuote() {
            const quote = document.querySelector('.quote-box').textContent;
            const mood = document.getElementById('moodSelect').options[document.getElementById('moodSelect').selectedIndex].text;
            
            if (navigator.share) {
                navigator.share({
                    title: (currentLang === 'fr' ? 'Citation Inspirante - ' : 'Inspirational Quote - ') + mood,
                    text: quote,
                    url: window.location.href
                });
            } else {
                copyQuote();
                showNotification(uiTexts[currentLang].shareSuccess);
            }
        }

        // Fonction de copie
        function copyQuote() {
            const quote = document.querySelector('.quote-box').textContent;
            const mood = document.getElementById('moodSelect').options[document.getElementById('moodSelect').selectedIndex].text;
            const textToCopy = `"${quote.trim()}"\n\n— ${currentLang === 'fr' ? 'Humeur' : 'Mood'} ${mood}\n📱 ${currentLang === 'fr' ? 'Citations Inspirantes' : 'Inspirational Quotes'}`;
            
            navigator.clipboard.writeText(textToCopy).then(() => {
                showNotification(uiTexts[currentLang].copySuccess);
            });
        }

        // Nouvelle citation aléatoire
        function newQuote() {
            document.getElementById('moodForm').submit();
        }

        // Synthèse vocale
        function speakQuote() {
            const quote = document.querySelector('.quote-box').textContent;
            const utterance = new SpeechSynthesisUtterance(quote);
            
            // Configurer la langue pour la synthèse vocale
            const langMap = {
                'fr': 'fr-FR',
                'en': 'en-US',
                'ar': 'ar-SA',
                'es': 'es-ES'
            };
            
            utterance.lang = langMap[currentLang] || 'fr-FR';
            utterance.rate = 0.9;
            utterance.pitch = 1;
            
            // Changer l'icône pendant la lecture
            const speakBtn = event.target.closest('.action-btn');
            const originalHTML = speakBtn.innerHTML;
            speakBtn.innerHTML = `<span>⏸️</span> ${uiTexts[currentLang].listening}`;
            
            utterance.onend = () => {
                speakBtn.innerHTML = originalHTML;
            };
            
            speechSynthesis.speak(utterance);
        }

        // Sauvegarde en favoris
        function saveFavorite() {
            const quote = document.querySelector('.quote-box').textContent.trim();
            const mood = document.getElementById('moodSelect').value;
            const favorites = JSON.parse(localStorage.getItem('quoteFavorites') || '[]');
            
            // Éviter les doublons
            if (!favorites.some(fav => fav.quote === quote && fav.mood === mood)) {
                favorites.push({
                    quote: quote,
                    mood: mood,
                    lang: currentLang,
                    date: new Date().toISOString(),
                    translation: quoteTranslations
                });
                localStorage.setItem('quoteFavorites', JSON.stringify(favorites));
                showNotification(uiTexts[currentLang].favoriteSuccess);
            } else {
                showNotification(uiTexts[currentLang].favoriteExists);
            }
        }

        // Gestion de la modal des langues
        function showLanguageModal() {
            document.getElementById('languageModal').style.display = 'flex';
        }

        function hideLanguageModal() {
            document.getElementById('languageModal').style.display = 'none';
        }

        // Changement automatique de citation
        let autoChangeInterval = setInterval(newQuote, 45000);

        // Arrêter le changement automatique quand la page n'est pas visible
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                clearInterval(autoChangeInterval);
            } else {
                autoChangeInterval = setInterval(newQuote, 45000);
            }
        });

        // Notification
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'notification';
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        // Mode sombre/clair
        function toggleTheme() {
            const body = document.body;
            const currentBg = body.style.background;
            
            if (currentBg.includes('rgba(255,255,255,0.1)')) {
                body.style.background = body.style.background.replace('rgba(255,255,255,0.1)', 'rgba(0,0,0,0.7)');
            } else {
                body.style.background = body.style.background.replace('rgba(0,0,0,0.7)', 'rgba(255,255,255,0.1)');
            }
        }

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in-out';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Raccourcis clavier
        document.addEventListener('keydown', function(e) {
            if (e.key === ' ') { // Espace pour nouvelle citation
                e.preventDefault();
                newQuote();
            } else if (e.key === 'c' && e.ctrlKey) { // Ctrl+C pour copier
                e.preventDefault();
                copyQuote();
            } else if (e.key === 's' && e.ctrlKey) { // Ctrl+S pour sauvegarder
                e.preventDefault();
                saveFavorite();
            } else if (e.key === 'l' && e.ctrlKey) { // Ctrl+L pour langue
                e.preventDefault();
                showLanguageModal();
            }
        });

        // Fermer la modal en cliquant à l'extérieur
        document.getElementById('languageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                hideLanguageModal();
            }
        });
    </script>
</body>
</html>
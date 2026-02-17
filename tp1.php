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
        ],
        [
            'fr' => "Être heureux, c'est décider de l'être chaque matin.",
            'en' => "Being happy is deciding to be so every morning.",
            'ar' => "أن تكون سعيداً يعني أن تقرر ذلك كل صباح.",
            'es' => "Ser feliz es decidir serlo cada mañana."
        ],
        [
            'fr' => "La vraie joie se partage, elle grandit en se donnant.",
            'en' => "True joy is shared; it grows by giving itself away.",
            'ar' => "الفرح الحقيقي يُشارك، وهو ينمو بالعطاء.",
            'es' => "La verdadera alegría se comparte; crece al darse."
        ],
        [
            'fr' => "Souris à la vie, elle te le rendra au centuple.",
            'en' => "Smile at life and it will reward you a hundredfold.",
            'ar' => "ابتسم للحياة وستكافئك مئة ضعف.",
            'es' => "Sonríele a la vida y te lo recompensará cien veces."
        ],
        [
            'fr' => "Chaque instant joyeux est un cadeau que l'on offre à son âme.",
            'en' => "Every joyful moment is a gift you offer to your soul.",
            'ar' => "كل لحظة مفرحة هي هدية تقدمها لروحك.",
            'es' => "Cada momento alegre es un regalo que le ofreces a tu alma."
        ],
        [
            'fr' => "Le rire est le soleil qui chasse l'hiver du visage humain.",
            'en' => "Laughter is the sunshine that drives winter from the human face.",
            'ar' => "الضحك هو الشمس التي تطرد الشتاء من الوجه البشري.",
            'es' => "La risa es el sol que ahuyenta el invierno del rostro humano."
        ],
        [
            'fr' => "Trouve la beauté en tout et tu ne manqueras jamais de bonheur.",
            'en' => "Find beauty in everything and you will never lack happiness.",
            'ar' => "ابحث عن الجمال في كل شيء ولن تفتقر إلى السعادة أبداً.",
            'es' => "Encuentra belleza en todo y nunca te faltará la felicidad."
        ],
        [
            'fr' => "Le bonheur n'est pas un but, c'est un chemin que l'on choisit.",
            'en' => "Happiness is not a destination, it is a path you choose.",
            'ar' => "السعادة ليست هدفاً، إنها طريق تختاره.",
            'es' => "La felicidad no es un destino, es un camino que eliges."
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
        ],
        [
            'fr' => "Les larmes sont les mots que le cœur ne peut pas dire.",
            'en' => "Tears are words that the heart cannot express.",
            'ar' => "الدموع هي الكلمات التي لا يستطيع القلب قولها.",
            'es' => "Las lágrimas son palabras que el corazón no puede decir."
        ],
        [
            'fr' => "Même dans la nuit la plus noire, les étoiles continuent de briller.",
            'en' => "Even in the darkest night, the stars continue to shine.",
            'ar' => "حتى في أحلك الليالي، تواصل النجوم إضاءتها.",
            'es' => "Incluso en la noche más oscura, las estrellas siguen brillando."
        ],
        [
            'fr' => "Traverser la tristesse, c'est déjà en sortir.",
            'en' => "Walking through sadness is already a way out of it.",
            'ar' => "اجتياز الحزن هو في حد ذاته الخروج منه.",
            'es' => "Atravesar la tristeza ya es una forma de salir de ella."
        ],
        [
            'fr' => "Le chagrin, comme la rivière, se doit d'être guidé.",
            'en' => "Sorrow, like a river, must be guided.",
            'ar' => "الحزن، كالنهر، يجب توجيهه.",
            'es' => "El dolor, como un río, debe ser guiado."
        ],
        [
            'fr' => "On ne guérit pas d'une tristesse en la cachant, mais en l'acceptant.",
            'en' => "You don't heal from sadness by hiding it, but by accepting it.",
            'ar' => "لا تتعافى من الحزن بإخفائه، بل بقبوله.",
            'es' => "No te curas de la tristeza escondiéndola, sino aceptándola."
        ],
        [
            'fr' => "Après la pluie vient le beau temps — et après la peine, la paix.",
            'en' => "After the rain comes fair weather — and after sorrow, peace.",
            'ar' => "بعد المطر يأتي الطقس الجميل — وبعد الحزن، السلام.",
            'es' => "Después de la lluvia llega el buen tiempo — y después del dolor, la paz."
        ],
        [
            'fr' => "Tu es plus fort que cette douleur, même si tu ne le vois pas encore.",
            'en' => "You are stronger than this pain, even if you can't see it yet.",
            'ar' => "أنت أقوى من هذا الألم، حتى لو لم تر ذلك بعد.",
            'es' => "Eres más fuerte que este dolor, aunque aún no lo veas."
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
        ],
        [
            'fr' => "Dans le calme se trouvent les plus grandes forces.",
            'en' => "In stillness lie the greatest strengths.",
            'ar' => "في الهدوء تكمن أعظم القوى.",
            'es' => "En la calma yacen las mayores fortalezas."
        ],
        [
            'fr' => "Comme l'eau tranquille reflète le ciel, l'esprit calme reflète la vérité.",
            'en' => "As still water reflects the sky, a calm mind reflects the truth.",
            'ar' => "كما تعكس المياه الهادئة السماء، يعكس العقل الهادئ الحقيقة.",
            'es' => "Como el agua tranquila refleja el cielo, la mente calmada refleja la verdad."
        ],
        [
            'fr' => "Pose ton esprit, laisse tes pensées passer comme des nuages.",
            'en' => "Rest your mind, let your thoughts pass like clouds.",
            'ar' => "أرح عقلك، دع أفكارك تمر كالسحاب.",
            'es' => "Descansa tu mente, deja que tus pensamientos pasen como nubes."
        ],
        [
            'fr' => "La paix intérieure est la richesse la plus précieuse qui soit.",
            'en' => "Inner peace is the most precious wealth there is.",
            'ar' => "السلام الداخلي هو أثمن الثروات على الإطلاق.",
            'es' => "La paz interior es la riqueza más preciosa que existe."
        ],
        [
            'fr' => "Être calme, c'est être maître de soi-même.",
            'en' => "Being calm is being the master of yourself.",
            'ar' => "أن تكون هادئاً يعني أن تكون سيد نفسك.",
            'es' => "Estar tranquilo es ser dueño de ti mismo."
        ],
        [
            'fr' => "Le repos de l'âme nourrit mieux que le festin du monde.",
            'en' => "The rest of the soul nourishes better than the world's feast.",
            'ar' => "راحة الروح تُغذّي أفضل من وليمة الدنيا.",
            'es' => "El descanso del alma nutre mejor que el festín del mundo."
        ],
        [
            'fr' => "Dans chaque moment de calme, une graine de sagesse est plantée.",
            'en' => "In every moment of calm, a seed of wisdom is planted.",
            'ar' => "في كل لحظة هدوء، تُزرع بذرة من الحكمة.",
            'es' => "En cada momento de calma, se planta una semilla de sabiduría."
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
        ],
        [
            'fr' => "Aimer, c'est trouver sa richesse hors de soi.",
            'en' => "To love is to find your wealth outside yourself.",
            'ar' => "أن تُحب يعني أن تجد ثروتك خارج نفسك.",
            'es' => "Amar es encontrar tu riqueza fuera de ti mismo."
        ],
        [
            'fr' => "L'amour est la seule folie qui guérit toutes les blessures.",
            'en' => "Love is the only madness that heals all wounds.",
            'ar' => "الحب هو الجنون الوحيد الذي يشفي جميع الجروح.",
            'es' => "El amor es la única locura que sana todas las heridas."
        ],
        [
            'fr' => "Là où tu es, le monde entier s'illumine.",
            'en' => "Where you are, the whole world lights up.",
            'ar' => "حيث تكون، يضيء العالم كله.",
            'es' => "Donde tú estás, el mundo entero se ilumina."
        ],
        [
            'fr' => "Te rencontrer a changé la couleur de tous mes jours.",
            'en' => "Meeting you changed the color of all my days.",
            'ar' => "لقاؤك غيّر لون كل أيامي.",
            'es' => "Encontrarte cambió el color de todos mis días."
        ],
        [
            'fr' => "L'amour n'est pas ce que l'on cherche, c'est ce que l'on devient.",
            'en' => "Love is not what you seek, it's what you become.",
            'ar' => "الحب ليس ما تبحث عنه، إنه ما تصبحه.",
            'es' => "El amor no es lo que buscas, es lo que te conviertes."
        ],
        [
            'fr' => "Chaque battement de mon cœur porte ton prénom.",
            'en' => "Every beat of my heart carries your name.",
            'ar' => "كل نبضة من قلبي تحمل اسمك.",
            'es' => "Cada latido de mi corazón lleva tu nombre."
        ],
        [
            'fr' => "Avec toi, même le silence est une douce conversation.",
            'en' => "With you, even silence is a sweet conversation.",
            'ar' => "معك، حتى الصمت محادثة عذبة.",
            'es' => "Contigo, incluso el silencio es una dulce conversación."
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
            'ar' => "الفشل ليس النهاية، إنما هو بداية التعلم.",
            'es' => "El fracaso no es el final, es solo el comienzo del aprendizaje."
        ],
        [
            'fr' => "La seule limite est celle que tu te fixes toi-même.",
            'en' => "The only limit is the one you set for yourself.",
            'ar' => "الحد الوحيد هو ذلك الذي تضعه لنفسك.",
            'es' => "El único límite es el que tú mismo te pones."
        ],
        [
            'fr' => "Commence. Le reste suivra.",
            'en' => "Begin. The rest will follow.",
            'ar' => "ابدأ. والباقي سيتبع.",
            'es' => "Comienza. Lo demás seguirá."
        ],
        [
            'fr' => "Ta détermination est plus puissante que n'importe quel obstacle.",
            'en' => "Your determination is more powerful than any obstacle.",
            'ar' => "عزيمتك أقوى من أي عقبة.",
            'es' => "Tu determinación es más poderosa que cualquier obstáculo."
        ],
        [
            'fr' => "Chaque jour est une nouvelle chance de devenir meilleur.",
            'en' => "Every day is a new chance to become better.",
            'ar' => "كل يوم هو فرصة جديدة لتكون أفضل.",
            'es' => "Cada día es una nueva oportunidad para mejorar."
        ],
        [
            'fr' => "Le succès est la somme de petits efforts répétés chaque jour.",
            'en' => "Success is the sum of small efforts repeated every day.",
            'ar' => "النجاح هو مجموع الجهود الصغيرة المتكررة يومياً.",
            'es' => "El éxito es la suma de pequeños esfuerzos repetidos cada día."
        ],
        [
            'fr' => "Vis comme si tu ne pouvais pas échouer.",
            'en' => "Live as if you cannot fail.",
            'ar' => "عش كأنك لا تستطيع أن تفشل.",
            'es' => "Vive como si no pudieras fallar."
        ],
        [
            'fr' => "Tu as survécu à 100% de tes mauvais jours jusqu'ici.",
            'en' => "You have survived 100% of your bad days so far.",
            'ar' => "لقد نجوت من 100٪ من أيامك السيئة حتى الآن.",
            'es' => "Has sobrevivido al 100% de tus malos días hasta ahora."
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
        ],
        [
            'fr' => "L'imagination est plus importante que le savoir.",
            'en' => "Imagination is more important than knowledge.",
            'ar' => "الخيال أهم من المعرفة.",
            'es' => "La imaginación es más importante que el conocimiento."
        ],
        [
            'fr' => "Chaque idée brillante commence par un simple « et si… ».",
            'en' => "Every brilliant idea begins with a simple 'what if...'",
            'ar' => "كل فكرة رائعة تبدأ بـ 'ماذا لو...'",
            'es' => "Cada idea brillante comienza con un simple '¿y si...?'"
        ],
        [
            'fr' => "L'inspiration existe, mais elle te trouve en train de travailler.",
            'en' => "Inspiration does exist, but it finds you working.",
            'ar' => "الإلهام موجود، لكنه يجدك وأنت تعمل.",
            'es' => "La inspiración existe, pero te encuentra trabajando."
        ],
        [
            'fr' => "Crée quelque chose aujourd'hui, même si ça n'est pas parfait.",
            'en' => "Create something today, even if it's not perfect.",
            'ar' => "اصنع شيئاً اليوم، حتى لو لم يكن مثالياً.",
            'es' => "Crea algo hoy, aunque no sea perfecto."
        ],
        [
            'fr' => "Les plus grands voyages commencent par un seul pas.",
            'en' => "The greatest journeys begin with a single step.",
            'ar' => "أعظم الرحلات تبدأ بخطوة واحدة.",
            'es' => "Los más grandes viajes comienzan con un solo paso."
        ],
        [
            'fr' => "Ton unicité est ton superpouvoir.",
            'en' => "Your uniqueness is your superpower.",
            'ar' => "تفردك هو قوتك الخارقة.",
            'es' => "Tu singularidad es tu superpoder."
        ],
        [
            'fr' => "Le monde a besoin de ta lumière particulière.",
            'en' => "The world needs your particular light.",
            'ar' => "العالم يحتاج إلى ضوءك الخاص.",
            'es' => "El mundo necesita tu luz particular."
        ]
    ],
    'nostalgique' => [
        [
            'fr' => "Le passé est une lumière douce qui éclaire le présent.",
            'en' => "The past is a gentle light that illuminates the present.",
            'ar' => "الماضي نور لطيف يضيء الحاضر.",
            'es' => "El pasado es una luz suave que ilumina el presente."
        ],
        [
            'fr' => "Les souvenirs sont les parfums de l'âme.",
            'en' => "Memories are the fragrances of the soul.",
            'ar' => "الذكريات هي عطور الروح.",
            'es' => "Los recuerdos son los perfumes del alma."
        ],
        [
            'fr' => "Certains moments sont si beaux qu'ils deviennent éternels.",
            'en' => "Some moments are so beautiful they become eternal.",
            'ar' => "بعض اللحظات جميلة جداً لدرجة أنها تصبح أبدية.",
            'es' => "Algunos momentos son tan hermosos que se vuelven eternos."
        ],
        [
            'fr' => "Ce qui a été vécu reste à jamais vivant dans le cœur.",
            'en' => "What has been lived remains forever alive in the heart.",
            'ar' => "ما عُشِّ يبقى حياً إلى الأبد في القلب.",
            'es' => "Lo que ha sido vivido permanece para siempre vivo en el corazón."
        ],
        [
            'fr' => "La nostalgie est un voyage sans billet de retour, mais avec des photos.",
            'en' => "Nostalgia is a journey without a return ticket, but with photographs.",
            'ar' => "الحنين رحلة بلا تذكرة عودة، لكن مع صور.",
            'es' => "La nostalgia es un viaje sin boleto de regreso, pero con fotografías."
        ],
        [
            'fr' => "Se souvenir, c'est vivre deux fois.",
            'en' => "To remember is to live twice.",
            'ar' => "أن تتذكر يعني أن تعيش مرتين.",
            'es' => "Recordar es vivir dos veces."
        ],
        [
            'fr' => "Même les adieux laissent derrière eux de beaux souvenirs.",
            'en' => "Even farewells leave beautiful memories behind.",
            'ar' => "حتى الوداع يترك ذكريات جميلة.",
            'es' => "Incluso las despedidas dejan hermosos recuerdos."
        ],
        [
            'fr' => "Le temps passe, mais les belles années restent gravées dans l'âme.",
            'en' => "Time passes, but the beautiful years remain etched in the soul.",
            'ar' => "يمر الوقت، لكن السنوات الجميلة تبقى محفورة في الروح.",
            'es' => "El tiempo pasa, pero los hermosos años permanecen grabados en el alma."
        ],
        [
            'fr' => "Chéris chaque instant car les beaux souvenirs commencent aujourd'hui.",
            'en' => "Cherish every moment because beautiful memories begin today.",
            'ar' => "احتفظ بكل لحظة لأن الذكريات الجميلة تبدأ اليوم.",
            'es' => "Atesora cada momento porque los hermosos recuerdos comienzan hoy."
        ],
        [
            'fr' => "Dans le jardin du souvenir, les fleurs ne fanent jamais.",
            'en' => "In the garden of memory, flowers never wilt.",
            'ar' => "في حديقة الذاكرة، لا تذبل الزهور أبداً.",
            'es' => "En el jardín de la memoria, las flores nunca se marchitan."
        ]
    ],
    'anxieux' => [
        [
            'fr' => "Tu n'as pas à tout contrôler pour avancer.",
            'en' => "You don't have to control everything to move forward.",
            'ar' => "لا يجب أن تتحكم في كل شيء لكي تتقدم.",
            'es' => "No tienes que controlar todo para avanzar."
        ],
        [
            'fr' => "L'inquiétude est une prière pour ce que l'on ne veut pas.",
            'en' => "Worry is a prayer for what you don't want.",
            'ar' => "القلق دعاء لما لا تريد.",
            'es' => "La preocupación es una oración por lo que no quieres."
        ],
        [
            'fr' => "Respire. Tu as déjà traversé des tempêtes et tu en es sorti.",
            'en' => "Breathe. You have already been through storms and come out of them.",
            'ar' => "خذ نفساً. لقد مررت بالعواصف من قبل ونجوت.",
            'es' => "Respira. Ya has atravesado tormentas y has salido de ellas."
        ],
        [
            'fr' => "Ce moment difficile ne durera pas. Tiens bon.",
            'en' => "This difficult moment will not last. Hold on.",
            'ar' => "هذه اللحظة الصعبة لن تدوم. تمسّك.",
            'es' => "Este momento difícil no durará. Aguanta."
        ],
        [
            'fr' => "Concentre-toi sur ce que tu peux faire, pas sur ce que tu crains.",
            'en' => "Focus on what you can do, not on what you fear.",
            'ar' => "ركز على ما يمكنك فعله، لا على ما تخشاه.",
            'es' => "Concéntrate en lo que puedes hacer, no en lo que temes."
        ],
        [
            'fr' => "Demain a ses propres problèmes. Vis aujourd'hui.",
            'en' => "Tomorrow has its own problems. Live today.",
            'ar' => "لغدٍ مشاكله الخاصة. عش اليوم.",
            'es' => "Mañana tiene sus propios problemas. Vive hoy."
        ],
        [
            'fr' => "Tu es plus courageux que tu ne le crois.",
            'en' => "You are braver than you believe.",
            'ar' => "أنت أكثر شجاعة مما تعتقد.",
            'es' => "Eres más valiente de lo que crees."
        ],
        [
            'fr' => "Laisse aller ce que tu ne peux pas changer.",
            'en' => "Let go of what you cannot change.",
            'ar' => "اترك ما لا يمكنك تغييره.",
            'es' => "Suelta lo que no puedes cambiar."
        ],
        [
            'fr' => "La peur est normale. L'important est d'agir malgré elle.",
            'en' => "Fear is normal. What matters is acting despite it.",
            'ar' => "الخوف طبيعي. المهم هو التصرف رغمه.",
            'es' => "El miedo es normal. Lo importante es actuar a pesar de él."
        ],
        [
            'fr' => "Tu es en sécurité dans cet instant présent.",
            'en' => "You are safe in this present moment.",
            'ar' => "أنت بأمان في هذه اللحظة الراهنة.",
            'es' => "Estás seguro en este momento presente."
        ]
    ],
    'reconnaissant' => [
        [
            'fr' => "La gratitude transforme ce que nous avons en suffisance.",
            'en' => "Gratitude transforms what we have into enough.",
            'ar' => "الامتنان يحوّل ما لدينا إلى كفاية.",
            'es' => "La gratitud transforma lo que tenemos en suficiencia."
        ],
        [
            'fr' => "Chaque matin est un cadeau. Ouvre-le avec joie.",
            'en' => "Every morning is a gift. Open it with joy.",
            'ar' => "كل صباح هدية. افتحها بفرح.",
            'es' => "Cada mañana es un regalo. Ábrelo con alegría."
        ],
        [
            'fr' => "Celui qui est reconnaissant pour peu reçoit beaucoup.",
            'en' => "He who is grateful for little receives much.",
            'ar' => "من يشكر على القليل يتلقى الكثير.",
            'es' => "Quien es agradecido por poco recibe mucho."
        ],
        [
            'fr' => "Merci est la plus courte prière et la plus puissante.",
            'en' => "Thank you is the shortest prayer and the most powerful.",
            'ar' => "شكراً هي أقصر صلاة وأقواها.",
            'es' => "Gracias es la oración más corta y la más poderosa."
        ],
        [
            'fr' => "Compte tes bénédictions et tu perdras le compte.",
            'en' => "Count your blessings and you will lose count.",
            'ar' => "عدّ نعمك وستفقد العدد.",
            'es' => "Cuenta tus bendiciones y perderás la cuenta."
        ],
        [
            'fr' => "La vraie richesse, c'est être reconnaissant de ce que l'on a.",
            'en' => "True wealth is being grateful for what you have.",
            'ar' => "الثروة الحقيقية هي الامتنان لما لديك.",
            'es' => "La verdadera riqueza es ser agradecido por lo que tienes."
        ],
        [
            'fr' => "Voir la beauté dans l'ordinaire est un don extraordinaire.",
            'en' => "Seeing beauty in the ordinary is an extraordinary gift.",
            'ar' => "رؤية الجمال في العادي هبة استثنائية.",
            'es' => "Ver la belleza en lo ordinario es un don extraordinario."
        ],
        [
            'fr' => "La gratitude est la mémoire du cœur.",
            'en' => "Gratitude is the memory of the heart.",
            'ar' => "الامتنان ذاكرة القلب.",
            'es' => "La gratitud es la memoria del corazón."
        ],
        [
            'fr' => "Sois reconnaissant pour chaque défi : il te façonne.",
            'en' => "Be grateful for every challenge: it shapes you.",
            'ar' => "كن ممتناً لكل تحدٍ: فهو يشكّلك.",
            'es' => "Sé agradecido por cada desafío: te da forma."
        ],
        [
            'fr' => "Un cœur reconnaissant attire les plus belles choses.",
            'en' => "A grateful heart attracts the most beautiful things.",
            'ar' => "القلب الشاكر يجذب أجمل الأشياء.",
            'es' => "Un corazón agradecido atrae las cosas más hermosas."
        ]
    ],
    'créatif' => [
        [
            'fr' => "La créativité, c'est l'intelligence qui s'amuse.",
            'en' => "Creativity is intelligence having fun.",
            'ar' => "الإبداع هو الذكاء يلهو.",
            'es' => "La creatividad es la inteligencia divirtiéndose."
        ],
        [
            'fr' => "Chaque page blanche est une invitation à inventer un monde.",
            'en' => "Every blank page is an invitation to invent a world.",
            'ar' => "كل صفحة بيضاء هي دعوة لاختراع عالم.",
            'es' => "Cada página en blanco es una invitación a inventar un mundo."
        ],
        [
            'fr' => "L'art est la façon dont l'âme dit ce que les mots ne peuvent pas.",
            'en' => "Art is the way the soul says what words cannot.",
            'ar' => "الفن هو الطريقة التي تقول بها الروح ما لا تستطيع الكلمات قوله.",
            'es' => "El arte es la forma en que el alma dice lo que las palabras no pueden."
        ],
        [
            'fr' => "Crée sans peur du jugement. L'imperfection est le début du chef-d'œuvre.",
            'en' => "Create without fear of judgment. Imperfection is the beginning of a masterpiece.",
            'ar' => "ابتكر دون خوف من الحكم. النقص هو بداية التحفة.",
            'es' => "Crea sin miedo al juicio. La imperfección es el comienzo de una obra maestra."
        ],
        [
            'fr' => "Ose mélanger les couleurs que personne n'ose mélanger.",
            'en' => "Dare to mix the colors no one else dares to mix.",
            'ar' => "تجرأ على مزج الألوان التي لا يجرؤ أحد على مزجها.",
            'es' => "Atrévete a mezclar los colores que nadie más se atreve a mezclar."
        ],
        [
            'fr' => "La créativité n'attend pas l'humeur parfaite, elle la crée.",
            'en' => "Creativity doesn't wait for the perfect mood, it creates it.",
            'ar' => "الإبداع لا ينتظر المزاج المثالي، بل يخلقه.",
            'es' => "La creatividad no espera el estado de ánimo perfecto, lo crea."
        ],
        [
            'fr' => "Chaque idée bizarre est une idée normale qui n'a pas encore trouvé son public.",
            'en' => "Every bizarre idea is a normal idea that hasn't found its audience yet.",
            'ar' => "كل فكرة غريبة هي فكرة عادية لم تجد جمهورها بعد.",
            'es' => "Cada idea extraña es una idea normal que aún no ha encontrado su público."
        ],
        [
            'fr' => "Invente. Efface. Recommence. C'est ça, la magie de créer.",
            'en' => "Invent. Erase. Start over. That is the magic of creating.",
            'ar' => "ابتكر. امح. ابدأ من جديد. هذا هو سحر الإبداع.",
            'es' => "Inventa. Borra. Vuelve a empezar. Esa es la magia de crear."
        ],
        [
            'fr' => "La plus belle œuvre que tu créeras, c'est ta propre vie.",
            'en' => "The most beautiful work you will ever create is your own life.",
            'ar' => "أجمل عمل ستخلقه هو حياتك بنفسك.",
            'es' => "La obra más hermosa que crearás es tu propia vida."
        ],
        [
            'fr' => "Ton regard unique sur le monde est ton plus grand talent.",
            'en' => "Your unique view of the world is your greatest talent.",
            'ar' => "نظرتك الفريدة للعالم هي أعظم مواهبك.",
            'es' => "Tu mirada única sobre el mundo es tu mayor talento."
        ]
    ]
];

// Fonction pour obtenir une traduction sécurisée
function getSafeTranslation($quote_data, $lang) {
    if (isset($quote_data[$lang]) && !empty($quote_data[$lang])) {
        return $quote_data[$lang];
    }
    if (isset($quote_data['fr']) && !empty($quote_data['fr'])) {
        return $quote_data['fr'];
    }
    if (isset($quote_data['en']) && !empty($quote_data['en'])) {
        return $quote_data['en'];
    }
    if (!empty($quote_data)) {
        return reset($quote_data);
    }
    return "Citation non disponible";
}

// Images de fond optimisées
$backgrounds = [
    'heureux'      => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'triste'       => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'calme'        => 'https://images.unsplash.com/photo-1439066615861-d1af74d74000?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'amoureux'     => 'https://images.unsplash.com/photo-1518568814500-bf0f8d125f46?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'motivé'       => 'https://images.unsplash.com/photo-1579546929662-711aa81148cf?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'inspiré'      => 'https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'nostalgique'  => 'https://images.unsplash.com/photo-1501854140801-50d01698950b?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'anxieux'      => 'https://images.unsplash.com/photo-1519834785169-98be25ec3f84?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'reconnaissant'=> 'https://images.unsplash.com/photo-1470770841072-f978cf4d019e?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80',
    'créatif'      => 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?ixlib=rb-4.0.3&w=800&h=600&fit=crop&q=80'
];

// Couleurs par humeur
$colors = [
    'heureux'      => ['primary' => '#FFD166', 'secondary' => '#FF9E00'],
    'triste'       => ['primary' => '#A0C4FF', 'secondary' => '#6A8EFF'],
    'calme'        => ['primary' => '#C8E6C9', 'secondary' => '#66BB6A'],
    'amoureux'     => ['primary' => '#FFB7C5', 'secondary' => '#FF6B8B'],
    'motivé'       => ['primary' => '#FFA94D', 'secondary' => '#FF7B00'],
    'inspiré'      => ['primary' => '#D8B4FE', 'secondary' => '#A855F7'],
    'nostalgique'  => ['primary' => '#F0C9A0', 'secondary' => '#C68C52'],
    'anxieux'      => ['primary' => '#B0C4DE', 'secondary' => '#5F7F9F'],
    'reconnaissant'=> ['primary' => '#A8E6CF', 'secondary' => '#3AB08F'],
    'créatif'      => ['primary' => '#FFD1DC', 'secondary' => '#FF69B4']
];

// Émojis par humeur
$emojis = [
    'heureux'      => '😊',
    'triste'       => '😢',
    'calme'        => '🌙',
    'amoureux'     => '💖',
    'motivé'       => '💪',
    'inspiré'      => '✨',
    'nostalgique'  => '🌅',
    'anxieux'      => '🌊',
    'reconnaissant'=> '🙏',
    'créatif'      => '🎨'
];

// Langues disponibles
$languages = [
    'fr' => ['name' => 'Français', 'flag' => '🇫🇷'],
    'en' => ['name' => 'English', 'flag' => '🇺🇸'],
    'ar' => ['name' => 'العربية', 'flag' => '🇸🇦'],
    'es' => ['name' => 'Español', 'flag' => '🇪🇸']
];

// Noms des humeurs localisés
$mood_names = [
    'heureux'      => ['fr' => 'Heureux 😊',       'en' => 'Happy 😊',       'ar' => 'سعيد 😊',    'es' => 'Feliz 😊'],
    'triste'       => ['fr' => 'Triste 😢',        'en' => 'Sad 😢',         'ar' => 'حزين 😢',   'es' => 'Triste 😢'],
    'calme'        => ['fr' => 'Calme 🌙',          'en' => 'Calm 🌙',        'ar' => 'هادئ 🌙',   'es' => 'Calma 🌙'],
    'amoureux'     => ['fr' => 'Amoureux 💖',       'en' => 'In Love 💖',     'ar' => 'عاشق 💖',   'es' => 'Enamorado 💖'],
    'motivé'       => ['fr' => 'Motivé 💪',         'en' => 'Motivated 💪',   'ar' => 'متحمس 💪',  'es' => 'Motivado 💪'],
    'inspiré'      => ['fr' => 'Inspiré ✨',         'en' => 'Inspired ✨',    'ar' => 'مُلهم ✨',   'es' => 'Inspirado ✨'],
    'nostalgique'  => ['fr' => 'Nostalgique 🌅',    'en' => 'Nostalgic 🌅',   'ar' => 'حنين 🌅',   'es' => 'Nostálgico 🌅'],
    'anxieux'      => ['fr' => 'Anxieux 🌊',        'en' => 'Anxious 🌊',     'ar' => 'قلق 🌊',    'es' => 'Ansioso 🌊'],
    'reconnaissant'=> ['fr' => 'Reconnaissant 🙏',  'en' => 'Grateful 🙏',    'ar' => 'ممتنّ 🙏',  'es' => 'Agradecido 🙏'],
    'créatif'      => ['fr' => 'Créatif 🎨',        'en' => 'Creative 🎨',    'ar' => 'مبدع 🎨',   'es' => 'Creativo 🎨']
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
if (count($_SESSION['previous_quotes'][$mood]) >= count($quotes[$mood])) {
    $_SESSION['previous_quotes'][$mood] = [];
}

$available_quotes = array_diff_key($quotes[$mood], array_flip($_SESSION['previous_quotes'][$mood]));
if (empty($available_quotes)) {
    $_SESSION['previous_quotes'][$mood] = [];
    $available_quotes = $quotes[$mood];
}

$random_index = array_rand($available_quotes);
$selected_quote_data = $available_quotes[$random_index];
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
// Ensure new moods exist in stats
foreach (array_keys($quotes) as $k) {
    if (!isset($_SESSION['stats']['mood_views'][$k])) {
        $_SESSION['stats']['mood_views'][$k] = 0;
    }
}

$_SESSION['stats']['total_views']++;
$_SESSION['stats']['mood_views'][$mood]++;
$_SESSION['stats']['languages_used'][$current_lang]++;

$favorite_mood = array_keys($_SESSION['stats']['mood_views'], max($_SESSION['stats']['mood_views']))[0];
$_SESSION['stats']['favorite_mood'] = $favorite_mood;

$selected_bg = $backgrounds[$mood];
$selected_color = $colors[$mood];
$selected_emoji = $emojis[$mood];

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

    <?php foreach ($preload_bgs as $bg): ?>
    <link rel="preload" as="image" href="<?= htmlspecialchars($bg) ?>">
    <?php endforeach; ?>

    <style>
        :root {
            --primary-color: <?= $selected_color['primary'] ?>;
            --secondary-color: <?= $selected_color['secondary'] ?>;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', 'Noto Sans Arabic', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: #fff;
            text-shadow: 0 1px 3px rgba(0,0,0,0.6);
            background: linear-gradient(135deg,rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.5) 50%,rgba(0,0,0,0.7) 100%),
                url('<?= htmlspecialchars($selected_bg) ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            transition: all 0.8s ease-in-out;
            padding: 20px;
        }

        body[lang="ar"] { direction: rtl; font-family: 'Noto Sans Arabic','Poppins',sans-serif; }

        .container { width: 100%; max-width: 900px; text-align: center; }
        .header { margin-bottom: 30px; }

        h1 {
            color: var(--primary-color);
            font-size: clamp(1.8em,4vw,2.8em);
            margin-bottom: 10px;
            background-color: rgba(0,0,0,0.6);
            padding: 15px 30px;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.1);
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        }

        .subtitle { color: var(--primary-color); font-size: 1.1em; opacity: 0.9; }

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
            display: flex; flex-wrap: wrap; gap: 15px;
            justify-content: center; align-items: center; margin-bottom: 15px;
        }

        select, button {
            font-size: 1em; padding: 12px 20px; border-radius: 12px; border: none;
            background-color: var(--primary-color); color: #333; cursor: pointer;
            transition: all 0.3s ease; font-weight: 500; min-width: 150px;
        }

        select { flex: 1; min-width: 200px; }
        select:focus, button:focus { outline: none; box-shadow: 0 0 0 3px rgba(255,255,255,0.3); }

        button {
            background-color: var(--secondary-color); color: white;
            font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;
        }

        button:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.3); }

        .language-selector { display: flex; gap: 10px; justify-content: center; flex-wrap: wrap; margin-top: 15px; }

        .lang-btn {
            background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);
            color: white; padding: 8px 15px; border-radius: 8px; cursor: pointer;
            transition: all 0.3s ease; backdrop-filter: blur(10px); font-size: 0.9em;
        }
        .lang-btn.active { background: var(--secondary-color); border-color: var(--primary-color); }
        .lang-btn:hover { background: rgba(255,255,255,0.25); transform: translateY(-2px); }

        .quote-container { position: relative; margin-bottom: 30px; }

        .quote-box {
            background: linear-gradient(135deg,rgba(255,255,255,0.15) 0%,rgba(255,255,255,0.1) 100%);
            border: 2px solid var(--primary-color); border-radius: 25px; padding: 40px 35px;
            text-align: center; font-size: clamp(1.1em,2.5vw,1.5em);
            backdrop-filter: blur(20px); box-shadow: 0 15px 35px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease-out; line-height: 1.7; position: relative; overflow: hidden;
        }

        .quote-box::before {
            content: '"'; font-size: 5em; color: var(--primary-color);
            position: absolute; top: 10px; left: 25px; opacity: 0.3; font-family: serif;
        }
        .quote-box::after {
            content: '"'; font-size: 5em; color: var(--primary-color);
            position: absolute; bottom: -30px; right: 25px; opacity: 0.3; font-family: serif;
        }
        body[lang="ar"] .quote-box::before { left: auto; right: 25px; }
        body[lang="ar"] .quote-box::after { right: auto; left: 25px; }

        .mood-emoji { font-size: 2.5em; margin-bottom: 15px; display: block; animation: bounce 2s infinite; }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        @keyframes bounce {
            0%,20%,50%,80%,100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .actions { display: flex; gap: 12px; justify-content: center; margin: 25px 0; flex-wrap: wrap; }

        .action-btn {
            background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);
            color: white; padding: 12px 20px; border-radius: 12px; cursor: pointer;
            transition: all 0.3s ease; backdrop-filter: blur(10px); font-size: 0.9em;
            display: flex; align-items: center; gap: 8px; min-width: 120px; justify-content: center;
        }
        .action-btn:hover { background: rgba(255,255,255,0.25); transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }

        .translation-actions { margin-top: 15px; display: flex; gap: 10px; justify-content: center; flex-wrap: wrap; }

        .stats-panel {
            background: rgba(0,0,0,0.5); padding: 20px; border-radius: 15px;
            margin: 20px 0; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);
        }
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit,minmax(150px,1fr)); gap: 15px; text-align: center; }
        .stat-item { padding: 10px; }
        .stat-value { font-size: 1.5em; font-weight: bold; color: var(--primary-color); }
        .stat-label { font-size: 0.8em; opacity: 0.8; }

        footer {
            margin-top: 30px; font-size: 0.9em; background-color: rgba(0,0,0,0.6);
            padding: 15px 25px; border-radius: 15px; color: var(--primary-color);
            backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);
        }

        .theme-toggle {
            position: fixed; top: 20px; right: 20px; background: rgba(0,0,0,0.5);
            border: none; color: white; padding: 10px; border-radius: 50%;
            cursor: pointer; backdrop-filter: blur(10px); z-index: 1000;
        }
        .language-toggle {
            position: fixed; top: 70px; right: 20px; background: rgba(0,0,0,0.5);
            border: none; color: white; padding: 10px; border-radius: 50%;
            cursor: pointer; backdrop-filter: blur(10px); z-index: 1000;
        }

        @media (max-width: 768px) {
            .control-group { flex-direction: column; width: 100%; }
            select, button { width: 100%; }
            .quote-box { padding: 30px 25px; margin: 0 10px; }
            .actions { flex-direction: column; }
            .action-btn { width: 100%; }
            .stats-grid { grid-template-columns: 1fr; }
            .theme-toggle, .language-toggle { position: relative; top: auto; right: auto; margin: 5px; }
        }

        .loading {
            display: inline-block; width: 20px; height: 20px;
            border: 3px solid rgba(255,255,255,.3); border-radius: 50%;
            border-top-color: #fff; animation: spin 1s ease-in-out infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        .notification {
            position: fixed; top: 20px; left: 50%; transform: translateX(-50%);
            background: var(--secondary-color); color: white; padding: 15px 25px;
            border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            z-index: 1000; animation: slideDown 0.3s ease-out;
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
                    <?php foreach ($mood_names as $key => $names): ?>
                        <option value="<?= $key ?>" <?= $mood === $key ? 'selected' : '' ?>>
                            <?= htmlspecialchars($names[$current_lang] ?? $names['fr']) ?>
                        </option>
                    <?php endforeach; ?>
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
                    <div class="stat-label"><?= htmlspecialchars($mood_names[$mood][$current_lang] ?? $mood) ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?= $emojis[$_SESSION['stats']['favorite_mood']] ?></div>
                    <div class="stat-label"><?= getUIText('favorite_mood', $current_lang) ?></div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?= count($languages) ?></div>
                    <div class="stat-label"><?= getUIText('languages', $current_lang) ?></div>
                </div>
            </div>
        </div>

        <footer>
            <?php printf(getUIText('footer', $current_lang), count($_SESSION['previous_quotes'][$mood]), count($quotes[$mood])); ?>
        </footer>
    </div>

    <!-- Modal pour les langues -->
    <div id="languageModal" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.8);z-index:2000;justify-content:center;align-items:center;">
        <div style="background:white;padding:30px;border-radius:15px;text-align:center;color:#333;max-width:400px;">
            <h3 style="margin-bottom:20px;">🌐 Choose Language / Choisir la langue</h3>
            <div style="display:flex;flex-direction:column;gap:10px;">
                <?php foreach ($languages as $code => $lang): ?>
                    <form method="POST" style="margin:0;">
                        <input type="hidden" name="lang" value="<?= $code ?>">
                        <button type="submit" style="width:100%;padding:12px;border:none;border-radius:8px;background:var(--secondary-color);color:white;cursor:pointer;">
                            <?= $lang['flag'] ?> <?= $lang['name'] ?>
                        </button>
                    </form>
                <?php endforeach; ?>
            </div>
            <button onclick="hideLanguageModal()" style="margin-top:15px;padding:8px 15px;border:none;border-radius:5px;background:#ccc;cursor:pointer;">
                Cancel
            </button>
        </div>
    </div>

    <script>
        const quoteTranslations = <?= json_encode($selected_quote_data) ?>;
        const currentLang = '<?= $current_lang ?>';
        const languages = <?= json_encode($languages) ?>;

        const uiTexts = {
            'fr': { 'shareSuccess':'Citation copiée ! Partagez-la où vous voulez 📤','copySuccess':'Citation copiée dans le presse-papier ! 📋','favoriteSuccess':'Citation ajoutée aux favoris ! ⭐','favoriteExists':'Cette citation est déjà dans vos favoris 💫','listening':'⏸️ Lecture...' },
            'en': { 'shareSuccess':'Quote copied! Share it wherever you want 📤','copySuccess':'Quote copied to clipboard! 📋','favoriteSuccess':'Quote added to favorites! ⭐','favoriteExists':'This quote is already in your favorites 💫','listening':'⏸️ Listening...' },
            'ar': { 'shareSuccess':'تم نسخ الاقتباس! شاركه حيثما تريد 📤','copySuccess':'تم نسخ الاقتباس إلى الحافظة! 📋','favoriteSuccess':'تمت إضافة الاقتباس إلى المفضلة! ⭐','favoriteExists':'هذا الاقتباس موجود بالفعل في مفضلتك 💫','listening':'⏸️ جاري الاستماع...' },
            'es': { 'shareSuccess':'¡Cita copiada! Compártela donde quieras 📤','copySuccess':'¡Cita copiada al portapapeles! 📋','favoriteSuccess':'¡Cita añadida a favoritos! ⭐','favoriteExists':'Esta cita ya está en tus favoritos 💫','listening':'⏸️ Escuchando...' }
        };

        const backgrounds = <?= json_encode(array_values($backgrounds)) ?>;
        backgrounds.forEach(bg => { const img = new Image(); img.src = bg; });

        document.getElementById('moodForm').addEventListener('submit', function() {
            document.getElementById('btnText').style.display = 'none';
            document.getElementById('btnLoading').style.display = 'inline-block';
        });

        function translateQuote(langCode) {
            if (quoteTranslations[langCode]) {
                document.querySelector('.quote-box').innerHTML =
                    `<span class="mood-emoji"><?= $selected_emoji ?></span>` + quoteTranslations[langCode];
                showNotification(`🌐 ${languages[langCode].name}`);
            }
        }

        function shareQuote() {
            const quote = document.querySelector('.quote-box').textContent;
            const mood = document.getElementById('moodSelect').options[document.getElementById('moodSelect').selectedIndex].text;
            if (navigator.share) {
                navigator.share({ title: (currentLang === 'fr' ? 'Citation Inspirante - ' : 'Inspirational Quote - ') + mood, text: quote, url: window.location.href });
            } else {
                copyQuote();
                showNotification(uiTexts[currentLang].shareSuccess);
            }
        }

        function copyQuote() {
            const quote = document.querySelector('.quote-box').textContent;
            const mood = document.getElementById('moodSelect').options[document.getElementById('moodSelect').selectedIndex].text;
            const textToCopy = `"${quote.trim()}"\n\n— ${currentLang === 'fr' ? 'Humeur' : 'Mood'} ${mood}\n📱 ${currentLang === 'fr' ? 'Citations Inspirantes' : 'Inspirational Quotes'}`;
            navigator.clipboard.writeText(textToCopy).then(() => { showNotification(uiTexts[currentLang].copySuccess); });
        }

        function newQuote() { document.getElementById('moodForm').submit(); }

        function speakQuote() {
            const quote = document.querySelector('.quote-box').textContent;
            const utterance = new SpeechSynthesisUtterance(quote);
            const langMap = { 'fr':'fr-FR','en':'en-US','ar':'ar-SA','es':'es-ES' };
            utterance.lang = langMap[currentLang] || 'fr-FR';
            utterance.rate = 0.9; utterance.pitch = 1;
            const speakBtn = event.target.closest('.action-btn');
            const originalHTML = speakBtn.innerHTML;
            speakBtn.innerHTML = `<span>⏸️</span> ${uiTexts[currentLang].listening}`;
            utterance.onend = () => { speakBtn.innerHTML = originalHTML; };
            speechSynthesis.speak(utterance);
        }

        function saveFavorite() {
            const quote = document.querySelector('.quote-box').textContent.trim();
            const mood = document.getElementById('moodSelect').value;
            const favorites = JSON.parse(localStorage.getItem('quoteFavorites') || '[]');
            if (!favorites.some(fav => fav.quote === quote && fav.mood === mood)) {
                favorites.push({ quote, mood, lang: currentLang, date: new Date().toISOString(), translation: quoteTranslations });
                localStorage.setItem('quoteFavorites', JSON.stringify(favorites));
                showNotification(uiTexts[currentLang].favoriteSuccess);
            } else {
                showNotification(uiTexts[currentLang].favoriteExists);
            }
        }

        function showLanguageModal() { document.getElementById('languageModal').style.display = 'flex'; }
        function hideLanguageModal() { document.getElementById('languageModal').style.display = 'none'; }

        let autoChangeInterval = setInterval(newQuote, 45000);
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) { clearInterval(autoChangeInterval); }
            else { autoChangeInterval = setInterval(newQuote, 45000); }
        });

        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'notification';
            notification.textContent = message;
            document.body.appendChild(notification);
            setTimeout(() => { notification.remove(); }, 3000);
        }

        function toggleTheme() {
            const body = document.body;
            if (body.style.background.includes('rgba(255,255,255,0.1)')) {
                body.style.background = body.style.background.replace('rgba(255,255,255,0.1)', 'rgba(0,0,0,0.7)');
            } else {
                body.style.background = body.style.background.replace('rgba(0,0,0,0.7)', 'rgba(255,255,255,0.1)');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in-out';
            setTimeout(() => { document.body.style.opacity = '1'; }, 100);
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === ' ') { e.preventDefault(); newQuote(); }
            else if (e.key === 'c' && e.ctrlKey) { e.preventDefault(); copyQuote(); }
            else if (e.key === 's' && e.ctrlKey) { e.preventDefault(); saveFavorite(); }
            else if (e.key === 'l' && e.ctrlKey) { e.preventDefault(); showLanguageModal(); }
        });

        document.getElementById('languageModal').addEventListener('click', function(e) {
            if (e.target === this) { hideLanguageModal(); }
        });
    </script>
</body>
</html>

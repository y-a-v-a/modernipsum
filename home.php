<div class="container">
    <form method="post" action="">
        <button type="submit" name="generate" class="generate-btn">Generate Modernipsum</button>
    </form>
    
    <?php
    if (isset($_POST['generate'])) {
        // Read the corpus file
        $corpus = file('corpus.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        // Function to generate random modernipsum text
        function generateModernipsum($corpus, $paragraphs = 3) {
            $text = '';
            
            for ($p = 0; $p < $paragraphs; $p++) {
                $sentences = rand(4, 8);
                $paragraph = '';
                
                for ($s = 0; $s < $sentences; $s++) {
                    if ($s == 0 && $p == 0) {
                        // First sentence starts with "Modernipsum dolor sit amet"
                        $sentence = "Modernipsum dolor sit amet";
                    } else {
                        // Random start words
                        $starters = ['Modernipsum', 'Lorem', 'Ipsum', 'Dolor', 'Sit', 'Amet', 'Consectetur', 'Adipiscing', 'Elit'];
                        $sentence = $starters[array_rand($starters)] . ' ' . strtolower($starters[array_rand($starters)]);
                    }
                    
                    // Add random isms from corpus
                    $words = rand(3, 8);
                    for ($w = 0; $w < $words; $w++) {
                        $ism = $corpus[array_rand($corpus)];
                        $sentence .= ' ' . $ism;
                    }
                    
                    // Add some connecting words
                    $connectors = ['et', 'sed', 'ut', 'vel', 'ac', 'et', 'non', 'in', 'ad', 'ex'];
                    if (rand(0, 1)) {
                        $sentence .= ' ' . $connectors[array_rand($connectors)] . ' ' . $corpus[array_rand($corpus)];
                    }
                    
                    $sentence = ucfirst($sentence) . '.';
                    $paragraph .= $sentence . ' ';
                }
                
                $text .= '<p>' . trim($paragraph) . '</p>';
            }
            
            return $text;
        }
        
        echo '<div class="lorem-text">';
        echo generateModernipsum($corpus);
        echo '</div>';
    }
    ?>
</div>

<style>
.container {
    max-width: 800px;
    margin: 40px auto;
    padding: 0 20px;
    text-align: center;
}

.generate-btn {
    background-color: #ff6600;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    margin-bottom: 30px;
}

.generate-btn:hover {
    background-color: #e55a00;
}

.lorem-text {
    text-align: left;
    line-height: 1.6;
    font-size: 14px;
    color: #333;
    margin-bottom: 40px;
}

.lorem-text p {
    margin-bottom: 15px;
}
</style>
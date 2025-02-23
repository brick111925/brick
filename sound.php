</html>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบจำลองคลื่นเสียง - sound.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { text-align: center; padding: 20px; }
        iframe { width: 100%; height: 80vh; border: none; }
        @media (max-width: 768px) {
            iframe { height: 60vh; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">แบบจำลองคลื่นเสียง - Interactive Simulations</h1>

        <h2 class="mt-4">🔬 แบบจำลองอินเตอร์แอคทีฟ</h2>
        <div class="ratio ratio-16x9 mt-3">
            <iframe src="https://www.falstad.com/ripple/" allowfullscreen></iframe>
        </div>
        <div class="ratio ratio-16x9 mt-3">
            <iframe src="https://phet.colorado.edu/sims/html/sound-waves/latest/sound-waves_th.html" allowfullscreen></iframe>
        </div>


        <h2 class="mt-4">📝 แบบทดสอบเรื่องเสียง</h2>
        <div id="quiz-container" class="text-center">
            <p id="quiz-question"></p>
            <div id="quiz-options" class="d-grid gap-2 d-md-flex justify-content-center"></div>
            <p id="quiz-result" class="mt-2"></p>
            <p id="quiz-score" class="mt-3"></p>
        </div>

        <a href="index.php" class="btn btn-primary mt-3">🔙 กลับหน้าหลัก</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const questions = [
            { question: "เสียงเดินทางผ่านตัวกลางอะไรได้ดีที่สุด?", correct: "c", options: ["อากาศ", "น้ำ", "เหล็ก"] },
            { question: "หน่วยวัดความถี่ของเสียงคืออะไร?", correct: "a", options: ["เฮิรตซ์", "วัตต์", "นิวตัน"] },
            { question: "เสียงมีคุณสมบัติใดต่อไปนี้?", correct: "b", options: ["ไม่มีมวล", "ต้องมีตัวกลาง", "สามารถเดินทางในสูญญากาศ"] },
            { question: "เสียงสูงกับเสียงต่ำแตกต่างกันที่อะไร?", correct: "a", options: ["ความถี่", "ความเข้มเสียง", "แอมพลิจูด"] },
            { question: "เสียงที่มนุษย์ได้ยินมีช่วงความถี่ระหว่างเท่าใด?", correct: "c", options: ["1-100 Hz", "100-1000 Hz", "20-20000 Hz"] }
        ];

        let currentQuestion = 0;
        let score = 0;

        function loadQuestion() {
            if (currentQuestion < questions.length) {
                const q = questions[currentQuestion];
                document.getElementById("quiz-question").innerText = q.question;
                document.getElementById("quiz-options").innerHTML = q.options.map((opt, i) => 
                    `<button class="btn btn-primary" onclick="checkAnswer(${currentQuestion}, '${String.fromCharCode(97 + i)}')">${String.fromCharCode(97 + i)}. ${opt}</button>`
                ).join(" ");
            } else {
                document.getElementById("quiz-container").innerHTML = `<h3>🎉 ทำแบบทดสอบเสร็จแล้ว! 🎉</h3><p>คะแนนของคุณ: ${score}/${questions.length}</p>`;
            }
        }

        function checkAnswer(qIndex, answer) {
            if (questions[qIndex].correct === answer) {
                document.getElementById("quiz-result").innerHTML = "✅ ถูกต้อง!";
                score++;
            } else {
                document.getElementById("quiz-result").innerHTML = "❌ ผิด!";
            }
            currentQuestion++;
            setTimeout(() => {
                document.getElementById("quiz-result").innerHTML = "";
                loadQuestion();
            }, 1000);
        }

        loadQuestion();
    </script>
</body>
</html>

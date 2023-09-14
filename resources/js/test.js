document.addEventListener('DOMContentLoaded', function () {
    const questions = document.querySelectorAll('.que');
    const prevButton = document.getElementById('prevBtn');
    const nextButton = document.getElementById('nextBtn');
    let currentQuestionIndex = 0;

    function showQuestion(direction) {
        questions[currentQuestionIndex].style.display = 'none';
        if (direction === 'prev') {
            currentQuestionIndex = Math.max(currentQuestionIndex - 1, 0);
        } else if (direction === 'next') {
            currentQuestionIndex = Math.min(currentQuestionIndex + 1, questions.length - 1);
        }
        questions[currentQuestionIndex].style.display = 'block';
    }

    prevButton.addEventListener('click', function () {
        showQuestion('prev');
    });

    nextButton.addEventListener('click', function () {
        showQuestion('next');
    });

    questions[currentQuestionIndex].style.display = 'block';
});

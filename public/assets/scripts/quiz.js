    // Quiz Data
    const questions = [
      "Will you describe yourself as someone who likes to solve business-related problems?",
      "Do you enjoy facilitating and ensuring resources are available to get things done?",
      "Do you enjoy facilitating needs and requests between different kinds of people?",
      "Do you like facilitating ameeting to resolve problems among people?",
      "Would you describe yourself as somwone that enjoys working with numbers and using experiences and trends to make decisions?",
      "i like identifying and removing impediments?",
      "I am interested in writing and documenting events,processes, and how things should be done?",
      "I am a man-manager who can easily influence people to achieve stated with minimal persuasion?",
      "I like to help my team to resolve conflicts?",
      "I like to help my team to resolve conflicts?",
      "I like to help my team to resolve conflicts?",
      "Do you consider yourself someone who enjoys defining and communicating a clear and compelling vission for new initiatives?"
  ];

  let currentQuestion = 0;
  let yesCount = 0;
  let noCount = 0;
  let neitherCount = 0;

  // DOM Elements
  const questionElement = document.getElementById("question");
  const optionsElement = document.getElementById("options");
  const progressBarInner = document.getElementById("progress-bar-inner");
  const progressText = document.getElementById("progress-text");
  const preloaderElement = document.getElementById("preloader");
  const resultElement = document.getElementById("result");

  // Load Question
  function loadQuestion() {
      questionElement.textContent = `${currentQuestion + 1}. ${questions[currentQuestion]}`;

      optionsElement.innerHTML = ""; // Clear previous options

      ["Yes", "No", "Neither"].forEach(option => {
          const button = document.createElement("button");
          button.textContent = option;
          button.onclick = () => handleAnswer(option);
          optionsElement.appendChild(button);
      });

      updateProgress();
  }

  // Handle Answer
  function handleAnswer(answer) {
      if (answer === "Yes") yesCount++;
      if (answer === "No") noCount++;
      if (answer === "Neither") neitherCount++;

      if (currentQuestion < questions.length - 1) {
          currentQuestion++;
          loadQuestion();
      } else {
          showPreloader();
      }
  }

  
  function updateProgress() {
      const progress = ((currentQuestion + 1) / questions.length) * 100;
      progressBarInner.style.width = `${progress}%`;
      progressText.textContent = `${Math.round(progress)}% complete`;
  }


  // Show Preloader
  function showPreloader() {
      questionElement.style.display = "none";
      optionsElement.style.display = "none";
      preloaderElement.style.display = "block";

      setTimeout(showResult, 2000); // Simulate a 2-second delay
  }

  // Show Result
  function showResult() {
      preloaderElement.style.display = "none";

      let resultText = "";
      let resultLink = "";

      if (yesCount > noCount && yesCount > neitherCount) {
          resultText = "Congratulations! <br><br> Based on your responses, it seems that you have a strong affinity for Business Analysis. As a Business Analyst, you'll bridge the gap between business needs and technical solutions. You'll work on analyzing requirements, creating detailed plans, and ensuring successful project delivery.";
          resultLink = "business-analysis-course";
      } else if (noCount > yesCount && noCount > neitherCount) {
          resultText = "Congratulations!<br><br> Based on your responses, it seems that you have a strong affinity for Scrum Master. As a Scrum Master, you’ll facilitate agile practices within teams. Guide them through Scrum ceremonies and ensure efficient delivery. Embrace teamwork and continuous improvement!";
          resultLink = "scrum-master";
      } else {
          resultText = "Congratulations!<br><br> Based on your responses, it seems that you have a strong affinity for Product Management. As a Product Manager, you’ll strategize product roadmaps, prioritize features, and ensure the development of high-value products.";
          resultLink = "/product-management";
      }

      resultElement.innerHTML = `${resultText} <br><br> <a href="${resultLink}" class="click">Click Here</a>`;
      resultElement.style.display = "block";
  }

  // Initialize Quiz
  loadQuestion();
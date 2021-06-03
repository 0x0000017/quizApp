<!DOCTYPE html>
<head>
	<link rel = "stylesheet" href = "css/style2.css">
	<script type="text/javascript" src="js/adderScript.js"></script>
</head>
<body>
<h1>Add questions</h1>
  <div class="addQuestions">
    <input id="questionInput" type="text" placeholder="Question">
    <input id="correctInput" type="text" placeholder="Correct Answer">
    <input id="wrongOneInput" type="text" placeholder="Wrong Answer 1">
    <input id="wrongTwoInput" type="text" placeholder="Wrong Answer 2">
    <button onclick="handlers.addQuestion()">Add Question</button>
  </div>
  <div class="info">
    <li id="NumberQuestionsInQuiz">You currently have 0 questions added to your quiz</li>
    <button onclick="goBack()" id="startQuiz">Back to home</button>
  </div>
  <p class="answersCorrect"></p>
  <div class="questionsWrapper"></div>
  </body>
 </html>
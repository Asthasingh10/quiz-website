let mcqs = [];
function addOption() {
  const optionsContainer = document.getElementById('optionsContainer');
  const optionInput = document.createElement('input');
  optionInput.type = 'text';
  optionInput.placeholder = 'Enter option';
  optionInput.setAttribute("class", "form-control");
  optionInput.setAttribute("name","options");
  const lineBreak = document.createElement('br');

  optionsContainer.appendChild(optionInput);
  optionsContainer.appendChild(lineBreak);
}

function addMCQ() {
  const questionInput = document.getElementById('question').value;
  const optionsContainer = document.getElementById('optionsContainer');
  const optionsInputs = optionsContainer.getElementsByTagName('input');

  const options = [];
  for (const input of optionsInputs) {
    options.push(input.value);
  }

  const mcq = {
    question: questionInput,
    options: options
  };

  mcqs.push(mcq);

  displayMCQs();
  resetForm();
}

function displayMCQs() {
  const mcqDisplay = document.getElementById('mcqDisplay');
  mcqDisplay.innerHTML = '';

  for (const mcq of mcqs) {
    const mcqDiv = document.createElement('div');
    mcqDiv.innerHTML = `<strong>${mcq.question}</strong><br>`;

    for (const option of mcq.options) {
      mcqDiv.innerHTML += `- ${option}<br>`;
    }
    mcqDisplay.appendChild(mcqDiv);
  }
}

function resetForm() {
  document.getElementById('question').value = '';
  document.getElementById('optionsContainer').innerHTML = '';
}
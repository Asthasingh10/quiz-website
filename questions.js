let mcqs = JSON.parse(localStorage.getItem('mcqs')) || [];

function addOption() {
  const optionsContainer = document.getElementById('optionsContainer');

  const optionInput = document.createElement('input');
  optionInput.type = 'text';
  optionInput.placeholder = 'Enter option';

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

  // Store in localStorage
  localStorage.setItem('mcqs', JSON.stringify(mcqs));

  displayMCQs();
  resetForm();
}

function deleteMCQ(index) {
  mcqs.splice(index, 1);
  localStorage.setItem('mcqs', JSON.stringify(mcqs));
  displayMCQs();
}

function displayMCQs() {
  const mcqDisplay = document.getElementById('mcqDisplay');
  mcqDisplay.innerHTML = '';

  for (let i = 0; i < mcqs.length; i++) {
    const mcq = mcqs[i];

    const mcqDiv = document.createElement('div');
    mcqDiv.innerHTML = `<strong>${mcq.question}</strong><br>`;

    for (const option of mcq.options) {
      mcqDiv.innerHTML += `- ${option}<br>`;
    }

    // Add delete button
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.onclick = function () {
      deleteMCQ(i);
    };

    mcqDiv.appendChild(deleteButton);
    mcqDisplay.appendChild(mcqDiv);
  }
}

function resetForm() {
  document.getElementById('question').value = '';
  document.getElementById('optionsContainer').innerHTML = '';
}

// Initial display
displayMCQs();
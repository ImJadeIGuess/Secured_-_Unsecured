// VALIDATION RESULT: shows what was found under the "Validation result" heading
const status = document.getElementById("status");

function report(source, message) {
  if (message.trim() === "") {
    status.className = "status";
    status.textContent = "Nothing to display. Enter a message first.";
  } else if (/[<>]/.test(message)) {
    status.className = "status notice-markup";
    status.textContent = "Markup detected in the " + source + " box. It was shown as plain text and not executed.";
  } else {
    status.className = "status ok";
    status.textContent = "Message from the " + source + " box displayed as plain text (" + message.length + " characters).";
  }
}
// EXERCISE A: Safe reflected-style output
const messageForm = document.getElementById("messageForm");
const messageInput = document.getElementById("messageInput");
const messageOutput = document.getElementById("messageOutput");

messageForm.addEventListener("submit", function (event) {
  event.preventDefault();
  const message = messageInput.value;
  messageOutput.textContent = "You entered: " + message; //plain text only, the browser never reads it as HTML
  report("first", message);
});

// EXERCISE B: Safe DOM output
const domInput = document.getElementById("domInput");
const domButton = document.getElementById("domButton");
const domOutput = document.getElementById("domOutput");

domButton.addEventListener("click", function () {
  const message = domInput.value;
  domOutput.textContent = message; //textContent shows the input as text, so tags and event handlers never run
  report("second", message);
});
function updateProgressBar(percentage) {
    var progressBar = document.getElementById('progress-bar');
    progressBar.style.width = percentage + '%';
    progressBar.innerHTML = percentage + '%';
  }

  // Ejemplo de actualización de la barra de progreso
  var currentProgress = 0;
  var interval = setInterval(function () {
    currentProgress += 10;
    if (currentProgress <= 100) {
      updateProgressBar(currentProgress);
    } else {
      clearInterval(interval);
    }
  }, 1000);
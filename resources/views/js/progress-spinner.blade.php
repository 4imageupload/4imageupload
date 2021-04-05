showUploadingLoader: function(imagePlaceHolder, showUploadedPercentComplete) {
    var spinner = document.createElement('div');
    spinner.className = 'iu-progress-spinner';
    imagePlaceHolder.appendChild(spinner);

    if (showUploadedPercentComplete === true) {
        var percentDiv = document.createElement('div');
        percentDiv.className = 'iu-percent-div';
        percentDiv.innerHTML = '0%';
        imagePlaceHolder.appendChild(percentDiv);
    }
    function setSpinnerSize() {
        var spinnerWidth = spinner.offsetWidth;
        spinner.style.height = spinner.offsetWidth + 'px';
    }
    setSpinnerSize();
    window.addEventListener('resize', setSpinnerSize);
},

updateUploadingLoader: function(percentComplete, imageItem, showUploadedPercentComplete) {
    var percentBar = imageItem.getElementsByClassName('iu-percent-div')[0];
    percentBar.innerHTML = Math.floor(percentComplete) + "%";
},

removeUploadingLoader: function(imageItem, showUploadedPercentComplete) {
    var spinner = imageItem.getElementsByClassName('iu-progress-spinner')[0];
    fadeEffect(spinner);
    var showPercentText = true;
    if (showUploadedPercentComplete === true) {
         var percentDiv = imageItem.getElementsByClassName('iu-percent-div')[0];
         fadeEffect(percentDiv);
    }
    function fadeEffect(elmnt) {
        var fadeEffect = setInterval(function () {
            if (!elmnt.style.opacity) {
                elmnt.style.opacity = 1;
            }
            if (elmnt.style.opacity > 0) {
                elmnt.style.opacity -= 0.1;
            } else {
                clearInterval(fadeEffect);
                elmnt.remove();
            }
        }, 200);
    }
},

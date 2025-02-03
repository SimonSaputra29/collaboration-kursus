const learnButton = document.getElementById("learnButton");
learnButton.addEventListener("mouseover", function () {
    this.classList.add("animate__pulse");
});
learnButton.addEventListener("mouseout", function () {
    this.classList.remove("animate__pulse");
});

const heroImage = document.getElementById("heroImage");
heroImage.addEventListener("click", function () {
    this.classList.add("animate__shakeX");
    setTimeout(() => this.classList.remove("animate__shakeX"), 1000);
});

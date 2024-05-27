import "./bootstrap";
import "flowbite";
import "flowbite-datepicker";
import "flowbite/dist/datepicker.turbo";
import "preline";

let valueDisplays = document.querySelectorAll(".num");
let interval = 10;

valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);
});

// Avatar user upload preview
const avatarInput = document.getElementById("input-file-avatar");
avatarInput.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        const avatarLabel = document.getElementById("label-file-avatar");
        avatarLabel.innerHTML = `<p>Preview</p><img src="${reader.result}" class="w-64 h-64 rounded-full object-cover" />`;
    });
    reader.readAsDataURL(this.files[0]);
});

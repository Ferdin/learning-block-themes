var buttons = document.getElementsByClassName("click-here");
Array.from(buttons).forEach(function (button) {
  button.addEventListener(
    "click",
    function () {
      alert("Hounddy!!!");
    },
    false
  );
});

$(document).ready(function () {
    const forms = $("[class*='replyForm-']");
    forms.hide();
    const btns = $("[class*='replyBtn-']");

      btns.each((i, btn) => {
        btn.addEventListener("click", (e) => {
            const form = $(`#replyForm-${e.target.id}`);
            form.slideToggle();
        });
      });
});
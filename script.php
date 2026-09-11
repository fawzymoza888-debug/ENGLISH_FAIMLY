






function showOffer() {

    var infoText = document.getElementById("info-text");
    infoText.innerHTML = "خصم خاص 20% على جميع الرحلات البحرية هذا الأسبوع!";


    infoText.style.color = "red";


    alert("تم تفعيل الخصم بنجاح!");
}





function calculateCost() {

    var nameInput = document.getElementById("fullname").value;
    var ticketsInput = document.getElementById("tickets").value;
    var destinationInput = document.getElementById("destination").value;


    if (nameInput == "") {
        alert("عذراً، يجب كتابة اسم المسافر أولاً!");
        return;
    }


    var ticketPrice = 0;

    switch (destinationInput) {
        case "sharm":
            ticketPrice = 3000;
            break;
        case "luxor":
            ticketPrice = 5000;
            break;
        default:
            ticketPrice = 2000;
    }


    var totalCost = ticketsInput * ticketPrice;


    var result = document.getElementById("result-text");
    result.innerHTML = "أهلاً بك " + nameInput + "، إجمالي التكلفة المطلوبة: " + totalCost + " جنيه.";
    result.style.color = "green";


    confirm("هل ترغب في تأكيد حجز " + ticketsInput + " تذاكر بـ " + totalCost + " جنيه؟");
}

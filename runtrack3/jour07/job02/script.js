$(document).ready(function() {
    $("#accueilLink").attr("href", "https://laplateforme.io");

    $("#papillonButton").click(function() {
        $("#papillonModal").modal("show");
    });

    const citations = [
        "Toutes ces étoiles seront bientôt englouties. Il n'y aura plus rien.",
        "Ce sont des moments à jamais perdus dans le temps, comme des larmes sous la pluie.",
    ];
    $("#rebootButton").click(function() {
        const randomIndex = Math.floor(Math.random() * citations.length);
        $("#jumbotronText").text(citations[randomIndex]);
    });

    $(".page-link").click(function() {
        const content = $(this).text();
        $("#jumbotronText").text(content);
    });

    $(".list-group-item").click(function() {
        $(".list-group-item").removeClass("active");
        $(this).addClass("active");
    });

    let progressValue = 50;
    $("#increaseButton").click(function() {
        if (progressValue < 100) {
            progressValue += 10;
            updateProgressBar();
        }
    });
    $("#decreaseButton").click(function() {
        if (progressValue > 0) {
            progressValue -= 10;
            updateProgressBar();
        }
    });

    function updateProgressBar() {
        $("#progressBar").css("width", progressValue + "%");
    }

    let pressedKeys = [];
    $(document).keydown(function(event) {
        pressedKeys.push(event.key);
        checkKeyCombination();
    });

    function checkKeyCombination() {
        const sequence = pressedKeys.join("").toUpperCase();
        if (sequence.includes("DGC")) {
            $("#recapModal").modal("show");
        }
    }

    $("#submitFormButton").click(function() {
        const email = $("#emailInput").val();
        const password = $("#passwordInput").val();
        if (email && password) {
            const colors = ["red", "blue", "green", "orange", "purple"];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            $("#jumbotronSpinner").css("border-top-color", randomColor);
        }
    });
});

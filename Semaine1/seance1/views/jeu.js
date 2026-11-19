let cases = document.querySelectorAll(".plateau td");

for (let i = 0; i < cases.length; i++) {

    cases[i].addEventListener("click", function() {

        if (cases[i].className == "blanc") {

            // Blanc devient noir
            cases[i].className = "noir";

        } else if (cases[i].className == "noir") {

            // Noir devient vide
            cases[i].className = "";

        } else {

            // Vide devient blanc
            cases[i].className = "blanc";

        }

    });

}
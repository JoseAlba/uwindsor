<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <?php
    date_default_timezone_set('America/Toronto');
    $timestamp =  date("d/m/Y h:i:s", time());

    require_once('../php/common.php');

    header('Content-Type: text/html');

    html5_header(
        "Jose Alba",
        array(
            '../css/style.css', '../css/foundation.css', 'http://fonts.googleapis.com/css?family=Rokkitt',
            'css/cf-theming.css',
        )
    );

    html5_js(
        array('../js/vendor/modernizr.js','../js/vendor/jquery.js', '../js/apps/menu.js', 'conversational_form.js'));
    ?>

    <style type="text/css">
        html
        ,body
        {
            overflow-y: hidden;
        }
    </style>

    <script type="text/javascript" src="https://cf-4053.kxcdn.com/conversational-form/0.9.6/conversational-form.min.js" crossorigin></script>

</head>

<body>




<div class="switch-btn" id="cf-toggle-btn" data-label="Enable Conversational Form" data-label-toggled="Disable Conversational Form">
    <label class="switch">
        <input type="checkbox" onclick="window.conversationalFormExamples.toggleConversation(event)">
        <div class="slider round"></div>
    </label>
</div>

<section role="form">
    <div class="form_outer" cf-form>
        <form id="form" method="post" action="mailto:albaj@uwindsor.ca" cf-form>

            <fieldset cf-questions="Welcome to the Computer Science Faculity at the University of Windsor. What are you looking for?">
                <input required type="radio" name="intro" value="coop" id="intro_coop">
                <label for="intro_coop">Co-op</label>

                <input required type="radio" name="intro" value="exchange" id="intro_exchange">
                <label for="intro_exchange">Exchange</label>

                <input required type="radio" name="intro" value="courses" id="intro_courses">
                <label for="intro_courses">Courses</label>

                <input required type="radio" name="intro" value="potw" id="intro_potw">
                <label for="intro_potw">POTW</label>

                <input required type="radio" name="intro" value="specialization" id="intro_specialization">
                <label for="intro_specialization">Specialization</label>

                <input required type="radio" name="intro" value="resumes" id="intro_resumes">
                <label for="intro_resumes">Resumes</label>

                <input required type="radio" name="intro" value="tutor" id="intro_tutor">
                <label for="intro_tutor">Tutor</label>

                <input required type="radio" name="intro" value="links" id="intro_links">
                <label for="intro_links">Useful Links</label>

                <input required type="radio" name="intro" value="hackathons" id="intro_hackathons">
                <label for="intro_hackathons">Hackathons</label>

                <input required type="radio" name="intro" value="extra" id="intro_extra">
                <label for="intro_extra">Extra</label>

                <input required type="radio" name="intro" value="contact" id="intro_contact">
                <label for="intro_contact">Contact</label>
            </fieldset>

            <fieldset cf-questions="Welcome to the Computer Science Faculity at the University of Windsor. What are you looking for?">
                <input required type="radio" name="korea-section-1-0" value="right" id="korea-section-1-0-0" cf-conditional-cfc-intro="korea">
                <label for="korea-section-1-0-0">Co-op</label>

                <input required type="radio" name="korea-section-1-0" value="wrong" id="korea-section-1-0-1" cf-conditional-cfc-intro="korea">
                <label for="korea-section-1-0-1">Exchange</label>

                <input required type="radio" name="korea-section-1-0" value="wrong" id="korea-section-1-0-1" cf-conditional-cfc-intro="korea">
                <label for="korea-section-1-0-1">Courses</label>

                <input required type="radio" name="korea-section-1-0" value="wrong" id="korea-section-1-0-1" cf-conditional-cfc-intro="korea">
                <label for="korea-section-1-0-1">Extra-Curricular</label>


                <input required type="radio" name="korea-section-1-0" value="wrong" id="korea-section-1-0-1" cf-conditional-cfc-intro="korea">
                <label for="korea-section-1-0-1">Useful Links</label>
            </fieldset>


            <!-- Contact page ask for name -->
            <input id="contact_username"
                   type="text"
                   cf-questions="What is your name?"
                   name="username"
            >

            <input id="contact_city"
                   type="text"
                   cf-questions="Greet to meet you {contact_username} &&Where are you from?"
                   name="city">

            <fieldset>
                <label for="email">Email</label>
                <input id="contact-email"
                       type="email"
                       pattern=".+\@.+\..+"
                       cf-error="E-mail not correct"
                       cf-questions="{contact_city} is nice around this time of year&&{contact_username}, if you want me to contact me I will need your email that way I can respond to your email!"
                       name="email">
            </fieldset>

            <input id="message"
                   type="text"
                   cf-questions="Now that I have your email {contact_username}, feel free to tell me anything below ie&&Freelancee&&Traveling&&Technology&&Company&&Work Opportunity"
                   name="message">

            <button type="submit" class="btn btn-default">Submit</button>

        </form>
    </div>
</section>

<script>
    window.onload = function(){
        var conversationalForm = window.cf.ConversationalForm.startTheConversation({
            formEl: document.getElementById("form"),
            context: document.getElementById("cf-context"),
            robotImage:
                "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFNTE3OEEyRTk5QTAxMUUyOUExNUJDMTA0NkE4OTA0RCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFNTE3OEEyRjk5QTAxMUUyOUExNUJDMTA0NkE4OTA0RCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkU1MTc4QTJDOTlBMDExRTI5QTE1QkMxMDQ2QTg5MDREIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkU1MTc4QTJEOTlBMDExRTI5QTE1QkMxMDQ2QTg5MDREIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+FYrpWAAABrNJREFUeNrkW2ls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",

            //dictionaryData: {
            //    "entry-not-found": "Wörterbuchschlüssel wird nicht gefunden.",
          //      "input-placeholder": "Geben Sie hier Ihre Antwort ein ...",
        //        "input-placeholder-required": "Eingabe erforderlich ...",
      //          "input-placeholder-error": "Ihre Eingabe ist nicht korrekt ...",
    //            "input-placeholder-file-error": "Datei-Upload fehlgeschlagen ...",
  //              "input-placeholder-file-size-error": "Dateigröße zu groß ...",
//                "input-no-filter": "Keine Ergebnisse für <strong>{input-value}</strong>",
              //  "user-reponse-and": " und ",
            //    "user-reponse-missing": "Fehlende Eingabe ...",
          //      "general": "Allgemeiner Typ1|Allgemeiner Typ2"
        //    },// empty will throw error
      //      dictionaryRobot: {
    //            "text": "Bitte schreiben Sie etwas Text.",
  //              "input": "Bitte schreiben Sie etwas Text.",
//                "name": "Wie heißen Sie?",
              //  "email": "Brauchen Sie Ihre E-Mail.",
            //    "password": "Bitte geben Sie das Passwort ein",
          //      "tel": "Wie ist deine Telefonnummer?",
        //        "radio": "Ich brauche Sie, um eine dieser auszuwählen.",
      //          "checkbox": "Wählen Sie so viele, wie Sie möchten.",
    //            "select": "Wählen Sie eine dieser Optionen.",
  //              "general": "Allgemeines1|Allgemeines2|Allgemeines3.."
//            },
            // context: document.getElementById("form-outer")[0],
            // tags: tags,
            //submitCallback: () => void | HTMLButtonElement

            //base64 or crossdomain-enabled image url
            // userImage: "..."
        });
    };

</script>

<script src="build/conversational-form-examples.min.js" id="examples-script"></script>

</body>
</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple App</title>
    <link rel="icon" type="image/png" href="images/demo.png">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Workbench:SCAN@-13&display=swap" rel="stylesheet">
</head>

<body>

    <nav>
        <ul>
            <li><img style="width: 40px; margin-top: 6px;" src="images/demo.png"></li>
            <div style="position:absolute; left: 100px; top:0;">
                <li><a href="#home">Home</a></li>
                <li><a href="#simple_calc">Simple Calculator</a></li>
                <li><a href="#bmi_calc">BMI Calculator</a></li>
                <li><a href="#leap_year">Leap Year Checker</a></li>
                <li><a href="#length_conv">Length Converter</a></li>
                <li><a href="#area_conv">Area Converter</a></li>
                <li><a href="#currency_conv">Currency Converter</a></li>
                <li><a href="#rating">Rating</a></li>
            </div>
        </ul>
    </nav>

    <section id="home">
        <div style="background-color: white; padding: 10px 100px;">
            <h2 style="font-style: normal; position:absolute; top: 60px; right:100px; font-size: 40px; cursor:pointer;"
                onclick="getHint()">💡</h2>
            <h1>Welcome to Simple Apps Demo</h1>
            <h3>Here are some of the apps available.</h3>
            <ul style="display: inline-block; text-align: left; font-weight: 800;">
                <li><a href="#simple_calc">1️⃣ Simple Calculator</a></li>
                <li><a href="#bmi_calc">2️⃣ BMI Calculator</a></li>
                <li><a href="#leap_year">3️⃣ Leap Year Checker</a></li>
                <li><a href="#length_conv">4️⃣ Length Converter</a></li>
                <li><a href="#area_conv">5️⃣ Area Converter</a></li>
                <li><a href="#currency_conv">6️⃣ Currency Converter</a></li>
            </ul>
            <h3>After use the apps, you may do rating !!!</h3>
            <h3 style="font-style: normal; font-size: 50px;">
                <a href="#rating"><span>😠</span></a>
                <a href="#rating"><span>😕</span></a>
                <a href="#rating"><span>😐</span></a>
                <a href="#rating"><span>😊</span></a>
                <a href="#rating"><span>😍</span></a>
            </h3>
        </div>
    </section>

    <script>
        function getHint() {
            alert("Hi, here are some hints provided💡\nYou may navigate to different sections by two methods\n1) Navigation Bar\n2) Link and icon on homepage\n\nHope you enjoy the apps, have fun!!!")
        }

    </script>
    <section id="simple_calc">
        <h1>Simple Calculator</h1>
        <table>
            <tr>
                <td><label for="num1">Number 1 </label></td>
                <td style="width:10px;"></td>
                <td><input type="number" name="num1" id="num1"></td>
            </tr>
            <tr>
                <td><label for="num2">Number 2 </label></td>
                <td></td>
                <td><input type="number" name="num2" id="num2"></td>
            </tr>
            <tr>
                <td><label for="method">Method</label></td>
                <td></td>
                <td>
                    <input type="radio" id="addition" name="method" value="+" required>
                    <label for="addition">Addition(+)</label><br>

                    <input type="radio" id="subtraction" name="method" value="-">
                    <label for="subtraction">Subtraction(-)</label><br>

                    <input type="radio" id="multiplication" name="method" value="*">
                    <label for="multiplication">Multiplication(*)</label><br>

                    <input type="radio" id="division" name="method" value="/">
                    <label for="division">Division(/)</label><br>

                    <input type="radio" id="floor_division" name="method" value="//">
                    <label for="floor_division">Floor Division(//)</label><br>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;"><button onclick="getSimpleCalcAns()">Submit</button></td>
            </tr>
            <tr>
                <td colspan="3" id="simple_calc_ans"></td>
            </tr>
        </table>
    </section>

    <section id="bmi_calc">
        <h1>BMI Calculator</h1>
        <table id="bmi_display">
            <tr>
                <th style="background-color: lightgray;">BMI</th>
                <th style="background-color: lightgray;">Status</th>
            </tr>
            <tr>
                <td style="background-color: yellow; font-weight: 800;">
                    <= 18.4</td>
                <td>Underweight</td>
            </tr>
            <tr>
                <td style="background-color: lightgreen; font-weight: 800;">18.5 - 24.9</td>
                <td>Normal</td>
            </tr>
            <tr>
                <td style="background-color: orange; font-weight: 800;">25.0 - 39.9</td>
                <td>Overweight</td>
            </tr>
            <tr>
                <td style="background-color: orangered; font-weight: 800;">>= 40.0</td>
                <td>Obese</td>
            </tr>
        </table>

        <table id="bmi_input">
            <tr>
                <td></td>
            </tr><br>
            <tr>
                <td><label for="weight">Weight (kg) </label></td>
                <td style="width: 10px;"></td>
                <td><input type="number" name="weight" id="weight"></td>
            </tr>
            <tr>
                <td><label for="num2">Height (m) </label></td>
                <td></td>
                <td><input type="number" name="height" id="height"></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;"><button class="bmi_btn"
                        onclick="getBmiCalcAns()">Submit</button></td>
            </tr>
            <tr>
                <td colspan="3" id="bmi_calc_ans"></td>
            </tr>
        </table>
    </section>

    <section id="leap_year">
        <h1>Leap Year Checker</h1>
        <form onsubmit="return validateYear(event)">
            <table>
                <tr>
                    <td><label for="year">Year </label></td>
                    <td style="width: 10px;"></td>
                    <td><input type="number" id="year" name="year" required></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right;"><button type="submit">Submit</button></td>
                </tr>
                <tr>
                    <td colspan="3" id="leap_year_ans"></td>
                </tr>
            </table>
        </form>
    </section>

    <section id="length_conv">
        <h1>Length Converter</h1>
        <table>
            <tr>
                <th colspan="3" input
                    style="text-align: center;padding: 5px; border: 5px solid black; box-shadow: 2px 2px 5px blue; background: linear-gradient(rgb(221, 246, 254), rgb(148, 201, 245));">
                    Length</th>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input style="width:100px;" type="number" id="length1" min="0" required oninput="convertLength()">
                </td>
                <td style="width:20px; text-align: center;">=</td>
                <td><input style="width:100px;" type="number" id="length2" min="0" readonly></td>
            </tr>
            <tr>
                <td colspan="3">
                    <select id="length_select" style="width: 245px;" onchange="convertLength()">
                        <option>cm to inches</option>
                        <option>inches to cm</option>
                        <option>mm to inches</option>
                        <option>inches to mm</option>
                        <option>m to feet</option>
                        <option>feet to m</option>
                        <option>km to miles</option>
                        <option>miles to km</option>
                        <option>cm to feet</option>
                        <option>feet to cm</option>
                        <option>cm to m</option>
                        <option>m to cm</option>
                        <option>cm to km</option>
                        <option>km to cm</option>
                    </select>
                </td>
            </tr>
        </table>
    </section>

    <section id="area_conv">
        <h1>Area Converter</h1>
        <table>
            <tr>
                <th colspan="3" input
                    style="text-align: center;padding: 5px; border: 5px solid black; box-shadow: 2px 2px 5px green; background: linear-gradient(rgb(235, 255, 203), rgb(209, 255, 229));">
                    Area</th>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input style="width:100px;" type="number" id="area1" min="0" required oninput="convertArea()"></td>
                <td style="width:20px; text-align: center;">=</td>
                <td><input style="width:100px;" type="number" id="area2" min="0" readonly></td>
            </tr>
            <tr>
                <td colspan="3">
                    <select id="area_select" style="width: 245px;" onchange="convertArea()">
                        <option value="acresToSquareFeet">acres to square feet</option>
                        <option value="squareFeetToAcres">square feet to acres</option>
                        <option value="hectareToAcres">hectare to acres</option>
                        <option value="acresToHectare">acres to hectare</option>
                        <option value="squareFeetToSquareMeter">square feet to square meter</option>
                        <option value="squareMeterToSquareFeet">square meter to square feet</option>
                        <option value="acresToSquareMiles">acres to square miles</option>
                        <option value="squareMilesToAcres">square miles to acres</option>
                        <option value="squareFeetToSquareYards">square feet to square yards</option>
                        <option value="squareYardsToSquareFeet">square yards to square feet</option>
                    </select>
                </td>
            </tr>
        </table>
    </section>

    <section id="currency_conv">
        <h1>Currency Converter</h1>
        <table>
            <tr>
                <th colspan="3"
                    style="text-align: center;padding: 5px; border: 5px solid black; box-shadow: 2px 2px 5px rgb(255, 100, 28); background: linear-gradient(rgb(254, 239, 217), rgb(255, 212, 171));">
                    Currency</th>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input style="width:100px;" type="number" id="currency1" min="0" required
                        oninput="convertCurrency()"></td>
                <td style="width:20px; text-align: center;">=</td>
                <td><input style="width:100px;" type="number" id="currency2" min="0" readonly></td>
            </tr>
            <tr>
                <td colspan="3">
                    <select id="currency_select" style="width: 245px;" onchange="convertCurrency()">
                        <option value="SGD_to_USD">SGD to USD</option>
                        <option value="USD_to_SGD">USD to SGD</option>
                        <option value="SGD_to_EUR">SGD to EUR</option>
                        <option value="EUR_to_SGD">EUR to SGD</option>
                        <option value="SGD_to_JPY">SGD to JPY</option>
                        <option value="JPY_to_SGD">JPY to SGD</option>
                        <option value="SGD_to_AUD">SGD to AUD</option>
                        <option value="AUD_to_SGD">AUD to SGD</option>
                        <option value="SGD_to_CAD">SGD to CAD</option>
                        <option value="CAD_to_SGD">CAD to SGD</option>
                        <option value="SGD_to_CNY">SGD to CNY</option>
                        <option value="CNY_to_SGD">CNY to SGD</option>
                        <option value="SGD_to_MYR">SGD to MYR</option>
                        <option value="MYR_to_SGD">MYR to SGD</option>
                        <option value="SGD_to_KRW">SGD to KRW</option>
                        <option value="KRW_to_SGD">KRW to SGD</option>
                    </select>
                </td>
            </tr>
        </table>
    </section>

    <section id="rating">
        <h1>Rating</h1>
        <form id="ratingForm" action="phppost/rate.php" method="post">
            <table id="ratingTable" style="background:linear-gradient( lightpink, lightyellow);">
                <tr>
                    <td><label for="fullname">Full Name </label></td>
                    <td style="width: 10px;"></td>
                    <td><input type="text" id="fullname" name="fullname"></td>
                </tr>
                <tr>
                    <td><label for="age">Age </label></td>
                    <td></td>
                    <td><input type="number" min="0" step="1" id="age" name="age"></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender </label></td>
                    <td></td>
                    <td>
                        <select id="gender" name="gender" required>
                            <option disabled selected>-- Select your Gender --</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="app">App </label></td>
                    <td></td>
                    <td>
                        <select id="app" name="app" required>
                            <option disabled selected>-- Select the App --</option>
                            <option value="Simple Calculator">Simple Calculator</option>
                            <option value="BMI Calculator">BMI Calculator</option>
                            <option value="Leap Year Checker">Leap Year Checker</option>
                            <option value="Length Converter">Length Converter</option>
                            <option value="Area Converter">Area Converter</option>
                            <option value="Currency Converter">Currency Converter</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="emoji">Rating </label></td>
                    <td></td>
                    <td>
                        <label class="emoji-label" for="emoji1" onclick="selectEmoji('emoji1')">😠</label>
                        <input type="radio" id="emoji1" name="emoji" value="1" hidden>

                        <label class="emoji-label" for="emoji2" onclick="selectEmoji('emoji2')">😕</label>
                        <input type="radio" id="emoji2" name="emoji" value="2" hidden>

                        <label class="emoji-label" for="emoji3" onclick="selectEmoji('emoji3')">😐</label>
                        <input type="radio" id="emoji3" name="emoji" value="3" hidden>

                        <label class="emoji-label" for="emoji4" onclick="selectEmoji('emoji4')">😊</label>
                        <input type="radio" id="emoji4" name="emoji" value="4" hidden>

                        <label class="emoji-label" for="emoji5" onclick="selectEmoji('emoji5')">😍</label>
                        <input type="radio" id="emoji5" name="emoji" value="5" hidden>

                        <!-- Hidden input field for validation -->
                        <input type="hidden" id="emojiSelected" name="emojiSelected">
                    </td>
                </tr>
                <tr>
                    <td><label for="comments">Comments </label></td>
                    <td></td>
                    <td><textarea id="comments" name="comments" style="width: 600px; height: 60px;"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right;"><button class="rateSubmit" type="submit">Submit
                            Rating</button></td>
                </tr>
            </table>
        </form>
    </section>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="hideModal()">&times;</span>
            <h2>Your have rated the app.<br>Thank you so much!!<br>Have fun!!!<br>😍😍😍</h2>
        </div>
    </div>

    <audio id="notificationSound" src="audios/noti.mp3"></audio>

    <script>
        document.getElementById("ratingForm").addEventListener("submit", function (event) {
            var fullname = document.getElementById("fullname").value;
            var age = document.getElementById("age").value;
            var gender = document.getElementById("gender").value;
            var app = document.getElementById("app").value;
            var emojiSelected = false;
            var emojiRadios = document.getElementsByName("emoji");
            for (var i = 0; i < emojiRadios.length; i++) {
                if (emojiRadios[i].checked) {
                    emojiSelected = true;
                    break;
                }
            }
            if (!fullname || !age || !gender || !app || !emojiSelected) {
                alert("Please fill in all required fields\nFull Name, Age, Gender, App and Rating are compulsory!!!");
                event.preventDefault(); // Prevent form submission if validation fails
            } else {
                // Prevent default form submission
                event.preventDefault();

                // Serialize form data
                var formData = new FormData(this);

                // Send form data via AJAX
                var xhr = new XMLHttpRequest();
                xhr.open("POST", this.action, true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        // Handle success
                        showModal();
                    } else {
                        // Handle error
                        console.error("Error:", xhr.statusText);
                    }
                };
                xhr.onerror = function () {
                    // Handle network errors
                    console.error("Network Error");
                };
                xhr.send(formData);
            }
        });

        function showModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            playNotificationSound();

            document.getElementById("ratingForm").reset();
        }

        function hideModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        function playNotificationSound() {
            var sound = document.getElementById("notificationSound");
            sound.play();
        }

        //rating
        function selectEmoji(emojiId) {
            var emojiLabels = document.querySelectorAll('.emoji-label');
            emojiLabels.forEach(function (label) {
                if (label.htmlFor === emojiId) {
                    label.classList.add('enlarged');
                } else {
                    label.classList.remove('enlarged');
                }
            });

            document.getElementById(emojiId).checked = true;
        }
    </script>


    <footer>
        <p id="dateDisplay" class="workbench-font"></p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dateDisplay = document.getElementById('dateDisplay');
            updateDateTime(dateDisplay); // Initial update
            setInterval(function () {
                updateDateTime(dateDisplay); // Update every second
            }, 1000);
        });

        function updateDateTime(element) {
            const today = new Date();
            const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const timeOptions = { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: false };
            const dateString = today.toLocaleDateString(undefined, dateOptions);
            const timeString = today.toLocaleTimeString(undefined, timeOptions);
            const dateTimeHTML = `
    <i class="bi bi-clock"></i> 
    <span class="date">${dateString}</span> 
    <span class="time">${timeString}</span>
`;
            element.innerHTML = dateTimeHTML;
        }
    </script>

    <script src="js/function.js"></script>
</body>

</html>
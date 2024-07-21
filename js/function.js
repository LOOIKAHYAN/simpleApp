
    //simple calculator
    function getSimpleCalcAns() {
        let num1 = parseFloat(document.getElementById('num1').value);
        let num2 = parseFloat(document.getElementById('num2').value);
        let method;

        // Determine the selected method
        let methodRadios = document.getElementsByName('method');
        for (let i = 0; i < methodRadios.length; i++) {
            if (methodRadios[i].checked) {
                method = methodRadios[i].value;
                break;
            }
        }

        let ans;

        switch (method) {
            case '+':
                ans = num1 + num2;
                break;
            case '-':
                ans = num1 - num2;
                break;
            case '*':
                ans = num1 * num2;
                break;
            case '/':
                ans = num1 / num2;
                break;
            case '//':
                ans = Math.floor(num1 / num2);
                break;
            default:
                ans = "Invalid method";
        }

        document.getElementById("simple_calc_ans").innerHTML = "<hr>The value is " + ans +".";
    }

    //bmi calculator
    function getBmiCalcAns() {
        let weight = parseFloat(document.getElementById("weight").value);
        let height = parseFloat(document.getElementById("height").value);
        let ans = weight / (height * height);
        let result;

        if (ans <= 18.4) {
            result = "Underweight";
        } else if (ans <= 24.9) {
            result = "Normal";
        } else if (ans <= 39.9) {
            result = "Overweight";
        } else if (ans >= 40) {
            result = "Obese";
        } else {
            result = "Invalid";
        }

        document.getElementById("bmi_calc_ans").innerHTML = "<hr>The BMI value is " + ans.toFixed(2) + ",<br>You are " + result + ".";

    }


    //leap year checker
    function validateYear(event) {
        event.preventDefault(); // Prevent the form from being submitted
    
        let yearInput = document.getElementById("year");
        let year = parseInt(yearInput.value);
    
        if (year < 1000 || year > 9999 || isNaN(year)) {
            alert("Please input a year between 1000 and 9999.");
            return false; // Prevent form submission
        }
    
        isLeapYear(year); // Call isLeapYear function after validation
        return false; // Prevent form submission (optional, depending on your requirements)
    }
    
    function isLeapYear(year) {
        if ((year % 4 === 0 && year % 100 !== 0) || year % 400 === 0) {
            document.getElementById("leap_year_ans").innerHTML = "<hr>" + year + " is a leap year.";
        } else {
            document.getElementById("leap_year_ans").innerHTML = "<hr>" + year + " is not a leap year.";
        }
    }
    
    //length converter
    function convertLength() {
        let input1 = document.getElementById("length1");
        let input2 = document.getElementById("length2");
        let select = document.getElementById("length_select");
        
        let conversion = select.value;
        
        let value = parseFloat(input1.value);
        
        switch(conversion) {
            case "cm to inches":
                input2.value = (value / 2.54).toFixed(2);
                break;
            case "inches to cm":
                input2.value = (value * 2.54).toFixed(2);
                break;
            case "mm to inches":
                input2.value = (value / 25.4).toFixed(2);
                break;
            case "inches to mm":
                input2.value = (value * 25.4).toFixed(2);
                break;
            case "m to feet":
                input2.value = (value * 3.281).toFixed(2);
                break;
            case "feet to m":
                input2.value = (value / 3.281).toFixed(2);
                break;
            case "km to miles":
                input2.value = (value * 0.6214).toFixed(2);
                break;
            case "miles to km":
                input2.value = (value / 0.6214).toFixed(2);
                break;
            case "cm to feet":
                input2.value = (value / 30.48).toFixed(2);
                break;
            case "feet to cm":
                input2.value = (value * 30.48).toFixed(2);
                break;
            case "cm to m":
                input2.value = (value / 100).toFixed(2);
                break;
            case "m to cm":
                input2.value = (value * 100).toFixed(2);
                break;
            case "cm to km":
                input2.value = (value / 100000).toFixed(2);
                break;
            case "km to cm":
                input2.value = (value * 100000).toFixed(2);
                break;
            default:
                // If no conversion selected, clear second input
                input2.value = "";
                break;
        }
    }

    //area converter
    function convertArea() {
        let input1 = document.getElementById("area1");
        let input2 = document.getElementById("area2");
        let select = document.getElementById("area_select");
        
        let conversion = select.value;
        
        let value = parseFloat(input1.value);
        
        switch(conversion) {
            case "acresToSquareFeet":
                input2.value = (value * 43560).toFixed(2);
                break;
            case "squareFeetToAcres":
                input2.value = (value / 43560).toFixed(2);
                break;
            case "hectareToAcres":
                input2.value = (value * 2.4711).toFixed(2);
                break;
            case "acresToHectare":
                input2.value = (value / 2.4711).toFixed(2);
                break;
            case "squareFeetToSquareMeter":
                input2.value = (value / 10.764).toFixed(2);
                break;
            case "squareMeterToSquareFeet":
                input2.value = (value * 10.764).toFixed(2);
                break;
            case "acresToSquareMiles":
                input2.value = (value * 0.0015625).toFixed(2);
                break;
            case "squareMilesToAcres":
                input2.value = (value / 0.0015625).toFixed(2);
                break;
            case "squareFeetToSquareYards":
                input2.value = (value / 9).toFixed(2);
                break;
            case "squareYardsToSquareFeet":
                input2.value = (value * 9).toFixed(2);
                break;
            default:
                input2.value = "";
        }
    }

    //currency converter
    function convertCurrency() {
        let input1 = document.getElementById("currency1");
        let input2 = document.getElementById("currency2");
        let select = document.getElementById("currency_select");

        let conversion = select.value;
        
        let value = parseFloat(input1.value);

        const exchangeRates = {
            "SGD_to_USD": 0.74,
            "USD_to_SGD": 1.35,
            "SGD_to_EUR": 0.69,
            "EUR_to_SGD": 1.46,
            "SGD_to_JPY": 112.29,
            "JPY_to_SGD": 0.0089,
            "SGD_to_AUD": 1.13,
            "AUD_to_SGD": 0.89,
            "SGD_to_CAD": 1.01,
            "CAD_to_SGD": 0.99,
            "SGD_to_CNY": 5.35,
            "CNY_to_SGD": 0.19,
            "SGD_to_MYR": 3.52,
            "MYR_to_SGD": 0.28,
            "SGD_to_KRW": 1003.2, 
            "KRW_to_SGD": 0.0010
        };

        if (conversion in exchangeRates) {
            let rate = exchangeRates[conversion];
            input2.value = (value * rate).toFixed(2);
        } else {
            input2.value = "";
        }
    }

   


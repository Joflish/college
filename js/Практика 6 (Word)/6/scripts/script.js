let day = 15;

if (day >= 1 && day <= 10) {
    console.log("Число попадает в первую декаду");
} else if (day >= 11 && day <= 20) {
    console.log("Число попадает во вторую декаду");
} else if (day >= 21 && day <= 31) {
    console.log("Число попадает в третью декаду");
} else {
    console.log("Некорректное число");
}

let firstNumber = Number(prompt("Введите первое число"));
let secondNumber = Number(prompt("Введите второе число"));

if (firstNumber > secondNumber) {
    alert(`${firstNumber * 2}`);
} else if (firstNumber < secondNumber){
    alert(`${secondNumber + 10} `)
} else {
    alert("Числа равны")
}
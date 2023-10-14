let firstNumber = Number(prompt("Введите первое число"));
let secondNumber = Number(prompt("Введите второе число"));

let result = (firstNumber === secondNumber) ? alert('Числа равны') : ((firstNumber > secondNumber) ? alert(`${firstNumber * 2}`) :  alert(`${secondNumber + 10} `))
let firstNumber = prompt("Введите первое число");
let secondNumber = prompt("Введите второе число");

alert(`
${firstNumber} > ${secondNumber} ${firstNumber > secondNumber} 
${firstNumber} < ${secondNumber} ${firstNumber < secondNumber}
${firstNumber} == ${secondNumber} ${firstNumber == secondNumber}
${firstNumber} != ${secondNumber} ${firstNumber != secondNumber}
${firstNumber} >= ${secondNumber} ${firstNumber >= secondNumber}
${firstNumber} <= ${secondNumber} ${firstNumber <= secondNumber}
`);
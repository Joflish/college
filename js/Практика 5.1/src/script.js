let login = prompt("Введите логин");

if (login = "Админ") {
    let password = prompt("Введите пароль");
        if (password = "Я главный") {
            alert("Здравствуйте")
        } else if (password !== "Я главный") {
            alert("Неверный пароль")
        } else {
            alert("Отменено")
        }
} else { 
    alert("Неверный логин")
}
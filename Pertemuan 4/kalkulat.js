const kalkulator = (operator, ...angka) => {
    if (angka.length === 0) return "Masukkan angka!";

    switch (operator) {
        case "+":
            return angka.reduce((total, num) => total + num, 0);
        case "-":
            return angka.reduce((total, num) => total - num);
        case "*":
            return angka.reduce((total, num) => total * num, 1);
        case "/":
            return angka.reduce((total, num) => (num !== 0 ? total / num : "Error: Pembagian dengan 0"));
        case "%":
            return angka.reduce((total, num) => total % num);
        default:
            return "Operator tidak valid! Gunakan +, -, *, /, atau %";
    }
};

console.log(kalkulator("+", 10, 5, 3));  
console.log(kalkulator("-", 20, 5, 2));  
console.log(kalkulator("*", 2, 3, 4));   
console.log(kalkulator("/", 100, 2, 5)); 
console.log(kalkulator("%", 10, 3));     
